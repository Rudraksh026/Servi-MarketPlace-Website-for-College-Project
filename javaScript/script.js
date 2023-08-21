function show(name,gender,service,number,email,location,amount,image) {
  change = "block";
  document.getElementById("popup").style.display = ("block");
  var data = [name,gender,service,number,email,location,amount];
  var i=0;
  
  while(i<data.length){
      document.getElementsByClassName("output")[i].innerHTML = (data[i]);
      i++;
  }
  console.log(image);
  var i = "uploads/"+image;
  document.getElementById("profile").src = (i);
  //   popup.style.display ='block';
    
}
function hide() {
  change = "none";
  document.getElementById("popup").style.display = ("none");
  //   popup.style.display ='none';
}

function sort(search){
  document.getElementById('search').value = (search);
}