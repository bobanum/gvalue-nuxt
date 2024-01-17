#!/bin/bash

nuxt_port=8000
api_port=8001

while [[ $# -gt 0 ]]; do
    arg="$1"
    case $arg in
        -p*)
            api_port="${arg:2}"
            if [[ -z "$api_port" ]]; then
                shift
                api_port="$1"
            fi
            shift
            ;;
        -v*)
            nuxt_port="${arg:2}"
            if [[ -z "$nuxt_port" ]]; then
                shift
                nuxt_port="$1"
            fi
            shift
            ;;
        *)
            echo "Unknown argument: $arg"
            shift
            ;;
    esac
done

# Start Nuxt
npm run dev -- -o --port $nuxt_port &

# Start PHP
php -S localhost:"$api_port" -t public &
