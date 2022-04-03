function MyFunction(){
  var age = document.getElementById("age").value;
  var weight = document.getElementById("weight").value;
  var height = document.getElementById("height").value;
  var gender=document.getElementById("gender").value;
  var exercisepreference=document.getElementById("exercisepreference").value;
  var equipment=document.getElementById("equipment").value;
  var intensity1=document.getElementById("intensity1").value;
  if(age<10&&age>7){
    if(age==8){
    alert("Click this link: https://live-healthy-2.siddharthatall1.repl.co/page1.html");
    window.open('page1.html');
  }
  }
  else if (age>11){
    window.open('page1.html');
  }
}
