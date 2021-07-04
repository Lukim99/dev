window.onload = function() {
  if (window.document.referrer != "https://login.ykm-dev.site/") {
    alert("로그인이 필요합니다.");
    location.href = "https://login.ykm-dev.site/";
  }
}
