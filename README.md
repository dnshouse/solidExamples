## SOLID Principles

### Single Responsibility
One class should have only one responsibility / reason to change.

### Open Closed Principle
A class should be open for extension but closed for modifications.
> We should not be forced to modify the class because of business logic changes.
> Instead we should be able to write just another implementation.

### Liskov Substitution
We should be able to substitute the parent with the child class.
> This means that the overridden methods should have the same signature, throwing the same type of exceptions and returning the same type of data.

### Interface Segregation
A client should not be forced to implement an interface that doesn't use
> Split the big interfaces to smaller chunks

### Dependency Inversion
Depend on abstractions instead of concretions
> A high level class should never depend on a low level class but on abstraction instead
