@import url("https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");
* {
margin: 0;
padding: 0;
font-family: "Ubuntu", sans-serif;
box-sizing: border-box;
}

:root {
--blue: #287bff;
--white: #fff;
--grey: #f5f5f5;
--black1: #222;
--black2: #999;
--dark: #0a1825;
--dark2: #111217;
--oren: #fe6500;
--grape: #3232ac;
}
body {
min-height: 100vh;
overflow-x: hidden;
}
.bg-header {
background: var(--grape);
header {
background: var(--white);
position: fixed;
top: 0;
left: 0;
display: flex;
justify-content: space-between;
align-items: center;
padding: 20px 200px;
width: 100%;
z-index: 1000;
a {
text-decoration: none;
.logo {
max-width: 80px;
}
}
.navigation {
position: relative;
ul {
display: block;
margin-bottom: 0px;
li {
list-style: none;
a {
display: inline-block;
text-decoration: none;
padding: 6px 18px;
color: var(--white);
background: var(--blue);
border-radius: 40px;
box-shadow: none;
transition: 0.3s;
margin-left: 20px;
}
.login {
display: inline-block;
text-decoration: none;
padding: 6px 18px;
color: var(--white);
background: var(--grape);
border-radius: 40px;
box-shadow: none;
transition: 0.3s;
margin-left: 20px;
}
a:hover {
background: var(--white);
color: var(--blue);
}
.login:hover {
background: var(--black2);
color: var(--white);
}
}
}
}
}
.content-header {
position: relative;
display: flex;
justify-content: space-between;
align-items: center;
width: 100%;
min-height: 100vh;
.text-box {
position: relative;
h2 {
font-size: 2.9em;
line-height: 1.4em;
font-weight: 800;
color: var(--white);
text-decoration: none;
span {
font-size: 1.5em;
}
}
P {
font-size: 1.1em;
color: var(--white);
font-weight: 300;
text-align: justify;
}
}
.img-box {
position: relative;
img {
width: 100%;
max-width: 600px;
}
}
}
}
.screen-sm {
display: none;
}
//responsive
@media (max-width: 991px) {
.screen-sm {
display: block;
}
// section {
// padding: 20px;
// }
.bg-header {
header {
padding: 20px;
a {
.logo {
max-width: 40px;
}
}
.navigation {
position: fixed;
bottom: -100%;
left: 0;
width: 100%;
height: 100%;
background: var(--white);
padding: 20px 25px;
overflow: auto;
transition: 0.5s;
ul {
display: block;
height: 100%;
}
}
.navigation.active {
bottom: 0;
}
.toggle {
position: fixed;
top: 20px;
right: 20px;
width: 40px;
height: 40px;
background: var(--blue) url("../images/menu.png");
background-repeat: no-repeat;
background-position: center;
background-size: 30px;
border-radius: 2px;
cursor: pointer;
}
.toggle.active {
position: fixed;
top: 20px;
right: 20px;
width: 40px;
height: 40px;
background: var(--blue) url("../images/close.png");
background-repeat: no-repeat;
background-position: center;
background-size: 30px;
z-index: 1001;
}
}
.content-header {
margin-top: 50px;
}
}
}