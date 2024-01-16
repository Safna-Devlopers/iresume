<style>
    .box-animatin {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 1s ease-in-out forwards;
    }

    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(100%);
            transition: all 0.5s ease-out;
        }
        100% {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.8s ease-in;
        }
    }
</style>
