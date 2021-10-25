<?php include "header.php"; ?>

<style>

.administartion{
    margin-top:0%;
    background:linear-gradient( rgba(0, 0, 0, 0.5) , rgba(100, 0, 0, 0.5));
    background-size:cover;
    
    
}
.tetimonial_container::-webkit-scrollbar {
  width: 1px;
  height:4px;
}
 
.tetimonial_container::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
 
.tetimonial_container::-webkit-scrollbar-thumb {
  background-color:lightgray;
  outline: 1px solid slategrey;
  
}
.administartion>h1{

    text-align:center;
    padding-top:5%;
    color:white;
    padding-bottom:5%;
}
.tetimonial_container{

display: flex;
align-items: start;
justify-content:start;
overflow-x:scroll;

padding:0 2%;
padding-right:5%;
margin-right:5%;
}
.card{

    margin:3% 2%;
    display:flex;
    align-items:center;
    flex-direction:column;
    background-color:transparent;
    box-shadow:2px 2px 2px gray;
    margin-bottom:10%;
    padding:7%;
    width:400px;
    border:1px solid rgb(238, 238, 238);
    
    
   
   
}

.card>img{

    width:100px;
    height:100px;
    border-radius:1000px;
    margin-bottom:20px;
    border:5px solid white;

}
.card>h5{

    color:white;
    text-align:center;
    width:150%;
  

}
.card>p{
    color:white;
}
</style>

<div class='first-div'>
    <img src='images/admin.jpg'/>
    <div class='second-div'>
   
        <h2 style='position:absolute; top:20%; left:12%; color:white'>Adminstration</h2>
        <p style='position:absolute; top:40%; left:12%; color:white'>Contributors who Contibute to make a healthy nation.</p>
   
      
       </div>

    </div>
</div>

    
    
   <section class='administartion'>

   <h1>Our Adminstration</h1>
   
   <div class='tetimonial_container'>
   
   <div class='card'>
 
     <img src="director.jpeg" alt="pic1"/>
     <h5>M.K Dixit</h5>
     <p>~Director</p>
     

   </div>

   <div class='card'>
 
   <img src="user.svg" alt="pic1"/>
    <h5>Mahesh Kumar</h5>

   </div>
   <div class='card'>
 
   <img src="user.svg" alt="pic1"/>
     <h5>R.K Pal</h5>

   </div>
   <div class='card'>
 
 <img src="user.svg" alt="pic1"/>
   <h5>Rajnish Yadav</h5>

 </div>

 <div class='card'>
 
 <img src="user.svg" alt="pic1"/>
   <h5>Om Prakash</h5>

 </div>


   </div>
   
   
   </section> 
   

<?php include "footer.php"; ?>
