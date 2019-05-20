var API_URL = 'http://localhost/Backend_project';
var UI_URL = 'http://localhost/Frontend_project';

$(document).ready(function() {
    //Select Box
    $("select").formSelect();

    //Popup
    $("#regst").modal();
});

function OnLogin(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    if(username === "" || !username){
        alert("Please enter username.");
        return;
    }
    if(password === "" || !password){
        alert("Please enter password.");
        return;
    }
    var reqBody = {
        user:{
            username,
            password
        }
    }
    fetch(`${API_URL}/user/login`,{
        method: 'POST',
        headers: {
			Accept: "application/json",
			"Content-Type": "application/json"
		},
		body: JSON.stringify(reqBody)
    }).then(function(response){
        return response.json()
    }).then(function(json){
        if(json.success){
            localStorage.setItem('auth',true);
            window.location.href = `${UI_URL}/dashboard.php`;
        }else{
            alert(json.error);
        }
    })
}

function OnSaveCustomer(){
    var cAccount = document.getElementById('c_account').value;
    if(cAccount === "" || !cAccount){
        alert('Please enter customer account number');
        return;
    }
    var cName = document.getElementById('c_name').value;
    if(cName === "" || !cName){
        alert('Please enter customer name');
        return;
    }
    var cFatherName = document.getElementById('c_father_name').value;
    if(cFatherName === "" || !cFatherName){
        alert("Please enter customer father's name");
        return;
    }
    var cAddress = document.getElementById('c_address').value;
    if(cAddress === "" || !cAddress){
        alert('Please enter customer address.');
        return;
    }
    var cMobile = document.getElementById('c_mobile').value;
    if(cMobile === "" || !cMobile){
        alert('Please enter customer mobile number.');
        return;
    }
    var cNationalId = document.getElementById('c_national_id').value;
    if(cNationalId === "" || !cNationalId){
        alert('Please enter customer national id');
        return;
    }
    var eSelect = document.getElementById('c_type');
    var cType = eSelect.options[eSelect.selectedIndex].value;
    if(cType === "" || !cType){
        alert('Please select type');
        return;
    }
    var cAmount = document.getElementById('c_amount').value;
    if(cAmount === "" || !cAmount){
        alert('Please enter amount.');
        return;
    }
    var auth = localStorage.getItem('auth');
    if(!auth || auth === ""){
        alert('Please login');
    }
    var reqBody = {
        auth: auth,
        customer: {
            account_number: cAccount,
            name: cName,
            father_name: cFatherName,
            address: cAddress,
            mobile: cMobile,
            national_id: cNationalId,
            type: cType,
            amount: cAmount
        }
    };
    fetch(`${API_URL}/customer/register-customer`,{
        method: 'POST',
        headers: {
			Accept: "application/json",
			"Content-Type": "application/json"
		},
		body: JSON.stringify(reqBody)
    }).then(function(response){
        return response.json();
    }).then(function(json){
        if(json.success){
            $("#regst").modal('close');
        }else{
            alert(json.error);
            $("#regst").modal('close');
        }
    })
}
function OnUpdateCustmer(){
    var cAccount = document.getElementById('c_account').value;
    if(cAccount === "" || !cAccount){
        alert('Please enter customer account number');
        return;
    }
    var cName = document.getElementById('c_name').value;
    if(cName === "" || !cName){
        alert('Please enter customer name');
        return;
    }
    var cFatherName = document.getElementById('c_father_name').value;
    if(cFatherName === "" || !cFatherName){
        alert("Please enter customer father's name");
        return;
    }
    var cAddress = document.getElementById('c_address').value;
    if(cAddress === "" || !cAddress){
        alert('Please enter customer address.');
        return;
    }
    var cMobile = document.getElementById('c_mobile').value;
    if(cMobile === "" || !cMobile){
        alert('Please enter customer mobile number.');
        return;
    }
    var cNationalId = document.getElementById('c_national_id').value;
    if(cNationalId === "" || !cNationalId){
        alert('Please enter customer national id');
        return;
    }
    var eSelect = document.getElementById('c_type');
    var cType = eSelect.options[eSelect.selectedIndex].value;
    if(cType === "" || !cType){
        alert('Please select type');
        return;
    }
    var cAmount = document.getElementById('c_amount').value;
    if(cAmount === "" || !cAmount){
        alert('Please enter amount.');
        return;
    }
    var auth = localStorage.getItem('auth');
    if(!auth || auth === ""){
        alert('Please login');
    }
    var reqBody = {
        auth: auth,
        customer: {
            id: customerId,
            account_number: cAccount,
            name: cName,
            father_name: cFatherName,
            address: cAddress,
            mobile: cMobile,
            national_id: cNationalId,
            type: cType,
            amount: cAmount
        }
    };
    fetch(`${API_URL}/customer/update-customer`,{
        method: 'POST',
        headers: {
			Accept: "application/json",
			"Content-Type": "application/json"
		},
		body: JSON.stringify(reqBody)
    }).then(function(response){
        return response.json();
    }).then(function(json){
        if(json.success){
            $("#regst").modal('close');
            window.location.reload();
        }else{
            alert(json.error);
            $("#regst").modal('close');
        }
    })
}