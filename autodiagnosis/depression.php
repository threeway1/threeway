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
        <section class="autodiagnosis depression">
            <div class="container">
                <div class="section-header">
                    <h4>우울증</h4>
                    <p><span>증상</span> 우울하고 무기력하며 짜증이 납니다.</p>
                    <p class="attention">문항을 읽고 자신의 현재 상태에 해당하는 곳에 체크해 주십시오.</p>
                </div>
                <div class="section-content">
                    <div class="caption">
                        <ol class="spelling-list">
                            <li><span>Ⓐ</span> 아니다</li>
                            <li><span>Ⓑ</span> 가끔 그렇다</li>
                            <li><span>Ⓒ</span> 자주 그렇다</li>
                            <li><span>Ⓓ</span> 항상 그렇다</li>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>나는 매사에 의욕이 없고 우울하거나 슬플 때가 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>나는 하루 중 기분이 가장 좋은 때는 아침이다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>나는 갑자기 얼마동안 울음을 터뜨리거나 울고 싶을 때가 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>나는 밤에 잠을 설칠 때가 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>나는 전과 같이 밥맛이 있다(식욕이 좋다).</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>나는 매력적인 여성(남성)을 보거나, 앉아서 얘기하는 것이 좋다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>나는 요즈음 체중이 줄었다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>나는 변비 때문에 고생한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>나는 요즈음 가슴이 두근거린다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>나는 별 이유 없이 잘 피로하다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>내 머리는 한결같이 맑다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>나는 전처럼 어려움 없이 일을 해낸다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>나는 안절부절못해서 진정할 수가 없다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>나의 장래는 희망적이라고 생각한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>나는 전보다도 더 안절부절못한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>나는 결단력이 있다고 생각한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>나는 사회에 유용하고 필요한 사람이라고 생각 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>내 인생은 즐겁다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>내가 죽어야 다른 사람들, 특히 가족들이 편할 것 같다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>나는 전과 다름없이 일하는 것이 즐겁다.</td>
                                        <td><input type="radio"></td>
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