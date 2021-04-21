<!DOCTYPE html>
<html>
   <head>
      <title>Stock Alerts</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Oxygen Mono' rel='stylesheet'>
      <link rel= "stylesheet" type= "text/css" href= "style/style.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   </head>
   <div id = "background">
      <canvas class="background" style="position: absolute; background-image: url(style/background.png);"></canvas>
      <div>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="http://cs.uml.edu/~alora1/capstoneuml-main/Capstone/home.php" style="width: 10%;">Stock Alerts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="http://cs.uml.edu/~alora1/capstoneuml-main/Capstone/login.php">Login</a>
                  <a class="nav-item nav-link active" href="http://cs.uml.edu/~alora1/capstoneuml-main/Capstone/user.php">Dashboard<span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link active" href="http://cs.uml.edu/~alora1/capstoneuml-main/Capstone/patchnotes.php">Patch Notes</a>
                  <a class="nav-item nav-link active" href="http://cs.uml.edu/~alora1/capstoneuml-main/Capstone/contact.php">Contact Us</a>
               </div>
            </div>
         </nav>
      </div>
   </div>
   <div id="Center" style="background-color: black; position: absolute;">
      <span id = "AF">Stock Alerts</span>
      <span id = "FA">Quick Information At Your Finger Tips</span>
   </div>
   <div class="tradingview-widget-container" style="position: absolute; left: 76.6%; top: 0%;">
      <div id="tradingview_7bd1d"></div>
      <div class="tradingview-widget-copyright">
         <a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank">
      </div>
      <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
      <script type="text/javascript">
         new TradingView.widget(
         {
         "width": 600,
         "height": 400,
         "symbol": "NASDAQ:AAPL",
         "interval": "D",
         "timezone": "Etc/UTC",
         "theme": "light",
         "style": "1",
         "locale": "en",
         "toolbar_bg": "#f1f3f6",
         "enable_publishing": false,
         "allow_symbol_change": true,
         "container_id": "tradingview_7bd1d"
         }
         );
      </script>
   </div>
   <!-- TradingView Widget END 
      <div id = "conversion" style="font-size:16px;font-family:sans-serif,Arial,Helvetica;width:248px; line-height:24px;border:1px solid #14181C;background-color:#FFFFFF; position: absolute;">
      <div style="background-color:#101214;height:24px; font-weight:bold;text-align:left;padding-top:3px; width:100%;"><span style="background-image:url(https://www.fxexchangerate.com/static/flag.webp); background-position: 0 -2064px;float:left; margin:4px 0 0 20px; width:20px;height:15px; background-repeat:no-repeat;"></span><a rel="nofollow" style="color:#FFFFFF;padding-left:5px;text-decoration:none;" href="https://usd.fxexchangerate.com">United States Dollar</a></div>
      <script type="text/javascript" src="https://w.fxexchangerate.com/converter.php?fm=USD&ft=EUR,GBP,JPY,AUD,CAD,CHF,CNY,HKD,DOP,INR,KHR,RON,ZWD,VND,&lg=en&am=1&ty=2"></script>
      </div> -->
   <!--  End of Currency Converter Script -  FxExchangeRate.com -->
   <!-- TradingView Widget BEGIN -->
   <div class="tradingview-widget-container" id="trio">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
         {
         "colorTheme": "light",
         "dateRange": "12M",
         "showChart": true,
         "locale": "en",
         "largeChartUrl": "",
         "isTransparent": false,
         "showSymbolLogo": true,
         "width": "375",
         "height": "500",
         "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
         "plotLineColorFalling": "rgba(33, 150, 243, 1)",
         "gridLineColor": "rgba(240, 243, 250, 1)",
         "scaleFontColor": "rgba(120, 123, 134, 1)",
         "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
         "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
         "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
         "tabs": [
           {
             "title": "Indices",
             "symbols": [
               {
                 "s": "FOREXCOM:SPXUSD",
                 "d": "S&P 500"
               },
               {
                 "s": "FOREXCOM:NSXUSD",
                 "d": "Nasdaq 100"
               },
               {
                 "s": "FOREXCOM:DJI",
                 "d": "Dow 30"
               },
               {
                 "s": "FOREXCOM:UKXGBP",
                 "d": "FTSE 100"
               }
             ],
             "originalTitle": "Indices"
           },
           {
             "title": "Commodities",
             "symbols": [
               {
                 "s": "CME_MINI:ES1!",
                 "d": "S&P 500"
               },
               {
                 "s": "CME:6E1!",
                 "d": "Euro"
               },
               {
                 "s": "COMEX:GC1!",
                 "d": "Gold"
               },
               {
                 "s": "NYMEX:CL1!",
                 "d": "Crude Oil"
               },
               {
                 "s": "NYMEX:NG1!",
                 "d": "Natural Gas"
               },
               {
                 "s": "CBOT:ZC1!",
                 "d": "Corn"
               }
             ],
             "originalTitle": "Commodities"
           },
           {
             "title": "Bonds",
             "symbols": [
               {
                 "s": "CME:GE1!",
                 "d": "Eurodollar"
               },
               {
                 "s": "CBOT:ZB1!",
                 "d": "T-Bond"
               },
               {
                 "s": "CBOT:UB1!",
                 "d": "Ultra T-Bond"
               },
               {
                 "s": "EUREX:FGBL1!",
                 "d": "Euro Bund"
               },
               {
                 "s": "EUREX:FBTP1!",
                 "d": "Euro BTP"
               },
               {
                 "s": "EUREX:FGBM1!",
                 "d": "Euro BOBL"
               }
             ],
             "originalTitle": "Bonds"
           },
           {
             "title": "Forex",
             "symbols": [
               {
                 "s": "FX:EURUSD"
               },
               {
                 "s": "FX:GBPUSD"
               },
               {
                 "s": "FX:USDJPY"
               },
               {
                 "s": "FX:USDCHF"
               },
               {
                 "s": "FX:AUDUSD"
               },
               {
                 "s": "FX:USDCAD"
               }
             ],
             "originalTitle": "Forex"
           }
         ]
         }
      </script>
   </div>
   </div>
   <script type="text/javascript">
      var particles = Particles.init({
        selector: '.background',
        color: '#2F4F4F',
        connectParticles: true
      });
      
   </script>
   </body>
</html>