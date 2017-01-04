   
    $(document).ready(function(){	

    // build team members from ext json data
        
    var teammembersHTML='';
        
    //loop through data
        $.each(data,function(entry, entryHTML){     
        teammembersHTML+='<div class="teamMember"><div class="'
		+ entryHTML.class +'"><img src="'
		+ entryHTML.imgSrc +'" alt="'
		+ entryHTML.name +'" /><h2 class="teamMemberName hideChrome" style="margin-top:10px">'
		+ entryHTML.name +'<br/>'
		+ entryHTML.position +'</h2></div><div class="teamMemberBio" ><h2 class="teamMemberName" ><strong>'
		+ entryHTML.name +'<br/>'
		+ entryHTML.position +'</strong></h2><p class="teamMemberQual">'
		+ entryHTML.qualification +'</p><p>'
		+ entryHTML.biography +'</p><p class="gdcNo">'
		+ entryHTML.gdcnumber +'</p></div></div>';
        });
    
    // write to page
        $('#team-members').html(teammembersHTML);
		
    });

