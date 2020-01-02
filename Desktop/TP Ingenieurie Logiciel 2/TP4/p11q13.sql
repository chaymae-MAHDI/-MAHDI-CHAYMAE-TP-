create or replace trigger augsal
after update of sal on emp
for each row
when(old.sal<new.sal)
begin
dbms_output.put_line('l'ancien salaire est :'||:old.sal);
dbms_output.put_line('le nouveau salaire est :'||:new.sal);
end;