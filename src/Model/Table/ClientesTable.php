<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        /*$validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('cod_client')
            ->allowEmpty('cod_client');

        $validator
            ->scalar('cod_vended')
            ->allowEmpty('cod_vended');

        $validator
            ->scalar('cod_zona')
            ->allowEmpty('cod_zona');

        $validator
            ->scalar('cond_vta')
            ->allowEmpty('cond_vta');

        $validator
            ->scalar('razon_soci')
            ->allowEmpty('razon_soci');

        $validator
            ->scalar('domicilio')
            ->allowEmpty('domicilio');

        $validator
            ->scalar('tipo_doc')
            ->allowEmpty('tipo_doc');

        $validator
            ->scalar('cuit')
            ->allowEmpty('cuit');

        $validator
            ->scalar('telefono_1')
            ->allowEmpty('telefono_1');

        $validator
            ->scalar('telefono_2')
            ->allowEmpty('telefono_2');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('fecha_alta')
            ->allowEmpty('fecha_alta');

        $validator
            ->scalar('cupo_credi')
            ->allowEmpty('cupo_credi');

        $validator
            ->scalar('nom_com')
            ->allowEmpty('nom_com');

        $validator
            ->scalar('dir_com')
            ->allowEmpty('dir_com');

        $validator
            ->scalar('localidad')
            ->allowEmpty('localidad');

        $validator
            ->scalar('c_postal')
            ->allowEmpty('c_postal');

        $validator
            ->scalar('provincia')
            ->allowEmpty('provincia');

        return $validator;*/
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
