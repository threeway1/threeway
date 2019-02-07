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
        <section class="autodiagnosis alcoholism">
            <div class="container">
                <div class="section-header">
                    <h4>알코올중독</h4>
                    <p><span>증상</span> 술을 자제하기 힘듭니다.</p>
                    <p class="attention">다음 문항들을 잘 읽고 해당하는 문항에 체크해주십시오.</p>
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <form action="#">
                            <table class="table survey-table space">
                                <colgroup>
                                    <col style="width: 100px;">
                                    <col style="width: 1070px;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>문항</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <p>술을 마시는 횟수는 어느 정도입니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 안 마신다</li>
                                                <li><input type="radio"> 한 달에 1회 이하</li>
                                                <li><input type="radio"> 한 달에 2~4회</li>
                                                <li><input type="radio"> 일주일에 2~3회</li>
                                                <li><input type="radio"> 일주일에 4회 이상</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <p>술을 마시는 날은 보통 어느 정도를 마십니까?</p>
                                            <ul>
                                                <li><input type="radio"> 반 병 이하</li>
                                                <li><input type="radio"> 1병 이하</li>
                                                <li><input type="radio"> 1.5병 정도</li>
                                                <li><input type="radio"> 2병 정도</li>
                                                <li><input type="radio"> 2.5병 이상</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <p>한 번의 술좌석에서 소주 1병을 초과해서 마시는 횟수는 어느 정도입니까?<br>(기타 술은 표준 5잔 이상)</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 한 달에 1회 미만</li>
                                                <li><input type="radio"> 한 달에 1회 정도</li>
                                                <li><input type="radio"> 일주일에 1회 정도</li>
                                                <li><input type="radio"> 거의 매일</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <p>지난 1년간 일단 술을 마시기 시작하여 자제가 안 된 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 한 달에 1회 미만</li>
                                                <li><input type="radio"> 한 달에 1회 정도</li>
                                                <li><input type="radio"> 일주일에 1회 정도</li>
                                                <li><input type="radio"> 거의 매일</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <p>지난 1년간 음주 때문에 일상생활에 지장을 받은 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 한 달에 1회 미만</li>
                                                <li><input type="radio"> 한 달에 1회 정도</li>
                                                <li><input type="radio"> 일주일에 1회 정도</li>
                                                <li><input type="radio"> 거의 매일</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <p>지난 1년간 과음 후 다음날 아침 정신을 차리기 위해 해장술을 마신 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 한 달에 1회 미만</li>
                                                <li><input type="radio"> 한 달에 1회 정도</li>
                                                <li><input type="radio"> 일주일에 1회 정도</li>
                                                <li><input type="radio"> 거의 매일</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <p>지난 1년간 음주 후 술을 마신 것에 대해 후회한 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 한 달에 1회 미만</li>
                                                <li><input type="radio"> 한 달에 1회 정도</li>
                                                <li><input type="radio"> 일주일에 1회 정도</li>
                                                <li><input type="radio"> 거의 매일</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <p>지난 1년간 술이 깬 후에 취중의 일을 기억할 수 없었던 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 한 달에 1회 미만</li>
                                                <li><input type="radio"> 한 달에 1회 정도</li>
                                                <li><input type="radio"> 일주일에 1회 정도</li>
                                                <li><input type="radio"> 거의 매일</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>
                                            <p>당신의 음주로 인해 본인이 다치거나 또는 가족이나 타인이 다친 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 과거에 있었지만 지난 1년 동안에는 없다</li>
                                                <li><input type="radio"> 지난 1년 동안에 그런 적이 있다</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <p>가족이나 의사가 당신의 음주에 대해 걱정을 하거나 또는 술을 끊거나 줄이라는 권고를 한 적이 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 없다</li>
                                                <li><input type="radio"> 과거에 있었지만 지난 1년 동안에는 없다</li>
                                                <li><input type="radio"> 지난 1년 동안에 그런 적이 있다</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="total">
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
                            <dt>0 ~ 11점</dt>
                            <dd>정상음주자의 범위에 해당합니다</dd>
                            <dt>12 ~ 19점</dt>
                            <dd>상습적인 과음자입니다. 주의를 요합니다.</dd>
                            <dt>20 ~ 23점</dt>
                            <dd>문제 음주자로서 잠재적인 알코올중독환자입니다.</dd>
                            <dt>24점 이상</dt>
                            <dd>알코올 중독 환자로 볼 수 있습니다.</dd>
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