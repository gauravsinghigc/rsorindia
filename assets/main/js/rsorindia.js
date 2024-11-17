window.onload = () => {
  document.getElementById("RsorWebLoader").style.display = "none";
};
function typeText(element, text, speed) {
  let i = 0;
  function type() {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(type, speed);
    } else {
      setTimeout(() => {
        element.innerHTML = "";
        setTimeout(() => typeText(element, text, speed), 100);
      }, 1300);
    }
  }
  type();
}

function applyTypingAnimation(className, speed) {
  const elements = document.getElementsByClassName(className);
  for (let element of elements) {
    const text = element.innerHTML;
    element.innerHTML = "";
    typeText(element, text, speed);
  }
}

// Usage
applyTypingAnimation("typing", 100);

function RsorSpecialSection(divID) {
  var GetDivProperties = document.getElementById(divID);

  if (GetDivProperties.style.display == "none") {
    GetDivProperties.style.display = "block";
  } else {
    GetDivProperties.style.display = "none";
  }
}
