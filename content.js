function login(){
    location.href = "./login.php"
}

function book(){
    alert("We simply charge 10 rupees for the platform; the rest amount is paid by you to the business owner based on the services you have used.")
    const mobile = document.querySelector("#mobile").value;
    const serial_no = document.querySelector("#serial_no").value;
    const Queue = document.querySelector("#queue").value;
    const Shop_Name = document.querySelector("#vname").value;
    const Name = document.querySelector("#customer").value;

    location.href = "./payment.php?mob="+mobile+"&vid="+serial_no+"&queue="+Queue+"&vname="+Shop_Name+"&cname="+Name


}
function payment(){
    location.href="./paymentloading.html"
}

//onclick="book()"
//  <a href="payment.php?mob=<?php echo $mobile?>&vid=<?php echo $res['serial_no']?>&queue=<?php echo $res['Queue'];?>&vname=<?php echo $res['Shop_Name'];?>&cname=<?php echo $res1['Name'];?> ">Book</a>
