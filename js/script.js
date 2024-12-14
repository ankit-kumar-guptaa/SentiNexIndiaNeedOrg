
setTimeout(function() {
    window.location.href = "https://sentinexneedindiaorg.com"; // Change the URL to your the website destination
}, 5000);

// Add fade-out effect to the thank you message
document.querySelector('.thank-you-message').classList.add('fade');


let downloadQueue = [];
        let isDownloading = false;

        function startDownload(lineNumber) {
            // Add the corresponding PDF to the download queue
            const pdfFiles = [
                'documents/AOA.pdf', // Line 1
                'documents/Col.pdf', // Line 2
                'documents/Company pan cad.pdf', // Line 3
                'documents/E-Register - Main Page.pdf', // Line 4
                'documents/GST.pdf',  // Line 5
                'documents/MOA.pdf', // Line 6
                'documents/Pan.pdf', // Line 7
                'documents/Pf.pdf', // Line 8
                'documents/Quality Management.pdf', // Line 9
                'documents/Shop and  Establishment Registration',  // Line 10
                'documents/starupindia.pdf', // Line 11
                'documents/udyam.pdf', // Line 12

            ];
                downloadQueue.push(pdfFiles[lineNumber - 1]);

            // Start the download process if no other download is in progress
            if (!isDownloading) {
                downloadNextPDF();
            }
        }

        function downloadNextPDF() {
            if (downloadQueue.length > 0) {
                isDownloading = true;
                const pdfToDownload = downloadQueue.shift();
                const link = document.createElement('a');
                link.href = pdfToDownload;
                link.download = pdfToDownload;
                link.target = '_blank';
                link.click();

                // Update status text
                document.getElementById('status').innerText = `Downloading: ${pdfToDownload}`;

                // Wait for a brief moment before starting the next download
                setTimeout(() => {
                    isDownloading = false;
                    downloadNextPDF();
                }, 1000); // Adjust this timeout value to control download intervals
            } else {
                document.getElementById('status').innerText = 'All downloads are complete!';
            }
        }
