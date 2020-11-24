function DoSubmit(){
  document.ratingForm.ratingStars.value = document.getElementById("stars").getElementsByClassName("star selected").length;
  document.getElementById("ratingForm").submit();
}