/*! Panda Theme - v1.0.0 - 2020-01-28
 * 
 * Copyright (c) 2020; */
!function(a,b,c,d){"use strict";a(c).ready(function(){function b(){const b=a("#pt-primary-navbar"),c=b.find(".pt-aside__content");a("#pt-toggle-menu").on("click",function(a){a.preventDefault(),bodyScrollLock.enableBodyScroll(c[0]),b.toggleClass("pt-active"),b.hasClass("pt-active")&&bodyScrollLock.disableBodyScroll(c[0])})}b()}),a(b).scroll(function(){}),a(b).load(function(){a(b).trigger("scroll").trigger("resize")}),a(b).on("resize orientationchange",function(){})}(jQuery,window,document);