SELECT * FROM formulario;

Select f.nombres_fmr, mt.modalidad_titulacion_mtc from formulario f 
inner join modalidades_titulacion mt ON f.id_mtc = mt.id_mtc;