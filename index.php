<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>KL MANAGER 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=IBM+Plex+Sans+KR:wght@100;200;300;400;500;600;700&family=Maven+Pro:wght@400;500;600;700;800;900&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/sa/styles/app.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="/sa/scripts/app.js"></script>
    <script defer src="/sa/scripts/download.js"></script>
    <script defer src="/sa/scripts/html2canvas.js"></script>
  </head>
  <body>
    <div class="help">
      <div class="inner">
        <span class="material-symbols-outlined">help</span>
      </div>
    </div>
    <div class="howtoplay">
      <div class="inner">
        <span class="ptitle">게임 설명</span>
        <span class="pdes">선수들을 영입/방출하여 자신만의 팀을 창단할 수 있습니다.</span>
        <span class="pdes">영입 비용은 6/5/4/3/2/1 코인으로 지정되어 있으며, 초기 자본금으로 20코인을 지급합니다.</span>
        <span class="ptitle">게임 규칙</span>
        <span class="pdes">선수들을 영입/방출하여 자신만의 팀을 창단할 수 있습니다.</span>
        <span class="pdes">영입 비용은 6/5/4/3/2/1 코인으로 지정되어 있으며, 초기 자본금으로 20코인을 지급합니다.</span>
      </div>
    </div> 
    <div class="wrap">
      <div class="header">
        <div class="inner">
          <span>KL MANAGER 2022</span>
        </div>
      </div>
      <div class="container">
        <div class="total">
          <input type="text" class="team-name" placeholder="구단명을 입력하세요.">
          <button class="total-player-btn">창단</button>
        </div>
        <div class="tables">
          <table>
            <thead>
              <th>SPEED ACE</th>
              <th>RUNNER</th>
              <th>MIDDLE</th>
              <th>SWEEPER</th>
              <th>HYBRID</th>
              <th>ITEM ACE</th>
            </thead>
            <tbody>
              <td id="speedAce"><span></span></td>
              <td id="runner"><span></span></td>
              <td id="middle"><span></span></td>
              <td id="sweeper"><span></span></td>
              <td id="hybrid"><span></span></td>
              <td id="itemAce"><span></span></td>
            </tbody>
          </table>
        </div>
        <div class="line">
          <div class="coin">
            <div class="coins">
              <img src="/sa/images/it/coin.png">
              <span>6</span>
            </div>
          </div>
          <div class="player">
            <div class="player-indi" id="유창현" co="6">
              <div class="player-face">
                <img src="/sa/images/players/dbckdgus.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>유창현</span>
              </div>
            </div>
          </div>
        </div>
        <div class="line">
          <div class="coin">
            <div class="coins">
              <img src="/sa/images/it/coin.png">
              <span>5</span>
            </div>
          </div>
          <div class="player">
            <!-- ? -->
            <div class="player-indi" id="이재혁" co="5">
              <div class="player-face">
                <img src="/sa/images/players/dlwogur.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>이재혁</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="배성빈" co="5">
              <div class="player-face">
                <img src="/sa/images/players/qotjdqls.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>배성빈</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="박현수" co="5">
              <div class="player-face">
                <img src="/sa/images/players/qkrgustn.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>박현수</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="최영훈" co="5">
              <div class="player-face">
                <img src="/sa/images/players/chldudgns.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>최영훈</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김승태" co="5">
              <div class="player-face">
                <img src="/sa/images/players/rlatmdxo.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김승태</span>
              </div>
            </div>
            <!-- ? -->
          </div>
        </div>
        <div class="line">
          <div class="coin">
            <div class="coins">
              <img src="/sa/images/it/coin.png">
              <span>4</span>
            </div>
          </div>
          <div class="player">
            <!-- ? -->
            <div class="player-indi" id="박인수" co="4">
              <div class="player-face">
                <img src="/sa/images/players/qkrdlstn.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>박인수</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김다원" co="4">
              <div class="player-face">
                <img src="/sa/images/players/rlaekdnjs.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김다원</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="정승하" co="4">
              <div class="player-face">
                <img src="/sa/images/players/wjdtmdgk.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>정승하</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="홍성민" co="4">
              <div class="player-face">
                <img src="/sa/images/players/ghdtjdals.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>홍성민</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김지민" co="4">
              <div class="player-face">
                <img src="/sa/images/players/rlawlals.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김지민</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="송용준" co="4">
              <div class="player-face">
                <img src="/sa/images/players/thddydwns.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>송용준</span>
              </div>
            </div>
            <!-- ? -->
          </div>
        </div>
        <div class="line">
          <div class="coin">
            <div class="coins">
              <img src="/sa/images/it/coin.png">
              <span>3</span>
            </div>
          </div>
          <div class="player">
            <!-- ? -->
            <div class="player-indi" id="강석인" co="3">
              <div class="player-face">
                <img src="/sa/images/players/rkdtjrdls.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>강석인</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="이은택" co="3">
              <div class="player-face">
                <img src="/sa/images/players/dldmsxor.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>이은택</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="임재원" co="3">
              <div class="player-face">
                <img src="/sa/images/players/dlawodnjs.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>임재원</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="황인호" co="3">
              <div class="player-face">
                <img src="/sa/images/players/ghkddlsgh.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>황인호</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="전진우" co="3">
              <div class="player-face">
                <img src="/sa/images/players/wjswlsdn.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>전진우</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="박민호" co="3">
              <div class="player-face">
                <img src="/sa/images/players/qkralsgh.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>박민호</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="유영혁" co="3">
              <div class="player-face">
                <img src="/sa/images/players/dbdudgur.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>유영혁</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="곽현호" co="3">
              <div class="player-face">
                <img src="/sa/images/players/rhkrgusgh.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>곽현호</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김주영" co="3">
              <div class="player-face">
                <img src="/sa/images/players/rlawndud.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김주영</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="노준현" co="3">
              <div class="player-face">
                <img src="/sa/images/players/shwnsgus.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>노준현</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김응태" co="3">
              <div class="player-face">
                <img src="/sa/images/players/rladmdxo.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김응태</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="강다훈" co="3">
              <div class="player-face">
                <img src="/sa/images/players/rkdekgns.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>강다훈</span>
              </div>
            </div>
            <!-- ? -->
          </div>
        </div>
        <div class="line">
          <div class="coin">
            <div class="coins">
              <img src="/sa/images/it/coin.png">
              <span>2</span>
            </div>
          </div>
          <div class="player">
            <!-- ? -->
            <div class="player-indi" id="석주엽" co="2">
              <div class="player-face">
                <img src="/sa/images/players/tjrwnduq.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>석주엽</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="원종태" co="2">
              <div class="player-face">
                <img src="/sa/images/players/dnjswhdxo.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>원종태</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="한정진" co="2">
              <div class="player-face">
                <img src="/sa/images/players/gkswjdwls.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>한정진</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="박대한" co="2">
              <div class="player-face">
                <img src="/sa/images/players/qkreogks.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>박대한</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="전대웅" co="2">
              <div class="player-face">
                <img src="/sa/images/players/wjseodnd.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>전대웅</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="NEAL" co="2">
              <div class="player-face">
                <img src="/sa/images/players/neal.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>NEAL</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="이은서" co="2">
              <div class="player-face">
                <img src="/sa/images/players/dldmstj.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>이은서</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="고병수" co="2">
              <div class="player-face">
                <img src="/sa/images/players/rhqudtn.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>고병수</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="황혁" co="2">
              <div class="player-face">
                <img src="/sa/images/players/ghkdgur.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>황혁</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김우준" co="2">
              <div class="player-face">
                <img src="/sa/images/players/rladnwns.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김우준</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="최승현" co="2">
              <div class="player-face">
                <img src="/sa/images/players/chltmdgus.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>최승현</span>
              </div>
            </div>
            <!-- ? -->
          </div>
        </div>
        <div class="line">
          <div class="coin">
            <div class="coins">
              <img src="/sa/images/it/coin.png">
              <span>1</span>
            </div>
          </div>
          <div class="player">
            <!-- ? -->
            <div class="player-indi" id="박태민" co="1">
              <div class="player-face">
                <img src="/sa/images/players/qkrxoals.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>박태민</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="권순우" co="1">
              <div class="player-face">
                <img src="/sa/images/players/rnjstnsdn.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>권순우</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="윤태웅" co="1">
              <div class="player-face">
                <img src="/sa/images/players/dbsxodnd.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>윤태웅</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="이정우" co="1">
              <div class="player-face">
                <img src="/sa/images/players/dlwjddn.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>이정우</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김민성" co="1">
              <div class="player-face">
                <img src="/sa/images/players/rlaalstjd.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김민성</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="김민준" co="1">
              <div class="player-face">
                <img src="/sa/images/players/rlaalswns.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>김민준</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="최준호" co="1">
              <div class="player-face">
                <img src="/sa/images/players/chlwnsgh.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>최준호</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="권효진" co="1">
              <div class="player-face">
                <img src="/sa/images/players/rnjsgywls.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>권효진</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="유민선" co="1">
              <div class="player-face">
                <img src="/sa/images/players/dbalstjs.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>유민선</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="심우혁" co="1">
              <div class="player-face">
                <img src="/sa/images/players/tladngur.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>심우혁</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="이명재" co="1">
              <div class="player-face">
                <img src="/sa/images/players/dlaudwo.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>이명재</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="안정환" co="1">
              <div class="player-face">
                <img src="/sa/images/players/dkswjdghks.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>안정환</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="정유민" co="1">
              <div class="player-face">
                <img src="/sa/images/players/wjddbals.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>정유민</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="한승민" co="1">
              <div class="player-face">
                <img src="/sa/images/players/gkstmdals.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>한승민</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="윤서형" co="1">
              <div class="player-face">
                <img src="/sa/images/players/dbstjgud.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>윤서형</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="최준혁" co="1">
              <div class="player-face">
                <img src="/sa/images/players/chlwnsgur.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>최준혁</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="최은성" co="1">
              <div class="player-face">
                <img src="/sa/images/players/chldmstjd.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>최은성</span>
              </div>
            </div>
            <!-- ? -->
            <div class="player-indi" id="주희성" co="1">
              <div class="player-face">
                <img src="/sa/images/players/wngmltjd.png" loading="lazy">
              </div>
              <div class="player-name">
                <span>주희성</span>
              </div>
            </div>
            <!-- ? -->
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="inner">
          <div class="fn-line">
            <span class="h-title">제공</span>
            <span class="h-user">연방봇</span>
          </div>
          <div class="fn-line">
            <span class="h-title">제작</span>
            <span class="h-user">WWPS</span>
          </div>
          <div class="fn-line">
            <span class="h-ver">KL MANAGER v1.0.0</span>
          </div>
        </div>
      </div>
    </div>
    <div class="my-coin">
      <div class="my-coin-gg">
        <img src="/sa/images/it/coin.png">
        <span class="users-coin">20</span>
      </div>
    </div>
    <div class="tWrap">
      <div class="tHeader">
        <div class="tHeaderPlayer">
          <span class="cPlayer"></span>
        </div>
        <div class="tHeaderIcon">
          <span class="material-symbols-outlined">close</span>
        </div>
      </div>
      <div class="tContainer">
        <button class="pa" id="speedAce">Speed Ace</button>
        <button class="pa" id="runner">Runner</button>
        <button class="pa" id="middle">Middle</button>
        <button class="pa" id="sweeper">Sweeper</button>
        <button class="pa" id="hybrid">Hybrid</button>
        <button class="pa" id="itemAce">Item Ace</button>
      </div>
    </div>
    <!-- 팀 생성 페이지 -->
    <div class="team-gen">   
      <button onclick="download();" class="db4">로스터 다운로드 (PNG)</button>
      <button class="db4 ">해단</button>
      <div class="tg-inner">
        <div id="capture" style="width:600px;height:auto;padding-bottom:11px;">
          <div class="teamnamedisplay">
            <span></span>
          </div>
          <div class="tgi-line">
            <div class="tgil-player">
              <div class="tgilp-image">
                <img id="speedAce" src="">
              </div>
              <div class="tgilp-name">
                <span>SPEED ACE</span>
                <span id="speedAce"></span>
              </div>
            </div>
            <div class="tgil-player">
              <div class="tgilp-image">
                <img id="runner" src="">
              </div>
              <div class="tgilp-name">
                <span>RUNNER</span>
                <span id="runner"></span>
              </div>
            </div>
            <div class="tgil-player">
              <div class="tgilp-image">
                <img id="middle" src="">
              </div>
              <div class="tgilp-name">
                <span>MIDDLE</span>
                <span id="middle"></span>
              </div>
            </div>
          </div>
          <div class="tgi-line">
            <div class="tgil-player">
              <div class="tgilp-image">
                <img id="sweeper" src="">
              </div>
              <div class="tgilp-name">
                <span>SWEEPER</span>
                <span id="sweeper"></span>
              </div>
            </div>
            <div class="tgil-player">
              <div class="tgilp-image">
                <img id="hybrid" src="">
              </div>
              <div class="tgilp-name">
                <span>HYBRID</span>
                <span id="hybrid"></span>
              </div>
            </div>
            <div class="tgil-player">
              <div class="tgilp-image">
                <img id="itemAce" src="">
              </div>
              <div class="tgilp-name">
                <span>ITEM ACE</span>
                <span id="itemAce"></span>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>