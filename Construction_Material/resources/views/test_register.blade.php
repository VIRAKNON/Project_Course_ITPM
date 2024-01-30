<?php
include '../resources/views/root/header.blade.php';
?>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    .logo{
        width: 195px;
        height: 60px;
    }
    .btnRegister{

    }
    input::placeholder {
        color: #939393;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%;
    }
    label{
        color: var(--text-secondary, #5A5A5D);
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%; /* 16px */
        text-transform: capitalize;
    }
    .register{
        color: #393F42;
        font-family: 'PT Sans', sans-serif;
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .btnRegister{
        width: 335px;
        height: 52px;
        color: #FFF;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }
    .custom-input {
        padding-top: 10px; /* Add padding to the top */
        padding-bottom: 10px; /* Add padding to the bottom */
}
</style>
</head>
<body style="background-color:#F0F2F5">
    <div class="container mt-4 w-50">
        <div class="row">
            {{-- logo --}}
            <div class="col-xl-12 d-flex justify-content-center">
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 307.22 94.38"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#0c2654;}.cls-3{fill:#c4c4c4;}.cls-4{fill:#e00025;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="81.32 94.38 16.38 94.38 16.38 22.61 29.19 9.8 35.88 15.39 49.62 2.75 62.86 15.89 68.18 9.97 81.32 22.61 81.32 94.38"/><polygon class="cls-1" points="19.18 25.1 12.19 23.1 13.71 24.47 13.66 27.63 0 23.05 12.4 35.35 1.74 32.6 13.21 42.17 5.21 40.09 16.52 50.5 19.18 25.1"/><polygon class="cls-2" points="83.93 90.45 83.93 21.35 68.44 6.38 62.39 12.95 49.07 0 36.23 12.98 29.76 6.41 14.34 21.36 14.34 90.45 1.52 90.45 1.52 94.38 18.26 94.38 18.26 23.02 29.69 11.94 33.47 15.77 27.91 21.38 27.91 46.87 31.84 46.87 31.84 23 36.22 18.57 38.98 15.78 49.07 5.53 59.62 15.74 62.44 18.48 66.51 22.93 66.51 46.87 70.44 46.87 70.44 21.28 65.21 15.69 68.51 11.88 80 23.03 80 94.38 96.85 94.38 96.85 90.45 83.93 90.45"/><path class="cls-3" d="M11.61,36.84l-6-2.31L11.11,39A8,8,0,0,1,11.61,36.84Z"/><path class="cls-3" d="M14.74,45l-4.82-2.2,4.52,4.11A4.29,4.29,0,0,1,14.74,45Z"/><path class="cls-3" d="M27.31,56.79,24,55.89l4,3A4.77,4.77,0,0,1,27.31,56.79Z"/><path class="cls-3" d="M11,28.39,3.12,25l7,5.82A8.24,8.24,0,0,1,11,28.39Z"/><path class="cls-1" d="M18.69,28.68l-8.92-7L21,26.12l-.44.48a7.16,7.16,0,0,0-1.13,1.87l-.23.62Z"/><path class="cls-3" d="M18.55,27.73,13.5,23.78l6.28,2.6-.24.26a3.64,3.64,0,0,0-.59,1l-.13.33Z"/><path class="cls-3" d="M56.19,28.21,51,25.5l4.62,5A4.66,4.66,0,0,1,56.19,28.21Z"/><path class="cls-3" d="M56.42,34.05l-3.91-2L56,36A4.62,4.62,0,0,1,56.42,34.05Z"/><path class="cls-3" d="M57.85,39.72l-3.41-1.81,3,3.41A4.35,4.35,0,0,1,57.85,39.72Z"/><path class="cls-3" d="M57.71,22.56l-6.52-3.31,5.62,5.62C56.59,24.81,56.85,23.33,57.71,22.56Z"/><path class="cls-3" d="M62.31,20.28l-5.12-2.4L61.38,22A3.4,3.4,0,0,1,62.31,20.28Z"/><polygon class="cls-1" points="76.43 53.24 79.15 53.86 79.67 54.88 78.12 54.9 76.43 53.24"/><path class="cls-1"d="M39.87,94a3.83,3.83,0,0,1-3.39-1.63A4,4,0,0,1,35.92,91l-.2.09a11.25,11.25,0,0,1-4.2.92,6.75,6.75,0,0,1-5.47-2.64,8.31,8.31,0,0,1-1.4-2.61L24.44,86l4-1.6a5.74,5.74,0,0,1-3-2.28,8.51,8.51,0,0,1-1.18-2.44l-.23-.88,23.56-4.58L47.49,74a1.94,1.94,0,0,1,.08-1.48A3.1,3.1,0,0,1,46,71.13,9.82,9.82,0,0,1,45,68.46a10.6,10.6,0,0,0-.48-1.62s-.18-.36-1.69-.83c-1.1-.34-2.53-.64-4-1A28.47,28.47,0,0,1,31.77,63a8.94,8.94,0,0,1-4.47-5.93l-.14-.83c-2.72-1-5.31-2-7.38-2.87-2.68-1.14-4.39-2.67-5.1-4.54a5.21,5.21,0,0,1,0-3.76l-.28-.13a5.45,5.45,0,0,1-3.38-5,8,8,0,0,1,.58-3.08l.18-.42a4.54,4.54,0,0,1-1.88-2.62c-.71-2.58.85-5.34.92-5.46l.41-.71,8.4,4.52a4.48,4.48,0,0,1-1-2.56,5.61,5.61,0,0,1,1.31-3.78l.44-.5.58.31c.06,0,5.41,2.77,11.1,6,7.7,4.32,12.34,7.35,13.78,9,2.72,3.14,10.07,9.3,12.47,11.29A23.19,23.19,0,0,1,62.21,47c-.66-.43-1.39-.86-2.11-1.28a5,5,0,0,1-2.52-6.16c-.55-.54-2-1.32-1.87-3.32a14.34,14.34,0,0,1,.41-2.52l.08-.23A3.85,3.85,0,0,1,55.49,30a6.32,6.32,0,0,1,.85-2l.45-.66a3.93,3.93,0,0,1-.11-3.21,5.64,5.64,0,0,1,1.14-1.81l.48-.48,3,1.9a2.86,2.86,0,0,1-.1-.77,4.3,4.3,0,0,1,1.4-3l.43-.37.51.26c.71.36,17.41,8.84,21.36,12a3.91,3.91,0,0,1,1.68,2.93c.07,2.37-2.36,4.57-4.93,6.9-.64.58-1.3,1.18-1.91,1.77-3.44,4-4.68,6.95-5.12,8.7a6.27,6.27,0,0,0-.17,2.64L80.88,60l-.68.72a2.83,2.83,0,0,0-2.35,2,8.58,8.58,0,0,1-1.34,2.14c-.25.3-.5.56-.73.8a6.61,6.61,0,0,0-.61.71c-.42,1.18.09,1.89.87,2.76a2.74,2.74,0,0,1,.74,1.17,9.93,9.93,0,0,0,1.41,1.76l0,0A4.12,4.12,0,0,0,79,71.3a2.57,2.57,0,0,1,1.33-1.46A2.23,2.23,0,0,1,82,69c2,0,1.23,2.21,1.23,2.21s-.3-.54-.59-.64-.31.3-.31.31a1.91,1.91,0,0,1,.26,1.48,2.42,2.42,0,0,1-.37.83A4,4,0,0,0,83.73,72a5,5,0,0,1,1.2-1.25c.53-1.26,1.24-1.85,2.09-1.89,1.34-.06,1.63,2.19,1.63,2.19a1.77,1.77,0,0,0-.85-.43c-.36,0-.37.38-.38.4a2.08,2.08,0,0,1,.49,1.17,2.2,2.2,0,0,1-.55,1.66.66.66,0,0,0-.21.27.82.82,0,0,0,.1.73,1.36,1.36,0,0,1-.13,1.42s.26.08.73-.43a2.49,2.49,0,0,0,.29-.5,5.38,5.38,0,0,1,.34,1.44,1.86,1.86,0,0,1-1.89,2h0c-1.06,0-2.08-1.3-2.41-1.79A8.74,8.74,0,0,1,84,78.19a1.76,1.76,0,0,1-1.68,1.2,3.57,3.57,0,0,1-2.1-.87,3.42,3.42,0,0,0-2.31-.94,12.08,12.08,0,0,0-3.79.88,13.74,13.74,0,0,1-4.62.91,23,23,0,0,1-4.08-.51c-.83-.15-1.76-.32-2.86-.49a2.56,2.56,0,0,0-.39,0c-2.37,0-5.2,3.07-8.19,6.31s-5.86,6.35-9.27,8A11.69,11.69,0,0,1,39.87,94ZM82.63,76.67c0,.11,0,.23,0,.34a.52.52,0,0,0,0,.11c-.06.31.28.43.57.35a5.43,5.43,0,0,0,1-.47s-.12-.51-.42-.51a1.2,1.2,0,0,0-.31,0A6.17,6.17,0,0,1,82.63,76.67Z"/><path class="cls-4" d="M73.69,55.29S72,51.16,79.1,42.88c3.71-3.63,9.18-7.23,5.25-10.35s-21.21-11.9-21.21-11.9a2.91,2.91,0,0,0,.24,4.7c3.71,3,11.51,7.46,14,9.69L58.42,22.93s-2.41,2.43-.34,4.84c1.63,1.91,6.54,5.35,14.84,11L57,28.49s-2,3,.24,4.84c1.89,1.56,8.23,5.44,13,8.35L56.91,34s-1.18,3.1.54,4.26c2.73,1.83,7.86,5.36,9.31,6.55l-8.5-5A3.94,3.94,0,0,0,59.32,44c1.19,1,2.52,1.58,4.27,2.92a21,21,0,0,0-5.08,6.25s-10-8.17-13.34-12S20.55,26.33,20.55,26.33s-2.82,3.2.52,6,15.59,9.56,16.6,10.45L11.57,28.73s-2.84,4.95,1.1,7.2S38.06,48.08,38.78,49.12l-26.38-12s-2.14,4.92,2.38,7S38.33,54.1,37.4,54.09c-1.17,0-21.9-8.75-21.9-8.75s-2.1,4.38,4.61,7.24,19.29,7,22.35,8.6c0,0-11.14-4.15-14.33-4.26a8.11,8.11,0,0,0,4.05,5.32c3.5,1.95,12.3,2.34,13.16,4.25s.67,5.73,3.75,5.32c0,0-3.11,3,2.47,2.52L25.1,79.47s1.41,5.3,6.26,4.18,20.32-7.56,20.32-7.56L25.47,86.52s2,7,9.93,3.77c8.69-3.57,16.84-11.55,16.84-11.55A71.24,71.24,0,0,1,36.71,90.6s.39,4.69,7.62,1.25S57.4,76.74,62.67,77.53s6.73,1.69,11.14.13,5.44-.91,6.89.18,2.2.79,2.79-.08c0,0-2.06.86-1.75-.9s-.27-2.49-.85-2.94,2.07-1.59.33-3.08c0,0,.9-1.45,1.77-.56,0,0-.72-1.48-2.21.26a1.73,1.73,0,0,0-1,1.06c-.31.84-3.56,3.44-5.33,3.72S68,71,67.88,70.55s.16-1.46,2.91,1.65S79,75.8,79,75.8a14.45,14.45,0,0,0,4.25-.1A1.45,1.45,0,0,1,85.11,77a1.47,1.47,0,0,0,1.46.9,1.16,1.16,0,0,0,1.19-1.16s-1.34,1.31-1.76,0a1.21,1.21,0,0,0,.45-1.61c-.42-1.18,0-1.61.32-1.9a1.3,1.3,0,0,0-.28-1.91s.17-1.9,1.34-1.16c0,0-1.16-1.6-2.22,1.15a3.51,3.51,0,0,0-1.18,1.16,4.54,4.54,0,0,1-2.81,1.73c-.73,0-2.93-.18-3.36-.77s-2.18-2.22-2.32-3-2.47-1.93-1.56-4.41a12.17,12.17,0,0,1,1.48-1.75,7.82,7.82,0,0,0,1.2-1.89c.45-1.17,1.57-2.48,3.29-1.8Z"/><pathclass="cls-4" d="M70.8,72.2C73.56,75.31,79,75.81,79,75.81a14.45,14.45,0,0,0,4.25-.1,1.45,1.45,0,0,1,1.89,1.34,1.49,1.49,0,0,0,1.46.9,1.15,1.15,0,0,0,1.18-1.16s-1.33,1.3-1.75,0a1.21,1.21,0,0,0,.45-1.61c-.42-1.18,0-1.61.32-1.9a1.3,1.3,0,0,0-.28-1.91s.17-1.91,1.34-1.16c0,0-1.16-1.61-2.22,1.15a3.38,3.38,0,0,0-1.18,1.16,4.59,4.59,0,0,1-2.81,1.73c-.73,0-2.93-.18-3.36-.77s-2.18-2.23-2.32-3"/><path class="cls-4" d="M62.67,77.53c5.27.79,6.73,1.69,11.14.13s5.44-.91,6.89.18,2.2.79,2.79-.08c0,0-2.06.86-1.75-.9s-.27-2.49-.85-2.94,2.07-1.59.33-3.08c0,0,.9-1.45,1.77-.56,0,0-.72-1.48-2.21.26a1.73,1.73,0,0,0-1,1.06c-.31.84-3.56,3.44-5.33,3.72S68,71,67.88,70.55"/><path class="cls-1" d="M73.69,64.52a4.42,4.42,0,0,1-2.42-1l-.52-.43a4.34,4.34,0,0,1-.6-.14,4.87,4.87,0,0,1-2-1.57l-.39-.53h-.07c-1.9-.36-3.11-2.75-3.24-3l-.5-1,1.78-.27-.24-.27a6.39,6.39,0,0,1-.72-1.07l-.48-.92,1-.29c.06,0,1.52-.44,2.17-.61,2-.54,3.41-.81,3.47-.82H71c1-.12,3.08-.47,3.3-.51a10.84,10.84,0,0,1,2.25-.21,13.19,13.19,0,0,1,4.37.73,6.67,6.67,0,0,1,4.32,3.91,3.34,3.34,0,0,1,.81.79l0,0,0,0a5.17,5.17,0,0,1,.92,4,1.89,1.89,0,0,1-1.74,1.45c-.51,0-1.75,0-1.75,0l.82-.65-.28-.17a11.05,11.05,0,0,0-1.56-.79A7.23,7.23,0,0,0,80,60.69a6.44,6.44,0,0,0-.77,0h-.11a4.08,4.08,0,0,0-1.42,1c-.53.49-1,1-1.06,1.06a6.82,6.82,0,0,1-2,1.5,1.81,1.81,0,0,1-.89.22Z"/><path class="cls-4" d="M76,62.24s2.13-2.36,3.12-2.35a8.52,8.52,0,0,1,3.78.46c1.82.72,2.37,1.57,2.66,1a.61.61,0,0,1-.2.51,3.51,3.51,0,0,1-1,.63s4.74.25,1.1-4.79a2.4,2.4,0,0,0-.84-.71,5.59,5.59,0,0,0-3.89-3.69,12.09,12.09,0,0,0-6.17-.49s-2.25.4-3.37.53c0,0-1.41.26-3.41.8-.65.17-2.15.61-2.15.61s1,1.83,2.08,1.85l2.81,0-5.2.78s1.09,2.26,2.64,2.56a10.26,10.26,0,0,0,4.77-.23l-3.8,1.08a4.28,4.28,0,0,0,1.53,1.28c1.82.58,3.52-.66,4.08-.94l-2.68,1.66s1.48,1.21,2.37.73A6.09,6.09,0,0,0,76,62.24Z"/><path class="cls-1" d="M80.84,58.43a6,6,0,0,1,4.46,2.44A8.51,8.51,0,0,0,80.84,58.43Z"/><polygon class="cls-1" points="79.36 55.14 81.75 55.68 82.21 56.58 80.85 56.59 79.36 55.14"/><path class="cls-1" d="M74.42,75.32A9,9,0,0,0,79,72.51H77.81S75,75.41,73.12,74Z"/><path class="cls-1" d="M82.25,73.17s-.64.5-.39.74,1,.61.77,2.76l-.89.19s.48-2-.85-2.94Z"/><path class="cls-2" d="M100.33,73.92a4.73,4.73,0,0,1,4.93-4.79,4.57,4.57,0,0,1,3.45,1.37l-.63.64A3.71,3.71,0,0,0,105.29,70a3.9,3.9,0,1,0,0,7.8,3.68,3.68,0,0,0,2.79-1.13l.63.64a4.59,4.59,0,0,1-3.46,1.38A4.72,4.72,0,0,1,100.33,73.92Z"/><path class="cls-2" d="M109.61,75.09a3.6,3.6,0,1,1,3.61,3.61A3.48,3.48,0,0,1,109.61,75.09Zm6.23,0a2.63,2.63,0,1,0-2.62,2.76A2.59,2.59,0,0,0,115.84,75.09Z"/><path class="cls-2" d="M125.27,74.53v4.1h-1v-4a2,2,0,0,0-2.12-2.26,2.32,2.32,0,0,0-2.48,2.56v3.71h-.95V71.55h.91v1.31a3,3,0,0,1,2.69-1.36A2.71,2.71,0,0,1,125.27,74.53Z"/><path class="cls-2" d="M126.88,77.82l.43-.75a4.32,4.32,0,0,0,2.52.79c1.34,0,1.9-.45,1.9-1.15,0-1.85-4.59-.39-4.59-3.19,0-1.16,1-2,2.8-2a4.74,4.74,0,0,1,2.5.66l-.42.77a3.64,3.64,0,0,0-2.08-.61c-1.28,0-1.85.5-1.85,1.17,0,1.91,4.59.47,4.59,3.19,0,1.23-1.07,2-2.92,2A4.72,4.72,0,0,1,126.88,77.82Z"/><path class="cls-2" d="M138.17,78.2a2.26,2.26,0,0,1-1.49.5,1.88,1.88,0,0,1-2.08-2.06V72.36h-1.26v-.81h1.26V70h1v1.55h2.15v.81h-2.15v4.23a1.13,1.13,0,0,0,1.22,1.29,1.55,1.55,0,0,0,1.05-.37Z"/><path class="cls-2" d="M143.47,71.5v.93l-.23,0A2.29,2.29,0,0,0,140.86,75v3.61h-1V71.55h.92v1.39A2.66,2.66,0,0,1,143.47,71.5Z"/><path class="cls-2" d="M151.68,71.55v7.08h-.92V77.34a2.82,2.82,0,0,1-2.54,1.36,2.75,2.75,0,0,1-3-3V71.55h1v4c0,1.51.78,2.28,2.12,2.28a2.3,2.3,0,0,0,2.41-2.57V71.55Z"/><path class="cls-2" d="M153.64,75.09a3.48,3.48,0,0,1,3.65-3.59,3.1,3.1,0,0,1,2.77,1.4l-.72.48a2.39,2.39,0,0,0-2.05-1,2.76,2.76,0,0,0,0,5.52,2.36,2.36,0,0,0,2.05-1l.72.49a3.14,3.14,0,0,1-2.77,1.4A3.49,3.49,0,0,1,153.64,75.09Z"/><path class="cls-2" d="M165.73,78.2a2.24,2.24,0,0,1-1.49.5,1.87,1.87,0,0,1-2.07-2.06V72.36H160.9v-.81h1.27V70h1v1.55h2.16v.81h-2.16v4.23a1.14,1.14,0,0,0,1.23,1.29,1.55,1.55,0,0,0,1.05-.37Z"/><path class="cls-2" d="M167.25,69.32a.69.69,0,0,1,.7-.67A.68.68,0,1,1,168,70,.69.69,0,0,1,167.25,69.32Zm.22,2.23h.95v7.08h-.95Z"/><path class="cls-2"d="M170.37,75.09A3.6,3.6,0,1,1,174,78.7,3.48,3.48,0,0,1,170.37,75.09Zm6.23,0A2.63,2.63,0,1,0,174,77.85,2.58,2.58,0,0,0,176.6,75.09Z"/><path class="cls-2" d="M186,74.53v4.1h-1v-4A2,2,0,0,0,183,72.36a2.32,2.32,0,0,0-2.47,2.56v3.71h-1V71.55h.92v1.31a3,3,0,0,1,2.69-1.36A2.72,2.72,0,0,1,186,74.53Z"/><path class="cls-2" d="M202.14,69.21v9.42h-1V71.1l-3.7,6.33H197l-3.7-6.29v7.49h-.95V69.21h.82l4.09,7,4-7Z"/><path class="cls-2" d="M210.34,74.24v4.39h-.91v-1.1A2.68,2.68,0,0,1,207,78.7c-1.6,0-2.58-.84-2.58-2.06s.7-2,2.73-2h2.25V74.2c0-1.21-.69-1.87-2-1.87a3.62,3.62,0,0,0-2.35.84l-.43-.72a4.51,4.51,0,0,1,2.88-1C209.31,71.5,210.34,72.41,210.34,74.24Zm-1,2.27V75.35h-2.22c-1.37,0-1.82.54-1.82,1.26S206,78,207.14,78A2.28,2.28,0,0,0,209.39,76.51Z"/><path class="cls-2" d="M216.67,78.2a2.28,2.28,0,0,1-1.5.5,1.87,1.87,0,0,1-2.07-2.06V72.36h-1.27v-.81h1.27V70h1v1.55h2.15v.81h-2.15v4.23a1.13,1.13,0,0,0,1.22,1.29,1.55,1.55,0,0,0,1.05-.37Z"/><path class="cls-2" d="M224.31,75.39h-5.92a2.61,2.61,0,0,0,2.78,2.46,2.8,2.8,0,0,0,2.17-.93l.54.62a3.47,3.47,0,0,1-2.73,1.16,3.51,3.51,0,0,1-3.72-3.61,3.41,3.41,0,0,1,3.46-3.59,3.37,3.37,0,0,1,3.43,3.59C224.32,75.17,224.31,75.28,224.31,75.39Zm-5.92-.71h5a2.51,2.51,0,0,0-5,0Z"/><path class="cls-2" d="M229.84,71.5v.93l-.23,0A2.29,2.29,0,0,0,227.23,75v3.61h-1V71.55h.92v1.39A2.66,2.66,0,0,1,229.84,71.5Z"/><path class="cls-2" d="M231.34,69.32a.69.69,0,0,1,.7-.67A.68.68,0,1,1,232,70,.69.69,0,0,1,231.34,69.32Zm.22,2.23h.95v7.08h-.95Z"/><path class="cls-2" d="M240.52,74.24v4.39h-.92v-1.1a2.66,2.66,0,0,1-2.43,1.17c-1.6,0-2.59-.84-2.59-2.06s.7-2,2.74-2h2.24V74.2c0-1.21-.68-1.87-2-1.87a3.62,3.62,0,0,0-2.36.84l-.43-.72a4.55,4.55,0,0,1,2.88-1C239.48,71.5,240.52,72.41,240.52,74.24Zm-1,2.27V75.35h-2.22c-1.37,0-1.81.54-1.81,1.26s.65,1.34,1.79,1.34A2.27,2.27,0,0,0,239.56,76.51Z"/><path class="cls-2" d="M243.11,68.65h1v10h-1Z"/><path class="cls-2" d="M257.83,72.44c0,2-1.45,3.22-3.85,3.22h-2.53v3h-1V69.21H254C256.38,69.21,257.83,70.42,257.83,72.44Zm-1,0c0-1.51-1-2.37-2.88-2.37h-2.51v4.71H254C255.84,74.78,256.84,73.92,256.84,72.44Z"/><path class="cls-2" d="M259.92,68.65h.95v10h-.95Z"/><path class="cls-2" d="M268.88,74.24v4.39H268v-1.1a2.66,2.66,0,0,1-2.43,1.17c-1.61,0-2.59-.84-2.59-2.06s.7-2,2.73-2h2.25V74.2c0-1.21-.69-1.87-2-1.87a3.62,3.62,0,0,0-2.36.84l-.43-.72a4.51,4.51,0,0,1,2.88-1C267.84,71.5,268.88,72.41,268.88,74.24Zm-1,2.27V75.35H265.7c-1.37,0-1.82.54-1.82,1.26s.66,1.34,1.79,1.34A2.28,2.28,0,0,0,267.92,76.51Z"/><path class="cls-2" d="M275.2,78.2a2.27,2.27,0,0,1-1.5.5,1.87,1.87,0,0,1-2.07-2.06V72.36h-1.26v-.81h1.26V70h1v1.55h2.15v.81h-2.15v4.23a1.13,1.13,0,0,0,1.22,1.29,1.55,1.55,0,0,0,1.05-.37Z"/><path class="cls-2" d="M278,70.72v.83h2.18v.81h-2.15v6.27h-1V72.36h-1.26v-.81h1.26v-.87a2,2,0,0,1,2.14-2.1,2.29,2.29,0,0,1,1.42.44l-.33.72a1.58,1.58,0,0,0-1.05-.35C278.45,69.39,278,69.84,278,70.72Z"/><path class="cls-2" d="M280.66,75.09a3.6,3.6,0,1,1,3.61,3.61A3.48,3.48,0,0,1,280.66,75.09Zm6.23,0a2.63,2.63,0,1,0-2.62,2.76A2.59,2.59,0,0,0,286.89,75.09Z"/><path class="cls-2" d="M293.37,71.5v.93l-.23,0A2.29,2.29,0,0,0,290.76,75v3.61h-.95V71.55h.91v1.39A2.68,2.68,0,0,1,293.37,71.5Z"/><path class="cls-2" d="M306.78,74.53v4.1h-1v-4c0-1.49-.75-2.26-2-2.26a2.27,2.27,0,0,0-2.37,2.56v3.71h-1v-4c0-1.49-.75-2.26-2-2.26a2.28,2.28,0,0,0-2.37,2.56v3.71h-1V71.55H296v1.29a2.87,2.87,0,0,1,2.6-1.34A2.54,2.54,0,0,1,301.12,73a3.09,3.09,0,0,1,2.8-1.49C305.65,71.5,306.78,72.5,306.78,74.53Z"/><path class="cls-2" d="M100.56,46.9c0-8,6.12-13.69,14.37-13.69a14.59,14.59,0,0,1,8.61,2.55,2.6,2.6,0,0,1,.25,4l-.15.14a2.61,2.61,0,0,1-3.34.14,8.38,8.38,0,0,0-5.07-1.62,8.12,8.12,0,0,0-8.47,8.47,8.12,8.12,0,0,0,8.47,8.47,8.44,8.44,0,0,0,6.66-3.14l3.93,3.63c-2.5,3.07-6.32,4.73-10.93,4.73C106.68,60.59,100.56,54.88,100.56,46.9Z"/><path class="cls-2" d="M146.85,54.46H134.56l-2.35,5.68h-6.28L136.5,36.43a4.66,4.66,0,0,1,4.26-2.77h0A4.66,4.66,0,0,1,145,36.42l10.6,23.72h-6.43Zm-1.93-4.65-4.2-10.14-4.2,10.14Z"/><path class="cls-2"d="M182.19,60.14l0-15.89-7.08,11.89a2.45,2.45,0,0,1-2.1,1.2h0a2.43,2.43,0,0,1-2.08-1.18l-7-11.57V60.14H158.1V36.9a3.24,3.24,0,0,1,3.24-3.24h0a3.25,3.25,0,0,1,2.77,1.57l9,14.88,8.83-14.88a3.22,3.22,0,0,1,2.76-1.57h0a3.21,3.21,0,0,1,3.21,3.2l.07,23.28Z"/><path class="cls-4" d="M189.59,36.86v1.72h11.56a2.46,2.46,0,1,0,0-4.92l-12.74,0A4.87,4.87,0,0,1,189.59,36.86Z"/><polygon class="cls-4" points="189.64 55.22 189.66 60.14 204.11 60.14 204.11 55.22 189.64 55.22"/><path class="cls-4" d="M202,46.71a2.38,2.38,0,0,0-2.38-2.38h-10l0,4.76h10A2.38,2.38,0,0,0,202,46.71Z"/><path class="cls-2" d="M182.19,60.14l0-15.89-7.08,11.89a2.45,2.45,0,0,1-2.1,1.2h0a2.43,2.43,0,0,1-2.08-1.18l-7-11.57V60.14H158.1V36.9a3.24,3.24,0,0,1,3.24-3.24h0a3.25,3.25,0,0,1,2.77,1.57l9,14.88,8.83-14.88a3.22,3.22,0,0,1,2.76-1.57h0a3.21,3.21,0,0,1,3.21,3.2l.07,23.28Z"/><path class="cls-4" d="M227.28,54.46H215l-2.34,5.68h-6.28l10.56-23.71a4.66,4.66,0,0,1,4.27-2.77h0a4.66,4.66,0,0,1,4.25,2.76l10.61,23.72h-6.43Zm-1.93-4.65-4.19-10.14L217,49.81Z"/><path class="cls-4" d="M257.69,46.48h0a2.8,2.8,0,0,1,2.8,2.8v7.94a18.22,18.22,0,0,1-10.7,3.37c-8.32,0-14.45-5.71-14.45-13.69s6.13-13.69,14.56-13.69a15.33,15.33,0,0,1,8.61,2.38,2.69,2.69,0,0,1,.3,4.2h0a2.7,2.7,0,0,1-3.39.2,8.91,8.91,0,0,0-5.21-1.56c-5.15,0-8.67,3.44-8.67,8.47a8.18,8.18,0,0,0,8.59,8.47,9.8,9.8,0,0,0,4.77-1.13v-5A2.8,2.8,0,0,1,257.69,46.48Z"/><path class="cls-4" d="M266.94,33.66h0A3.06,3.06,0,0,1,270,36.72V55.14h13.28v5H263.87V36.72A3.06,3.06,0,0,1,266.94,33.66Z"/><path class="cls-4" d="M307.22,55.22v4.92h-20.5V33.66h17.55a2.46,2.46,0,0,1,2.45,2.46h0a2.46,2.46,0,0,1-2.45,2.46H292.81v5.75h9.9a2.38,2.38,0,0,1,2.39,2.38h0a2.38,2.38,0,0,1-2.39,2.38h-9.9v6.13Z"/></g></g></svg>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mt-2 ">
                <p class=" text-center register"> &nbsp; Register</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center">
                <p class="text-center w-20">Please enter your Email, Login and your <br> Password</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 rounded-3" style="background-color: #FFFFFF; padding: 30px 30px 5px 30px;
            border-radius: 16px;
            background: #FFFFFF;
            box-shadow:  5px 5px 5px #9d9d9d,
                        -5px -5px 5px #ffffff;
            ">
                <form>
                    <div class="row">
                        <div class="col-xl-6">
                            <label for="">First Name</label>
                            <input type="text" name="" id="" placeholder="Enter your First Name" class="form-control shadow-none mt-2 custom-input" required>
                        </div>
                        <div class="col-xl-6">
                            <label for="">Last Name</label>
                            <input type="text" name="" id="" placeholder="Enter your Last Name" class="form-control shadow-none mt-2  custom-input" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder="Enter your phone number" class="form-control mt-2 custom-input" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Email</label>
                            <input type="email" placeholder="Enter your email" class="form-control mt-2 custom-input " required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <label for="">Address: ( EX: #001, St192 , sangkat teuk la’ork 3 , khan Toul kork , Phnom Penh, Cambodia.)</label><input type="text" placeholder="Enter your address" class="form-control mt-2 custom-input" required >
                        </div>
                    </div>
                    <div class="col-xl-12 mt-3">
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password" name="" id="password" placeholder="Enter your password" class="form-control shadow-none mt-2 custom-input" required>
                            <div class="input-group-append">
                                <button style="line-height: 2.5;" class="btn btn-outline-secondary shadow-none mt-2" type="button" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mt-3">
                        <label for="">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" name="" id="password" placeholder="Confirm password" class="form-control shadow-none mt-2 custom-input" required>
                            <div class="input-group-append">
                                <button  style="line-height: 2.5;" class="btn btn-outline-secondary shadow-none mt-2" type="button" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 d-flex justify-content-center">
                            <input style="border-radius: 10px;
                            background: #F60;" type="submit" value="Register" class="btn btnRegister form-control mt-4 ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 d-flex justify-content-center mt-3">
                            <span style="color: #939393">Already have an Account? &nbsp;</span>
                            <span><a href="" style="text-decoration: none">Login!</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-xl-12">
                <p class="text-center" style="color: #939393; font-size: 15px">© CamEagle. ALL RIGHTS RESERVED.</p>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.querySelector('i').classList.remove('fa-eye');
            this.querySelector('i').classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            this.querySelector('i').classList.remove('fa-eye-slash');
            this.querySelector('i').classList.add('fa-eye');
        }
    });
</script>