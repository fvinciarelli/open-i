<?php

namespace Vinciarelli\OpenI;

/**
_ Valores para filtro por tipo de imagen                                                               
         _ CT Scan      = c
         _ Graphics     = g
         _ MRI          = m
         _ Microscopy   = mc
         _ PET          = p
         _ Photographs  = ph
         _ Ultrasound   = u
         _ X_ray        = x
_ Valores para el tipo de ranqueo:
         _ Newest       = r
         _ Oldest       = o
         _ Diagnosis    = d
         _ Etiology     = e
         _ Genetic      = g
         _ Outcome      = oc
         _ Prevention   = pr
         _ Prognosis    = pg
         _ Treatment    = t
_ Valores para el tipo de subtipo de base de datos
         _ Basic_Science      = b
         _ Clinical_Journals  = c
         _ Ethics             = e
         _ Systematic_Reviews = s
         _ Chest_X_rays       = x
_ Valores para la coleccion de busqueda
         _ PubMed_Central         = pmc
         _ Indiana_U_Chest_X_rays = iu
_ Valores por el campo al cual aplicar el termino de busqueda
         _ Titles     = t
         _ Mentions   = m
         _ Abstracts  = ab
         _ MeSH       = msh
         _ Captions   = c
         _ Authors    = a
_ Valores para las especialidad
         _ Behavioral_Sciences   = b
         _ Biochemistry          = bc
         _ Cancer                = c
         _ Cardiology            = ca
         _ Critical_Care         = cc
         _ Dentistry             = d
         _ Dermatology           = de
         _ Drug_Therapy          = dt
         _ Emergency_Medicine    = e
         _ Endocrinology         = en
         _ Environmental_Health  = eh
         _ Family_Practice       = f
         _ Gastroenterology      = g
         _ Genetics              = ge
         _ Geriatrics            = gr
         _ Gynecology_Obstetrics = gy
         _ Hematology            = h
         _ Immunology            = i
         _ Infectious_Diseases   = id
         _ Internal_Medicine     = im
         _ Nephrology            = n
         _ Neurology             = ne
         _ Nursing               = nu
         _ Ophthalmology         = o
         _ Orthopedics           = or
         _ Otolaryngology        = ot
         _ Pediatrics            = p
         _ Psychiatry            = py
         _ Pulmonary Diseases    = pu
         _ Rheumatology          = r
         _ Surgery               = s
         _ Toxicology            = t
         _ Urology               = u
         _ Vascular Diseases     = v
         _ Virology              = vi

*/    


interface OpenI_Constants {

	const url          = "http://openi.nlm.nih.gov/retrieve.php";

	//It
	const CT_Scan      = 'c';
	const Graphics     = 'g';
	const MRI          = 'm';
	const Microscopy   = 'mc';
	const PET          = 'p';
	const Photographs  = 'ph';
	const Ultrasound   = 'u';
	const X_ray        = 'x';

	//Rank
	const Newest       = 'r';
	const Oldest       = 'o';
	const Diagnosis    = 'd';
	const Etiology     = 'e';
	const Genetic      = 'g';
	const Outcome      = 'oc';
	const Prevention   = 'pr';
	const Prognosis    = 'pg';
	const Treatment    = 't';

	//SubSets
	const Basic_Science      = 'b';
	const Clinical_Journals  = 'c';
	const Ethics             = 'e';
	const Systematic_Reviews = 's';
	const Chest_X_rays       = 'x';

	//Colecciones 
	const PubMed_Central         = 'pmc';
	const Indiana_U_Chest_X_rays = 'iu';

	//Campos de Filtro
	const Titles     = 't';
	const Mentions   = 'm';
	const Abstracts  = 'ab';
	const MeSH       = 'msh';
	const Captions   = 'c';
	const Authors    = 'a';

	//Subespecialidades
	const Behavioral_Sciences   = 'b';
	const Biochemistry          = 'bc';
	const Cancer                = 'c';
	const Cardiology            = 'ca';
	const Dentistry             = 'd';
	const Dermatology           = 'de';
	const Drug_Therapy          = 'dt';
	const Emergency_Medicine    = 'e';
	const Endocrinology         = 'en';
	const Environmental_Health  = 'eh';
	const Family_Practice       = 'f';
	const Gastroenterology      = 'g';
	const Genetics              = 'ge';
	const Geriatrics            = 'gr';
	const Gynecology_Obstetrics = 'gy';
	const Hematology            = 'h';
	const Immunology            = 'i';
	const Infectious_Diseases   = 'id';
	const Internal_Medicine     = 'im';
	const Nephrology            = 'n';
	const Neurology             = 'ne';
	const Nursing               = 'nu';
	const Ophthalmology         = 'o';
	const Orthopedics           = 'or';
	const Otolaryngology        = 'ot';
	const Pediatrics            = 'p';
	const Psychiatry            = 'py';
	const Pulmonary_Diseases    = 'pu';
	const Rheumatology          = 'r';
	const Surgery               = 's';
	const Toxicology            = 't';
	const Urology               = 'u';
	const Vascular_Diseases     = 'v';
	const Virology              = 'vi';

}

?>

