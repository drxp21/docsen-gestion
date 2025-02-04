<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <div class="row" bis_skin_checked="1">
            <div class="col-xxl-4 col-xl-6" bis_skin_checked="1"><app-order-statics>
                    <div class="card" bis_skin_checked="1">
                        <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2 border-bottom border-dashed"
                            bis_skin_checked="1">
                            <h4 class="header-title">Orders Statistics</h4>
                            <div class="d-flex gap-2 justify-content-end text-end" bis_skin_checked="1"><a
                                    href="javascript:void(0);" class="btn btn-sm btn-light">Refresh <i
                                        class="ri-refresh-line ms-1"></i></a></div>
                        </div>
                        <div class="card-body pt-2" bis_skin_checked="1">
                            <div dir="ltr" bis_skin_checked="1">
                                <div id="data-visits-chart" data-colors="#5b69bc,#ff8acc,#10c469,#35b8e0"
                                    class="apex-charts" bis_skin_checked="1"><apx-chart>
                                        <div bis_skin_checked="1" style="min-height: 277px;">
                                            <div id="apexchartsqdopntzp"
                                                class="apexcharts-canvas apexchartsqdopntzp apexcharts-theme-"
                                                bis_skin_checked="1" style="width: 350px; height: 277px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="350"
                                                    height="277">
                                                    <foreignObject x="0" y="0" width="350" height="277">
                                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                            xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1"
                                                            style="right: 0px; position: absolute; left: 20px; top: 255px; max-height: 138.5px;">
                                                            <div class="apexcharts-legend-series" rel="1"
                                                                seriesname="Direct" data:collapsed="false"
                                                                bis_skin_checked="1" style="margin: 4px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="1"
                                                                    data:collapsed="false"
                                                                    style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="100%" height="100%">
                                                                        <path d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#5b69bc" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="1"
                                                                            stroke-dasharray="0" cx="0" cy="0"
                                                                            shape="circle"
                                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                            style="transform: translate(50%, 50%);"></path>
                                                                    </svg></span><span class="apexcharts-legend-text"
                                                                    rel="1" i="0" data:default-text="Direct"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Direct</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="2"
                                                                seriesname="Social" data:collapsed="false"
                                                                bis_skin_checked="1" style="margin: 4px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="2"
                                                                    data:collapsed="false"
                                                                    style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="100%" height="100%">
                                                                        <path d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#ff8acc" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="1"
                                                                            stroke-dasharray="0" cx="0" cy="0"
                                                                            shape="circle"
                                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                            style="transform: translate(50%, 50%);"></path>
                                                                    </svg></span><span class="apexcharts-legend-text"
                                                                    rel="2" i="1" data:default-text="Social"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Social</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="3"
                                                                seriesname="Marketing" data:collapsed="false"
                                                                bis_skin_checked="1" style="margin: 4px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="3"
                                                                    data:collapsed="false"
                                                                    style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="100%" height="100%">
                                                                        <path d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#10c469" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="1"
                                                                            stroke-dasharray="0" cx="0" cy="0"
                                                                            shape="circle"
                                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                            style="transform: translate(50%, 50%);"></path>
                                                                    </svg></span><span class="apexcharts-legend-text"
                                                                    rel="3" i="2" data:default-text="Marketing"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Marketing</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="4"
                                                                seriesname="Affiliates" data:collapsed="false"
                                                                bis_skin_checked="1" style="margin: 4px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="4"
                                                                    data:collapsed="false"
                                                                    style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="100%" height="100%">
                                                                        <path d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#35b8e0" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="1"
                                                                            stroke-dasharray="0" cx="0" cy="0"
                                                                            shape="circle"
                                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                            style="transform: translate(50%, 50%);"></path>
                                                                    </svg></span><span class="apexcharts-legend-text"
                                                                    rel="4" i="3" data:default-text="Affiliates"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Affiliates</span>
                                                            </div>
                                                        </div>

                                                    </foreignObject>
                                                    <g class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs>
                                                            <clipPath id="gridRectMaskqdopntzp">
                                                                <rect width="350" height="219" x="0" y="0" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMaskqdopntzp">
                                                                <rect width="356" height="225" x="-3" y="-3" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskqdopntzp">
                                                                <rect width="350" height="219" x="0" y="0" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskqdopntzp"></clipPath>
                                                            <clipPath id="nonForecastMaskqdopntzp"></clipPath>
                                                            <filter id="SvgjsFilter1071" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%" y="-50%">
                                                                <feOffset id="SvgjsFeOffset1064" result="offset"
                                                                    in="SourceGraphic" dx="1" dy="1"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1065" result="blur"
                                                                    in="offset" stdDeviation="1"></feGaussianBlur>
                                                                <feFlood id="SvgjsFeFlood1066" result="flood"
                                                                    in="SourceGraphic" flood-color="#000000"
                                                                    flood-opacity="0.8"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1067" result="shadow"
                                                                    in="flood" in2="blur" operator="in"></feComposite>
                                                                <feMerge id="SvgjsFeMerge1068" result="SvgjsFeMerge1068"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1069"
                                                                        result="SvgjsFeMergeNode1069" in="shadow">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1070"
                                                                        result="SvgjsFeMergeNode1070" in="SourceGraphic">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                            </filter>
                                                            <filter id="SvgjsFilter1079" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%" y="-50%">
                                                                <feOffset id="SvgjsFeOffset1072" result="offset"
                                                                    in="SourceGraphic" dx="1" dy="1"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1073" result="blur"
                                                                    in="offset" stdDeviation="1"></feGaussianBlur>
                                                                <feFlood id="SvgjsFeFlood1074" result="flood"
                                                                    in="SourceGraphic" flood-color="#000000"
                                                                    flood-opacity="0.8"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1075" result="shadow"
                                                                    in="flood" in2="blur" operator="in"></feComposite>
                                                                <feMerge id="SvgjsFeMerge1076" result="SvgjsFeMerge1076"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1077"
                                                                        result="SvgjsFeMergeNode1077" in="shadow">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1078"
                                                                        result="SvgjsFeMergeNode1078" in="SourceGraphic">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                            </filter>
                                                            <filter id="SvgjsFilter1087" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%" y="-50%">
                                                                <feOffset id="SvgjsFeOffset1080" result="offset"
                                                                    in="SourceGraphic" dx="1" dy="1"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1081" result="blur"
                                                                    in="offset" stdDeviation="1"></feGaussianBlur>
                                                                <feFlood id="SvgjsFeFlood1082" result="flood"
                                                                    in="SourceGraphic" flood-color="#000000"
                                                                    flood-opacity="0.8"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1083" result="shadow"
                                                                    in="flood" in2="blur" operator="in"></feComposite>
                                                                <feMerge id="SvgjsFeMerge1084" result="SvgjsFeMerge1084"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1085"
                                                                        result="SvgjsFeMergeNode1085" in="shadow">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1086"
                                                                        result="SvgjsFeMergeNode1086" in="SourceGraphic">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                            </filter>
                                                            <filter id="SvgjsFilter1095" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%" y="-50%">
                                                                <feOffset id="SvgjsFeOffset1088" result="offset"
                                                                    in="SourceGraphic" dx="1" dy="1"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1089" result="blur"
                                                                    in="offset" stdDeviation="1"></feGaussianBlur>
                                                                <feFlood id="SvgjsFeFlood1090" result="flood"
                                                                    in="SourceGraphic" flood-color="#000000"
                                                                    flood-opacity="0.8"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1091" result="shadow"
                                                                    in="flood" in2="blur" operator="in"></feComposite>
                                                                <feMerge id="SvgjsFeMerge1092" result="SvgjsFeMerge1092"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1093"
                                                                        result="SvgjsFeMergeNode1093" in="shadow">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1094"
                                                                        result="SvgjsFeMergeNode1094" in="SourceGraphic">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                            </filter>
                                                        </defs>
                                                        <g class="apexcharts-pie">
                                                            <g transform="translate(0, 0) scale(1)">
                                                                <circle r="65.53902439024391" cx="175" cy="109.5"
                                                                    fill="transparent"></circle>
                                                                <g class="apexcharts-slices">
                                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Direct" rel="1" data:realIndex="0">
                                                                        <path
                                                                            d="M 175 8.67073170731706 A 100.82926829268294 100.82926829268294 0 0 1 184.44180287158554 209.88622267508603 L 181.1371718665306 174.75104473880592 A 65.53902439024391 65.53902439024391 0 0 0 175 43.96097560975609 L 175 8.67073170731706 z "
                                                                            fill="rgba(91,105,188,1)" fill-opacity="1"
                                                                            stroke="#ffffff" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="0"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                            index="0" j="0" data:angle="174.62686567164178"
                                                                            data:startAngle="0" data:strokeWidth="0"
                                                                            data:value="65"
                                                                            data:pathOrig="M 175 8.67073170731706 A 100.82926829268294 100.82926829268294 0 0 1 184.44180287158554 209.88622267508603 L 181.1371718665306 174.75104473880592 A 65.53902439024391 65.53902439024391 0 0 0 175 43.96097560975609 L 175 8.67073170731706 z ">
                                                                        </path>
                                                                    </g>
                                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Social" rel="2" data:realIndex="1">
                                                                        <path
                                                                            d="M 184.44180287158554 209.88622267508603 A 100.82926829268294 100.82926829268294 0 0 1 121.21270006927219 194.784627633588 L 140.03825504502692 164.9350079618322 A 65.53902439024391 65.53902439024391 0 0 0 181.1371718665306 174.75104473880592 L 184.44180287158554 209.88622267508603 z "
                                                                            fill="rgba(255,138,204,1)" fill-opacity="1"
                                                                            stroke="#ffffff" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="0"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                            index="0" j="1" data:angle="37.61194029850748"
                                                                            data:startAngle="174.62686567164178"
                                                                            data:strokeWidth="0" data:value="14"
                                                                            data:pathOrig="M 184.44180287158554 209.88622267508603 A 100.82926829268294 100.82926829268294 0 0 1 121.21270006927219 194.784627633588 L 140.03825504502692 164.9350079618322 A 65.53902439024391 65.53902439024391 0 0 0 181.1371718665306 174.75104473880592 L 184.44180287158554 209.88622267508603 z ">
                                                                        </path>
                                                                    </g>
                                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Marketing" rel="3" data:realIndex="2">
                                                                        <path
                                                                            d="M 121.21270006927219 194.784627633588 A 100.82926829268294 100.82926829268294 0 0 1 88.47789711444278 161.27322721927703 L 118.76063312438781 143.15259769253007 A 65.53902439024391 65.53902439024391 0 0 0 140.03825504502692 164.9350079618322 L 121.21270006927219 194.784627633588 z "
                                                                            fill="rgba(16,196,105,1)" fill-opacity="1"
                                                                            stroke="#ffffff" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="0"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                            index="0" j="2" data:angle="26.86567164179104"
                                                                            data:startAngle="212.23880597014926"
                                                                            data:strokeWidth="0" data:value="10"
                                                                            data:pathOrig="M 121.21270006927219 194.784627633588 A 100.82926829268294 100.82926829268294 0 0 1 88.47789711444278 161.27322721927703 L 118.76063312438781 143.15259769253007 A 65.53902439024391 65.53902439024391 0 0 0 140.03825504502692 164.9350079618322 L 121.21270006927219 194.784627633588 z ">
                                                                        </path>
                                                                    </g>
                                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                                        seriesName="Affiliates" rel="4" data:realIndex="3">
                                                                        <path
                                                                            d="M 88.47789711444278 161.27322721927703 A 100.82926829268294 100.82926829268294 0 0 1 174.98240197294848 8.670733243034633 L 174.98856128241653 43.96097660797251 A 65.53902439024391 65.53902439024391 0 0 0 118.76063312438781 143.15259769253007 L 88.47789711444278 161.27322721927703 z "
                                                                            fill="rgba(53,184,224,1)" fill-opacity="1"
                                                                            stroke="#ffffff" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="0"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                            index="0" j="3" data:angle="120.8955223880597"
                                                                            data:startAngle="239.1044776119403"
                                                                            data:strokeWidth="0" data:value="45"
                                                                            data:pathOrig="M 88.47789711444278 161.27322721927703 A 100.82926829268294 100.82926829268294 0 0 1 174.98240197294848 8.670733243034633 L 174.98856128241653 43.96097660797251 A 65.53902439024391 65.53902439024391 0 0 0 118.76063312438781 143.15259769253007 L 88.47789711444278 161.27322721927703 z ">
                                                                        </path>
                                                                    </g>
                                                                    <g class="apexcharts-datalabels"><text
                                                                            x="258.0927179379657" y="105.60097085934501"
                                                                            text-anchor="middle" dominant-baseline="auto"
                                                                            font-size="12px"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            font-weight="600" fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            filter="url(#SvgjsFilter1071)"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">48.5%</text>
                                                                    </g>
                                                                    <g class="apexcharts-datalabels"><text
                                                                            x="155.67587721776974" y="190.4084697745254"
                                                                            text-anchor="middle" dominant-baseline="auto"
                                                                            font-size="12px"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            font-weight="600" fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            filter="url(#SvgjsFilter1079)"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">10.4%</text>
                                                                    </g>
                                                                    <g class="apexcharts-datalabels"><text
                                                                            x="115.49447300251535" y="167.62653833929582"
                                                                            text-anchor="middle" dominant-baseline="auto"
                                                                            font-size="12px"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            font-weight="600" fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            filter="url(#SvgjsFilter1087)"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">7.5%</text>
                                                                    </g>
                                                                    <g class="apexcharts-datalabels"><text
                                                                            x="102.63758101417562" y="68.47217381973539"
                                                                            text-anchor="middle" dominant-baseline="auto"
                                                                            font-size="12px"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            font-weight="600" fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            filter="url(#SvgjsFilter1095)"
                                                                            style="font-family: Helvetica, Arial, sans-serif;">33.6%</text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="350" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="350" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark" bis_skin_checked="1">
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                        bis_skin_checked="1" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(91, 105, 188);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                                        bis_skin_checked="1" style="order: 2;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(255, 138, 204);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2"
                                                        bis_skin_checked="1" style="order: 3;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(16, 196, 105);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-3"
                                                        bis_skin_checked="1" style="order: 4;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(53, 184, 224);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </apx-chart></div>
                                <div class="row mt-3" bis_skin_checked="1">
                                    <div class="col" bis_skin_checked="1">
                                        <div class="d-flex justify-content-between align-items-center p-1"
                                            bis_skin_checked="1">
                                            <div bis_skin_checked="1"><i
                                                    class="ri-circle-fill fs-12 align-middle me-1 text-primary"></i><span
                                                    class="align-middle fw-semibold">Direct</span></div><span
                                                class="fw-semibold text-muted float-end"><i
                                                    class="ri-arrow-down-s-fill text-danger"></i> 965</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center p-1"
                                            bis_skin_checked="1">
                                            <div bis_skin_checked="1"><i
                                                    class="ri-circle-fill fs-12 text-secondary align-middle me-1"></i><span
                                                    class="align-middle fw-semibold">Social</span></div><span
                                                class="fw-semibold text-muted float-end"><i
                                                    class="ri-arrow-up-s-fill text-success"></i> 75</span>
                                        </div>
                                    </div>
                                    <div class="col" bis_skin_checked="1">
                                        <div class="d-flex justify-content-between align-items-center p-1"
                                            bis_skin_checked="1">
                                            <div bis_skin_checked="1"><i
                                                    class="ri-circle-fill fs-12 text-success align-middle me-1"></i><span
                                                    class="align-middle fw-semibold"> Marketing</span></div><span
                                                class="fw-semibold text-muted float-end"><i
                                                    class="ri-arrow-up-s-fill text-success"></i> 102</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center p-1"
                                            bis_skin_checked="1">
                                            <div bis_skin_checked="1"><i
                                                    class="ri-circle-fill fs-12 text-info align-middle me-1"></i><span
                                                    class="align-middle fw-semibold">Affiliates</span></div><span
                                                class="fw-semibold text-muted float-end"><i
                                                    class="ri-arrow-down-s-fill text-danger"></i> 96</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </app-order-statics></div>
            <div class="col-xxl-4 col-xl-6" bis_skin_checked="1"><app-statistics>
                    <div class="card" bis_skin_checked="1">
                        <div class="d-flex card-header justify-content-between align-items-center border-bottom border-dashed"
                            bis_skin_checked="1">
                            <h4 class="header-title">Statistics</h4>
                            <div ngbdropdown="" class="dropdown" bis_skin_checked="1"><a href="javascript:void(0);"
                                    ngbdropdowntoggle="" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="dropdown-toggle drop-arrow-none card-drop"><i
                                        class="ri-more-2-fill fs-18"></i></a>
                                <div ngbdropdownmenu="" class="dropdown-menu dropdown-menu-end" bis_skin_checked="1"><a
                                        href="javascript:void(0);" class="dropdown-item">Sales Report</a><a
                                        href="javascript:void(0);" class="dropdown-item">Export Report</a><a
                                        href="javascript:void(0);" class="dropdown-item">Profit</a><a
                                        href="javascript:void(0);" class="dropdown-item">Action</a></div>
                            </div>
                        </div>
                        <div class="card-body p-0 pt-1" bis_skin_checked="1">
                            <div dir="ltr" class="px-1" bis_skin_checked="1">
                                <div id="statistics-chart" data-colors="#188ae2" class="apex-charts" bis_skin_checked="1">
                                    <apx-chart>
                                        <div bis_skin_checked="1" style="min-height: 316px;">
                                            <div id="apexchartsoc9smh33"
                                                class="apexcharts-canvas apexchartsoc9smh33 apexcharts-theme-"
                                                bis_skin_checked="1" style="width: 386px; height: 301px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)" width="386" height="301">
                                                    <foreignObject x="0" y="0" width="386" height="301">
                                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                            bis_skin_checked="1" style="max-height: 150.5px;"></div>

                                                    </foreignObject>
                                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                                    </rect>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0"
                                                        transform="translate(30.684276580810547, 0)">
                                                        <g class="apexcharts-yaxis-texts-g"><text x="20"
                                                                y="33.666666666666664" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>120.00</tspan>
                                                                <title>120.00</title>
                                                            </text><text x="20" y="72.41090897401173" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>100.00</tspan>
                                                                <title>100.00</title>
                                                            </text><text x="20" y="111.15515128135681" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>80.00</tspan>
                                                                <title>80.00</title>
                                                            </text><text x="20" y="149.89939358870188" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>60.00</tspan>
                                                                <title>60.00</title>
                                                            </text><text x="20" y="188.64363589604696" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>40.00</tspan>
                                                                <title>40.00</title>
                                                            </text><text x="20" y="227.38787820339203" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>20.00</tspan>
                                                                <title>20.00</title>
                                                            </text><text x="20" y="266.1321205107371" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>0.00</tspan>
                                                                <title>0.00</title>
                                                            </text></g>
                                                    </g>
                                                    <g class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(70.67152051925659, 30)">
                                                        <defs>
                                                            <clipPath id="gridRectMaskoc9smh33">
                                                                <rect width="279.64283027648924" height="232.46545384407045"
                                                                    x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMaskoc9smh33">
                                                                <rect width="305.64283027648924" height="236.46545384407045"
                                                                    x="-14" y="-2" rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskoc9smh33">
                                                                <rect width="279.64283027648924" height="232.46545384407045"
                                                                    x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskoc9smh33"></clipPath>
                                                            <clipPath id="nonForecastMaskoc9smh33"></clipPath>
                                                        </defs>
                                                        <line x1="0" y1="0" x2="0" y2="232.46545384407045" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="232.46545384407045" fill="#b1b9c4" filter="none"
                                                            fill-opacity="0.9" stroke-width="1"></line>
                                                        <line x1="0" y1="232.46545384407045" x2="0" y2="238.46545384407045"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="46.60713837941487" y1="232.46545384407045"
                                                            x2="46.60713837941487" y2="238.46545384407045" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="93.21427675882974" y1="232.46545384407045"
                                                            x2="93.21427675882974" y2="238.46545384407045" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="139.82141513824462" y1="232.46545384407045"
                                                            x2="139.82141513824462" y2="238.46545384407045" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="186.42855351765948" y1="232.46545384407045"
                                                            x2="186.42855351765948" y2="238.46545384407045" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="233.03569189707434" y1="232.46545384407045"
                                                            x2="233.03569189707434" y2="238.46545384407045" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="279.64283027648924" y1="232.46545384407045"
                                                            x2="279.64283027648924" y2="238.46545384407045" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal">
                                                                <line x1="-9.987243938446046" y1="38.744242307345075"
                                                                    x2="289.6300742149353" y2="38.744242307345075"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line x1="-9.987243938446046" y1="77.48848461469015"
                                                                    x2="289.6300742149353" y2="77.48848461469015"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line x1="-9.987243938446046" y1="116.23272692203523"
                                                                    x2="289.6300742149353" y2="116.23272692203523"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line x1="-9.987243938446046" y1="154.9769692293803"
                                                                    x2="289.6300742149353" y2="154.9769692293803"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                                <line x1="-9.987243938446046" y1="193.72121153672538"
                                                                    x2="289.6300742149353" y2="193.72121153672538"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical"></g>
                                                            <line x1="0" y1="232.46545384407045" x2="279.64283027648924"
                                                                y2="232.46545384407045" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0" y2="232.46545384407045"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders">
                                                            <line x1="-9.987243938446046" y1="0" x2="289.6300742149353"
                                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-9.987243938446046" y1="232.46545384407045"
                                                                x2="289.6300742149353" y2="232.46545384407045"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="-9.987243938446046" y1="232.46545384407045"
                                                                x2="289.6300742149353" y2="232.46545384407045"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" rel="1" seriesName="OpenxCampaign"
                                                                data:realIndex="0">
                                                                <path
                                                                    d="M -4.660713837941487 227.46645384407046 L -4.660713837941487 64.57027254754306 C -4.660713837941487 62.070272547543055 -2.160713837941487 59.57027254754305 0.3392861620585128 59.57027254754305 L 0.3392861620585128 59.57027254754305 C 2.5 59.57027254754305 4.660713837941487 62.070272547543055 4.660713837941487 64.57027254754306 L 4.660713837941487 227.46645384407046 C 4.660713837941487 229.96645384407046 2.160713837941487 232.46645384407046 -0.3392861620585128 232.46645384407046 L -0.3392861620585128 232.46645384407046 C -2.5 232.46645384407046 -4.660713837941487 229.96645384407046 -4.660713837941487 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M -4.660713837941487 227.46645384407046 L -4.660713837941487 64.57027254754306 C -4.660713837941487 62.070272547543055 -2.160713837941487 59.57027254754305 0.3392861620585128 59.57027254754305 L 0.3392861620585128 59.57027254754305 C 2.5 59.57027254754305 4.660713837941487 62.070272547543055 4.660713837941487 64.57027254754306 L 4.660713837941487 227.46645384407046 C 4.660713837941487 229.96645384407046 2.160713837941487 232.46645384407046 -0.3392861620585128 232.46645384407046 L -0.3392861620585128 232.46645384407046 C -2.5 232.46645384407046 -4.660713837941487 229.96645384407046 -4.660713837941487 227.46645384407046 Z "
                                                                    pathFrom="M -6.1696023114522305 227.46645384407046 L -6.1696023114522305 64.57027254754306 C -6.1696023114522305 62.070272547543055 -3.6696023114522305 59.57027254754305 -1.1696023114522305 59.57027254754305 L 1.1696023114522305 59.57027254754305 C 3.6696023114522305 59.57027254754305 6.1696023114522305 62.070272547543055 6.1696023114522305 64.57027254754306 L 6.1696023114522305 227.46645384407046 C 6.1696023114522305 229.96645384407046 3.6696023114522305 232.46645384407046 1.1696023114522305 232.46645384407046 L -1.1696023114522305 232.46645384407046 C -3.6696023114522305 232.46645384407046 -6.1696023114522305 229.96645384407046 -6.1696023114522305 227.46645384407046 Z  L -4.660713837941487 232.46645384407046 L 4.660713837941487 232.46645384407046 L 4.660713837941487 232.46645384407046 L 4.660713837941487 232.46645384407046 L 4.660713837941487 232.46645384407046 L 4.660713837941487 232.46645384407046 L -4.660713837941487 232.46645384407046 Z"
                                                                    cy="59.56927254754305" cx="4.660713837941487" j="0"
                                                                    val="89.25" barHeight="172.8961812965274"
                                                                    barWidth="9.321427675882974"></path>
                                                                <path
                                                                    d="M 41.946424541473384 227.46645384407046 L 41.946424541473384 46.496083511166596 C 41.946424541473384 43.996083511166596 44.446424541473384 41.496083511166596 46.946424541473384 41.496083511166596 L 46.946424541473384 41.496083511166596 C 49.10713837941487 41.496083511166596 51.26785221735636 43.996083511166596 51.26785221735636 46.496083511166596 L 51.26785221735636 227.46645384407046 C 51.26785221735636 229.96645384407046 48.76785221735636 232.46645384407046 46.26785221735636 232.46645384407046 L 46.26785221735636 232.46645384407046 C 44.10713837941487 232.46645384407046 41.946424541473384 229.96645384407046 41.946424541473384 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M 41.946424541473384 227.46645384407046 L 41.946424541473384 46.496083511166596 C 41.946424541473384 43.996083511166596 44.446424541473384 41.496083511166596 46.946424541473384 41.496083511166596 L 46.946424541473384 41.496083511166596 C 49.10713837941487 41.496083511166596 51.26785221735636 43.996083511166596 51.26785221735636 46.496083511166596 L 51.26785221735636 227.46645384407046 C 51.26785221735636 229.96645384407046 48.76785221735636 232.46645384407046 46.26785221735636 232.46645384407046 L 46.26785221735636 232.46645384407046 C 44.10713837941487 232.46645384407046 41.946424541473384 229.96645384407046 41.946424541473384 227.46645384407046 Z "
                                                                    pathFrom="M 55.526420803070074 227.46645384407046 L 55.526420803070074 46.496083511166596 C 55.526420803070074 43.996083511166596 58.026420803070074 41.496083511166596 60.526420803070074 41.496083511166596 L 62.86562542597454 41.496083511166596 C 65.36562542597454 41.496083511166596 67.86562542597454 43.996083511166596 67.86562542597454 46.496083511166596 L 67.86562542597454 227.46645384407046 C 67.86562542597454 229.96645384407046 65.36562542597454 232.46645384407046 62.86562542597454 232.46645384407046 L 60.526420803070074 232.46645384407046 C 58.026420803070074 232.46645384407046 55.526420803070074 229.96645384407046 55.526420803070074 227.46645384407046 Z  L 41.946424541473384 232.46645384407046 L 51.26785221735636 232.46645384407046 L 51.26785221735636 232.46645384407046 L 51.26785221735636 232.46645384407046 L 51.26785221735636 232.46645384407046 L 51.26785221735636 232.46645384407046 L 41.946424541473384 232.46645384407046 Z"
                                                                    cy="41.4950835111666" cx="51.26785221735636" j="1"
                                                                    val="98.58" barHeight="190.97037033290385"
                                                                    barWidth="9.321427675882974"></path>
                                                                <path
                                                                    d="M 88.55356292088825 227.46645384407046 L 88.55356292088825 104.30249303372545 C 88.55356292088825 101.80249303372545 91.05356292088825 99.30249303372545 93.55356292088825 99.30249303372545 L 93.55356292088825 99.30249303372545 C 95.71427675882974 99.30249303372545 97.87499059677123 101.80249303372545 97.87499059677123 104.30249303372545 L 97.87499059677123 227.46645384407046 C 97.87499059677123 229.96645384407046 95.37499059677123 232.46645384407046 92.87499059677123 232.46645384407046 L 92.87499059677123 232.46645384407046 C 90.71427675882974 232.46645384407046 88.55356292088825 229.96645384407046 88.55356292088825 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M 88.55356292088825 227.46645384407046 L 88.55356292088825 104.30249303372545 C 88.55356292088825 101.80249303372545 91.05356292088825 99.30249303372545 93.55356292088825 99.30249303372545 L 93.55356292088825 99.30249303372545 C 95.71427675882974 99.30249303372545 97.87499059677123 101.80249303372545 97.87499059677123 104.30249303372545 L 97.87499059677123 227.46645384407046 C 97.87499059677123 229.96645384407046 95.37499059677123 232.46645384407046 92.87499059677123 232.46645384407046 L 92.87499059677123 232.46645384407046 C 90.71427675882974 232.46645384407046 88.55356292088825 229.96645384407046 88.55356292088825 227.46645384407046 Z "
                                                                    pathFrom="M 117.22244391759239 227.46645384407046 L 117.22244391759239 104.30249303372545 C 117.22244391759239 101.80249303372545 119.72244391759239 99.30249303372545 122.22244391759239 99.30249303372545 L 124.56164854049683 99.30249303372545 C 127.06164854049683 99.30249303372545 129.56164854049683 101.80249303372545 129.56164854049683 104.30249303372545 L 129.56164854049683 227.46645384407046 C 129.56164854049683 229.96645384407046 127.06164854049683 232.46645384407046 124.56164854049683 232.46645384407046 L 122.22244391759239 232.46645384407046 C 119.72244391759239 232.46645384407046 117.22244391759239 229.96645384407046 117.22244391759239 227.46645384407046 Z  L 88.55356292088825 232.46645384407046 L 97.87499059677123 232.46645384407046 L 97.87499059677123 232.46645384407046 L 97.87499059677123 232.46645384407046 L 97.87499059677123 232.46645384407046 L 97.87499059677123 232.46645384407046 L 88.55356292088825 232.46645384407046 Z"
                                                                    cy="99.30149303372545" cx="97.87499059677123" j="2"
                                                                    val="68.74" barHeight="133.163960810345"
                                                                    barWidth="9.321427675882974"></path>
                                                                <path
                                                                    d="M 135.16070130030312 227.46645384407046 L 135.16070130030312 26.56217084403752 C 135.16070130030312 24.06217084403752 137.66070130030312 21.56217084403752 140.16070130030312 21.56217084403752 L 140.16070130030312 21.56217084403752 C 142.32141513824462 21.56217084403752 144.4821289761861 24.06217084403752 144.4821289761861 26.56217084403752 L 144.4821289761861 227.46645384407046 C 144.4821289761861 229.96645384407046 141.9821289761861 232.46645384407046 139.4821289761861 232.46645384407046 L 139.4821289761861 232.46645384407046 C 137.32141513824462 232.46645384407046 135.16070130030312 229.96645384407046 135.16070130030312 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M 135.16070130030312 227.46645384407046 L 135.16070130030312 26.56217084403752 C 135.16070130030312 24.06217084403752 137.66070130030312 21.56217084403752 140.16070130030312 21.56217084403752 L 140.16070130030312 21.56217084403752 C 142.32141513824462 21.56217084403752 144.4821289761861 24.06217084403752 144.4821289761861 26.56217084403752 L 144.4821289761861 227.46645384407046 C 144.4821289761861 229.96645384407046 141.9821289761861 232.46645384407046 139.4821289761861 232.46645384407046 L 139.4821289761861 232.46645384407046 C 137.32141513824462 232.46645384407046 135.16070130030312 229.96645384407046 135.16070130030312 227.46645384407046 Z "
                                                                    pathFrom="M 178.91846703211468 227.46645384407046 L 178.91846703211468 26.56217084403752 C 178.91846703211468 24.06217084403752 181.41846703211468 21.56217084403752 183.91846703211468 21.56217084403752 L 186.25767165501912 21.56217084403752 C 188.75767165501912 21.56217084403752 191.25767165501912 24.06217084403752 191.25767165501912 26.56217084403752 L 191.25767165501912 227.46645384407046 C 191.25767165501912 229.96645384407046 188.75767165501912 232.46645384407046 186.25767165501912 232.46645384407046 L 183.91846703211468 232.46645384407046 C 181.41846703211468 232.46645384407046 178.91846703211468 229.96645384407046 178.91846703211468 227.46645384407046 Z  L 135.16070130030312 232.46645384407046 L 144.4821289761861 232.46645384407046 L 144.4821289761861 232.46645384407046 L 144.4821289761861 232.46645384407046 L 144.4821289761861 232.46645384407046 L 144.4821289761861 232.46645384407046 L 135.16070130030312 232.46645384407046 Z"
                                                                    cy="21.56117084403752" cx="144.4821289761861" j="3"
                                                                    val="108.87" barHeight="210.90428300003293"
                                                                    barWidth="9.321427675882974"></path>
                                                                <path
                                                                    d="M 181.76783967971798 227.46645384407046 L 181.76783967971798 87.2550264184936 C 181.76783967971798 84.7550264184936 184.26783967971798 82.2550264184936 186.76783967971798 82.2550264184936 L 186.76783967971798 82.2550264184936 C 188.92855351765945 82.2550264184936 191.08926735560095 84.7550264184936 191.08926735560095 87.2550264184936 L 191.08926735560095 227.46645384407046 C 191.08926735560095 229.96645384407046 188.58926735560095 232.46645384407046 186.08926735560095 232.46645384407046 L 186.08926735560095 232.46645384407046 C 183.92855351765945 232.46645384407046 181.76783967971798 229.96645384407046 181.76783967971798 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M 181.76783967971798 227.46645384407046 L 181.76783967971798 87.2550264184936 C 181.76783967971798 84.7550264184936 184.26783967971798 82.2550264184936 186.76783967971798 82.2550264184936 L 186.76783967971798 82.2550264184936 C 188.92855351765945 82.2550264184936 191.08926735560095 84.7550264184936 191.08926735560095 87.2550264184936 L 191.08926735560095 227.46645384407046 C 191.08926735560095 229.96645384407046 188.58926735560095 232.46645384407046 186.08926735560095 232.46645384407046 L 186.08926735560095 232.46645384407046 C 183.92855351765945 232.46645384407046 181.76783967971798 229.96645384407046 181.76783967971798 227.46645384407046 Z "
                                                                    pathFrom="M 240.614490146637 227.46645384407046 L 240.614490146637 87.2550264184936 C 240.614490146637 84.7550264184936 243.114490146637 82.2550264184936 245.614490146637 82.2550264184936 L 247.95369476954147 82.2550264184936 C 250.45369476954147 82.2550264184936 252.95369476954147 84.7550264184936 252.95369476954147 87.2550264184936 L 252.95369476954147 227.46645384407046 C 252.95369476954147 229.96645384407046 250.45369476954147 232.46645384407046 247.95369476954147 232.46645384407046 L 245.614490146637 232.46645384407046 C 243.114490146637 232.46645384407046 240.614490146637 229.96645384407046 240.614490146637 227.46645384407046 Z  L 181.76783967971798 232.46645384407046 L 191.08926735560095 232.46645384407046 L 191.08926735560095 232.46645384407046 L 191.08926735560095 232.46645384407046 L 191.08926735560095 232.46645384407046 L 191.08926735560095 232.46645384407046 L 181.76783967971798 232.46645384407046 Z"
                                                                    cy="82.2540264184936" cx="191.08926735560095" j="4"
                                                                    val="77.54" barHeight="150.21142742557686"
                                                                    barWidth="9.321427675882974"></path>
                                                                <path
                                                                    d="M 228.37497805913284 227.46645384407046 L 228.37497805913284 74.68251978976014 C 228.37497805913284 72.18251978976014 230.87497805913284 69.68251978976014 233.37497805913284 69.68251978976014 L 233.37497805913284 69.68251978976014 C 235.53569189707434 69.68251978976014 237.69640573501582 72.18251978976014 237.69640573501582 74.68251978976014 L 237.69640573501582 227.46645384407046 C 237.69640573501582 229.96645384407046 235.19640573501582 232.46645384407046 232.69640573501582 232.46645384407046 L 232.69640573501582 232.46645384407046 C 230.53569189707434 232.46645384407046 228.37497805913284 229.96645384407046 228.37497805913284 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M 228.37497805913284 227.46645384407046 L 228.37497805913284 74.68251978976014 C 228.37497805913284 72.18251978976014 230.87497805913284 69.68251978976014 233.37497805913284 69.68251978976014 L 233.37497805913284 69.68251978976014 C 235.53569189707434 69.68251978976014 237.69640573501582 72.18251978976014 237.69640573501582 74.68251978976014 L 237.69640573501582 227.46645384407046 C 237.69640573501582 229.96645384407046 235.19640573501582 232.46645384407046 232.69640573501582 232.46645384407046 L 232.69640573501582 232.46645384407046 C 230.53569189707434 232.46645384407046 228.37497805913284 229.96645384407046 228.37497805913284 227.46645384407046 Z "
                                                                    pathFrom="M 302.31051326115926 227.46645384407046 L 302.31051326115926 74.68251978976014 C 302.31051326115926 72.18251978976014 304.81051326115926 69.68251978976014 307.31051326115926 69.68251978976014 L 309.6497178840637 69.68251978976014 C 312.1497178840637 69.68251978976014 314.6497178840637 72.18251978976014 314.6497178840637 74.68251978976014 L 314.6497178840637 227.46645384407046 C 314.6497178840637 229.96645384407046 312.1497178840637 232.46645384407046 309.6497178840637 232.46645384407046 L 307.31051326115926 232.46645384407046 C 304.81051326115926 232.46645384407046 302.31051326115926 229.96645384407046 302.31051326115926 227.46645384407046 Z  L 228.37497805913284 232.46645384407046 L 237.69640573501582 232.46645384407046 L 237.69640573501582 232.46645384407046 L 237.69640573501582 232.46645384407046 L 237.69640573501582 232.46645384407046 L 237.69640573501582 232.46645384407046 L 228.37497805913284 232.46645384407046 Z"
                                                                    cy="69.68151978976013" cx="237.69640573501582" j="5"
                                                                    val="84.03" barHeight="162.78393405431032"
                                                                    barWidth="9.321427675882974"></path>
                                                                <path
                                                                    d="M 274.98211643854773 227.46645384407046 L 274.98211643854773 138.20370505265237 C 274.98211643854773 135.70370505265237 277.48211643854773 133.20370505265237 279.98211643854773 133.20370505265237 L 279.98211643854773 133.20370505265237 C 282.14283027648924 133.20370505265237 284.30354411443074 135.70370505265237 284.30354411443074 138.20370505265237 L 284.30354411443074 227.46645384407046 C 284.30354411443074 229.96645384407046 281.80354411443074 232.46645384407046 279.30354411443074 232.46645384407046 L 279.30354411443074 232.46645384407046 C 277.14283027648924 232.46645384407046 274.98211643854773 229.96645384407046 274.98211643854773 227.46645384407046 Z "
                                                                    fill="rgba(24,138,226,0.85)" fill-opacity="1"
                                                                    stroke="#188ae2" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-bar-area undefined" index="0"
                                                                    clip-path="url(#gridRectBarMaskoc9smh33)"
                                                                    pathTo="M 274.98211643854773 227.46645384407046 L 274.98211643854773 138.20370505265237 C 274.98211643854773 135.70370505265237 277.48211643854773 133.20370505265237 279.98211643854773 133.20370505265237 L 279.98211643854773 133.20370505265237 C 282.14283027648924 133.20370505265237 284.30354411443074 135.70370505265237 284.30354411443074 138.20370505265237 L 284.30354411443074 227.46645384407046 C 284.30354411443074 229.96645384407046 281.80354411443074 232.46645384407046 279.30354411443074 232.46645384407046 L 279.30354411443074 232.46645384407046 C 277.14283027648924 232.46645384407046 274.98211643854773 229.96645384407046 274.98211643854773 227.46645384407046 Z "
                                                                    pathFrom="M 364.00653637568155 227.46645384407046 L 364.00653637568155 138.20370505265237 C 364.00653637568155 135.70370505265237 366.50653637568155 133.20370505265237 369.00653637568155 133.20370505265237 L 371.345740998586 133.20370505265237 C 373.845740998586 133.20370505265237 376.345740998586 135.70370505265237 376.345740998586 138.20370505265237 L 376.345740998586 227.46645384407046 C 376.345740998586 229.96645384407046 373.845740998586 232.46645384407046 371.345740998586 232.46645384407046 L 369.00653637568155 232.46645384407046 C 366.50653637568155 232.46645384407046 364.00653637568155 229.96645384407046 364.00653637568155 227.46645384407046 Z  L 274.98211643854773 232.46645384407046 L 284.30354411443074 232.46645384407046 L 284.30354411443074 232.46645384407046 L 284.30354411443074 232.46645384407046 L 284.30354411443074 232.46645384407046 L 284.30354411443074 232.46645384407046 L 274.98211643854773 232.46645384407046 Z"
                                                                    cy="133.20270505265236" cx="284.30354411443074" j="6"
                                                                    val="51.24" barHeight="99.26274879141809"
                                                                    barWidth="9.321427675882974"></path>
                                                                <g class="apexcharts-bar-goals-markers">
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                    <g className="apexcharts-bar-goals-groups"
                                                                        class="apexcharts-hidden-element-shown"
                                                                        clip-path="url(#gridRectMarkerMaskoc9smh33)"></g>
                                                                </g>
                                                                <g
                                                                    class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line x1="-9.987243938446046" y1="0" x2="289.6300742149353" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line x1="-9.987243938446046" y1="0" x2="289.6300742149353" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text x="0"
                                                                    y="260.46545384407045" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2019</tspan>
                                                                    <title>2019</title>
                                                                </text><text x="46.60713837941488" y="260.46545384407045"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2020</tspan>
                                                                    <title>2020</title>
                                                                </text><text x="93.21427675882974" y="260.46545384407045"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2021</tspan>
                                                                    <title>2021</title>
                                                                </text><text x="139.8214151382446" y="260.46545384407045"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2022</tspan>
                                                                    <title>2022</title>
                                                                </text><text x="186.42855351765945" y="260.46545384407045"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2023</tspan>
                                                                    <title>2023</title>
                                                                </text><text x="233.03569189707434" y="260.46545384407045"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2024</tspan>
                                                                    <title>2024</title>
                                                                </text><text x="279.64283027648924" y="260.46545384407045"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>2025</tspan>
                                                                    <title>2025</title>
                                                                </text></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1">
                                                    <div class="apexcharts-tooltip-title" bis_skin_checked="1"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                        bis_skin_checked="1" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(24, 138, 226);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label"></span><span
                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                    bis_skin_checked="1">
                                                    <div class="apexcharts-xaxistooltip-text" bis_skin_checked="1"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                                    bis_skin_checked="1">
                                                    <div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </apx-chart>
                                </div>
                            </div>
                            <div class="border-top border-dashed mt-2" bis_skin_checked="1">
                                <div class="row text-center align-items-center g-0" bis_skin_checked="1">
                                    <div class="col-md-4 col-6" bis_skin_checked="1">
                                        <p class="text-muted mt-3 mb-1">Revenue</p>
                                        <h4 class="mb-3"><span
                                                class="ri-arrow-left-down-box-line text-success me-1"></span><span>$29.5k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-4 col-6 border-start border-end border-dashed" bis_skin_checked="1">
                                        <p class="text-muted mt-3 mb-1">Expenses</p>
                                        <h4 class="mb-3"><span
                                                class="ri-arrow-left-up-box-line text-danger me-1"></span><span>$15.07k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-4 col" bis_skin_checked="1">
                                        <p class="text-muted mt-3 mb-1">Revenue</p>
                                        <h4 class="mb-3"><span
                                                class="ri-arrow-left-down-box-line text-success me-1"></span><span>$71.5k</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </app-statistics></div>
            <div class="col-xxl-4 col-xl-12" bis_skin_checked="1"><app-total-revenue>
                    <div class="card" bis_skin_checked="1">
                        <div class="d-flex card-header justify-content-between align-items-center border-bottom border-dashed"
                            bis_skin_checked="1">
                            <h4 class="header-title">Total Revenue</h4>
                            <div ngbdropdown="" class="dropdown" bis_skin_checked="1"><a href="javascript:void(0);"
                                    ngbdropdowntoggle="" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="dropdown-toggle drop-arrow-none card-drop"><i
                                        class="ri-more-2-fill fs-18"></i></a>
                                <div ngbdropdownmenu="" class="dropdown-menu dropdown-menu-end" bis_skin_checked="1"><a
                                        href="javascript:void(0);" class="dropdown-item">Sales Report</a><a
                                        href="javascript:void(0);" class="dropdown-item">Export Report</a><a
                                        href="javascript:void(0);" class="dropdown-item">Profit</a><a
                                        href="javascript:void(0);" class="dropdown-item">Action</a></div>
                            </div>
                        </div>
                        <div class="card-body p-0 pt-1" bis_skin_checked="1">
                            <div dir="ltr" class="px-2" bis_skin_checked="1">
                                <div id="revenue-chart" data-colors="#10c469,#35b8e0" class="apex-charts"
                                    bis_skin_checked="1"><apx-chart>
                                        <div bis_skin_checked="1" style="min-height: 314px;"
                                            class="apexcharts-tooltip-active">
                                            <div id="apexchartsvn3p77nk"
                                                class="apexcharts-canvas apexchartsvn3p77nk apexcharts-theme-"
                                                bis_skin_checked="1" style="width: 374px; height: 299px;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="374"
                                                    height="299">
                                                    <foreignObject x="0" y="0" width="374" height="299">
                                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                            xmlns="http://www.w3.org/1999/xhtml" bis_skin_checked="1"
                                                            style="right: 0px; position: absolute; left: 0px; top: 274px; max-height: 149.5px;">
                                                            <div class="apexcharts-legend-series" rel="1"
                                                                seriesname="TotalxIncome" data:collapsed="false"
                                                                bis_skin_checked="1" style="margin: 4px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="1"
                                                                    data:collapsed="false"
                                                                    style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="100%" height="100%">
                                                                        <path d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#10c469" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="1"
                                                                            stroke-dasharray="0" cx="0" cy="0"
                                                                            shape="circle"
                                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                            style="transform: translate(50%, 50%);"></path>
                                                                    </svg></span><span class="apexcharts-legend-text"
                                                                    rel="1" i="0" data:default-text="Total%20Income"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Total
                                                                    Income</span></div>
                                                            <div class="apexcharts-legend-series" rel="2"
                                                                seriesname="TotalxExpenses" data:collapsed="false"
                                                                bis_skin_checked="1" style="margin: 4px 5px;"><span
                                                                    class="apexcharts-legend-marker" rel="2"
                                                                    data:collapsed="false"
                                                                    style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="100%" height="100%">
                                                                        <path d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#35b8e0" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="1"
                                                                            stroke-dasharray="0" cx="0" cy="0"
                                                                            shape="circle"
                                                                            class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                            style="transform: translate(50%, 50%);"></path>
                                                                    </svg></span><span class="apexcharts-legend-text"
                                                                    rel="2" i="1" data:default-text="Total%20Expenses"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Total
                                                                    Expenses</span></div>
                                                        </div>

                                                    </foreignObject>
                                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                                    </rect>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0"
                                                        transform="translate(14.920988082885742, 0)">
                                                        <g class="apexcharts-yaxis-texts-g"><text x="20"
                                                                y="33.666666666666664" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>100</tspan>
                                                                <title>100</title>
                                                            </text><text x="20" y="85.28303012768427" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>80</tspan>
                                                                <title>80</title>
                                                            </text><text x="20" y="136.89939358870188" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>60</tspan>
                                                                <title>60</title>
                                                            </text><text x="20" y="188.5157570497195" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>40</tspan>
                                                                <title>40</title>
                                                            </text><text x="20" y="240.1321205107371" text-anchor="end"
                                                                dominant-baseline="auto" font-size="11px"
                                                                font-family="Helvetica, Arial, sans-serif" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan>20</tspan>
                                                                <title>20</title>
                                                            </text></g>
                                                    </g>
                                                    <g class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(44.92098808288574, 30)">
                                                        <defs>
                                                            <clipPath id="gridRectMaskvn3p77nk">
                                                                <rect width="307.1491241455078" height="206.46545384407042"
                                                                    x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMaskvn3p77nk">
                                                                <rect width="314.1491241455078" height="213.46545384407042"
                                                                    x="-3.5" y="-3.5" rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskvn3p77nk">
                                                                <rect width="307.1491241455078" height="206.46545384407042"
                                                                    x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskvn3p77nk"></clipPath>
                                                            <clipPath id="nonForecastMaskvn3p77nk"></clipPath>
                                                        </defs>
                                                        <line x1="167.03588589754972" y1="0" x2="167.03588589754972"
                                                            y2="206.46545384407042" stroke="#b6b6b6" stroke-dasharray="3"
                                                            stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs apexcharts-active"
                                                            x="167.03588589754972" y="0" width="1"
                                                            height="206.46545384407042" fill="#b1b9c4" filter="none"
                                                            fill-opacity="0.9" stroke-width="1"></line>
                                                        <line x1="0" y1="206.46545384407042" x2="0" y2="212.46545384407042"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="27.92264764959162" y1="206.46545384407042"
                                                            x2="27.92264764959162" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="55.84529529918324" y1="206.46545384407042"
                                                            x2="55.84529529918324" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="83.76794294877486" y1="206.46545384407042"
                                                            x2="83.76794294877486" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="111.69059059836648" y1="206.46545384407042"
                                                            x2="111.69059059836648" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="139.6132382479581" y1="206.46545384407042"
                                                            x2="139.6132382479581" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="167.53588589754972" y1="206.46545384407042"
                                                            x2="167.53588589754972" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="195.45853354714134" y1="206.46545384407042"
                                                            x2="195.45853354714134" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="223.38118119673297" y1="206.46545384407042"
                                                            x2="223.38118119673297" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="251.3038288463246" y1="206.46545384407042"
                                                            x2="251.3038288463246" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="279.2264764959162" y1="206.46545384407042"
                                                            x2="279.2264764959162" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line x1="307.1491241455078" y1="206.46545384407042"
                                                            x2="307.1491241455078" y2="212.46545384407042" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal">
                                                                <line x1="0" y1="51.616363461017606" x2="307.1491241455078"
                                                                    y2="51.616363461017606" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="103.23272692203521" x2="307.1491241455078"
                                                                    y2="103.23272692203521" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="154.8490903830528" x2="307.1491241455078"
                                                                    y2="154.8490903830528" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical"></g>
                                                            <line x1="0" y1="206.46545384407042" x2="307.1491241455078"
                                                                y2="206.46545384407042" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0" y2="206.46545384407042"
                                                                stroke="transparent" stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders">
                                                            <line x1="0" y1="0" x2="307.1491241455078" y2="0"
                                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="206.46545384407042" x2="307.1491241455078"
                                                                y2="206.46545384407042" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line x1="0" y1="206.46545384407042" x2="307.1491241455078"
                                                                y2="206.46545384407042" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">
                                                            </line>
                                                        </g>
                                                        <g class="apexcharts-line-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" zIndex="0"
                                                                seriesName="TotalxIncome" data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path
                                                                    d="M 0 46.45472711491581 L 27.92264764959162 38.71227259576318 L 55.84529529918324 77.42454519152639 L 83.76794294877486 25.808181730508778 L 111.69059059836648 64.52045432627199 L 139.6132382479581 56.77799980711933 L 167.53588589754972 90.3286360567808 L 195.45853354714134 129.04090865254398 L 223.38118119673297 72.26290884542462 L 251.3038288463246 103.2327269220352 L 279.2264764959162 51.616363461017585 L 307.1491241455078 77.42454519152639"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(16,196,105,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="3"
                                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                    clip-path="url(#gridRectMaskvn3p77nk)"
                                                                    pathTo="M 0 46.45472711491581 L 27.92264764959162 38.71227259576318 L 55.84529529918324 77.42454519152639 L 83.76794294877486 25.808181730508778 L 111.69059059836648 64.52045432627199 L 139.6132382479581 56.77799980711933 L 167.53588589754972 90.3286360567808 L 195.45853354714134 129.04090865254398 L 223.38118119673297 72.26290884542462 L 251.3038288463246 103.2327269220352 L 279.2264764959162 51.616363461017585 L 307.1491241455078 77.42454519152639"
                                                                    pathFrom="M 0 206.46545384407042 L 0 206.46545384407042 L 27.92264764959162 206.46545384407042 L 55.84529529918324 206.46545384407042 L 83.76794294877486 206.46545384407042 L 111.69059059836648 206.46545384407042 L 139.6132382479581 206.46545384407042 L 167.53588589754972 206.46545384407042 L 195.45853354714134 206.46545384407042 L 223.38118119673297 206.46545384407042 L 251.3038288463246 206.46545384407042 L 279.2264764959162 206.46545384407042 L 307.1491241455078 206.46545384407042"
                                                                    fill-rule="evenodd"></path>
                                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <path d="M 167.53588589754972, 90.3286360567808 
           m -6, 0 
           a 6,6 0 1,0 12,0 
           a 6,6 0 1,0 -12,0" fill="#10c469" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" cx="167.53588589754972"
                                                                            cy="0" shape="circle"
                                                                            class="apexcharts-marker wndt4py13 no-pointer-events"
                                                                            default-marker-size="0"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-series" zIndex="1"
                                                                seriesName="TotalxExpenses" data:longestSeries="true"
                                                                rel="2" data:realIndex="1">
                                                                <path
                                                                    d="M 0 180.6572721135616 L 27.92264764959162 175.49563576745982 L 55.84529529918324 154.84909038305278 L 83.76794294877486 167.75318124830721 L 111.69059059836648 180.6572721135616 L 139.6132382479581 165.17236307525633 L 167.53588589754972 162.59154490220544 L 195.45853354714134 185.81890845966336 L 223.38118119673297 170.33399942135807 L 251.3038288463246 149.68745403695104 L 279.2264764959162 160.01072672915456 L 307.1491241455078 180.6572721135616"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(53,184,224,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="3"
                                                                    stroke-dasharray="0" class="apexcharts-line" index="1"
                                                                    clip-path="url(#gridRectMaskvn3p77nk)"
                                                                    pathTo="M 0 180.6572721135616 L 27.92264764959162 175.49563576745982 L 55.84529529918324 154.84909038305278 L 83.76794294877486 167.75318124830721 L 111.69059059836648 180.6572721135616 L 139.6132382479581 165.17236307525633 L 167.53588589754972 162.59154490220544 L 195.45853354714134 185.81890845966336 L 223.38118119673297 170.33399942135807 L 251.3038288463246 149.68745403695104 L 279.2264764959162 160.01072672915456 L 307.1491241455078 180.6572721135616"
                                                                    pathFrom="M 0 206.46545384407042 L 0 206.46545384407042 L 27.92264764959162 206.46545384407042 L 55.84529529918324 206.46545384407042 L 83.76794294877486 206.46545384407042 L 111.69059059836648 206.46545384407042 L 139.6132382479581 206.46545384407042 L 167.53588589754972 206.46545384407042 L 195.45853354714134 206.46545384407042 L 223.38118119673297 206.46545384407042 L 251.3038288463246 206.46545384407042 L 279.2264764959162 206.46545384407042 L 307.1491241455078 206.46545384407042"
                                                                    fill-rule="evenodd"></path>
                                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="1">
                                                                    <g class="apexcharts-series-markers">
                                                                        <path d="M 167.53588589754972, 162.59154490220544 
           m -6, 0 
           a 6,6 0 1,0 12,0 
           a 6,6 0 1,0 -12,0" fill="#35b8e0" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" cx="167.53588589754972"
                                                                            cy="0" shape="circle"
                                                                            class="apexcharts-marker wbv5xn0rx no-pointer-events"
                                                                            default-marker-size="0"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            <g class="apexcharts-datalabels" data:realIndex="1"></g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="307.1491241455078" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="307.1491241455078" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"><text x="0"
                                                                    y="234.46545384407042" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text><text x="27.922647649591617" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text><text x="55.845295299183235" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text><text x="83.76794294877486" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text><text x="111.69059059836648" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>May</tspan>
                                                                    <title>May</title>
                                                                </text><text x="139.6132382479581" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text><text x="167.53588589754972" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text><text x="195.45853354714134" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text><text x="223.38118119673297" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text><text x="251.3038288463246" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text><text x="279.22647649591624" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text><text x="307.14912414550787" y="234.46545384407042"
                                                                    text-anchor="middle" dominant-baseline="auto"
                                                                    font-size="12px"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    font-weight="400" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan>Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-light apexcharts-active"
                                                    bis_skin_checked="1" style="left: 24.921px; top: 93.3286px;">
                                                    <div class="apexcharts-tooltip-title" bis_skin_checked="1"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        Jul</div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0 apexcharts-active"
                                                        bis_skin_checked="1" style="order: 1; display: flex;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(16, 196, 105);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label">Total Income:
                                                                </span><span
                                                                    class="apexcharts-tooltip-text-y-value">$65.00k</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1 apexcharts-active"
                                                        bis_skin_checked="1" style="order: 2; display: flex;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(53, 184, 224);"></span>
                                                        <div class="apexcharts-tooltip-text" bis_skin_checked="1"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-y-label">Total
                                                                    Expenses: </span><span
                                                                    class="apexcharts-tooltip-text-y-value">$37.00k</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group"
                                                                bis_skin_checked="1"><span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group" bis_skin_checked="1">
                                                                <span class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light apexcharts-active"
                                                    bis_skin_checked="1" style="left: 193.396px; top: 238.465px;">
                                                    <div class="apexcharts-xaxistooltip-text" bis_skin_checked="1"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 14.5184px;">
                                                        Jul</div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                                    bis_skin_checked="1">
                                                    <div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </apx-chart></div>
                            </div>
                            <div class="border-top border-dashed mt-2" bis_skin_checked="1">
                                <div class="row text-center align-items-center g-0" bis_skin_checked="1">
                                    <div class="col-md-4 col-12" bis_skin_checked="1">
                                        <p class="text-muted mb-0">Payments</p><img
                                            src="assets/images/cards/american-express.svg" alt="user-card" height="36"><img
                                            src="assets/images/cards/discover-card.svg" alt="user-card" height="36"><img
                                            src="assets/images/cards/mastercard.svg" alt="user-card" height="36">
                                    </div>
                                    <div class="col-md-4 col-6 border-start border-end border-dashed" bis_skin_checked="1">
                                        <p class="text-muted mt-3 mb-1">Expenses</p>
                                        <h4 class="mb-3"><span
                                                class="ri-arrow-left-up-box-line text-danger me-1"></span><span>$15.07k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-4 col" bis_skin_checked="1">
                                        <p class="text-muted mt-3 mb-1">Revenue</p>
                                        <h4 class="mb-3"><span
                                                class="ri-arrow-left-down-box-line text-success me-1"></span><span>$45.5k</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </app-total-revenue></div>
        </div>
    </AppLayout>
</template>
<style scoped>
.apexcharts-flip-y {
    transform: scaleY(-1) translateY(-100%);
    transform-origin: top;
    transform-box: fill-box;
}

.apexcharts-flip-x {
    transform: scaleX(-1);
    transform-origin: center;
    transform-box: fill-box;
}

.apexcharts-legend {
    display: flex;
    overflow: auto;
    padding: 0 10px;
}

.apexcharts-legend.apexcharts-legend-group-horizontal {
    flex-direction: column;
}

.apexcharts-legend-group {
    display: flex;
}

.apexcharts-legend-group-vertical {
    flex-direction: column-reverse;
}

.apexcharts-legend.apx-legend-position-bottom,
.apexcharts-legend.apx-legend-position-top {
    flex-wrap: wrap
}

.apexcharts-legend.apx-legend-position-right,
.apexcharts-legend.apx-legend-position-left {
    flex-direction: column;
    bottom: 0;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
.apexcharts-legend.apx-legend-position-right,
.apexcharts-legend.apx-legend-position-left {
    justify-content: flex-start;
    align-items: flex-start;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
    justify-content: center;
    align-items: center;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
    justify-content: flex-end;
    align-items: flex-end;
}

.apexcharts-legend-series {
    cursor: pointer;
    line-height: normal;
    display: flex;
    align-items: center;
}

.apexcharts-legend-text {
    position: relative;
    font-size: 14px;
}

.apexcharts-legend-text *,
.apexcharts-legend-marker * {
    pointer-events: none;
}

.apexcharts-legend-marker {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-right: 1px;
}

.apexcharts-legend-series.apexcharts-no-click {
    cursor: auto;
}

.apexcharts-legend .apexcharts-hidden-zero-series,
.apexcharts-legend .apexcharts-hidden-null-series {
    display: none !important;
}

.apexcharts-inactive-legend {
    opacity: 0.45;
}

.apexcharts-flip-y {
    transform: scaleY(-1) translateY(-100%);
    transform-origin: top;
    transform-box: fill-box;
}

.apexcharts-flip-x {
    transform: scaleX(-1);
    transform-origin: center;
    transform-box: fill-box;
}

.apexcharts-legend {
    display: flex;
    overflow: auto;
    padding: 0 10px;
}

.apexcharts-legend.apexcharts-legend-group-horizontal {
    flex-direction: column;
}

.apexcharts-legend-group {
    display: flex;
}

.apexcharts-legend-group-vertical {
    flex-direction: column-reverse;
}

.apexcharts-legend.apx-legend-position-bottom,
.apexcharts-legend.apx-legend-position-top {
    flex-wrap: wrap
}

.apexcharts-legend.apx-legend-position-right,
.apexcharts-legend.apx-legend-position-left {
    flex-direction: column;
    bottom: 0;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
.apexcharts-legend.apx-legend-position-right,
.apexcharts-legend.apx-legend-position-left {
    justify-content: flex-start;
    align-items: flex-start;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
    justify-content: center;
    align-items: center;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
    justify-content: flex-end;
    align-items: flex-end;
}

.apexcharts-legend-series {
    cursor: pointer;
    line-height: normal;
    display: flex;
    align-items: center;
}

.apexcharts-legend-text {
    position: relative;
    font-size: 14px;
}

.apexcharts-legend-text *,
.apexcharts-legend-marker * {
    pointer-events: none;
}

.apexcharts-legend-marker {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-right: 1px;
}

.apexcharts-legend-series.apexcharts-no-click {
    cursor: auto;
}

.apexcharts-legend .apexcharts-hidden-zero-series,
.apexcharts-legend .apexcharts-hidden-null-series {
    display: none !important;
}

.apexcharts-inactive-legend {
    opacity: 0.45;
}

.apexcharts-flip-y {
    transform: scaleY(-1) translateY(-100%);
    transform-origin: top;
    transform-box: fill-box;
}

.apexcharts-flip-x {
    transform: scaleX(-1);
    transform-origin: center;
    transform-box: fill-box;
}

.apexcharts-legend {
    display: flex;
    overflow: auto;
    padding: 0 10px;
}

.apexcharts-legend.apexcharts-legend-group-horizontal {
    flex-direction: column;
}

.apexcharts-legend-group {
    display: flex;
}

.apexcharts-legend-group-vertical {
    flex-direction: column-reverse;
}

.apexcharts-legend.apx-legend-position-bottom,
.apexcharts-legend.apx-legend-position-top {
    flex-wrap: wrap
}

.apexcharts-legend.apx-legend-position-right,
.apexcharts-legend.apx-legend-position-left {
    flex-direction: column;
    bottom: 0;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
.apexcharts-legend.apx-legend-position-right,
.apexcharts-legend.apx-legend-position-left {
    justify-content: flex-start;
    align-items: flex-start;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
    justify-content: center;
    align-items: center;
}

.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
.apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
    justify-content: flex-end;
    align-items: flex-end;
}

.apexcharts-legend-series {
    cursor: pointer;
    line-height: normal;
    display: flex;
    align-items: center;
}

.apexcharts-legend-text {
    position: relative;
    font-size: 14px;
}

.apexcharts-legend-text *,
.apexcharts-legend-marker * {
    pointer-events: none;
}

.apexcharts-legend-marker {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-right: 1px;
}

.apexcharts-legend-series.apexcharts-no-click {
    cursor: auto;
}

.apexcharts-legend .apexcharts-hidden-zero-series,
.apexcharts-legend .apexcharts-hidden-null-series {
    display: none !important;
}

.apexcharts-inactive-legend {
    opacity: 0.45;
}
</style>