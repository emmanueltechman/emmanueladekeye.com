$(function(){$.plot($("#flot-bar-chart"),[{label:"bar",data:[[1,34],[2,25],[3,19],[4,34],[5,32],[6,44]]}],{series:{bars:{show:!0,barWidth:.4,fill:!0,fillColor:{colors:[{opacity:.8},{opacity:.8}]}}},xaxis:{tickDecimals:0},colors:["#1b55e3"],grid:{color:"#999999",hoverable:!0,clickable:!0,tickColor:"#D4D4D4",borderWidth:0},legend:{show:!1},tooltip:!0,tooltipOpts:{content:"x: %x, y: %y"}})});