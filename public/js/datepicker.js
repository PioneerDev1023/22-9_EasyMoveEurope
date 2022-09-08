const picker = document.getElementById('datepicker');
picker.min = new Date().toISOString().split("T")[0];
picker.addEventListener('input', function(e){
var day = new Date(this.value).getUTCDay();
if([6,0].includes(day)){
    e.preventDefault();
    this.value = '';
    Command: toastr["warning"]("Weekends not allowed");
}
});