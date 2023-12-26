function validation()
{
    if(document.frm.name.value=="")
    {
        alert('plese fill name');
        document.frm.name.focus();
        return false;
    }

    if(document.frm.phone.value=="")
    {
        alert('plese fill phone');
        document.frm.phone.focus();
        return false;
    }

    if(document.frm.email.value=="")
    {
        alert('plese fill email');
        document.frm.email.focus();
        return false;
    }

    if(document.frm.year.value=="")
    {
        alert('plese fill year');
        document.frm.year.focus();
        return false;
    }

    if(document.frm.country.value=="")
    {
        alert('plese fill country');
        document.frm.country.focus();
        return false;
    }

    
}