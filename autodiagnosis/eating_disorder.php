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
        <section class="autodiagnosis eating-disorder">
            <div class="container">
                <div class="section-header">
                    <h4>식사장애</h4>
                    <p><span>증상</span> 자꾸 폭식을 해요.</p>
                    <p class="attention">다음 질문들은 여러분의 평소 식습관에 관한 내용들로 구성되어 있습니다.<br> 요즈음(오늘을 포함하여 최근 일주일 동안) 본인을 가장 잘 나타낸다고 생각되는 답을 골라 왼쪽 빈칸에 기입해 주십시오.</p>
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
                                            <p>나는 내 식사 패턴에 만족한다.</p>
                                            <ul>
                                                <li><input type="radio"> 그렇다.</li>
                                                <li><input type="radio"> 대체로 그렇다.</li>
                                                <li><input type="radio"> 약간 그렇지 않다.</li>
                                                <li><input type="radio"> 그렇지 않다.</li>
                                                <li><input type="radio"> 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <p>당신은 스스로 "폭식한다"고 할 수 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 절대적으로 그렇다.</li>
                                                <li><input type="radio"> 그렇다.</li>
                                                <li><input type="radio"> 아마 그럴 거다.</li>
                                                <li><input type="radio"> 그렇게 볼 수도 있다.</li>
                                                <li><input type="radio"> 아마도 그렇지 않을 거다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <p>식사량을 스스로 조절할 수 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 거의 항상 그렇다.</li>
                                                <li><input type="radio"> 꽤 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 그렇지 않다.</li>
                                                <li><input type="radio"> 아마도 그렇지 않을 거다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <p>나는 내 체형과 치수(size)에 대해 만족한다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 이따금씩 그럴 때도 있다.</li>
                                                <li><input type="radio"> 거의 그렇지 않다.</li>
                                                <li><input type="radio"> 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <p>내 식사행동을 통제할 수 없다고 느낄 때, 궤도를 회복하기 위해 단기의 다이어트나, 설사약이나 변비약을 복용하거나 손가락을 입에 넣어 구토를 하기도 하고 과도한 운동을 한다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대체로 항상 그런 편이다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 전혀 그렇지 않다. / 나는 식사행동을 통제할 수 없게 된 적이 없다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <p>나는 체중조절을 위해 변비약이나 설사약을 복용한다.</p>
                                            <ul>
                                                <li><input type="radio"> 하루에 1회 그 이상</li>
                                                <li><input type="radio"> 일주일에 3회 내지 6회</li>
                                                <li><input type="radio"> 한 달에 1회 내지 2회</li>
                                                <li><input type="radio"> 한 달에 2회 내지 3회</li>
                                                <li><input type="radio"> 한 달에 1회 혹은 사용하지 않음</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <p>나는 내 체형이나 신체치수에 대해 늘 고민에 사로잡혀 있다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대개 그렇다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <p>너무 많은 음식을 급하게 먹는 때가 있다.</p>
                                            <ul>
                                                <li><input type="radio"> 일주일에 2회 그 이상</li>
                                                <li><input type="radio"> 일주일에 2회</li>
                                                <li><input type="radio"> 한 달에 2회 내지 3회</li>
                                                <li><input type="radio"> 한 달에 1회 혹은 없음</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>
                                            <p>얼마나 오랫동안 폭식을 해 왔습니까? <br>(한동안 다이어트나 절식을 하다가 갑자기 자신을 통제할 수 없을 만큼 마구 먹어대는 행동)</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 하지 않았다.</li>
                                                <li><input type="radio"> 3달 이하</li>
                                                <li><input type="radio"> 3달에서 1년 동안</li>
                                                <li><input type="radio"> 1년에서 3년 동안</li>
                                                <li><input type="radio"> 3년 그 이상</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <p>나를 아는 사람들이 내가 한 번에 얼마나 만이 먹는지를 알면 놀랄 것이다.</p>
                                            <ul>
                                                <li><input type="radio"> 확실히 그럴 것이다.</li>
                                                <li><input type="radio"> 거의 그럴 것이다.</li>
                                                <li><input type="radio"> 아마도 그럴 것이다.</li>
                                                <li><input type="radio"> 그럴 수도 있다.</li>
                                                <li><input type="radio"> 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <p>칼로리를 소모시키기 위해 운동을 한다.</p>
                                            <ul>
                                                <li><input type="radio"> 하루에 2시간 이상</li>
                                                <li><input type="radio"> 하루에 2시간 정도</li>
                                                <li><input type="radio"> 하루에 2시간 이하 1시간 이상</li>
                                                <li><input type="radio"> 하루에 1시간 혹은 그 이하</li>
                                                <li><input type="radio"> 칼로리를 소모시키기 위해서 운동하지는 않는다. / 운동을 하지 않는다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <p>당신의 나이또래 여자들과 비교해 얼마나 체중과 체형에 집착하는 것 같습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 평균보다 훨씬 더 많이</li>
                                                <li><input type="radio"> 평균보다 더 많이</li>
                                                <li><input type="radio"> 평균 이상</li>
                                                <li><input type="radio"> 평균 이하</li>
                                                <li><input type="radio"> 평균보다 더 적게</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            <p>먹기 시작하면 멈출 수 없을 거라는 두려움 때문에 어떤 것도 먹기가 겁이 난다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대체로 그렇다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>
                                            <p>뚱뚱해질 거라는 생각에 시달린다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대체로 그렇다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>
                                            <p>먹고 난 후 의도적으로 구토를 하는 일이 얼마나 자주 있습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 일주일에 2회 내지 그 이상</li>
                                                <li><input type="radio"> 일주일에 1회</li>
                                                <li><input type="radio"> 한 달에 2회 내지 3회</li>
                                                <li><input type="radio"> 한 달에 1회</li>
                                                <li><input type="radio"> 한 달에 1회 이하 혹은 하지 않음</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>
                                            <p>배고프지 않을 때에도 음식을 많이 먹는다.</p>
                                            <ul>
                                                <li><input type="radio"> 매우 자주 그렇다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 그럴 때도 있다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>
                                            <p>내 식사행동은 보통사람들과 다르다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대체로 항상 그런 편이다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>
                                            <p>폭식을 한 직후 살이 찌지 않기 위해서 과도한 운동을 하거나 단기의 다이어트, 단식, 이뇨제, 설사약이나 변비약을 먹는 등의 방법을 쓴다.</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 하지 않는다.</li>
                                                <li><input type="radio"> 거의 하지 않는다.</li>
                                                <li><input type="radio"> 할 때도 있다.</li>
                                                <li><input type="radio"> 자주 한다.</li>
                                                <li><input type="radio"> 거의 항상 한다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>
                                            <p>단식을 하거나 단기의 다이어트를 해서 체중을 줄이려고 노력한 적이 있다.</p>
                                            <ul>
                                                <li><input type="radio"> 지난 1년 동안 그런 적이 없다.</li>
                                                <li><input type="radio"> 지난 1년 동안 1차례</li>
                                                <li><input type="radio"> 지난 1년 동안 2~3차례</li>
                                                <li><input type="radio"> 지난 1년 동안 5차례</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>
                                            <p>칼로리를 소모하기 위해서 과도하게 오랜 시간 동안 운동을 한다.</p>
                                            <ul>
                                                <li><input type="radio"> 평균 이하</li>
                                                <li><input type="radio"> 평균보다 좀 적게</li>
                                                <li><input type="radio"> 평균보다 좀 많이</li>
                                                <li><input type="radio"> 평균보다 많이</li>
                                                <li><input type="radio"> 평균보다 훨씬 많이</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>
                                            <p>폭식을 할 때 탄수화물이 많이 들어있는 음식(달콤하고 전분이 많은 음식)을 먹는 경향이 있다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대체로 항상 그런 편이다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 폭식을 하지 않는다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>
                                            <p>대개의 사람들과 비교하여 나의 식사 행동을 통제하는 능력은?</p>
                                            <ul>
                                                <li><input type="radio"> 다른 사람들보다 훨씬 낫다.</li>
                                                <li><input type="radio"> 비슷하다.</li>
                                                <li><input type="radio"> 다른 사람보다 못하다.</li>
                                                <li><input type="radio"> 훨씬 못하다.</li>
                                                <li><input type="radio"> 통제할 만한 능력이 전혀 없다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>
                                            <p>나는 스스로 충동적으로 먹는 사람이라 할 수 있다.</p>
                                            <ul>
                                                <li><input type="radio"> 확실히 그렇다.</li>
                                                <li><input type="radio"> 그렇다.</li>
                                                <li><input type="radio"> 그런 편이다.</li>
                                                <li><input type="radio"> 그렇게 볼 수도 있을 것이다.</li>
                                                <li><input type="radio"> 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>
                                            <p>나는 너무 많이 먹은 후에 내 모습을 보는 것이 싫다.</p>
                                            <ul>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 거의 항상 그렇다.</li>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>
                                            <p>살찌지 않으려고 노력할 때, 과도한 운동이나 단기의 다이어트, 단식, 이뇨제, 설사약이나 변비약을 복용하는 것에 내가 의존하고 있다는 느낌을 받는다.</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 그렇지 않다.</li>
                                                <li><input type="radio"> 거의 그렇지 않다.</li>
                                                <li><input type="radio"> 그럴 수도 있다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 거의 항상 그렇다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>
                                            <p>구토하는 것이 다른 사람들에게보다 당신에게는 수월한 방법이라고 생각하십니까?</p>
                                            <ul>
                                                <li><input type="radio"> 그렇다. 전혀 어렵지 않다.</li>
                                                <li><input type="radio"> 그렇다. 쉬운 방법이다.</li>
                                                <li><input type="radio"> 비교적 쉬운 방법이다.</li>
                                                <li><input type="radio"> 그저 그렇다.</li>
                                                <li><input type="radio"> 쉽지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>
                                            <p>체중 조절을 위해 이뇨제를 복용한다.</p>
                                            <ul>
                                                <li><input type="radio"> 한 달에 1회 이하 혹은 전혀 사용하지 않는다.</li>
                                                <li><input type="radio"> 거의 하지 않는 편이다(1달에 2~3회).</li>
                                                <li><input type="radio"> 가끔 복용한다(1주일에 1~2회)</li>
                                                <li><input type="radio"> 자주 복용한다(1주일에 3~6회).</li>
                                                <li><input type="radio"> 매우 자주 복용한다(하루에 1회 이상).</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>
                                            <p>음식이 내 삶을 통제하고 있다고 느껴진다.</p>
                                            <ul>
                                                <li><input type="radio"> 항상 그렇다.</li>
                                                <li><input type="radio"> 대체로 항상 그런 편이다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 거의 혹은 전혀 그렇지 않다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>
                                            <p>하루나 그 이상의 기간 먹지 않거나 아주 적게 먹는 것으로써 체중을 조절하려고 한다.</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 그렇지 않다.</li>
                                                <li><input type="radio"> 대체로 항상 그런 편이다.</li>
                                                <li><input type="radio"> 가끔 그렇다.</li>
                                                <li><input type="radio"> 자주 그렇다.</li>
                                                <li><input type="radio"> 매우 자주 그렇다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>
                                            <p>많은 양의 음식을 먹을 때 보통 어느 정도의 속도로 먹습니까?</p>
                                            <ul>
                                                <li><input type="radio"> 보통 사람들보다 훨씬 빨리 먹는 편이다.</li>
                                                <li><input type="radio"> 보통 사람들보다 꽤 빨리 먹는 편이다.</li>
                                                <li><input type="radio"> 보통 사람들보다 빨리 먹는 편이다.</li>
                                                <li><input type="radio"> 보통 사람들과 비슷한 속도로 먹는다.</li>
                                                <li><input type="radio"> 보통 사람들보다 조금 느린 편이다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>
                                            <p>체중조절을 위해 설사약을 복용한다.</p>
                                            <ul>
                                                <li><input type="radio"> 전혀 사용하지 않는다.</li>
                                                <li><input type="radio"> 거의 사용하지 않는다.</li>
                                                <li><input type="radio"> 가끔 사용한다.</li>
                                                <li><input type="radio"> 자주 사용한다.</li>
                                                <li><input type="radio"> 매우 자주 사용한다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>
                                            <p>폭식을 한 직후 내 느낌은?</p>
                                            <ul>
                                                <li><input type="radio"> 너무 뚱뚱하고 부풀어서 참을 수 없을 정도다.</li>
                                                <li><input type="radio"> 극도로 뚱뚱해진다는 느낌이다.</li>
                                                <li><input type="radio"> 뚱뚱하다는 느낌이다.</li>
                                                <li><input type="radio"> 약간 뚱뚱해진다는 느낌이다.</li>
                                                <li><input type="radio"> 내 몸이 어떻든 괜찮다고 느낀다. / 폭식을 하지 않는다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>
                                            <p>다른 여자들과 비교해서 얼마나 먹을 것인지 조절할 수 있을 것 같은 능력은?</p>
                                            <ul>
                                                <li><input type="radio"> 비슷하거나 더 낫다.</li>
                                                <li><input type="radio"> 못한 편이다.</li>
                                                <li><input type="radio"> 못하다.</li>
                                                <li><input type="radio"> 아주 못하다.</li>
                                                <li><input type="radio"> 형편없다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>
                                            <p>최근 3개월 동안 얼마나 자주 폭식을 했습니까? <br>(한동안 다이어트나 절식을 하다가 통제할 수 없을 만큼 마구 먹어대는 행동)</p>
                                            <ul>
                                                <li><input type="radio"> 한 달에 1회 혹은 하지 않음</li>
                                                <li><input type="radio"> 한 달에 2회 내지 3회</li>
                                                <li><input type="radio"> 일주일에 1회</li>
                                                <li><input type="radio"> 일주일에 2회</li>
                                                <li><input type="radio"> 일주일에 2회 이상</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>
                                            <p>나를 아는 사람들은 내가 많은 음식을 먹은 후에 얼마나 뚱뚱해지는 지를 보면 놀랄 것이다.</p>
                                            <ul>
                                                <li><input type="radio"> 분명히 그렇다.</li>
                                                <li><input type="radio"> 그렇다.</li>
                                                <li><input type="radio"> 그럴 것이다.</li>
                                                <li><input type="radio"> 그럴 수도 있다.</li>
                                                <li><input type="radio"> 그럴 리도 없고 나는 많은 음식을 먹지 않는다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>
                                            <p>체중조절을 위해 이뇨제를 복용한다.</p>
                                            <ul>
                                                <li><input type="radio"> 일주일에 3회 혹은 그 이상</li>
                                                <li><input type="radio"> 일주일에 1회 내지 2회</li>
                                                <li><input type="radio"> 한 달에 2회 내지 3회</li>
                                                <li><input type="radio"> 한 달에 1회</li>
                                                <li><input type="radio"> 전혀 복용하지 않는다.</li>
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
                            <dt>88 ~120점</dt>
                            <dd>폭식 행동의 경향성 있음</dd>
                            <dt>121점 이상</dt>
                            <dd>폭식 장애의 진단과 치료가 필요함</dd>
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