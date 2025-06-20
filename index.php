<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사과 제품 소개</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-red-700 via-red-500 to-red-300 min-h-screen flex flex-col">
    <header class="py-6 bg-red-800 shadow-lg">
        <div class="container mx-auto flex items-center justify-between px-4">
            <h1 class="text-3xl font-bold text-white">프리미엄 사과</h1>
            <nav>
                <a href="#about" class="text-white hover:text-red-200 mx-2">소개</a>
                <a href="#features" class="text-white hover:text-red-200 mx-2">특징</a>
                <a href="#contact" class="text-white hover:text-red-200 mx-2">문의</a>
            </nav>
        </div>
    </header>
    <main class="flex-1 flex flex-col items-center justify-center text-center px-4">
        <section id="about" class="my-12">
            <img src="apple.png" alt="사과 이미지" class="mx-auto w-40 h-40 rounded-full shadow-2xl border-4 border-red-400 mb-6 bg-white" />
            <h2 class="text-4xl font-extrabold text-red-900 mb-4">신선한 사과, 건강한 하루</h2>
            <p class="text-lg text-red-800 mb-6">최고의 품질을 자랑하는 프리미엄 사과를 만나보세요. 자연의 달콤함과 아삭한 식감을 그대로 담았습니다.</p>
            <a href="#contact" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition">지금 문의하기</a>
        </section>
        <section id="features" class="my-12 w-full max-w-3xl">
            <h3 class="text-2xl font-bold text-red-800 mb-6">사과의 특징</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white bg-opacity-80 rounded-lg p-6 shadow-md">
                    <span class="text-4xl">🍎</span>
                    <h4 class="text-xl font-semibold text-red-700 mt-2 mb-1">신선함</h4>
                    <p class="text-red-700">수확 후 바로 배송하여 신선함을 유지합니다.</p>
                </div>
                <div class="bg-white bg-opacity-80 rounded-lg p-6 shadow-md">
                    <span class="text-4xl">🌱</span>
                    <h4 class="text-xl font-semibold text-red-700 mt-2 mb-1">친환경 재배</h4>
                    <p class="text-red-700">친환경 농법으로 재배하여 안심하고 드실 수 있습니다.</p>
                </div>
                <div class="bg-white bg-opacity-80 rounded-lg p-6 shadow-md">
                    <span class="text-4xl">💖</span>
                    <h4 class="text-xl font-semibold text-red-700 mt-2 mb-1">풍부한 영양</h4>
                    <p class="text-red-700">비타민과 미네랄이 풍부해 건강에 좋습니다.</p>
                </div>
            </div>
        </section>
        <section id="contact" class="my-12 w-full max-w-xl">
            <h3 class="text-2xl font-bold text-red-800 mb-4">문의하기</h3>
            <form class="bg-white bg-opacity-90 rounded-lg p-8 shadow-lg flex flex-col gap-4">
                <input type="text" placeholder="이름" class="border border-red-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400" required>
                <input type="email" placeholder="이메일" class="border border-red-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400" required>
                <textarea placeholder="문의 내용" class="border border-red-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400" rows="4" required></textarea>
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded transition">문의 보내기</button>
            </form>
        </section>
    </main>
    <footer class="py-4 bg-red-900 text-center text-white text-sm">
        &copy; <?php echo date('Y'); ?> 프리미엄 사과. 모든 권리 보유.
    </footer>
</body>
</html> 