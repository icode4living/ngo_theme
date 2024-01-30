import {PUB_KEY,}  from "./config.js";
// form

let form = document.getElementById('paymentForm');
var CURRENCY = "";
var TXN_REF="";
var CONSUMER_MAC ="";
var AMOUNT = 0.00;
var DESCRIPTION = "";
var EMAIL = "";
var NAME= "";
var MOBILE_NUM= "";
//let data = new FormData(form);
let txn_ref = document.querySelector("#txn_ref"); 
let _email = document.querySelector("#email");//data.get("email");
let _name = document.querySelector("#name");//data.get("fullname");
let _amount = document.querySelector("#amount");//data.get("amount");
let mobile_num = document.querySelector("#phone");//data.get("phone");
let currency= document.querySelector("#currency");
//consumer_mac
let consumer_mac = document.querySelector("#currency");
var CURRENCY = "";
var DESCRIPTION = "";
let desc = document.querySelector("#description");
form?.addEventListener('submit',(e)=>{
    e.preventDefault();

  CURRENCY = currency.value;
  DESCRIPTION = desc.value;
  EMAIL = _email.value;
  NAME = _name.value;
  AMOUNT = _amount.value;
  MOBILE_NUM = mobile_num.value;
  TXN_REF = txn_ref.value;
  CONSUMER_MAC = consumer_mac.value;
   console.log(TXN_REF);
   makePayment();

})
function makePayment() {
    FlutterwaveCheckout({
      public_key: PUB_KEY,
      tx_ref: "txref-DI0NzMx12",
      amount: AMOUNT,
      currency: CURRENCY,
      payment_options: "card, banktransfer, ussd",
      meta: {
        source: "docs-inline-test",
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email:EMAIL,// _email,
        phone_number: MOBILE_NUM,
        name: NAME,
      },
      customizations: {
        title: "JPOF Donations",
        description: DESCRIPTION,
        logo: "http://johnpaulokonmafdn.org/wp-content/themes/ngo_theme_v1.4/assets/img/logo.svg",
      },
    });
  }
