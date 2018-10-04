var data = document.getElementById("savecourse");

console.log(data);


function savethedata(data){
	console.log(data);
	// couid
	// couName
	var couty = '#couType'+data;
	var couid = '#couid'+data;
	var couna = '#couName'+data;
	// console.log("id : ",$(couid)[0].innerHTML);
	// console.log("name : ",$(couna)[0].innerHTML);
	// console.log("type : ",$(couty)[0].innerHTML);
	// console.log();


	var id = $(couid)[0].innerHTML;
	var name = $(couna)[0].innerHTML;
	var type = $(couty)[0].innerHTML;


	console.log(typeof(id),name,type);

	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url: "/save",
		data: {
			"id" : id,
			"name" : name,
			"type" : type
		},
		type: "POST",
		dataType : "json",
		success: function(data){
			alert("successfully saved");
			console.log(data);
		},
		error: function(error){
			alert(JSON.stringify(error.responseJSON.error));
			console.log(error);

		}
	});	
}