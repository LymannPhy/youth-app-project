@extends('front.layouts.app')

@section('main_content')
    <div class="page-top" style="background-image: url('uploads/banner_1726507391.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                    <div class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-content pt_70 pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <style>
                        svg#freepik_stories-fingerprint:not(.animated) .animable {
                            opacity: 0;
                        }

                        svg#freepik_stories-fingerprint.animated #freepik--Fingerprint--inject-111 {
                            animation: 1.5s Infinite linear shake;
                            animation-delay: 0s;
                        }

                        svg#freepik_stories-fingerprint.animated #freepik--Hand--inject-111 {
                            animation: 1.5s Infinite linear floating;
                            animation-delay: 0s;
                        }

                        @keyframes shake {

                            10%,
                            90% {
                                transform: translate3d(-1px, 0, 0);
                            }

                            20%,
                            80% {
                                transform: translate3d(2px, 0, 0);
                            }

                            30%,
                            50%,
                            70% {
                                transform: translate3d(-4px, 0, 0);
                            }

                            40%,
                            60% {
                                transform: translate3d(4px, 0, 0);
                            }
                        }

                        @keyframes floating {
                            0% {
                                opacity: 1;
                                transform: translateY(0px);
                            }

                            50% {
                                transform: translateY(-10px);
                            }

                            100% {
                                opacity: 1;
                                transform: translateY(0px);
                            }
                        }
                    </style>
                    <svg class="animated" id="freepik_stories-fingerprint" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs">
                        <g id="freepik--background-simple--inject-111" class="animable"
                            style="transform-origin: 246.234px 248.585px;">
                            <g id="el0ebn106o4qvu">
                                <path
                                    d="M67.93,167.09s-27.88,72,11.3,144.5S199.11,422.39,263.7,455.14s131.66,16.8,163.53-36.84-11.84-91.93-11.9-168.42,11.45-96.74-30-161.36-143.06-78.93-219.9-31S67.93,167.09,67.93,167.09Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 248.588px 250.609px;"
                                    class="animable" id="el0iamzhe4hjre"></path>
                            </g>
                            <path
                                d="M19.78,280.21a120.38,120.38,0,0,1,6.41-71.42C39,177.17,66.46,154.71,97.24,141.6c44.74-19,88.66-19.41,125-56.74,11.21-11.52,20.63-24.71,32.08-36,33.8-33.26,83.26-29.23,120.19-2.85,77,55,104.76,164,100.47,254.06-1.92,40.43-21.22,78.06-51.77,104.58-69.09,60-186.4,49.9-265.76,18.58C98.31,399.9,33.68,345.43,19.78,280.21Z"
                                style="fill: #407BFF; transform-origin: 246.234px 236.664px;" id="elv7vl8qamrjp"
                                class="animable"></path>
                            <g id="el5idfkbkkh29">
                                <path
                                    d="M19.78,280.21a120.38,120.38,0,0,1,6.41-71.42C39,177.17,66.46,154.71,97.24,141.6c44.74-19,88.66-19.41,125-56.74,11.21-11.52,20.63-24.71,32.08-36,33.8-33.26,83.26-29.23,120.19-2.85,77,55,104.76,164,100.47,254.06-1.92,40.43-21.22,78.06-51.77,104.58-69.09,60-186.4,49.9-265.76,18.58C98.31,399.9,33.68,345.43,19.78,280.21Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 246.234px 236.664px;"
                                    class="animable" id="elw9bilg9obzr"></path>
                            </g>
                        </g>
                        <g id="freepik--Graphics--inject-111" class="animable"
                            style="transform-origin: 242.635px 239.081px;">
                            <line x1="250.94" y1="106.97" x2="250.94" y2="113.61"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.94px 110.29px;"
                                id="eltxovizefkln" class="animable"></line>
                            <line x1="250.94" y1="120.78" x2="250.94" y2="131.53"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; stroke-dasharray: 7.16552, 7.16552; transform-origin: 250.94px 126.155px;"
                                id="el09xubhav4wt" class="animable"></line>
                            <line x1="250.94" y1="135.11" x2="250.94" y2="141.75"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.94px 138.43px;"
                                id="elvxsnj4xepa" class="animable"></line>
                            <line x1="356.91" y1="219.38" x2="350.27" y2="219.38"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 353.59px 219.38px;"
                                id="el75602jdp66j" class="animable"></line>
                            <line x1="343.1" y1="219.38" x2="332.35" y2="219.38"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; stroke-dasharray: 7.16549, 7.16549; transform-origin: 337.725px 219.38px;"
                                id="elfurjfgn5c5" class="animable"></line>
                            <line x1="328.77" y1="219.38" x2="322.13" y2="219.38"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 325.45px 219.38px;"
                                id="elwkrj6ydqds" class="animable"></line>
                            <line x1="179.76" y1="219.38" x2="173.11" y2="219.38"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 176.435px 219.38px;"
                                id="elcwcgphj6py" class="animable"></line>
                            <line x1="165.95" y1="219.38" x2="155.2" y2="219.38"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; stroke-dasharray: 7.16549, 7.16549; transform-origin: 160.575px 219.38px;"
                                id="el5caum20r3ei" class="animable"></line>
                            <line x1="151.62" y1="219.38" x2="144.97" y2="219.38"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 148.295px 219.38px;"
                                id="el1nv8loiovsc" class="animable"></line>
                            <path
                                d="M434,241.9a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 243.81px;" id="elmgawnowcfff"
                                class="animable"></path>
                            <path d="M434.82,251.54a1.14,1.14,0,0,0,1.26-.92h.78V258h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 254.31px;" id="elmkfazh97auk"
                                class="animable"></path>
                            <path
                                d="M434,262.85a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.53-.23-.72-.59-.72s-.6.19-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 264.755px;" id="el8m7h1hhf9g8"
                                class="animable"></path>
                            <path d="M434.82,272.49a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15V273.3h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 275.23px;" id="el6tkioxa2qxh"
                                class="animable"></path>
                            <path
                                d="M434,283.8a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.72.6.72s.59-.19.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 285.705px;" id="el1uh0ys3lo9t"
                                class="animable"></path>
                            <path d="M434.82,293.43a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 296.175px;" id="elnbbgdh3jo3s"
                                class="animable"></path>
                            <path
                                d="M434,304.74a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 306.65px;" id="elvd6f1n4nlla"
                                class="animable"></path>
                            <path
                                d="M434,315.22a1.75,1.75,0,1,1,3.5,0V319a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.72.6.72s.59-.19.59-.72v-4c0-.53-.23-.73-.59-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 317.11px;" id="el4avh29011a6"
                                class="animable"></path>
                            <path
                                d="M434,325.69a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 327.595px;" id="elczd8hk9a9vn"
                                class="animable"></path>
                            <path d="M434.82,345.8a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 348.545px;" id="elyvvj3fki99b"
                                class="animable"></path>
                            <path d="M434.82,356.28a1.13,1.13,0,0,0,1.26-.93h.78v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 359.015px;" id="elnhke6vp0i3"
                                class="animable"></path>
                            <path d="M434.82,366.75a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15v-5.58h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 369.49px;" id="elifvpzhu8ede"
                                class="animable"></path>
                            <path
                                d="M434,378.06a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.72.6.72s.59-.19.59-.72V378c0-.53-.23-.73-.59-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 379.965px;" id="eluwsee7zajjs"
                                class="animable"></path>
                            <path
                                d="M434,388.53a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.75px 390.435px;" id="elebqo4clpc7o"
                                class="animable"></path>
                            <path d="M434.82,398.17a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15V399h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 435.84px 400.91px;" id="eli5oxdbk3khk"
                                class="animable"></path>
                            <path d="M441,230.59a1.15,1.15,0,0,0,1.27-.92h.77V237h-1.15v-5.59H441Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.02px 233.335px;" id="elnsw6t1xwwbn"
                                class="animable"></path>
                            <path d="M441,241.07a1.15,1.15,0,0,0,1.27-.92h.77v7.32h-1.15v-5.59H441Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.02px 243.81px;" id="el1khteonthg1"
                                class="animable"></path>
                            <path
                                d="M440.24,262.85a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.53-.23-.72-.6-.72s-.59.19-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 441.985px 264.755px;" id="elgozwv0jb71g"
                                class="animable"></path>
                            <path d="M441,293.43a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15v-5.59H441Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.02px 296.175px;" id="els4j5l72w3ip"
                                class="animable"></path>
                            <path
                                d="M440.24,304.74a1.75,1.75,0,1,1,3.49,0v3.82a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 441.985px 306.65px;" id="elwrqcikwwetm"
                                class="animable"></path>
                            <path d="M441,314.38a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V315.2H441Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.02px 317.125px;" id="elfijganzymz7"
                                class="animable"></path>
                            <path d="M441,324.85a1.14,1.14,0,0,0,1.27-.92h.77v7.33h-1.15v-5.59H441Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.02px 327.595px;" id="eluhrap5z8xe"
                                class="animable"></path>
                            <path d="M441,335.33a1.15,1.15,0,0,0,1.27-.92h.77v7.32h-1.15v-5.59H441Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 442.02px 338.07px;" id="elz2ynkjscowg"
                                class="animable"></path>
                            <path
                                d="M440.24,346.64a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.72.59.72s.6-.19.6-.72v-3.95c0-.53-.23-.73-.6-.73s-.59.2-.59.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 441.985px 348.545px;" id="elw24fke0i52k"
                                class="animable"></path>
                            <path
                                d="M440.24,357.11a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 441.985px 359.015px;" id="elacdj6dtdb25"
                                class="animable"></path>
                            <path d="M428.59,293.43a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.61px 296.175px;" id="el9hylu56mm7m"
                                class="animable"></path>
                            <path
                                d="M427.78,304.74a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.53px 306.65px;" id="el1i6izylvvpg"
                                class="animable"></path>
                            <path
                                d="M427.78,315.22a1.75,1.75,0,1,1,3.5,0V319a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.72.6.72s.6-.19.6-.72v-4c0-.53-.23-.73-.6-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.53px 317.11px;" id="elo72s22b0hxl"
                                class="animable"></path>
                            <path d="M428.59,324.85a1.14,1.14,0,0,0,1.27-.92h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.61px 327.595px;" id="el0rd6xhmv09w"
                                class="animable"></path>
                            <path d="M428.59,345.8a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.61px 348.545px;" id="el8t9hvea755j"
                                class="animable"></path>
                            <path d="M428.59,356.28a1.15,1.15,0,0,0,1.27-.93h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.61px 359.015px;" id="ele3fseueinb"
                                class="animable"></path>
                            <path d="M428.59,366.75a1.15,1.15,0,0,0,1.27-.92h.77v7.32h-1.15v-5.58h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 429.61px 369.49px;" id="elvdn0xi8zkk"
                                class="animable"></path>
                            <path
                                d="M421.56,262.85a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.53-.23-.72-.6-.72s-.59.19-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.305px 264.755px;" id="el9be4uiostgr"
                                class="animable"></path>
                            <path
                                d="M421.56,283.8a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.72.59.72s.6-.19.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.305px 285.705px;" id="el4khhzccexv7"
                                class="animable"></path>
                            <path d="M422.36,314.38a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V315.2h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.38px 317.125px;" id="elhsmeu6urc7b"
                                class="animable"></path>
                            <path d="M422.36,324.85a1.14,1.14,0,0,0,1.27-.92h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.38px 327.595px;" id="elw4uxk5b32a"
                                class="animable"></path>
                            <path d="M422.36,356.28a1.15,1.15,0,0,0,1.27-.93h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.38px 359.015px;" id="elt4rpvsu4cal"
                                class="animable"></path>
                            <path
                                d="M421.56,367.59a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.305px 369.495px;" id="elagb6jgf0doj"
                                class="animable"></path>
                            <path d="M422.36,377.22a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V378h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.38px 379.965px;" id="elnnqf1edoo4"
                                class="animable"></path>
                            <path
                                d="M163.73,274a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.59-.2.59-.73v-4c0-.53-.23-.73-.59-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 275.905px;" id="eljhk261x9g58"
                                class="animable"></path>
                            <path
                                d="M163.73,284.5a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 286.405px;" id="elsvfkcsgy7zi"
                                class="animable"></path>
                            <path d="M164.54,294.14a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15V295h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 296.885px;" id="elziizltod5b"
                                class="animable"></path>
                            <path
                                d="M163.73,305.45a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.59-.2.59-.73v-3.95c0-.53-.23-.73-.59-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 307.355px;" id="elxmof99e7ui"
                                class="animable"></path>
                            <path d="M164.54,315.09a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15V315.9h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 317.83px;" id="elae2nnxnzipb"
                                class="animable"></path>
                            <path
                                d="M163.73,326.4a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 328.305px;" id="els7zhs56xyk9"
                                class="animable"></path>
                            <path d="M164.54,336a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 338.745px;" id="el12vm4upghxt8"
                                class="animable"></path>
                            <path
                                d="M163.73,347.34a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 349.245px;" id="elddpzuy04qkl"
                                class="animable"></path>
                            <path
                                d="M163.73,357.82a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 359.725px;" id="el3rq18pw4lse"
                                class="animable"></path>
                            <path
                                d="M163.73,368.29a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.59-.2.59-.73v-3.95c0-.53-.23-.72-.59-.72s-.6.19-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.48px 370.195px;" id="el5gyfz37b7ue"
                                class="animable"></path>
                            <path d="M164.54,377.93a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 380.67px;" id="elzcx29i8u9fr"
                                class="animable"></path>
                            <path d="M164.54,388.4a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 391.145px;" id="el00hm49pzm6kuv"
                                class="animable"></path>
                            <path d="M164.54,398.87a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 401.615px;" id="elk6so9qj5d5d"
                                class="animable"></path>
                            <path d="M164.54,409.35a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.56px 412.09px;" id="ely5t355lkzwo"
                                class="animable"></path>
                            <path d="M164.88,424.54c0,.53.23.72.6.72s.59-.19.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 165.475px 422.54px;" id="elqbn35dahhdj"
                                class="animable"></path>
                            <path d="M170.76,315.09a1.15,1.15,0,0,0,1.27-.92h.77v7.32h-1.15V315.9h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.78px 317.83px;" id="elimgxltq25m"
                                class="animable"></path>
                            <path d="M170.76,325.56a1.15,1.15,0,0,0,1.27-.92h.77V332h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.78px 328.32px;" id="els5x9h2wiede"
                                class="animable"></path>
                            <path
                                d="M170,347.34a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.745px 349.245px;" id="el7z80xl43w6r"
                                class="animable"></path>
                            <path d="M170.76,357a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V357.8h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.78px 359.745px;" id="elemekku4zzrh"
                                class="animable"></path>
                            <path
                                d="M170,368.29a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.73.59.73s.6-.2.6-.73v-3.95c0-.53-.23-.72-.6-.72s-.59.19-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.745px 370.195px;" id="elawva2yq8hx"
                                class="animable"></path>
                            <path d="M171.11,393.12c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.705px 391.12px;" id="elv7o037c7q9s"
                                class="animable"></path>
                            <path d="M170.76,398.87A1.15,1.15,0,0,0,172,398h.77v7.33h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.75px 401.665px;" id="elid1f9wkpk0h"
                                class="animable"></path>
                            <path d="M170.76,409.35a1.15,1.15,0,0,0,1.27-.92h.77v7.32h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.78px 412.09px;" id="eleqgs8oexcx"
                                class="animable"></path>
                            <path
                                d="M170,441.6a1.75,1.75,0,1,1,3.49,0v3.82a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.745px 443.51px;" id="el2uxauhmgd5y"
                                class="animable"></path>
                            <path
                                d="M157.5,305.45a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.6-.2.6-.73v-3.95c0-.53-.23-.73-.6-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.25px 307.355px;" id="elzz3663twx5a"
                                class="animable"></path>
                            <path d="M158.31,315.09a1.15,1.15,0,0,0,1.27-.92h.77v7.32H159.2V315.9h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.33px 317.83px;" id="eljn9havhl69a"
                                class="animable"></path>
                            <path d="M158.31,325.56a1.15,1.15,0,0,0,1.27-.92h.77V332H159.2v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.33px 328.32px;" id="elxeq0z336m2k"
                                class="animable"></path>
                            <path
                                d="M157.5,336.87a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.6-.2.6-.73V336.8c0-.53-.23-.73-.6-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.25px 338.775px;" id="el5nsbcazd1ed"
                                class="animable"></path>
                            <path
                                d="M157.5,357.82a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.25px 359.725px;" id="elckq9ounfurs"
                                class="animable"></path>
                            <path
                                d="M157.5,368.29a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.6-.2.6-.73v-3.95c0-.53-.23-.72-.6-.72s-.6.19-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.25px 370.195px;" id="el8q3jse4ylcr"
                                class="animable"></path>
                            <path d="M158.31,377.93a1.15,1.15,0,0,0,1.27-.92h.77v7.32H159.2v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.33px 380.67px;" id="el420xy3ppdw4"
                                class="animable"></path>
                            <path
                                d="M157.5,389.24a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.25px 391.145px;" id="el788ieptbzsj"
                                class="animable"></path>
                            <path d="M158.31,398.87a1.15,1.15,0,0,0,1.27-.92h.77v7.33H159.2v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 159.33px 401.615px;" id="elerei0sttmm5"
                                class="animable"></path>
                            <path
                                d="M151.28,284.5a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.025px 286.405px;" id="elj1ciyqw2mo"
                                class="animable"></path>
                            <path d="M152.08,304.61a1.15,1.15,0,0,0,1.27-.92h.77V311H153v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.1px 307.345px;" id="el7xtmripb736"
                                class="animable"></path>
                            <path d="M152.08,325.56a1.15,1.15,0,0,0,1.27-.92h.77V332H153v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.1px 328.32px;" id="elexnwhgsf46"
                                class="animable"></path>
                            <path
                                d="M151.28,336.87a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.53-.23-.72-.6-.72s-.59.19-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.025px 338.775px;" id="el233vnqp0cxn"
                                class="animable"></path>
                            <path d="M152.08,367.45a1.15,1.15,0,0,0,1.27-.92h.77v7.33H153v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.1px 370.195px;" id="elkc1bmocxth"
                                class="animable"></path>
                            <path d="M152.08,377.93a1.15,1.15,0,0,0,1.27-.92h.77v7.32H153v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.1px 380.67px;" id="eljv3coq3wcoo"
                                class="animable"></path>
                            <path d="M152.08,388.4a1.15,1.15,0,0,0,1.27-.92h.77v7.33H153v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 153.1px 391.145px;" id="elvvqqacfjuy"
                                class="animable"></path>
                            <path
                                d="M347.11,32.61a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 348.86px 34.515px;" id="elkuy5h9juix"
                                class="animable"></path>
                            <path
                                d="M347.11,43.08a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0ZM348.26,47c0,.53.23.73.6.73s.59-.2.59-.73V43c0-.53-.23-.73-.59-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 348.86px 44.985px;" id="elo8pv8xnz6v"
                                class="animable"></path>
                            <path d="M347.92,73.66a1.14,1.14,0,0,0,1.26-.92H350v7.33h-1.15V74.48h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 348.96px 76.405px;" id="elgejsa6ophnb"
                                class="animable"></path>
                            <path d="M347.92,84.14a1.14,1.14,0,0,0,1.26-.92H350v7.32h-1.15V85h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 348.96px 86.88px;" id="elo5uvsagla9h"
                                class="animable"></path>
                            <path
                                d="M347.11,116.39a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 348.86px 118.295px;" id="elbrrmjjgrz0j"
                                class="animable"></path>
                            <path
                                d="M347.11,137.34a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.59-.2.59-.73v-3.95c0-.53-.23-.72-.59-.72s-.6.19-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 348.86px 139.245px;" id="elu2mmjlr85gg"
                                class="animable"></path>
                            <path
                                d="M328.43,53.55a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.18px 55.455px;" id="el3h51uffmf3w"
                                class="animable"></path>
                            <path
                                d="M328.43,64a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.59-.2.59-.72V64c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.18px 65.905px;" id="el7h6m2fedlxa"
                                class="animable"></path>
                            <path
                                d="M328.43,74.5a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.59-.2.59-.73V74.43c0-.53-.23-.73-.59-.73s-.6.2-.6.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.18px 76.405px;" id="el33ikup78305"
                                class="animable"></path>
                            <path d="M329.24,84.14a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15V85h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.26px 86.88px;" id="eltyeo4q1rk8m"
                                class="animable"></path>
                            <path d="M329.24,105.08a1.14,1.14,0,0,0,1.26-.92h.78v7.33h-1.15V105.9h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.26px 107.825px;" id="el7og1a2w5w1h"
                                class="animable"></path>
                            <path d="M329.24,115.56a1.14,1.14,0,0,0,1.26-.92h.78V122h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.26px 118.32px;" id="eliy93qwwjjo"
                                class="animable"></path>
                            <path
                                d="M328.43,137.34a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.73.6.73s.59-.2.59-.73v-3.95c0-.53-.23-.72-.59-.72s-.6.19-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.18px 139.245px;" id="el7x3kue3j396"
                                class="animable"></path>
                            <path d="M329.24,147a1.14,1.14,0,0,0,1.26-.92h.78v7.32h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 330.26px 149.74px;" id="eln7tgylxlt0k"
                                class="animable"></path>
                            <path
                                d="M340.88,32.61a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0ZM342,36.49c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.63px 34.515px;" id="eluv4zmyggox"
                                class="animable"></path>
                            <path d="M341.69,42.24a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V43.06h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.71px 44.985px;" id="elv94iybrh6u"
                                class="animable"></path>
                            <path
                                d="M340.88,53.55a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0ZM342,57.44c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.63px 55.455px;" id="ell5ouargg6a"
                                class="animable"></path>
                            <path d="M341.69,63.19a1.15,1.15,0,0,0,1.27-.92h.77V69.6h-1.15V64h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.71px 65.935px;" id="elvl4532h36zj"
                                class="animable"></path>
                            <path d="M341.69,73.66a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V74.48h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.71px 76.405px;" id="elfgrrgwd2qym"
                                class="animable"></path>
                            <path d="M341.69,84.14a1.15,1.15,0,0,0,1.27-.92h.77v7.32h-1.15V85h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.71px 86.88px;" id="ello2jgwn1vpj"
                                class="animable"></path>
                            <path
                                d="M340.88,95.45a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0ZM342,99.33c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.63px 97.355px;" id="elx8iv0iznnbl"
                                class="animable"></path>
                            <path
                                d="M340.88,105.92a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0ZM342,109.8c0,.53.23.73.59.73s.6-.2.6-.73v-4c0-.53-.23-.72-.6-.72s-.59.19-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.63px 107.825px;" id="el3ugzoyz5hys"
                                class="animable"></path>
                            <path d="M335.46,42.24a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V43.06h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.48px 44.985px;" id="eltkz44tnmlu"
                                class="animable"></path>
                            <path
                                d="M334.66,53.55a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.405px 55.455px;" id="elhluqv2sbiw7"
                                class="animable"></path>
                            <path
                                d="M334.66,64a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.52.23.72.59.72s.6-.2.6-.72V64c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.405px 65.905px;" id="elb374htumh6n"
                                class="animable"></path>
                            <path d="M335.46,73.66a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V74.48h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.48px 76.405px;" id="elztbjlhpeurg"
                                class="animable"></path>
                            <path d="M335.46,94.61a1.15,1.15,0,0,0,1.27-.92h.77V101h-1.15V95.43h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.48px 97.345px;" id="el201pv2berbh"
                                class="animable"></path>
                            <path d="M335.46,105.08a1.15,1.15,0,0,0,1.27-.92h.77v7.33h-1.15V105.9h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.48px 107.825px;" id="elepu9egyd5wg"
                                class="animable"></path>
                            <path d="M335.46,115.56a1.15,1.15,0,0,0,1.27-.92h.77V122h-1.15v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.48px 118.32px;" id="elipqn03da9yh"
                                class="animable"></path>
                            <path
                                d="M54,148.57a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 150.48px;" id="eli0c6kw4mku"
                                class="animable"></path>
                            <path
                                d="M54,159.05a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.72.6.72s.59-.19.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 160.955px;" id="eltbi4tr77tx"
                                class="animable"></path>
                            <path d="M54.8,168.68a1.14,1.14,0,0,0,1.26-.92h.78v7.33H55.69V169.5H54.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.82px 171.425px;" id="elhknalcjodzh"
                                class="animable"></path>
                            <path
                                d="M54,180a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 181.91px;" id="elskgsmb5yq2"
                                class="animable"></path>
                            <path d="M54.8,189.63a1.14,1.14,0,0,0,1.26-.92h.78V196H55.69v-5.59H54.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.82px 192.355px;" id="elwcylpy4nzl8"
                                class="animable"></path>
                            <path
                                d="M54,200.94a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.53-.23-.72-.59-.72s-.6.19-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 202.845px;" id="el3a4hiaikdal"
                                class="animable"></path>
                            <path d="M54.8,210.58a1.14,1.14,0,0,0,1.26-.92h.78V217H55.69v-5.59H54.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.82px 213.33px;" id="elyr42xejw37j"
                                class="animable"></path>
                            <path
                                d="M54,221.89a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.53.23.72.6.72s.59-.19.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 223.795px;" id="elqm84c6h1lq"
                                class="animable"></path>
                            <path
                                d="M54,232.36a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.89c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 234.265px;" id="el9c1zfe4kphf"
                                class="animable"></path>
                            <path
                                d="M54,242.84a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.15,3.88c0,.52.23.72.6.72s.59-.2.59-.72v-4c0-.52-.23-.72-.59-.72s-.6.2-.6.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.75px 244.745px;" id="elay0ia4phr5a"
                                class="animable"></path>
                            <path d="M54.8,262.94a1.13,1.13,0,0,0,1.26-.92h.78v7.33H55.69v-5.59H54.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 55.82px 265.685px;" id="elw5d5qk68g3o"
                                class="animable"></path>
                            <path d="M61,189.63a1.15,1.15,0,0,0,1.27-.92h.77V196H61.91v-5.59H61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 62.02px 192.355px;" id="elci99xyh9ftl"
                                class="animable"></path>
                            <path d="M61,200.1a1.15,1.15,0,0,0,1.27-.92h.77v7.33H61.91v-5.59H61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 62.02px 202.845px;" id="el1sxlnic737o"
                                class="animable"></path>
                            <path
                                d="M60.22,211.41a1.75,1.75,0,1,1,3.49,0v3.82a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 61.965px 213.32px;" id="elvvqufnxcud"
                                class="animable"></path>
                            <path
                                d="M60.22,221.89a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.72.59.72s.6-.19.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 61.965px 223.795px;" id="elk3g7yowzuok"
                                class="animable"></path>
                            <path d="M61,231.52a1.14,1.14,0,0,0,1.27-.92h.77v7.33H61.91v-5.59H61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 62.02px 234.265px;" id="elcf45795e0ll"
                                class="animable"></path>
                            <path d="M61,252.47a1.15,1.15,0,0,0,1.27-.92h.77v7.33H61.91v-5.59H61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 62.02px 255.215px;" id="elfitaz8flsam"
                                class="animable"></path>
                            <path
                                d="M47.76,180a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.16,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 49.51px 181.91px;" id="el8g3fwve1465"
                                class="animable"></path>
                            <path d="M48.57,189.63a1.15,1.15,0,0,0,1.27-.92h.77V196H49.46v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 49.59px 192.355px;" id="elzw7w0bb5un"
                                class="animable"></path>
                            <path d="M48.57,200.1a1.15,1.15,0,0,0,1.27-.92h.77v7.33H49.46v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 49.59px 202.845px;" id="elz6aaesecbrs"
                                class="animable"></path>
                            <path
                                d="M47.76,211.41a1.75,1.75,0,1,1,3.5,0v3.82a1.75,1.75,0,1,1-3.5,0Zm1.16,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 49.51px 213.32px;" id="elhfkmn1pj3vb"
                                class="animable"></path>
                            <path d="M48.57,221.05a1.15,1.15,0,0,0,1.27-.92h.77v7.33H49.46v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 49.59px 223.795px;" id="elt5fj8tv2sr8"
                                class="animable"></path>
                            <path
                                d="M47.76,232.36a1.75,1.75,0,1,1,3.5,0v3.81a1.75,1.75,0,1,1-3.5,0Zm1.16,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 49.51px 234.265px;" id="el2dtn6fw04dl"
                                class="animable"></path>
                            <path
                                d="M41.54,159.05a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.72.59.72s.6-.19.6-.72v-4c0-.53-.23-.73-.6-.73s-.59.2-.59.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.285px 160.955px;" id="el6o6i2eqljua"
                                class="animable"></path>
                            <path d="M42.34,179.16a1.15,1.15,0,0,0,1.27-.92h.77v7.32H43.23V180h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.36px 181.9px;" id="elgsdbojrguq4"
                                class="animable"></path>
                            <path
                                d="M41.54,190.47a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.72.59.72s.6-.19.6-.72V190.4c0-.53-.23-.73-.6-.73s-.59.2-.59.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.285px 192.375px;" id="ely5ym7bft1h"
                                class="animable"></path>
                            <path
                                d="M41.54,211.42a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.285px 213.325px;" id="elj5qhf09xb4"
                                class="animable"></path>
                            <path
                                d="M41.54,221.89a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.88c0,.53.23.73.59.73s.6-.2.6-.73v-4c0-.53-.23-.73-.6-.73s-.59.2-.59.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.285px 223.795px;" id="el1pxmmgfk1g"
                                class="animable"></path>
                            <path
                                d="M41.54,232.36a1.75,1.75,0,1,1,3.49,0v3.81a1.75,1.75,0,1,1-3.49,0Zm1.15,3.89c0,.52.23.72.59.72s.6-.2.6-.72v-4c0-.52-.23-.72-.6-.72s-.59.2-.59.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.285px 234.265px;" id="elzmz0ga5zgn"
                                class="animable"></path>
                            <path d="M42.34,263a1.15,1.15,0,0,0,1.27-.93h.77v7.33H43.23v-5.59h-.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 43.36px 265.735px;" id="el1pbffdum9xr"
                                class="animable"></path>
                        </g>
                        <g id="freepik--icon-3--inject-111" class="animable"
                            style="transform-origin: 393.13px 219.38px;">
                            <path
                                d="M393.13,256.61c-32.68-13.23-35.05-58.73-35.05-58.73h7v-5.44c16.59,0,28.05-10.29,28.05-10.29h0s11.46,10.29,28.05,10.29v5.44h7s-2.38,45.5-35.05,58.73Z"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 393.13px 219.38px;"
                                id="elz7w6q43bovk" class="animable"></path>
                            <path
                                d="M393.13,250.6c-21.41-10-27.61-36.56-29.32-48h6.4v-5.72a51.58,51.58,0,0,0,22.92-8.7,51.63,51.63,0,0,0,22.93,8.7v5.72h6.38C420.71,214,414.47,240.6,393.13,250.6Z"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 393.125px 219.39px;"
                                id="elnrvnjcs5lr" class="animable"></path>
                            <rect x="380.23" y="212.97" width="25.79" height="16.57" rx="1.35"
                                style="fill: rgb(38, 50, 56); transform-origin: 393.125px 221.255px;" id="el03hkkb3wxleg"
                                class="animable"></rect>
                            <path
                                d="M393.59,199a9.28,9.28,0,0,0-9.73,9.26v1a.65.65,0,0,0,.65.65h2.34a.65.65,0,0,0,.65-.65v-.77a5.75,5.75,0,0,1,5.24-5.8,5.63,5.63,0,0,1,6,5.61v1a.65.65,0,0,0,.65.65h2.34a.65.65,0,0,0,.65-.65v-.7A9.45,9.45,0,0,0,393.59,199Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 393.121px 204.47px;" id="el6cqkgfhtl4j"
                                class="animable"></path>
                            <path
                                d="M395.55,219.4a2.42,2.42,0,1,0-3.48,2.17l-.88,3.89h3.87l-.88-3.89A2.43,2.43,0,0,0,395.55,219.4Z"
                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 393.13px 221.217px;"
                                id="el7tt3jpri4u3" class="animable"></path>
                        </g>
                        <g id="freepik--icon-2--inject-111" class="animable" style="transform-origin: 250.4px 73.67px;">
                            <rect x="207.6" y="48.12" width="85.6" height="51.1" rx="3.32"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 73.67px;"
                                id="elgsetkktbgkd" class="animable"></rect>
                            <g id="elexkzmtn87a">
                                <rect x="214.42" y="55.26" width="27.07" height="36.81" rx="1.15"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 227.955px 73.665px; transform: rotate(180deg);"
                                    class="animable" id="elwaxwb2b4vf"></rect>
                            </g>
                            <path
                                d="M228,92.07H215.64a1.22,1.22,0,0,1-1.22-1.22v-8.5s6.91-.3,8.07-1.77-.12-3.77-.12-3.77c-.42-.52-.52-4.21-.52-4.21l-.42-.11c-.41-.1-1-3.16-1-4.31a1.74,1.74,0,0,1,1-1.58s-1-7.46,6.53-7.46,6.52,7.46,6.52,7.46a1.74,1.74,0,0,1,1,1.58c0,1.15-.54,4.21-1,4.31l-.42.11s-.1,3.69-.52,4.21c0,0-1.29,2.3-.12,3.77s8.07,1.77,8.07,1.77v8.5a1.21,1.21,0,0,1-1.22,1.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 227.955px 75.605px;" id="elqw3103s0iyr"
                                class="animable"></path>
                            <path
                                d="M284.62,92.25H267.8A1.28,1.28,0,0,1,266.52,91h0a1.28,1.28,0,0,1,1.28-1.28h16.82A1.28,1.28,0,0,1,285.9,91h0A1.28,1.28,0,0,1,284.62,92.25Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 276.21px 90.985px;" id="el4sygeqkkd57"
                                class="animable"></path>
                            <path
                                d="M284.62,57.65H249.75a1.28,1.28,0,0,1-1.28-1.28h0a1.28,1.28,0,0,1,1.28-1.28h34.87a1.28,1.28,0,0,1,1.28,1.28h0A1.28,1.28,0,0,1,284.62,57.65Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 267.185px 56.37px;" id="elcmc9h591q3"
                                class="animable"></path>
                            <path
                                d="M269.75,66.3h-20A1.28,1.28,0,0,1,248.47,65h0a1.28,1.28,0,0,1,1.28-1.28h20A1.28,1.28,0,0,1,271,65h0A1.28,1.28,0,0,1,269.75,66.3Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 259.735px 65.01px;" id="elz360pivtpc8"
                                class="animable"></path>
                            <path
                                d="M263.38,75H249.75a1.28,1.28,0,0,1-1.28-1.28h0a1.28,1.28,0,0,1,1.28-1.28h13.63a1.28,1.28,0,0,1,1.28,1.28h0A1.28,1.28,0,0,1,263.38,75Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 256.565px 73.72px;" id="eln40k6mr7k1"
                                class="animable"></path>
                            <path
                                d="M269.75,83.6h-20a1.28,1.28,0,0,1-1.28-1.28h0A1.28,1.28,0,0,1,249.75,81h20A1.28,1.28,0,0,1,271,82.32h0A1.28,1.28,0,0,1,269.75,83.6Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 259.735px 82.3px;" id="el5ig1rpsaku"
                                class="animable"></path>
                        </g>
                        <g id="freepik--icon-1--inject-111" class="animable"
                            style="transform-origin: 106.935px 219.38px;">
                            <polygon
                                points="127.16 184.18 127.16 233.38 113.92 246.62 78.76 246.62 78.76 184.18 127.16 184.18"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.96px 215.4px;"
                                id="el0rk0s8kjsewf" class="animable"></polygon>
                            <polygon points="127.16 233.38 113.92 246.62 113.92 233.38 127.16 233.38"
                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 120.54px 240px;"
                                id="elj8aa2ev2dse" class="animable"></polygon>
                            <line x1="90.55" y1="192.14" x2="119.76" y2="192.14"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 105.155px 192.14px;"
                                id="elfpgqqeck0m" class="animable"></line>
                            <line x1="86.15" y1="197.64" x2="119.76" y2="197.64"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.955px 197.64px;"
                                id="elm4udv5a9fq" class="animable"></line>
                            <line x1="86.15" y1="203.14" x2="119.76" y2="203.14"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.955px 203.14px;"
                                id="ellc78kwdsz0b" class="animable"></line>
                            <line x1="86.15" y1="208.64" x2="119.76" y2="208.64"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.955px 208.64px;"
                                id="elwt1v5kl03t" class="animable"></line>
                            <line x1="86.15" y1="214.14" x2="119.76" y2="214.14"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.955px 214.14px;"
                                id="el08lcnrn5tqu" class="animable"></line>
                            <line x1="86.15" y1="219.64" x2="119.76" y2="219.64"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.955px 219.64px;"
                                id="elel6adhk5hfa" class="animable"></line>
                            <line x1="86.15" y1="225.13" x2="119.76" y2="225.13"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 102.955px 225.13px;"
                                id="el0t9gg9vs91a" class="animable"></line>
                            <line x1="86.15" y1="230.63" x2="115.37" y2="230.63"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 100.76px 230.63px;"
                                id="elk9zffeg6zjp" class="animable"></line>
                            <polyline
                                points="129.46 192.14 135.11 192.14 135.11 241.34 121.88 254.58 86.72 254.58 86.72 248.76"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 110.915px 223.36px;"
                                id="elar6l4jooke" class="animable"></polyline>
                            <polygon points="135.11 241.34 121.88 254.58 121.88 241.34 135.11 241.34"
                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 128.495px 247.96px;"
                                id="el15573vrrbf5" class="animable"></polygon>
                        </g>
                        <g id="freepik--Fingerprint--inject-111" class="animable animator-active"
                            style="transform-origin: 250.4px 219.38px;">
                            <rect x="187.58" y="149.97" width="125.64" height="138.82" rx="4.24"
                                style="fill: #407BFF; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 219.38px;"
                                id="el9kkh2dotz5j" class="animable"></rect>
                            <g id="elmjbriva9bu">
                                <g style="opacity: 0.5; transform-origin: 250.4px 219.375px;" class="animable"
                                    id="elvs1jnm4r32">
                                    <line x1="310.69" y1="196.25" x2="190.11" y2="196.25"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 196.25px;"
                                        id="elendhl6g961d" class="animable"></line>
                                    <line x1="310.69" y1="211.67" x2="190.11" y2="211.67"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 211.67px;"
                                        id="elw9uy5qb34i" class="animable"></line>
                                    <line x1="310.69" y1="227.09" x2="190.11" y2="227.09"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 227.09px;"
                                        id="el0xyjy5jzpxmp" class="animable"></line>
                                    <line x1="310.69" y1="242.51" x2="190.11" y2="242.51"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 242.51px;"
                                        id="el5pejej9tmu4" class="animable"></line>
                                    <line x1="310.69" y1="257.93" x2="190.11" y2="257.93"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 257.93px;"
                                        id="elgjpm1fnxe78" class="animable"></line>
                                    <line x1="310.69" y1="273.36" x2="190.11" y2="273.36"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 273.36px;"
                                        id="elj37qoxfet9" class="animable"></line>
                                    <line x1="310.69" y1="180.82" x2="190.11" y2="180.82"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 180.82px;"
                                        id="el36njdddm5aa" class="animable"></line>
                                    <line x1="310.69" y1="165.4" x2="190.11" y2="165.4"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 165.4px;"
                                        id="eld2zbt0uu5d" class="animable"></line>
                                    <line x1="281.88" y1="286.31" x2="281.88" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 281.88px 219.375px;"
                                        id="elaii8viegpfr" class="animable"></line>
                                    <line x1="266.14" y1="286.31" x2="266.14" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 266.14px 219.375px;"
                                        id="elcvtquikbp5b" class="animable"></line>
                                    <line x1="250.4" y1="286.31" x2="250.4" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.4px 219.375px;"
                                        id="el132d4d8lakzb" class="animable"></line>
                                    <line x1="234.66" y1="286.31" x2="234.66" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 234.66px 219.375px;"
                                        id="elzvyo0y7syql" class="animable"></line>
                                    <line x1="218.92" y1="286.31" x2="218.92" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 218.92px 219.375px;"
                                        id="elg93w43ialo" class="animable"></line>
                                    <line x1="203.19" y1="286.31" x2="203.19" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 203.19px 219.375px;"
                                        id="ellxp9ncmga3" class="animable"></line>
                                    <line x1="297.62" y1="286.31" x2="297.62" y2="152.44"
                                        style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 297.62px 219.375px;"
                                        id="elpvrkngdnazc" class="animable"></line>
                                </g>
                            </g>
                            <path
                                d="M246,261.67a148.87,148.87,0,0,1,5.51-20.51c.47-1.35,1-2.71,1.58-4.16,1.37-3.5,4.18-10.65,3.12-12.78a1.41,1.41,0,0,0-1.17-.81.39.39,0,0,0-.29.11c-3.12,2.55-5.13,9.62-6.59,14.78l-.49,1.74a133.29,133.29,0,0,0-4.1,21.18"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.007px 242.54px;"
                                id="elc5esv95x1mf" class="animable"></path>
                            <path
                                d="M250.63,262a143.74,143.74,0,0,1,5.23-19.31c.44-1.29,1-2.64,1.53-4.06,2.19-5.57,4.91-12.47,2.95-16.42a6,6,0,0,0-5.26-3.34A4.91,4.91,0,0,0,251.9,220c-4.23,3.45-6.37,11-8.09,17.06l-.49,1.73a133.57,133.57,0,0,0-4.13,21"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.102px 240.435px;"
                                id="elx2uziormm8" class="animable"></path>
                            <path
                                d="M255.37,261.55a139.12,139.12,0,0,1,4.79-17.38c2.38-6.79,7.74-17,4.26-24-2.85-5.73-10.31-7.86-15.4-3.7-5.82,4.74-8.13,14.25-10.09,21.06a137.78,137.78,0,0,0-4.07,20"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.211px 237.924px;"
                                id="ell5z1tz9vw8q" class="animable"></path>
                            <path
                                d="M260.35,260.17a127.94,127.94,0,0,1,4.12-14.49c.39-1.13.89-2.39,1.42-3.74,2.84-7.23,6.38-16.24,2.61-23.82a15.15,15.15,0,0,0-13.42-8.4,14,14,0,0,0-8.94,3.19c-6.46,5.27-9,14.36-11.11,21.65l-.48,1.69a136.16,136.16,0,0,0-3.83,18.09"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.429px 234.945px;"
                                id="elm1c07p8sedt" class="animable"></path>
                            <path
                                d="M265.67,257.54c.93-3.66,1.95-7.05,3.1-10.35.38-1.07.85-2.28,1.35-3.55,3-7.68,7.13-18.16,2.46-27.54a19.71,19.71,0,0,0-17.5-10.94,18.48,18.48,0,0,0-11.82,4.22c-7.58,6.18-10.37,16-12.62,23.94l-.48,1.68a137.93,137.93,0,0,0-3.39,15.07"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.728px 231.35px;"
                                id="elkv307c5unvk" class="animable"></path>
                            <path
                                d="M271.16,253.09c1-7.32,6.9-16,7.48-26.15.53-9.3-2.53-15.26-4.7-18.25a5.52,5.52,0,0,1-.64-5.12,19.74,19.74,0,0,0-.14-13.12"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 274.93px 221.77px;"
                                id="elpmj2fq73rn" class="animable"></path>
                            <path
                                d="M257.3,176.78C265,181.6,270,189.19,270.39,199c.13,3.52-2.73,4.73-6.31,3.64-7.49-2.28-25.34-8.12-36.22,22.47a117.4,117.4,0,0,0-4.6,19.47"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 246.827px 210.68px;"
                                id="eley7idd4jgut" class="animable"></path>
                            <path
                                d="M242,177.28a29.44,29.44,0,0,1,13.83,3.24c7.31,3.93,11.91,13.17,9.56,15.52-2.61,2.61-7.46-3.69-22.29,2.39-7.13,2.92-12.19,8.87-15.63,15.63a67.1,67.1,0,0,0-3.92,9.58,116.41,116.41,0,0,0-3.4,12.9"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 243.079px 206.909px;"
                                id="el6uk1zfyfrgp" class="animable"></path>
                            <path
                                d="M233.57,182.92a32.43,32.43,0,0,1,8-1.07c13.09-.3,18,6.68,16.56,8.45-1.21,1.49-3.9.65-7.59,1.1-10.65,1.31-19.07,7.37-24.74,16.33a65.22,65.22,0,0,0-6.64,14.48c-.3.91-.59,1.83-.87,2.75"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 238.331px 203.4px;"
                                id="elu9vqmdn2ioo" class="animable"></path>
                            <path
                                d="M227.4,190.45a23.14,23.14,0,0,1,15.46-5.12c1.66,0,5.76.54,6.31,2.11.73,2.06-5.93-.74-15.58,5.69-12.37,8.25-13.87,16.07-13.87,16.07"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 234.472px 197.256px;"
                                id="elrpq5fkaab4" class="animable"></path>
                            <path d="M276.41,247.55s6.71-14.49,6-25.69c-.44-7.21-4-11.73-4.56-14.94s1-4,.58-6.94"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 279.436px 223.765px;"
                                id="elr6z5k9dzh8r" class="animable"></path>
                            <polyline points="196.04 179.34 196.04 158.88 216.5 158.88"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 206.27px 169.11px;"
                                id="el0fqmeuv9yg19" class="animable"></polyline>
                            <polyline points="216.5 279.88 196.04 279.88 196.04 259.42"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 206.27px 269.65px;"
                                id="elk924jtswm3f" class="animable"></polyline>
                            <polyline points="304.77 179.34 304.77 158.88 284.31 158.88"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 294.54px 169.11px;"
                                id="eldzcny94x8nb" class="animable"></polyline>
                            <polyline points="284.31 279.88 304.77 279.88 304.77 259.42"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 294.54px 269.65px;"
                                id="ell3p0y3phoda" class="animable"></polyline>
                        </g>
                        <g id="freepik--Hand--inject-111" class="animable"
                            style="transform-origin: 303.713px 356.746px;">
                            <path
                                d="M391.68,468c-5.34-8-10.94-16.44-15.54-23.43l0,0c-5.88-8.91-10.12-15.42-10.12-15.42-2.25-10.53-5.44-14.66-8.65-23.31s-.56-16.36.77-27.07-.77-20.69-1.89-27.46.19-13.16,0-14.66-6.58-9.4-9-15.23a24.82,24.82,0,0,0-4.53-7.08,20.7,20.7,0,0,0-7.68-5.51,16.67,16.67,0,0,0-3.82-1c-3-.43-5.42.05-7.84.05-3.39,0-10.53-5.82-15.23-6.75a23.61,23.61,0,0,0-2.64-.37h0c-3.89-.37-8,0-12.55.36s-9.84-3.95-14.1-5.3l-.07,0a6.56,6.56,0,0,0-2.94-.32c-4.51.75-13,1.5-13,1.5s-.75-5.82-1.13-13.72c-.07-1.37-.17-2.69-.29-4v0c-.44-4.88-1.14-9.24-1.25-13.23,0-1,0-2.07,0-3.07.37-5.62.2-10,0-18.64,0-.29,0-.6,0-.91,0-2.69,0-5.26-.16-7.58a0,0,0,0,0,0,0c-.31-5.63-1.56-9.79-7.16-10.65-4.89-.75-8.27,1.69-10.34,9.78s-3.57,7.52-4.13,19.36-3.21,19.38-2.83,25.39-.94,17.67-.94,17.67c-2.25-1.13-4.32-.19-4.71.75s-2.05,10.16-3.38,16.74c-1.16,5.85-6.49,11.26-8.45,15.29l0,.09a8.84,8.84,0,0,0-.52,1.35c-1.13,4.14-.56,13-.56,24.26s-2.82,22.94,0,30.45a15.47,15.47,0,0,0,2.49,4.22c4.33,5.35,12.28,10,19.51,18.53,9,10.72,15.42,18.62,21.43,22.2,4.31,2.54,6.2,4.62,7,7.36v0a14.77,14.77,0,0,1,.49,3.64c.08,2.4,1.38,4.23,3.58,7.27a97.43,97.43,0,0,1,9,14.78c2.41,4.83,6.1,14,10,24.16Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 303.713px 356.781px;"
                                id="eldodxngzbihd" class="animable"></path>
                            <g id="el96tlwxldgk8">
                                <path
                                    d="M260.15,262.93c-.06,1-.07,2,0,3.07-7.19-1.36-21.07,2.19-21.28,6.43-.24,5.17-.87,17.39,1.76,20.24s8.27,4.67,8.27,4.67a12,12,0,0,0-1.24.16h0l-.14,0a9,9,0,0,0-4.7,2.64h0c-5.5,5.64-5.73,18.14-3.93,24.16,7.53,25-4.66,44.78-9,42.38s-4.69-23.89-3.38-28.92a33.37,33.37,0,0,0,1.15-9c-1.92-.64-5.95.29-9.65,1.44l0-.09c2-4,7.29-9.44,8.45-15.29,1.33-6.58,3-15.8,3.38-16.74s2.46-1.88,4.71-.75c0,0,1.32-11.65.94-17.67s2.26-13.54,2.83-25.39,2.06-11.27,4.13-19.36,5.45-10.53,10.34-9.78c5.6.86,6.85,5,7.16,10.65a19.66,19.66,0,0,0-2-1.66,8.91,8.91,0,0,0-6.23-1.84c-2.59.36-4.86,3-6.3,5.72h0c-2.07,4-2.41,8.29.5,6.82,3.3-1.65,10.11-1.1,14.26-.55C260.35,252.9,260.52,257.31,260.15,262.93Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 239.19px 295.94px;"
                                    class="animable" id="elhcj6sot8w4g"></path>
                            </g>
                            <g id="el2877v9uvrlh">
                                <path
                                    d="M267.83,442.25a14.77,14.77,0,0,0-.49-3.64v0c-.79-2.74-2.68-4.82-7-7.36-6-3.58-12.41-11.48-21.43-22.2-7.23-8.57-15.18-13.18-19.51-18.53,5.45,2.95,12.85,1.43,15.18,6.1,3.39,6.74,19.31,17,19.31,17C269.43,429,267.83,442.25,267.83,442.25Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 243.638px 416.385px;"
                                    class="animable" id="eln170avql7a"></path>
                            </g>
                            <g id="el7v1kmlp3ak">
                                <path
                                    d="M278.7,295.78c-1.83-.37-6.79,11.86-7.26,16.2-1.25,11.25,4.52,45.93-2.9,45.15-3.07-.32-6.67-16.52-6.88-24.07-.67-22.93.25-32.46.25-32.46s-1.64-12.7-.54-21.35c.12,1.3.22,2.62.29,4,.38,7.9,1.13,13.72,1.13,13.72s8.46-.75,13-1.5A6.56,6.56,0,0,1,278.7,295.78Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 269.845px 318.196px;"
                                    class="animable" id="elvymsk5niq5k"></path>
                            </g>
                            <g id="el1hx6230s4la">
                                <path
                                    d="M305.42,300.75c-4,.36-8,4.27-11.29,5-4,.85-11.35-8.16-15.36-9.92,4.26,1.35,9.6,5.59,14.1,5.3S301.53,300.38,305.42,300.75Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 292.095px 300.818px;"
                                    class="animable" id="el3sphauarubm"></path>
                            </g>
                            <g id="el9g6trhpinvp">
                                <path
                                    d="M331.17,307.82a31.47,31.47,0,0,0-4.73,8.21c-3.22,10.41-.18,49.8-5.37,43.35-6.76-8.38.3-37.45-4.63-48.55-1.56-3.55-7.13-9.23-8.34-9.71,4.7.93,11.84,6.75,15.23,6.75C325.75,307.87,328.18,307.39,331.17,307.82Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 319.635px 330.605px;"
                                    class="animable" id="elid9lvzkgrf"></path>
                            </g>
                            <g id="elt359y6n668">
                                <path
                                    d="M376.12,444.56c-5.27-5.94-10.79-11.6-14.4-13.72-8.79-5.18-11.31-10.54-12.07-19.47s1.51-8.74,4.14-17.57-2.26-19.75-1.88-17.39-3.77,18.7-6.82,19.51-4.08-10.21-4.46-19.19,4.51-50.8,3.14-59a11.55,11.55,0,0,0-1.1-3.42,24.82,24.82,0,0,1,4.53,7.08c2.45,5.83,8.84,13.73,9,15.23s-1.13,7.9,0,14.66,3.2,16.73,1.89,27.46-4,18.42-.77,27.07,6.4,12.78,8.65,23.31C366,429.14,370.24,435.65,376.12,444.56Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 358.364px 379.435px;"
                                    class="animable" id="el2zkgqui7bto"></path>
                            </g>
                            <g id="elbm1gu4augu">
                                <path
                                    d="M296.75,323c2,2.1,3.26,29.62,4.39,36.39s-2.38,23-4.39,18.06S288.61,314.44,296.75,323Z"
                                    style="fill: #407BFF; opacity: 0.4; transform-origin: 297.001px 350.256px;"
                                    class="animable" id="elaxp51tnwn0s"></path>
                            </g>
                            <path
                                d="M289,484.6c-3.32-8.58-6.39-16.09-8.49-20.3a97.43,97.43,0,0,0-9-14.78c-2.2-3-3.5-4.87-3.58-7.27a14.77,14.77,0,0,0-.49-3.64v0c-.79-2.74-2.68-4.82-7-7.36-6-3.58-12.41-11.48-21.43-22.2-7.23-8.57-15.18-13.18-19.51-18.53a15.47,15.47,0,0,1-2.49-4.22c-2.82-7.51,0-19.18,0-30.45s-.57-20.12.56-24.26a8.84,8.84,0,0,1,.52-1.35l0-.09c2-4,7.29-9.44,8.45-15.29,1.33-6.58,3-15.8,3.38-16.74s2.46-1.88,4.71-.75c0,0,1.32-11.65.94-17.67s2.26-13.54,2.83-25.39,2.06-11.27,4.13-19.36,5.45-10.53,10.34-9.78c5.6.86,6.85,5,7.16,10.65a0,0,0,0,1,0,0c.13,2.32.11,4.89.16,7.58,0,.31,0,.62,0,.91.18,8.61.35,13,0,18.64-.06,1-.07,2,0,3.07.11,4,.81,8.35,1.25,13.23v0c.12,1.3.22,2.62.29,4,.38,7.9,1.13,13.72,1.13,13.72s8.46-.75,13-1.5a6.56,6.56,0,0,1,2.94.32l.07,0c4.26,1.35,9.6,5.59,14.1,5.3s8.66-.73,12.55-.36h0a23.61,23.61,0,0,1,2.64.37c4.7.93,11.84,6.75,15.23,6.75,2.42,0,4.85-.48,7.84-.05a16.67,16.67,0,0,1,3.82,1,20.7,20.7,0,0,1,7.68,5.51,24.82,24.82,0,0,1,4.53,7.08c2.45,5.83,8.84,13.73,9,15.23s-1.13,7.9,0,14.66,3.2,16.73,1.89,27.46-4,18.42-.77,27.07,6.4,12.78,8.65,23.31c0,0,4.24,6.51,10.12,15.42l0,0c4.08,6.19,8.94,13.55,13.72,20.7"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 302.813px 354.821px;"
                                id="el23wwvpbgf6b" class="animable"></path>
                            <path d="M234.58,297.34c0,8.28-.75,18.55-2,22.82s-.41,18.55-2.71,24.56"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 232.225px 321.03px;"
                                id="elg305s7886gh" class="animable"></path>
                            <path d="M238.85,303.86s5.76-6.52,10-6.52,8.53,2.76,13,3.26,9.21-2.83,13.54-3.63"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 257.12px 300.415px;"
                                id="el9tobf7frcrk" class="animable"></path>
                            <path d="M242.1,273.69s7.78-2.84,11.79,0"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 247.995px 273.059px;"
                                id="eltp87as0sg1e" class="animable"></path>
                            <path d="M248,270s2.38-.65,5.89,1.05"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 250.945px 270.464px;"
                                id="elii7zg9vwmwb" class="animable"></path>
                            <path d="M245.92,250a18.41,18.41,0,0,1,8,0"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 249.92px 249.78px;"
                                id="elcrr11ejfclo" class="animable"></path>
                            <path d="M218,330.11s5-2.43,7-2.68"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 221.5px 328.77px;"
                                id="elleif4oeviun" class="animable"></path>
                            <path d="M231.21,337.81s-3,4.66-3.56,6.91"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 229.43px 341.265px;"
                                id="elboldb2pjupl" class="animable"></path>
                            <path
                                d="M245.92,229.66s-1.2,9.57,0,10.42,10.47,1.66,11.23,0,.89-8.67.89-8.67S252.49,221.88,245.92,229.66Z"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 251.713px 233.824px;"
                                id="elzev2qpnypqm" class="animable"></path>
                            <path d="M226.5,314.83s7.69-3.88,7.87-9.43-2.08-5.49-4.94-5.52"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 230.44px 307.355px;"
                                id="el2lz9ink91by" class="animable"></path>
                            <path d="M346.39,327.43c.25,8.77-2.25,34.34-2.51,38.1s0,13.37,0,13.37"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 345.086px 353.165px;"
                                id="elqfxuy0xa5s" class="animable"></path>
                            <path d="M291.49,307.35c8.27,12,0,7.48,5.26,64.95"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 294.12px 339.825px;"
                                id="elvgb4ezx1ee" class="animable"></path>
                            <path d="M366,429.14s-7.33-5.7-8.59-9"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 361.705px 424.64px;"
                                id="el0syy0z2qgef" class="animable"></path>
                            <path d="M263.66,426.44c2.2,3.65,3.59,11.65,3.67,12.14v0"
                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.10721px; transform-origin: 265.495px 432.51px;"
                                id="eltli9hllauxd" class="animable"></path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <a href="{{ route('auth.socialite.redirect', 'google') }}">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                        </a>

                        <a href="{{ route('auth.socialite.redirect', 'github') }}">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </a>

                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf


                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input name="password" type="password" id="form3Example4"
                                class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Hidden field to send false when the checkbox is unchecked -->
                            <input type="hidden" name="remember" value="0">

                            <!-- Checkbox for "Remember me" -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" name="remember" value="1"
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('register') }}" class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
