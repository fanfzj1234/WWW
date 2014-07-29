function bodyLoad(){
var dateTime=new Date();
var hh=dateTime.getHours();//小时
var mm=dateTime.getMinutes();//分钟
var ss=dateTime.getSeconds();//秒钟

var yy=dateTime.getFullYear();//年份
var MM=dateTime.getMonth()+1; //月份-因为1月这个方法返回为0，所以加1
var dd=dateTime.getDate();//日数

var week=dateTime.getDay();//周(0~6,0表示星期日)
var days=[ '日 ', '一 ', '二 ', '三 ', '四 ', '五 ', '六 ',]

document.getElementById('date').innerHTML=yy+'年'+MM+'月'+dd+'日 '+""+'星期'+days[week]+""+hh+'时'+mm+'分'+ss+'秒' ;

setTimeout(bodyLoad,1000);
}