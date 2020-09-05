# Deprecations

This document lists all the planned deprecations.

## Handlers will be removed in 2.0

The `Handler` type and associated calls will be removed in version 2.0.

### Upgrade path

<<<<<<< HEAD
You should create your own implementation for handling OOP usage,
=======
You should either create your own implementation for handling OOP usage,
>>>>>>> 17e8ade58de7d6c2fad2169002629c2856f06f11
but it's recommended to move away from using an OOP-style wrapper entirely.

The reason for this is that it's too easy for implementation details (for
your application this is Flysystem) to leak into the application. The most
<<<<<<< HEAD
important part for Flysystem is that it improves portability and creates a
solid boundary between your application core and the infrastructure you use.
The OOP-style handling breaks this principle, therefore I want to stop
promoting it. 
=======
important part for Flysystem is that it improved portability and creates a
solid boundary between your application core and the infrastructure you use.
The OOP-style handling breaks this principle, therefor I want to stop
promoting it. 
>>>>>>> 17e8ade58de7d6c2fad2169002629c2856f06f11
