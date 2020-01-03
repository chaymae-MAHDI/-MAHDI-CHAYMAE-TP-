#ifndef emprunte_h
#define emprunte_h

#include "date.h"

class Livres;
class Adherents;

class emprunte {

 public:

    virtual void periode_emprunt();

 public:
    date date_emprunt;
    date date_retour;

 public:

    /**
     * @element-type Livres
     */
    Livres *myLivres;

    /**
     * @element-type Adherents
     */
    Adherents *myAdherents;
};

#endif // emprunte_h
