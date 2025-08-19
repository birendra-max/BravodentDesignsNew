
<script>
    // Load Tailwind configuration dynamically
    tailwind.config = {
        theme: {
            extend: {
                animation: {
                    grow: "grow 1.5s ease-in-out infinite",
                },
                keyframes: {
                    grow: {
                        "0%": {
                            transform: "scale(0)",
                            opacity: "0.5"
                        },
                        "50%": {
                            transform: "scale(1)",
                            opacity: "1"
                        },
                        "100%": {
                            transform: "scale(0)",
                            opacity: "0.5"
                        },
                    },
                },
            },
        },
    };
</script>

<section id="spinner" class="flex justify-center items-center bg-gradient-to-r from-blue-50 via-indigo-100 to-blue-50 h-[100vh]" aria-busy="true" aria-label="Loading content">
    <div class="flex justify-center items-center h-[100vh]">
        <img src="public/images/loader.gif" alt="Loading..." class="w-16 h-16" loading="eager" width="64" height="64">
    </div>
</section>