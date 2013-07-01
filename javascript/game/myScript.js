function createTable()
	{
		//alert('hello');
		var rownum=document.getElementById('row').value;
		var dyTable='<table class="tabdeg">';
		var tbody='';
		for(var i=0;i<rownum;i++)
		{
			tbody +='<tr>';
			for(var j=0;j<3;j++)
			{
				tbody +='<td class="colcs">';
				  tbody += 'Cell ' + i + ',' + j;
				tbody +='</td>';
			}
			tbody +='</tr>';
		}
			dyTable +=tbody;
			dyTable +='</table>';
			//alert(dyTable+tbody);
			document.getElementById('tab').innerHTML=dyTable;

	}
