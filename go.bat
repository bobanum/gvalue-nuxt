@echo off
setlocal enableDelayedExpansion

set nuxt_port=8000
set api_port=8888

:loop
if "%~1" == "" (
    goto start_services
) else (
    set arg=%~1
    if /I "!arg:~0,2!" == "-p" (
        set "api_port=!arg:~2!"
        if "!api_port!" == "" (
            set "api_port=%~2"
            shift
        )
        shift
        goto loop
    )
    if /I "!arg:~0,2!" == "-v" (
        set "nuxt_port=!arg:~2!"
        if "!nuxt_port!" == "" (
            set "nuxt_port=%~2"
            shift
        )
        shift
        goto loop
    )
    echo Unknown argument: !arg!
    shift
    goto loop
)

:start_services
@start "Nuxt" npm run dev -- -o --port=%nuxt_port% || @echo Starting Nuxt failed
@start "PHP" php -S localhost:%api_port% -t public || @echo Starting PHP failed
