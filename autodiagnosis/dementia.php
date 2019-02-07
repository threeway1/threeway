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
        <section class="autodiagnosis dementia">
            <div class="container">
                <div class="section-header">
                    <h4>치매</h4>
                    <p><span>증상</span> 기억력이 떨어져서 치매가 걱정됩니다.</p>
                    <p class="attention">이 질문지는 여러분이 일상생활에서 경험할 수 있는 내용들로 구성되어 있습니다.<br>각 문장을 자세히 읽어보시고 요즈음 얼마나 자주 그렇게 경험하거나 느끼시는지 자신을 가장 잘 나타낸다고 생각되는 번호에 표시하여 주십시오.</p>
                </div>
                <div class="section-content">
                    <div class="caption">
                        <ol class="spelling-list">
                            <li><span>Ⓐ</span> 아니다</li>
                            <li><span>Ⓑ</span> 가끔(조금 그렇다)</li>
                            <li><span>Ⓒ</span> 자주(많이) 그렇다</li>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>오늘이 몇 월이고 무슨 요일인지를 잘 모른다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>자기가 놓아둔 물건을 찾지 못한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>같은 질문을 반복해서 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>약속을 하고서 잊어버린다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>물건을 가지러 갔다가 잊어버리고 그냥 온다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>물건이나 사람 이름을 대기가 힘들어 머뭇거린다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>대화 중 내용이 이해되지 않아 반복해서 물어본다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>길을 잃거나 헤맨 적이 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>예전에 비해서 계산 능력이 떨어졌다. (예 : 물건 값이나 거스름 돈 계산을 못한다)</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>예전에 비해 성격이 변했다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>이전에 잘 다루던 기구의 사용이 서툴러졌다. (예 : 세탁기, 전기밥솥, 경운기 등)</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>예전에 비해 방이나 집안의 정리 정돈을 하지 못한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>상황에 맞게 스스로 옷을 선택하여 입지 못한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>혼자 대중교통수단을 이용하여 목적지에 가기 힘들다. (관절염 등과 같은 신체적인 문제로 인한 것은 제외됨)</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>내복이나 옷이 더러워져도 갈아입으려 하지 않는다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
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
                            <dt>0 ~ 39점</dt>
                            <dd>정상적 범위에 해당합니다. 우울증에 대해 크게 걱정하지 않아도 됩니다.</dd>
                            <dt>40 ~ 47점</dt>
                            <dd>경미하나마 우울증 증세를 보이고 있습니다. 전문가와의 상담을 권합니다.</dd>
                            <dt>48 ~ 55점</dt>
                            <dd>중증 이상의 우울증 증세를 보이고 있습니다. 병원 치료를 권합니다.</dd>
                            <dt>55점 이상</dt>
                            <dd>우울증 증상이 심합니다. 약물치료를 포함한 즉각적인 치료를 요합니다.</dd>
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