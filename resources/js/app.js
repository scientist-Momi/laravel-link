import './bootstrap';
import axios from 'axios';

document.querySelectorAll('.userlink').forEach(function(link) {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default click behavior

    var linkId = link.getAttribute('data-link-id');
    var linkUrl = link.getAttribute('href');

    axios.post('/visit/' + linkId, {
        link: linkUrl
    })
    .then(response => console.log('response: ', response))
    .catch(error => console.error('error: ', error));
  });
});
// $('.userlink').click(function(e){

//     var linkId = $(this).data('link-id');
//     var linkUrl = $(this).attr('href');

//     axios.post('/visit/' + linkId, {
//         link: linkUrl
//     })
//     .then(response => console.log('response: ', response))
//     .catch(error => console.error('error: ', error));
// });