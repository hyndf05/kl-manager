var coin = 17;
var runner;
var speedAce;
var middle;
var sweeper;
var hybrid;
var itemAce;
var touchedPlayer;
var playerPurCoin;
var stat;
var userStat = 0;
var playerCount = 0;
  
$('.tHeaderIcon').click(function(){
  $('body').removeClass('ves');
})

$('.player-indi').click(function(){
  touchedPlayer = $(this).attr('id');
  playerPurCoin = $(this).attr('co');
  $('body').addClass('ves');
  $('body').removeClass('helpi');
  $('.cPlayer').text(touchedPlayer);
})

$('.pa').click(function(){
if ( coin >= playerPurCoin ) {

stat = $(this).attr('id');
var ix = $(`.tables td#${stat} span`).length;
if (ix > 0) {
$('body').removeClass('ves');
coinRefresh(playerPurCoin);
$(`.player-indi#${touchedPlayer}`).addClass('vsn');
if (stat == 'speedAce') {
  speedAce = touchedPlayer;
  playerSet(stat, touchedPlayer);
} else if (stat == 'runner') {
  runner = touchedPlayer;
  playerSet(stat, touchedPlayer);
} else if (stat == 'middle') {
  middle = touchedPlayer;
  playerSet(stat, touchedPlayer);
} else if (stat == 'sweeper') {
  sweeper = touchedPlayer;
  playerSet(stat, touchedPlayer);
} else if (stat == 'hybrid') {
  hybrid = touchedPlayer;
  playerSet(stat, touchedPlayer);
} else if (stat == 'itemAce') {
  itemAce = touchedPlayer;
  playerSet(stat, touchedPlayer);
} 
} else {
  alert('해당 포지션에 선수가 존재합니다.');
}
} else {
  alert(`코인이 부족하여 ${touchedPlayer} 선수를 영입할 수 없습니다.`);
}
  
})

function playerSet(stat, touchedPlayer) {
alert(`${touchedPlayer} 선수를 영입하였습니다.`);
playerCount ++;
$(`.tables td#${stat}`).text(touchedPlayer);
$(`.tables td#${stat}`).attr('co', playerPurCoin);
  
}

function coinRefresh(playerPurCoin) {
  var i = coin - playerPurCoin;
  $('.users-coin').text(i);
  coin = i;
}

$('.tables td').click(function(){

var removePlayer = $(this).text();
$(this).html('<span></span>');
var reCoin = $(this).attr('co');
var reCoinSTR = parseInt(reCoin);
$(`.player-indi#${removePlayer}`).removeClass('vsn');
var userNowCoin = $('.users-coin').text();
var userNowCoin2 = parseInt(userNowCoin);
coin = userNowCoin2 + reCoinSTR;
$('.users-coin').text(coin);
alert(`${removePlayer} 선수를 방출하였습니다.`);
playerCount --;
})

$('.total-player-btn').click(function(){
  var team = $('.team-name').val();
  var tl = team.length;
  if (tl > 0) {
    

    var speedAceA = $('.tables td#speedAce').text();
    var runnerA = $('.tables td#runner').text();
    var middleA = $('.tables td#middle').text();
    var sweeperA = $('.tables td#sweeper').text();
    var hybridA = $('.tables td#hybrid').text();
    var itemAceA = $('.tables td#itemAce').text();

    var sa = speedAceA.length;
    var rn = runnerA.length;
    var md = middleA.length;
    var sw = sweeperA.length;
    var hy = hybridA.length;
    var ia = itemAceA.length;

    if (playerCount == 4 || playerCount == 5) {

    alert(`${team}이 창단되었습니다.`);
    $('body').addClass('res');
      
    var speedAceImg;
    var runnerImg;
    var middleImg;
    var sweeperImg;
    var hybridImg;
    var itemAceImg;

    
    if (sa > 0) {
      speedAceImg = $(`.player-indi#${speedAceA} img`).attr('src');
    } else {
      speedAceImg = '/sa/images/players/2022na.png';
    }

    if (rn > 0) {
      runnerImg = $(`.player-indi#${runnerA} img`).attr('src');;
    } else {
      runnerImg = '/sa/images/players/2022na.png';
    }

    if (md > 0) {
      middleImg = $(`.player-indi#${middleA} img`).attr('src');
    } else {
      middleImg = '/sa/images/players/2022na.png';
    }

    if (sw > 0) {
      sweeperImg = $(`.player-indi#${sweeperA} img`).attr('src');
    } else {
      sweeperImg = '/sa/images/players/2022na.png';
    }
    
    if (hy > 0) {
      hybridImg = $(`.player-indi#${hybridA} img`).attr('src');
    } else {
      hybridImg = '/sa/images/players/2022na.png';
    }

    if (ia > 0) {
      itemAceImg = $(`.player-indi#${itemAceA} img`).attr('src');
    } else {
      itemAceImg = '/sa/images/players/2022na.png';
    } 

    $('.tgil-player img#speedAce').attr('src', speedAceImg);
    $('.tgil-player img#runner').attr('src', runnerImg);
    $('.tgil-player img#middle').attr('src', middleImg);
    $('.tgil-player img#sweeper').attr('src', sweeperImg);
    $('.tgil-player img#hybrid').attr('src', hybridImg);
    $('.tgil-player img#itemAce').attr('src', itemAceImg);
    $('.tgil-player span#speedAce').text(speedAceA);
    $('.tgil-player span#runner').text(runnerA);
    $('.tgil-player span#middle').text(middleA);
    $('.tgil-player span#sweeper').text(sweeperA);
    $('.tgil-player span#hybrid').text(hybridA);
    $('.tgil-player span#itemAce').text(itemAceA);

    $('.teamnamedisplay span').text(team);
      
  } else {
    alert('제한: 최소 4명, 최대 5명');
  }
  } else {
    alert('구단명을 입력하세요.');
  }
})

$('.retry').click(function(){
  $('body').removeClass('res');
  $('.tables td').html('<span></span>');
  $('.player-indi.vsn').removeClass('vsn');
  $('.users-coin').text('17');
  coin = 17;
  runner = '';
  speedAce = '';
  middle = '';
  sweeper = '';
  hybrid = '';
  itemAce = '';
  touchedPlayer = '';
  playerPurCoin;
  stat;
  userStat = 0;
  playerCount = 0;
  $('.team-name').val('');
  setTimeout(function(){
    alert('모든 정보가 초기화 되었습니다.');
  }, 100);
})