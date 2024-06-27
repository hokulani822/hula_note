INSERT INTO gs_kadai_hula(id,name,email,age,naiyou,indate)VALUES(NULL,'test1','test1@test.jp',30,'test',sysdate());

INSERT INTO gs_kadai_hula(id,name,email,age,naiyou,indate)VALUES(:name, :email, :age, :naiyou, sysdate());

SELECT * FROM gs_kadai_hula;

SELECT id,name,indate FROM gs_kadai_hula;
SELECT * FROM gs_kadai_hula WHERE id >=1 AND id<=5;
SELECT * FROM gs_kadai_hula WHERE email LIKE '%test1%';

SELECT * FROM gs_kadai_hula oRDER BY indate DESC;
SELECT * FROM gs_kadai_hula oRDER BY indate ASC;
