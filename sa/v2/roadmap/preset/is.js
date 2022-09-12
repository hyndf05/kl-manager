var filter = "win16|win32|win64|mac|macintel";

if (navigator.platform) {
	if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
		$('div').remove();
    alert('모바일 기기에서 확인하실 수 없습니다.\n네이버로 리다이렉트 됩니다.');
    location.href='//m.naver.com';
	} else {
	}
}
