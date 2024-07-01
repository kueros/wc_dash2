
LOCK TABLES `carrier_services` WRITE;
/*!40000 ALTER TABLE `carrier_services` DISABLE KEYS */;
INSERT INTO `carrier_services` VALUES (1,'2','1','callbackUrl','zeusintehgra','tipo','Activo',NULL,NULL),(2,'2','2','callbackUrl','El Puertito','tipo','Activo',NULL,NULL),(3,'2','3','callbackUrl','Ensalada','tipo','Activo',NULL,NULL);
/*!40000 ALTER TABLE `carrier_services` ENABLE KEYS */;
UNLOCK TABLES;


LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (2,'1','http://create_order','http://create_order_milo','http://rate','http://cancel_order','http://cancel_order_milo','http://logistica_inversa','http://download','shipping_id','key_shipping_id','path_log','2024-05-28 04:51:00','2024-06-30 02:14:00'),(3,'2','http://create_order','http://create_order_milo','http://rate','http://cancel_order','http://cancel_order_milo','http://logistica_inversa','http://download','shipping_id','key_shipping_id','path_log','2024-05-28 04:51:00','2024-06-29 20:38:46');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'omar','kdk','Activo','kdk@kdk.com',NULL,'$2y$12$riQleB9fHIUXUrwWRFkOp.bl7Qmu2JRRNup8UorSB7r29kvzgeJUW',NULL,'2024-06-17 21:54:17','2024-06-17 21:54:17'),(2,NULL,'omar','liberatto','Activo','omarliberatto1967@gmail.com',NULL,'$2y$12$wSFBa95mIx4kYbw/EZz8feCIVOo7mBDIR8hWLGKRsqRn4eFU.Cfgi',NULL,'2024-06-12 18:30:16','2024-06-12 18:30:16'),(3,NULL,'marcelo','liberatto','Activo','marcelo@gmail.com',NULL,'$2y$12$eHHISLHFfpmmtZ7uAzMBMOF4aNKeVql//zJ1.fp8zMtN7taoj7fbO',NULL,'2024-06-12 19:41:53','2024-06-12 19:41:53'),(4,NULL,'pepe','pepe','Activo','pepe@gmail.com',NULL,'$2y$12$lAJxWFHAojIncKqwK4cHWuSSMpif8tEZJ2rWtz9wLuKflvjsei3.6',NULL,'2024-06-12 20:09:15','2024-06-12 20:09:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `woo_logs` WRITE;
/*!40000 ALTER TABLE `woo_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `woo_logs` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `woo_msj` WRITE;
/*!40000 ALTER TABLE `woo_msj` DISABLE KEYS */;
/*!40000 ALTER TABLE `woo_msj` ENABLE KEYS */;
UNLOCK TABLES;


LOCK TABLES `woo_order` WRITE;
/*!40000 ALTER TABLE `woo_order` DISABLE KEYS */;
INSERT INTO `woo_order` VALUES (1,NULL,'5890546892991','1','5951','omar','OR0022601111','shipment_id','print_url','code','carokaser@gmail.com','SI',NULL,NULL),(2,NULL,'5890546892992','2','5952','eduardo','OR0022601112','shipment_id','print_url','code','carokaser@gmail.com','SI',NULL,NULL),(3,NULL,'5890546892993','3','5953','liliana','OR0022601113','shipment_id','print_url','code','carokaser@gmail.com','SI',NULL,NULL);
/*!40000 ALTER TABLE `woo_order` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `woo_order_data` WRITE;
/*!40000 ALTER TABLE `woo_order_data` DISABLE KEYS */;
INSERT INTO `woo_order_data` VALUES (1,'5890546892991','Gabriela','Coello','Las Chacras- La Paz',NULL,'+542995716996','Córdoba','5879','Córdoba','Argentina','Gabriela Coello','X','NOTAS: ',NULL,NULL),(2,'5890546892992','Juana','Pérez','Porto Alegre- Fiorito',NULL,'+542995716996','Fiorito','5879','Buenos Aires','Argentina','Juana Pérez','X','NOTAS: ',NULL,NULL),(3,'5890546892993','José','López','Ensenada- La Plata',NULL,'+542995716996','La Plata','5879','Corrientes','Argentina','José López','X','NOTAS: ',NULL,NULL);
/*!40000 ALTER TABLE `woo_order_data` ENABLE KEYS */;
UNLOCK TABLES;


LOCK TABLES `woo_order_product` WRITE;
/*!40000 ALTER TABLE `woo_order_product` DISABLE KEYS */;
INSERT INTO `woo_order_product` VALUES (1,'5890546892991','14939837464769','1','62000.00','2147483647','1','1','0','2','2'),(2,'5890546892991','14939837497537','1','62000.00','2147483647','1','1','0','3','2'),(3,'5890546892991','14939837464769','1','62000.00','2147483647','1','1','0','1','1'),(4,'5890546892991','14939837497537','1','62000.00','2147483647','1','1','0','1','3');
/*!40000 ALTER TABLE `woo_order_product` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `woo_ppt` WRITE;
/*!40000 ALTER TABLE `woo_ppt` DISABLE KEYS */;
/*!40000 ALTER TABLE `woo_ppt` ENABLE KEYS */;
UNLOCK TABLES;



LOCK TABLES `woo_tiendas` WRITE;
/*!40000 ALTER TABLE `woo_tiendas` DISABLE KEYS */;
INSERT INTO `woo_tiendas` VALUES (1,1,'Zeus Integra','30-17829928-2','1234','asdf','2024-05-28 00:15:35','2024-05-28 00:15:35','a1b','abc','abc2','abc3','zeusintegra.com','SI',NULL,'2024-06-29 03:55:54'),(2,2,'El puertito','32-17829928-2','qwer','qwer','2024-05-28 00:15:35','2024-05-28 00:15:35','a1d','asd','asd3','asd5','elpuertito.com','SI',NULL,'2024-06-29 03:30:29'),(16,16,'Zeus IntegraC',NULL,'asdfasdf','iei','2024-06-28 03:00:00','2024-06-28 03:00:00','4','asdf','ck','cs','lakdk.com','SI',NULL,'2024-06-30 01:20:38');
/*!40000 ALTER TABLE `woo_tiendas` ENABLE KEYS */;
UNLOCK TABLES;





LOCK TABLES `woo_usr_milos` WRITE;
/*!40000 ALTER TABLE `woo_usr_milos` DISABLE KEYS */;
INSERT INTO `woo_usr_milos` VALUES (1,'1','omar','$2y$12$wSFBa95mIx4kYbw/EZz8feCIVOo7mBDIR8hWLGKRsqRn4eFU.Cfgi','customer','omar','Liberatto','12341234','omar@kdk.com',NULL,'2024-06-30 02:14:56'),(4,'3','asdf','qwer','asdqwer','Carla','Sardi','01126423917','asdf@kdk.com','2024-06-28 21:25:56','2024-06-28 21:25:56');
/*!40000 ALTER TABLE `woo_usr_milos` ENABLE KEYS */;
UNLOCK TABLES;
