select id_pembeli, sum(sale_amount) from sales_receipt 
where 
group by id_pembeli having sum(sale_amount)>=100 