function download(){
  alert('다운로드가 지연되고 있습니다.\n잠시만 기다려 주세요.');
  html2canvas($('#capture')[0]).then(function(canvas){
    var img = canvas.toDataURL();
    download2(img, 'team.png'); 
  });
}

function download2(uri, name){
  var link = document.createElement("a")
  link.download = name;
  link.href = uri;
  document.body.appendChild(link);
  link.click();
}