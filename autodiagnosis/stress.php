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
        <section class="autodiagnosis stress">
            <div class="container">
                <div class="section-header">
                    <h4>스트레스</h4>
                    <p><span>증상</span> 스트레스를 많이 받는 것 같습니다.</p>
                    <p class="attention">다음의 문항들에 해당하는 내용을 최근 1개월 동안 얼마나 자주 느꼈는지 체크해 보십시오.</p>
                </div>
                <div class="section-content">
                    <div class="caption">
                        <ol class="spelling-list">
                            <li><span>Ⓐ</span> 전혀 없었다</li>
                            <li><span>Ⓑ</span> 거의 없었다</li>
                            <li><span>Ⓒ</span> 때때로 있었다</li>
                            <li><span>Ⓓ</span> 자주 있었다</li>
                            <li><span>Ⓔ</span> 매우 자주 있었다</li>
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
                                        <td>예상치 못했던 일 때문에 당황했던 적이 얼마나 있었습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>인생에서 중요한 일들을 조절할 수 없다는 느낌을 얼마나 경험하였습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>신경이 예민해지고, 스트레스를 받고 있다는 느낌을 얼마나 경험하였습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>당신의 개인적 문제들을 다루는 데 있어서 얼마나 자주 자신감을 느꼈습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>일상의 일들이 당신의 생각대로 진행되고 있다는 느낌을 얼마나 경험하였습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>당신이 꼭 해야하는 일을 처리할 수 없다고 생각한 적이 얼마나 있었습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>일상생활의 짜증을 얼마나 자주 잘 다스릴 수 있었습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>최상의 컨디션이라고 얼마나 자주 느끼셨습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>당신이 통제할 수 없는 일 때문에 화가 난 경험이 얼마나 있었습니까?</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>어려운 일들이 너무 많이 쌓여서 극복하지 못할 것 같은 느낌을 얼마나 자주 경험하셨습니까?</td>
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
                            <dt>0 ~ 13점</dt>
                            <dd>정상적인 스트레스 상태입니다. 자신이 하고 싶은 일을 제대로 할 수 있는 적절한 상태입니다</dd>
                            <dt>14 ~ 16점</dt>
                            <dd>경도의 스트레스 상태입니다. 현재의 스트레스 상황이 지속되면 정신과적 장애가 발생할 가능성이 높습니다</dd>
                            <dt>17 ~ 18점</dt>
                            <dd>중등도의 스트레스 상태입니다. 우울증이나 불안증에 대한 검사가 필요합니다</dd>
                            <dt>19점 이상</dt>
                            <dd>아주 극심한 스트레스 상태입니다. 우울증이나 불안증에 대한 검사와 즉각적인 정신과적 상담이 필요합니다</dd>
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