let files = document.getElementsByClassName('file');

for (let i = 0; i < files.length; i++) {
    let icon = files[i].getElementsByTagName('i')[0];
    let url = files[i].href;

    if (url.endsWith(".doc") || url.endsWith(".docx") || url.endsWith(".docm")) {
        icon.classList.add('fa-file-word');
    } else if (url.endsWith(".ppt") || url.endsWith(".pptx") || url.endsWith(".pptm")) {
        icon.classList.add('fa-file-powerpoint');
    } else if (url.endsWith(".xls") || url.endsWith(".xlm") || url.endsWith(".xlsx") || url.endsWith(".xlsm")) {
        icon.classList.add('fa-file-excel');
    } else if (url.endsWith('.pdf')) {
        icon.classList.add('fa-file-pdf')
    } else {
        icon.classList.add('fa-file-lines')
    }


}