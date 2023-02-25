const navHeight = document.getElementsByTagName("nav")[0].clientHeight;
const footerHeight = document.getElementsByTagName("footer")[0].clientHeight;
document.getElementsByTagName("main")[0].setAttribute("style", `min-height: calc(100vh - ${navHeight}px - ${footerHeight}px);`);