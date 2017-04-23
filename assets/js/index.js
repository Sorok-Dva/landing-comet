if (window.screen.availHeight <= 824)
{
    if (navigator.userAgent.indexOf("Chrome") !== -1)
    {
        $('#satellite').css('top', '-291px');
        $('#rocket').css('top', '-275px');
    }

    if (navigator.userAgent.indexOf("Firefox") !== -1)
    {
        $('#satellite').css('margin-top', '-16.7%');
        $('#rocket').css('margin-top', '-16.7%');
    }
}

if (window.screen.availHeight <= 728)
{
    if (navigator.userAgent.indexOf("Chrome") !== -1)
    {
        $('.bottom').css('display', 'none');
    }

    if (navigator.userAgent.indexOf("Firefox") !== -1)
    {
        $('.bottom').css('display', 'none');
    }
}

$('#freelancesActionButton').click(function () {
   window.location = 'freelances.html'
});