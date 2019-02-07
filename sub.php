<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <div class="page-header">
        <div class="container">
            <h3>마음과마음 소개</h3>
            <p>마음과 마음이 지친 분들께 위로가 되고자합니다.</p>
            <nav class="office-list">
                <ul>
                    <li><a href="/office/ilsan.php">일산 <small>ILSAN</small></a></li>
                    <li><a href="/office/guro.php">구로 <small>GURO</small></a></li>
                    <li><a href="/office/suji.php">용인수지 <small>YONGIN-SUJI</small></a></li>
                    <li><a href="/office/ansan.php">시흥안산 <small>SIHEUNG-ANSAN</small></a></li>
                    <li><a href="/office/dongdaemun.php">동대문 <small>DONGDAEMUN</small></a></li>
                    <li><a href="/office/shinshon.php">신촌홍대 <small>SHINCHON-HONGDAE</small></a></li>
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
        <section class="">
            <div class="container">
                <div class="section-header">
                    <h4>마음브랜드</h4>
                    <p>마음과 마음 일산점은 행복한 마음을 선물합니다.</p>
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
                                        <td>나는 하루 중 기분이 가장 좋은 때는 아침이다.	</td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                        <td><input type="radio"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="total">
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-again" role="button">다시하기</a>
                                                <a href="#" class="btn btn-sum" role="button">점수 합하기</a>
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
                        
                        <br><br>
                        
                        <table class="table default-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                    <th>토</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>오전</td>
                                    <td>송형석</td>
                                    <td>송형석</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>송형석</td>
                                    <td>송형석</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br>
                    
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
                    
                    <br><br>
                    
                    <div class="gallery-list">
                        <ul class="row">
                            <li class="col-4">
                                <figure>
                                    <img src="/comm/img/sub/img_gallery01.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="details">요양원/복지시설 방문진료봉사</div>
                            </li>
                            <li class="col-4">
                                <figure>
                                    <img src="/comm/img/sub/img_gallery02.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="details">요양원/복지시설 방문진료봉사</div>
                            </li>
                            <li class="col-4">
                                <figure>
                                    <img src="/comm/img/sub/img_gallery03.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="details">요양원/복지시설 방문진료봉사</div>
                            </li>
                        </ul>
                    </div>
                    
                    <br><br>
                    
                    <h5 class="sub-title">건강강좌</h5>
                    
                    <br><br>
                    
                    <ul class="dot-list">
                        <li>대상 : 기업체, 학교, 공공기관, 복지관, 주민센타, 문화센타 등 모든 단체</li>
                        <li>주제 : 성인정신건강, 청소년소아정신건강 에 관련된 모든 주제ㄴ</li>
                    </ul>
                    
                    <br><br>
                    
                    <ul class="check-list">
                        <li>우울증</li>
                        <li>대인공포증</li>
                        <li>공황장애</li>
                        <li>불면증</li>
                    </ul>
                </div>
            </div>
        </section>
        
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>