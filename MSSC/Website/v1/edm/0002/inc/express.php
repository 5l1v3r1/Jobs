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
            alert("�z�S����g���񪺤��e�I�I");
            return false;
        }
        else
            return true;
    }
</SCRIPT>

<TABLE BORDER=0 cellpadding=0 cellspacing=0><form action=apply.php method=post name=contact onSubmit="return validate()">
<TR><TD>
<DIV>
���q�W��<BR>
<input type='text' value='' size='50' maxlength='100' name='company_name' class='text1xs'><BR>

���q�a�}<BR>
<input type='text' value='' size='50' maxlength='100' name='company_address' class='text1xs'><BR>

�m�W<BR>
<input type='text' value='' size='50' maxlength='20' name='name' class='text1xs'><BR>

�q��<BR>
<input type='text' value='' size='50' maxlength='20' name='tel' class='text1xs'><BR>

Fax<BR>
<input type='text' value='' size='50' maxlength='20' name='fax' class='text1xs'><BR>

E-mail<BR>
<input type='text' value='' size='50' maxlength='100' name='email' class='text1xs'><BR>
</DIV>

<input type='submit' value='��  ��'><input type='reset' value='��  �]'>
</TD></tR></FORM></tABLE>
</TD></TR></tABLE></center>