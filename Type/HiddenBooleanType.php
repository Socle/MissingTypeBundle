<?php

namespace Socle\Bundle\MissingTypeBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Socle\Bundle\MissingTypeBundle\DataTransformer\BooleanToStringTransformer;

/**
 * Create hidden_boolean type in forms
 *
 * @author Soliman Cheyssial <soliman.cheyssial@sialis.fr>
 */
class HiddenBooleanType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->addViewTransformer(new BooleanToStringTransformer($options['data']));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'hidden';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hidden_boolean';
    }
}
