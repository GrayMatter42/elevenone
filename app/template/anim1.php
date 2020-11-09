<style>
.circle {
  left: 0;
  border-radius: 50%;
  overflow: hidden;
  position: absolute;
  z-index: 0;
  animation-direction: alternate;
}
.circle:after {
  content: '';
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&0+0,0.2+100 */
  background: -moz-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.2) 100%);
  /* FF3.6-15 */
  background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.2) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.2) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#33ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
.circle.sunset {
  width: 13.98112427vh;
  height: 13.98112427vh;
  top: -13.98112427vh;
  background: #00d2ff;
  background: #FF5F6D;
  background: -webkit-linear-gradient(-45deg, #FFC371, #FF5F6D);
  background: linear-gradient(-45deg, #FFC371, #FF5F6D);
  animation: orb1 30s cubic-bezier(0.27, 0.96, 0.58, 1) alternate infinite;
  opacity: 0.55375406;
}
.circle.coolice {
  background: #4CA1AF;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(-45deg, #C4E0E5, #4CA1AF);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(-45deg, #C4E0E5, #4CA1AF);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  width: 16.32155291vh;
  height: 16.32155291vh;
  top: -16.32155291vh;
  animation: orb2 26s cubic-bezier(0.27, 0.96, 0.58, 1) alternate infinite;
  opacity: 0.7429849;
}
.circle.timber {
  background: #fc00ff;
  background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
  background: linear-gradient(45deg, #00dbde, #fc00ff);
  width: 20.27217866vh;
  height: 20.27217866vh;
  top: -20.27217866vh;
  animation: orb3 43s cubic-bezier(0.27, 0.96, 0.58, 1) alternate infinite;
  opacity: 0.53439838;
}
.circle.pig {
  background: #ee9ca7;
  background: -webkit-linear-gradient(to right, #ffdde1, #ee9ca7);
  background: linear-gradient(to right, #ffdde1, #ee9ca7);
  width: 22.49410273vh;
  height: 22.49410273vh;
  top: -22.49410273vh;
  animation: orb4 32s cubic-bezier(0.27, 0.96, 0.58, 1) alternate infinite;
  opacity: 0.61731043;
}
.circle.friday {
  background: #83a4d4;
  background: -webkit-linear-gradient(84deg, #b6fbff, #83a4d4);
  background: linear-gradient(84deg, #b6fbff, #83a4d4);
  width: 6.86775075vh;
  height: 6.86775075vh;
  top: -6.86775075vh;
  animation: orb5 40s cubic-bezier(0.27, 0.96, 0.58, 1) alternate infinite;
  opacity: 0.79234775;
}

h1 {
  line-height: 100vh;
  text-align: center;
  font-size: 40vh;
  margin: 0;
  font-family: arial;
  z-index: 10;
  position: relative;
  /* color: #7a5598; */
  color: #3B2F63;
  
}
@keyframes orb1 {
  0% {
    transform: translatey(150vh) translatex(0vw);
  }
  100% {
    transform: translatey(-128.53526875vh) translatex(111.75639711vw);
  }
}
@keyframes orb2 {
  0% {
    transform: translatey(0vh) translatex(60vw);
  }
  100% {
    transform: translatey(133.17083162vh) translatex(40.27155328vw);
  }
}
@keyframes orb3 {
  0% {
    transform: translatey(70vh) translatex(70vw);
  }
  100% {
    transform: translatey(68.29616937vh) translatex(50vw);
  }
}
@keyframes orb4 {
  0% {
    transform: translatey(50vh) translatex(10vw);
  }
  100% {
    transform: translatey(33.4616137vh) translatex(34.35436547vw);
  }
}
@keyframes orb5 {
  0% {
    transform: translatey(80vh) translatex(80vw);
  }
  100% {
    transform: translatey(76.22426501vh) translatex(46.40465597vw);
  }
}
.headercontent {
  height: 100vh;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100vw;
  z-index: 1;
}


</style>


<div class="headercontent">
    <div class="circle sunset"></div>
    <div class="circle coolice"></div>
    <div class="circle timber"></div>
    <div class="circle pig"></div>
    <div class="circle friday"></div>
    <h1>42</h1>
</div>




