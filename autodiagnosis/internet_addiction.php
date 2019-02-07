<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
<link rel="stylesheet" href="/comm/css/autodiagnosis.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <div class="page-header autodiagnosis">
        <div class="container">
            <h3>자가진단</h3>
            <p>마음과 마음이 희망이 되는 이야기를 들려드립니다.</p>
            <nav class="office-list">
                <ul>
                    <li><a href="#">일산 <small>ILSAN</small></a></li>
                    <li><a href="#">구로 <small>GURO</small></a></li>
                    <li><a href="#">용인수지 <small>YONGIN-SUJI</small></a></li>
                    <li><a href="#">시흥안산 <small>SIHEUNG-ANSAN</small></a></li>
                    <li><a href="#">동대문 <small>DONGDAEMUN</small></a></li>
                    <li><a href="#">신촌홍대 <small>SHINCHON-HONGDAE</small></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <nav id="lnb">
        <div class="container">
            <ul>
                <li><a href="#">인사말</a></li>
                <li class="active"><a href="#">마음브랜드</a></li>
                <li><a href="#">사회공헌</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Content Start -->
    <main id="content-wrap">
        <section class="autodiagnosis internet-addiction">
            <div class="container">
                <div class="section-header">
                    <h4>인터넷중독</h4>
                    <p><span>증상</span> 인터넷이나 게임을 너무 많이 해요</p>
                    <p class="attention">다음 문항 중 자신이 해당하는 항목에 체크하십시오.</p>
                </div>
                <div class="section-content">
                    <div class="caption">
                        <ol class="spelling-list">
                            <li><span>Ⓐ</span> 전혀 아니다</li>
                            <li><span>Ⓑ</span> 약간 그렇다</li>
                            <li><span>Ⓒ</span> 적당히 그렇다</li>
                            <li><span>Ⓓ</span> 상당히 그렇다</li>
                            <li><span>Ⓔ</span> 완전히 그렇다</li>
                        </ol>
                    </div>
                    <div class="table-wrap">
                        <form action="#">
                            <table class="table survey-table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>문항</th>
                                        <th>Ⓐ</th>
                                        <th>Ⓑ</th>
                                        <th>Ⓒ</th>
                                        <th>Ⓓ</th>
                                        <th>Ⓔ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>인터넷이나 통신을 의도했던 것보다 훨씬 더 많이 아주 오래하게 된다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>인터넷이나 통신을 하느라고 집안(또는 학교) 일을 소홀히 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>친구들과 있는 것보다 인터넷이나 통신을 하는 것이 더 즐겁다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>인터넷이나 통신을 하면서 새로운 친구를 자주 사귄다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>인터넷이나 통신에 시간을 많이 쓰기 때문에 주위 사람들이 불평을 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>인터넷이나 통신을 하는 데 많은 시간을 쓰기 때문에 성적이나 숙제, 학과 공부를 제대로 하지 못한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>무슨 일을 하기 전에 먼저 전자우편(이메일)부터 확인해본다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>인터넷 때문에 공부하는 데 집중력이나 효율성이 떨어진다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>사람들이 내게 인터넷에서 무엇을 하는지 물어보면 방어적이 되거나 숨기려고 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>인터넷을 하다보면 현실의 골치 아픈 생각이 잊혀지는 경우가 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>다시 인터넷에 접속할 때를 기다리게 된다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>인터넷이 없다면 내 인생은 지루하고 공허하며 재미없을 것 같다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>인터넷을 할 때 누가 날 방해하면 기분이 나빠지고 화를 낸다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>밤새 인터넷을 하느라 잠을 못 잔 적이 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>인터넷을 하고 있지 않을 때도 인터넷에서 보았던 것들에 대해 생각하는 경우가 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>인터넷을 하면서 "조금만 더, 몇 분만 더" 하면서 계속한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>인터넷을 하는 시간을 줄이려고 노력했지만 결국은 실패하였다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>자신의 인터넷 사용 시간량을 부모님이나 다른 사람에게 감추거나 거짓말을 하는 경우가 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>친구나 가족들과 어울리기 보다는 인터넷을 선택하는 것이 더 낫다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>인터넷을 하지 않으면 기분이 우울하거나 불안하다가도 인터넷을 시작하면 그런 기분이 사라진다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="total">
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-again" role="button">다시하기</a>
                                                <button type="submit" class="btn btn-sum">점수 합하기</button>
                                            </div>
                                            <dl>
                                                <dt>총점</dt>
                                                <dd> <b class="total-num">1,234</b> 점</dd>
                                            </dl>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="grading">
                        <h6>채점기준</h6>
                        <dl>
                            <dt>30점 이하</dt>
                            <dd>정상적인 인터넷 사용자입니다.</dd>
                            <dt>31 ~ 49점</dt>
                            <dd>인터넷 사용에 가벼운 정도의 문제가 있습니다.</dd>
                            <dt>50 ~ 79점</dt>
                            <dd>인터넷 사용에 중간 정도의 문제가 있습니다.</dd>
                            <dt>80점 이상</dt>
                            <dd>인터넷 사용에 심각한 문제가 있습니다.</dd>
                        </dl>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-print" role="button">인쇄하기</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>