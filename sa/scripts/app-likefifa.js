var supportedCoin = '50';

$('.users-coin').text(supportedCoin);

var axCoin = supportedCoin;
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
var getPlayerPrice1;
var getPlayerPrice2;
var getPlayerPrice3;
var getPlayerPrice4;
var getPlayerPrice5;
var playerSeason1;
var playerSeason2;
var playerSeason3;
var playerSeason4;
var playerSeason5;

$('.tWrap .tHeaderIcon').click(function(){
  $('body').removeClass('ves');
})

$('.sWrap .tHeaderIcon').click(function(){
  $('body').removeClass('vef');
})

$('.player-indi').click(function(){
  touchedPlayer = $(this).attr('id');
  $('body').addClass('vef');
  $('body').removeClass('helpi');
  $('.cPlayer').text(touchedPlayer);
  $('.sWrap .pa').css('display','unset');
  playerSeason1 = $('.sWrap .pa:nth-child(1)').attr('id');
  playerSeason2 = $('.sWrap .pa:nth-child(2)').attr('id');
  playerSeason3 = $('.sWrap .pa:nth-child(3)').attr('id');
  playerSeason4 = $('.sWrap .pa:nth-child(4)').attr('id');
  playerSeason5 = $('.sWrap .pa:nth-child(5)').attr('id');
  var getPlayer1 = touchedPlayer + playerSeason1;
  var getPlayer2 = touchedPlayer + playerSeason2;
  var getPlayer3 = touchedPlayer + playerSeason3;
  var getPlayer4 = touchedPlayer + playerSeason4;
  var getPlayer5 = touchedPlayer + playerSeason5;
  getPlayerPrice1 = eval(getPlayer1);
  getPlayerPrice2 = eval(getPlayer2);
  getPlayerPrice3 = eval(getPlayer3);
  getPlayerPrice4 = eval(getPlayer4);
  getPlayerPrice5 = eval(getPlayer5);
  console.log(getPlayerPrice1);
  if (getPlayerPrice1 == '0') {
    $('.sWrap .pa:nth-child(1)').css('display','none');
  }
  if (getPlayerPrice2 == '0') {
    $('.sWrap .pa:nth-child(2)').css('display','none');
  }
  if (getPlayerPrice3 == '0') {
    $('.sWrap .pa:nth-child(3)').css('display','none');
  }
  if (getPlayerPrice4 == '0') {
    $('.sWrap .pa:nth-child(4)').css('display','none');
  }
  if (getPlayerPrice5 == '0') {
    $('.sWrap .pa:nth-child(5)').css('display','none');
  }
  $('.sWrap .pa:nth-child(1) .neededCoin').text(getPlayerPrice1);
  $('.sWrap .pa:nth-child(2) .neededCoin').text(getPlayerPrice2);
  $('.sWrap .pa:nth-child(3) .neededCoin').text(getPlayerPrice3);
  $('.sWrap .pa:nth-child(4) .neededCoin').text(getPlayerPrice4);
  $('.sWrap .pa:nth-child(5) .neededCoin').text(getPlayerPrice5);
})

$('.sWrap .pa:nth-child(1)').click(function(){
  $('.price span').text(getPlayerPrice1);
})
$('.sWrap .pa:nth-child(2)').click(function(){
  $('.price span').text(getPlayerPrice2);
})
$('.sWrap .pa:nth-child(3)').click(function(){
  $('.price span').text(getPlayerPrice3);
})
$('.sWrap .pa:nth-child(4)').click(function(){
  $('.price span').text(getPlayerPrice4);
})
$('.sWrap .pa:nth-child(5)').click(function(){
  $('.price span').text(getPlayerPrice5);
})

$('.tWrap .pa:nth-child(1)').click(function(){
  $('.season span').text(playerSeason1);
})
$('.tWrap .pa:nth-child(2)').click(function(){
  $('.season span').text(playerSeason2);
})
$('.tWrap .pa:nth-child(3)').click(function(){
  $('.season span').text(playerSeason3);
})
$('.tWrap .pa:nth-child(4)').click(function(){
  $('.season span').text(playerSeason4);
})
$('.tWrap .pa:nth-child(5)').click(function(){
  $('.season span').text(playerSeason5);
})

$('.sWrap .pa').click(function(){

$('body').addClass('ves');

})

$('.tWrap.r .pa').click(function(){
  playerPurCoin = $('.price span').text();
  GetPlayerSeason = $('.season span').text();
if ( axCoin >= playerPurCoin ) {
stat = $(this).attr('id');
var ix = $(`.tables td#${stat} span`).length;
if (ix > 0) {
$('body').removeClass('ves');
$('body').removeClass('vef');
coinRefresh(playerPurCoin);
$(`.player-indi#${touchedPlayer}`).addClass('vsn');
if (stat == 'speedAce') {
  speedAce = touchedPlayer + GetPlayerSeason;
  playerSet(stat, touchedPlayer);
} else if (stat == 'runner') {
  runner = touchedPlayer + GetPlayerSeason;
  playerSet(stat, touchedPlayer);
} else if (stat == 'middle') {
  middle = touchedPlayer;
  playerSet(stat, touchedPlayer + GetPlayerSeason);
} else if (stat == 'sweeper') {
  sweeper = touchedPlayer;
  playerSet(stat, touchedPlayer + GetPlayerSeason);
} else if (stat == 'hybrid') {
  hybrid = touchedPlayer;
  playerSet(stat, touchedPlayer + GetPlayerSeason);
} else if (stat == 'itemAce') {
  itemAce = touchedPlayer;
  playerSet(stat, touchedPlayer + GetPlayerSeason);
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
$(`.tables td#${stat}`).text(`${touchedPlayer} (${GetPlayerSeason})`);
$(`.tables td#${stat}`).attr('co', playerPurCoin);
$(`.tables td#${stat}`).attr('xi', touchedPlayer);

}

function coinRefresh(playerPurCoin) {
  var i = axCoin - playerPurCoin;
  $('.users-coin').text(i);
  axCoin = i;
}

$('.tables td').click(function(){

var removePlayer = $(this).text();
var inthisPlayer = $(this).attr('xi');
$(this).html('<span></span>');
var reCoin = $(this).attr('co');
var reCoinSTR = parseInt(reCoin);
$(`.player-indi#${inthisPlayer}`).removeClass('vsn');
var userNowCoin = $('.users-coin').text();
var userNowCoin2 = parseInt(userNowCoin);
axCoin = userNowCoin2 + reCoinSTR;
$('.users-coin').text(axCoin);
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
  $('.users-coin').text(supportedCoin);
  axCoin = supportedCoin;
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