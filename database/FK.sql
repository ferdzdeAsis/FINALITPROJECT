ALTER TABLE tenant
ADD FOREIGN KEY buildingname(unit)
REFERENCES unit(building)
ON DELETE RESTRICT
ON UPDATE CASCADE;

select * from tenant;
select * from unit;

ALTER TABLE products
ADD FOREIGN KEY fk_vendor(vdr_id)
REFERENCES vendors(vdr_id)
ON DELETE NO ACTION
ON UPDATE CASCADE;