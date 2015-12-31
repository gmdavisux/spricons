/*!
 * spricons v 0.1 by @gmdavisux - http://spricons.com - @spricons
 * Licensed under the MIT License: http://www.opensource.org/licenses/mit-license.php
 * Copyright 2015-2016 Gary M. Davis
*/

(function(document){
  "use strict";

//  function renderSprite() {
//    var sprite = "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:si=\"http://www.w3.org/2000/icons\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" id=\"spricons-ico\" style=\"display:none\"><symbol id=\"plus-circle\" viewBox=\"0 0 32 32\"> <path id=\"XMLID_2349_\" d=\"M16,5.7C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z M22,17.5h-4.5 V22c0,0.6-0.4,1-1,1h-1c-0.6,0-1-0.4-1-1v-4.5H10c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h4.5V10c0-0.6,0.4-1,1-1h1c0.6,0,1,0.4,1,1 v4.5H22c0.6,0,1,0.4,1,1v1C23,17.1,22.6,17.5,22,17.5z\"/></symbol><symbol id=\"minus-circle\" viewBox=\"0 0 32 32\"><path id=\"XMLID_392_\" d=\"M16,5.7C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z M22,17.5H10 c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h12c0.6,0,1,0.4,1,1v1C23,17.1,22.6,17.5,22,17.5z\"/></symbol><symbol id=\"times-circle\" viewBox=\"0 0 32 32\"><path id=\"XMLID_426_\" d=\"M16,5.7C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z M21.3,12.8 L18.1,16l3.2,3.2c0.4,0.4,0.4,1,0,1.4l-0.7,0.7c-0.4,0.4-1,0.4-1.4,0L16,18.1l-3.2,3.2c-0.4,0.4-1,0.4-1.4,0l-0.7-0.7 c-0.4-0.4-0.4-1,0-1.4l3.2-3.2l-3.2-3.2c-0.4-0.4-0.4-1,0-1.4l0.7-0.7c0.4-0.4,1-0.4,1.4,0l3.2,3.2l3.2-3.2c0.4-0.4,1-0.4,1.4,0 l0.7,0.7C21.7,11.8,21.7,12.4,21.3,12.8z\"/></symbol><symbol id=\"check-circle\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1104_\" d=\"M16,5.7C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z M23.2,12.8 l-8.5,8.5c-0.4,0.4-1,0.4-1.4,0l-4.6-4.6c-0.4-0.4-0.4-1,0-1.4l0.7-0.7c0.4-0.4,1-0.4,1.4,0l3.2,3.2l7.1-7.1c0.4-0.4,1-0.4,1.4,0 l0.7,0.7C23.6,11.8,23.6,12.4,23.2,12.8z\"/></symbol><symbol id=\"adjust\" viewBox=\"0 0 32 32\"><path id=\"XMLID_481_\" d=\"M16,16c0,4.6,0,8.3,0,8.3c-4.6,0-8.3-3.7-8.3-8.3s3.7-8.3,8.3-8.3C16,7.7,16,11.4,16,16 M26.3,16 c0-5.7-4.6-10.3-10.3-10.3S5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16L26.3,16z\"/></symbol><symbol id=\"plus\" viewBox=\"0 0 32 32\"><path id=\"XMLID_389_\" d=\"M25,17.5H7c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1v1C26,17.1,25.6,17.5,25,17.5z\"/><path id=\"XMLID_580_\" d=\"M17.5,7v18c0,0.6-0.4,1-1,1h-1c-0.6,0-1-0.4-1-1V7c0-0.6,0.4-1,1-1h1C17.1,6,17.5,6.4,17.5,7z\"/></symbol><symbol id=\"times\" viewBox=\"0 0 32 32\"><path id=\"XMLID_5_\" d=\"M25.6,8.5L8.4,25.7c-0.4,0.4-1,0.4-1.4,0L6.3,25c-0.4-0.4-0.4-1,0-1.4L23.5,6.4c0.4-0.4,1-0.4,1.4,0 l0.7,0.7C26,7.5,26,8.1,25.6,8.5z\"/><path id=\"XMLID_2_\" d=\"M8.6,6.5l17.1,17.1c0.4,0.4,0.4,1,0,1.4L25,25.7c-0.4,0.4-1,0.4-1.4,0L6.5,8.6c-0.4-0.4-0.4-1,0-1.4 l0.7-0.7C7.6,6.1,8.2,6.1,8.6,6.5z\"/></symbol><symbol id=\"circle-o-notch\" viewBox=\"0 0 32 32\"><path id=\"XMLID_8_\" d=\"M16,26.6c-5.8,0-10.5-4.7-10.5-10.5c0-4.7,3.2-8.9,7.7-10.1c0.5-0.1,1.1,0.2,1.2,0.7 c0.1,0.5-0.2,1.1-0.7,1.2c-3.7,1-6.3,4.4-6.3,8.2c0,4.7,3.8,8.5,8.5,8.5c4.7,0,8.5-3.8,8.5-8.5c0-3.8-2.6-7.2-6.3-8.2 c-0.5-0.1-0.8-0.7-0.7-1.2c0.1-0.5,0.7-0.8,1.2-0.7c4.6,1.2,7.7,5.4,7.7,10.1C26.5,21.8,21.8,26.6,16,26.6z\"/></symbol><symbol id=\"circle-thin\" viewBox=\"0 0 32 32\"><path id=\"XMLID_2343_\" d=\"M24.3,16c0,4.6-3.7,8.3-8.3,8.3S7.7,20.6,7.7,16s3.7-8.3,8.3-8.3S24.3,11.4,24.3,16 M26.3,16 c0-5.7-4.6-10.3-10.3-10.3S5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16L26.3,16z\"/></symbol><symbol id=\"times-circle-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_417_\" d=\"M24.3,16c0,4.6-3.7,8.3-8.3,8.3S7.7,20.6,7.7,16s3.7-8.3,8.3-8.3S24.3,11.4,24.3,16 M26.3,16 c0-5.7-4.6-10.3-10.3-10.3S5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16L26.3,16z\"/><path id=\"XMLID_113_\" d=\"M21.3,12.8L18.1,16l3.2,3.2c0.4,0.4,0.4,1,0,1.4l-0.7,0.7c-0.4,0.4-1,0.4-1.4,0L16,18.1l-3.2,3.2 c-0.4,0.4-1,0.4-1.4,0l-0.7-0.7c-0.4-0.4-0.4-1,0-1.4l3.2-3.2l-3.2-3.2c-0.4-0.4-0.4-1,0-1.4l0.7-0.7c0.4-0.4,1-0.4,1.4,0l3.2,3.2 l3.2-3.2c0.4-0.4,1-0.4,1.4,0l0.7,0.7C21.7,11.8,21.7,12.4,21.3,12.8z\"/></symbol><symbol id=\"dot-circle-o\" viewBox=\"0 0 32 32\"><circle id=\"XMLID_1512_\" cx=\"16\" cy=\"16\" r=\"3\"/><path id=\"XMLID_18_\" d=\"M24.3,16c0,4.6-3.7,8.3-8.3,8.3S7.7,20.6,7.7,16s3.7-8.3,8.3-8.3S24.3,11.4,24.3,16z M16,5.7 C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z\"/></symbol><symbol id=\"check\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1448_\" d=\"M25.6,11.8L14.4,23c-0.5,0.5-1.4,0.5-1.9,0l-6.1-6.1c-0.5-0.5-0.5-1.4,0-1.9l0.9-0.9 c0.5-0.5,1.4-0.5,1.9,0l4.2,4.2L22.8,9c0.5-0.5,1.4-0.5,1.9,0l0.9,0.9C26.1,10.4,26.1,11.3,25.6,11.8z\"/></symbol><symbol id=\"square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_194_\" d=\"M5.7,8.6v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.7c0-1.7-1.3-3-3-3H8.6C7,5.7,5.7,7,5.7,8.6L5.7,8.6 z\"/></symbol><symbol id=\"phone-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1953_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M22.5,21.5c-0.4,0.9-2.1,1.5-3,1.5c-0.9,0-1.7-0.4-2.5-0.7C14.2,21.1,11,18,9.8,15c-0.3-0.8-0.7-1.6-0.7-2.5s0.6-2.6,1.5-3 C11,9.5,11.8,9.2,12,9.2c0.1,0,0.1,0,0.2,0c0.2,0.1,1.2,2,1.4,2.4c0.1,0.3,0.4,0.6,0.4,0.9c0,0.6-1.8,1.5-1.8,2 c0,0.2,0.3,0.6,0.4,0.8c1,1.8,2.2,3,4,4c0.2,0.2,0.5,0.4,0.8,0.4c0.5,0,1.4-1.8,2-1.8c0.3,0,0.6,0.3,0.9,0.4 c0.4,0.2,2.3,1.2,2.4,1.4c0.1,0.1,0.1,0.2,0.1,0.3C22.8,20.5,22.7,21.1,22.5,21.5z\"/></symbol><symbol id=\"h-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1745_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M22.8,22c0,0.5-0.4,0.9-0.9,0.9h-1.6c-0.5,0-0.9-0.4-0.9-0.9v-4.3h-6.9V22c0,0.5-0.4,0.9-0.9,0.9H10C9.5,23,9,22.5,9,22V10 C9,9.5,9.5,9.1,10,9.1h1.6c0.5,0,0.9,0.4,0.9,0.9v4.3h6.9V10c0-0.5,0.4-0.9,0.9-0.9H22c0.5,0,0.9,0.4,0.9,0.9V22z\"/></symbol><symbol id=\"plus-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1505_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M23,16.5c0,0.6-0.4,1-1,1h-4.5V22c0,0.6-0.4,1-1,1h-1c-0.6,0-1-0.4-1-1v-4.5H10c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h4.5V10 c0-0.6,0.4-1,1-1h1c0.6,0,1,0.4,1,1v4.5H22c0.6,0,1,0.4,1,1V16.5z\"/></symbol><symbol id=\"minus-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1502_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M23,16.5c0,0.6-0.4,1-1,1H10c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h12c0.6,0,1,0.4,1,1V16.5z\"/></symbol><symbol id=\"check-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_2306_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M23.2,12.8l-8.5,8.5c-0.4,0.4-1,0.4-1.4,0l-4.6-4.6c-0.4-0.4-0.4-1,0-1.4l0.7-0.7c0.4-0.4,1-0.4,1.4,0l3.2,3.2l7.1-7.1 c0.4-0.4,1-0.4,1.4,0l0.7,0.7C23.6,11.8,23.6,12.4,23.2,12.8z\"/></symbol><symbol id=\"share-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_2353_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M24.2,13.4c-0.1,0.2-0.2,0.4-0.3,0.5l-4.5,4.5c-0.6,0.6-1.5,0.6-2.1,0s-0.6-1.5,0-2.1l2-2H15c-1.8,0.1-3.3,1.6-3.3,3.5 c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1v3.8c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5V18c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1 c0-3.6,1.9-6.5,5.5-6.5c0,0,0.1,0,0.1,0h4.9l-1.9-1.9c-0.6-0.6-0.6-1.5,0-2.1s1.5-0.6,2.1,0l4.5,4.5c0.1,0.1,0.2,0.3,0.3,0.5 c0.1,0.2,0.1,0.4,0.1,0.6C24.3,13,24.3,13.2,24.2,13.4z\"/></symbol><symbol id=\"external-link-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_2334_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M24.3,15.6c0,0.8-0.7,1.5-1.5,1.5c-0.8,0-1.5-0.7-1.5-1.5v-2.8l-11,11c-0.6,0.6-1.5,0.6-2.1,0c-0.6-0.6-0.6-1.5,0-2.1l11-11h-2.7 c-0.8,0-1.5-0.7-1.5-1.5c0-0.8,0.7-1.5,1.5-1.5h6.3c0.2,0,0.4,0,0.6,0.1c0.2,0.1,0.3,0.2,0.5,0.3c0.1,0.1,0.2,0.3,0.3,0.5 c0.1,0.2,0.1,0.4,0.1,0.6V15.6z\"/></symbol><symbol id=\"share-alt-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_2312_\" d=\"M23.3,5.6H8.7c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.6C26.3,7,25,5.6,23.3,5.6z M13.7,16c0,0.2,0,0.4-0.1,0.6l5.6,2.4c0.5-0.6,1.3-1,2.2-1c1.7,0,3,1.3,3,3s-1.3,3-3,3c-1.7,0-3-1.3-3-3c0-0.1,0-0.1,0-0.2 l-5.8-2.5C12,18.7,11.4,19,10.7,19c-1.7,0-3-1.3-3-3s1.3-3,3-3c0.7,0,1.4,0.3,1.9,0.7l5.8-2.5c0-0.1,0-0.1,0-0.2c0-1.7,1.3-3,3-3 c1.7,0,3,1.3,3,3s-1.3,3-3,3c-0.9,0-1.7-0.4-2.2-1l-5.6,2.4C13.6,15.6,13.7,15.8,13.7,16z\"/></symbol><symbol id=\"file-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/></symbol><symbol id=\"file-archive-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:7; font-family:sans-serif; font-weight:bold;\">ZIP</text></symbol><symbol id=\"file-code-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:10; font-family:sans-serif; font-weight:bold;\">&lt;/&gt;</text></symbol><symbol id=\"file-pdf-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:7; font-family:sans-serif; font-weight:bold;\">PDF</text></symbol><symbol id=\"file-image-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:7; font-family:sans-serif; font-weight:bold;\">IMG</text></symbol><symbol id=\"file-powerpoint-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:7; font-family:sans-serif; font-weight:bold;\">PPT</text></symbol><symbol id=\"file-word-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:7; font-family:sans-serif; font-weight:bold;\">DOC</text></symbol><symbol id=\"file-text-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_11_\" d=\"M26,29H6V3h13c3.9,0,7,3.1,7,7V29z M8,27h16V10c0-2.8-2.2-5-5-5H8V27z\"/><path id=\"XMLID_13_\" d=\"M26,13.5l-8-4V3h1.1C22.9,3,26,6.1,26,9.9V13.5z M20,8.3l4,2V9.9c0-2.4-1.7-4.4-4-4.8V8.3z\"/><text text-anchor=\"middle\" x=\"16\" y=\"20\" style=\"font-size:7; font-family:sans-serif; font-weight:bold;\">TXT</text></symbol><symbol id=\"bullseye\" viewBox=\"0 0 32 32\"><circle id=\"XMLID_22_\" cx=\"16\" cy=\"16\" r=\"2.3\"/><path id=\"XMLID_19_\" d=\"M24.3,16c0,4.6-3.7,8.3-8.3,8.3S7.7,20.6,7.7,16s3.7-8.3,8.3-8.3S24.3,11.4,24.3,16z M16,5.7 C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z\"/><path id=\"XMLID_23_\" d=\"M22.3,16c0,3.5-2.8,6.3-6.3,6.3S9.7,19.5,9.7,16s2.8-6.3,6.3-6.3S22.3,12.5,22.3,16z M16,11.7 c-2.4,0-4.3,1.9-4.3,4.3s1.9,4.3,4.3,4.3s4.3-1.9,4.3-4.3S18.4,11.7,16,11.7z\"/></symbol><symbol id=\"cloud\" viewBox=\"0 0 32 32\"><path id=\"_x3C_Compound_Path_x3E_\" d=\"M26.2,16.1c-0.6-2.7-2.8-4.7-5.3-4.7c-0.4,0-0.7,0-1.1,0.1C18.6,9.4,16.4,8,14,8 c-3.2,0-5.9,2.4-6.7,5.7C4.9,13.9,3,16.1,3,18.9C3,21.7,5,24,7.5,24h18c1.9,0,3.5-1.8,3.5-4C29,18.1,27.8,16.5,26.2,16.1z\"/></symbol><symbol id=\"cloud-download\" viewBox=\"0 0 32 32\"><path id=\"XMLID_31_\" d=\"M26.2,16.1c-0.6-2.7-2.8-4.7-5.3-4.7c-0.4,0-0.7,0-1.1,0.1C18.6,9.4,16.4,8,14,8 c-3.2,0-5.9,2.4-6.7,5.7C4.9,13.9,3,16.1,3,18.9C3,21.7,5,24,7.5,24h18c1.9,0,3.5-1.8,3.5-4C29,18.1,27.8,16.5,26.2,16.1z M20.7,17.8l-4,4c-0.1,0.1-0.2,0.2-0.3,0.2C16.3,22,16.1,22,16,22s-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2l-4-4 c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l2.3,2.3V12c0-0.6,0.4-1,1-1s1,0.4,1,1v6.6l2.3-2.3c0.4-0.4,1-0.4,1.4,0S21.1,17.4,20.7,17.8z\" /></symbol><symbol id=\"cloud-upload\" viewBox=\"0 0 32 32\"><path id=\"XMLID_35_\" d=\"M26.2,16.1c-0.6-2.7-2.8-4.7-5.3-4.7c-0.4,0-0.7,0-1.1,0.1C18.6,9.4,16.4,8,14,8 c-3.2,0-5.9,2.4-6.7,5.7C4.9,13.9,3,16.1,3,18.9C3,21.7,5,24,7.5,24h18c1.9,0,3.5-1.8,3.5-4C29,18.1,27.8,16.5,26.2,16.1z M20.7,16.7c-0.4,0.4-1,0.4-1.4,0L17,14.4V21c0,0.6-0.4,1-1,1s-1-0.4-1-1v-6.6l-2.3,2.3c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4l4-4 c0.1-0.1,0.2-0.2,0.3-0.2C15.7,11,15.9,11,16,11s0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2l4,4C21.1,15.7,21.1,16.3,20.7,16.7z\"/></symbol><symbol id=\"asterisk\" viewBox=\"0 0 32 32\"><path id=\"XMLID_39_\" d=\"M23.4,10.7L10.7,23.4c-0.4,0.4-1,0.4-1.4,0l-0.7-0.7c-0.4-0.4-0.4-1,0-1.4L21.3,8.6 c0.4-0.4,1-0.4,1.4,0l0.7,0.7C23.8,9.7,23.8,10.3,23.4,10.7z\"/><path id=\"XMLID_38_\" d=\"M10.7,8.6l12.7,12.7c0.4,0.4,0.4,1,0,1.4l-0.7,0.7c-0.4,0.4-1,0.4-1.4,0L8.6,10.7 c-0.4-0.4-0.4-1,0-1.4l0.7-0.7C9.7,8.2,10.3,8.2,10.7,8.6z\"/><path id=\"XMLID_28_\" d=\"M25,17.5H7c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1v1 C26,17.1,25.6,17.5,25,17.5z\"/><path id=\"XMLID_27_\" d=\"M17.5,7v18c0,0.6-0.4,1-1,1h-1c-0.6,0-1-0.4-1-1V7c0-0.6,0.4-1,1-1h1C17.1,6,17.5,6.4,17.5,7z \"/></symbol><symbol id=\"minus\" viewBox=\"0 0 32 32\"><path id=\"XMLID_36_\" d=\"M25,17.5H7c-0.6,0-1-0.4-1-1v-1c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1v1 C26,17.1,25.6,17.5,25,17.5z\"/></symbol><symbol id=\"envelope-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_62_\" d=\"M26,24.4H6c-0.6,0-1-0.4-1-1V8.6c0-0.6,0.4-1,1-1h20c0.6,0,1,0.4,1,1v14.9C27,24,26.6,24.4,26,24.4z M7,22.4h18V9.6H7V22.4z\"/><path id=\"XMLID_64_\" d=\"M16,18.9c-0.2,0-0.4-0.1-0.6-0.2l-10-7.4C5.1,11,5,10.7,5,10.4V8.6c0-0.6,0.4-1,1-1h20c0.6,0,1,0.4,1,1 v1.9c0,0.3-0.1,0.6-0.4,0.8l-10,7.4C16.4,18.8,16.2,18.9,16,18.9z M7,9.9l9,6.7l9-6.7V9.6H7V9.9z\"/></symbol><symbol id=\"envelope\" viewBox=\"0 0 32 32\"><path id=\"XMLID_43_\" d=\"M26.9,8.5c-0.1-0.4-0.5-0.7-0.9-0.7H6c-0.4,0-0.8,0.3-0.9,0.7L16,16.6L26.9,8.5z\"/><path id=\"XMLID_47_\" d=\"M16.6,18.7c-0.2,0.1-0.4,0.2-0.6,0.2s-0.4-0.1-0.6-0.2L5,10.9v12.3c0,0.6,0.4,1,1,1h20 c0.6,0,1-0.4,1-1V10.9L16.6,18.7z\"/></symbol><symbol id=\"pencil\" viewBox=\"0 0 32 32\"><polygon id=\"XMLID_44_\" points=\"19.5,8.2 7.5,20.2 6.1,25.9 11.8,24.5 23.8,12.5 \"/><path id=\"XMLID_42_\" d=\"M22.4,5.4l-2.1,2.1l4.2,4.2l2.1-2.1c0.8-0.8,0.8-2,0-2.8l-1.4-1.4C24.4,4.6,23.1,4.6,22.4,5.4 z\"/></symbol><symbol id=\"search\" viewBox=\"0 0 32 32\"><path id=\"XMLID_50_\" d=\"M13.4,4.9c-4.7,0-8.5,3.8-8.5,8.5c0,4.7,3.8,8.5,8.5,8.5s8.5-3.8,8.5-8.5 C21.9,8.7,18.1,4.9,13.4,4.9z M13.4,19.9c-3.6,0-6.5-2.9-6.5-6.5s2.9-6.5,6.5-6.5s6.5,2.9,6.5,6.5S16.9,19.9,13.4,19.9z\"/><path id=\"XMLID_41_\" d=\"M23.7,26.6l-6-6l2.8-2.8l6,6c0.8,0.8,0.8,2,0,2.8l0,0C25.8,27.3,24.5,27.3,23.7,26.6z\"/></symbol><symbol id=\"search-plus\" viewBox=\"0 0 32 32\"><path id=\"XMLID_45_\" d=\"M13.4,4.9c-4.7,0-8.5,3.8-8.5,8.5c0,4.7,3.8,8.5,8.5,8.5s8.5-3.8,8.5-8.5 C21.9,8.7,18.1,4.9,13.4,4.9z M13.4,19.9c-3.6,0-6.5-2.9-6.5-6.5s2.9-6.5,6.5-6.5s6.5,2.9,6.5,6.5S16.9,19.9,13.4,19.9z\"/><path id=\"XMLID_40_\" d=\"M23.7,26.6l-6-6l2.8-2.8l6,6c0.8,0.8,0.8,2,0,2.8l0,0C25.8,27.3,24.5,27.3,23.7,26.6z\"/><rect id=\"XMLID_58_\" x=\"8.4\" y=\"12.4\" width=\"10\" height=\"2\"/><rect id=\"XMLID_60_\" x=\"12.4\" y=\"8.4\" width=\"2\" height=\"10\"/></symbol><symbol id=\"search-minus\" viewBox=\"0 0 32 32\"><path id=\"XMLID_53_\" d=\"M13.4,4.9c-4.7,0-8.5,3.8-8.5,8.5c0,4.7,3.8,8.5,8.5,8.5s8.5-3.8,8.5-8.5 C21.9,8.7,18.1,4.9,13.4,4.9z M13.4,19.9c-3.6,0-6.5-2.9-6.5-6.5s2.9-6.5,6.5-6.5s6.5,2.9,6.5,6.5S16.9,19.9,13.4,19.9z\"/><path id=\"XMLID_52_\" d=\"M23.7,26.6l-6-6l2.8-2.8l6,6c0.8,0.8,0.8,2,0,2.8l0,0C25.8,27.3,24.5,27.3,23.7,26.6z\"/><rect id=\"XMLID_57_\" x=\"8.4\" y=\"12.4\" width=\"10\" height=\"2\"/></symbol><symbol id=\"heart\" viewBox=\"0 0 32 32\"><circle id=\"XMLID_56_\" cx=\"21\" cy=\"12.1\" r=\"7\"/><circle id=\"XMLID_61_\" cx=\"11\" cy=\"12.1\" r=\"7\"/><rect id=\"XMLID_59_\" x=\"9\" y=\"10\" transform=\"matrix(0.7071 -0.7071 0.7071 0.7071 -7.3553 16.3016)\" width=\"14.1\" height=\"14.1\"/></symbol><symbol id=\"heart-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_63_\" d=\"M21,7c1.3,0,2.6,0.5,3.6,1.5c2,2,2,5.2,0,7.1L16,24.1l-8.5-8.5c-2-2-2-5.2,0-7.1 C8.4,7.6,9.7,7,11,7c1.3,0,2.6,0.5,3.6,1.5L16,9.9l1.4-1.4C18.4,7.6,19.6,7,21,7 M21,5c-1.8,0-3.6,0.7-5,2.1C14.6,5.7,12.8,5,11,5 s-3.6,0.7-5,2.1c-2.7,2.7-2.7,7.2,0,9.9L16,27l9.9-9.9c2.7-2.7,2.7-7.2,0-9.9C24.6,5.7,22.8,5,21,5L21,5z\"/></symbol><symbol id=\"dot-circle\" viewBox=\"0 0 32 32\"><path id=\"XMLID_80_\" d=\"M16,5.7C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z M16,19c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S17.7,19,16,19z\"/></symbol><symbol id=\"circle\" viewBox=\"0 0 32 32\"><circle id=\"XMLID_74_\" cx=\"16\" cy=\"16\" r=\"10.3\"/></symbol><symbol id=\"home\" viewBox=\"0 0 32 32\"><polygon id=\"XMLID_37_\" points=\"25,26 7,26 7,16 5,16 16,6 27,16 25,16 \"/></symbol><symbol id=\"home-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_150_\" d=\"M16,8.7l7,6.4V16v8H9v-8v-0.9L16,8.7 M16,6L5,16h2v10h18V16h2L16,6L16,6z\"/></symbol><symbol id=\"star\" viewBox=\"0 0 32 32\"><path id=\"XMLID_72_\" d=\"M16,3.5c-0.9,0-1.6,0.6-1.9,1.4L12,11.6l-7-0.1c0,0,0,0,0,0c-0.9,0-1.6,0.6-1.9,1.4 c-0.3,0.8,0,1.7,0.7,2.2l5.7,4.1l-2.2,6.6c-0.3,0.8,0,1.7,0.7,2.3c0.4,0.3,0.8,0.4,1.2,0.4c0.4,0,0.8-0.1,1.2-0.4l5.6-4.1l5.6,4.1 c0.4,0.3,0.8,0.4,1.2,0.4c0.4,0,0.8-0.1,1.2-0.4c0.7-0.5,1-1.4,0.7-2.3l-2.2-6.6l5.6-4c0.5-0.4,0.9-1,0.9-1.7c0-1.1-0.9-2-2-2h0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0l-7,0.1l-2.1-6.6C17.6,4.1,16.9,3.5,16,3.5 L16,3.5z\"/></symbol><symbol id=\"star-half\" viewBox=\"0 0 32 32\"><path id=\"XMLID_81_\" d=\"M16,3.5L16,3.5c-0.9,0-1.6,0.6-1.9,1.4L12,11.6l-7-0.1c0,0,0,0,0,0c-0.9,0-1.6,0.6-1.9,1.4 c-0.3,0.8,0,1.7,0.7,2.2l5.7,4.1l-2.2,6.6c-0.3,0.8,0,1.7,0.7,2.3c0.4,0.3,0.8,0.4,1.2,0.4c0.4,0,0.8-0.1,1.2-0.4l5.6-4.1V3.5z\"/></symbol><symbol id=\"star-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_77_\" d=\"M16,5.5l2.5,8.1l8.5-0.1l-6.9,4.9l2.7,8l-6.8-5l-6.8,5l2.7-8L5,13.5l8.5,0.1L16,5.5 M27,13.5 L27,13.5 M16,3.5c-0.9,0-1.6,0.6-1.9,1.4L12,11.6l-7-0.1c0,0,0,0,0,0c-0.9,0-1.6,0.6-1.9,1.4c-0.3,0.8,0,1.7,0.7,2.2l5.7,4.1 l-2.2,6.6c-0.3,0.8,0,1.7,0.7,2.3c0.4,0.3,0.8,0.4,1.2,0.4c0.4,0,0.8-0.1,1.2-0.4l5.6-4.1l5.6,4.1c0.4,0.3,0.8,0.4,1.2,0.4 c0.4,0,0.8-0.1,1.2-0.4c0.7-0.5,1-1.4,0.7-2.3l-2.2-6.6l5.6-4c0.5-0.4,0.9-1,0.9-1.7c0-1.1-0.9-2-2-2h0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0l-7,0.1l-2.1-6.6C17.6,4.1,16.9,3.5,16,3.5L16,3.5z\"/></symbol><symbol id=\"star-half-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1_\" d=\"M16,5.5l2.5,8.1l8.5-0.1l-6.9,4.9l2.7,8l-6.8-5V5.5z M27,13.5L27,13.5 M16,3.5 c-0.9,0-1.6,0.6-1.9,1.4L12,11.6l-7-0.1c0,0,0,0,0,0c-0.9,0-1.6,0.6-1.9,1.4c-0.3,0.8,0,1.7,0.7,2.2l5.7,4.1l-2.2,6.6 c-0.3,0.8,0,1.7,0.7,2.3c0.4,0.3,0.8,0.4,1.2,0.4c0.4,0,0.8-0.1,1.2-0.4l5.6-4.1l5.6,4.1c0.4,0.3,0.8,0.4,1.2,0.4 c0.4,0,0.8-0.1,1.2-0.4c0.7-0.5,1-1.4,0.7-2.3l-2.2-6.6l5.6-4c0.5-0.4,0.9-1,0.9-1.7c0-1.1-0.9-2-2-2h0c0,0,0,0,0,0c0,0,0,0,0,0 c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0l-7,0.1l-2.1-6.6C17.6,4.1,16.9,3.5,16,3.5L16,3.5z\"/></symbol><symbol id=\"certificate-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_87_\" d=\"M18.5,28.2c-0.8,0-1.5-0.4-2-1C16.3,27,16.1,27,16,27s-0.3,0-0.5,0.2 c-0.7,0.8-1.7,1.2-2.8,0.9c-1-0.3-1.8-1.1-1.9-2.2c0-0.3-0.2-0.4-0.3-0.5s-0.3-0.1-0.6,0c-1,0.4-2.1,0.2-2.8-0.6 c-0.8-0.8-1-1.8-0.6-2.8c0.1-0.3,0-0.5,0-0.6c-0.1-0.1-0.2-0.3-0.5-0.3C5,21,4.1,20.3,3.9,19.3c-0.3-1,0.1-2.1,0.9-2.7 C5,16.3,5,16.1,5,16c0-0.1,0-0.3-0.2-0.5c-0.8-0.7-1.2-1.7-0.9-2.8S5,11,6,10.8c0.3,0,0.4-0.2,0.5-0.3c0.1-0.1,0.1-0.3,0-0.6 C6.1,9,6.4,7.9,7.1,7.1s1.8-1,2.8-0.6c0.3,0.1,0.5,0,0.6,0c0.1-0.1,0.3-0.2,0.3-0.5C11,5,11.7,4.1,12.7,3.9c1-0.3,2.1,0.1,2.7,0.9 C15.7,5,15.9,5,16,5l0,0c0.1,0,0.3,0,0.5-0.2l0,0c0.7-0.8,1.7-1.2,2.8-0.9C20.3,4.1,21,5,21.2,6c0,0.3,0.2,0.4,0.3,0.5 c0.1,0.1,0.3,0.1,0.6,0c1-0.4,2.1-0.2,2.8,0.6c0.8,0.8,1,1.8,0.6,2.8c-0.1,0.3,0,0.5,0,0.6c0.1,0.1,0.2,0.3,0.5,0.3 c1.1,0.2,1.9,0.9,2.2,1.9s-0.1,2.1-0.9,2.7C27,15.7,27,15.9,27,16s0,0.3,0.2,0.5c0.8,0.7,1.2,1.7,0.9,2.8S27,21,26,21.2 c-0.3,0-0.4,0.2-0.5,0.3c-0.1,0.1-0.1,0.3,0,0.6c0.4,1,0.2,2.1-0.6,2.8c-0.8,0.8-1.8,1-2.8,0.6c-0.3-0.1-0.5,0-0.6,0 c-0.1,0.1-0.3,0.2-0.3,0.5c-0.2,1.1-0.9,1.9-1.9,2.2C19,28.2,18.8,28.2,18.5,28.2z M10.2,23.4c0.5,0,0.9,0.1,1.3,0.4 c0.7,0.4,1.2,1.1,1.3,1.9c0.1,0.4,0.3,0.5,0.5,0.5c0.1,0,0.4,0.1,0.7-0.2c0.5-0.6,1.3-1,2.1-1h0c0.8,0,1.6,0.4,2.1,1 c0.2,0.3,0.5,0.3,0.7,0.2c0.1,0,0.4-0.1,0.5-0.5c0.1-0.8,0.6-1.5,1.3-1.9c0.7-0.4,1.5-0.5,2.3-0.2c0.4,0.1,0.6-0.1,0.7-0.1 s0.3-0.3,0.1-0.7c-0.3-0.8-0.2-1.6,0.2-2.3c0.4-0.7,1.1-1.2,1.9-1.3c0.4-0.1,0.5-0.3,0.5-0.5c0-0.1,0.1-0.4-0.2-0.7 c-0.6-0.5-1-1.3-1-2.1s0.4-1.6,1-2.1c0.3-0.2,0.3-0.6,0.2-0.7c0-0.1-0.1-0.4-0.5-0.5c-0.8-0.1-1.5-0.6-1.9-1.3 c-0.4-0.7-0.5-1.5-0.2-2.3c0.1-0.4-0.1-0.6-0.1-0.7c-0.1-0.1-0.3-0.3-0.7-0.1c-0.8,0.3-1.6,0.2-2.3-0.2c-0.7-0.4-1.2-1.1-1.3-1.9 c-0.1-0.4-0.3-0.5-0.5-0.5S18.3,5.7,18.1,6l-0.8-0.6L18.1,6c-0.5,0.6-1.3,1-2.1,1c0,0,0,0,0,0c-0.8,0-1.6-0.4-2.1-1 c-0.2-0.3-0.6-0.3-0.7-0.2c-0.1,0-0.4,0.1-0.5,0.5c-0.1,0.8-0.6,1.5-1.3,1.9S10,8.7,9.2,8.4C8.9,8.3,8.6,8.4,8.5,8.5 C8.4,8.6,8.3,8.9,8.4,9.2c0.3,0.8,0.2,1.6-0.2,2.3c-0.4,0.7-1.1,1.2-1.9,1.3c-0.4,0.1-0.5,0.3-0.5,0.5c0,0.1-0.1,0.4,0.2,0.7 c0.6,0.5,1,1.3,1,2.1c0,0.8-0.4,1.6-1,2.1c-0.3,0.2-0.3,0.6-0.2,0.7c0,0.1,0.1,0.4,0.5,0.5c0.8,0.1,1.5,0.6,1.9,1.3 c0.4,0.7,0.5,1.5,0.2,2.3c-0.1,0.4,0.1,0.6,0.1,0.7s0.3,0.3,0.7,0.1C9.5,23.5,9.9,23.4,10.2,23.4z\"/></symbol><symbol id=\"certificate\" viewBox=\"0 0 32 32\"><path id=\"XMLID_94_\" d=\"M18.5,28.2c-0.8,0-1.5-0.4-2-1C16.3,27,16.1,27,16,27s-0.3,0-0.5,0.2 c-0.7,0.8-1.7,1.2-2.8,0.9c-1-0.3-1.8-1.1-1.9-2.2c0-0.3-0.2-0.4-0.3-0.5s-0.3-0.1-0.6,0c-1,0.4-2.1,0.2-2.8-0.6 c-0.8-0.8-1-1.8-0.6-2.8c0.1-0.3,0-0.5,0-0.6c-0.1-0.1-0.2-0.3-0.5-0.3C5,21,4.1,20.3,3.9,19.3c-0.3-1,0.1-2.1,0.9-2.7 C5,16.3,5,16.1,5,16c0-0.1,0-0.3-0.2-0.5c-0.8-0.7-1.2-1.7-0.9-2.8S5,11,6,10.8c0.3,0,0.4-0.2,0.5-0.3c0.1-0.1,0.1-0.3,0-0.6 C6.1,9,6.4,7.9,7.1,7.1s1.8-1,2.8-0.6c0.3,0.1,0.5,0,0.6,0c0.1-0.1,0.3-0.2,0.3-0.5C11,5,11.7,4.1,12.7,3.9c1-0.3,2.1,0.1,2.7,0.9 C15.7,5,15.9,5,16,5l0,0c0.1,0,0.3,0,0.5-0.2l0,0c0.7-0.8,1.7-1.2,2.8-0.9C20.3,4.1,21,5,21.2,6c0,0.3,0.2,0.4,0.3,0.5 c0.1,0.1,0.3,0.1,0.6,0c1-0.4,2.1-0.2,2.8,0.6c0.8,0.8,1,1.8,0.6,2.8c-0.1,0.3,0,0.5,0,0.6c0.1,0.1,0.2,0.3,0.5,0.3 c1.1,0.2,1.9,0.9,2.2,1.9s-0.1,2.1-0.9,2.7C27,15.7,27,15.9,27,16s0,0.3,0.2,0.5c0.8,0.7,1.2,1.7,0.9,2.8S27,21,26,21.2 c-0.3,0-0.4,0.2-0.5,0.3c-0.1,0.1-0.1,0.3,0,0.6c0.4,1,0.2,2.1-0.6,2.8c-0.8,0.8-1.8,1-2.8,0.6c-0.3-0.1-0.5,0-0.6,0 c-0.1,0.1-0.3,0.2-0.3,0.5c-0.2,1.1-0.9,1.9-1.9,2.2C19,28.2,18.8,28.2,18.5,28.2z\"/></symbol><symbol id=\"lock\" viewBox=\"0 0 32 32\"><path id=\"XMLID_86_\" d=\"M25,28H7c-0.6,0-1-0.4-1-1V15c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1v12C26,27.6,25.6,28,25,28z\" /><path id=\"XMLID_93_\" d=\"M20,14v-3c0-2.2-1.8-4-4-4h0c-2.2,0-4,1.8-4,4v5H9v-6c0-3.3,2.7-6,6-6h2c3.3,0,6,2.7,6,6v4H20 z\"/></symbol><symbol id=\"unlock\" viewBox=\"0 0 32 32\"><path id=\"XMLID_92_\" d=\"M25,29H7c-0.6,0-1-0.4-1-1V16c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1v12C26,28.6,25.6,29,25,29z\"/><path id=\"XMLID_88_\" d=\"M20,13v-3c0-2.2-1.8-4-4-4h0c-2.2,0-4,1.8-4,4v5H9V9c0-3.3,2.7-6,6-6h2c3.3,0,6,2.7,6,6v4H20z\"/></symbol><symbol id=\"square-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_96_\" d=\"M7.7,8.6c0-0.6,0.4-1,1-1h14.7c0.6,0,1,0.4,1,1v14.7c0,0.6-0.4,1-1,1H8.6c-0.6,0-1-0.4-1-1 V8.6 M5.7,8.6v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.7c0-1.7-1.3-3-3-3H8.6C7,5.7,5.7,7,5.7,8.6L5.7,8.6z\"/></symbol><symbol id=\"th-thick\" viewBox=\"0 0 32 32\"><path id=\"XMLID_109_\" d=\"M7,6h8v9H5V8C5,6.9,5.9,6,7,6z\"/><path id=\"XMLID_116_\" d=\"M17,6h8c1.1,0,2,0.9,2,2v7H17V6z\"/><path id=\"XMLID_118_\" d=\"M5,17h10v9H7c-1.1,0-2-0.9-2-2V17z\"/><path id=\"XMLID_117_\" d=\"M17,17h10v7c0,1.1-0.9,2-2,2h-8V17z\"/></symbol><symbol id=\"th\" viewBox=\"0 0 32 32\"><path id=\"XMLID_101_\" d=\"M11,12V6H7.2C5.4,6,4,7.3,4,8.9V12H11z\"/><path id=\"XMLID_100_\" d=\"M21,12h7V8.9C28,7.3,26.6,6,24.8,6H21V12z\"/><path id=\"XMLID_99_\" d=\"M11,20H4v3.1C4,24.7,5.4,26,7.2,26H11V20z\"/><path id=\"XMLID_102_\" d=\"M21,20v6h3.8c1.8,0,3.2-1.3,3.2-2.9V20H21z\"/><rect id=\"XMLID_103_\" x=\"4\" y=\"13\" width=\"7\" height=\"6\"/><rect id=\"XMLID_111_\" x=\"12\" y=\"13\" width=\"8\" height=\"6\"/><rect id=\"XMLID_112_\" x=\"12\" y=\"6\" width=\"8\" height=\"6\"/><rect id=\"XMLID_114_\" x=\"12\" y=\"20\" width=\"8\" height=\"6\"/><rect id=\"XMLID_110_\" x=\"21\" y=\"13\" width=\"7\" height=\"6\"/></symbol><symbol id=\"clock\" viewBox=\"0 0 32 32\"><path id=\"XMLID_108_\" d=\"M24.3,16c0,4.6-3.7,8.3-8.3,8.3S7.7,20.6,7.7,16s3.7-8.3,8.3-8.3S24.3,11.4,24.3,16z M16,5.7 C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z\"/><path id=\"XMLID_121_\" d=\"M16,17L16,17c-0.6,0-1-0.4-1-1V9c0-0.6,0.4-1,1-1h0c0.6,0,1,0.4,1,1v7C17,16.6,16.6,17,16,17 z\"/><path id=\"XMLID_123_\" d=\"M22,16L22,16c0,0.6-0.4,1-1,1h-5c-0.6,0-1-0.4-1-1v0c0-0.6,0.4-1,1-1h5 C21.6,15,22,15.4,22,16z\"/></symbol><symbol id=\"do-not\" viewBox=\"0 0 32 32\"><path id=\"XMLID_105_\" d=\"M24.3,16c0,4.6-3.7,8.3-8.3,8.3S7.7,20.6,7.7,16s3.7-8.3,8.3-8.3S24.3,11.4,24.3,16z M16,5.7 C10.3,5.7,5.7,10.3,5.7,16S10.3,26.3,16,26.3S26.3,21.7,26.3,16S21.7,5.7,16,5.7z\"/><path id=\"XMLID_104_\" d=\"M23.1,23.1L23.1,23.1c-0.4,0.4-1,0.4-1.4,0L8.9,10.3c-0.4-0.4-0.4-1,0-1.4l0,0 c0.4-0.4,1-0.4,1.4,0l12.7,12.7C23.5,22,23.5,22.7,23.1,23.1z\"/></symbol><symbol id=\"do-not-square\" viewBox=\"0 0 32 32\"><path id=\"XMLID_148_\" d=\"M7.7,8.6c0-0.6,0.4-1,1-1h14.7c0.6,0,1,0.4,1,1v14.7c0,0.6-0.4,1-1,1H8.6c-0.6,0-1-0.4-1-1V8.6 M5.7,8.6 v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V8.7c0-1.7-1.3-3-3-3H8.6C7,5.7,5.7,7,5.7,8.6L5.7,8.6z\"/><path id=\"XMLID_154_\" d=\"M24.8,24.8L24.8,24.8c-0.4,0.4-1,0.4-1.4,0L7.2,8.6c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0 l16.1,16.1C25.2,23.8,25.2,24.4,24.8,24.8z\"/></symbol><symbol id=\"checkout\" viewBox=\"0 0 32 32\"><path id=\"XMLID_129_\" d=\"M24.3,14v9.3c0,0.6-0.4,1-1,1H8.7c-0.6,0-1-0.4-1-1V8.6c0-0.6,0.4-1,1-1h12.5l2-2H8.7 c-1.7,0-3,1.3-3,3v14.7c0,1.7,1.3,3,3,3h14.7c1.7,0,3-1.3,3-3V12.6c0-0.2,0-0.4-0.1-0.6L24.3,14z\"/><path id=\"XMLID_127_\" d=\"M27.6,8.8L16.4,20c-0.5,0.5-1.4,0.5-1.9,0l-6.1-6.1c-0.5-0.5-0.5-1.4,0-1.9l0.9-0.9 c0.5-0.5,1.4-0.5,1.9,0l4.2,4.2L24.8,6c0.5-0.5,1.4-0.5,1.9,0l0.9,0.9C28.1,7.4,28.1,8.3,27.6,8.8z\"/></symbol><symbol id=\"barcode\" viewBox=\"0 0 32 32\"><rect id=\"XMLID_124_\" x=\"5\" y=\"6\" width=\"2\" height=\"20\"/><rect id=\"XMLID_125_\" x=\"13\" y=\"6\" width=\"2\" height=\"18\"/><rect id=\"XMLID_126_\" x=\"16\" y=\"6\" width=\"3\" height=\"18\"/><rect id=\"XMLID_128_\" x=\"20\" y=\"6\" width=\"2\" height=\"18\"/><rect id=\"XMLID_130_\" x=\"9\" y=\"6\" width=\"3\" height=\"18\"/><rect id=\"XMLID_131_\" x=\"24\" y=\"6\" width=\"3\" height=\"20\"/><rect id=\"XMLID_132_\" x=\"9\" y=\"25\" width=\"2\" height=\"1\"/><rect id=\"XMLID_135_\" x=\"12\" y=\"25\" width=\"1\" height=\"1\"/><rect id=\"XMLID_138_\" x=\"18\" y=\"25\" width=\"2\" height=\"1\"/><rect id=\"XMLID_137_\" x=\"21\" y=\"25\" width=\"1\" height=\"1\"/><rect id=\"XMLID_140_\" x=\"13\" y=\"25\" width=\"2\" height=\"1\"/><rect id=\"XMLID_139_\" x=\"16\" y=\"25\" width=\"1\" height=\"1\"/></symbol><symbol id=\"phone\" viewBox=\"0 0 32 32\"><path id=\"XMLID_1_\" d=\"M24.4,22.8l-4.3-2.3l-2.5,1.7c-1.4-1.2-2.8-2.7-4.1-4.5s-2.2-3.6-2.8-5.4l2.5-1.7l-0.7-4.8 c0,0-2.5-0.2-3.4,0.4c-2.7,1.9-1.8,7.8,2,13.3s9.1,8.3,11.8,6.4C23.8,25.2,24.4,22.8,24.4,22.8z\"/></symbol><symbol id=\"undo\" viewBox=\"0 0 32 32\"><path id=\"XMLID_12_\" d=\"M16,5.7c-3.4,0-6.4,1.7-8.3,4.2l0,0V7.2c0-0.6-0.4-1-1-1s-1,0.4-1,1v5.1c0,0.1,0,0.3,0.1,0.4 C5.8,12.8,5.9,12.9,6,13s0.2,0.2,0.3,0.2c0.1,0.1,0.3,0.1,0.4,0.1h5c0.6,0,1-0.4,1-1s-0.4-1-1-1H9.2c1.5-2.2,4-3.6,6.8-3.6 c4.6,0,8.3,3.7,8.3,8.3c0,4.6-3.7,8.3-8.3,8.3c-2.3,0-4.4-0.9-5.9-2.4c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4l0,0 c1.9,1.9,4.4,3,7.3,3c5.7,0,10.3-4.6,10.3-10.3S21.7,5.7,16,5.7z\"/></symbol><symbol id=\"trash\" viewBox=\"0 0 32 32\"><path id=\"XMLID_171_\" d=\"M23.5,13.5h-15c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h15c1.1,0,2,0.9,2,2v2C25.5,12.6,24.6,13.5,23.5,13.5 z\"/><path id=\"XMLID_161_\" d=\"M20,9.5h-8c-0.6,0-1-0.4-1-1v-3c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2v3C21,9.1,20.6,9.5,20,9.5z M13,7.5h6 v-2h-6L13,7.5z\"/><path id=\"XMLID_162_\" d=\"M21,28.5H11c-1.7,0-3-1.3-3-3v-13c0-0.6,0.4-1,1-1h14c0.6,0,1,0.4,1,1v13C24,27.2,22.7,28.5,21,28.5z M17,24v-9c0-0.6-0.4-1-1-1s-1,0.4-1,1v9c0,0.6,0.4,1,1,1S17,24.6,17,24z M13,24v-9c0-0.6-0.4-1-1-1s-1,0.4-1,1v9c0,0.6,0.4,1,1,1 S13,24.6,13,24z M21,24v-9c0-0.6-0.4-1-1-1s-1,0.4-1,1v9c0,0.6,0.4,1,1,1S21,24.6,21,24z\"/></symbol><symbol id=\"trash-o\" viewBox=\"0 0 32 32\"><path id=\"XMLID_189_\" d=\"M21,28.5H11c-1.7,0-3-1.3-3-3v-13c0-0.6,0.4-1,1-1h14c0.6,0,1,0.4,1,1v13C24,27.2,22.7,28.5,21,28.5z M10,13.5v12c0,0.6,0.4,1,1,1h10c0.6,0,1-0.4,1-1v-12H10z\"/><path id=\"XMLID_185_\" d=\"M23.5,13.5h-15c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h15c1.1,0,2,0.9,2,2v2C25.5,12.6,24.6,13.5,23.5,13.5 z M8.5,9.5l0,2h15v-2H8.5z\"/><path id=\"XMLID_181_\" d=\"M20,9.5h-8c-0.6,0-1-0.4-1-1v-3c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2v3C21,9.1,20.6,9.5,20,9.5z M13,7.5h6 v-2h-6L13,7.5z\"/><path id=\"XMLID_180_\" d=\"M16,25c-0.6,0-1-0.4-1-1v-9c0-0.6,0.4-1,1-1s1,0.4,1,1v9C17,24.6,16.6,25,16,25z\"/><path id=\"XMLID_159_\" d=\"M12,25c-0.6,0-1-0.4-1-1v-9c0-0.6,0.4-1,1-1s1,0.4,1,1v9C13,24.6,12.6,25,12,25z\"/><path id=\"XMLID_1_\" d=\"M20,25c-0.6,0-1-0.4-1-1v-9c0-0.6,0.4-1,1-1s1,0.4,1,1v9C21,24.6,20.6,25,20,25z\"/></symbol><symbol id=\"spiral\" viewBox=\"0 0 32 32\"><path id=\"XMLID_640_\" d=\"M6,17c0-2.7,1-5.2,2.9-7.1C10.8,8,13.3,7,16,7c5,0,9,4,9,9c0,4.4-3.6,8-8,8c-3.9,0-7-3.1-7-7 c0-3.3,2.7-6,6-6c2.8,0,5,2.2,5,5c0,2.2-1.8,4-4,4c0,0,0,0-0.1,0c-1.6,0-2.9-1.3-3-3c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0-1.1,0.9-2,2-2 c0.6,0,1,0.4,1,1s-0.4,1-1,1c0,0.6,0.4,1,1,1c1.1,0,2-0.9,2-2c0-1.7-1.3-3-3-3c-2.2,0-4,1.8-4,4c0,2.8,2.2,5,5,5c3.3,0,6-2.7,6-6 c0-3.9-3.1-7-7-7c-4.4,0-8,3.6-8,8c0,5,4,9,9,9c2.7,0,5.2-1,7.1-2.9c1.2-1.2,2.1-2.7,2.6-4.4c0.2-0.9,0.3-1.8,0.3-2.7 c0-6.1-4.9-11-11-11S5,9.9,5,16c0,3.2,1.4,6.1,3.5,8.1C6.9,22.1,6,19.6,6,17z\"/> </symbol></svg>";
//    document.querySelector("body").insertAdjacentHTML("afterbegin", sprite);
//  }

  function icon(name) {
    var icon =  "<svg class='spr'>" +
                  "<use xlink:href='" + name + "' />" +
                "</svg>";
    return icon;
  }


  function renderIcons() {
    var render = true;
    var icons = document.querySelectorAll("[data-icon]"); //get all the data-icon atts

    for (var i = 0; i < icons.length; i++) { //iterate through
      var currentIcon = icons[i]; //each one
      var name        = currentIcon.getAttribute("data-icon"); //get the name into var
      var content     = currentIcon.innerHTML;
      currentIcon.innerHTML = icon(name) + content; //inserts the new markup
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
//    renderSprite();
    renderIcons();
  });

})(window.document);