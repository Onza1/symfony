<?php
/**
 * Created by PhpStorm.
 * User: Olivier
 * Date: 15/06/2015
 * Time: 15:21
 */

namespace Eeckman\UserBundle\Form\Type;

use FOS\UserBundle\FOSUserBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('username');  // we use email as the username
    }
    public function getName()
    {
        return 'data_user_profile';
    }
}