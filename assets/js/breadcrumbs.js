function updateBreadcrumbs() {
  var breadcrumbsContainer = document.getElementById("dynamicBreadcrumbs");
  breadcrumbsContainer.innerHTML = "";

  var urlParams = new URLSearchParams(window.location.search);
  var pageValue = urlParams.get("page");

  if (pageValue) {
    pageValue = pageValue.replace(/[^a-zA-Z0-9]/g, " ");
  }

  var homeBreadcrumb = document.createElement("li");
  homeBreadcrumb.classList.add("breadcrumb-item");
  homeBreadcrumb.innerHTML = '<a href="/">Home</a>';
  breadcrumbsContainer.appendChild(homeBreadcrumb);

  if (pageValue) {
    var pageBreadcrumb = document.createElement("li");
    pageBreadcrumb.classList.add("breadcrumb-item", "active");
    pageBreadcrumb.textContent = capitalizeFirstLetter(pageValue);
    breadcrumbsContainer.appendChild(pageBreadcrumb);
  }
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}
updateBreadcrumbs();
