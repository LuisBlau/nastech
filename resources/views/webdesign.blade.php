@extends('layouts.app')

@section('content')
    <!-- Revolution Slider -->
    <section id="slider">
        <!-- WELCOME -->
        <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="nice-and-clean-header" data-source="gallery" style="background-color:#2d3032;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-418" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="3000" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/Busy-People.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- BACKGROUND VIDEO LAYER -->
                        <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="plugins/slider-revolution/assets/videos/Busy-People.mp4" data-videopreload="auto" data-videoloop="loop" data-forceCover="1"
                             data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-418-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.25);">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   rs-parallaxlevel-4" id="slide-418-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-70','-60']" data-fontsize="['90','80','70','50']"
                             data-lineheight="['90','80','70','50']" data-fontweight="['500','600','600','600']" data-width="['1001','none','400','320']" data-height="none" data-whitespace="['normal','nowrap','normal','normal']" data-type="text" data-responsive_offset="off"
                             data-responsive="off" data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0px;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                             data-textAlign="['center','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 1001px; max-width: 1001px; white-space: normal; font-size: 90px; line-height: 90px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;">Discover Rvsldr </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   rs-parallaxlevel-4" id="slide-418-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['20','20','30','20']" data-fontsize="['25','25','20','17']"
                             data-lineheight="['30','30','25','25']" data-width="['none','none','480','320']" data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":800,"speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]' data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 0.65);font-family:Poppins;">a new way of building websites. </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-svg-layer" id="slide-418-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['79','40','40','40']" data-width="50" data-height="50"
                             data-whitespace="nowrap" data-type="svg" data-actions='[{"event":"click","action":"scrollbelow","offset":"-90px","delay":"","speed":"300","ease":"Linear.easeNone"}]' data-svg_src="/plugins/slider-revolution/assets/images/ic_keyboard_arrow_down_24px.svg"
                             data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[7,7,7,7]" data-paddingright="[5,5,5,5]" data-paddingbottom="[5,5,5,5]" data-paddingleft="[5,5,5,5]" style="z-index: 8; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; color: rgba(255, 255, 255, 0.65);font-family:Open Sans;border-color:rgba(255, 255, 255, 0.65);border-style:solid;border-width:2px 2px 2px 2px;border-radius:40px 40px 40px 40px;cursor:pointer;">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!-- SERVICES -->
        <div id="rev_slider_158_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-services" data-source="gallery" style="margin:0px auto;background-color:#2d3032;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_158_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-420" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/transparent.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme   rev_group" id="slide-420-layer-12" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="['#1/3#','#1/3#','#1/1#','#1/1#']"
                             data-height="360" data-whitespace="nowrap" data-type="group" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;fb:10px;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: #1/3#px; max-width: #1/3#px; max-width: 360px; max-width: 360px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme  disabled_lc tp-videolayer" id="slide-420-layer-13" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-whitespace="nowrap"
                                 data-type="video" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-videocontrols="none" data-videowidth="100%" data-videoheight="360px" data-videoposter="plugins/slider-revolution/assets/images/vid1.jpg" data-videomp4="plugins/slider-revolution/assets/videos/vid1.mp4" data-noposteronmobile="off"
                                 data-videopreload="auto" data-videoloop="loop" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-autoplay="off" style="z-index: 6;"> </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-420-layer-14" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="360"
                                 data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 7;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);cursor:pointer;"> </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption  " id="slide-420-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="['300','250','480','320']" data-height="none"
                                 data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 300px; max-width: 300px; white-space: normal; font-size: 30px; line-height: 30px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Efficient Work<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">delivered by Slider Revolution</span> </div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-420-layer-15" data-x="['left','left','left','left']" data-hoffset="['-1','-1','-1','-1']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="360"
                                 data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"playvideo","layer":"slide-420-layer-13","delay":""},{"event":"mouseleave","action":"stopvideo","layer":"slide-420-layer-13","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-420-layer-14","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-420-layer-14","delay":""}]'
                                 data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;font-family:Open Sans;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme   rev_group" id="slide-420-layer-16" data-x="['center','center','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','360','360']" data-width="['#1/3#','#1/3#','#1/1#','#1/1#']"
                             data-height="360" data-whitespace="nowrap" data-type="group" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;fb:10px;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; min-width: #1/3#px; max-width: #1/3#px; max-width: 360px; max-width: 360px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme  disabled_lc tp-videolayer" id="slide-420-layer-17" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-whitespace="nowrap"
                                 data-type="video" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-videocontrols="none" data-videowidth="100%" data-videoheight="360px" data-videoposter="plugins/slider-revolution/assets/images/vid2.jpg" data-videomp4="plugins/slider-revolution/assets/videos/vid2.mp4" data-noposteronmobile="off"
                                 data-videopreload="auto" data-videoloop="loop" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-autoplay="off" style="z-index: 11;"> </div>
                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-420-layer-18" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="360"
                                 data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 12;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);cursor:pointer;"> </div>
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption  " id="slide-420-layer-19" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="['300','240','480','320']" data-height="none"
                                 data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 300px; max-width: 300px; white-space: normal; font-size: 30px; line-height: 30px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Join Millions<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">using the best content solution</span> </div>
                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-420-layer-20" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="360"
                                 data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"playvideo","layer":"slide-420-layer-17","delay":""},{"event":"mouseleave","action":"stopvideo","layer":"slide-420-layer-17","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-420-layer-18","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-420-layer-18","delay":""}]'
                                 data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14;font-family:Open Sans;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>
                        </div>
                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme   rev_group" id="slide-420-layer-22" data-x="['right','right','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','720','720']" data-width="['#1/3#','#1/3#','#1/1#','#1/1#']"
                             data-height="360" data-whitespace="nowrap" data-type="group" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;fb:10px;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; min-width: #1/3#px; max-width: #1/3#px; max-width: 360px; max-width: 360px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption   tp-resizeme  disabled_lc tp-videolayer" id="slide-420-layer-23" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-whitespace="nowrap"
                                 data-type="video" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-videocontrols="none" data-videowidth="100%" data-videoheight="360px" data-videoposter="plugins/slider-revolution/assets/images/vid3.jpg" data-videomp4="plugins/slider-revolution/assets/videos/vid3.mp4" data-noposteronmobile="off"
                                 data-videopreload="auto" data-videoloop="loop" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-autoplay="off" style="z-index: 16;"> </div>
                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-420-layer-24" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="360"
                                 data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 17;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);cursor:pointer;"> </div>
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption  " id="slide-420-layer-25" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="['300','240','480','320']" data-height="none"
                                 data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18; min-width: 300px; max-width: 300px; white-space: normal; font-size: 30px; line-height: 30px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Get Started Now<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">and install slider templates</span> </div>
                            <!-- LAYER NR. 15 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-420-layer-26" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="360"
                                 data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"playvideo","layer":"slide-420-layer-23","delay":""},{"event":"mouseleave","action":"stopvideo","layer":"slide-420-layer-23","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-420-layer-24","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-420-layer-24","delay":""}]'
                                 data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bs:solid;bw:0 0 0 0;"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19;font-family:Open Sans;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);cursor:pointer;"> </div>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!-- ABOUT -->
        <div id="about_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-about" data-source="gallery" style="margin:0px auto;background-color:#eef0f1;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="about" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-422" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/transparent.png') }}" data-bgcolor="#eef0f1" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzt_422" class="rev_row_zone rev_row_zone_top" style="z-index: 9;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-422-layer-2" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                 data-type="row" data-columnbreak="2" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[250,250,150,150]" data-marginright="[0,0,0,0]" data-marginbottom="[300,300,150,150]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-422-layer-3" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="50%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 10; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption  " id="slide-422-layer-6" data-x="['left','left','center','center']" data-hoffset="['0','3','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','240','240','240']" data-fontsize="['40','40','40','30']" data-lineheight="['50','50','50','40']"
                                         data-width="['100%','472','100%','100%']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 40px; line-height: 50px; font-weight: 500; color: rgba(45, 48, 50, 1.00); display: block;font-family:Poppins;">The next level in designing functional websites </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption  " id="slide-422-layer-9" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="none" data-whitespace="normal"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,40,40]" data-marginleft="[0,0,0,0]" data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(45, 48, 50, 0.75); display: inline-block;font-family:Poppins;">Venmo gochujang mlkshk chicharrones bushwick forage, pok pok af chartreuse keffiyeh flannel quinoa godard banh mi offal. Selfies copper mug dreamcatcher, four dollar toast forage butcher tumblr shoreditch tilde
                                        everyday carry. Cliche twee franzen gastropub, meditation occupy chillwave taxidermy food truck glossier 8-bit plaid. </div>
                                    <!-- LAYER NR. 5 -->
                                    <a class="tp-caption rev-btn   tp-rs-menulink" href="#video" target="_self" id="slide-422-layer-16" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                                       data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+890","speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(208, 193, 132, 1.00);bc:rgba(208, 193, 132, 1.00);"}]'
                                       data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]"
                                       data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]" style="z-index: 13; white-space: nowrap; font-size: 19px; line-height: 48px; font-weight: 500; color: rgba(45, 48, 50, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(45, 48, 50, 1.00);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Watch Video </a>
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption  " id="slide-422-layer-4" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="50%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; width: 100%;font-family:Open Sans;"> </div>
                            </div>
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption     rev_group" id="slide-422-layer-12" data-x="['right','right','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','bottom','bottom']" data-voffset="['0','0','0','0']" data-width="640" data-height="640"
                             data-whitespace="nowrap" data-visibility="['on','on','off','off']" data-type="group" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 640px; max-width: 640px; max-width: 640px; max-width: 640px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption  " id="slide-422-layer-24" data-x="['left','left','left','left']" data-hoffset="['63','268','605','605']" data-y="['middle','middle','middle','middle']" data-voffset="['-40','-71','236','236']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="image" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:-50px;rZ:-45deg;opacity:0;fb:10px;","to":"o:1;rZ:-10;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;"><img src="{{ url('/media/object_coffee_2.png') }}" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['300px','300px','300px','300px']" width="1200" height="1200" data-no-retina> </div>
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption  " id="slide-422-layer-23" data-x="['left','left','left','left']" data-hoffset="['259','391','876','876']" data-y="['middle','middle','middle','middle']" data-voffset="['30','80','148','148']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="image" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+590","speed":1000,"frame":"0","from":"x:50px;rZ:25deg;opacity:0;fb:10px;","to":"o:1;rZ:15;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;"><img src="{{ url('/media/object_folder_1.png') }}" alt="" data-ww="['400px','400px','400px','400px']" data-hh="['400px','400px','400px','400px']" width="1600" height="1600" data-no-retina> </div>
                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption  " id="slide-422-layer-25" data-x="['left','left','left','left']" data-hoffset="['151','326','695','695']" data-y="['middle','middle','middle','middle']" data-voffset="['190','282','215','215']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="image" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;rZ:60deg;opacity:0;fb:10px;","to":"o:1;rZ:45;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;"><img src="{{ url('/media/object_pen_1.png') }}" alt="" data-ww="['250px','250px','250px','250px']" data-hh="['250px','250px','250px','250px']" width="1000" height="1000" data-no-retina> </div>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!-- VIDEO SLIDER -->
        <div id="video_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-video" data-source="gallery" style="margin:0px auto;background-color:#2d3032;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="video" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-424" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/videobgimage.jpg') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-424-layer-18" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.40);">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-svg-layer" id="slide-424-layer-19" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="100" data-height="100"
                             data-whitespace="nowrap" data-type="svg" data-actions='[{"event":"click","action":"startlayer","layer":"slide-424-layer-22","delay":""},{"event":"click","action":"playvideo","layer":"slide-424-layer-22","delay":""},{"event":"click","action":"startlayer","layer":"slide-424-layer-23","delay":""},{"event":"click","action":"startlayer","layer":"slide-424-layer-24","delay":""}]'
                             data-svg_src="/plugins/slider-revolution/assets/images/ic_play_arrow_24px.svg" data-svg_idle="sc:transparent;sw:0px;sda:0;sdo:0;" data-svg_hover="sc:transparent;sw:0px;sda:0;sdo:0;" data-basealign="slide" data-responsive_offset="off"
                             data-responsive="off" data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 0.65);"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[20,13,13,13]" data-paddingright="[20,13,13,13]" data-paddingbottom="[20,13,13,13]" data-paddingleft="[20,13,13,13]" style="z-index: 6; min-width: 100px; max-width: 100px; max-width: 100px; max-width: 100px; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:5px 5px 5px 5px;border-radius:50% 50% 50% 50%;cursor:pointer;">
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption  " id="slide-424-layer-20" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":700,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 25px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Poppins;">Play Video </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-424-layer-23" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"bytrigger","speed":3000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 8;font-family:Open Sans;background-color:rgba(0, 0, 0, 0.75);">
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme tp-videolayer" id="slide-424-layer-22" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-whitespace="nowrap"
                             data-type="video" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                             data-vimeoid="192088415" data-videoattributes="title=0&byline=0&portrait=0&api=1" data-videowidth="['960px','960px','480px','360px']" data-videoheight="['540px','540px','270px','203px']" data-videoloop="none" data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" data-autoplay="off" data-volume="100" style="z-index: 9;"> </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-svg-layer" id="slide-424-layer-24" data-x="['right','right','right','right']" data-hoffset="['40','40','20','20']" data-y="['top','top','top','top']" data-voffset="['40','40','20','20']" data-width="40" data-height="40" data-whitespace="nowrap"
                             data-type="svg" data-actions='[{"event":"click","action":"stopvideo","layer":"slide-424-layer-22","delay":""},{"event":"click","action":"stoplayer","layer":"slide-424-layer-22","delay":""},{"event":"click","action":"stoplayer","layer":"slide-424-layer-23","delay":""},{"event":"click","action":"stoplayer","layer":"slide-424-layer-24","delay":""}]'
                             data-svg_src="/plugins/slider-revolution/assets/images/ic_close_36px.svg" data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" data-svg_hover="sc:transparent;sw:0px;sda:0;sdo:0;" data-basealign="slide" data-responsive_offset="off"
                             data-responsive="off" data-frames='[{"delay":"bytrigger","speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 0.65);"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 10; min-width: 40px; max-width: 40px; max-width: 40px; max-width: 40px; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;cursor:pointer;">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!-- HIGHLIGHTS -->
        <div id="services_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-highlights" data-source="gallery" style="margin:0px auto;background-color:#2d3032;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="services" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-426" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/highlights_bg2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzt_426" class="rev_row_zone rev_row_zone_top" style="z-index: 22;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-426-layer-20" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
                                 data-type="row" data-columnbreak="2" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[250,250,150,150]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 22; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-426-layer-21" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','center','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 23; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption  " id="slide-426-layer-6" data-x="['left','left','center','center']" data-hoffset="['0','0','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','0','240','240']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']"
                                         data-width="100%" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[70,70,50,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 24; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 50px; line-height: 60px; font-weight: 500; color: rgba(255, 255, 255, 1.00); display: block;font-family:Poppins;">All the right tools for your website </div>
                                </div>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption  " id="slide-426-layer-2" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                 data-type="row" data-columnbreak="2" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[300,300,150,150]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption  " id="slide-426-layer-3" data-x="['left','left','left','left']" data-hoffset="['0','0','100','100']" data-y="['top','top','top','top']" data-voffset="['0','0','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="33.33%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,70,70]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[20,20,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 7; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption   tp-resizeme" id="slide-426-layer-25" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']"
                                         data-width="none" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: inline-block;font-family:Open Sans;"><i class="pe-7s-phone"></i> </div>
                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption  " id="slide-426-layer-23" data-x="['left','left','center','center']" data-hoffset="['0','3','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','240','240','240']" data-fontsize="['25','25','25','20']" data-lineheight="['35','35','35','30']"
                                         data-width="100%" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[20,20,20,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: block;font-family:Poppins;">A solution to everyday design challenges </div>
                                    <!-- LAYER NR. 8 -->
                                    <div class="tp-caption  " id="slide-426-layer-9" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="none" data-whitespace="normal"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+890","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[30,30,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 0.90); display: inline-block;font-family:Poppins;">Wolf humblebrag migas cred +1 artisan. Heirloom deep v meditation, salvia disrupt XOXO 8-bit poutine squid raclette hella. Irony before they sold out crucifix selvage. </div>
                                    <!-- LAYER NR. 9 -->
                                    <div class="tp-caption  " id="slide-426-layer-27" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+1090","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 175, 158, 1.00);bc:rgba(255, 175, 158, 1.00);bw:0 0 2px 0px;"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(255, 175, 158, 0);border-style:solid;border-width:0px 0px 2px 0px;cursor:pointer;">Learn More </div>
                                </div>
                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption  " id="slide-426-layer-4" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="33.33%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,70,70]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[20,20,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,40,40]" style="z-index: 12; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 11 -->
                                    <div class="tp-caption   tp-resizeme" id="slide-426-layer-28" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']"
                                         data-width="none" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: inline-block;font-family:Open Sans;"><i class="pe-7s-menu"></i> </div>
                                    <!-- LAYER NR. 12 -->
                                    <div class="tp-caption  " id="slide-426-layer-29" data-x="['left','left','center','center']" data-hoffset="['0','3','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','240','240','240']" data-fontsize="['25','25','25','20']" data-lineheight="['35','40','35','30']"
                                         data-width="100%" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[20,20,20,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: block;font-family:Poppins;">Rows & Groups for fast website building </div>
                                    <!-- LAYER NR. 13 -->
                                    <div class="tp-caption  " id="slide-426-layer-34" data-x="['left','left','left','left']" data-hoffset="['5','0','0','0']" data-y="['top','top','top','top']" data-voffset="['5','0','0','0']" data-width="100%" data-height="none" data-whitespace="normal"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+890","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[30,30,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 0.90); display: inline-block;font-family:Poppins;">Four dollar toast tofu edison bulb tousled lomo polaroid, 90's wolf post-ironic. Four dollar toast food truck tumeric hot chicken pabst chartreuse, fap small batch helvetica swag hoodie. </div>
                                    <!-- LAYER NR. 14 -->
                                    <div class="tp-caption  " id="slide-426-layer-31" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+1090","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 175, 158, 1.00);bc:rgba(255, 175, 158, 1.00);bw:0 0 2px 0px;"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(255, 175, 158, 0);border-style:solid;border-width:0px 0px 2px 0px;cursor:pointer;">Learn More </div>
                                </div>
                                <!-- LAYER NR. 15 -->
                                <div class="tp-caption  " id="slide-426-layer-18" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="33.33%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,40,40]" style="z-index: 17; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 16 -->
                                    <div class="tp-caption   tp-resizeme" id="slide-426-layer-32" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']"
                                         data-width="none" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: inline-block;font-family:Open Sans;"><i class="pe-7s-box"></i> </div>
                                    <!-- LAYER NR. 17 -->
                                    <div class="tp-caption  " id="slide-426-layer-33" data-x="['left','left','center','center']" data-hoffset="['0','0','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','0','240','240']" data-fontsize="['25','25','25','20']" data-lineheight="['35','35','35','30']"
                                         data-width="100%" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[20,20,20,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: block;font-family:Poppins;">Object Library with hundreds of free assets </div>
                                    <!-- LAYER NR. 18 -->
                                    <div class="tp-caption  " id="slide-426-layer-30" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="none" data-whitespace="normal"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+890","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[30,30,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 20; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 0.90); display: inline-block;font-family:Poppins;">Typewriter ramps wolf bicycle rights, aesthetic farm-to-table skateboard. Swag bushwick tousled DIY la croix, tilde four loko franzen seitan chartreuse air plant selfies. </div>
                                    <!-- LAYER NR. 19 -->
                                    <div class="tp-caption  " id="slide-426-layer-35" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+1090","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 175, 158, 1.00);bc:rgba(255, 175, 158, 1.00);bw:0 0 2px 0px;"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 21; white-space: nowrap; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 175, 158, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(255, 175, 158, 0);border-style:solid;border-width:0px 0px 2px 0px;cursor:pointer;">Learn More </div>
                                </div>
                            </div>
                        </div>
                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-426-layer-36" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.25);">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!-- PROJECTS -->
        <div id="portfolio_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-projects" data-source="gallery" style="margin:0px auto;background-color:#2d3032;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="portfolio" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-432" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="plugins/slider-revolution/assets/images/carousel3-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Wild" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/carousel3.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-432-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);">
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption  " id="slide-432-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['80','80','50','50']" data-width="300" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 6; min-width: 300px; max-width: 300px; white-space: normal; font-size: 35px; line-height: 35px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Walking Landscapes<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">amazingly stunning</span> </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-432-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="2"
                             data-height="75" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 7;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-432-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="75"
                             data-height="2" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 8;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-432-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-432-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-432-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-432-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-432-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-432-layer-1","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-432-layer-1","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-432-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-432-layer-7","delay":""}]'
                             data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;font-family:Open Sans;background-color:rgba(45, 48, 50, 0);cursor:pointer;">
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-433" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="plugins/slider-revolution/assets/images/carousel4-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/carousel4.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-433-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);">
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-433-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="2"
                             data-height="75" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 6;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-433-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="75"
                             data-height="2" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 7;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption  " id="slide-433-layer-14" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['80','80','50','50']" data-width="300" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 8; min-width: 300px; max-width: 300px; white-space: normal; font-size: 35px; line-height: 35px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Winter Mountain Scene<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">witness natures beauty</span> </div>
                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-433-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-433-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-433-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-433-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-433-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-433-layer-14","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-433-layer-14","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-433-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-433-layer-7","delay":""}]'
                             data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;font-family:Open Sans;background-color:rgba(45, 48, 50, 0);cursor:pointer;">
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-434" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="plugins/slider-revolution/assets/images/carousel2-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/carousel2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-434-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);">
                        </div>
                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-434-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="2"
                             data-height="75" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 6;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-434-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="75"
                             data-height="2" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 7;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption  " id="slide-434-layer-12" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['80','80','50','50']" data-width="300" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 8; min-width: 300px; max-width: 300px; white-space: normal; font-size: 35px; line-height: 35px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Warm Sunset over Highway<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">bathe in the light</span> </div>
                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-434-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-434-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-434-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-434-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-434-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-434-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-434-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-434-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-434-layer-7","delay":""}]'
                             data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;font-family:Open Sans;background-color:rgba(45, 48, 50, 0);cursor:pointer;">
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-435" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="plugins/slider-revolution/assets/images/carousel5-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/carousel5.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 16 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-435-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);">
                        </div>
                        <!-- LAYER NR. 17 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-435-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="2"
                             data-height="75" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 6;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-435-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="75"
                             data-height="2" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 7;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption  " id="slide-435-layer-12" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['80','80','50','50']" data-width="300" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 8; min-width: 300px; max-width: 300px; white-space: normal; font-size: 35px; line-height: 35px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Wearables<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">new paradigm shift</span> </div>
                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-435-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-435-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-435-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-435-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-435-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-435-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-435-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-435-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-435-layer-7","delay":""}]'
                             data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;font-family:Open Sans;background-color:rgba(45, 48, 50, 0);cursor:pointer;">
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-436" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="plugins/slider-revolution/assets/images/carousel7-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/carousel7.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 21 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-436-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 5;font-family:Open Sans;background-color:rgba(45, 48, 50, 0.65);">
                        </div>
                        <!-- LAYER NR. 22 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-436-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="2"
                             data-height="75" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 6;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 23 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-436-layer-11" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="75"
                             data-height="2" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 7;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);">
                        </div>
                        <!-- LAYER NR. 24 -->
                        <div class="tp-caption  " id="slide-436-layer-12" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['80','80','50','50']" data-width="300" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":1000,"frame":"999","to":"y:-50px;opacity:0;fb:10px;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power4.easeOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-lasttriggerstate="reset" style="z-index: 8; min-width: 300px; max-width: 300px; white-space: normal; font-size: 35px; line-height: 35px; font-weight: 500; color: rgba(255, 255, 255, 1.00);font-family:Poppins;cursor:pointer;">Efficient Working<br /><span style="font-size:17px;opacity:0.65;font-weight:400;">with Slider Revolution</span> </div>
                        <!-- LAYER NR. 25 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-436-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                             data-height="full" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-436-layer-10","delay":""},{"event":"mouseenter","action":"startlayer","layer":"slide-436-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-436-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-436-layer-11","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-436-layer-12","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-436-layer-12","delay":""},{"event":"mouseenter","action":"stoplayer","layer":"slide-436-layer-7","delay":""},{"event":"mouseleave","action":"startlayer","layer":"slide-436-layer-7","delay":""}]'
                             data-responsive_offset="on" data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;font-family:Open Sans;background-color:rgba(45, 48, 50, 0);cursor:pointer;">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!--TEXT BLOCKS -->
        <div id="rev_slider_168_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-textblocks" data-source="gallery" style="margin:0px auto;background-color:#eef0f1;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_168_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-438" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/transparent.png') }}" data-bgcolor="#eef0f1" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzt_438" class="rev_row_zone rev_row_zone_top" style="z-index: 5;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-438-layer-2" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                 data-type="row" data-columnbreak="2" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[500,500,400,300]" data-marginright="[0,0,0,0]" data-marginbottom="[300,300,150,150]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-438-layer-3" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="50%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[20,20,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 6; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption  " id="slide-438-layer-6" data-x="['left','left','center','center']" data-hoffset="['0','3','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','240','240','240']" data-fontsize="['40','40','40','30']" data-lineheight="['50','50','50','40']"
                                         data-width="100%" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 40px; line-height: 50px; font-weight: 500; color: rgba(45, 48, 50, 1.00); display: block;font-family:Poppins;">Slider Revolution has many more tricks up its sleeve </div>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption  " id="slide-438-layer-4" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="50%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,40,40]" style="z-index: 8; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption  " id="slide-438-layer-9" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="none" data-whitespace="normal"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,40,40]" data-marginleft="[0,0,0,0]" data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(45, 48, 50, 0.75); display: inline-block;font-family:Poppins;">Venmo gochujang mlkshk chicharrones bushwick forage, pok pok af chartreuse keffiyeh flannel quinoa godard banh mi offal. Selfies copper mug dreamcatcher, four dollar toast forage butcher tumblr shoreditch tilde
                                        everyday carry. Cliche twee franzen gastropub, meditation occupy chillwave taxidermy food truck glossier 8-bit plaid. </div>
                                    <!-- LAYER NR. 6 -->
                                    <a class="tp-caption rev-btn   tp-rs-menulink" href="#getstarted" target="_self" id="slide-438-layer-16" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none"
                                       data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+890","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(208, 193, 132, 1.00);bc:rgba(208, 193, 132, 1.00);"}]'
                                       data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]"
                                       data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]" style="z-index: 10; white-space: nowrap; font-size: 19px; line-height: 48px; font-weight: 500; color: rgba(45, 48, 50, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(45, 48, 50, 1.00);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Let's go </a>
                                </div>
                            </div>
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption  " id="slide-438-layer-18" data-x="['center','center','center','center']" data-hoffset="['-140','-140','-87','-52']" data-y="['top','top','top','top']" data-voffset="['-91','-91','-142','-76']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="image" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;fb:10px;","to":"o:1;rZ:5;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;"><img src="{{ url('/media/keyboard_apple.png') }}" alt="" data-ww="['750px','750px','750px','500px']" data-hh="['750px','750px','750px','500px']" width="1600" height="1600" data-no-retina> </div>
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption  " id="slide-438-layer-19" data-x="['center','center','center','center']" data-hoffset="['180','180','233','157']" data-y="['top','top','top','top']" data-voffset="['135','135','86','73']" data-width="none" data-height="none" data-whitespace="nowrap"
                             data-type="image" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"x:50px;opacity:0;fb:10px;","to":"o:1;rZ:-15;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;"><img src="{{ url('/media/object_macmouse_1.png') }}" alt="" data-ww="['300px','300px','300px','200px']" data-hh="['300px','300px','300px','200px']" width="1000" height="1000" data-no-retina> </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <!-- CALL OUT -->
        <div id="getstarted_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-callout" data-source="gallery" style="margin:0px auto;background-color:#636363;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="getstarted" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-440" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" class="nc-gradient"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ url('/media/transparent.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzt_440" class="rev_row_zone rev_row_zone_top" style="z-index: 5;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-440-layer-2" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                 data-type="row" data-columnbreak="2" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-margintop="[150,250,150,150]" data-marginright="[0,0,0,0]" data-marginbottom="[150,300,150,150]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-440-layer-3" data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap"
                                     data-type="column" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 6; width: 100%;font-family:Open Sans;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption  " id="slide-440-layer-6" data-x="['left','left','center','center']" data-hoffset="['0','3','3','3']" data-y="['top','top','middle','middle']" data-voffset="['0','240','240','240']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']"
                                         data-width="['100%','472','100%','100%']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+490","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"nothing"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 50px; line-height: 60px; font-weight: 500; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;">The World of Slider Revolution </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption  " id="slide-440-layer-9" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="100%" data-height="none" data-whitespace="normal"
                                         data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":"+690","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                         data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,40,40]" data-marginleft="[0,0,0,0]" data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 100%px; max-width: 100%px; white-space: normal; font-size: 17px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 0.75); display: inline-block;font-family:Poppins;">There are tons of benefits for our direct customers:<br />Template & Object library, Add-Ons, Live Updates and Premium Ticket Support. </div>
                                    <!-- LAYER NR. 5 -->
                                    <a class="tp-caption rev-btn " href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=themepunch&license=regular&open_purchase_for_item_id=2751380&purchasable=source" target="_blank" id="slide-440-layer-16" data-x="['left','left','left','left']"
                                       data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off"
                                       data-responsive="off" data-frames='[{"delay":"+890","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(208, 193, 132, 1.00);bc:rgba(208, 193, 132, 1.00);"}]'
                                       data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]"
                                       data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]" style="z-index: 9; white-space: nowrap; font-size: 19px; line-height: 48px; font-weight: 500; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Buy a License </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#welcome").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    scrolleffect: {
                        fade: "on",
                        grayscale: "on",
                        on_slidebg: "on",
                        on_parallax_layers: "on",
                        direction: "top",
                        multiplicator_layers: "1.4",
                        tilt: "10",
                        disable_on_mobile: "off",
                    },
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner3",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                $("#rev_slider_158_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        onHoverStop: "off",
                    },
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [360, 360, 1080, 1080],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
                $("#about").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [800, 800, 500, 500],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                $("#video").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [800, 800, 500, 500],
                    lazyType: "none",
                    scrolleffect: {
                        fade: "on",
                        grayscale: "on",
                        on_slidebg: "on",
                        tilt: "10",
                    },
                    shadow: 0,
                    spinner: "spinner3",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                $("#services").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [800, 800, 500, 500],
                    lazyType: "none",
                    scrolleffect: {
                        fade: "on",
                        grayscale: "on",
                        on_slidebg: "on",
                        tilt: "10",
                    },
                    shadow: 0,
                    spinner: "spinner3",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                $("#portfolio").show().revolution({
                    sliderType: "carousel",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: -30,
                                v_offset: 30
                            },
                            right: {
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 30,
                                v_offset: 30
                            }
                        }
                    },
                    carousel: {
                        horizontal_align: "center",
                        vertical_align: "center",
                        fadeout: "off",
                        maxVisibleItems: 5,
                        infinity: "on",
                        space: 0,
                        stretch: "off",
                        showLayersAllTime: "on",
                        easing: "Power3.easeInOut",
                        speed: "800"
                    },
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [600, 600, 500, 400],
                    gridheight: [600, 600, 500, 400],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
                $("#rev_slider_168_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [800, 800, 500, 500],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "spinner3",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                $("#getstarted").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [500, 500, 400, 400],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                $("#rev_slider_172_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "/plugins/slider-revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: true
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [400, 400, 500, 500],
                    lazyType: "none",
                    scrolleffect: {
                        fade: "on",
                        on_layers: "on",
                        direction: "bottom",
                        multiplicator_layers: "1.4",
                        tilt: "10",
                    },
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            });
        </script>
    </section>
@endsection

@push('modal')
<div id="success" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: rgba(0, 0, 0, 0.8);">
        <div class="modal-body">
          <button type="button" class="close text-white float-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          @if (Session::has('status'))
          <h3 class="font-weight-bold mb-0 p-4 text-white">Success!</h3>
          <h5 class="font-weight-bold px-4 text-white">{!! Session::get('status') !!}</h5>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
</div>
@endpush

@push('styles')
<!-- LOAD JQUERY LIBRARY -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<!-- LOADING FONTS AND ICONS -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400|Poppins:500" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/fonts/font-awesome/css/font-awesome.css">
<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="/plugins/slider-revolution/css/navigation.css">
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="/plugins/slider-revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/plugins/slider-revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>
    @if (Session::has('status'))
    // $('#success').modal('show');
    console.log('xxx', '{!! Session::get('status') !!}');
    @endif
</script>
@endpush
