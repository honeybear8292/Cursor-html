<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>온라인 명함</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="bg-gray-800 rounded-2xl shadow-lg p-8 flex flex-col md:flex-row items-center gap-8 max-w-3xl w-full">
        <!-- 프로필 이미지 -->
        <div class="flex-shrink-0">
            <div class="w-56 h-56 rounded-full border-8 border-gray-700 overflow-hidden shadow-lg">
                <img src="https://via.placeholder.com/300x300.png?text=Profile" alt="프로필 사진" class="object-cover w-full h-full">
            </div>
        </div>
        <!-- 정보 영역 -->
        <div class="flex-1 text-white">
            <div class="mb-2">
                <span class="text-blue-400 font-semibold text-xl">Prompt Engineer</span>
            </div>
            <div class="mb-2">
                <span class="font-extrabold text-4xl">Suh Seungwan</span>
            </div>
            <div class="mb-4 text-lg font-semibold">
                서승완 ・ 徐承完 ・ ソ・スンワン
            </div>
            <div class="mb-6 text-gray-300 text-sm">
                유메타릴(주) 대표이사 ・ 세종사이버대학교 인공지능학과 겸임교수
            </div>
            <!-- 소셜 아이콘 -->
            <div class="flex gap-4 mt-4">
                <a href="#" class="bg-yellow-400 rounded-full w-10 h-10 flex items-center justify-center text-white text-xl font-bold">k</a>
                <a href="#" class="bg-blue-600 rounded-full w-10 h-10 flex items-center justify-center"><svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm15.5 10.268h-3v-4.604c0-1.099-.021-2.513-1.532-2.513-1.532 0-1.767 1.197-1.767 2.435v4.682h-3v-9h2.881v1.233h.041c.401-.761 1.379-1.563 2.841-1.563 3.039 0 3.6 2.001 3.6 4.601v4.729z"/></svg></a>
                <a href="#" class="bg-blue-500 rounded-full w-10 h-10 flex items-center justify-center"><svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.326v21.348c0 .733.592 1.326 1.325 1.326h11.495v-9.294h-3.128v-3.622h3.128v-2.672c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.326v-21.349c0-.734-.593-1.326-1.324-1.326z"/></svg></a>
                <a href="#" class="bg-pink-500 rounded-full w-10 h-10 flex items-center justify-center"><svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.069 1.646.069 4.851s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608-.058-1.266-.069-1.646-.069-4.85s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608.974-.974 2.241-1.246 3.608-1.308 1.266-.058 1.646-.069 4.85-.069zm0-2.163c-3.259 0-3.667.012-4.947.07-1.276.058-2.687.334-3.678 1.325-.991.991-1.267 2.402-1.325 3.678-.058 1.28-.07 1.688-.07 4.947s.012 3.667.07 4.947c.058 1.276.334 2.687 1.325 3.678.991.991 2.402 1.267 3.678 1.325 1.28.058 1.688.07 4.947.07s3.667-.012 4.947-.07c1.276-.058 2.687-.334 3.678-1.325.991-.991 1.267-2.402 1.325-3.678.058-1.28.07-1.688.07-4.947s-.012-3.667-.07-4.947c-.058-1.276-.334-2.687-1.325-3.678-.991-.991-2.402-1.267-3.678-1.325-1.28-.058-1.688-.07-4.947-.07z"/><path d="M12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg></a>
                <a href="#" class="bg-black rounded-full w-10 h-10 flex items-center justify-center"><svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path d="M22.162 5.656c-.793.352-1.645.59-2.538.697.913-.547 1.615-1.414 1.946-2.448-.855.508-1.803.877-2.81 1.077-.807-.861-1.958-1.399-3.232-1.399-2.444 0-4.426 1.982-4.426 4.426 0 .347.039.684.114 1.008-3.68-.185-6.943-1.948-9.127-4.627-.382.656-.601 1.417-.601 2.231 0 1.539.783 2.897 1.977 3.693-.727-.023-1.411-.223-2.01-.556v.056c0 2.151 1.53 3.946 3.563 4.354-.372.101-.764.155-1.168.155-.286 0-.561-.028-.831-.08.562 1.753 2.191 3.029 4.124 3.062-1.51 1.184-3.417 1.89-5.491 1.89-.357 0-.709-.021-1.056-.062 1.957 1.255 4.285 1.989 6.789 1.989 8.146 0 12.606-6.748 12.606-12.606 0-.192-.004-.384-.013-.575.866-.625 1.617-1.404 2.213-2.292z"/></svg></a>
            </div>
        </div>
    </div>
</body>
</html>
