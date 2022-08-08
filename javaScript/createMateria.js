function getAllParams() {
  let parameters = new URLSearchParams(window.location.search);

  var image = parameters.get("image");
  var title = parameters.get("title");
  var descr = parameters.get("descr");
  var postDate = parameters.get("postDate");
  var postTime = parameters.get("postTime");

  console.log(image);

  image = image.replace(/'/g, '');
  title = title.replace(/'/g, '');
  descr = descr.replace(/'/g, '');
  postDate = postDate.replace(/'/g, '');
  postTime = postTime.replace(/'/g, '');

  var postFull = document.getElementById("post_area_full");
  var pageTitle = document.getElementById("pageTitle");

  pageTitle.innerText = "Matéria - " + title;

  var htmlString = `
  <div class="desktop_flex" style="justify-content: center;">
    <div class="img_holder_post left_float">
      <img src="../BlogContent/imagensDoBlog/${image}.png" alt="">
      <p>Publicado ${postDate} às ${postTime}.</p>
    </div>

    <div class="left_float post_infos" style="margin-left: 15px;">
      <ul>
        <li class="post_title title_size">${title}</li>
        <li class="post_content_full" style="margin-top: 10px; margin-bottom: 50px;">${descr}</li>
      </ul>
    </div>
  </div>


  <div class="mobile_footer">
    <div class="img_mob_post">
      <img src="../BlogContent/imagensDoBlog/${image}.png" alt="">
    </div>
    <p class="full_width" style="text-align: center;">Publicado ${postDate} às ${postTime}.</p>

    <ul>
      <li class="post_title" style="margin-top: 20px;">${title}</li>
      <li class="post_content_full">${descr}</li>
    </ul>
  </div>
  `

  postFull.innerHTML = htmlString;
}

jQuery(document).ready(function ($) {
  getAllParams()
});
