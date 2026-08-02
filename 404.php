
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#F59E0B",
              primaryDark: "#D97706",
              primaryLight: "#FBBF24",
              textHeadings: "#F59E0B",
              background: "#FAF7F2",
              header: "#2E3C49",
              muted: "#737373",
            },

            boxShadow: {
              glow: "0 0 60px rgba(245,158,11,.35)",
            },
          },
        },
      };
    </script>
</head>
<body class="bg-gray-900">
   
<main class="grid min-h-full place-items-center bg-gray-900 px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <p class="text-base font-semibold text-indigo-400">404</p>
    <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-white sm:text-5xl">Page not found</h1>
    <p class="mt-6 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="/public/login.html" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Go back home</a>
      
    </div>
  </div>
</main>

</body>
</html>