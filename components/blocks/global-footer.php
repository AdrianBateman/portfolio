
<script src="./components/data/js/global.js" async defer></script>
<script>
if('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}
</script>
</body>

</html>
