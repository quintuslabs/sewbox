function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}


function validateMasterBranch() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var branch_name = document.getElementById('branch_name').value;
    var branch_phone = document.getElementById('branch_phone').value;
    var branch_email = document.getElementById('branch_email').value;
    var branch_address = document.getElementById('branch_address').value;
    if (!branch_name) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Branch Name</div>';
        return false;
    } else if (!branch_phone) {
        // alert("Please Enter Mobile Number");
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Mobile Number</div>';

        return false;
    } else if (branch_phone.length != 10) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter 10 digit Mobile Number</div>';
        return false;
    } else if (!branch_email) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Email</div>';
        return false;
    } else if (!branch_email.match(mailformat)) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Valid Email</div>';
        return false;
    } else if (!branch_address) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Branch Address</div>';
        return false;
    } else {
        document.masterbranch.submit();
    }


}

function validateCustomer() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var re = /^\d{4}-\d{1,2}-\d{1,2}$/;
    var today = new Date();
    var inputDate = new Date(document.getElementById('customer_dob').value);

    var customer_name = document.getElementById('customer_name').value;
    var customer_phone = document.getElementById('customer_phone').value;
    var customer_email = document.getElementById('customer_email').value;
    var customer_address = document.getElementById('customer_address').value;
    var customer_dob = document.getElementById('customer_dob').value;
    var customer_ad = document.getElementById('anniversary_date').value;
    var today = new Date();

    if (!customer_name) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Customer Name</div>';
        return false;
    } else if (!customer_email) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Email</div>';
        return false;
    } else if (!customer_email.match(mailformat)) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Valid Email</div>';
        return false;
    } else if (!customer_dob) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Date of Birth</div>';
        return false;
    } else if (!customer_dob.match(re)) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter valid Date of Birth</div>';
        return false;
    } else if (inputDate > today) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter a valid BirthDate</div>';
        return false;
    }
    else if (customer_ad > today) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter a valid Anniversery Date</div>';
        return false;
    } else if (!customer_phone) {
        // alert("Please Enter Mobile Number");
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Mobile Number</div>';

        return false;
    } else if (customer_phone.length != 10) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter 10 digit Mobile Number</div>';
        return false;
    } else if (!customer_address) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Customer Address</div>';
        return false;
    } else {
        document.customer.submit();
    }
}
function validateOrder() {

    var re = /^\d{4}-\d{1,2}-\d{1,2}$/;
    var today = new Date();
    var inputDate = new Date(document.getElementById('delivery_date').value);
    var delivery_date = document.getElementById('delivery_date').value;
    var order_amount = Number(document.getElementById('order_amount').value);
    var order_paid = Number(document.getElementById('order_paid').value);
    var order_details = document.getElementById('order_details').value;
    var order_status = document.getElementsByName("order_status");


    if (!delivery_date) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Delivery Date</div>';
        return false;
    } else if (!delivery_date.match(re)) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Valid Delivery Date</div>';
        return false;
    } else if (inputDate < today) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter a Valid Delivery Date</div>';
        return false;
    } else if (!order_amount) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Order Amount</div>';
        return false;
    } else if (!order_paid) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Order Paid</div>';
        return false;
    } else if (order_amount < order_paid) {

        document.getElementById("error").innerHTML = '<p class="show-error">Paid Amount cann\'t be more then Order Amount </div>';
        return false;
    } else if (!order_details) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Order Details</div>';
        return false;
    } else if (order_status.length > 0) {

        for (var i = 0; i < order_status.length; i++) {
            if (order_status[i].checked) {

                return true;
            }
        }
        document.getElementById("error").innerHTML = '<p class="show-error">Please Check Order Status</div>';
        return false

    } else {
        document.order.submit();
    }

}


function validateExpenses() {

    var re = /^\d{4}-\d{1,2}-\d{1,2}$/;
    var today = new Date();
    var inputDate = new Date(document.getElementById('date').value);
    var _date = document.getElementById('date').value;
    var amount = document.getElementById('amount').value;
    var comment = document.getElementById('comment').value;


    if (!_date) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter  Date</div>';
        return false;
    } else if (!_date.match(re)) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Valid  Date</div>';
        return false;
    } else if (inputDate > today) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter a Valid  Date</div>';
        return false;
    } else if (!amount) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Amount</div>';
        return false;
    } else if (!comment) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Comment</div>';
        return false;
    } else {
        document.expenses.submit();
    }
}


function validateVendor() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    var vander_name = document.getElementById('vander_name').value;
    var vander_phone = document.getElementById('vander_phone').value;
    var vander_email = document.getElementById('vander_email').value;
    var vander_address = document.getElementById('vander_address').value;

    console.log(vander_name);


    if (!vander_name) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter  Name</div>';
        return false;
    } else if (!vander_phone) {

        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Mobile Number</div>';
        return false;
    } else if (vander_phone.length != 10) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter 10 digit Mobile Number</div>';
        return false;
    } else if (!vander_email) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Email</div>';
        return false;
    } else if (!vander_email.match(mailformat)) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Valid Email</div>';
        return false;
    } else if (!vander_address) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter  Address</div>';
        return false;
    } else {
        document.vendors.submit();
    }
}


function validatePurchaseorders() {

    var re = /^\d{4}-\d{1,2}-\d{1,2}$/;
    var today = new Date();
    var inputDate = new Date(document.getElementById('po_date').value);
    var po_date = document.getElementById('po_date').value;
    var po_no = document.getElementById('po_no').value;
    var quantity = document.getElementById('quantity').value;
    var amount = document.getElementById('amount').value;

    console.log(po_date);

    if (!po_date) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Po Date</div>';
        return false;
    } else if (!po_date.match(re)) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Valid  Date</div>';
        return false;
    } else if (inputDate > today) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter a Valid  Date</div>';
        return false;
    } else if (!po_no) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter PO Number</div>';
        return false;
    } else if (!quantity) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Quantity</div>';
        return false;
    } else if (!amount) {
        document.getElementById("error").innerHTML = '<p class="show-error">Please Enter Amount</div>';
        return false;
    } else {
        document.purchaseorders.submit();
    }
}


