<center><TABLE BORDER=0 cellpadding=0 cellspacing=0><TR><TD>
<SCRIPT LANGUAGE="JavaScript">
    <!-- 
    function validate()
    {
        formObj = document.contact;
        if ((formObj.company_name.value == "") ||
            (formObj.company_address.value  == "") ||
            (formObj.name.value  == "") ||
            (formObj.tel.value  == "") ||
            (formObj.fax.value  == "") ||
            (formObj.email.value  == "")) 
        {
            alert("您沒有填寫必填的內容！！");
            return false;
        }
        else
            return true;
    }
</SCRIPT>

<TABLE BORDER=0 cellpadding=0 cellspacing=0><form action=apply.php method=post name=contact onSubmit="return validate()">
<TR><TD>
<DIV>
公司名稱<BR>
<input type='text' value='' size='50' maxlength='100' name='company_name' class='text1xs'><BR>

公司地址<BR>
<input type='text' value='' size='50' maxlength='100' name='company_address' class='text1xs'><BR>

姓名<BR>
<input type='text' value='' size='50' maxlength='20' name='name' class='text1xs'><BR>

電話<BR>
<input type='text' value='' size='50' maxlength='20' name='tel' class='text1xs'><BR>

Fax<BR>
<input type='text' value='' size='50' maxlength='20' name='fax' class='text1xs'><BR>

E-mail<BR>
<input type='text' value='' size='50' maxlength='100' name='email' class='text1xs'><BR>
</DIV>

<input type='submit' value='遞  交'><input type='reset' value='重  設'>
</TD></tR></FORM></tABLE>
</TD></TR></tABLE></center>