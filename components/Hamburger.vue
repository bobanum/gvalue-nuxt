<template>
    <svg width="48" height="48" version="1.1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
        <g fill="white">
            <path d="m6 21h36v6h-36z" transform-origin="24 24">
                <!-- <animateTransform id="step1" attributeName="transform" attributeType="XML" begin="backdrop.click" dur="0.3s" from="1 1" to="0 1" type="scale" fill="freeze" /> -->

            </path>
            <path d="m6 6h36v6h-36z" transform-origin="24 9">
                <!-- <animateTransform dur="0.3s" begin="step1.begin" attributeName="transform" attributeType="XML" from="0 0" to="0 15" type="translate" fill="freeze" calcMode="spline" keySplines=".5 0 0 1" keyTimes="0; 1" /> -->
                <!-- <animateTransform dur="0.3s" begin="step1.end" attributeName="transform" attributeType="XML" from="0" to="-45" type="rotate" fill="freeze" additive="sum" calcMode="spline" keySplines="1 0 0 1" keyTimes="0; 1" /> -->
            </path>
            <path d="m6 36h36v6h-36z" transform-origin="24 39">
                <!-- <animateTransform dur="0.3s" begin="step1.begin" attributeName="transform" attributeType="XML" from="0 0"  to="0 -15" type="translate" fill="freeze" calcMode="spline" keySplines=".5 0 0 1" keyTimes="0; 1" /> -->
                <!-- <animateTransform dur="0.3s" begin="step1.end" attributeName="transform" attributeType="XML" from="0"  to="45" type="rotate" fill="freeze" additive="sum" calcMode="spline" keySplines="1 0 0.5 1" keyTimes="0; 1" /> -->
            </path>
            <rect id="backdrop" width="100%" height="100%" fill-opacity="0" />
        </g>
    </svg>
</template>
 