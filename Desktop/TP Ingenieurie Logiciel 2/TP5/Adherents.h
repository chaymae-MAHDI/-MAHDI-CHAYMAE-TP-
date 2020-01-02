#ifndef Adherents_h
#define Adherents_h

#include <vector>


class Livres;
class emprunte;
class Bibliotheque;

class Adherents {

 public:

    virtual void emprune_livre();

    virtual void rendre_livre();

 public:
    String prenom;
    String nom;

 public:

    /**
     * @element-type Livres
     */
    std::vector< Livres* > myLivres;

    /**
     * @element-type emprunte
     */
    emprunte *myemprunte;

    /**
     * @element-type Bibliotheque
     */
    Bibliotheque *myBibliotheque;
};

#endif // Adherents_h
