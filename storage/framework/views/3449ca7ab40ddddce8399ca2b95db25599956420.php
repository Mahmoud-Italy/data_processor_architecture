<script>
	$("#importJSON").click(function(){
		$("#uploadJSON").click();
		var Url = "<?php echo e(url('importJSON')); ?>";
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $("#importJSON").prop("disabled",true).text('Loading....');
        $.ajax({
            url : Url,
            type : "POST",
            data : { productId:productId },
            dataType : "json",
            success : function(data) { 
                if(data.status) {
                    $("#importJSON").text("Upload Success");
                } else {
                    $("#importJSON").text("Something went wrong");
                }
                setTimeout(function(){
                     $("#importJSON").prop('disabled', false).text('import JSON');
                },3000);
            }
        });
        return false;
	});
</script>
<?php /* /Users/apple/Sites/ideas/data_processor_architecture/resources/views/frontend/layouts/jsCode.blade.php */ ?>