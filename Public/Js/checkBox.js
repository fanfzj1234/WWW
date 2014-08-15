/**
 * 复选框变化  全选按钮变化（用于下面复选框）
 * obj this.checked
 * firstCheckBox 全选的复选框id
 **/
function toChkSon(obj,firstCheckBox)
{
    if(obj==false) //当此复选框未选中 全选为未选
    {
        document.getElementById(firstCheckBox).checked=false;
        return ;
    }

    var chkInputs=getCheckBox(firstCheckBox); //获取所有复选框
    var j=0;
    for(var i=0;i<chkInputs.length;i++)
    {
        if(chkInputs[i].checked==obj)
            j++;
        else
            break;
    }

    if(j==chkInputs.length) //当所有复选框为同一状态时 赋值全选同一状态
        document.getElementById(firstCheckBox).checked=obj;
}

/**
 * 获取所有复选框
 **/
function getCheckBox(firstCheckBox)
{
    var inputs=document.getElementsByTagName("input");
    var chkInputs=new Array();
    var j=0;
    for(var i=0;i<inputs.length;i++)
    {
        if(inputs[i].type=="checkbox" && inputs[i].id!=firstCheckBox && inputs[i].id.indexOf(firstCheckBox)!=-1) //刷选出所有复选框
        {
            chkInputs[j]=inputs[i];
            j++;
        }
    }
    return chkInputs;
}

/**
 **获取选中复选框值 用；隔开
 **/
function getCheckBoValue(firstCheckBox){
    var chkInputs=getCheckValue(firstCheckBox); //获取选中所有复选框
    var values = new Array();
    if(chkInputs==null || chkInputs.length==0){
        alert("请选中一项");
    }else{
        for(var i=0;i<chkInputs.length;i++){
           /* values+=chkInputs[i].value+";";*/
            values[i]=chkInputs[i].value;
        }
    }
    return values;
}

/**
 * 选中复选框集合
 **/
function getCheckValue(firstCheckBox){
    var chkInputs=getCheckBox(firstCheckBox); //获取所有复选框
    var inputArray=new Array();
    if(chkInputs!=null && chkInputs.length>0){
        var j=0;
        for(var i=0;i<chkInputs.length;i++){
            if(chkInputs[i].checked){
                inputArray[j]=chkInputs[i];
                j++;
            }
        }
    }
    return inputArray;
}