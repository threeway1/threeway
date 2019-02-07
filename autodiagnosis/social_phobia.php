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
        <section class="autodiagnosis social-phobia">
            <div class="container">
                <div class="section-header">
                    <h4>대인공포증</h4>
                    <p><span>증상</span> 사람들 앞에 서면 떨리고 당황합니다.</p>
                    <p class="attention">다음 문항들은 사람들이 대인관계에서 접하는 상황들로 구성되어 있습니다.<br> 각 문항들을 잘 읽고, 그러한 상황에서 자신이 일반적으로 느끼는 바를 가장 적절하게 나타내 주는 번호에 표시해 주십시오.</p>
                </div>
                <div class="section-content">
                    <div class="caption">
                        <ol class="spelling-list">
                            <li><span>Ⓐ</span> 전혀 그렇지 않다</li>
                            <li><span>Ⓑ</span> 약간 그렇다</li>
                            <li><span>Ⓒ</span> 꽤 그렇다</li>
                            <li><span>Ⓓ</span> 상당히 그렇다</li>
                            <li><span>Ⓔ</span> 매우 그렇다</li>
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
                                        <td>익숙하지 않은 대인관계 상황에서도 편안함을 느낀다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>사교적이어야 하는 자리는 피한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>낯선 사람들과 함께 있을 때 쉽게 마음을 편하게 가질 수 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>특별히 사람들을 피하고 싶은 생각은 없다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>사교적인 모임에서 나는 자주 당황함을 느낀다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>사교적인 모임에서 대개는 편안함을 느낀다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>이성에게 말을 걸 때 대체로 마음이 편하다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>사람들과 잘 알지 못하면 그들에게 말을 거는 것을 피하려 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>새로운 사람과 만날 기회가 오면 자주 거기에 응한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>남녀가 같이 있는 일상적인 모임에서 자주 신경이 예민해지고 긴장된다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>잘 모르는 사람들과 함께 있을 때 대체로 신경이 예민해진다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>많은 사람들과 같이 있을 때 보통 편안함을 느낀다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>나는 자주 사람들로부터 멀리 떨어져 있고 싶다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>모르는 사람들 속에 있으면 보통 마음이 편치 않다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>사람을 처음 만날 때 대체로 편안함을 느낀다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>사람들에게 소개될 때면 나는 긴장하고 마음을 졸인다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>방에 낯선 사람이 꽉 차 있을 때에도 나는 거리낌 없이 들어간다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>여러 사람들이 모여 있는데 다가서서 어울리는 것을 피한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>윗사람들이 나와 이야기하기를 원하면 나는 기꺼이 이야기한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>많은 사람들과 있으면 자주 마음이 불편해진다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>사람을 피하려는 경향이 있다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>파티나 친목회에서 사람들에게 말을 건네는 것을 꺼리지 않는다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>많은 사람들과 함께 있으면 좀처럼 편한 마음을 가지기가 힘들다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>사교적인 약속을 피하려고 자주 핑계를 생각해낸다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>나는 때때로 사람들을 서로 소개시켜 주는 책임을 맡는다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>공식적인 사교상의 일을 피하려고 한다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>사교적인 약속이면 그것이 무엇이든지 대개 지키는 편이다.</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>다른 사람들과 함꼐 있을 때 쉽게 편안해진다.</td>
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
                            <dt>60점 이하</dt>
                            <dd>정상적 범위에 해당합니다. 대인공포증상이 없습니다.</dd>
                            <dt>61 ~ 76점</dt>
                            <dd>약한 정도의 대인공포증이 있습니다.</dd>
                            <dt>77 ~ 92점</dt>
                            <dd>중간 정도의 대인공포증이 있습니다.</dd>
                            <dt>93점 이상</dt>
                            <dd>심한 정도의 대인공포증이 있습니다.</dd>
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