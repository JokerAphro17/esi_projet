<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    // toutes les erreur en français 
    'accepted'             => ':attribute doit être accepté.',
    'active_url'           => ':attribute n\'est pas une URL valide.',
    'after'                => ':attribute doit être une date postérieure au :date.',
    'after_or_equal'       => ':attribute doit être une date postérieure ou égale au :date.',
    'alpha'                => ':attribute ne peut contenir que des lettres.',
    'alpha_dash'           => ':attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => ':attribute doit être un tableau.',
    'before'               => ':attribute doit être une date antérieure au :date.',
    'before_or_equal'      => ':attribute doit être une date antérieure ou égale au :date.',
    'between'              => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file'    => ':attribute doit être entre :min et :max kilo-octets.',
        'string'  => ':attribute doit être entre :min et :max caractères.',
        'array'   => ':attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => ':attribute doit être vrai ou faux.',
    'confirmed'            => ':attribute confirmation ne correspond pas.',
    'date'                 => ':attribute n\'est pas une date valide.',
    'date_format'          => ':attribute ne correspond pas au format :format.',
    'different'            => ':attribute et :other doivent être différents.',
    'digits'               => ':attribute doit avoir :digits chiffres.',
    'digits_between'       => ':attribute doit avoir entre :min et :max chiffres.',
    'dimensions'           => ':attribute a des dimensions d\'image invalides.',
    'distinct'             => ':attribute a une valeur en double.',
    'email'                => ':attribute doit être une adresse email valide.',
    'exists'               => ':attribute sélectionné est invalide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => ':attribute champ est obligatoire.',
    'image'                => ':attribute doit être une image.',
    'in'                   => ':attribute sélectionné est invalide.',
    'in_array'             => ':attribute champ n\'existe pas dans :other.',
    'integer'              => ':attribute doit être un entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'ipv4'                 => ':attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => ':attribute doit être une adresse IPv6 valide.',
    'json'                 => ':attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => ':attribute ne peut pas être supérieur à :max.',
        'file'    => ':attribute ne peut pas être supérieur à :max kilo-octets.',
        'string'  => ':attribute ne peut pas être supérieur à :max caractères.',
        'array'   => ':attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes'                => ':attribute doit être un fichier de type : :values.',
    'mimetypes'            => ':attribute doit être un fichier de type : :values.',
    'min'                  => [
        'numeric' => ':attribute doit être au moins :min.',
        'file'    => ':attribute doit être au moins :min kilo-octets.',
        'string'  => ':attribute doit être au moins :min caractères.',
        'array'   => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in'               => ':attribute sélectionné est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => ':attribute champ doit être présent.',
    'regex'                => ':attribute format est invalide.',
    'required'             => ':attribute champ est obligatoire.',
    'required_if'          => ':attribute champ est obligatoire quand :other est :value.',
    'required_unless'      => ':attribute champ est obligatoire sauf si :other est dans :values.',
    'required_with'        => ':attribute champ est obligatoire quand :values est présent.',
    'required_with_all'    => ':attribute champ est obligatoire quand :values est présent.',
    'required_without'     => ':attribute champ est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => ':attribute champ est obligatoire quand aucun de :values n\'est présent.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être :size.',
        'file'    => ':attribute doit être :size kilo-octets.',
        'string'  => ':attribute doit être :size caractères.',
        'array'   => ':attribute doit contenir :size éléments.',
    ],
    'string'               => ':attribute doit être une chaîne.',
    'timezone'             => ':attribute doit être une zone valide.',
    'unique'               => ':attribute a déjà été pris.',
    'uploaded'             => ':attribute n\'a pas pu être téléchargé.',
    'url'                  => ':attribute format est invalide.',
    'uuid'                => ':attribute doit être un UUID valide.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
