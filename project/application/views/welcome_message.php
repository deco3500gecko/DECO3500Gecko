<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Log in </title>
<style id="applicationStylesheet" type="text/css">
	body {
		overflow-x: hidden;
		overflow-y: hidden;
	}

	.mediaViewInfo {
		--web-view-name: Log in ;
		--web-view-id: Log_in_;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Log_in_;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Log_in_ {
		position: absolute;
		width: 1920px;
		height: 1080px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Log in ;
		--web-view-id: Log_in_;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	#Rectangle_1548 {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_1548 {
		position: absolute;
		overflow: visible;
		width: 960px;
		height: 1080px;
		left: 960px;
		top: 0px;
	}
	#Logo {
		left: 1257px;
		top: 290px;
		position: absolute;
		overflow: visible;
		width: 339px;
		white-space: nowrap;
		text-align: left;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: bold;
		font-size: 42px;
		color: rgba(38,156,182,1);
		letter-spacing: 2px;
	}
	#Welcome_back_Please_login_to_y {
		opacity: 0.5;
		left: 1226px;
		top: 365px;
		position: absolute;
		overflow: visible;
		width: 389px;
		white-space: nowrap;
		text-align: center;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(101,100,100,1);
	}
	#RememberMe {
		position: absolute;
		width: 149.909px;
		height: 25px;
		left: 1195.091px;
		top: 612px;
		overflow: visible;
	}
	#Path_373 {
		fill: rgba(255,255,255,1);
		stroke: rgba(36,35,35,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_373 {
		overflow: visible;
		position: absolute;
		width: 21.819px;
		height: 21.819px;
		left: 0px;
		top: 1.538px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Remember_me {
		left: 39.909px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 111px;
		white-space: nowrap;
		line-height: 30px;
		margin-top: -6px;
		text-align: left;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(36,35,35,1);
	}
	#Forgot_Password {
		left: 1518px;
		top: 614px;
		position: absolute;
		overflow: visible;
		width: 119px;
		white-space: nowrap;
		line-height: 29px;
		margin-top: -6px;
		text-align: right;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(36,35,35,1);
	}
	#Term_of_use_Privacy_policy {
		left: 1349px;
		top: 1034px;
		position: absolute;
		overflow: visible;
		width: 133px;
		white-space: nowrap;
		line-height: 14px;
		margin-top: -1px;
		text-align: center;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(36,35,35,1);
	}
	#btn_login {
		position: absolute;
		width: 227px;
		height: 61px;
		left: 1314px;
		top: 687px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Dashboard___Inactive_Roll_Call_MUSTHAVE.html;
		cursor: pointer;
	}
	#Rectangle_166 {
		fill: rgba(38,156,182,1);
		stroke: rgba(67,66,93,0);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Rectangle_166 {
		position: absolute;
		overflow: visible;
		width: 227px;
		height: 61px;
		left: 0px;
		top: 0px;
	}
	#Login {
		left: 84px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 49px;
		white-space: nowrap;
		text-align: center;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 21px;
		color: rgba(255,255,255,1);
	}
	#label {
		position: absolute;
		width: 436.384px;
		height: 33.611px;
		left: 1194px;
		top: 438.439px;
		overflow: visible;
	}
	#Username_g {
		left: 6.633px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 69px;
		white-space: nowrap;
		line-height: 27px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(36,35,35,1);
	}
	#Path_297 {
		fill: transparent;
		stroke: rgba(245,246,250,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_297 {
		overflow: visible;
		position: absolute;
		width: 436.384px;
		height: 2px;
		left: 0px;
		top: 33.611px;
		transform: matrix(1,0,0,1,0,0);
	}
	#label_i {
		position: absolute;
		width: 436.384px;
		height: 33.611px;
		left: 1194px;
		top: 521.352px;
		overflow: visible;
	}
	#Password {
		left: 6.633px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 27px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		color: rgba(36,35,35,1);
	}
	#Path_297_k {
		fill: transparent;
		stroke: rgba(245,246,250,1);
		stroke-width: 2px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_297_k {
		overflow: visible;
		position: absolute;
		width: 436.384px;
		height: 2px;
		left: 0px;
		top: 33.611px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Dont_have_an_account_Sign_up {
		left: 1313px;
		top: 763px;
		position: absolute;
		overflow: visible;
		width: 227px;
		white-space: nowrap;
		line-height: 29px;
		margin-top: -6px;
		text-align: center;
		font-family: Source Sans Pro;
		font-style: normal;
		font-weight: normal;
		font-size: 17px;
		color: rgba(101,100,100,1);
		text-decoration: underline;
	}
	#Group_311 {
		position: absolute;
		width: 1022.842px;
		height: 783.432px;
		left: 129px;
		top: 148px;
		overflow: visible;
	}
	#Path_407 {
		opacity: 0.1;
		fill: rgba(42,174,203,1);
	}
	.Path_407 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 1009.536px;
		height: 675.72px;
		left: 13.306px;
		top: 26.01px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_408 {
		fill: rgba(42,174,203,1);
	}
	.Path_408 {
		overflow: visible;
		position: absolute;
		width: 495.76px;
		height: 292.42px;
		left: 59.16px;
		top: 398.072px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_409 {
		fill: rgba(42,174,203,1);
	}
	.Path_409 {
		overflow: visible;
		position: absolute;
		width: 33.6px;
		height: 14.348px;
		left: 98.42px;
		top: 655.086px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_410_q {
		fill: rgba(42,174,203,1);
	}
	.Path_410_q {
		overflow: visible;
		position: absolute;
		width: 13.937px;
		height: 34.85px;
		left: 87.593px;
		top: 655.082px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_411_r {
		fill: rgba(42,174,203,1);
	}
	.Path_411_r {
		overflow: visible;
		position: absolute;
		width: 42px;
		height: 21.061px;
		left: 84.18px;
		top: 622.639px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_412 {
		fill: rgba(42,174,203,1);
	}
	.Path_412 {
		overflow: visible;
		position: absolute;
		width: 23.674px;
		height: 38.079px;
		left: 62.89px;
		top: 626.846px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_413 {
		fill: rgba(61,160,95,1);
	}
	.Path_413 {
		overflow: visible;
		position: absolute;
		width: 45.36px;
		height: 25.544px;
		left: 71.86px;
		top: 580.254px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_414 {
		fill: rgba(61,160,95,1);
	}
	.Path_414 {
		overflow: visible;
		position: absolute;
		width: 51.24px;
		height: 26.738px;
		left: 60.94px;
		top: 541.622px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_415 {
		fill: rgba(61,160,95,1);
	}
	.Path_415 {
		overflow: visible;
		position: absolute;
		width: 54px;
		height: 23.262px;
		left: 57.02px;
		top: 504.588px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_416 {
		fill: rgba(61,160,95,1);
	}
	.Path_416 {
		overflow: visible;
		position: absolute;
		width: 52.92px;
		height: 23.718px;
		left: 53.66px;
		top: 466.139px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_417 {
		fill: rgba(61,160,95,1);
	}
	.Path_417 {
		overflow: visible;
		position: absolute;
		width: 52.08px;
		height: 28.138px;
		left: 55.62px;
		top: 426.042px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_418 {
		fill: rgba(61,160,95,1);
	}
	.Path_418 {
		overflow: visible;
		position: absolute;
		width: 52.64px;
		height: 28.072px;
		left: 60.94px;
		top: 388.464px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_419 {
		fill: rgba(61,160,95,1);
	}
	.Path_419 {
		overflow: visible;
		position: absolute;
		width: 55.26px;
		height: 31.096px;
		left: 67.8px;
		top: 349.272px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_420 {
		fill: rgba(61,160,95,1);
	}
	.Path_420 {
		overflow: visible;
		position: absolute;
		width: 55px;
		height: 35.641px;
		left: 76.78px;
		top: 309.851px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_421 {
		fill: rgba(61,160,95,1);
	}
	.Path_421 {
		overflow: visible;
		position: absolute;
		width: 54.32px;
		height: 34.851px;
		left: 89.78px;
		top: 275.012px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_422 {
		fill: rgba(61,160,95,1);
	}
	.Path_422 {
		overflow: visible;
		position: absolute;
		width: 47.6px;
		height: 32.35px;
		left: 105.46px;
		top: 238.675px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_423 {
		fill: rgba(61,160,95,1);
	}
	.Path_423 {
		overflow: visible;
		position: absolute;
		width: 42.85px;
		height: 37.155px;
		left: 119.74px;
		top: 197.698px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_424 {
		fill: rgba(61,160,95,1);
	}
	.Path_424 {
		overflow: visible;
		position: absolute;
		width: 38.75px;
		height: 36.662px;
		left: 132.71px;
		top: 159.002px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_425 {
		fill: rgba(61,160,95,1);
	}
	.Path_425 {
		overflow: visible;
		position: absolute;
		width: 26.687px;
		height: 68.38px;
		left: 138.99px;
		top: 99.292px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_426 {
		fill: rgba(61,160,95,1);
	}
	.Path_426 {
		overflow: visible;
		position: absolute;
		width: 8.638px;
		height: 73.37px;
		left: 151.45px;
		top: 41.272px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_427 {
		fill: rgba(61,160,95,1);
	}
	.Path_427 {
		overflow: visible;
		position: absolute;
		width: 43.32px;
		height: 28.964px;
		left: 30.51px;
		top: 591.315px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_428 {
		fill: rgba(61,160,95,1);
	}
	.Path_428 {
		overflow: visible;
		position: absolute;
		width: 47.44px;
		height: 31.564px;
		left: 15.45px;
		top: 550.528px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_429 {
		fill: rgba(61,160,95,1);
	}
	.Path_429 {
		overflow: visible;
		position: absolute;
		width: 54px;
		height: 23.262px;
		left: 1.62px;
		top: 506.898px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_430 {
		fill: rgba(61,160,95,1);
	}
	.Path_430 {
		overflow: visible;
		position: absolute;
		width: 52.92px;
		height: 23.718px;
		left: 0px;
		top: 466.139px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_431 {
		fill: rgba(61,160,95,1);
	}
	.Path_431 {
		overflow: visible;
		position: absolute;
		width: 48.62px;
		height: 32.661px;
		left: 7px;
		top: 420.196px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_432 {
		fill: rgba(61,160,95,1);
	}
	.Path_432 {
		overflow: visible;
		position: absolute;
		width: 49px;
		height: 32.788px;
		left: 13.87px;
		top: 380.387px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_433 {
		fill: rgba(61,160,95,1);
	}
	.Path_433 {
		overflow: visible;
		position: absolute;
		width: 34px;
		height: 53.75px;
		left: 38.31px;
		top: 325.302px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_434 {
		fill: rgba(61,160,95,1);
	}
	.Path_434 {
		overflow: visible;
		position: absolute;
		width: 25.49px;
		height: 60px;
		left: 54.36px;
		top: 285.552px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_435 {
		fill: rgba(61,160,95,1);
	}
	.Path_435 {
		overflow: visible;
		position: absolute;
		width: 29px;
		height: 58px;
		left: 67.09px;
		top: 250.982px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_436 {
		fill: rgba(61,160,95,1);
	}
	.Path_436 {
		overflow: visible;
		position: absolute;
		width: 15.652px;
		height: 56.31px;
		left: 93.828px;
		top: 213.902px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_437 {
		fill: rgba(61,160,95,1);
	}
	.Path_437 {
		overflow: visible;
		position: absolute;
		width: 16.422px;
		height: 54.88px;
		left: 104.348px;
		top: 178.782px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_438 {
		fill: rgba(61,160,95,1);
	}
	.Path_438 {
		overflow: visible;
		position: absolute;
		width: 13.32px;
		height: 53.12px;
		left: 122.35px;
		top: 144.582px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_439 {
		fill: rgba(61,160,95,1);
	}
	.Path_439 {
		overflow: visible;
		position: absolute;
		width: 13.88px;
		height: 72.7px;
		left: 127.41px;
		top: 93.572px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_440 {
		fill: rgba(61,160,95,1);
	}
	.Path_440 {
		overflow: visible;
		position: absolute;
		width: 34.008px;
		height: 65px;
		left: 118.302px;
		top: 47.942px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_441 {
		fill: rgba(61,160,95,1);
	}
	.Path_441 {
		overflow: visible;
		position: absolute;
		width: 36.12px;
		height: 63.56px;
		left: 111.48px;
		top: 18.152px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_442 {
		fill: rgba(68,64,83,1);
	}
	.Path_442 {
		overflow: visible;
		position: absolute;
		width: 21.265px;
		height: 118.06px;
		left: 130.98px;
		top: 77.952px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_443 {
		fill: rgba(68,64,83,1);
	}
	.Path_443 {
		overflow: visible;
		position: absolute;
		width: 58.5px;
		height: 156.29px;
		left: 75.55px;
		top: 191.282px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_444 {
		fill: rgba(68,64,83,1);
	}
	.Path_444 {
		overflow: visible;
		position: absolute;
		width: 79.264px;
		height: 361.9px;
		left: 51.266px;
		top: 341.952px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_445 {
		fill: rgba(213,214,219,1);
	}
	.Path_445 {
		overflow: visible;
		position: absolute;
		width: 211.04px;
		height: 151.64px;
		left: 419.69px;
		top: 626.932px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_446 {
		fill: rgba(42,174,203,1);
	}
	.Path_446 {
		overflow: visible;
		position: absolute;
		width: 582.47px;
		height: 127.11px;
		left: 59.16px;
		top: 563.382px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_447 {
		fill: rgba(248,151,19,1);
	}
	.Path_447 {
		overflow: visible;
		position: absolute;
		width: 582.47px;
		height: 127.11px;
		left: 59.16px;
		top: 563.382px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_448 {
		fill: rgba(248,151,19,1);
	}
	.Path_448 {
		overflow: visible;
		position: absolute;
		width: 385.691px;
		height: 165.89px;
		left: 49.729px;
		top: 609.042px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_449 {
		opacity: 0.1;
		fill: rgba(248,151,19,1);
	}
	.Path_449 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 385.691px;
		height: 165.89px;
		left: 51.729px;
		top: 612.042px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_450 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_450 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 5.951px;
		height: 53.5px;
		left: 64.279px;
		top: 624.432px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_451 {
		fill: rgba(248,151,19,1);
	}
	.Path_451 {
		overflow: visible;
		position: absolute;
		width: 585.525px;
		height: 97px;
		left: 62.73px;
		top: 686.432px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_452 {
		opacity: 0.1;
		fill: rgba(248,151,19,1);
	}
	.Path_452 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 585.525px;
		height: 97px;
		left: 62.73px;
		top: 680.432px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_453 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_453 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 8.889px;
		height: 60px;
		left: 408.341px;
		top: 699.432px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rectangle_1528 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1528 {
		mix-blend-mode: normal;
		width: 94.57px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,422.0759,713.973) rotate(-18.45deg);
		transform-origin: center;
	}
	#Rectangle_1529 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1529 {
		mix-blend-mode: normal;
		width: 115.23px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,420.7353,716.5015) rotate(-20.82deg);
		transform-origin: center;
	}
	#Rectangle_1530 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1530 {
		mix-blend-mode: normal;
		width: 133.56px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,420.1335,721.1721) rotate(-22.26deg);
		transform-origin: center;
	}
	#Rectangle_1531 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1531 {
		mix-blend-mode: normal;
		width: 153.74px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,419.7535,723.1808) rotate(-24.31deg);
		transform-origin: center;
	}
	#Rectangle_1532 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1532 {
		mix-blend-mode: normal;
		width: 168.15px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,420.6353,725.2315) rotate(-23.61deg);
		transform-origin: center;
	}
	#Rectangle_1533 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1533 {
		mix-blend-mode: normal;
		width: 201.22px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,421.7475,725.852) rotate(-23.36deg);
		transform-origin: center;
	}
	#Path_454 {
		opacity: 0.3;
		fill: rgba(255,255,255,1);
	}
	.Path_454 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 283.22px;
		height: 67px;
		left: 152.23px;
		top: 576.932px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_455 {
		fill: rgba(248,151,19,1);
	}
	.Path_455 {
		overflow: visible;
		position: absolute;
		width: 211.65px;
		height: 74.23px;
		left: 435.42px;
		top: 616.262px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_456 {
		fill: rgba(213,214,219,1);
	}
	.Path_456 {
		overflow: visible;
		position: absolute;
		width: 211.03px;
		height: 151.66px;
		left: 518.99px;
		top: 530.752px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_457 {
		fill: rgba(58,55,104,1);
	}
	.Path_457 {
		overflow: visible;
		position: absolute;
		width: 582.47px;
		height: 127.11px;
		left: 158.46px;
		top: 467.202px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_458 {
		fill: rgba(58,55,104,1);
	}
	.Path_458 {
		overflow: visible;
		position: absolute;
		width: 385.728px;
		height: 165.89px;
		left: 148.982px;
		top: 512.862px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_459 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_459 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 385.728px;
		height: 165.89px;
		left: 148.982px;
		top: 512.862px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_460 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_460 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 5.947px;
		height: 53.5px;
		left: 163.573px;
		top: 528.252px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_461 {
		fill: rgba(58,55,104,1);
	}
	.Path_461 {
		overflow: visible;
		position: absolute;
		width: 585.526px;
		height: 97px;
		left: 162.02px;
		top: 590.252px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_462 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_462 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 585.526px;
		height: 97px;
		left: 162.02px;
		top: 590.252px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_463 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_463 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 8.889px;
		height: 60px;
		left: 507.631px;
		top: 603.252px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rectangle_1534 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1534 {
		mix-blend-mode: normal;
		width: 94.57px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,521.3737,617.8037) rotate(-18.45deg);
		transform-origin: center;
	}
	#Rectangle_1535 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1535 {
		mix-blend-mode: normal;
		width: 115.23px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,520.0456,620.3274) rotate(-20.82deg);
		transform-origin: center;
	}
	#Rectangle_1536 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1536 {
		mix-blend-mode: normal;
		width: 133.56px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,519.4291,624.984) rotate(-22.26deg);
		transform-origin: center;
	}
	#Rectangle_1537 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1537 {
		mix-blend-mode: normal;
		width: 153.74px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,519.0607,626.9948) rotate(-24.31deg);
		transform-origin: center;
	}
	#Rectangle_1538 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1538 {
		mix-blend-mode: normal;
		width: 168.15px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,519.9282,629.0328) rotate(-23.61deg);
		transform-origin: center;
	}
	#Rectangle_1539 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1539 {
		mix-blend-mode: normal;
		width: 201.22px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,521.0481,629.6534) rotate(-23.36deg);
		transform-origin: center;
	}
	#Path_464 {
		opacity: 0.45;
		fill: rgba(255,255,255,1);
	}
	.Path_464 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 283.22px;
		height: 67px;
		left: 251.53px;
		top: 480.752px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_465 {
		fill: rgba(58,55,104,1);
	}
	.Path_465 {
		overflow: visible;
		position: absolute;
		width: 211.616px;
		height: 74.22px;
		left: 534.75px;
		top: 520.082px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_466 {
		fill: rgba(213,214,219,1);
	}
	.Path_466 {
		overflow: visible;
		position: absolute;
		width: 211px;
		height: 151.67px;
		left: 528.42px;
		top: 420.722px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_467 {
		fill: rgba(42,174,203,1);
	}
	.Path_467 {
		overflow: visible;
		position: absolute;
		width: 582.48px;
		height: 127.11px;
		left: 167.89px;
		top: 357.172px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_468 {
		fill: rgba(42,174,203,1);
	}
	.Path_468 {
		overflow: visible;
		position: absolute;
		width: 385.709px;
		height: 165.89px;
		left: 158.431px;
		top: 402.832px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_469 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_469 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 385.709px;
		height: 165.89px;
		left: 158.431px;
		top: 402.832px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_470 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_470 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 5.951px;
		height: 53.5px;
		left: 173.009px;
		top: 418.222px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_471 {
		fill: rgba(42,174,203,1);
	}
	.Path_471 {
		overflow: visible;
		position: absolute;
		width: 585.525px;
		height: 89px;
		left: 171.46px;
		top: 488.222px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_472 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_472 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 585.525px;
		height: 89px;
		left: 171.46px;
		top: 488.222px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_473 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_473 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 8.889px;
		height: 60px;
		left: 517.071px;
		top: 493.222px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rectangle_1540 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1540 {
		mix-blend-mode: normal;
		width: 94.57px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,530.8165,507.7717) rotate(-18.45deg);
		transform-origin: center;
	}
	#Rectangle_1541 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1541 {
		mix-blend-mode: normal;
		width: 115.23px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,529.4817,510.3005) rotate(-20.82deg);
		transform-origin: center;
	}
	#Rectangle_1542 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1542 {
		mix-blend-mode: normal;
		width: 133.56px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,528.8558,514.962) rotate(-22.26deg);
		transform-origin: center;
	}
	#Rectangle_1543 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1543 {
		mix-blend-mode: normal;
		width: 153.74px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,528.5013,516.9639) rotate(-24.31deg);
		transform-origin: center;
	}
	#Rectangle_1544 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1544 {
		mix-blend-mode: normal;
		width: 168.15px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,529.374,519.0114) rotate(-23.61deg);
		transform-origin: center;
	}
	#Rectangle_1545 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1545 {
		mix-blend-mode: normal;
		width: 201.22px;
		height: 1px;
		position: absolute;
		overflow: visible;
		transform: translate(0px, -0.008px) matrix(1,0,0,1,530.4906,519.6385) rotate(-23.36deg);
		transform-origin: center;
	}
	#Path_474 {
		opacity: 0.3;
		fill: rgba(255,255,255,1);
	}
	.Path_474 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 283.22px;
		height: 67px;
		left: 260.96px;
		top: 370.722px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_475 {
		fill: rgba(42,174,203,1);
	}
	.Path_475 {
		overflow: visible;
		position: absolute;
		width: 211.62px;
		height: 74.23px;
		left: 544.18px;
		top: 410.052px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_482_ba {
		fill: url(#Path_482_ba);
	}
	.Path_482_ba {
		overflow: visible;
		position: absolute;
		width: 341.716px;
		height: 501.883px;
		left: 375.788px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_483 {
		fill: rgba(190,111,114,1);
	}
	.Path_483 {
		overflow: visible;
		position: absolute;
		width: 41px;
		height: 159.611px;
		left: 598.07px;
		top: 198.242px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_484 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_484 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 26.1px;
		height: 23.37px;
		left: 603.11px;
		top: 314.872px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_485 {
		fill: rgba(190,111,114,1);
	}
	.Path_485 {
		overflow: visible;
		position: absolute;
		width: 41px;
		height: 159.611px;
		left: 437.42px;
		top: 199.992px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Rectangle_1546 {
		fill: rgba(62,55,58,1);
	}
	.Rectangle_1546 {
		position: absolute;
		overflow: visible;
		width: 34.15px;
		height: 53.23px;
		left: 543.9px;
		top: 109.262px;
	}
	#Rectangle_1547 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Rectangle_1547 {
		mix-blend-mode: normal;
		position: absolute;
		overflow: visible;
		width: 34.15px;
		height: 53.23px;
		left: 543.9px;
		top: 109.262px;
	}
	#Path_486 {
		fill: rgba(11,56,69,1);
	}
	.Path_486 {
		overflow: visible;
		position: absolute;
		width: 159.654px;
		height: 68.041px;
		left: 464.117px;
		top: 359.98px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_487 {
		opacity: 0.02;
		fill: rgba(11,56,69,1);
	}
	.Path_487 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 159.654px;
		height: 68.041px;
		left: 460.117px;
		top: 343.98px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_488 {
		fill: rgba(190,111,114,1);
	}
	.Path_488 {
		overflow: visible;
		position: absolute;
		width: 198.988px;
		height: 121.038px;
		left: 439.08px;
		top: 108.954px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Ellipse_51 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Ellipse_51 {
		mix-blend-mode: normal;
		position: absolute;
		overflow: visible;
		width: 89.34px;
		height: 89.34px;
		left: 492.71px;
		top: 56.382px;
	}
	#Path_489 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_489 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 201.654px;
		height: 69.88px;
		left: 437.42px;
		top: 162.932px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_490 {
		fill: rgba(103,201,107,1);
	}
	.Path_490 {
		overflow: visible;
		position: absolute;
		width: 201.654px;
		height: 69.88px;
		left: 437.42px;
		top: 161.932px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_491 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_491 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 106.365px;
		height: 110.537px;
		left: 492.71px;
		top: 141.755px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_492 {
		fill: rgba(231,199,202,1);
	}
	.Path_492 {
		overflow: visible;
		position: absolute;
		width: 106.365px;
		height: 110.537px;
		left: 492.71px;
		top: 143.755px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_493 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_493 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 145.333px;
		height: 215.366px;
		left: 462.958px;
		top: 157.922px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_494 {
		fill: rgba(103,201,107,1);
	}
	.Path_494 {
		overflow: visible;
		position: absolute;
		width: 145.333px;
		height: 215.366px;
		left: 462.958px;
		top: 155.922px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_495 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_495 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 155.829px;
		height: 228.822px;
		left: 448.97px;
		top: 3.832px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_496 {
		fill: rgba(62,55,58,1);
	}
	.Path_496 {
		overflow: visible;
		position: absolute;
		width: 155.829px;
		height: 228.822px;
		left: 449.97px;
		top: 2.832px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_497 {
		fill: rgba(195,199,217,1);
	}
	.Path_497 {
		overflow: visible;
		position: absolute;
		width: 39.67px;
		height: 29.42px;
		left: 581.79px;
		top: 464.572px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_498 {
		fill: rgba(11,56,69,1);
	}
	.Path_498 {
		overflow: visible;
		position: absolute;
		width: 190.78px;
		height: 101.99px;
		left: 520.38px;
		top: 361.007px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_499 {
		fill: rgba(231,199,202,1);
	}
	.Path_499 {
		overflow: visible;
		position: absolute;
		width: 84.66px;
		height: 57.921px;
		left: 445.38px;
		top: 443.992px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_500 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_500 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 17.86px;
		height: 52.081px;
		left: 445.38px;
		top: 449.832px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_501 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_501 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 33px;
		height: 2.667px;
		left: 510.42px;
		top: 316.652px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_502 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_502 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 13px;
		height: 1.627px;
		left: 570.71px;
		top: 327.992px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_503 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_503 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 14.67px;
		height: 2.089px;
		left: 570.71px;
		top: 334.992px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_504 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_504 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 28.91px;
		height: 7px;
		left: 566.71px;
		top: 348.322px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_505 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_505 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 22.67px;
		height: 7.011px;
		left: 496.04px;
		top: 348.322px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_506 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_506 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 83.136px;
		height: 35.244px;
		left: 520.37px;
		top: 427.752px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_507 {
		fill: rgba(11,56,69,1);
	}
	.Path_507 {
		overflow: visible;
		position: absolute;
		width: 221.379px;
		height: 134.017px;
		left: 382.13px;
		top: 362.488px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_508 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_508 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 51.31px;
		height: 24.777px;
		left: 447.69px;
		top: 383.606px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_509 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_509 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 42.33px;
		height: 12.73px;
		left: 605.38px;
		top: 383.572px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_510 {
		fill: rgba(231,199,202,1);
	}
	.Path_510 {
		overflow: visible;
		position: absolute;
		width: 106.095px;
		height: 50.444px;
		left: 597.04px;
		top: 443.992px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_511 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_511 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 48.205px;
		height: 49.95px;
		left: 654.93px;
		top: 444.042px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Ellipse_52 {
		fill: rgba(75,75,91,1);
	}
	.Ellipse_52 {
		position: absolute;
		overflow: visible;
		width: 3.5px;
		height: 3.5px;
		left: 628.13px;
		top: 464.572px;
	}
	#Ellipse_53 {
		fill: rgba(75,75,91,1);
	}
	.Ellipse_53 {
		position: absolute;
		overflow: visible;
		width: 3.5px;
		height: 3.5px;
		left: 617.96px;
		top: 467.462px;
	}
	#Group_310 {
		opacity: 0.1;
		position: absolute;
		width: 155.863px;
		height: 169.031px;
		left: 450.243px;
		top: 62.882px;
		overflow: visible;
	}
	#Path_512 {
		fill: rgba(0,0,0,1);
	}
	.Path_512 {
		overflow: visible;
		position: absolute;
		width: 56.984px;
		height: 36.168px;
		left: 62.982px;
		top: 0.352px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_513 {
		fill: rgba(0,0,0,1);
	}
	.Path_513 {
		overflow: visible;
		position: absolute;
		width: 7.1px;
		height: 32.33px;
		left: 12.18px;
		top: 2.36px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_514 {
		fill: rgba(0,0,0,1);
	}
	.Path_514 {
		overflow: visible;
		position: absolute;
		width: 72.213px;
		height: 58.048px;
		left: 0px;
		top: 95.02px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_515 {
		fill: rgba(0,0,0,1);
	}
	.Path_515 {
		overflow: visible;
		position: absolute;
		width: 6.756px;
		height: 55.51px;
		left: 149.107px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_516 {
		fill: rgba(0,0,0,1);
	}
	.Path_516 {
		overflow: visible;
		position: absolute;
		width: 15.954px;
		height: 45.39px;
		left: 111.961px;
		top: 81.03px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_517 {
		fill: rgba(0,0,0,1);
	}
	.Path_517 {
		overflow: visible;
		position: absolute;
		width: 39.012px;
		height: 59.081px;
		left: 115.949px;
		top: 109.95px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_518 {
		opacity: 0.1;
		fill: rgba(0,0,0,0);
		stroke: rgba(0,0,0,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Path_518 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 42.601px;
		height: 16.069px;
		left: 606.73px;
		top: 462.992px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_519 {
		opacity: 0.1;
		fill: rgba(0,0,0,0);
		stroke: rgba(0,0,0,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Path_519 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 47.494px;
		height: 7.053px;
		left: 611.71px;
		top: 488.327px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_520 {
		opacity: 0.1;
		fill: rgba(0,0,0,0);
		stroke: rgba(0,0,0,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 10;
		shape-rendering: auto;
	}
	.Path_520 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 32.588px;
		height: 11.015px;
		left: 473.35px;
		top: 481.12px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_521 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_521 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 186.32px;
		height: 64.565px;
		left: 445.21px;
		top: 182.258px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_522 {
		fill: rgba(213,214,219,1);
	}
	.Path_522 {
		overflow: visible;
		position: absolute;
		width: 186.32px;
		height: 64.565px;
		left: 445.21px;
		top: 183.258px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_523 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_523 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 90.83px;
		height: 97.84px;
		left: 437.38px;
		top: 204.822px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_524 {
		fill: rgba(42,174,203,1);
	}
	.Path_524 {
		overflow: visible;
		position: absolute;
		width: 90.83px;
		height: 97.84px;
		left: 437.38px;
		top: 202.822px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_525 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_525 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 85.62px;
		height: 106.93px;
		left: 549.71px;
		top: 202.822px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_526 {
		fill: rgba(42,174,203,1);
	}
	.Path_526 {
		overflow: visible;
		position: absolute;
		width: 85.62px;
		height: 106.93px;
		left: 549.71px;
		top: 200.822px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_527 {
		opacity: 0.3;
		fill: rgba(255,255,255,1);
	}
	.Path_527 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 46.25px;
		height: 20.9px;
		left: 568.89px;
		top: 223.782px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_528 {
		fill: rgba(190,111,114,1);
	}
	.Path_528 {
		overflow: visible;
		position: absolute;
		width: 65.081px;
		height: 99.931px;
		left: 447.7px;
		top: 263.232px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_529 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_529 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 25.11px;
		height: 100.672px;
		left: 524.6px;
		top: 209.392px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_530 {
		fill: rgba(42,174,203,1);
	}
	.Path_530 {
		overflow: visible;
		position: absolute;
		width: 25.11px;
		height: 100.672px;
		left: 524.6px;
		top: 207.392px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_531 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_531 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 25.11px;
		height: 100.672px;
		left: 524.6px;
		top: 207.392px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_532 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_532 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 43.91px;
		height: 9.295px;
		left: 551.71px;
		top: 193.848px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_533 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_533 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 39.4px;
		height: 6.135px;
		left: 473.35px;
		top: 192.357px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_534 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_534 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 31.71px;
		height: 5.575px;
		left: 573.67px;
		top: 198.898px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_535 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_535 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 28.48px;
		height: 17.52px;
		left: 561.94px;
		top: 401.182px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_536 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_536 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 26.1px;
		height: 23.37px;
		left: 447.25px;
		top: 316.652px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_537 {
		fill: rgba(190,111,114,1);
	}
	.Path_537 {
		overflow: visible;
		position: absolute;
		width: 65.052px;
		height: 99.931px;
		left: 563.706px;
		top: 261.482px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_538 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_538 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 9.51px;
		height: 13.48px;
		left: 618.57px;
		top: 321.512px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Ellipse_54 {
		fill: rgba(190,111,114,1);
	}
	.Ellipse_54 {
		position: absolute;
		overflow: visible;
		width: 89.34px;
		height: 89.34px;
		left: 492.87px;
		top: 54.193px;
	}
	#Path_539 {
		fill: rgba(62,55,58,1);
	}
	.Path_539 {
		overflow: visible;
		position: absolute;
		width: 101.039px;
		height: 47.24px;
		left: 487.371px;
		top: 39.778px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_540 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_540 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 101.048px;
		height: 17.535px;
		left: 487.367px;
		top: 68.332px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_541 {
		fill: rgba(61,160,95,1);
	}
	.Path_541 {
		overflow: visible;
		position: absolute;
		width: 29.614px;
		height: 48.35px;
		left: 933.101px;
		top: 618.202px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_542 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_542 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 29.275px;
		height: 48.39px;
		left: 933.44px;
		top: 618.202px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_543 {
		fill: rgba(255,208,55,1);
	}
	.Path_543 {
		overflow: visible;
		position: absolute;
		width: 1.37px;
		height: 6.685px;
		left: 959.05px;
		top: 626.338px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_544 {
		fill: rgba(255,208,55,1);
	}
	.Path_544 {
		overflow: visible;
		position: absolute;
		width: 6.128px;
		height: 3.759px;
		left: 959.538px;
		top: 629.419px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_545 {
		fill: rgba(61,160,95,1);
	}
	.Path_545 {
		overflow: visible;
		position: absolute;
		width: 29.613px;
		height: 48.35px;
		left: 904.78px;
		top: 618.202px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_546 {
		opacity: 0.1;
		fill: rgba(0,0,0,1);
	}
	.Path_546 {
		mix-blend-mode: normal;
		overflow: visible;
		position: absolute;
		width: 29.28px;
		height: 48.39px;
		left: 904.78px;
		top: 618.202px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_547 {
		fill: rgba(255,208,55,1);
	}
	.Path_547 {
		overflow: visible;
		position: absolute;
		width: 1.37px;
		height: 6.685px;
		left: 907.06px;
		top: 626.338px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_548 {
		fill: rgba(255,208,55,1);
	}
	.Path_548 {
		overflow: visible;
		position: absolute;
		width: 6.128px;
		height: 3.759px;
		left: 901.825px;
		top: 629.419px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Ellipse_55 {
		opacity: 0.1;
		fill: rgba(42,174,203,1);
	}
	.Ellipse_55 {
		mix-blend-mode: normal;
		position: absolute;
		overflow: visible;
		width: 124px;
		height: 19.02px;
		left: 871.75px;
		top: 706.852px;
	}
	#Path_549 {
		fill: rgba(101,97,125,1);
	}
	.Path_549 {
		overflow: visible;
		position: absolute;
		width: 63.855px;
		height: 64.23px;
		left: 901.818px;
		top: 652.482px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_550 {
		fill: rgba(157,156,181,1);
	}
	.Path_550 {
		overflow: visible;
		position: absolute;
		width: 63.23px;
		height: 3.42px;
		left: 902.13px;
		top: 658.522px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_551 {
		fill: rgba(157,156,181,1);
	}
	.Path_551 {
		overflow: visible;
		position: absolute;
		width: 62.05px;
		height: 3.42px;
		left: 902.72px;
		top: 663.372px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_552 {
		fill: rgba(157,156,181,1);
	}
	.Path_552 {
		overflow: visible;
		position: absolute;
		width: 60.86px;
		height: 3.42px;
		left: 903.32px;
		top: 668.222px;
		transform: matrix(1,0,0,1,0,0);
	}
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastTrigger = null;
	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;
	this.horizontalScrollbarsNeeded = false;
	this.verticalScrollbarsNeeded = false;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			} 
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var isOverlay = view ? self.isOverlay(view) : false;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);

			if (isOverlay && view && setViewOptions) {
				self.setViewVariables(null, view);
			}
			else {
				if (view && setViewOptions) self.setViewOptions(view);
				if (view && setViewOptions) self.setViewVariables(view);
			}
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	self.getElementView = function(element) {
		var view = element;
		var viewFound = false;

		while (viewFound==false || view==null) {
			if (view && self.viewsDictionary[view.id]) {
				return view;
			}
			view = view.parentNode;
		}
	}

	/**
	 * Show overlay over view
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 */
	self.showOverlay = function(event, id, x, y) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var anchorLeft = false;
		var anchorTop = false;
		var anchorRight = false;
		var anchorBottom = false;
		var display = null;
		var reparent = true;
		var view = null;
		
		if (overlay==null || overlay==false) {
			self.log("Overlay not found, '"+ id + "'");
			return;
		}

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var isAnimated = animation!="";
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}
		
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {

			// act as switch if same button
			if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
				if (self.lastTrigger==button) {
					self.removeOverlay(isAnimated);
					return;
				}
			}
			else {
				self.removeOverlay(isAnimated);
			}
		}

		if (reparent) {
			view = self.getElementView(button);
			if (view) {
				view.appendChild(overlay);
			}
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);
			
			var display = overlay && overlay.style.display;
			
			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				//self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		var horizontal = self.prefix + "center-horizontally";
		var vertical = self.prefix + "center-vertically";
		var style = overlay.style;
		var transform = [];

		centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
		centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
		anchorLeft = self.getIsStyleDefined(id, "left");
		anchorRight = self.getIsStyleDefined(id, "right");
		anchorTop = self.getIsStyleDefined(id, "top");
		anchorBottom = self.getIsStyleDefined(id, "bottom");

		
		if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
			style = self.viewsDictionary[overlay.id].styleDeclaration.style;
		}
		
		if (centerHorizontally) {
			style.left = "50%";
			style.transformOrigin = "0 0";
			transform.push("translateX(-50%)");
		}
		else if (anchorRight && anchorLeft) {
			style.left = x + "px";
		}
		else if (anchorRight) {
			//style.right = x + "px";
		}
		else {
			style.left = x + "px";
		}
		
		if (centerVertically) {
			style.top = "50%";
			transform.push("translateY(-50%)");
			style.transformOrigin = "0 0";
		}
		else if (anchorTop && anchorBottom) {
			style.top = y + "px";
		}
		else if (anchorBottom) {
			//style.bottom = y + "px";
		}
		else {
			style.top = y + "px";
		}

		if (transform.length) {
			style.transform = transform.join(" ");
		}

		self.currentOverlay = overlay;
		self.lastTrigger = button;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;
			
			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);
		
				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
					self.currentOverlay = null;
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
				self.currentOverlay = null;
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);
	
			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);
	
			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;
		
		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale. 
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;
		var style = view.style;

		if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
			style = self.viewsDictionary[view.id].styleDeclaration.style;
		}

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);
		
		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
			
			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);
			
			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
	
			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}
	
			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;
	
		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}
		
		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
		
				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
				
				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule; 
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];
				
				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;
				
				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;
			
			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			
			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		
		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	/**
	 * Get the first defined value of property. Returns empty string if not defined
	 * @param {String} id id of element
	 * @param {String} property 
	 */
	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.getIsStyleDefined = function(id, property) {
		var value = self.getCSSPropertyValueForElement(id, property);
		return value!==undefined && value!="";
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);
			
			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}
		
		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue;
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				var mediaViewInfoFound = false;
				var mediaId = null;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];

					selectorText = mediaRule.selectorText;
					
					if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						selectorIDText = "#" + mediaId;
						selectorClassText = "." + mediaId + "_Class";
						
						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						mediaViewInfoFound = true;
					}

					if (selectorIDText==selectorText || selectorClassText==selectorText) {
						var styleObject = self.viewsDictionary[mediaId];
						if (styleObject) {
							styleObject.styleDeclaration = mediaRule;
						}
						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					self.addView(selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view. A view object contains the id of the view and the style rule
	 * Use enableMediaQuery(rule) to enable
	 * An array of view names are in self.addedViews array
	 */
	self.addView = function(viewId, cssRule, mediaRule, stateName) {
		var state = {name:viewId, rule:cssRule, id:viewId, mediaRule:mediaRule, stateName:stateName};
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = state;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 */
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 */
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];
		
		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;
				
				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view 
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly 
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);
		
		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		var elementId = id ? id.trim() : id;
		var element = elementId ? document.getElementById(elementId) : null;

		return element;
	}

	self.resizeHandler = function(event) {
		
		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {	
				var view = visibleViews[index];
				self.scaleViewIfNeeded(view);
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleViewsToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view 
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented 

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query 
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];
			
			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];

					if (self.isOverlay(view)) {
						self.removeOverlay(view);
					}
					else {
						self.hideElement(view);
					}
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}
		
	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();
				
				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>
<div id="Log_in_">
	<svg class="Rectangle_1548">
		<rect id="Rectangle_1548" rx="0" ry="0" x="0" y="0" width="960" height="1080">
		</rect>
	</svg>
	<div id="Logo">
		<span>CLASS BUDDY</span>
	</div>
	<div id="Welcome_back_Please_login_to_y">
		<span>Welcome back! Please login to your account.</span>
	</div>
	<div id="RememberMe">
		<svg class="Path_373" viewBox="0 0 21.819 21.819">
			<path id="Path_373" d="M 4.363835334777832 0 L 17.45534133911133 0 C 19.86542129516602 0 21.81917572021484 1.953755497932434 21.81917572021484 4.363835334777832 L 21.81917572021484 17.45534133911133 C 21.81917572021484 19.86542129516602 19.86542129516602 21.81917572021484 17.45534133911133 21.81917572021484 L 4.363835334777832 21.81917572021484 C 1.953755497932434 21.81917572021484 0 19.86542129516602 0 17.45534133911133 L 0 4.363835334777832 C 0 1.953755497932434 1.953755497932434 0 4.363835334777832 0 Z">
			</path>
		</svg>
		<div id="Remember_me">
			<span>Remember me</span>
		</div>
	</div>
	<div id="Forgot_Password">
		<span>Forgot Password</span>
	</div>
	<div id="Term_of_use_Privacy_policy">
		<span>Term of use. Privacy policy</span>
	</div>
	<a href="<?php echo base_url('Welcome/dashboard'); ?>" id="btn_login">
		<svg class="Rectangle_166">
			<rect id="Rectangle_166" rx="4" ry="4" x="0" y="0" width="227" height="61">
			</rect>
		</svg>
		<div id="Login">
			<span>Login</span>
		</div>
	</a>
	<div id="label">
		<div id="Username_g">
			<span>Username</span>
		</div>
		<svg class="Path_297" viewBox="-835.08 2509.809 436.384 2">
			<path id="Path_297" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -398.6962890625 2509.80859375 -398.6962890625 2509.80859375">
			</path>
		</svg>
	</div>
	<div id="label_i">
		<div id="Password">
			<span>Password</span>
		</div>
		<svg class="Path_297_k" viewBox="-835.08 2509.809 436.384 2">
			<path id="Path_297_k" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -398.6962890625 2509.80859375 -398.6962890625 2509.80859375">
			</path>
		</svg>
	</div>
	<div id="Dont_have_an_account_Sign_up">
		<span>Don’t have an account? Sign up.</span>
	</div>
	<div id="Group_311">
		<svg class="Path_407" viewBox="13.306 26.018 1009.536 675.72">
			<path id="Path_407" d="M 599.8599853515625 137.4199981689453 C 535.1400146484375 135.1699981689453 473.489990234375 114.2799987792969 414.6300048828125 91.41999816894531 C 355.7699890136719 68.55999755859375 297.4700012207031 43.22999954223633 234.3000030517578 31.1200008392334 C 193.6699981689453 23.32999992370605 147.1999969482422 22.22999954223633 114.4700012207031 44.0099983215332 C 82.95999908447266 65.01000213623047 72.77999877929688 101.1600036621094 67.30999755859375 134.7400054931641 C 63.18999862670898 160 60.77000045776367 186.5800018310547 72.05999755859375 210.2299957275391 C 79.88999938964844 226.6499938964844 93.80000305175781 240.4499969482422 103.4100036621094 256.2300109863281 C 136.8800048828125 310.9500122070312 113.2300033569336 378.4299926757812 76.95999908447266 431.8599853515625 C 59.95999908447266 456.9299926757812 40.20999908447266 480.8599853515625 27.09000015258789 507.5199890136719 C 13.97000026702881 534.1799926757812 7.889999866485596 564.77001953125 19.3700008392334 591.989990234375 C 30.76000022888184 618.989990234375 57.88999938964844 639.22998046875 87.26999664306641 653.47998046875 C 146.9600067138672 682.4299926757812 217.2700042724609 690.7100219726562 285.8800048828125 695.4000244140625 C 437.7099914550781 705.7899780273438 590.3400268554688 701.2899780273438 742.5700073242188 696.7899780273438 C 798.9099731445312 695.1199951171875 855.489990234375 693.4299926757812 910.9099731445312 684.719970703125 C 941.6900024414062 679.8800048828125 973.4600219726562 672.2100219726562 995.8099975585938 653.6699829101562 C 1024.170043945312 630.1400146484375 1031.199951171875 590.2899780273438 1012.200012207031 560.7899780273438 C 980.3099975585938 511.2999877929688 892.2000122070312 499.010009765625 869.8800048828125 445.8900146484375 C 857.6199951171875 416.6600036621094 870.219970703125 384.1000061035156 888.0399780273438 356.9800109863281 C 926.280029296875 298.8200073242188 990.3699951171875 247.7899932861328 993.75 181.3099975585938 C 996.0700073242188 135.6399993896484 965.25 89.91999816894531 917.6099853515625 68.30999755859375 C 867.6799926757812 45.58000183105469 798.4199829101562 48.45999908447266 761.5999755859375 85.94999694824219 C 723.6599731445312 124.5800018310547 657 139.3999938964844 599.8599853515625 137.4199981689453 Z">
			</path>
		</svg>
		<svg class="Path_408" viewBox="59.16 398.08 495.76 292.42">
			<path id="Path_408" d="M 435.4500122070312 690.5 L 93.16999816894531 688.8300170898438 L 59.15999984741211 609.0599975585938 L 179.4199981689453 600.3300170898438 L 158.4600067138672 512.8699951171875 L 396.3200073242188 482.0400085449219 L 168.5500030517578 402.8599853515625 L 188.6699981689453 398.0799865722656 L 554.9199829101562 457.8299865722656 L 534.75 594.3200073242188 L 505.9200134277344 669.3300170898438 L 435.4500122070312 690.5 Z">
			</path>
		</svg>
		<svg class="Path_409" viewBox="98.42 655.094 33.6 14.348">
			<path id="Path_409" d="M 98.41999816894531 655.4199829101562 C 98.41999816894531 655.4199829101562 119.4199981689453 652.0599975585938 132.0200042724609 666.9000244140625 C 132.0200042724609 666.9000244140625 122.7799987792969 674.1799926757812 102.9000015258789 664.0999755859375 L 98.41999816894531 655.4199829101562 Z">
			</path>
		</svg>
		<svg class="Path_410_q" viewBox="87.593 655.09 13.937 34.85">
			<path id="Path_410_q" d="M 96.22000122070312 655.0900268554688 C 96.22000122070312 655.0900268554688 82.81999969482422 671.5800170898438 89.41999816894531 689.9400024414062 C 89.41999816894531 689.9400024414062 100.3399963378906 685.5700073242188 101.5299987792969 663.3099975585938 L 96.22000122070312 655.0900268554688 Z">
			</path>
		</svg>
		<svg class="Path_411_r" viewBox="84.18 622.647 42 21.061">
			<path id="Path_411_r" d="M 84.18000030517578 627.97998046875 C 84.18000030517578 627.97998046875 92.58000183105469 612.5700073242188 126.1800003051758 634.1400146484375 C 126.1800003051758 634.1400146484375 121.6999969482422 644.5 106.8600006103516 643.6599731445312 C 92.01999664306641 642.8200073242188 88.09999847412109 636.0999755859375 84.18000030517578 627.97998046875 Z">
			</path>
		</svg>
		<svg class="Path_412" viewBox="62.89 626.853 23.674 38.079">
			<path id="Path_412" d="M 82.01000213623047 626.8699951171875 C 82.01000213623047 626.8699951171875 64.58000183105469 624.8699951171875 62.88999938964844 664.77001953125 C 62.88999938964844 664.77001953125 73.94000244140625 667.0599975585938 81.79000091552734 654.4400024414062 C 89.63999938964844 641.8200073242188 86.41999816894531 634.739990234375 82.01000213623047 626.8699951171875 Z">
			</path>
		</svg>
		<svg class="Path_413" viewBox="71.86 580.262 45.36 25.544">
			<path id="Path_413" d="M 71.86000061035156 595.0399780273438 C 71.86000061035156 595.0399780273438 81.66000366210938 567.8800048828125 117.2200012207031 587.2000122070312 C 117.2200012207031 587.2000122070312 109.0999984741211 612.1199951171875 75.5 604.280029296875 L 71.86000061035156 595.0399780273438 Z">
			</path>
		</svg>
		<svg class="Path_414" viewBox="60.94 541.63 51.24 26.738">
			<path id="Path_414" d="M 60.93999862670898 554.4400024414062 C 60.93999862670898 554.4400024414062 79.41999816894531 527 112.1800003051758 552.4400024414062 C 112.1800003051758 552.4400024414062 100.6999969482422 578.2000122070312 63.7400016784668 564.2000122070312 L 60.93999862670898 554.4400024414062 Z">
			</path>
		</svg>
		<svg class="Path_415" viewBox="57.02 504.595 54 23.262">
			<path id="Path_415" d="M 57.02000045776367 515.7999877929688 C 57.02000045776367 515.7999877929688 78.58000183105469 490.5899963378906 111.0199966430664 515.7999877929688 C 111.0199966430664 515.7999877929688 90.58000183105469 537.9199829101562 57.02000045776367 522.239990234375 L 57.02000045776367 515.7999877929688 Z">
			</path>
		</svg>
		<svg class="Path_416" viewBox="53.66 466.146 52.92 23.718">
			<path id="Path_416" d="M 53.65999984741211 478.2699890136719 C 53.65999984741211 478.2699890136719 75.5 451.9500122070312 106.5800018310547 476.8699951171875 C 106.5800018310547 476.8699951171875 81.94000244140625 500.1099853515625 53.65999984741211 484.4299926757812 L 53.65999984741211 478.2699890136719 Z">
			</path>
		</svg>
		<svg class="Path_417" viewBox="55.62 426.049 52.08 28.139">
			<path id="Path_417" d="M 55.61999893188477 444.9500122070312 C 55.61999893188477 444.9500122070312 78.62000274658203 411.0700073242188 107.6999969482422 434.0299987792969 C 107.6999969482422 434.0299987792969 83.05999755859375 463.1499938964844 55.61999893188477 451.3900146484375 L 55.61999893188477 444.9500122070312 Z">
			</path>
		</svg>
		<svg class="Path_418" viewBox="60.94 388.472 52.64 28.072">
			<path id="Path_418" d="M 60.93999862670898 406.0299987792969 C 60.93999862670898 406.0299987792969 85.30000305175781 372.4299926757812 113.5800018310547 398.1900024414062 C 113.5800018310547 398.1900024414062 84.73999786376953 427.3099975585938 60.93999862670898 412.1900024414062 L 60.93999862670898 406.0299987792969 Z">
			</path>
		</svg>
		<svg class="Path_419" viewBox="67.8 349.279 55.26 31.096">
			<path id="Path_419" d="M 69.05999755859375 371.239990234375 C 69.05999755859375 371.239990234375 97.90000152587891 339.6600036621094 123.0599975585938 352.239990234375 C 123.0599975585938 352.239990234375 93.01000213623047 385.7799987792969 67.80000305175781 379.6199951171875 L 69.05999755859375 371.239990234375 Z">
			</path>
		</svg>
		<svg class="Path_420" viewBox="76.78 309.859 55 35.641">
			<path id="Path_420" d="M 79.13999938964844 338.260009765625 C 79.13999938964844 338.260009765625 112.4199981689453 299.5799865722656 131.7799987792969 312.5 C 131.7799987792969 312.5 107.2600021362305 342.5 76.77999877929688 345.5 L 79.13999938964844 338.260009765625 Z">
			</path>
		</svg>
		<svg class="Path_421" viewBox="89.78 275.019 54.32 34.851">
			<path id="Path_421" d="M 93.69000244140625 300.010009765625 C 93.69000244140625 300.010009765625 122.8199996948242 268.4299926757812 144.1000061035156 276.2699890136719 C 144.1000061035156 276.2699890136719 119.1800003051758 309.0299987792969 89.77999877929688 309.8699951171875 L 93.69000244140625 300.010009765625 Z">
			</path>
		</svg>
		<svg class="Path_422" viewBox="105.46 238.682 47.6 32.35">
			<path id="Path_422" d="M 106.8600006103516 264.2300109863281 C 106.8600006103516 264.2300109863281 139.0599975585938 233.9900054931641 153.0599975585938 239.3099975585938 C 153.0599975585938 239.3099975585938 129.8200073242188 272.9100036621094 105.4599990844727 270.9500122070312 L 106.8600006103516 264.2300109863281 Z">
			</path>
		</svg>
		<svg class="Path_423" viewBox="119.74 197.705 42.85 37.155">
			<path id="Path_423" d="M 119.7399978637695 231.1900024414062 C 119.7399978637695 231.1900024414062 147.4600067138672 195.0599975585938 162.5899963378906 197.8600006103516 C 162.5899963378906 197.8600006103516 145.7799987792969 230.0700073242188 119.7399978637695 234.8600006103516 L 119.7399978637695 231.1900024414062 Z">
			</path>
		</svg>
		<svg class="Path_424" viewBox="132.71 159.01 38.75 36.662">
			<path id="Path_424" d="M 133.7200012207031 186.6399993896484 C 133.7200012207031 186.6399993896484 158.2200012207031 158.9499969482422 171.4600067138672 159.0099945068359 C 171.4600067138672 159.0099945068359 152.1199951171875 196.0099945068359 132.7100067138672 195.6699981689453 L 133.7200012207031 186.6399993896484 Z">
			</path>
		</svg>
		<svg class="Path_425" viewBox="138.99 99.3 26.687 68.38">
			<path id="Path_425" d="M 142 156.9799957275391 L 165.6699981689453 99.30000305175781 C 165.6699981689453 99.30000305175781 166.8500061035156 151.4400024414062 138.9900054931641 167.6799926757812 L 142 156.9799957275391 Z">
			</path>
		</svg>
		<svg class="Path_426" viewBox="151.45 41.28 8.638 73.37">
			<path id="Path_426" d="M 151.6100006103516 93.37000274658203 C 151.6100006103516 93.37000274658203 155.5299987792969 45.20000076293945 153.0099945068359 41.27999877929688 C 153.0099945068359 41.27999877929688 169.9299926757812 81.33000183105469 151.4499969482422 114.6500015258789 L 151.6100006103516 93.37000274658203 Z">
			</path>
		</svg>
		<svg class="Path_427" viewBox="30.51 591.323 43.32 28.964">
			<path id="Path_427" d="M 70.94000244140625 594.4000244140625 C 70.94000244140625 594.4000244140625 46.40000152587891 579.1900024414062 30.51000022888184 616.4000244140625 C 30.51000022888184 616.4000244140625 52.34999847412109 630.9000244140625 73.83000183105469 603.8900146484375 L 70.94000244140625 594.4000244140625 Z">
			</path>
		</svg>
		<svg class="Path_428" viewBox="15.45 550.535 47.44 31.564">
			<path id="Path_428" d="M 60.15000152587891 552.8900146484375 C 60.15000152587891 552.8900146484375 30.04999923706055 539.1599731445312 15.44999980926514 578.010009765625 C 15.44999980926514 578.010009765625 38.70000076293945 594.010009765625 62.88999938964844 562.7100219726562 L 60.15000152587891 552.8900146484375 Z">
			</path>
		</svg>
		<svg class="Path_429" viewBox="1.62 506.906 54 23.262">
			<path id="Path_429" d="M 55.61999893188477 518.1099853515625 C 55.61999893188477 518.1099853515625 34.06000137329102 492.8999938964844 1.620000004768372 518.1099853515625 C 1.620000004768372 518.1099853515625 22.05999946594238 540.22998046875 55.61999893188477 524.5499877929688 L 55.61999893188477 518.1099853515625 Z">
			</path>
		</svg>
		<svg class="Path_430" viewBox="0 466.146 52.92 23.718">
			<path id="Path_430" d="M 52.91999816894531 478.2699890136719 C 52.91999816894531 478.2699890136719 31.07999992370605 451.9500122070312 0 476.8699951171875 C 0 476.8699951171875 24.63999938964844 500.1099853515625 52.91999816894531 484.4299926757812 L 52.91999816894531 478.2699890136719 Z">
			</path>
		</svg>
		<svg class="Path_431" viewBox="7 420.203 48.62 32.661">
			<path id="Path_431" d="M 55.61999893188477 445.9100036621094 C 55.61999893188477 445.9100036621094 40.29999923706055 407.9599914550781 7 424.2799987792969 C 7 424.2799987792969 25 457.9299926757812 54.2599983215332 452.2099914550781 L 55.61999893188477 445.9100036621094 Z">
			</path>
		</svg>
		<svg class="Path_432" viewBox="13.87 380.394 49 32.788">
			<path id="Path_432" d="M 62.86999893188477 405.8399963378906 C 62.86999893188477 405.8399963378906 47.63999938964844 367.2300109863281 13.86999988555908 385.1300048828125 C 13.86999988555908 385.1300048828125 34.54999923706055 420.5199890136719 61.36999893188477 411.7999877929688 L 62.86999893188477 405.8399963378906 Z">
			</path>
		</svg>
		<svg class="Path_433" viewBox="38.31 325.31 34 53.75">
			<path id="Path_433" d="M 72.30999755859375 371.4299926757812 C 72.30999755859375 371.4299926757812 66.30999755859375 329.1000061035156 38.31000137329102 325.3099975585938 C 38.31000137329102 325.3099975585938 44.25 369.9500122070312 68.54000091552734 379.0599975585938 L 72.30999755859375 371.4299926757812 Z">
			</path>
		</svg>
		<svg class="Path_434" viewBox="54.36 285.56 25.49 60">
			<path id="Path_434" d="M 79.84999847412109 338.3399963378906 C 79.84999847412109 338.3399963378906 77.51000213623047 287.3399963378906 54.36000061035156 285.5599975585938 C 54.36000061035156 285.5599975585938 55.13999938964844 324.2699890136719 77.23999786376953 345.5599975585938 L 79.84999847412109 338.3399963378906 Z">
			</path>
		</svg>
		<svg class="Path_435" viewBox="67.09 250.99 29 58">
			<path id="Path_435" d="M 96.08999633789062 298.5799865722656 C 96.08999633789062 298.5799865722656 89.19000244140625 256.1700134277344 67.08999633789062 250.9900054931641 C 67.08999633789062 250.9900054931641 69.83000183105469 292.0599975585938 93.90000152587891 308.989990234375 L 96.08999633789062 298.5799865722656 Z">
			</path>
		</svg>
		<svg class="Path_436" viewBox="93.828 213.91 15.652 56.31">
			<path id="Path_436" d="M 109.4800033569336 264.5799865722656 C 109.4800033569336 264.5799865722656 109.25 220.3999938964844 95.75 213.9100036621094 C 95.75 213.9100036621094 87.37999725341797 253.9100036621094 105.5699996948242 270.2200012207031 L 109.4800033569336 264.5799865722656 Z">
			</path>
		</svg>
		<svg class="Path_437" viewBox="104.348 178.79 16.422 54.88">
			<path id="Path_437" d="M 120.7699966430664 230.6900024414062 C 120.7699966430664 230.6900024414062 118.879997253418 185.1999969482422 104.9000015258789 178.7899932861328 C 104.9000015258789 178.7899932861328 100.120002746582 214.7899932861328 118.6800003051758 233.6699981689453 L 120.7699966430664 230.6900024414062 Z">
			</path>
		</svg>
		<svg class="Path_438" viewBox="122.35 144.59 13.32 53.12">
			<path id="Path_438" d="M 135.6699981689453 190.2700042724609 C 135.6699981689453 190.2700042724609 135.5899963378906 153.2700042724609 125.6100006103516 144.5899963378906 C 125.6100006103516 144.5899963378906 115.6900024414062 185.1199951171875 130.4600067138672 197.7100067138672 L 135.6699981689453 190.2700042724609 Z">
			</path>
		</svg>
		<svg class="Path_439" viewBox="127.41 93.58 13.88 72.7">
			<path id="Path_439" d="M 140.8300018310547 155.1600036621094 L 131.1199951171875 93.58000183105469 C 131.1199951171875 93.58000183105469 117.9300003051758 144.0399932861328 141.2899932861328 166.2799987792969 L 140.8300018310547 155.1600036621094 Z">
			</path>
		</svg>
		<svg class="Path_440" viewBox="118.302 47.95 34.008 65">
			<path id="Path_440" d="M 142.7200012207031 93.94999694824219 C 142.7200012207031 93.94999694824219 117.8000030517578 52.54999923706055 118.3099975585938 47.95000076293945 C 118.3099975585938 47.95000076293945 120.9599990844727 91.33999633789062 152.3099975585938 112.9499969482422 L 142.7200012207031 93.94999694824219 Z">
			</path>
		</svg>
		<svg class="Path_441" viewBox="111.48 18.16 36.12 63.56">
			<path id="Path_441" d="M 145.6399993896484 81.72000122070312 C 145.6399993896484 81.72000122070312 122.120002746582 22.92000007629395 111.4800033569336 18.15999984741211 C 111.4800033569336 18.15999984741211 145.0800018310547 35.2400016784668 147.6000061035156 80.04000091552734 L 145.6399993896484 81.72000122070312 Z">
			</path>
		</svg>
		<svg class="Path_442" viewBox="130.98 77.96 21.265 118.06">
			<path id="Path_442" d="M 132.5899963378906 196.0200042724609 L 130.9799957275391 195.5299987792969 C 150.8300018310547 130.8000030517578 155.7799987792969 89.52999877929688 144.9299926757812 79.18000030517578 L 146.0800018310547 77.95999908447266 C 157.5899963378906 88.87999725341797 152.9199981689453 129.6999969482422 132.5899963378906 196.0200042724609 Z">
			</path>
		</svg>
		<svg class="Path_443" viewBox="75.55 191.29 58.5 156.29">
			<path id="Path_443" d="M 77.93000030517578 347.5799865722656 L 75.55000305175781 346.7300109863281 C 77.66000366210938 340.7999877929688 79.93000030517578 334.7799987792969 82.30999755859375 328.8500061035156 C 103.0299987792969 277.2099914550781 120.6699981689453 229.1699981689453 131.9799957275391 192.2899932861328 L 134.0500030517578 191.2899932861328 C 122.7200012207031 228.2400054931641 105.3899993896484 278.1199951171875 84.65000152587891 329.8299865722656 C 82.27999877929688 335.6499938964844 80.01999664306641 341.6400146484375 77.93000030517578 347.5799865722656 Z">
			</path>
		</svg>
		<svg class="Path_444" viewBox="51.266 341.96 79.264 361.9">
			<path id="Path_444" d="M 128.0099945068359 703.8599853515625 C 127.6900024414062 703.510009765625 95.51999664306641 667.280029296875 73.08999633789062 605.4299926757812 C 59.94699859619141 569.218994140625 52.63299942016602 531.1530151367188 51.41999816894531 492.6499938964844 C 49.88000106811523 444.5199890136719 59.97999954223633 390.7799987792969 77.27999877929688 341.9599914550781 L 79.16000366210938 344.1600036621094 C 40.31999969482422 453.7300109863281 55.75 547.6199951171875 76.22000122070312 604.1599731445312 C 98.41000366210938 665.4500122070312 130.2200012207031 701.280029296875 130.5299987792969 701.6400146484375 L 128.0099945068359 703.8599853515625 Z">
			</path>
		</svg>
		<svg class="Path_445" viewBox="419.69 626.94 211.04 151.64">
			<path id="Path_445" d="M 630.72998046875 626.9400024414062 C 630.72998046875 626.9400024414062 608.0599975585938 654.6099853515625 626.0599975585938 696.4400024414062 L 445.0599975585938 774.9400024414062 L 427.6900024414062 778.5800170898438 L 419.6900024414062 743.5800170898438 L 425.0400085449219 699.4099731445312 L 425.0400085449219 675.27001953125 L 630.72998046875 626.9400024414062 Z">
			</path>
		</svg>
		<svg class="Path_446" viewBox="59.16 563.39 582.47 127.11">
			<path id="Path_446" d="M 59.15999984741211 609.0599975585938 L 309.6799926757812 563.3900146484375 L 641.6300048828125 616.27001953125 L 435.4500122070312 690.5 L 59.15999984741211 609.0599975585938 Z">
			</path>
		</svg>
		<svg class="Path_447" viewBox="59.16 563.39 582.47 127.11">
			<path id="Path_447" d="M 59.15999984741211 609.0599975585938 L 309.6799926757812 563.3900146484375 L 641.6300048828125 616.27001953125 L 435.4500122070312 690.5 L 59.15999984741211 609.0599975585938 Z">
			</path>
		</svg>
		<svg class="Path_448" viewBox="49.729 609.05 385.691 165.89">
			<path id="Path_448" d="M 59.15999984741211 609.0499877929688 C 59.15999984741211 609.0499877929688 35.72999954223633 653.4400024414062 62.72999954223633 694.4400024414062 L 434.2300109863281 774.9400024414062 C 434.2300109863281 774.9400024414062 411.1700134277344 739.5800170898438 435.4200134277344 690.5 L 59.15999984741211 609.0499877929688 Z">
			</path>
		</svg>
		<svg class="Path_449" viewBox="49.729 609.05 385.691 165.89">
			<path id="Path_449" d="M 59.15999984741211 609.0499877929688 C 59.15999984741211 609.0499877929688 35.72999954223633 653.4400024414062 62.72999954223633 694.4400024414062 L 434.2300109863281 774.9400024414062 C 434.2300109863281 774.9400024414062 411.1700134277344 739.5800170898438 435.4200134277344 690.5 L 59.15999984741211 609.0499877929688 Z">
			</path>
		</svg>
		<svg class="Path_450" viewBox="64.279 624.44 5.951 53.5">
			<path id="Path_450" d="M 70.23000335693359 624.4400024414062 C 70.23000335693359 624.4400024414062 56.84000015258789 656.9199829101562 70.23000335693359 677.9400024414062">
			</path>
		</svg>
		<svg class="Path_451" viewBox="62.73 686.44 585.525 97">
			<path id="Path_451" d="M 434.2300109863281 774.9400024414062 L 641.6300048828125 686.4400024414062 C 641.6300048828125 686.4400024414062 653.22998046875 688.9400024414062 645.72998046875 697.4400024414062 C 638.22998046875 705.9400024414062 438.2300109863281 783.4400024414062 438.2300109863281 783.4400024414062 L 62.72999954223633 694.4400024414062 L 434.2300109863281 774.9400024414062 Z">
			</path>
		</svg>
		<svg class="Path_452" viewBox="62.73 686.44 585.525 97">
			<path id="Path_452" d="M 434.2300109863281 774.9400024414062 L 641.6300048828125 686.4400024414062 C 641.6300048828125 686.4400024414062 653.22998046875 688.9400024414062 645.72998046875 697.4400024414062 C 638.22998046875 705.9400024414062 438.2300109863281 783.4400024414062 438.2300109863281 783.4400024414062 L 62.72999954223633 694.4400024414062 L 434.2300109863281 774.9400024414062 Z">
			</path>
		</svg>
		<svg class="Path_453" viewBox="408.341 699.44 8.889 60">
			<path id="Path_453" d="M 417.2300109863281 699.4400024414062 C 417.2300109863281 699.4400024414062 397.2300109863281 723.4400024414062 417.2300109863281 759.4400024414062">
			</path>
		</svg>
		<svg class="Rectangle_1528">
			<rect id="Rectangle_1528" rx="0" ry="0" x="0" y="0" width="94.57" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1529">
			<rect id="Rectangle_1529" rx="0" ry="0" x="0" y="0" width="115.23" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1530">
			<rect id="Rectangle_1530" rx="0" ry="0" x="0" y="0" width="133.56" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1531">
			<rect id="Rectangle_1531" rx="0" ry="0" x="0" y="0" width="153.74" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1532">
			<rect id="Rectangle_1532" rx="0" ry="0" x="0" y="0" width="168.15" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1533">
			<rect id="Rectangle_1533" rx="0" ry="0" x="0" y="0" width="201.22" height="1">
			</rect>
		</svg>
		<svg class="Path_454" viewBox="152.23 576.94 283.22 67">
			<path id="Path_454" d="M 152.2299957275391 613.9400024414062 L 328.2300109863281 576.9400024414062 L 435.4500122070312 597.4400024414062 L 291.2300109863281 643.9400024414062 L 152.2299957275391 613.9400024414062 Z">
			</path>
		</svg>
		<svg class="Path_455" viewBox="435.42 616.27 211.65 74.23">
			<path id="Path_455" d="M 641.6300048828125 616.27001953125 C 641.6300048828125 616.27001953125 650.72998046875 619.9400024414062 645.3900146484375 625.6099853515625 C 640.0499877929688 631.280029296875 435.4200134277344 690.5 435.4200134277344 690.5 L 641.6300048828125 616.27001953125 Z">
			</path>
		</svg>
		<svg class="Path_456" viewBox="518.99 530.76 211.03 151.66">
			<path id="Path_456" d="M 730.02001953125 530.760009765625 C 730.02001953125 530.760009765625 707.3599853515625 558.4199829101562 725.3599853515625 600.260009765625 L 544.3599853515625 678.760009765625 L 526.989990234375 682.4199829101562 L 518.989990234375 647.4199829101562 L 524.4199829101562 603.260009765625 L 524.4199829101562 579.0900268554688 L 730.02001953125 530.760009765625 Z">
			</path>
		</svg>
		<svg class="Path_457" viewBox="158.46 467.21 582.47 127.11">
			<path id="Path_457" d="M 158.4600067138672 512.8699951171875 L 408.9700012207031 467.2099914550781 L 740.9299926757812 520.0900268554688 L 534.75 594.3200073242188 L 158.4600067138672 512.8699951171875 Z">
			</path>
		</svg>
		<svg class="Path_458" viewBox="148.982 512.87 385.728 165.89">
			<path id="Path_458" d="M 158.4199981689453 512.8699951171875 C 158.4199981689453 512.8699951171875 134.9799957275391 557.260009765625 161.9799957275391 598.260009765625 L 533.47998046875 678.760009765625 C 533.47998046875 678.760009765625 510.4299926757812 643.3699951171875 534.7100219726562 594.3099975585938 L 158.4199981689453 512.8699951171875 Z">
			</path>
		</svg>
		<svg class="Path_459" viewBox="148.982 512.87 385.728 165.89">
			<path id="Path_459" d="M 158.4199981689453 512.8699951171875 C 158.4199981689453 512.8699951171875 134.9799957275391 557.260009765625 161.9799957275391 598.260009765625 L 533.47998046875 678.760009765625 C 533.47998046875 678.760009765625 510.4299926757812 643.3699951171875 534.7100219726562 594.3099975585938 L 417.2300109863281 568.8800048828125 L 158.4199981689453 512.8699951171875 Z">
			</path>
		</svg>
		<svg class="Path_460" viewBox="163.573 528.26 5.947 53.5">
			<path id="Path_460" d="M 169.5200042724609 528.260009765625 C 169.5200042724609 528.260009765625 156.1399993896484 560.72998046875 169.5200042724609 581.760009765625">
			</path>
		</svg>
		<svg class="Path_461" viewBox="162.02 590.26 585.526 97">
			<path id="Path_461" d="M 533.52001953125 678.760009765625 L 740.9299926757812 590.260009765625 C 740.9299926757812 590.260009765625 752.52001953125 592.760009765625 745.02001953125 601.260009765625 C 737.52001953125 609.760009765625 537.52001953125 687.260009765625 537.52001953125 687.260009765625 L 162.0200042724609 598.260009765625 L 533.52001953125 678.760009765625 Z">
			</path>
		</svg>
		<svg class="Path_462" viewBox="162.02 590.26 585.526 97">
			<path id="Path_462" d="M 533.52001953125 678.760009765625 L 740.9299926757812 590.260009765625 C 740.9299926757812 590.260009765625 752.52001953125 592.760009765625 745.02001953125 601.260009765625 C 737.52001953125 609.760009765625 537.52001953125 687.260009765625 537.52001953125 687.260009765625 L 162.0200042724609 598.260009765625 L 533.52001953125 678.760009765625 Z">
			</path>
		</svg>
		<svg class="Path_463" viewBox="507.631 603.26 8.889 60">
			<path id="Path_463" d="M 516.52001953125 603.260009765625 C 516.52001953125 603.260009765625 496.5199890136719 627.260009765625 516.52001953125 663.260009765625">
			</path>
		</svg>
		<svg class="Rectangle_1534">
			<rect id="Rectangle_1534" rx="0" ry="0" x="0" y="0" width="94.57" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1535">
			<rect id="Rectangle_1535" rx="0" ry="0" x="0" y="0" width="115.23" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1536">
			<rect id="Rectangle_1536" rx="0" ry="0" x="0" y="0" width="133.56" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1537">
			<rect id="Rectangle_1537" rx="0" ry="0" x="0" y="0" width="153.74" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1538">
			<rect id="Rectangle_1538" rx="0" ry="0" x="0" y="0" width="168.15" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1539">
			<rect id="Rectangle_1539" rx="0" ry="0" x="0" y="0" width="201.22" height="1">
			</rect>
		</svg>
		<svg class="Path_464" viewBox="251.53 480.76 283.22 67">
			<path id="Path_464" d="M 251.5299987792969 517.760009765625 L 427.5299987792969 480.760009765625 L 534.75 501.260009765625 L 390.5299987792969 547.760009765625 L 251.5299987792969 517.760009765625 Z">
			</path>
		</svg>
		<svg class="Path_465" viewBox="534.75 520.09 211.616 74.22">
			<path id="Path_465" d="M 740.9299926757812 520.0900268554688 C 740.9299926757812 520.0900268554688 750.02001953125 523.760009765625 744.6900024414062 529.4199829101562 C 739.3599853515625 535.0800170898438 534.75 594.3099975585938 534.75 594.3099975585938 L 740.9299926757812 520.0900268554688 Z">
			</path>
		</svg>
		<svg class="Path_466" viewBox="528.42 420.73 211 151.67">
			<path id="Path_466" d="M 739.4199829101562 420.7300109863281 C 739.4199829101562 420.7300109863281 716.75 470.3999938964844 734.75 512.22998046875 L 553.75 568.72998046875 L 536.4199829101562 572.4000244140625 L 528.4199829101562 537.4000244140625 L 533.77001953125 493.2300109863281 L 533.77001953125 469.0599975585938 L 739.4199829101562 420.7300109863281 Z">
			</path>
		</svg>
		<svg class="Path_467" viewBox="167.89 357.18 582.48 127.11">
			<path id="Path_467" d="M 167.8899993896484 402.8500061035156 L 418.4100036621094 357.1799926757812 L 750.3699951171875 410.0599975585938 L 544.1799926757812 484.2900085449219 L 167.8899993896484 402.8500061035156 Z">
			</path>
		</svg>
		<svg class="Path_468" viewBox="158.431 402.84 385.709 165.89">
			<path id="Path_468" d="M 167.8899993896484 402.8399963378906 C 167.8899993896484 402.8399963378906 144.4199981689453 447.2300109863281 171.4199981689453 488.2300109863281 L 542.9199829101562 568.72998046875 C 542.9199829101562 568.72998046875 519.8599853515625 533.3400268554688 544.1400146484375 484.2900085449219 L 167.8899993896484 402.8399963378906 Z">
			</path>
		</svg>
		<svg class="Path_469" viewBox="158.431 402.84 385.709 165.89">
			<path id="Path_469" d="M 167.8899993896484 402.8399963378906 C 167.8899993896484 402.8399963378906 144.4199981689453 447.2300109863281 171.4199981689453 488.2300109863281 L 542.9199829101562 568.72998046875 C 542.9199829101562 568.72998046875 519.8599853515625 533.3400268554688 544.1400146484375 484.2900085449219 L 167.8899993896484 402.8399963378906 Z">
			</path>
		</svg>
		<svg class="Path_470" viewBox="173.009 418.23 5.951 53.5">
			<path id="Path_470" d="M 178.9600067138672 418.2300109863281 C 178.9600067138672 418.2300109863281 165.5700073242188 450.7099914550781 178.9600067138672 471.7300109863281">
			</path>
		</svg>
		<svg class="Path_471" viewBox="171.46 488.23 585.525 89">
			<path id="Path_471" d="M 542.9600219726562 568.72998046875 L 750.3599853515625 502.2300109863281 C 750.3599853515625 502.2300109863281 761.9600219726562 504.7300109863281 754.4600219726562 513.22998046875 C 746.9600219726562 521.72998046875 546.9600219726562 577.22998046875 546.9600219726562 577.22998046875 L 171.4600067138672 488.2300109863281 L 542.9600219726562 568.72998046875 Z">
			</path>
		</svg>
		<svg class="Path_472" viewBox="171.46 488.23 585.525 89">
			<path id="Path_472" d="M 542.9600219726562 568.72998046875 L 750.3599853515625 502.2300109863281 C 750.3599853515625 502.2300109863281 761.9600219726562 504.7300109863281 754.4600219726562 513.22998046875 C 746.9600219726562 521.72998046875 546.9600219726562 577.22998046875 546.9600219726562 577.22998046875 L 171.4600067138672 488.2300109863281 L 542.9600219726562 568.72998046875 Z">
			</path>
		</svg>
		<svg class="Path_473" viewBox="517.071 493.23 8.889 60">
			<path id="Path_473" d="M 525.9600219726562 493.2300109863281 C 525.9600219726562 493.2300109863281 505.9599914550781 517.22998046875 525.9600219726562 553.22998046875">
			</path>
		</svg>
		<svg class="Rectangle_1540">
			<rect id="Rectangle_1540" rx="0" ry="0" x="0" y="0" width="94.57" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1541">
			<rect id="Rectangle_1541" rx="0" ry="0" x="0" y="0" width="115.23" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1542">
			<rect id="Rectangle_1542" rx="0" ry="0" x="0" y="0" width="133.56" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1543">
			<rect id="Rectangle_1543" rx="0" ry="0" x="0" y="0" width="153.74" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1544">
			<rect id="Rectangle_1544" rx="0" ry="0" x="0" y="0" width="168.15" height="1">
			</rect>
		</svg>
		<svg class="Rectangle_1545">
			<rect id="Rectangle_1545" rx="0" ry="0" x="0" y="0" width="201.22" height="1">
			</rect>
		</svg>
		<svg class="Path_474" viewBox="260.96 370.73 283.22 67">
			<path id="Path_474" d="M 260.9599914550781 407.7300109863281 L 436.9599914550781 370.7300109863281 L 544.1799926757812 391.2300109863281 L 399.9599914550781 437.7300109863281 L 260.9599914550781 407.7300109863281 Z">
			</path>
		</svg>
		<svg class="Path_475" viewBox="544.18 410.06 211.62 74.23">
			<path id="Path_475" d="M 750.3599853515625 410.0599975585938 C 750.3599853515625 410.0599975585938 759.4600219726562 413.7300109863281 754.1199951171875 419.3999938964844 C 748.780029296875 425.0700073242188 544.1799926757812 484.2900085449219 544.1799926757812 484.2900085449219 L 750.3599853515625 410.0599975585938 Z">
			</path>
		</svg>
		<svg class="Path_482_ba" viewBox="375.788 0.008 341.716 501.883">
			<linearGradient id="Path_482_ba" spreadMethod="pad" x1="0.759" x2="0.759" y1="0.535" y2="1.535">
				<stop offset="0" stop-color="#808080" stop-opacity="0.251"></stop>
				<stop offset="0.54" stop-color="#808080" stop-opacity="0.122"></stop>
				<stop offset="1" stop-color="#808080" stop-opacity="0.102"></stop>
			</linearGradient>
			<path id="Path_482_ba" d="M 714.9600219726562 377.2900085449219 C 708.4199829101562 359.5199890136719 672.4199829101562 357.8500061035156 656.7999877929688 362.3800048828125 C 645.7000122070312 365.6099853515625 622.2999877929688 369.25 609.7999877929688 371.0799865722656 L 608.989990234375 370.3099975585938 C 610.6099853515625 369.8299865722656 610.6500244140625 368.6499938964844 610.4500122070312 366.8999938964844 C 610.333984375 364.593994140625 610.3670043945312 362.2820129394531 610.5499877929688 359.9800109863281 C 618.2100219726562 362.3599853515625 625.030029296875 356.7300109863281 625.030029296875 356.7300109863281 L 625.030029296875 356.7300109863281 C 634.030029296875 352.7300109863281 631.6099853515625 335.6099853515625 633.3300170898438 330.9299926757812 C 634.6199951171875 327.4299926757812 636.010009765625 306.8099975585938 636.6300048828125 296.5299987792969 L 636.760009765625 296.5299987792969 L 636.8300170898438 293.0799865722656 C 636.9199829101562 291.5899963378906 636.9600219726562 290.7200012207031 636.9600219726562 290.7200012207031 C 636.9600219726562 290.7200012207031 637.8400268554688 265.5799865722656 639.5599975585938 260.489990234375 C 641.1599731445312 255.8099975585938 642.4600219726562 232.2299957275391 642.6599731445312 228.4900054931641 L 642.6599731445312 228 L 642.530029296875 225.8200073242188 C 642.6199951171875 224.2299957275391 642.6599731445312 222.4600067138672 642.6500244140625 220.6000061035156 C 642.6500244140625 212.0500030517578 641.760009765625 201.2799987792969 641.6500244140625 199.5399932861328 L 641.6500244140625 198.6300048828125 C 641.719970703125 194.9799957275391 641.260009765625 176.6999969482422 625.7100219726562 169.7899932861328 C 619.97998046875 167.2299957275391 613.0900268554688 164.1799926757812 606.4199829101562 161.2100067138672 C 604.7000122070312 146.3600006103516 600.77001953125 131.5899963378906 601.1099853515625 116.629997253418 C 601.1099853515625 114.379997253418 601.3099975585938 112.129997253418 601.530029296875 109.8899993896484 C 601.530029296875 110.5400009155273 601.4600219726562 111.1999969482422 601.4500122070312 111.8899993896484 L 601.4500122070312 116.25 C 602.0399780273438 97.54000091552734 609.1099853515625 78.73000335693359 608.4500122070312 60.41999816894531 C 608.3900146484375 62.20999908447266 608.260009765625 64.01000213623047 608.0900268554688 65.80999755859375 C 608.4349975585938 59.61700057983398 607.7869873046875 53.40800094604492 606.1699829101562 47.41999816894531 C 605.5700073242188 45.31000137329102 604.760009765625 43.13000106811523 603.030029296875 41.72000122070312 C 601.39501953125 40.58399963378906 599.5189819335938 39.84199905395508 597.5499877929688 39.54999923706055 C 592.8179931640625 38.3390007019043 588.010986328125 37.44300079345703 583.1599731445312 36.86999893188477 C 582.4229736328125 34.61399841308594 581.3289794921875 32.4900016784668 579.9199829101562 30.57999992370605 C 569.780029296875 16.65999984741211 554.760009765625 3.579999923706055 537 0.5799999833106995 C 528.0900268554688 -0.9200000166893005 517.8400268554688 0.3300000131130219 511.7799987792969 6.699999809265137 C 511.1470031738281 7.260000228881836 510.5530090332031 7.861000061035156 510 8.5 C 506.739990234375 12.39000034332275 505.3399963378906 17.5 502 21.3799991607666 C 501.7799987792969 21.63999938964844 501.5299987792969 21.8799991607666 501.2900085449219 22.1299991607666 C 494.75 27.97999954223633 484.5599975585938 29.20000076293945 477.2900085449219 34.45000076293945 C 476.0090026855469 35.39199829101562 474.8080139160156 36.43899917602539 473.7000122070312 37.58000183105469 C 470.77099609375 40.48300170898438 468.1440124511719 43.67599868774414 465.8599853515625 47.11000061035156 C 462.5899963378906 51.70999908447266 459.2300109863281 56.5 458.1900024414062 61.9900016784668 C 456.1000061035156 72.98999786376953 463.5899963378906 83.41999816894531 464.9800109863281 94.48999786376953 C 468.0799865722656 119.2600021362305 440.6700134277344 141.2400054931641 445.8599853515625 165.6799926757812 C 447.2449951171875 171.6840057373047 450.3030090332031 177.1730041503906 454.6799926757812 181.5099945068359 C 443.989990234375 191.1900024414062 434.8900146484375 200.5800018310547 434.8900146484375 200.5800018310547 L 434.8900146484375 201.1399993896484 L 433.2000122070312 201.1399993896484 L 433.3699951171875 203.1399993896484 L 433.2000122070312 203.1399993896484 L 434.1300048828125 213.9900054931641 L 433.2000122070312 229.7899932861328 L 433.2000122070312 230.2799987792969 L 433.2000122070312 230.3600006103516 L 433.2000122070312 230.7899932861328 L 433.2000122070312 231.2799987792969 L 433.260009765625 231.2799987792969 C 433.5700073242188 237.0700073242188 434.7999877929688 257.8900146484375 436.260009765625 262.2799987792969 C 437.9800109863281 267.3699951171875 438.8500061035156 292.510009765625 438.8500061035156 292.510009765625 C 438.8500061035156 292.510009765625 440.75 328.0400085449219 442.489990234375 332.739990234375 C 444.2300109863281 337.4400024414062 441.760009765625 354.510009765625 450.7900085449219 358.5400085449219 L 450.7900085449219 358.5400085449219 C 453.4320068359375 360.5660095214844 456.5589904785156 361.8630065917969 459.8599853515625 362.2999877929688 C 459.3999938964844 366.0400085449219 459.6900024414062 368.75 461.1799926757812 369.6000061035156 C 461.8179931640625 369.9750061035156 462.5400085449219 370.1809997558594 463.2799987792969 370.2000122070312 C 462.6669921875 371.1090087890625 462.1229858398438 372.0610046386719 461.6499938964844 373.0499877929688 C 458.0660095214844 372.6759948730469 454.5440063476562 371.8460083007812 451.1700134277344 370.5799865722656 C 441.4700012207031 366.5799865722656 409.2799987792969 357.5799865722656 399.9299926757812 363.9100036621094 C 390.5799865722656 370.239990234375 368.0799865722656 375.9800109863281 378.4700012207031 401.4599914550781 C 388.8599853515625 426.9400024414062 393.7000122070312 427.5799865722656 393.7000122070312 427.5799865722656 C 396.8980102539062 429.9020080566406 399.7040100097656 432.7210083007812 402.010009765625 435.9299926757812 C 405.1300048828125 440.6199951171875 434.2000122070312 451.3500061035156 441.4700012207031 451.3500061035156 C 444.5599975585938 451.302001953125 447.6499938964844 451.4559936523438 450.7200012207031 451.8099975585938 C 450.7200012207031 451.8099975585938 442.8299865722656 458.7300109863281 443.8800048828125 462.75 C 444.9299926757812 466.7699890136719 441.4800109863281 498.9500122070312 441.4800109863281 498.9500122070312 C 441.4800109863281 498.9500122070312 449.4800109863281 507.010009765625 452.8999938964844 496.4400024414062 L 453.0199890136719 496.6000061035156 C 453.6600036621094 497.4700012207031 457.1199951171875 501.3999938964844 463.6300048828125 496.4400024414062 C 466.2940063476562 494.4190063476562 469.1239929199219 492.6260070800781 472.0899963378906 491.0799865722656 L 503.6099853515625 486.6199951171875 C 506.89599609375 486.4150085449219 510.1910095214844 486.3909912109375 513.47998046875 486.5499877929688 C 518.47998046875 486.9599914550781 523.3900146484375 484 526.47998046875 481.7099914550781 C 533.010009765625 484.1900024414062 540.3499755859375 486.8999938964844 543.8400268554688 487.8900146484375 C 550.9199829101562 489.8900146484375 583.4600219726562 498.6199951171875 591.0700073242188 495.8900146484375 C 592.6519775390625 495.260986328125 594.0579833984375 494.2590026855469 595.1699829101562 492.9700012207031 L 602.4299926757812 493.2000122070312 L 599.030029296875 493.8800048828125 C 599.030029296875 493.8800048828125 605.6500244140625 493.989990234375 614.6500244140625 494.1099853515625 L 614.27001953125 494.3299865722656 L 625.5599975585938 494.2300109863281 C 642.0800170898438 494.3800048828125 660.6400146484375 494.4299926757812 663.0800170898438 493.8800048828125 C 666.9000244140625 493.0299987792969 686.75 493.6300048828125 692.5999755859375 493.8800048828125 L 694.22998046875 493.8800048828125 C 694.22998046875 493.8800048828125 716.0399780273438 489.5299987792969 707.0399780273438 467.3999938964844 C 700.1199951171875 450.3999938964844 678.8499755859375 445.4599914550781 669.4099731445312 444.1000061035156 C 672.0700073242188 443.5700073242188 674.3599853515625 443.1600036621094 675.8800048828125 442.9200134277344 C 682.469970703125 441.9200134277344 695.27001953125 435.9200134277344 696.3099975585938 433.8699951171875 C 697.3499755859375 431.8200073242188 708.0800170898438 425.8699951171875 710.8499755859375 422.4800109863281 C 713.6199951171875 419.0899963378906 721.530029296875 395.0599975585938 714.9600219726562 377.2900085449219 Z M 534.3099975585938 427.0199890136719 L 533.239990234375 427.3699951171875 L 532.52001953125 427.6099853515625 L 531.1400146484375 428.9700012207031 C 530.0399780273438 428.2300109863281 528.8599853515625 427.4500122070312 527.6300048828125 426.6499938964844 C 529.7999877929688 426.7799987792969 532.030029296875 426.9100036621094 534.3099975585938 427.0199890136719 Z M 629.6199951171875 455.2000122070312">
			</path>
		</svg>
		<svg class="Path_483" viewBox="598.07 198.25 41 159.611">
			<path id="Path_483" d="M 598.0700073242188 321.5799865722656 C 598.0700073242188 321.5799865722656 613.3699951171875 361.5799865722656 622.0700073242188 357.5799865722656 C 630.77001953125 353.5799865722656 628.4099731445312 336.5799865722656 630.0700073242188 331.9200134277344 C 631.72998046875 327.260009765625 633.5700073242188 291.9200134277344 633.5700073242188 291.9200134277344 C 633.5700073242188 291.9200134277344 634.4099731445312 266.9200134277344 636.0700073242188 261.8599853515625 C 637.6099853515625 257.2099914550781 638.8599853515625 233.7599945068359 639.0700073242188 230.0700073242188 L 639.0700073242188 229.5800018310547 L 637.4199829101562 200.5800018310547 L 628.0800170898438 198.25 L 606.4199829101562 206.25 L 603.4199829101562 223.3800048828125 L 602.25 230.0700073242188 L 601.75 232.9199981689453 L 598.0700073242188 321.5799865722656 Z">
			</path>
		</svg>
		<svg class="Path_484" viewBox="603.11 314.88 26.1 23.37">
			<path id="Path_484" d="M 603.1099853515625 314.8800048828125 C 603.1099853515625 314.8800048828125 617.7100219726562 326.8299865722656 622.1099853515625 327.8800048828125 C 626.510009765625 328.9299926757812 629.2100219726562 338.25 629.2100219726562 338.25">
			</path>
		</svg>
		<svg class="Path_485" viewBox="437.42 200 41 159.611">
			<path id="Path_485" d="M 478.4200134277344 323.3299865722656 C 478.4200134277344 323.3299865722656 463.1199951171875 363.3299865722656 454.4200134277344 359.3299865722656 C 445.7200012207031 355.3299865722656 448.0799865722656 338.3299865722656 446.4200134277344 333.6700134277344 C 444.760009765625 329.010009765625 442.9200134277344 293.6700134277344 442.9200134277344 293.6700134277344 C 442.9200134277344 293.6700134277344 442.0799865722656 268.6700134277344 440.4200134277344 263.6099853515625 C 438.8800048828125 258.9599914550781 437.6300048828125 235.5099945068359 437.4200134277344 231.8200073242188 L 437.4200134277344 231.3300018310547 L 439.0799865722656 202.3300018310547 L 448.4200134277344 200 L 470.0799865722656 208 L 473.0799865722656 225.1300048828125 L 474.25 231.8200073242188 L 474.75 234.6699981689453 L 478.4200134277344 323.3299865722656 Z">
			</path>
		</svg>
		<svg class="Rectangle_1546">
			<rect id="Rectangle_1546" rx="0" ry="0" x="0" y="0" width="34.15" height="53.23">
			</rect>
		</svg>
		<svg class="Rectangle_1547">
			<rect id="Rectangle_1547" rx="0" ry="0" x="0" y="0" width="34.15" height="53.23">
			</rect>
		</svg>
		<svg class="Path_486" viewBox="464.117 359.988 159.654 68.041">
			<path id="Path_486" d="M 472.4200134277344 363.1700134277344 C 472.4200134277344 363.1700134277344 460.75 376 465.0799865722656 378.3299865722656 C 469.4100036621094 380.6600036621094 497.4200134277344 424.3299865722656 497.4200134277344 424.3299865722656 C 497.4200134277344 424.3299865722656 589.4199829101562 435.6600036621094 606.77001953125 418.6600036621094 C 624.1199951171875 401.6600036621094 623.77001953125 371.2900085449219 623.77001953125 371.2900085449219 C 623.77001953125 371.2900085449219 609.8300170898438 374.2900085449219 608.3099975585938 372.6600036621094 C 606.7899780273438 371.0299987792969 598.4400024414062 363.1700134277344 598.4400024414062 363.1700134277344 C 598.4400024414062 363.1700134277344 480.4200134277344 356.010009765625 472.4200134277344 363.1700134277344 Z">
			</path>
		</svg>
		<svg class="Path_487" viewBox="464.117 359.988 159.654 68.041">
			<path id="Path_487" d="M 472.4200134277344 363.1700134277344 C 472.4200134277344 363.1700134277344 460.75 376 465.0799865722656 378.3299865722656 C 469.4100036621094 380.6600036621094 497.4200134277344 424.3299865722656 497.4200134277344 424.3299865722656 C 497.4200134277344 424.3299865722656 589.4199829101562 435.6600036621094 606.77001953125 418.6600036621094 C 624.1199951171875 401.6600036621094 623.77001953125 371.2900085449219 623.77001953125 371.2900085449219 C 623.77001953125 371.2900085449219 609.8300170898438 374.2900085449219 608.3099975585938 372.6600036621094 C 606.7899780273438 371.0299987792969 598.4400024414062 363.1700134277344 598.4400024414062 363.1700134277344 C 598.4400024414062 363.1700134277344 480.4200134277344 356.010009765625 472.4200134277344 363.1700134277344 Z">
			</path>
		</svg>
		<svg class="Path_488" viewBox="439.08 108.962 198.988 121.038">
			<path id="Path_488" d="M 638.0399780273438 201 L 608.0399780273438 225 L 598.969970703125 225.6600036621094 L 595.6400146484375 225.8999938964844 L 539.7100219726562 230 L 481.7099914550781 225.7599945068359 L 473.0799865722656 225.1300048828125 L 462.0799865722656 224.3300018310547 L 439.0799865722656 202.3300018310547 C 439.0799865722656 202.3300018310547 455.3599853515625 184.8899993896484 469.6199951171875 173.1199951171875 C 475.239990234375 168.4700012207031 480.5499877929688 164.7100067138672 484.4200134277344 163.2299957275391 L 485.0799865722656 163 C 487.5140075683594 162.0509948730469 489.68701171875 160.5359954833984 491.4200134277344 158.5800018310547 C 502.6799926757812 146.9700012207031 513.0900268554688 118.3199996948242 513.0900268554688 118.3199996948242 C 513.0900268554688 118.3199996948242 562.760009765625 92.66000366210938 556.760009765625 126.3199996948242 C 550.760009765625 159.9799957275391 579.0900268554688 151.6600036621094 579.0900268554688 151.6600036621094 L 588.4299926757812 155.9199981689453 L 592.1199951171875 157.6100006103516 L 601.530029296875 161.9199981689453 L 622.760009765625 171.6600036621094 C 639.4199829101562 179.3300018310547 638.0399780273438 201 638.0399780273438 201 Z">
			</path>
		</svg>
		<svg class="Ellipse_51">
			<ellipse id="Ellipse_51" rx="44.66999053955078" ry="44.66999053955078" cx="44.66999053955078" cy="44.66999053955078">
			</ellipse>
		</svg>
		<svg class="Path_489" viewBox="437.42 162.94 201.654 69.88">
			<path id="Path_489" d="M 638.1099853515625 232.8200073242188 L 437.4200134277344 232.8200073242188 L 437.4200134277344 232.3300018310547 L 439.0799865722656 203.3300018310547 C 439.0799865722656 203.3300018310547 455.3599853515625 185.8899993896484 469.6199951171875 174.1199951171875 L 595.6199951171875 169.1199951171875 L 601.47998046875 162.9400024414062 L 622.7100219726562 172.6799926757812 C 639.3800048828125 180.3399963378906 638.0399780273438 202.0099945068359 638.0399780273438 202.0099945068359 C 638.0399780273438 202.0099945068359 640.3200073242188 227.1199951171875 638.1099853515625 232.8200073242188 Z">
			</path>
		</svg>
		<svg class="Path_490" viewBox="437.42 161.94 201.654 69.88">
			<path id="Path_490" d="M 638.1099853515625 231.8200073242188 L 437.4200134277344 231.8200073242188 L 437.4200134277344 231.3300018310547 L 439.0799865722656 202.3300018310547 C 439.0799865722656 202.3300018310547 455.3599853515625 184.8899993896484 469.6199951171875 173.1199951171875 L 595.6199951171875 168.1199951171875 L 601.47998046875 161.9400024414062 L 622.7100219726562 171.6799926757812 C 639.3800048828125 179.3399963378906 638.0399780273438 201.0099945068359 638.0399780273438 201.0099945068359 C 638.0399780273438 201.0099945068359 640.3200073242188 226.1199951171875 638.1099853515625 231.8200073242188 Z">
			</path>
		</svg>
		<svg class="Path_491" viewBox="492.71 141.763 106.365 110.537">
			<path id="Path_491" d="M 505.2099914550781 150.5 C 505.2099914550781 150.5 536.8699951171875 190.8399963378906 579.0399780273438 149.6699981689453 C 621.2100219726562 108.5 583.7100219726562 241.5 583.7100219726562 241.5 L 492.7099914550781 252.3000030517578 L 505.2099914550781 150.5 Z">
			</path>
		</svg>
		<svg class="Path_492" viewBox="492.71 143.763 106.365 110.537">
			<path id="Path_492" d="M 505.2099914550781 152.5 C 505.2099914550781 152.5 536.8699951171875 192.8399963378906 579.0399780273438 151.6699981689453 C 621.2100219726562 110.5 583.7100219726562 243.5 583.7100219726562 243.5 L 492.7099914550781 254.3000030517578 L 505.2099914550781 152.5 Z">
			</path>
		</svg>
		<svg class="Path_493" viewBox="462.958 157.93 145.333 215.366">
			<path id="Path_493" d="M 592.0700073242188 159.5800018310547 L 595.4199829101562 210.6699981689453 L 599.010009765625 227.6699981689453 L 601.75 240.6699981689453 C 601.75 240.6699981689453 608.75 340.6700134277344 606.75 345.6700134277344 C 604.75 350.6700134277344 607.75 354.6700134277344 608.1699829101562 357.3299865722656 C 608.5900268554688 359.989990234375 607.75 366.6700134277344 608.0800170898438 369.6700134277344 C 608.4099731445312 372.6700134277344 608.0800170898438 374 600.4199829101562 372.9299926757812 C 592.760009765625 371.8599853515625 582.0800170898438 370 582.0800170898438 370 C 582.0800170898438 370 555.0800170898438 372 545.75 368.6700134277344 C 536.4199829101562 365.3399963378906 518.75 365.3299865722656 518.75 365.3299865722656 C 518.75 365.3299865722656 492.0799865722656 366 483.4200134277344 365 C 474.760009765625 364 470.0799865722656 375.6700134277344 464.4200134277344 372.3299865722656 C 458.760009765625 368.989990234375 471.0799865722656 336.6700134277344 475.0799865722656 327.3299865722656 C 479.0799865722656 317.989990234375 469.75 294.3299865722656 469.75 294.3299865722656 L 481.75 227.7599945068359 L 484.4200134277344 212.6699981689453 L 484.4200134277344 165.2299957275391 L 485.0799865722656 165 C 487.5140075683594 164.0509948730469 489.68701171875 162.5359954833984 491.4200134277344 160.5800018310547 L 494.4200134277344 208.3200073242188 L 588.4199829101562 211.6600036621094 L 588.4199829101562 157.9299926757812">
			</path>
		</svg>
		<svg class="Path_494" viewBox="462.958 155.93 145.333 215.366">
			<path id="Path_494" d="M 592.0700073242188 157.5800018310547 L 595.4199829101562 208.6699981689453 L 599.010009765625 225.6699981689453 L 601.75 238.6699981689453 C 601.75 238.6699981689453 608.75 338.6700134277344 606.75 343.6700134277344 C 604.75 348.6700134277344 607.75 352.6700134277344 608.1699829101562 355.3299865722656 C 608.5900268554688 357.989990234375 607.75 364.6700134277344 608.0800170898438 367.6700134277344 C 608.4099731445312 370.6700134277344 608.0800170898438 372 600.4199829101562 370.9299926757812 C 592.760009765625 369.8599853515625 582.0800170898438 368 582.0800170898438 368 C 582.0800170898438 368 555.0800170898438 370 545.75 366.6700134277344 C 536.4199829101562 363.3399963378906 518.75 363.3299865722656 518.75 363.3299865722656 C 518.75 363.3299865722656 492.0799865722656 364 483.4200134277344 363 C 474.760009765625 362 470.0799865722656 373.6700134277344 464.4200134277344 370.3299865722656 C 458.760009765625 366.989990234375 471.0799865722656 334.6700134277344 475.0799865722656 325.3299865722656 C 479.0799865722656 315.989990234375 469.75 292.3299865722656 469.75 292.3299865722656 L 481.75 225.7599945068359 L 484.4200134277344 210.6699981689453 L 484.4200134277344 163.2299957275391 L 485.0799865722656 163 C 487.5140075683594 162.0509948730469 489.68701171875 160.5359954833984 491.4200134277344 158.5800018310547 L 494.4200134277344 206.3200073242188 L 588.4199829101562 209.6600036621094 L 588.4199829101562 155.9299926757812">
			</path>
		</svg>
		<svg class="Path_495" viewBox="448.97 3.839 155.829 228.822">
			<path id="Path_495" d="M 602.8800048828125 50.95999908447266 C 602.3099975585938 48.86999893188477 601.52001953125 46.70000076293945 599.8800048828125 45.29999923706055 C 598.3140258789062 44.17599868774414 596.5050048828125 43.43600082397461 594.5999755859375 43.13999938964844 C 590.0390014648438 41.94100189208984 585.4010009765625 41.05199813842773 580.719970703125 40.47999954223633 C 580.051025390625 38.2599983215332 579.0390014648438 36.15700149536133 577.719970703125 34.25 C 567.9199829101562 20.40999984741211 553.4199829101562 7.360000133514404 536.3599853515625 4.409999847412109 C 527.4299926757812 2.859999895095825 517.0800170898438 4.25 511.3599853515625 11.28999996185303 C 508.2200012207031 15.15999984741211 506.8699951171875 20.29000091552734 503.7000122070312 24.09000015258789 C 497.5899963378906 31.46999931335449 486.5599975585938 32.38000106811523 478.8599853515625 38.09000015258789 C 474.75 41.09000015258789 471.7699890136719 45.43999862670898 468.8599853515625 49.65999984741211 C 465.7099914550781 54.22999954223633 462.4700012207031 58.9900016784668 461.4700012207031 64.44999694824219 C 459.4700012207031 75.36000061035156 466.6799926757812 85.76000213623047 468.010009765625 96.76999664306641 C 471.010009765625 121.4000015258789 444.6099853515625 143.25 449.6000061035156 167.5500030517578 C 452.510009765625 181.7200012207031 465.6000061035156 191.6999969482422 479.1400146484375 196.7599945068359 C 483.9100036621094 198.5500030517578 489.3599853515625 200.3300018310547 491.5899963378906 204.9100036621094 C 492.5899963378906 206.9100036621094 492.760009765625 209.2200012207031 493.7000122070312 211.2400054931641 C 496.8599853515625 217.9799957275391 507.25 218.2400054931641 512.8300170898438 213.3300018310547 C 518.4099731445312 208.4199981689453 520.1699829101562 200.4799957275391 520.8300170898438 193.0700073242188 C 523.510009765625 160.7100067138672 510.5499877929688 128.7400054931641 512.0599975585938 96.30000305175781 C 512.510009765625 86.48999786376953 515.27001953125 75.36000061035156 524.0599975585938 70.91999816894531 C 535.8900146484375 64.91999816894531 550.1199951171875 74.91999816894531 563.1400146484375 73.01000213623047 C 569.301025390625 88.00099945068359 570.6090087890625 104.5469970703125 566.8800048828125 120.3199996948242 C 564.8099975585938 128.9499969482422 561.22998046875 137.3200073242188 560.969970703125 146.2200012207031 C 560.5800170898438 159.7700042724609 567.8900146484375 172.1499938964844 574.2100219726562 184.1300048828125 C 575.5659790039062 186.3699951171875 576.4730224609375 188.8529968261719 576.8800048828125 191.4400024414062 C 576.97900390625 194.0650024414062 576.4910278320312 196.6779937744141 575.4500122070312 199.0899963378906 C 571.8800048828125 208.6999969482422 565.719970703125 217.6199951171875 565.02001953125 227.8500061035156 C 564.8150024414062 229.0440063476562 565.083984375 230.27099609375 565.77001953125 231.2700042724609 C 566.4749755859375 231.9369964599609 567.3839721679688 232.3450012207031 568.3499755859375 232.4299926757812 C 579.1500244140625 234.2799987792969 588.489990234375 224.7100067138672 593.760009765625 215.1000061035156 C 599.635986328125 204.4859924316406 603.0590209960938 192.6909942626953 603.780029296875 180.5800018310547 C 604.8699951171875 160.2200012207031 597.5700073242188 140.1900024414062 598.02001953125 119.8099975585938 C 598.5399780273438 96.63999938964844 609.010009765625 73.30999755859375 602.8800048828125 50.95999908447266 Z">
			</path>
		</svg>
		<svg class="Path_496" viewBox="449.97 2.839 155.829 228.822">
			<path id="Path_496" d="M 603.8800048828125 49.95999908447266 C 603.3099975585938 47.86999893188477 602.52001953125 45.70000076293945 600.8800048828125 44.29999923706055 C 599.3140258789062 43.17599868774414 597.5050048828125 42.43600082397461 595.5999755859375 42.13999938964844 C 591.0390014648438 40.94100189208984 586.4010009765625 40.05199813842773 581.719970703125 39.47999954223633 C 581.051025390625 37.2599983215332 580.0390014648438 35.15700149536133 578.719970703125 33.25 C 568.9199829101562 19.40999984741211 554.4199829101562 6.360000133514404 537.3599853515625 3.410000085830688 C 528.4299926757812 1.860000014305115 518.0800170898438 3.25 512.3599853515625 10.28999996185303 C 509.2200012207031 14.15999984741211 507.8699951171875 19.29000091552734 504.7000122070312 23.09000015258789 C 498.5899963378906 30.46999931335449 487.5599975585938 31.3799991607666 479.8599853515625 37.09000015258789 C 475.75 40.09000015258789 472.7699890136719 44.43999862670898 469.8599853515625 48.65999984741211 C 466.7099914550781 53.22999954223633 463.4700012207031 57.9900016784668 462.4700012207031 63.45000076293945 C 460.4700012207031 74.36000061035156 467.6799926757812 84.76000213623047 469.010009765625 95.76999664306641 C 472.010009765625 120.4000015258789 445.6099853515625 142.25 450.6000061035156 166.5500030517578 C 453.510009765625 180.7200012207031 466.6000061035156 190.6999969482422 480.1400146484375 195.7599945068359 C 484.9100036621094 197.5500030517578 490.3599853515625 199.3300018310547 492.5899963378906 203.9100036621094 C 493.5899963378906 205.9100036621094 493.760009765625 208.2200012207031 494.7000122070312 210.2400054931641 C 497.8599853515625 216.9799957275391 508.25 217.2400054931641 513.8300170898438 212.3300018310547 C 519.4099731445312 207.4199981689453 521.1699829101562 199.4799957275391 521.8300170898438 192.0700073242188 C 524.510009765625 159.7100067138672 511.5499877929688 127.7399978637695 513.0599975585938 95.30000305175781 C 513.510009765625 85.48999786376953 516.27001953125 74.36000061035156 525.0599975585938 69.91999816894531 C 536.8900146484375 63.91999816894531 551.1199951171875 73.91999816894531 564.1400146484375 72.01000213623047 C 570.301025390625 87.00099945068359 571.6090087890625 103.5469970703125 567.8800048828125 119.3199996948242 C 565.8099975585938 127.9499969482422 562.22998046875 136.3200073242188 561.969970703125 145.2200012207031 C 561.5800170898438 158.7700042724609 568.8900146484375 171.1499938964844 575.2100219726562 183.1300048828125 C 576.5659790039062 185.3699951171875 577.4730224609375 187.8529968261719 577.8800048828125 190.4400024414062 C 577.97900390625 193.0650024414062 577.4910278320312 195.6779937744141 576.4500122070312 198.0899963378906 C 572.8800048828125 207.6999969482422 566.719970703125 216.6199951171875 566.02001953125 226.8500061035156 C 565.8150024414062 228.0440063476562 566.083984375 229.27099609375 566.77001953125 230.2700042724609 C 567.4749755859375 230.9369964599609 568.3839721679688 231.3450012207031 569.3499755859375 231.4299926757812 C 580.1500244140625 233.2799987792969 589.489990234375 223.7100067138672 594.760009765625 214.1000061035156 C 600.635986328125 203.4859924316406 604.0590209960938 191.6909942626953 604.780029296875 179.5800018310547 C 605.8699951171875 159.2200012207031 598.5700073242188 139.1900024414062 599.02001953125 118.8099975585938 C 599.5399780273438 95.63999938964844 610.010009765625 72.30999755859375 603.8800048828125 49.95999908447266 Z">
			</path>
		</svg>
		<svg class="Path_497" viewBox="581.79 464.58 39.67 29.42">
			<path id="Path_497" d="M 581.7899780273438 492.7300109863281 L 621.4600219726562 494 L 615.77001953125 464.5799865722656 L 585.3800048828125 467.4700012207031 L 581.7899780273438 492.7300109863281 Z">
			</path>
		</svg>
		<svg class="Path_498" viewBox="520.38 361.014 190.78 101.989">
			<path id="Path_498" d="M 704.7100219726562 423 C 702.0399780273438 426.3299865722656 691.7100219726562 432.3299865722656 690.7100219726562 434.3299865722656 C 689.7100219726562 436.3299865722656 677.3800048828125 442.3299865722656 671.0399780273438 443.3299865722656 C 664.7000122070312 444.3299865722656 644.7100219726562 448.6700134277344 641.0399780273438 451 C 638.4099731445312 452.6799926757812 617.2999877929688 458 603.4299926757812 460.9500122070312 C 599.6729736328125 461.8389892578125 595.8709716796875 462.5230102539062 592.0399780273438 463 C 586.0399780273438 463.3299865722656 520.3800048828125 441 520.3800048828125 441 L 533.0399780273438 428 L 533.739990234375 427.760009765625 C 537.3200073242188 426.5499877929688 553.8599853515625 420.9599914550781 563.0399780273438 418.2999877929688 C 573.3800048828125 415.2999877929688 585.3800048828125 402.9700012207031 585.3800048828125 402.9700012207031 C 585.3800048828125 402.9700012207031 603.0399780273438 396.9700012207031 605.3800048828125 396.2999877929688 C 607.719970703125 395.6300048828125 599.3800048828125 372.9700012207031 599.3800048828125 372.9700012207031 C 599.3800048828125 372.9700012207031 637.7100219726562 367.6499938964844 652.7100219726562 363.1400146484375 C 667.7100219726562 358.6300048828125 702.3800048828125 360.2999877929688 708.7100219726562 377.9700012207031 C 715.0399780273438 395.6400146484375 707.4199829101562 419.6700134277344 704.7100219726562 423 Z">
			</path>
		</svg>
		<svg class="Path_499" viewBox="445.38 444 84.66 57.921">
			<path id="Path_499" d="M 530.0399780273438 479.3299865722656 C 530.0399780273438 479.3299865722656 522.3800048828125 487.3299865722656 514.7100219726562 486.6700134277344 C 507.0400085449219 486.010009765625 480.2200012207031 488.6700134277344 480.2200012207031 488.6700134277344 C 475.3599853515625 490.6090087890625 470.8080139160156 493.2470092773438 466.7099914550781 496.5 C 460.4400024414062 501.4400024414062 457.1099853515625 497.5 456.489990234375 496.6600036621094 L 456.3800048828125 496.5 C 453.0400085449219 507.010009765625 445.3800048828125 499 445.3800048828125 499 C 445.3800048828125 499 448.7099914550781 467 447.6900024414062 463 C 446.6700134277344 459 454.2799987792969 452.1300048828125 454.2799987792969 452.1300048828125 L 463.2799987792969 449.8399963378906 L 486.0799865722656 444 L 518.75 455.3299865722656 L 530.0399780273438 479.3299865722656 Z">
			</path>
		</svg>
		<svg class="Path_500" viewBox="445.38 449.84 17.86 52.081">
			<path id="Path_500" d="M 463.239990234375 449.8399963378906 L 456.489990234375 496.6600036621094 L 456.3800048828125 496.5 C 453.0400085449219 507.010009765625 445.3800048828125 499 445.3800048828125 499 C 445.3800048828125 499 448.7099914550781 467 447.6900024414062 463 C 446.6700134277344 459 454.2799987792969 452.1300048828125 454.2799987792969 452.1300048828125 L 463.239990234375 449.8399963378906 Z">
			</path>
		</svg>
		<svg class="Path_501" viewBox="510.42 316.66 33 2.667">
			<path id="Path_501" d="M 510.4200134277344 316.6600036621094 C 510.4200134277344 316.6600036621094 528.0800170898438 322.6600036621094 543.4199829101562 316.6600036621094">
			</path>
		</svg>
		<svg class="Path_502" viewBox="570.71 328 13 1.627">
			<path id="Path_502" d="M 570.7100219726562 328 C 570.7100219726562 328 578.0399780273438 331.6600036621094 583.7100219726562 328">
			</path>
		</svg>
		<svg class="Path_503" viewBox="570.71 335 14.67 2.089">
			<path id="Path_503" d="M 570.7100219726562 336.6799926757812 C 570.7100219726562 336.6799926757812 583.0399780273438 338.3299865722656 585.3800048828125 335">
			</path>
		</svg>
		<svg class="Path_504" viewBox="566.71 348.33 28.91 7">
			<path id="Path_504" d="M 566.7100219726562 355.3299865722656 C 566.7100219726562 355.3299865722656 589.8699951171875 352.3299865722656 595.6199951171875 348.3299865722656">
			</path>
		</svg>
		<svg class="Path_505" viewBox="496.04 348.33 22.67 7.011">
			<path id="Path_505" d="M 496.0400085449219 348.3299865722656 C 496.0400085449219 348.3299865722656 509.0400085449219 355.6600036621094 518.7100219726562 355.3299865722656">
			</path>
		</svg>
		<svg class="Path_506" viewBox="520.37 427.76 83.136 35.244">
			<path id="Path_506" d="M 603.4199829101562 460.9500122070312 C 599.6630249023438 461.8389892578125 595.8610229492188 462.5230102539062 592.030029296875 463 C 586.030029296875 463.3299865722656 520.3699951171875 441 520.3699951171875 441 L 533.030029296875 428 L 533.72998046875 427.760009765625 C 535.72998046875 429.1700134277344 537.3699951171875 430.3800048828125 538.5399780273438 431.2999877929688 C 544.0499877929688 435.6400146484375 549.3699951171875 429.9700012207031 551.3699951171875 429.9700012207031 C 553.3699951171875 429.9700012207031 570.7000122070312 444.2999877929688 570.7000122070312 444.2999877929688 C 570.7000122070312 444.2999877929688 586.7000122070312 447.9700012207031 589.3699951171875 451.2999877929688 C 592.0399780273438 454.6300048828125 601.3699951171875 453.9700012207031 603.030029296875 456.2999877929688 C 603.530029296875 457.0199890136719 603.5900268554688 458.7900085449219 603.4199829101562 460.9500122070312 Z">
			</path>
		</svg>
		<svg class="Path_507" viewBox="382.13 362.496 221.379 134.017">
			<path id="Path_507" d="M 480.2200012207031 374.3299865722656 C 480.2200012207031 374.3299865722656 464.0400085449219 375.260009765625 454.7099914550781 371.3299865722656 C 445.3800048828125 367.3999938964844 414.3800048828125 358.3299865722656 405.3800048828125 364.7000122070312 C 396.3800048828125 371.0700073242188 374.7099914550781 376.7000122070312 384.7099914550781 402.0400085449219 C 394.7099914550781 427.3800048828125 399.3800048828125 428.0400085449219 399.3800048828125 428.0400085449219 C 402.4739990234375 430.3599853515625 405.1749877929688 433.1629943847656 407.3800048828125 436.3399963378906 C 410.3800048828125 441.010009765625 438.3800048828125 451.6700134277344 445.3800048828125 451.6700134277344 C 452.3800048828125 451.6700134277344 464.7099914550781 451.6700134277344 482.0400085449219 463.6700134277344 C 499.3699951171875 475.6700134277344 515.0399780273438 477.010009765625 515.0399780273438 477.010009765625 C 515.0399780273438 477.010009765625 537.0399780273438 486.010009765625 543.8900146484375 488.010009765625 C 550.739990234375 490.010009765625 582.0399780273438 498.6700134277344 589.3800048828125 496.010009765625 C 596.719970703125 493.3500061035156 601.3800048828125 476.6700134277344 601.3800048828125 476.6700134277344 C 601.3800048828125 476.6700134277344 604.7100219726562 461.6700134277344 603.0399780273438 459.3399963378906 C 601.3699951171875 457.010009765625 592.0399780273438 457.6700134277344 589.3800048828125 454.3399963378906 C 586.719970703125 451.010009765625 570.7100219726562 447.3399963378906 570.7100219726562 447.3399963378906 C 570.7100219726562 447.3399963378906 553.4199829101562 433 551.4199829101562 433 C 549.4199829101562 433 544.0999755859375 438.6600036621094 538.5900268554688 434.3299865722656 C 527.614013671875 426.2000122070312 516.0830078125 418.8489990234375 504.0799865722656 412.3299865722656 C 491.4200134277344 405.6600036621094 480.2200012207031 374.3299865722656 480.2200012207031 374.3299865722656 Z">
			</path>
		</svg>
		<svg class="Path_508" viewBox="447.69 383.613 51.31 24.777">
			<path id="Path_508" d="M 447.6900024414062 384 C 453.5299987792969 382.8070068359375 459.5920104980469 384.4079895019531 464.0799865722656 388.3299865722656 C 472.0799865722656 395 499 408.3900146484375 499 408.3900146484375">
			</path>
		</svg>
		<svg class="Path_509" viewBox="605.38 383.58 42.33 12.73">
			<path id="Path_509" d="M 647.7100219726562 383.5799865722656 C 647.7100219726562 383.5799865722656 612.0399780273438 388.9800109863281 605.3800048828125 396.3099975585938">
			</path>
		</svg>
		<svg class="Path_510" viewBox="597.04 444 106.095 50.444">
			<path id="Path_510" d="M 688.7100219726562 494 L 687.1400146484375 494 C 681.5 493.7999877929688 662.3900146484375 493.2000122070312 658.7100219726562 494 C 654.3800048828125 495 597.0399780273438 494 597.0399780273438 494 L 608.25 491.6700134277344 C 608.25 491.6700134277344 604.0900268554688 477.0899963378906 606.72998046875 475.8800048828125 C 606.72998046875 475.8800048828125 591.72998046875 466 603.0399780273438 459.3299865722656 C 614.3499755859375 452.6600036621094 626.5399780273438 455.4700012207031 626.5399780273438 455.4700012207031 L 654.9299926757812 445.8500061035156 L 660.3800048828125 444 C 660.3800048828125 444 692.3800048828125 445.6700134277344 701.0399780273438 467.6700134277344 C 709.7000122070312 489.6700134277344 688.7100219726562 494 688.7100219726562 494 Z">
			</path>
		</svg>
		<svg class="Path_511" viewBox="654.93 444.05 48.205 49.95">
			<path id="Path_511" d="M 688.7100219726562 494 L 687.1400146484375 494 C 696.4500122070312 486.3200073242188 717.510009765625 462.9400024414062 654.9299926757812 445.8999938964844 L 660.3800048828125 444.0499877929688 C 660.3800048828125 444.0499877929688 692.3800048828125 445.7200012207031 701.0399780273438 467.7200012207031 C 709.7000122070312 489.7200012207031 688.7100219726562 494 688.7100219726562 494 Z">
			</path>
		</svg>
		<svg class="Ellipse_52">
			<ellipse id="Ellipse_52" rx="1.75" ry="1.75" cx="1.75" cy="1.75">
			</ellipse>
		</svg>
		<svg class="Ellipse_53">
			<ellipse id="Ellipse_53" rx="1.75" ry="1.75" cx="1.75" cy="1.75">
			</ellipse>
		</svg>
		<div id="Group_310">
			<svg class="Path_512" viewBox="513.224 63.242 56.984 36.168">
				<path id="Path_512" d="M 570.1599731445312 99.41000366210938 C 570.5479736328125 88.41100311279297 568.5910034179688 77.45500183105469 564.4199829101562 67.26999664306641 C 551.4199829101562 69.20999908447266 537.1799926757812 59.18000030517578 525.3400268554688 65.18000030517578 C 516.5800170898438 69.62000274658203 513.8300170898438 80.75 513.3400268554688 90.55999755859375 C 513.219970703125 93.15000152587891 513.2000122070312 95.73999786376953 513.25 98.33000183105469 C 513.25 97.41000366210938 513.25 96.48000335693359 513.3400268554688 95.55999755859375 C 513.7999877929688 85.75 516.5499877929688 74.62000274658203 525.3400268554688 70.18000030517578 C 537.1799926757812 64.18000030517578 551.4000244140625 74.18000030517578 564.4199829101562 72.26999664306641 C 567.9530029296875 80.89700317382812 569.89697265625 90.09100341796875 570.1599731445312 99.41000366210938 Z">
				</path>
			</svg>
			<svg class="Path_513" viewBox="462.422 65.25 7.1 32.33">
				<path id="Path_513" d="M 469.4200134277344 97.58000183105469 C 469.5910034179688 95.4010009765625 469.5480041503906 93.20999908447266 469.2900085449219 91.04000091552734 C 468.2300109863281 82.23999786376953 463.4200134277344 73.83000183105469 462.5499877929688 65.25 C 461.4299926757812 75.59999847412109 468.0199890136719 85.54000091552734 469.2900085449219 96.04000091552734 C 469.4200134277344 96.58000183105469 469.4200134277344 97.05999755859375 469.4200134277344 97.58000183105469 Z">
				</path>
			</svg>
			<svg class="Path_514" viewBox="450.243 157.91 72.213 58.048">
				<path id="Path_514" d="M 522.1099853515625 187.3200073242188 C 521.489990234375 194.7400054931641 519.739990234375 202.6699981689453 514.1099853515625 207.5899963378906 C 508.4800109863281 212.5099945068359 498.1099853515625 212.2400054931641 494.9800109863281 205.5 C 493.9800109863281 203.5 493.8299865722656 201.1699981689453 492.8599853515625 199.1699981689453 C 490.6400146484375 194.5899963378906 485.1799926757812 192.8099975585938 480.4100036621094 191.0200042724609 C 466.8599853515625 185.9499969482422 453.7900085449219 176.0200042724609 450.8800048828125 161.8099975585938 C 450.6199951171875 160.5229949951172 450.4429931640625 159.2200012207031 450.3500061035156 157.9100036621094 C 450.10400390625 160.8869934082031 450.2820129394531 163.8829956054688 450.8800048828125 166.8099975585938 C 453.7900085449219 180.9799957275391 466.8800048828125 190.9499969482422 480.4100036621094 196.0200042724609 C 485.1799926757812 197.8099975585938 490.6400146484375 199.5899963378906 492.8599853515625 204.1699981689453 C 493.8599853515625 206.1699981689453 494.0299987792969 208.4799957275391 494.9800109863281 210.5 C 498.1300048828125 217.2400054931641 508.5199890136719 217.5 514.1099853515625 212.5899963378906 C 519.7000122070312 207.6799926757812 521.4400024414062 199.7400054931641 522.1099853515625 192.3200073242188 C 522.4140014648438 188.4149932861328 522.5180053710938 184.4960021972656 522.4199829101562 180.5800018310547 C 522.4199829101562 182.8500061035156 522.2899780273438 185.0899963378906 522.1099853515625 187.3200073242188 Z">
				</path>
			</svg>
			<svg class="Path_515" viewBox="599.35 62.89 6.756 55.51">
				<path id="Path_515" d="M 599.3499755859375 114.0699996948242 L 599.3499755859375 118.4000015258789 C 599.9099731445312 99.80000305175781 606.72998046875 81.09999847412109 606.0599975585938 62.88999938964844 C 605.5399780273438 79.73000335693359 599.72998046875 96.94999694824219 599.3499755859375 114.0699996948242 Z">
				</path>
			</svg>
			<svg class="Path_516" viewBox="562.204 143.92 15.954 45.39">
				<path id="Path_516" d="M 577.8900146484375 189.3099975585938 C 578.135986328125 188.1230010986328 578.2130126953125 186.9080047607422 578.1199951171875 185.6999969482422 C 577.7169799804688 183.1119995117188 576.8099975585938 180.6280059814453 575.4500122070312 178.3899993896484 C 569.6699829101562 167.3899993896484 563.0800170898438 156.1300048828125 562.2999877929688 143.9199981689453 C 562.2999877929688 144.4400024414062 562.22998046875 144.9199981689453 562.219970703125 145.4799957275391 C 561.8200073242188 159.0200042724609 569.1300048828125 171.4100036621094 575.4500122070312 183.3899993896484 C 576.5239868164062 185.2449951171875 577.344970703125 187.2369995117188 577.8900146484375 189.3099975585938 Z">
				</path>
			</svg>
			<svg class="Path_517" viewBox="566.192 172.84 39.012 59.081">
				<path id="Path_517" d="M 605.0999755859375 174.8399963378906 C 604.35302734375 186.9550018310547 600.906005859375 198.75 595.010009765625 209.3600006103516 C 589.72998046875 218.9700012207031 580.4000244140625 228.5399932861328 569.5900268554688 226.6900024414062 C 568.6209716796875 226.6069946289062 567.7109985351562 226.1940002441406 567.010009765625 225.5200042724609 C 566.8070068359375 225.2910003662109 566.6480102539062 225.0269927978516 566.5399780273438 224.7400054931641 C 566.4199829101562 225.5200042724609 566.3200073242188 226.3099975585938 566.260009765625 227.1100006103516 C 566.052978515625 228.3009948730469 566.322998046875 229.5260009765625 567.010009765625 230.5200042724609 C 567.7109985351562 231.1940002441406 568.6209716796875 231.6069946289062 569.5900268554688 231.6900024414062 C 580.4000244140625 233.5399932861328 589.72998046875 223.9700012207031 595.010009765625 214.3600006103516 C 600.906005859375 203.75 604.35302734375 191.9550018310547 605.0999755859375 179.8399963378906 C 605.219970703125 177.5 605.22998046875 175.1699981689453 605.1599731445312 172.8399963378906 C 605.1400146484375 173.5099945068359 605.1400146484375 174.1699981689453 605.0999755859375 174.8399963378906 Z">
				</path>
			</svg>
		</div>
		<svg class="Path_518" viewBox="606.73 463 42 15.274">
			<path id="Path_518" d="M 606.72998046875 475.8800048828125 C 606.72998046875 475.8800048828125 632.0399780273438 486.5 648.72998046875 463">
			</path>
		</svg>
		<svg class="Path_519" viewBox="611.71 488.334 47 6.106">
			<path id="Path_519" d="M 611.7100219726562 494.4400024414062 C 611.7100219726562 494.4400024414062 632.3800048828125 481 658.7100219726562 494">
			</path>
		</svg>
		<svg class="Path_520" viewBox="473.35 481.127 31.86 10.263">
			<path id="Path_520" d="M 473.3500061035156 491.3900146484375 C 473.3500061035156 491.3900146484375 482.0299987792969 471.8099975585938 505.2099914550781 486.739990234375">
			</path>
		</svg>
		<svg class="Path_521" viewBox="445.21 182.265 186.32 64.565">
			<path id="Path_521" d="M 445.2099914550781 201.8300018310547 L 462.9100036621094 185.8300018310547 C 462.9100036621094 185.8300018310547 531.5399780273438 181.3300018310547 534.3800048828125 204.6600036621094 C 534.3800048828125 204.6600036621094 558.7100219726562 177 609.8800048828125 183.1600036621094 L 631.530029296875 200.3999938964844 L 571.6900024414062 226.6600036621094 L 513.5399780273438 246.8300018310547 L 470.7099914550781 227.6600036621094 L 445.2099914550781 201.8300018310547 Z">
			</path>
		</svg>
		<svg class="Path_522" viewBox="445.21 183.265 186.32 64.565">
			<path id="Path_522" d="M 445.2099914550781 202.8300018310547 L 462.9100036621094 186.8300018310547 C 462.9100036621094 186.8300018310547 531.5399780273438 182.3300018310547 534.3800048828125 205.6600036621094 C 534.3800048828125 205.6600036621094 558.7100219726562 178 609.8800048828125 184.1600036621094 L 631.530029296875 201.3999938964844 L 571.6900024414062 227.6600036621094 L 513.5399780273438 247.8300018310547 L 470.7099914550781 228.6600036621094 L 445.2099914550781 202.8300018310547 Z">
			</path>
		</svg>
		<svg class="Path_523" viewBox="437.38 204.83 90.83 97.84">
			<path id="Path_523" d="M 437.3800048828125 204.8300018310547 L 445.2099914550781 298.5 L 528.2100219726562 302.6700134277344 L 524.6099853515625 209.3999938964844 L 524.5399780273438 207.8300018310547 L 437.3800048828125 204.8300018310547 Z">
			</path>
		</svg>
		<svg class="Path_524" viewBox="437.38 202.83 90.83 97.84">
			<path id="Path_524" d="M 437.3800048828125 202.8300018310547 L 445.2099914550781 296.5 L 528.2100219726562 300.6700134277344 L 524.6099853515625 207.3999938964844 L 524.5399780273438 205.8300018310547 L 437.3800048828125 202.8300018310547 Z">
			</path>
		</svg>
		<svg class="Path_525" viewBox="549.71 202.83 85.62 106.93">
			<path id="Path_525" d="M 635.3300170898438 202.8300018310547 L 549.7100219726562 215.6699981689453 L 549.7100219726562 309.760009765625 L 633.3800048828125 297.6700134277344 L 635.3300170898438 202.8300018310547 Z">
			</path>
		</svg>
		<svg class="Path_526" viewBox="549.71 200.83 85.62 106.93">
			<path id="Path_526" d="M 635.3300170898438 200.8300018310547 L 549.7100219726562 213.6699981689453 L 549.7100219726562 307.760009765625 L 633.3800048828125 295.6700134277344 L 635.3300170898438 200.8300018310547 Z">
			</path>
		</svg>
		<svg class="Path_527" viewBox="568.89 223.79 46.25 20.9">
			<path id="Path_527" d="M 615.1400146484375 223.7899932861328 L 568.8900146484375 228.9299926757812 L 569.9000244140625 244.6900024414062 L 615.1099853515625 239.75 L 615.1400146484375 223.7899932861328 Z">
			</path>
		</svg>
		<svg class="Path_528" viewBox="447.7 263.239 65.081 99.931">
			<path id="Path_528" d="M 449.7099914550781 346.6600036621094 L 454.4200134277344 359.3299865722656 C 454.4200134277344 359.3299865722656 461.4200134277344 365.3299865722656 469.0799865722656 362.3299865722656 C 476.739990234375 359.3299865722656 483.4200134277344 357.8399963378906 486.75 354.9200134277344 C 490.0799865722656 352 494.75 337.3299865722656 494.75 337.3299865722656 C 494.75 337.3299865722656 499.4200134277344 321.3299865722656 504.0799865722656 317.3299865722656 C 508.739990234375 313.3299865722656 521.0800170898438 258.2200012207031 504.0799865722656 263.6099853515625 C 487.0799865722656 269 474.0799865722656 319 474.0799865722656 319 C 474.0799865722656 319 471.0799865722656 322.6600036621094 466.75 323 C 462.4200134277344 323.3399963378906 453.75 322.3299865722656 452.0799865722656 326 C 450.4100036621094 329.6700134277344 444.7099914550781 339.3299865722656 449.7099914550781 346.6600036621094 Z">
			</path>
		</svg>
		<svg class="Path_529" viewBox="524.6 209.4 25.11 100.672">
			<path id="Path_529" d="M 549.7100219726562 215.6600036621094 C 540.8209838867188 217.6629943847656 531.5079956054688 215.3410034179688 524.5999755859375 209.3999938964844 L 528.2100219726562 302.6600036621094 C 528.2100219726562 302.6600036621094 536.7100219726562 311.8599853515625 549.7100219726562 309.760009765625 L 549.7100219726562 215.6600036621094 Z">
			</path>
		</svg>
		<svg class="Path_530" viewBox="524.6 207.4 25.11 100.672">
			<path id="Path_530" d="M 549.7100219726562 213.6600036621094 C 540.8209838867188 215.6629943847656 531.5079956054688 213.3410034179688 524.5999755859375 207.3999938964844 L 528.2100219726562 300.6600036621094 C 528.2100219726562 300.6600036621094 536.7100219726562 309.8599853515625 549.7100219726562 307.760009765625 L 549.7100219726562 213.6600036621094 Z">
			</path>
		</svg>
		<svg class="Path_531" viewBox="524.6 207.4 25.11 100.672">
			<path id="Path_531" d="M 549.7100219726562 213.6600036621094 C 540.8209838867188 215.6629943847656 531.5079956054688 213.3410034179688 524.5999755859375 207.3999938964844 L 528.2100219726562 300.6600036621094 C 528.2100219726562 300.6600036621094 536.7100219726562 309.8599853515625 549.7100219726562 307.760009765625 L 549.7100219726562 213.6600036621094 Z">
			</path>
		</svg>
		<svg class="Path_532" viewBox="551.71 193.855 43.91 9.295">
			<path id="Path_532" d="M 551.7100219726562 203.1499938964844 C 551.7100219726562 203.1499938964844 586.5399780273438 192.5 595.6199951171875 194">
			</path>
		</svg>
		<svg class="Path_533" viewBox="473.35 192.364 39.4 6.136">
			<path id="Path_533" d="M 512.75 198.5 C 512.75 198.5 478.989990234375 190.5 473.3500061035156 192.7700042724609">
			</path>
		</svg>
		<svg class="Path_534" viewBox="573.67 198.905 31.71 5.575">
			<path id="Path_534" d="M 573.6699829101562 204.4799957275391 C 573.6699829101562 204.4799957275391 596.9600219726562 195.9400024414062 605.3800048828125 200">
			</path>
		</svg>
		<svg class="Path_535" viewBox="561.94 401.19 28.48 17.52">
			<path id="Path_535" d="M 561.9400024414062 418.7099914550781 C 565.5490112304688 416 569.3909912109375 413.614013671875 573.4199829101562 411.5799865722656 C 579.4199829101562 408.6900024414062 590.4199829101562 401.1900024414062 590.4199829101562 401.1900024414062">
			</path>
		</svg>
		<svg class="Path_536" viewBox="447.25 316.66 26.1 23.37">
			<path id="Path_536" d="M 473.3500061035156 316.6600036621094 C 473.3500061035156 316.6600036621094 458.739990234375 328.6099853515625 454.3500061035156 329.6600036621094 C 449.9599914550781 330.7099914550781 447.25 340.0299987792969 447.25 340.0299987792969">
			</path>
		</svg>
		<svg class="Path_537" viewBox="563.706 261.489 65.052 99.931">
			<path id="Path_537" d="M 626.739990234375 344.8800048828125 L 622.0800170898438 357.5799865722656 C 622.0800170898438 357.5799865722656 615.0800170898438 363.5799865722656 607.4099731445312 360.5799865722656 C 599.739990234375 357.5799865722656 593.0800170898438 356.0899963378906 589.739990234375 353.1700134277344 C 586.4000244140625 350.25 581.739990234375 335.5799865722656 581.739990234375 335.5799865722656 C 581.739990234375 335.5799865722656 577.0800170898438 319.5799865722656 572.4099731445312 315.5799865722656 C 567.739990234375 311.5799865722656 555.4099731445312 256.4700012207031 572.4099731445312 261.8599853515625 C 589.4099731445312 267.25 602.4099731445312 317.25 602.4099731445312 317.25 C 602.4099731445312 317.25 605.4099731445312 320.9100036621094 609.739990234375 321.25 C 614.0700073242188 321.5899963378906 622.739990234375 320.5799865722656 624.4099731445312 324.25 C 626.0800170898438 327.9200134277344 631.739990234375 337.5799865722656 626.739990234375 344.8800048828125 Z">
			</path>
		</svg>
		<svg class="Path_538" viewBox="618.57 321.52 9.51 13.48">
			<path id="Path_538" d="M 618.5700073242188 321.5199890136719 C 618.5700073242188 321.5199890136719 628.1199951171875 327.6600036621094 628.0800170898438 335">
			</path>
		</svg>
		<svg class="Ellipse_54">
			<ellipse id="Ellipse_54" rx="44.66999435424805" ry="44.66999435424805" cx="44.66999435424805" cy="44.66999435424805">
			</ellipse>
		</svg>
		<svg class="Path_539" viewBox="487.371 39.785 101.039 47.24">
			<path id="Path_539" d="M 509.489990234375 86.87999725341797 C 514.9099731445312 86.02999877929688 519.6599731445312 82.87999725341797 524.8400268554688 81.06999969482422 C 536.4299926757812 77 549.25 79.79000091552734 560.97998046875 83.45999908447266 C 565.47998046875 84.87000274658203 570.0499877929688 86.45999908447266 574.77001953125 86.45999908447266 C 579.489990234375 86.45999908447266 584.5 84.52999877929688 586.9099731445312 80.45999908447266 C 589.1300048828125 76.72000122070312 588.7000122070312 71.86000061035156 586.8300170898438 67.93000030517578 C 584.9600219726562 64 581.8300170898438 60.84000015258789 578.6699829101562 57.86000061035156 C 568.27001953125 48.04000091552734 555.3699951171875 38.86000061035156 541.0999755859375 39.86000061035156 C 535.3599853515625 40.27000045776367 529.8699951171875 42.31999969482422 524.5900268554688 44.59000015258789 C 517.9420166015625 47.45500183105469 511.4700012207031 50.7140007019043 505.2099914550781 54.34999847412109 C 500.3999938964844 57.13999938964844 491.489990234375 60.86999893188477 488.7200012207031 65.97000122070312 C 482.4200134277344 77.45999908447266 499.6900024414062 88.41999816894531 509.489990234375 86.87999725341797 Z">
			</path>
		</svg>
		<svg class="Path_540" viewBox="487.367 68.34 101.048 17.535">
			<path id="Path_540" d="M 586.9099731445312 76.26000213623047 C 584.5 80.33000183105469 579.489990234375 82.26000213623047 574.77001953125 82.26000213623047 C 570.0499877929688 82.26000213623047 565.47998046875 80.73000335693359 560.969970703125 79.31999969482422 C 549.239990234375 75.65000152587891 536.4299926757812 72.84999847412109 524.8300170898438 76.93000030517578 C 519.6599731445312 78.73999786376953 514.9000244140625 81.93000030517578 509.4800109863281 82.73000335693359 C 501.5799865722656 83.97000122070312 488.8599853515625 77.08999633789062 487.4800109863281 68.33999633789062 C 485.9299926757812 78.44999694824219 500.6799926757812 87.11000061035156 509.4800109863281 85.73000335693359 C 514.9000244140625 84.87999725341797 519.6599731445312 81.73000335693359 524.8300170898438 79.93000030517578 C 536.4299926757812 75.84999847412109 549.239990234375 78.65000152587891 560.969970703125 82.31999969482422 C 565.47998046875 83.73000335693359 570.0399780273438 85.31999969482422 574.77001953125 85.26000213623047 C 579.5 85.19999694824219 584.5 83.33999633789062 586.9099731445312 79.26000213623047 C 588.1589965820312 77.04000091552734 588.6510009765625 74.4739990234375 588.3099975585938 71.94999694824219 C 588.1539916992188 73.47000122070312 587.677001953125 74.93900299072266 586.9099731445312 76.26000213623047 Z">
			</path>
		</svg>
		<svg class="Path_541" viewBox="933.101 618.21 29.614 48.35">
			<path id="Path_541" d="M 949.4199829101562 618.2100219726562 C 949.4199829101562 618.2100219726562 955.3499755859375 625.9600219726562 946.6799926757812 637.6699829101562 C 938.010009765625 649.3800048828125 930.8699951171875 659.260009765625 933.75 666.5599975585938 C 933.75 666.5599975585938 946.8300170898438 644.8200073242188 957.469970703125 644.510009765625 C 968.1099853515625 644.2000122070312 961.1099853515625 631.280029296875 949.4199829101562 618.2100219726562 Z">
			</path>
		</svg>
		<svg class="Path_542" viewBox="933.44 618.21 29.275 48.39">
			<path id="Path_542" d="M 949.4199829101562 618.2100219726562 C 949.9359741210938 618.958984375 950.343994140625 619.7769775390625 950.6300048828125 620.6400146484375 C 961.010009765625 632.8400268554688 966.5499877929688 644.22998046875 956.5599975585938 644.510009765625 C 947.260009765625 644.780029296875 936.1099853515625 661.4099731445312 933.4400024414062 665.5999755859375 C 933.5250244140625 665.9390258789062 933.6290283203125 666.27197265625 933.75 666.5999755859375 C 933.75 666.5999755859375 946.8300170898438 644.8599853515625 957.469970703125 644.5499877929688 C 968.1099853515625 644.239990234375 961.1099853515625 631.280029296875 949.4199829101562 618.2100219726562 Z">
			</path>
		</svg>
		<svg class="Path_543" viewBox="959.05 626.345 1.37 6.685">
			<path id="Path_543" d="M 960.4199829101562 628.0900268554688 C 960.4199829101562 630.8200073242188 960.1099853515625 633.030029296875 959.739990234375 633.030029296875 C 959.3699951171875 633.030029296875 959.0499877929688 630.8200073242188 959.0499877929688 628.0900268554688 C 959.0499877929688 625.3599853515625 959.4299926757812 626.6500244140625 959.8099975585938 626.6500244140625 C 960.1900024414062 626.6500244140625 960.4199829101562 625.3599853515625 960.4199829101562 628.0900268554688 Z">
			</path>
		</svg>
		<svg class="Path_544" viewBox="959.538 629.426 6.128 3.759">
			<path id="Path_544" d="M 964.2100219726562 631.3499755859375 C 961.8200073242188 632.6500244140625 959.72998046875 633.4400024414062 959.5499877929688 633.1099853515625 C 959.3699951171875 632.780029296875 961.1599731445312 631.4500122070312 963.5499877929688 630.1099853515625 C 965.9400024414062 628.77001953125 965 629.75 965.1799926757812 630.1099853515625 C 965.3599853515625 630.469970703125 966.6099853515625 630.0399780273438 964.2100219726562 631.3499755859375 Z">
			</path>
		</svg>
		<svg class="Path_545" viewBox="904.78 618.21 29.613 48.35">
			<path id="Path_545" d="M 918.0800170898438 618.2100219726562 C 918.0800170898438 618.2100219726562 912.1500244140625 625.9600219726562 920.8200073242188 637.6699829101562 C 929.489990234375 649.3800048828125 936.6300048828125 659.260009765625 933.739990234375 666.5599975585938 C 933.739990234375 666.5599975585938 920.6699829101562 644.8200073242188 910.02001953125 644.510009765625 C 899.3699951171875 644.2000122070312 906.4199829101562 631.280029296875 918.0800170898438 618.2100219726562 Z">
			</path>
		</svg>
		<svg class="Path_546" viewBox="904.78 618.21 29.28 48.39">
			<path id="Path_546" d="M 918.0800170898438 618.2100219726562 C 917.5640258789062 618.958984375 917.156005859375 619.7769775390625 916.8699951171875 620.6400146484375 C 906.489990234375 632.8400268554688 900.9500122070312 644.22998046875 910.9400024414062 644.510009765625 C 920.22998046875 644.780029296875 931.3900146484375 661.4099731445312 934.0599975585938 665.5999755859375 C 933.9760131835938 665.9400024414062 933.8690185546875 666.2739868164062 933.739990234375 666.5999755859375 C 933.739990234375 666.5999755859375 920.6699829101562 644.8599853515625 910.02001953125 644.5499877929688 C 899.3699951171875 644.239990234375 906.4199829101562 631.280029296875 918.0800170898438 618.2100219726562 Z">
			</path>
		</svg>
		<svg class="Path_547" viewBox="907.06 626.345 1.37 6.685">
			<path id="Path_547" d="M 907.0599975585938 628.0900268554688 C 907.0599975585938 630.8200073242188 907.3599853515625 633.030029296875 907.739990234375 633.030029296875 C 908.1199951171875 633.030029296875 908.4299926757812 630.8200073242188 908.4299926757812 628.0900268554688 C 908.4299926757812 625.3599853515625 908.0399780273438 626.6500244140625 907.6699829101562 626.6500244140625 C 907.2999877929688 626.6500244140625 907.0599975585938 625.3599853515625 907.0599975585938 628.0900268554688 Z">
			</path>
		</svg>
		<svg class="Path_548" viewBox="901.825 629.426 6.128 3.759">
			<path id="Path_548" d="M 903.280029296875 631.3499755859375 C 905.6699829101562 632.6500244140625 907.760009765625 633.4400024414062 907.9400024414062 633.1099853515625 C 908.1199951171875 632.780029296875 906.3300170898438 631.4500122070312 903.9400024414062 630.1099853515625 C 901.5499877929688 628.77001953125 902.489990234375 629.75 902.3099975585938 630.1099853515625 C 902.1300048828125 630.469970703125 900.8800048828125 630.0399780273438 903.280029296875 631.3499755859375 Z">
			</path>
		</svg>
		<svg class="Ellipse_55">
			<ellipse id="Ellipse_55" rx="62" ry="9.510009765625" cx="62" cy="9.510009765625">
			</ellipse>
		</svg>
		<svg class="Path_549" viewBox="901.818 652.49 63.855 64.23">
			<path id="Path_549" d="M 965.6599731445312 656.1099853515625 L 965.3599853515625 658.530029296875 L 964.9400024414062 661.9500122070312 L 964.77001953125 663.3800048828125 L 964.3499755859375 666.7999877929688 L 964.1699829101562 668.22998046875 L 963.760009765625 671.6400146484375 L 959.010009765625 710.5399780273438 C 958.5900268554688 714.010009765625 952.9199829101562 716.719970703125 946.0700073242188 716.719970703125 L 921.4199829101562 716.719970703125 C 914.5700073242188 716.719970703125 908.9099731445312 714.010009765625 908.47998046875 710.5399780273438 L 903.72998046875 671.6400146484375 L 903.3099975585938 668.22998046875 L 903.1400146484375 666.7999877929688 L 902.719970703125 663.3800048828125 L 902.5399780273438 661.9500122070312 L 902.1300048828125 658.530029296875 L 901.8300170898438 656.1099853515625 C 901.5999755859375 654.1099853515625 904.6599731445312 652.489990234375 908.5399780273438 652.489990234375 L 958.9600219726562 652.489990234375 C 962.8300170898438 652.489990234375 965.9000244140625 654.1400146484375 965.6599731445312 656.1099853515625 Z">
			</path>
		</svg>
		<svg class="Path_550" viewBox="902.13 658.53 63.23 3.42">
			<path id="Path_550" d="M 965.3599853515625 658.530029296875 L 964.9500122070312 661.9500122070312 L 902.5499877929688 661.9500122070312 L 902.1300048828125 658.530029296875 L 965.3599853515625 658.530029296875 Z">
			</path>
		</svg>
		<svg class="Path_551" viewBox="902.72 663.38 62.05 3.42">
			<path id="Path_551" d="M 964.77001953125 663.3800048828125 L 964.3599853515625 666.7999877929688 L 903.1400146484375 666.7999877929688 L 902.719970703125 663.3800048828125 L 964.77001953125 663.3800048828125 Z">
			</path>
		</svg>
		<svg class="Path_552" viewBox="903.32 668.23 60.86 3.42">
			<path id="Path_552" d="M 964.1799926757812 668.22998046875 L 963.760009765625 671.6500244140625 L 903.72998046875 671.6500244140625 L 903.3200073242188 668.22998046875 L 964.1799926757812 668.22998046875 Z">
			</path>
		</svg>
	</div>
</div>
</body>
</html>