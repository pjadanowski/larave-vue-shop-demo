<script setup>
import { ref } from "vue";
import { useCartStore } from "@/Store/useCartStore";

const store = useCartStore();
const { closeAside } = store

const close = () => {
    closeAside();
};
</script>

<template>
    <div tabindex="-1" class="drawer drawer-right" :class="{'drawer-open': store.open}" :style="`right: 0; transform: translateX(${store.open ? 0 : 100}%)`">
        <div class="drawer-mask"></div>
        <div class="drawer-content-wrapper" style="right: 0px">
            <div class="drawer-content">
                <div class="flex flex-col w-full h-full justify-between">
                    <div
                        class="w-full flex justify-between items-center relative pl-5 rtl:pr-5 md:pl-7 rtl:md:pr-7 py-0.5 border-b border-gray-100"
                    >
                        <h2
                            class="font-bold text-xl md:text-2xl m-0 text-heading"
                        >
                            Shopping cart
                        </h2>
                        <button
                            @click="close"
                            class="flex text-2xl items-center justify-center text-gray-500 px-4 md:px-6 py-6 lg:py-8 focus:outline-none transition-opacity hover:opacity-60"
                            aria-label="close"
                        >
                            <svg
                                stroke="currentColor"
                                fill="currentColor"
                                stroke-width="0"
                                viewBox="0 0 512 512"
                                class="text-black mt-1 md:mt-0.5"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"
                                ></path>
                            </svg>
                        </button>
                    </div>

                    <!-- cart content -->
                    <div
                        class="os-content p-0 h-full w-full"
                    >
                        <div class="w-full px-5 md:px-7">
                            <div
                                class="group w-full h-auto flex justify-start items-center bg-white py-4 md:py-7 border-b border-gray-100 relative last:border-b-0"
                                title="Zara Miss Chase"
                                style="
                                    opacity: 1;
                                    transform-origin: 50% 50% 0px;
                                "
                            >
                                <div
                                    class="relative flex w-24 md:w-28 h-24 md:h-28 rounded-md overflow-hidden bg-gray-200 flex-shrink-0 cursor-pointer ltr:mr-4 rtl:ml-4"
                                >
                                    <div
                                        style="
                                            display: inline-block;
                                            max-width: 100%;
                                            overflow: hidden;
                                            position: relative;
                                            box-sizing: border-box;
                                            margin: 0px;
                                        "
                                    >
                                        <div
                                            style="
                                                box-sizing: border-box;
                                                display: block;
                                                max-width: 100%;
                                            "
                                        >
                                            <img
                                                alt=""
                                                aria-hidden="true"
                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEyIiBoZWlnaHQ9IjExMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                                style="
                                                    max-width: 100%;
                                                    display: block;
                                                    margin: 0px;
                                                    border: none;
                                                    padding: 0px;
                                                "
                                            />
                                        </div>
                                        <img
                                            alt="Zara Miss Chase"
                                            srcset="
                                                /_next/image?url=https%3A%2F%2Fchawkbazarlaravel.s3.ap-southeast-1.amazonaws.com%2F234%2Fconversions%2FChawkbazar1-thumbnail.jpg&amp;w=128&amp;q=75 1x,
                                                /_next/image?url=https%3A%2F%2Fchawkbazarlaravel.s3.ap-southeast-1.amazonaws.com%2F234%2Fconversions%2FChawkbazar1-thumbnail.jpg&amp;w=256&amp;q=75 2x
                                            "
                                            src="/_next/image?url=https%3A%2F%2Fchawkbazarlaravel.s3.ap-southeast-1.amazonaws.com%2F234%2Fconversions%2FChawkbazar1-thumbnail.jpg&amp;w=256&amp;q=75"
                                            decoding="async"
                                            data-nimg="intrinsic"
                                            class="bg-gray-300 object-cover"
                                            style="
                                                position: absolute;
                                                inset: 0px;
                                                box-sizing: border-box;
                                                padding: 0px;
                                                border: none;
                                                margin: auto;
                                                display: block;
                                                width: 0px;
                                                height: 0px;
                                                min-width: 100%;
                                                max-width: 100%;
                                                min-height: 100%;
                                                max-height: 100%;
                                            "
                                        /><noscript></noscript>
                                    </div>
                                    <div
                                        class="absolute top-0 ltr:left-0 rtl:right-0 h-full w-full bg-black bg-opacity-30 md:bg-opacity-0 flex justify-center items-center transition duration-200 ease-in-out md:group-hover:bg-opacity-30"
                                        role="button"
                                    >
                                        <svg
                                            stroke="currentColor"
                                            fill="currentColor"
                                            stroke-width="0"
                                            viewBox="0 0 512 512"
                                            class="relative text-white text-2xl transform md:scale-0 md:opacity-0 transition duration-300 ease-in-out md:group-hover:scale-100 md:group-hover:opacity-100"
                                            height="1em"
                                            width="1em"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col w-full overflow-hidden"
                                >
                                    <a
                                        class="truncate text-sm text-heading mb-1.5 -mt-1"
                                        href="/products/zara-miss-chase"
                                        >Zara Miss Chase</a
                                    ><span class="text-sm text-gray-400 mb-2.5"
                                        >Unit Price : &nbsp;$90.00</span
                                    >
                                    <div class="flex items-end justify-between">
                                        <div
                                            class="group flex items-center justify-between rounded-md overflow-hidden flex-shrink-0 h-8 md:h-9 shadow-navigation bg-heading"
                                        >
                                            <button
                                                class="flex items-center justify-center flex-shrink-0 h-full transition ease-in-out duration-300 focus:outline-none w-8 md:w-9 text-white bg-heading hover:bg-gray-600 focus:outline-none"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10px"
                                                    height="2px"
                                                    viewBox="0 0 12 1.5"
                                                >
                                                    <rect
                                                        data-name="Rectangle 970"
                                                        width="10px"
                                                        height="2px"
                                                        fill="currentColor"
                                                    ></rect>
                                                </svg></button
                                            ><span
                                                class="font-semibold flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default flex-shrink-0 text-sm text-white w-8 md:w-10"
                                                >3</span
                                            ><button
                                                class="flex items-center justify-center h-full flex-shrink-0 transition ease-in-out duration-300 focus:outline-none w-8 md:w-9 text-white bg-heading hover:bg-gray-600 focus:outline-none"
                                            >
                                                <svg
                                                    data-name="plus (2)"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10px"
                                                    height="10px"
                                                    viewBox="0 0 12 12"
                                                >
                                                    <g data-name="Group 5367">
                                                        <path
                                                            data-name="Path 17138"
                                                            d="M6.749,5.251V0h-1.5V5.251H0v1.5H5.251V12h1.5V6.749H12v-1.5Z"
                                                            fill="currentColor"
                                                        ></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                        <span
                                            class="font-semibold text-sm md:text-base text-heading leading-5"
                                            >$270.00</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end cart content -->

                    <!-- empty cart icon -->
                    <div
                        v-if="false"
                        class="px-5 md:px-7 pt-8 pb-5 flex justify-center flex-col items-center"
                        style="opacity: 1; transform-origin: 50% 50% 0px"
                    >
                        <svg
                            width="180"
                            height="309.722"
                            viewBox="0 0 180 309.722"
                        >
                            <g
                                id="no_cart_in_bag"
                                data-name="no cart in bag"
                                transform="translate(-988 -7673)"
                            >
                                <g
                                    id="no_cart"
                                    data-name="no cart"
                                    transform="translate(988 7673)"
                                >
                                    <g
                                        id="Group_5970"
                                        data-name="Group 5970"
                                        transform="translate(0 0)"
                                    >
                                        <g
                                            id="Group_5967"
                                            data-name="Group 5967"
                                            transform="translate(17.408 92.119)"
                                        >
                                            <path
                                                id="Path_17743"
                                                data-name="Path 17743"
                                                d="M405.506,794.581l63.621-36.762L418.2,724.274Z"
                                                transform="translate(-323.428 -576.978)"
                                                fill="#ba8064"
                                            ></path>
                                            <path
                                                id="Path_17744"
                                                data-name="Path 17744"
                                                d="M135.711,140.727l32.918-.12,1.287-20.225,79.451,45.843-34.42,1.084v19.165Z"
                                                transform="translate(-118.988 -119.373)"
                                                fill="#dba480"
                                            ></path>
                                            <path
                                                id="Path_17745"
                                                data-name="Path 17745"
                                                d="M314.4,206.341,272,124.761l-2.279,22.008,1.4,59.572Z"
                                                transform="translate(-220.537 -122.691)"
                                                fill="#460100"
                                                opacity="0.1"
                                            ></path>
                                            <path
                                                id="Path_17746"
                                                data-name="Path 17746"
                                                d="M141.237,253.056l-10.26-47.388,34.59-.126v37.243Z"
                                                transform="translate(-115.402 -183.904)"
                                                fill="#995b47"
                                            ></path>
                                            <path
                                                id="Path_17747"
                                                data-name="Path 17747"
                                                d="M511.029,445.295l-49.136-22.179L460.8,385.489l1.089-72.515,35.954-1.133Z"
                                                transform="translate(-365.33 -264.454)"
                                                fill="#a96e56"
                                            ></path>
                                            <path
                                                id="Path_17748"
                                                data-name="Path 17748"
                                                d="M148.755,398.756l9.58-70.307,4.9-79.149L81.161,201.911,66.677,351.368Z"
                                                transform="translate(-66.677 -181.153)"
                                                fill="#dba480"
                                            ></path>
                                            <path
                                                id="Path_17749"
                                                data-name="Path 17749"
                                                d="M349.459,429.379c-.415,1.942-2.182,2.6-3.948,1.46a5.753,5.753,0,0,1-2.446-5.572c.414-1.942,2.182-2.6,3.948-1.46A5.753,5.753,0,0,1,349.459,429.379Z"
                                                transform="translate(-276.046 -348.874)"
                                                fill="#67251d"
                                            ></path>
                                            <path
                                                id="Path_17750"
                                                data-name="Path 17750"
                                                d="M209.819,348.753c-.415,1.942-2.182,2.6-3.948,1.46a5.753,5.753,0,0,1-2.446-5.572c.415-1.942,2.182-2.6,3.948-1.46A5.753,5.753,0,0,1,209.819,348.753Z"
                                                transform="translate(-170.233 -287.779)"
                                                fill="#67251d"
                                            ></path>
                                            <g
                                                id="Group_5965"
                                                data-name="Group 5965"
                                                transform="translate(31.503 60.166)"
                                                opacity="0.2"
                                            >
                                                <path
                                                    id="Path_17751"
                                                    data-name="Path 17751"
                                                    d="M219.35,441.507a16.861,16.861,0,0,1-8.439-2.272A28.35,28.35,0,0,1,196.858,412l4.383-45.226a2.414,2.414,0,0,1,4.806.467l-4.383,45.226a23.483,23.483,0,0,0,11.608,22.554,12.055,12.055,0,0,0,18.081-9.247l3.819-39.41a2.414,2.414,0,0,1,4.806.467l-3.819,39.41a16.912,16.912,0,0,1-16.809,15.266Z"
                                                    transform="translate(-196.727 -364.591)"
                                                    fill="#460100"
                                                ></path>
                                            </g>
                                            <path
                                                id="Path_17752"
                                                data-name="Path 17752"
                                                d="M162.373,116.218,161.06,136.85l-34.59.126,82.078,47.388V164.738l35.954-1.132Zm44.968,47.351v18.7l-76.395-44.106,31.247-.113,1.261-19.819,76.774,44.3Z"
                                                transform="translate(-111.986 -116.218)"
                                                fill="#fcc89d"
                                            ></path>
                                            <g
                                                id="Group_5966"
                                                data-name="Group 5966"
                                                transform="translate(29.24 57.45)"
                                            >
                                                <path
                                                    id="Path_17753"
                                                    data-name="Path 17753"
                                                    d="M210.007,430.3a16.864,16.864,0,0,1-8.438-2.271,28.35,28.35,0,0,1-14.054-27.235l4.383-45.226a2.414,2.414,0,0,1,4.806.467l-4.383,45.226a23.483,23.483,0,0,0,11.608,22.554,12.055,12.055,0,0,0,18.081-9.247l3.819-39.41a2.414,2.414,0,0,1,4.806.467l-3.819,39.41A16.912,16.912,0,0,1,210.007,430.3Z"
                                                    transform="translate(-187.384 -353.38)"
                                                    fill="#995b47"
                                                ></path>
                                            </g>
                                            <path
                                                id="Path_17754"
                                                data-name="Path 17754"
                                                d="M405.506,546.991,419.99,488.05V397.534Z"
                                                transform="translate(-323.428 -329.388)"
                                                fill="#995b47"
                                            ></path>
                                        </g>
                                        <g
                                            id="Group_5968"
                                            data-name="Group 5968"
                                            transform="translate(0 0)"
                                        >
                                            <path
                                                id="Path_17755"
                                                data-name="Path 17755"
                                                d="M394.573,120.6c-.142-.5.244-.855.5-1.088a1.4,1.4,0,0,0,.271-.293,0,0,0,0,0,0,0,1.39,1.39,0,0,0-.384-.107c-.34-.065-.853-.162-1-.665s.244-.855.5-1.088a1.39,1.39,0,0,0,.271-.293,0,0,0,0,0,0,0,1.4,1.4,0,0,0-.384-.107c-.34-.064-.853-.162-1-.664s.244-.855.5-1.088l.009-.008a.9.9,0,0,0,.259-.482.391.391,0,0,1,.276-.292.41.41,0,0,1,.5.316,1.122,1.122,0,0,1-.51,1.046,1.4,1.4,0,0,0-.271.292,0,0,0,0,0,0,0,1.4,1.4,0,0,0,.384.107c.34.065.853.162,1,.665s-.244.855-.5,1.088a1.4,1.4,0,0,0-.271.293,0,0,0,0,0,0,0,1.391,1.391,0,0,0,.384.107c.34.065.853.162,1,.665s-.244.855-.5,1.088a1.257,1.257,0,0,0-.273.3,0,0,0,0,0,0,0,1.641,1.641,0,0,0,.387.1c.331.063.826.157.983.625a.416.416,0,0,1-.21.507.392.392,0,0,1-.456-.109.789.789,0,0,0-.464-.253h0C395.229,121.2,394.716,121.1,394.573,120.6Z"
                                                transform="translate(-349.075 -37.518)"
                                                fill="#212121"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Path_17765"
                                                data-name="Path 17765"
                                                d="M395.468,120.6c.142-.5-.244-.855-.5-1.088a1.4,1.4,0,0,1-.271-.293,0,0,0,0,1,0,0,1.39,1.39,0,0,1,.384-.107c.34-.065.853-.162,1-.665s-.244-.855-.5-1.088a1.389,1.389,0,0,1-.271-.293,0,0,0,0,1,0,0,1.4,1.4,0,0,1,.384-.107c.34-.064.853-.162,1-.664s-.244-.855-.5-1.088l-.009-.008a.9.9,0,0,1-.259-.482.391.391,0,0,0-.276-.292.41.41,0,0,0-.5.316,1.122,1.122,0,0,0,.51,1.046,1.4,1.4,0,0,1,.271.292,0,0,0,0,1,0,0,1.4,1.4,0,0,1-.384.107c-.34.065-.853.162-1,.664s.244.855.5,1.088a1.4,1.4,0,0,1,.271.293,0,0,0,0,1,0,0,1.39,1.39,0,0,1-.384.107c-.34.065-.853.162-1,.665s.244.855.5,1.088a1.257,1.257,0,0,1,.273.3,0,0,0,0,1,0,0,1.641,1.641,0,0,1-.387.1c-.331.063-.826.157-.983.625a.416.416,0,0,0,.21.507.392.392,0,0,0,.456-.109.789.789,0,0,1,.464-.253h0C394.812,121.2,395.326,121.1,395.468,120.6Z"
                                                transform="translate(-262.76 -23.736)"
                                                fill="#212121"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Path_17756"
                                                data-name="Path 17756"
                                                d="M375.447,179.277a2.539,2.539,0,1,1,3.346,1.3A2.542,2.542,0,0,1,375.447,179.277Zm3.737-1.643a1.543,1.543,0,1,0-.791,2.034A1.545,1.545,0,0,0,379.184,177.634Z"
                                                transform="translate(-375.232 -52.408)"
                                                fill="#212121"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Path_17764"
                                                data-name="Path 17764"
                                                d="M375.447,179.277a2.539,2.539,0,1,1,3.346,1.3A2.542,2.542,0,0,1,375.447,179.277Zm3.737-1.643a1.543,1.543,0,1,0-.791,2.034A1.545,1.545,0,0,0,379.184,177.634Z"
                                                transform="translate(-333.888 -175.716)"
                                                fill="#212121"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Path_17757"
                                                data-name="Path 17757"
                                                d="M350.086,264.8a1.852,1.852,0,0,1-2.682-2.547l-.868-.823a3.047,3.047,0,0,0,4.417,4.194Z"
                                                transform="translate(-253.642 -206.302)"
                                                fill="#212121"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Path_17766"
                                                data-name="Path 17766"
                                                d="M346.628,264.8a1.852,1.852,0,0,0,2.682-2.547l.867-.823a3.047,3.047,0,0,1-4.417,4.194Z"
                                                transform="translate(-170.953 -110.557)"
                                                fill="#212121"
                                                opacity="0.15"
                                            ></path>
                                            <path
                                                id="Union_11"
                                                data-name="Union 11"
                                                d="M2.059,6.97l.989-3.048L0,2.933.283,2.06l3.049.989L4.321,0,5.2.284l-.99,3.048,3.047.989L6.97,5.2l-3.048-.99-.99,3.049Z"
                                                transform="translate(6.528 48.598)"
                                                fill="#212121"
                                                stroke="rgba(0,0,0,0)"
                                                stroke-miterlimit="10"
                                                stroke-width="1"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Union_13"
                                                data-name="Union 13"
                                                d="M2.059,6.97l.989-3.048L0,2.933.283,2.06l3.049.989L4.321,0,5.2.284l-.99,3.048,3.047.989L6.97,5.2l-3.048-.99-.99,3.049Z"
                                                transform="translate(94.294 121.132)"
                                                fill="#212121"
                                                stroke="rgba(0,0,0,0)"
                                                stroke-miterlimit="10"
                                                stroke-width="1"
                                                opacity="0.3"
                                            ></path>
                                            <path
                                                id="Union_12"
                                                data-name="Union 12"
                                                d="M1.235,4.182l.593-1.829L0,1.759l.17-.524L2,1.829,2.592,0l.525.17L2.523,2l1.828.594-.17.523L2.353,2.523,1.759,4.352Z"
                                                transform="translate(107.351 6.528)"
                                                fill="#212121"
                                                stroke="rgba(0,0,0,0)"
                                                stroke-miterlimit="10"
                                                stroke-width="1"
                                                opacity="0.3"
                                            ></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h3 class="text-lg text-heading font-bold pt-8">
                            Your cart is empty.
                        </h3>
                    </div>
                    <!-- end empty cart icon -->

                    <div class="flex flex-col px-5 md:px-7 pt-2 pb-5 md:pb-7">
                        <a
                            class="w-full px-5 py-3 md:py-4 flex items-center justify-center bg-heading rounded-md text-sm sm:text-base text-white focus:outline-none transition duration-300 hover:bg-gray-600 cursor-not-allowed bg-gray-400 hover:bg-gray-400"
                            href="/"
                            ><span class="w-full pr-5 rtl:pl-5 -mt-0.5 py-0.5"
                                >Proceed To Checkout</span
                            ><span
                                class="ml-auto rtl:mr-auto flex-shrink-0 -mt-0.5 py-0.5 rtl:flex"
                                ><span
                                    class="border-l rtl:border-r border-white pr-5 rtl:pl-5 py-0.5"
                                ></span
                                >$0.00</span
                            ></a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="css">
.drawer-left.drawer-open,
.drawer-right.drawer-open {
    width: 100%;
}
.drawer.drawer-open {
    transition: transform 0.3s cubic-bezier(0.78, 0.14, 0.15, 0.86);
}
.drawer-right {
    top: 0;
    right: 0;
}
.drawer-left,
.drawer-right {
    width: 0;
    height: 100%;
}
.drawer {
    position: fixed;
    z-index: 9999;
    transition: width 0s ease 0.3s, height 0s ease 0.3s,
        transform 0.3s cubic-bezier(0.78, 0.14, 0.15, 0.86);
}

.drawer.drawer-open .drawer-mask {
    opacity: 0.3;
    height: 100%;
    transition: opacity 0.3s cubic-bezier(0.78, 0.14, 0.15, 0.86);
}
.drawer .drawer-mask {
    background: #000;
    opacity: 0;
    width: 100%;
    height: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: opacity 0.3s cubic-bezier(0.78, 0.14, 0.15, 0.86),
        height 0s ease 0.3s;
}

.drawer-right .drawer-handle,
.drawer-right.drawer-open .drawer-content-wrapper {
    box-shadow: -2px 0 8px rgb(0 0 0 / 15%);
}
@media (min-width: 480px) {
    .drawer .drawer-content-wrapper {
        width: 450px !important;
    }
}
.drawer .drawer-content-wrapper {
    width: 100%;
}
.drawer-right .drawer-content-wrapper {
    right: 0;
}
.drawer-left .drawer-content,
.drawer-left .drawer-content-wrapper,
.drawer-right .drawer-content,
.drawer-right .drawer-content-wrapper {
    height: 100%;
}
.drawer-content-wrapper {
    position: absolute;
    background: #fff;
}
</style>
