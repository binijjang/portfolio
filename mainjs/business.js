// 비즈니스
// 객체 배열 title = dt, sub = dd, imgsrc = img 
// memo[2].title
var memo = [
    {title: '영화 산업', 
    sub: 'CJ CGV는 영화관으로써 영화 업계의 다양한 이해관계자와 고객을 이어주는 매개체 역할을 하고 있습니다. CJ CGV는 다양한 이해관계자와 함께 적극 소통하고, 영화산업의 지속가능한 발전을 위한 상생 체계를 구축하여 고객에게 더 다양한 콘텐츠와 즐거움을 제공하겠습니다.',
    imgsrc: 'business_01.jpg'},
    {title: '공간의 차별화', 
    sub: 'CJ CGV는 끊임없는 진화와 혁신을 통해 극장 문화의 새로운 패러다임을 제시합니다. 고객의 라이프 스타일을 반영한 최초, 최고, 차별화된 공간에서 다양한 즐거움과 특별한 경험을 제공합니다. 넓고 편안한 프리미엄 좌석 상영관, 고객 맞춤형 서비스로 최고의 추억을 선사하겠습니다.',
    imgsrc: 'business_02.jpg'},
    {title: '콘텐츠 다양화', 
    sub: 'CJ CGV는 극장사업자로서 고객에게 다양한 장르의 영화를 선보이기 위해 노력합니다. 영화 외에도 다채로운 콘텐츠를 선보이는 예술·문화 콘텐츠 브랜드 "ICECON"을 운영하고 있습니다.다. ICECON을 통해 고객과의 상호 소통을 통해 다양하고 흥미로운 콘텐츠를 지속적으로 선보이겠습니다.',
    imgsrc: 'business_03.jpg'},
];

var ind = 0; // 인덱스 
var total = memo.length; // 배열 개수

function conchange(){ // 방향키 클릭 시 생성되는 태그
    $('.business li img').attr('src','./images/'+memo[ind].imgsrc).hide().fadeIn('fast');

    $('.business dt').text(memo[ind].title); // 태그 생성
    $('.business dd').text(memo[ind].sub);
    $('.business li span').text( (ind+1)+'/'+total); // 개수 리스트
}

  $('.business .next').click(function(e){ // 썸네일 버튼 클릭 시
      e.preventDefault();
      
      ind++; // 0 1 2 0 1 2 0 1 2
      conchange(); // 입력한 함수 호출 > 그대로 출력
      if(ind==2)ind=-1;
  });


