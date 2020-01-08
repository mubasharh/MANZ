
$('a.btn-confirm, button.btn-confirm').confirm({

	theme: 'modern',
    title: 'Confirm Please?',
    content: $(this).attr("msg"),
    type: 'dark',
    typeAnimated: true,
    draggable: false,
    buttons: {   
        ok: {
        	useBootstrap: false,
            text: "Yes!",
            btnClass: 'btn-primary',
            keys: ['enter'],
            action: function(){
                 location.href = this.$target.attr('href')
                 console.log('the user clicked confirm');
            }
        },
        cancel: {
        	text: "No",
            keys: ['esc'],
	        cancel: function(){
	            console.log('the user clicked cancel');
	        }
        }
        
    }
});

$('.confirm-form').submit(function(){
	
	currentForm = this;	
	$.confirm({
		theme: 'modern',
	    title: 'Confirm Please?',
	    content: $(this).attr("msg"),
	    type: 'dark',
	    typeAnimated: true,
	    draggable: false,
		buttons: {
		    Confirm: function() {
		        currentForm.submit();
		    },
		    Cancel: function() {
		        // $(this).dialog('close');
		    }
		}
	});
	return false;
});

$('.confirm-select').change(function(){
	
	currentForm = this;	
	$.confirm({
		theme: 'modern',
	    title: 'Confirm Please?',
	    content: $(this).attr("msg"),
	    type: 'dark',
	    typeAnimated: true,
	    draggable: false,
		buttons: {
		    Confirm: function() {
		        currentForm.form.submit();
		    },
		    Cancel: function() {
		        // $(this).dialog('close');
		    }
		}
	});
	return false;
});
//=======================
//initiate select 2
		$('.m-select2').select2();
//====end=========================

/*dashboard scripting*/

var dbh_male = $("#dbh_male").html();
var dbh_female = $("#dbh_female").html();
if( $('#m_chart_profit1').length){ 
new Chartist.Pie('#m_chart_profit1', {
  series: [
  {
      value: dbh_male,
       className: "cc-success"
    },
    {
      value: dbh_female,
      className: "cc-primary"
    }]

}, {
  donut: true,
  showLabel: false
});

}

/*orders scripting*/

var ibh_male = $("#ibh_male").html();
var ibh_female = $("#ibh_female").html();
if($('#m_chart_profit2').length){ 
new Chartist.Pie('#m_chart_profit2', {
  series: [
  {
      value: ibh_male,
       className: "cc-info"
    },
	{
      value: ibh_female,
      className: "cc-warning"
    }]

}, {
  donut: true,
  showLabel: false
});
}
//=====================//
var percent_od = $("#percent_od").html();
  $('.progress-bars').css('width',percent_od);
  //==========================//
  var percent_drop = $("#percent_drop").html();
  $('.progress-bar').css('width',percent_drop);

