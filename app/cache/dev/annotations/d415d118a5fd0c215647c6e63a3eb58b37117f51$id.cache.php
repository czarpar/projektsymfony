<?php return unserialize('a:9:{i:0;O:31:"Doctrine\\ORM\\Mapping\\ManyToMany":7:{s:12:"targetEntity";s:24:"FilyBundle\\Entity\\Actors";s:8:"mappedBy";N;s:10:"inversedBy";s:7:"Id_film";s:7:"cascade";N;s:5:"fetch";s:4:"LAZY";s:13:"orphanRemoval";b:0;s:7:"indexBy";N;}i:1;O:30:"Doctrine\\ORM\\Mapping\\JoinTable":4:{s:4:"name";s:6:"Actors";s:6:"schema";N;s:11:"joinColumns";a:0:{}s:18:"inverseJoinColumns";a:0:{}}i:2;O:31:"Doctrine\\ORM\\Mapping\\ManyToMany":7:{s:12:"targetEntity";s:24:"FilyBundle\\Entity\\Genres";s:8:"mappedBy";N;s:10:"inversedBy";s:7:"Id_film";s:7:"cascade";N;s:5:"fetch";s:4:"LAZY";s:13:"orphanRemoval";b:0;s:7:"indexBy";N;}i:3;O:30:"Doctrine\\ORM\\Mapping\\JoinTable":4:{s:4:"name";s:6:"Genres";s:6:"schema";N;s:11:"joinColumns";a:0:{}s:18:"inverseJoinColumns";a:0:{}}i:4;O:31:"Doctrine\\ORM\\Mapping\\ManyToMany":7:{s:12:"targetEntity";s:24:"FilyBundle\\Entity\\Review";s:8:"mappedBy";N;s:10:"inversedBy";s:7:"Id_film";s:7:"cascade";N;s:5:"fetch";s:4:"LAZY";s:13:"orphanRemoval";b:0;s:7:"indexBy";N;}i:5;O:30:"Doctrine\\ORM\\Mapping\\JoinTable":4:{s:4:"name";s:6:"Review";s:6:"schema";N;s:11:"joinColumns";a:0:{}s:18:"inverseJoinColumns";a:0:{}}i:6;O:27:"Doctrine\\ORM\\Mapping\\Column":9:{s:4:"name";s:2:"id";s:4:"type";s:7:"integer";s:6:"length";N;s:9:"precision";i:0;s:5:"scale";i:0;s:6:"unique";b:0;s:8:"nullable";b:0;s:7:"options";a:0:{}s:16:"columnDefinition";N;}i:7;O:23:"Doctrine\\ORM\\Mapping\\Id":0:{}i:8;O:35:"Doctrine\\ORM\\Mapping\\GeneratedValue":1:{s:8:"strategy";s:4:"AUTO";}}');