  
    
	var img_url = "https://s2.coinmarketcap.com/static/img/coins/16x16/";
	var grapg_img_url = "https://s2.coinmarketcap.com/generated/sparklines/web/7d/usd/";

  
	
	$(document).ready(function(){	
	
				 document.getElementById('hideMe').style.visibility = "visible";
				
		// add default USD value from api to header and footer items
		        
		        $.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?",
				dataType:"json",
				success:function(data){
				
		        var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.USD.total_market_cap;
				var d = data.data.quotes.USD.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: $"+cap;
				document.getElementById('vol').innerHTML = "$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
			    
				// add default USD value from api to table
		        j=1;
	  	
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?structure=array?",
				dataType:"json",
				success:function(data){
				
					
						
				      $(data.data).each(function(index,value){
					
				nnn = img_url + value.id+'.png';
		       	mmm = grapg_img_url + value.id+'.png';	
					
				var nameString = value.name;
				var marketCap = value.quotes.USD.market_cap;
				var prc = value.quotes.USD.price;
				var volume_24 = value.quotes.USD.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"$"+marketCapString+
				"</th><th><a href='#'>"+"$"+prcString+
				"</a></th><th><a href='#'>"+"$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.USD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
				
				});	
					
				
				}
			
				});
				
		// Tokens Values
		
	     // add default Tokens USD value 
	     
	    
		
		 
		 
		$('ul.currency_sort li').click(function()
		{
		            
			var sort = $(this).text();
			
			if(sort.match('Top 100 Coins'))
			{
				location.reload();
			}
			
			else if(sort.match('Top 100 Tokens'))
			{
			
				
		       document.getElementById('headText').innerHTML = "Top 100 Tokens By Market Capitalization";
			    document.getElementById('hideMe').style.visibility = "hidden";
		       for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
		
				$.ajax({
				url:"https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?CMC_PRO_API_KEY=dc8e6e08-ed54-4b03-a97e-34b318a00e1b&cryptocurrency_type=tokens",
				
				dataType:"json",
				
				success:function(data){
				
				
				$(data.data).each(function(index,value){
				
					
				nnn = img_url +value.id +".png";
				mmm = grapg_img_url+ value.id+'.png';
		
						
				var nameString = value.name;
				var marketCap = value.quote.USD.market_cap;
				var prc = value.quote.USD.price;
				var volume_24 = value.quote.USD.volume_24h;
				var supply = value.circulating_supply;
				
				
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketRound = marketCap;
					var marketCapString = marketCap;
				}
				else
				{
				var marketRound = volume_24.toFixed(0);
				var marketCapString = marketRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"$"+marketCapString+
				"</th><th><a href='#'>"+"$"+prcString+
				"</a></th><th><a href='#'>"+"$"+volumeString+
				"</a></th><th>"+supplyString+" "+data.data.symbol+
				"</th><th>"+value.quote.USD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
			}
			
		});
		// defferent  currency  Coins
		
		$('ul.currency_list li').click(function()
		{
			
			var currency = $(this).text();
		// currency as USD
			if(currency.match('USD'))
			{
				location.reload();
			}
		
		// currency as JPY Coins
		
			if(currency.match('JPY'))
			{
				document.getElementById('display').innerHTML = currency;
		     
		       for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=JPY",
				dataType:"json",
				success:function(data){
				
		        var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.JPY.total_market_cap;
				var d = data.data.quotes.JPY.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "¥"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: ¥"+cap;
				document.getElementById('vol').innerHTML = "¥"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=JPY&structure=array",
				dataType:"json",
				success:function(data){
				
				$(data.data).each(function(index,value){
					
				
				nnn = img_url + value.id+".png";
				mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.JPY.market_cap;
				var prc = value.quotes.JPY.price;
				var volume_24 = value.quotes.JPY.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"¥"+marketCapString+
				"</th><th><a href='#'>"+"¥"+prcString+
				"</a></th><th><a href='#'>"+"¥"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.JPY.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
				
			       }
				});
	
			
		}
			
		// currency as DKK Coins
			
			else if(currency.match('DKK'))
			{
				document.getElementById('display').innerHTML = currency;
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=DKK",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.DKK.total_market_cap;
				var d = data.data.quotes.DKK.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "kr."+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: kr."+cap;
				document.getElementById('vol').innerHTML = "kr."+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=DKK&structure=array",
				dataType:"json",
				success:function(data){
				
				
				$(data.data).each(function(index,value){
				
				nnn = img_url + value.id+".png";
				mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.DKK.market_cap;
				var prc = value.quotes.DKK.price;
				var volume_24 = value.quotes.DKK.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"kr."+marketCapString+
				"</th><th><a href='#'>"+"kr."+prcString+
				"</a></th><th><a href='#'>"+"kr."+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.DKK.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
	
			
		}
			
		// currency as CAD coin
		
			else if(currency.match('CAD')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=CUD",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.USD.total_market_cap;
				var d = data.data.quotes.USD.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: $"+cap;
				document.getElementById('vol').innerHTML = "$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
			
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=CAD&structure=array",
				dataType:"json",
				success:function(data){
				
				
				$(data.data).each(function(index,value){
				
				nnn = img_url + value.id+".png";
				mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.CAD.market_cap;
				var prc = value.quotes.CAD.price;
				var volume_24 = value.quotes.CAD.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"$"+marketCapString+
				"</th><th><a href='#'>"+"$"+prcString+
				"</a></th><th><a href='#'>"+"$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.CAD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
				
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			// currency as NZD
		
			else if(currency.match('NZD')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=NZD",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.NZD.total_market_cap;
				var d = data.data.quotes.NZD.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: $"+cap;
				document.getElementById('vol').innerHTML = "$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=NZD",
				dataType:"json",
				success:function(data){
				
				
				$(data.data).each(function(index,value){
				
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.NZD.market_cap;
				var prc = value.quotes.NZD.price;
				var volume_24 = value.quotes.NZD.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"$"+marketCapString+
				"</th><th><a href='#'>"+"$"+prcString+
				"</a></th><th><a href='#'>"+"$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.NZD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
				}	
					 
				
			
				});
	
			
		}
			
			
			// currency as AUD
		
			else if(currency.match('AUD')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=AUD",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.AUD.total_market_cap;
				var d = data.data.quotes.AUD.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: $"+cap;
				document.getElementById('vol').innerHTML = "$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=AUD&structure=array",
				dataType:"json",
				success:function(data){
					
				$(data.data).each(function(index,value){
				
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.AUD.market_cap;
				var prc = value.quotes.AUD.price;
				var volume_24 = value.quotes.AUD.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"$"+marketCapString+
				"</th><th><a href='#'>"+"$"+prcString+
				"</a></th><th><a href='#'>"+"$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.AUD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			
			
			// currency as EUR
		
			else if(currency.match('EUR')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=EUR",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.EUR.total_market_cap;
				var d = data.data.quotes.EUR.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "€"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: €"+cap;
				document.getElementById('vol').innerHTML = "€"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=EUR&structure=array",
				dataType:"json",
				success:function(data){
					
				$(data.data).each(function(index,value){
				
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.EUR.market_cap;
				var prc = value.quotes.EUR.price;
				var volume_24 = value.quotes.EUR.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"€"+marketCapString+
				"</th><th><a href='#'>"+"€"+prcString+
				"</a></th><th><a href='#'>"+"€"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.EUR.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
				
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			
			// currency as BRL
		
			else if(currency.match('BRL')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=BRL",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.BRL.total_market_cap;
				var d = data.data.quotes.BRL.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "R$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: R$"+cap;
				document.getElementById('vol').innerHTML = "R$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=BRL&structure=array",
				dataType:"json",
				success:function(data){
				
				$(data.data).each(function(index,value){
			
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.BRL.market_cap;
				var prc = value.quotes.BRL.price;
				var volume_24 = value.quotes.BRL.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"R$"+marketCapString+
				"</th><th><a href='#'>"+"R$"+prcString+
				"</a></th><th><a href='#'>"+"R$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.BRL.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			
			// currency as SEK
		
			else if(currency.match('SEK')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=SEK",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.SEK.total_market_cap;
				var d = data.data.quotes.SEK.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "kr"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: kr"+cap;
				document.getElementById('vol').innerHTML = "kr"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=SEK&structure=array",
				dataType:"json",
				success:function(data){
				
				
				$(data.data).each(function(index,value){
			
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.SEK.market_cap;
				var prc = value.quotes.SEK.price;
				var volume_24 = value.quotes.SEK.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"kr"+marketCapString+
				"</th><th><a href='#'>"+"kr"+prcString+
				"</a></th><th><a href='#'>"+"kr"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.SEK.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			
			// currency as HKD
		
			else if(currency.match('HKD')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=HKD",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.HKD.total_market_cap;
				var d = data.data.quotes.HKD.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: $"+cap;
				document.getElementById('vol').innerHTML = "$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=HKD&structure=array",
				dataType:"json",
				success:function(data){
				
				$(data.data).each(function(index,value){
				
			
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.HKD.market_cap;
				var prc = value.quotes.HKD.price;
				var volume_24 = value.quotes.HKD.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"$"+marketCapString+
				"</th><th><a href='#'>"+"$"+prcString+
				"</a></th><th><a href='#'>"+"$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.HKD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			// currency as GBP
		
			else if(currency.match('GBP')){
		       document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=GBP",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.GBP.total_market_cap;
				var d = data.data.quotes.GBP.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "£"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: £"+cap;
				document.getElementById('vol').innerHTML = "£"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=GBP&structure=array",
				dataType:"json",
				success:function(data){
				
				$(data.data).each(function(index,value){
			
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.GBP.market_cap;
				var prc = value.quotes.GBP.price;
				var volume_24 = value.quotes.GBP.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"£"+marketCapString+
				"</th><th><a href='#'>"+"£"+prcString+
				"</a></th><th><a href='#'>"+"£"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.GBP.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
					 
				}
			
				});
	
			
		}
			
			
			// currency as SGD
		
			else if(currency.match('SGD')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=SGD",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.SGD.total_market_cap;
				var d = data.data.quotes.SGD.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "S$"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: S$"+cap;
				document.getElementById('vol').innerHTML = "S$"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=SGD&structure=array",
				dataType:"json",
				success:function(data){
			
				$(data.data).each(function(index,value){
			
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.SGD.market_cap;
				var prc = value.quotes.SGD.price;
				var volume_24 = value.quotes.SGD.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"S$"+marketCapString+
				"</th><th><a href='#'>"+"S$"+prcString+
				"</a></th><th><a href='#'>"+"S$"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.SGD.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
				}	
					 
				
			
				});
	
			
		}
			
			
			// currency as CHF
		
		else if(currency.match('CHF')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=CHF",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.CHF.total_market_cap;
				var d = data.data.quotes.CHF.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "Fr. "+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: Fr. "+cap;
				document.getElementById('vol').innerHTML = "Fr. "+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=CHF&structure=array",
				dataType:"json",
				success:function(data){
				
				$(data.data).each(function(index,value){
					
				j=j+1;
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.CHF.market_cap;
				var prc = value.quotes.CHF.price;
				var volume_24 = value.quotes.CHF.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"Fr. "+marketCapString+
				"</th><th><a href='#'>"+"Fr. "+prcString+
				"</a></th><th><a href='#'>"+"Fr. "+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.CHF.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
				}	
					 
				
			
				});
	
			
		}
			
			// currency as THB
			
			else if(currency.match('THB')){
		        document.getElementById('display').innerHTML = currency;
				
				for(var i = document.getElementById("tbody").rows.length; i > 0;i--)
				{
				document.getElementById("tbody").deleteRow(i -1);
				}
				var j = 1;
				
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/global/?convert=THB",
				dataType:"json",
				success:function(data){
				var a = document.getElementById('allCurrencies').innerHTML = data.data.active_cryptocurrencies;
				var b = document.getElementById('market').innerHTML = data.data.active_markets;
				var c = data.data.quotes.THB.total_market_cap;
				var d = data.data.quotes.THB.total_volume_24h;			
				var cap = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				var volume = d.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				document.getElementById('marketCap').innerHTML = "฿"+cap;
				document.getElementById('lastUpdate').innerHTML = "Total Market Cap: ฿"+cap;
				document.getElementById('vol').innerHTML = "฿"+volume;
				var e = document.getElementById('dominance').innerHTML =data.data.bitcoin_percentage_of_market_cap;	   
				}
				});
		
		
				$.ajax({
				url:"https://api.coinmarketcap.com/v2/ticker/?convert=THB&structure=array",
				dataType:"json",
				success:function(data){
				
				$(data.data).each(function(index,value){
					
				nnn = img_url + value.id+".png";
		        mmm = grapg_img_url + value.id+'.png';
		
				var nameString = value.name;
				var marketCap = value.quotes.THB.market_cap;
				var prc = value.quotes.THB.price;
				var volume_24 = value.quotes.THB.volume_24h;
				var supply = value.circulating_supply;
				
				if(prc==null)
				{
					var prcRound = prc;
					var prcString = prc;
				}
				else
				{					
				var prcRound = prc.toFixed(2);		
				var prcString =prcRound.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				if(volume_24==null)
				{
					var volume_24Round = volume_24;
					var volumeString =volume_24;
				}
				else
				{					
				var volume_24Round = volume_24.toFixed(0);
				var volumeString = volume_24Round.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				
				}
				
				
				if(marketCap==null)
				{
					var marketCapString = marketCap;
				}
				else
				{
				var marketCapString = marketCap.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				if(supply==null)
				{
					var supplyString = supply;
				}
				else
				{
				var supplyString = supply.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
				
				
				
				var record = "<tr><th>"+(index+j)+
				"</th><th>"+"<img src='"+nnn+"'/>"+" "+ nameString+
				"</th><th>"+"฿"+marketCapString+
				"</th><th><a href='#'>"+"฿"+prcString+
				"</a></th><th><a href='#'>"+"฿"+volumeString+
				"</a></th><th>"+supplyString+" "+value.symbol+
				"</th><th>"+value.quotes.THB.percent_change_24h+"%"+
				"</th><th>"+ "<img src='"+mmm+"' />"+
				"</th></tr>";	
				
				$('tbody').append(record);	
				
				
					
					
				});	
					
				}
				});
	
			
		}
			
			
			
		});
	       
		   
	             var updateTime = new Date();
				document.getElementById("time2").innerHTML = "Last updated: "+updateTime;
	});
	


