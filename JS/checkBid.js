// const { type } = require("jquery");

const form = document.querySelector('.mybids');

const feedback = document.querySelector('.feedback');

document.getElementById("Submit").addEventListener("click", function(event){

    event.preventDefault(); 

    const bid = form.curBid.value;
    const newBid = form.bid.value;
    let numBid = parseInt(bid);
    let newNumBid = parseInt(newBid);
    

    console.log(newNumBid + " " + typeof(newNumBid));
    console.log(numBid + " " + typeof(numBid));
    if (newNumBid > numBid) {
        form.submit();
    }
    else {
        feedback.innerHTML = '** Please Enter a Valid Bid';
        form.bid.style.border = '1px solid red';
        form.bid.focus();
    }

});