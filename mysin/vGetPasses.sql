select  emp.EmpID, emp.Password, emp.Login , coalesce (fr.NIS,ld.NIS,ac.NIS,cl.NIS) AS  Name, 
case 
    when fr.NIS is not null 
        then 'FarRobber' 
    when ld.NIS is not null 
        then 'Loader'           -- this is awful
    when ac.NIS is not null
        then 'Accountant'
	when cl.NIS is not null
		then 'Client'
end AS 'Type'
from  Employee emp 
left join FarRobbers fr  
on fr.FRID = emp.EmpID
left join Loaders ld 
on ld.LID = emp.EmpID
left join Accountants ac
on ac.AID = emp.EmpID
left join Clientele cl
on cl.ClientID = emp.EmpID