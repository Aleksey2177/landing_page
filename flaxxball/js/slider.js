var slider_index=1;

function f_sliderclickleft(){

    if (slider_index > 1)
    {
      element = document.getElementById("slider" + slider_index);
      element.classList.remove("slick-active");
      slider_index = slider_index - 1;
      element = document.getElementById("slider"  + slider_index);
      element.classList.add("slick-active");
      
    }
}

function f_sliderclickright(){
    var element;

    if (slider_index < 5)
    {
      element = document.getElementById("slider" + slider_index);
      element.classList.remove("slick-active");
      slider_index = slider_index + 1;
      element = document.getElementById("slider"  + slider_index);
      element.classList.add("slick-active");
      
    }
}


