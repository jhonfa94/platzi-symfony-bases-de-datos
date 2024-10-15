# Listado de comandos

## Crear base de datos
```
    php bin/console doctrine:database:create
```

## Crear una entidad
```
    php bin/console make:entity
```
Luego de agregar la entidad y asignarle el nombre se procede a definir los campos

Posteriormente se procede a crear la migración. 

## Crear migraciones
```
    php bin/console make:migration
```
Luego de crear las migraciones de las entidades, se procede a sincronizar la migración con la base de datos

## Migrar la base de datos
```
    php bin/console doctrine:migrations:migrate
```

## Ver el detalle de las migraciones 
```
    php bin/console doctrine:migrations:list
```

## Dar de baja  a una migración
```
    php bin/console doctrine:migrations:excute 'DoctrineMigrations\Version20241012164217' --down
```

## Luego de Agregar las relaciones se debe agregar la migración
```
    php bin/console make:migration
```

## Migrar la base de datos
```
    php bin/console doctrine:migrations:migrate
```

## Generar datos falsos
Para  la generación de datos falsos se de utilizar el comando 
```
    php bin/console make:fixtures
```

Debido a que no se tiene instalado, solicita instalarlo
```
    composer require orm-fixtures --dev
```

## Comando para cargar los datos a las tablas
```
    php bin/console doctrine:fixtures:load 
```

## Creación de datos falsos
Para la creación de datos falsos se debe utilizar el factory, para ello se debe agregar el compomente
```
    composer require zenstruck/foundry --dev
```
Al instalar el paquete, podemos utilizar el factory, donde no solicitara donde queremos agregar el factory
```
    php bin/console make:factory
```
Podemos crear una factoria en un solo modelo, o tambien de forma general, es decir crea todos los factories de todas
las entidades que se encuentren allí disponibles. 

## Instalación del paquete de twig para las vistas
```
    composer requiere symfony/twig-pack
```

## Instalación del paquete para el manejo de dependencias del front
```
    composer requiere symfony/webpack-encore-bundle
```

## Instalación de la dependencia del front de bootstrap
```
    npm install bootstrap --save-dev
```
Luego de instalar la dependencia de **bootstrap** se debe instalar las dependencias hermanas, es decir todo lo que 
necesita
```
    npm install 
    npm run dev
```

## Instalación del componente para visualizar el status del proyecto
```
    composer require symfony/debug-pack
```

## Creación de un controlador para acceder a la vista
```
    php bin/console make:controller
```




```
```


