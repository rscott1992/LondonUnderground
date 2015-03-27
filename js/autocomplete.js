$(function() {

	var results = [
	{	value:"Stations/1",
		_rev:"567748899",
		_key:"1",
	 	label:"Bond Street"},
	{	value:"Stations/10",
		_rev:"1057433891",
		_key:"10",
		label:"Leicester Square"},
	{	value:"Stations/11",
		_rev:"1062349091",
		_key:"11", 
		label:"Covent Garden"},
	{	value:"Stations/2",
		_rev:"577972515",
		_key:"2", 
		label:"Green Park"},
	{	value:"Stations/3",
		_rev:"597698851",
		_key:"3", 
		label:"Chancey Lane"},
	{	value:"Stations/4",
		_rev:"608971043",
		_key:"4", 
		label:"Oxford Circus"},
	{	value:"Stations/5",
		_rev:"617163043",
		_key:"5", 
		label:"Victoria"},
	{	value:"Stations/6",
		_rev:"974137635",
		_key:"6", 
		label:"Charring Cross"},
	{	value:"Stations/7",
		_rev:"1023486243",
		_key:"7", 
		label:"Tottenham Court Road"},
	{	value:"Stations/8",
		_rev:"1044261155",
		_key:"8", 
		label:"Holburn"},
	{	value:"Stations/9",
		_rev:"1050421539",
		_key:"9", 
		label:"Piccadilly Circus"} 
	];


	$( "#location" ).autocomplete({
      minLength: 0,
      source: results,
      focus: function( event, ui ) {
        $( "#location" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) {
        $( "#location" ).val( ui.item.label );
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>" + item.label + "</a>" )
        .appendTo( ul );
    };

	$( "#destination" ).autocomplete({
      minLength: 0,
      source: results,
      focus: function( event, ui ) {
        $( "#destination" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) {
        $( "#destination" ).val( ui.item.label );
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>" + item.label + "</a>" )
        .appendTo( ul );
    };


});