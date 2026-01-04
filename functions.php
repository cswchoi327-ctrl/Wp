<?php
/**
 * Template Name: 지원금 메인 페이지
 * Description: 지원금 정보를 표시하는 커스텀 템플릿
 */

get_header(); 

// 메인 URL 설정
$main_url = 'https://index1.jiwungum100.qzz.io';

// 탭 데이터
$tabs = [
    ['name' => '전국민 지원금', 'link' => 'https://index1.jiwungum100.qzz.io', 'active' => true],
    ['name' => '청년지원금', 'link' => 'https://index1.jiwungum100.qzz.io', 'active' => false],
    ['name' => '소상공인 지원금', 'link' => 'https://index1.jiwungum100.qzz.io', 'active' => false]
];

// 카드 데이터
$cards = [
    [
        'keyword' => '근로장려금',
        'amount' => '최대 330만원',
        'amountSub' => '연 1회 일시지급',
        'description' => '일하는 저소득층을 위한 근로소득 지원금',
        'target' => '근로소득 3천만원 미만 가구',
        'period' => '매년 5월',
        'featured' => true
    ],
    [
        'keyword' => '자녀장려금',
        'amount' => '최대 100만원',
        'amountSub' => '자녀 1명당 70만원',
        'description' => '저소득층 자녀양육비 부담 완화를 위한 지원금',
        'target' => '부부합산 소득 4천만원 미만',
        'period' => '매년 5월',
        'featured' => false
    ]
];

?>

<div class="support-main-wrapper">
    <div class="support-container">
        
        <!-- 탭 네비게이션 -->
        <div class="tab-wrapper">
            <div class="support-container">
                <nav class="tab-container">
                    <ul class="tabs">
                        <?php foreach ($tabs as $tab): ?>
                        <li class="tab-item">
                            <a class="tab-link <?php echo $tab['active'] ? 'active' : ''; ?>" 
                               href="<?php echo esc_url($tab['link']); ?>">
                                <?php echo esc_html($tab['name']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- 상단 인트로 -->
        <div class="intro-section">
            <span class="intro-badge">신청마감 D-3일</span>
            <p class="intro-sub">숨은 보험금 1분만에 찾기!</p>
            <h2 class="intro-title">숨은 지원금 찾기</h2>
        </div>

        <!-- 애드센스 광고 -->
        <?php if (function_exists('display_adsense_code')): ?>
            <?php display_adsense_code(); ?>
        <?php endif; ?>

        <!-- 정보 박스 -->
        <div class="info-box">
            <div class="info-box-header">
                <span class="info-box-icon">🏷️</span>
                <span class="info-box-title">신청 안하면 절대 못 받아요</span>
            </div>
            <div class="info-box-amount">1인 평균 127만원 환급</div>
            <p class="info-box-desc">대한민국 92%가 놓치고 있는 정부 지원금! 지금 확인하고 혜택 놓치지 마세요.</p>
        </div>

        <!-- 카드 그리드 -->
        <div class="info-card-grid">
            <?php 
            $card_count = 0;
            foreach ($cards as $card): 
                // 광고 삽입 위치 (1, 4, 7번째 카드 전)
                if (function_exists('display_inline_ad') && in_array($card_count, [0, 3, 6])):
                    display_inline_ad();
                endif;
                $card_count++;
            ?>
            
            <a class="info-card <?php echo $card['featured'] ? 'featured' : ''; ?>" 
               href="<?php echo esc_url($main_url); ?>">
                <div class="info-card-highlight">
                    <?php if ($card['featured']): ?>
                        <span class="info-card-badge">🔥 인기</span>
                    <?php endif; ?>
                    <div class="info-card-amount"><?php echo esc_html($card['amount']); ?></div>
                    <div class="info-card-amount-sub"><?php echo esc_html($card['amountSub']); ?></div>
                </div>
                <div class="info-card-content">
                    <h3 class="info-card-title"><?php echo esc_html($card['keyword']); ?></h3>
                    <p class="info-card-desc"><?php echo esc_html($card['description']); ?></p>
                    <div class="info-card-details">
                        <div class="info-card-row">
                            <span class="info-card-label">지원대상</span>
                            <span class="info-card-value"><?php echo esc_html($card['target']); ?></span>
                        </div>
                        <div class="info-card-row">
                            <span class="info-card-label">신청시기</span>
                            <span class="info-card-value"><?php echo esc_html($card['period']); ?></span>
                        </div>
                    </div>
                    <div class="info-card-btn">
                        지금 바로 신청하기 <span class="btn-arrow">→</span>
                    </div>
                </div>
            </a>
            
            <?php endforeach; ?>
        </div>

        <!-- 히어로 섹션 -->
        <div class="hero-section">
            <div class="hero-content">
                <span class="hero-urgent">🔥 신청마감 D-3일</span>
                <p class="hero-sub">숨은 지원금 1분만에 찾기!</p>
                <h2 class="hero-title">
                    나의 <span class="hero-highlight">숨은 지원금</span> 찾기
                </h2>
                <p class="hero-amount">신청자 <strong>1인 평균 127만원</strong> 수령</p>
                <a class="hero-cta" href="<?php echo esc_url($main_url); ?>">
                    30초만에 내 지원금 확인 <span class="cta-arrow">→</span>
                </a>
                <div class="hero-trust">
                    <span class="trust-item">✓ 무료 조회</span>
                    <span class="trust-item">✓ 30초 완료</span>
                    <span class="trust-item">✓ 개인정보 보호</span>
                </div>
                <div class="hero-notice">
                    <div class="notice-content">
                        <div class="notice-title">💡신청 안하면 못 받아요</div>
                        <p class="notice-desc">대한민국 92%가 놓치고 있는 정부 지원금, 지금 확인하고 혜택 놓치지 마세요!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
