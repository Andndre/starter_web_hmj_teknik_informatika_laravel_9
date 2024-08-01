<script>
    function timeDiff(dateEnd, dateStart) {
        const diff = dateEnd - dateStart;
        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);
        let text = '';
        if (days > 0) text += `${days} hari`;
        if (hours > 0) text += ` ${hours} jam`;
        if (minutes > 0) text += ` ${minutes} menit`;
        if (seconds > 0) text += ` ${seconds} detik`;
        text += ` lagi`;
        return text;
    }
    /**
     * @param {string} selector
     * @param {string} start
     * @param {string} end
     * @param {((status: string) => void ) | undefined} statusListener optional
    */
    function countDownAlert(selector, start, end, statusListener) {
        const startDate = new Date(start);
        const endDate = new Date(end);
        const element = $(selector);
        const classes = {
            'sudahBerakhir': 'alert-danger',
            'sedangBerlangsung': 'alert-info',
            'belumDimulai': 'alert-warning'
        };
        let days, hours, minutes, seconds;
        const interval = setInterval(() => {
            const currentDate = new Date();
            const status = currentDate > endDate
                ? 'sudahBerakhir'
                : currentDate < startDate
                ? 'belumDimulai'
                : 'sedangBerlangsung';
                element.attr('class', 'alert ' + classes[status]);

            // Base status listener
            switch (status) {
                case 'sudahBerakhir':
                    element.html('Sudah Berakhir, Sampai Jumpa Dikegiatan Berikutnya')
                    clearInterval(interval);
                    break;
                case 'belumDimulai': {
                    element.html(`Dimulai ${timeDiff(startDate, currentDate)}`);
                    break;
                    }
                case 'sedangBerlangsung':
                    element.html(`Berakhir ${timeDiff(endDate, currentDate)}`)
                    break;
            }
            // Custom status listener
            if (statusListener) {
                statusListener(status);
            }
        }, 1000);

        return status;
    }
</script>
