#ifndef Bibliotheque_h
#define Bibliotheque_h

class Adherents;
class Documents;

class Bibliotheque {

 public:

    virtual void ajouter_adherent();

    virtual void supprimer_adherent();

    virtual void ajouter_document();

 public:

    /**
     * @element-type Adherents
     */
    Adherents *myAdherents;

    /**
     * @element-type Documents
     */
    Documents *myDocuments;
};

#endif // Bibliotheque_h
