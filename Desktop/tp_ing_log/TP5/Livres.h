#ifndef Livres_h
#define Livres_h

#include "Volumes.h"
#include "boolean.h"

class Adherents;
class emprunte;

class Livres : public Volumes {

 public:
    boolean exite;

 public:

    Adherents *myAdherents;

    /**
     * @element-type emprunte
     */
    emprunte *myemprunte;
};

#endif // Livres_h
