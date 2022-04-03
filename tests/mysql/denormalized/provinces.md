# Database denormalization - provinces

Getting something (like a city, person, address, so on) from a provice maybe humble, but a perfect starting point to test the database performance relating its normalization.

There are two obvious structures:

## The denormalized version

Stores the entity data in a single database table. The province name is writted in a table's field. For each entity written to the database, the provice name will be written in one entity's field as well. Several entities pertaining to the same province, so the same name will be written several times in the same amount of the pertaining entities. So, the same information is repeated several times, thus denormalization.

## The normalized version

Stores the entity data requires two tables. One for the entity's data but the province name. Another table will store only the province's names. So the province name will be never repeated. On the entity's table, though, we need store a field that will relate to the provinces. The expected way to do so is to store an integer that will matches the primary key's from province table. For all entities from the same province, they will have a field with the same integer representing the same province.

## Each's version pros and cons

For someone that knows the least possible for relational database theory, the choice for *normalized* version is the only feasible one. Is the minimum that makes a database be a *relational* one, and surelly is the most efficient way to store data, as storing a single integer takes much more less space than a whole name letters from a province, thus integer repetition data is aceptable, but not the province name. And also, at the point of view of the database algorithms, the integer manipulation is even more efficient than the province characters, thus an even another efficiency gain by choosing store integers.

By the other hand, if you need to retrieve much data from several entities that needs to include the province name, you may face performance issues that won't exists in the denormalized version. For each entry, the database may perform a *join*, an operation that is known to hurt performance. Maybe the database inteligence can cache the results from a join, as it can be know through foreign keys that the integer from entity that relates to a single province entry, so just one join for each province is required to allow print thousands entities with its province name with very few joins, a scenaria where we can save performance without hurting the normalization as well. Something thta os not possible if the database expectes that the data from provice changes while the results are given. Not know exactly what happens, but just a test will enlight something that helps fo answer such questions. This what is for this test proposal.
