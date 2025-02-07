function login(){
    location.href = "./login.html"
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
