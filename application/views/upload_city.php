<div class="upload_city">

	<a href="City/list">도시보기</a>

	<form id="new_city" action="city/create" accept-charset="UTF-8" method="post">
	  <input name="utf8" type="hidden" value="✓">
	  <div class="form-inputs">
      <label>도시명</label>
      <input autofocus="autofocus" type="text" value="" name="city[name]" id="title">
	  </div>
	  <br>
	  <div class="form-inputs">
      <label>국가명</label>
      <input autofocus="autofocus" type="text" value="" name="city[country]" id="description">
	  </div>
	  <div class="form-inputs">
      <input autofocus="autofocus" type="hidden" value="" name="city[url]" id="url">
    </div>
	</form>
	<input id="input_file" type="file">
	<button id="btn_upload" type="button">이미지 업로드 시작</button>
</div>

<script>
	$(function() {
		$("#btn_upload").click(function(eventTarget){
			var inputFile = $("#input_file")[0].files[0];
			<?php
	      $date = new DateTime();
	      $timeStamp = $date->getTimestamp();
	  	?>
	  	var input_time = <?php echo $timeStamp ?>;

      if(!inputFile)
      {
      	alert("파일을 넣어 주세요");
      	return ;
      }

      /// 폼데이터의 생성
      var formDataObj = new FormData();
      formDataObj.append("input_file",inputFile);
      formDataObj.append("input_time",input_time);

      /// 네트워크 통신
      $.ajax({
      	url: "City/upload_city",
      	type: "POST",
      	data : formDataObj,
      	cache: false,
      	contentType: false,
      	processData: false,

      	success: function(data) {
      		$('#url').val(input_time + inputFile.name);
      		$('#new_city').submit();
      		alert('success');
      	},
      	error:function(err) {
      		alert("err : "+err);
      	},
      });
    });

		

	});
</script>