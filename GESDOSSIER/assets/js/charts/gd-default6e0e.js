"use strict";!function(NioApp,$){var profileBalance={labels:["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30"],dataUnit:"BTC",lineTension:.15,datasets:[{label:"Total Received",color:"#798bff",background:NioApp.hexRGB("#798bff",.3),data:[111,80,125,75,95,75,90,111,80,125,75,95,75,90,111,80,125,75,95,75,90,111,80,125,75,95,75,90,75,90]}]};function lineProfileBalance(selector,set_data){var $selector=$(selector||".profile-balance-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,tension:_get_data.lineTension,backgroundColor:_get_data.datasets[i].background,borderWidth:2,borderColor:_get_data.datasets[i].color,pointBorderColor:"transparent",pointBackgroundColor:"transparent",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:_get_data.datasets[i].color,pointBorderWidth:2,pointHoverRadius:3,pointHoverBorderWidth:2,pointRadius:3,pointHitRadius:3,data:_get_data.datasets[i].data});var chart=new Chart(selectCanvas,{type:"line",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:!1},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return!1},label:function(t,e){return e.datasets[t.datasetIndex].data[t.index]+" "+_get_data.dataUnit}},backgroundColor:"#eff6ff",titleFontSize:11,titleFontColor:"#6783b8",titleMarginBottom:4,bodyFontColor:"#9eaecf",bodyFontSize:10,bodySpacing:3,yPadding:8,xPadding:8,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!1}],xAxes:[{display:!1,ticks:{reverse:NioApp.State.isRTL}}]}}})})}NioApp.coms.docReady.push(function(){lineProfileBalance()});var orderOverview={labels:["19 Dec","20 Dec","21 Dec","22 Dec","23 Dec","24 Dec","25 Dec","26 Dec","27 Dec","28 Dec","29 Dec","30 Dec","31 Dec","01 Jan"],dataUnit:"USD",datasets:[{label:"Buy Orders",color:"#8feac5",data:[1740,2500,1820,1200,1600,2500,1820,1200,1700,1820,1400,1600,1930,2100]},{label:"Sell Orders",color:"#9cabff",data:[2420,1820,3e3,5e3,2450,1820,2700,5e3,2400,2600,4e3,2380,2120,1700]}]};function orderOverviewChart(selector,set_data){var $selector=$(selector||".order-overview-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,_d_legend=void 0!==_get_data.legend&&_get_data.legend,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,data:_get_data.datasets[i].data,backgroundColor:_get_data.datasets[i].color,borderWidth:2,borderColor:"transparent",hoverBorderColor:"transparent",borderSkipped:"bottom",barPercentage:.8,categoryPercentage:.6});var chart=new Chart(selectCanvas,{type:"bar",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:_get_data.legend||!1,rtl:NioApp.State.isRTL,labels:{boxWidth:30,padding:20,fontColor:"#6783b8"}},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return e.datasets[t[0].datasetIndex].label},label:function(t,e){return e.datasets[t.datasetIndex].data[t.index]+" "+_get_data.dataUnit}},backgroundColor:"#eff6ff",titleFontSize:13,titleFontColor:"#6783b8",titleMarginBottom:6,bodyFontColor:"#9eaecf",bodyFontSize:12,bodySpacing:4,yPadding:10,xPadding:10,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!0,stacked:_get_data.stacked||!1,position:NioApp.State.isRTL?"right":"left",ticks:{beginAtZero:!0,fontSize:11,fontColor:"#9eaecf",padding:10,callback:function(t,e,a){return"$ "+t},min:100,max:5e3,stepSize:1200},gridLines:{color:NioApp.hexRGB("#526484",.2),tickMarkLength:0,zeroLineColor:NioApp.hexRGB("#526484",.2)}}],xAxes:[{display:!0,stacked:_get_data.stacked||!1,ticks:{fontSize:9,fontColor:"#9eaecf",source:"auto",padding:10,reverse:NioApp.State.isRTL},gridLines:{color:"transparent",tickMarkLength:0,zeroLineColor:"transparent"}}]}}})})}NioApp.coms.docReady.push(function(){orderOverviewChart()});var userActivity={labels:["01 Nov","02 Nov","03 Nov","04 Nov","05 Nov","06 Nov","07 Nov","08 Nov","09 Nov","10 Nov","11 Nov","12 Nov","13 Nov","14 Nov","15 Nov","16 Nov","17 Nov","18 Nov","19 Nov","20 Nov","21 Nov"],dataUnit:"USD",stacked:!0,datasets:[{label:"Direct Join",color:"#9cabff",data:[110,80,125,55,95,75,90,110,80,125,55,95,75,90,110,80,125,55,95,75,90]},{label:"Referral Join",color:NioApp.hexRGB("#9cabff",.4),data:[125,55,95,75,90,110,80,125,55,95,75,90,110,80,125,55,95,75,90,75,90]}]};function userActivityChart(selector,set_data){var $selector=$(selector||".usera-activity-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,_d_legend=void 0!==_get_data.legend&&_get_data.legend,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,data:_get_data.datasets[i].data,backgroundColor:_get_data.datasets[i].color,borderWidth:2,borderColor:"transparent",hoverBorderColor:"transparent",borderSkipped:"bottom",barPercentage:.7,categoryPercentage:.7});var chart=new Chart(selectCanvas,{type:"bar",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:_get_data.legend||!1,rtl:NioApp.State.isRTL,labels:{boxWidth:30,padding:20,fontColor:"#6783b8"}},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return e.datasets[t[0].datasetIndex].label},label:function(t,e){return e.datasets[t.datasetIndex].data[t.index]+" "+_get_data.dataUnit}},backgroundColor:"#eff6ff",titleFontSize:13,titleFontColor:"#6783b8",titleMarginBottom:6,bodyFontColor:"#9eaecf",bodyFontSize:12,bodySpacing:4,yPadding:10,xPadding:10,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{beginAtZero:!0}}],xAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{reverse:NioApp.State.isRTL}}]}}})})}NioApp.coms.docReady.push(function(){userActivityChart()});var coinOverview={labels:["Bitcoin","Ethereum","NioCoin","Litecoin","Bitcoin"],stacked:!0,datasets:[{label:"Buy Orders",color:["#f98c45","#9cabff","#8feac5","#6b79c8","#79f1dc"],data:[1740,2500,1820,1200,1600,2500]},{label:"Sell Orders",color:[NioApp.hexRGB("#f98c45",.2),NioApp.hexRGB("#9cabff",.4),NioApp.hexRGB("#8feac5",.4),NioApp.hexRGB("#6b79c8",.4),NioApp.hexRGB("#79f1dc",.4)],data:[2420,1820,3e3,5e3,2450,1820]}]};function coinOverviewChart(selector,set_data){var $selector=$(selector||".coin-overview-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,_d_legend=void 0!==_get_data.legend&&_get_data.legend,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,data:_get_data.datasets[i].data,backgroundColor:_get_data.datasets[i].color,borderWidth:2,borderColor:"transparent",hoverBorderColor:"transparent",borderSkipped:"bottom",barThickness:"8",categoryPercentage:.5,barPercentage:1});var chart=new Chart(selectCanvas,{type:"horizontalBar",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:_get_data.legend||!1,rtl:NioApp.State.isRTL,labels:{boxWidth:30,padding:20,fontColor:"#6783b8"}},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return e.labels[t[0].index]},label:function(t,e){return e.datasets[t.datasetIndex].data[t.index]+" "+e.datasets[t.datasetIndex].label}},backgroundColor:"#eff6ff",titleFontSize:13,titleFontColor:"#6783b8",titleMarginBottom:6,bodyFontColor:"#9eaecf",bodyFontSize:12,bodySpacing:4,yPadding:10,xPadding:10,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{beginAtZero:!0,padding:0},gridLines:{color:NioApp.hexRGB("#526484",.2),tickMarkLength:0,zeroLineColor:NioApp.hexRGB("#526484",.2)}}],xAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{fontSize:9,fontColor:"#9eaecf",source:"auto",padding:0,reverse:NioApp.State.isRTL},gridLines:{color:"transparent",tickMarkLength:0,zeroLineColor:"transparent"}}]}}})})}NioApp.coms.docReady.push(function(){coinOverviewChart()});var salesRevenue={labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dataUnit:"USD",stacked:!0,datasets:[{label:"Sales Revenue",color:[NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),"#6576ff"],data:[11e3,8e3,12500,5500,9500,14299,11e3,8e3,12500,5500,9500,14299]}]},activeSubscription={labels:["Jan","Feb","Mar","Apr","May","Jun"],dataUnit:"USD",stacked:!0,datasets:[{label:"Active User",color:[NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),NioApp.hexRGB("#6576ff",.2),"#6576ff"],data:[8200,7800,9500,5500,9200,9690]}]},totalSubscription={labels:["Jan","Feb","Mar","Apr","May","Jun"],dataUnit:"USD",stacked:!0,datasets:[{label:"Active User",color:[NioApp.hexRGB("#aea1ff",.2),NioApp.hexRGB("#aea1ff",.2),NioApp.hexRGB("#aea1ff",.2),NioApp.hexRGB("#aea1ff",.2),NioApp.hexRGB("#aea1ff",.2),"#aea1ff"],data:[8200,7800,9500,5500,9200,9690]}]};function salesBarChart(selector,set_data){var $selector=$(selector||".sales-bar-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,_d_legend=void 0!==_get_data.legend&&_get_data.legend,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,data:_get_data.datasets[i].data,backgroundColor:_get_data.datasets[i].color,borderWidth:2,borderColor:"transparent",hoverBorderColor:"transparent",borderSkipped:"bottom",barPercentage:.7,categoryPercentage:.7});var chart=new Chart(selectCanvas,{type:"bar",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:_get_data.legend||!1,rtl:NioApp.State.isRTL,labels:{boxWidth:30,padding:20,fontColor:"#6783b8"}},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return!1},label:function(t,e){return e.labels[t.index]+" "+e.datasets[t.datasetIndex].data[t.index]}},backgroundColor:"#eff6ff",titleFontSize:11,titleFontColor:"#6783b8",titleMarginBottom:4,bodyFontColor:"#9eaecf",bodyFontSize:10,bodySpacing:3,yPadding:8,xPadding:8,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{beginAtZero:!0}}],xAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{reverse:NioApp.State.isRTL}}]}}})})}NioApp.coms.docReady.push(function(){salesBarChart()});var salesOverview={labels:["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30"],dataUnit:"BTC",lineTension:.1,datasets:[{label:"Sales Overview",color:"#798bff",background:NioApp.hexRGB("#798bff",.3),data:[8200,7800,9500,5500,9200,9690,8200,7800,9500,5500,9200,9690,8200,7800,9500,5500,9200,9690,8200,7800,9500,5500,9200,9690,8200,7800,9500,5500,9200,9690]}]};function lineSalesOverview(selector,set_data){var $selector=$(selector||".sales-overview-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,tension:_get_data.lineTension,backgroundColor:_get_data.datasets[i].background,borderWidth:2,borderColor:_get_data.datasets[i].color,pointBorderColor:"transparent",pointBackgroundColor:"transparent",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:_get_data.datasets[i].color,pointBorderWidth:2,pointHoverRadius:3,pointHoverBorderWidth:2,pointRadius:3,pointHitRadius:3,data:_get_data.datasets[i].data});var chart=new Chart(selectCanvas,{type:"line",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:_get_data.legend||!1,rtl:NioApp.State.isRTL,labels:{boxWidth:30,padding:20,fontColor:"#6783b8"}},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return e.labels[t[0].index]},label:function(t,e){return e.datasets[t.datasetIndex].data[t.index]+" "+_get_data.dataUnit}},backgroundColor:"#eff6ff",titleFontSize:13,titleFontColor:"#6783b8",titleMarginBottom:6,bodyFontColor:"#9eaecf",bodyFontSize:12,bodySpacing:4,yPadding:10,xPadding:10,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!0,stacked:_get_data.stacked||!1,position:NioApp.State.isRTL?"right":"left",ticks:{beginAtZero:!0,fontSize:11,fontColor:"#9eaecf",padding:10,callback:function(t,e,a){return"$ "+t},min:100,stepSize:3e3},gridLines:{color:NioApp.hexRGB("#526484",.2),tickMarkLength:0,zeroLineColor:NioApp.hexRGB("#526484",.2)}}],xAxes:[{display:!0,stacked:_get_data.stacked||!1,ticks:{fontSize:9,fontColor:"#9eaecf",source:"auto",padding:10,reverse:NioApp.State.isRTL},gridLines:{color:"transparent",tickMarkLength:0,zeroLineColor:"transparent"}}]}}})})}NioApp.coms.docReady.push(function(){lineSalesOverview()});var supportStatus={labels:["Bitcoin","Ethereum","NioCoin","Feature Request","Bug Fix"],stacked:!0,datasets:[{label:"Solved",color:["#f98c45","#9cabff","#8feac5","#6b79c8","#79f1dc"],data:[66,74,92,142,189]},{label:"Open",color:[NioApp.hexRGB("#f98c45",.4),NioApp.hexRGB("#9cabff",.4),NioApp.hexRGB("#8feac5",.4),NioApp.hexRGB("#6b79c8",.4),NioApp.hexRGB("#79f1dc",.4)],data:[66,74,92,32,26]},{label:"Pending",color:[NioApp.hexRGB("#f98c45",.2),NioApp.hexRGB("#9cabff",.2),NioApp.hexRGB("#8feac5",.2),NioApp.hexRGB("#6b79c8",.2),NioApp.hexRGB("#79f1dc",.2)],data:[66,74,92,21,9]}]};function supportStatusChart(selector,set_data){var $selector=$(selector||".support-status-chart");$selector.each(function(){for(var $self=$(this),_self_id=$self.attr("id"),_get_data=void 0===set_data?eval(_self_id):set_data,_d_legend=void 0!==_get_data.legend&&_get_data.legend,selectCanvas=document.getElementById(_self_id).getContext("2d"),chart_data=[],i=0;i<_get_data.datasets.length;i++)chart_data.push({label:_get_data.datasets[i].label,data:_get_data.datasets[i].data,backgroundColor:_get_data.datasets[i].color,borderWidth:2,borderColor:"transparent",hoverBorderColor:"transparent",borderSkipped:"bottom",barThickness:"8",categoryPercentage:.5,barPercentage:1});var chart=new Chart(selectCanvas,{type:"horizontalBar",data:{labels:_get_data.labels,datasets:chart_data},options:{legend:{display:_get_data.legend||!1,rtl:NioApp.State.isRTL,labels:{boxWidth:30,padding:20,fontColor:"#6783b8"}},maintainAspectRatio:!1,tooltips:{enabled:!0,rtl:NioApp.State.isRTL,callbacks:{title:function(t,e){return e.labels[t[0].index]},label:function(t,e){return e.datasets[t.datasetIndex].data[t.index]+" "+e.datasets[t.datasetIndex].label}},backgroundColor:"#eff6ff",titleFontSize:13,titleFontColor:"#6783b8",titleMarginBottom:6,bodyFontColor:"#9eaecf",bodyFontSize:12,bodySpacing:4,yPadding:10,xPadding:10,footerMarginTop:0,displayColors:!1},scales:{yAxes:[{display:!0,stacked:_get_data.stacked||!1,position:NioApp.State.isRTL?"right":"left",ticks:{beginAtZero:!0,padding:16,fontColor:"#8094ae"},gridLines:{color:"transparent",tickMarkLength:0,zeroLineColor:"transparent"}}],xAxes:[{display:!1,stacked:_get_data.stacked||!1,ticks:{fontSize:9,fontColor:"#9eaecf",source:"auto",padding:0,reverse:NioApp.State.isRTL},gridLines:{color:"transparent",tickMarkLength:0,zeroLineColor:"transparent"}}]}}})})}NioApp.coms.docReady.push(function(){supportStatusChart()})}(NioApp,jQuery);