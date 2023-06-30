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

    'accepted' => ':attribute precisa ser aceito.',
    'accepted_if' => ':attribute deve ser aceito quando :other for :value.',
    'active_url' => ':attribute não é um URL válido.',
    'after' => ':attribute deve ser uma data após :date.',
    'after_or_equal' => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'o:attribute deve conter apenas letras.',
    'alpha_dash' => 'o :attribute deve conter apenas letras, números, hífens e sublinhados.',
    'alpha_num' => 'o :attribute deve conter apenas letras e números.',
    'array' => 'o :attribute deve ser um array.',
    'before' => ':attribute deve ser uma data anterior a :date.',
    'before_or_equal' => ':attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file' => ':attribute deve estar entre :min e :max kilobytes.',
        'string' => ':attribute deve estar entre :min e :max characters.',
        'array' => ':attribute deve ter entre :min e :max items.',
    ],
    'boolean' => ':attribute deve ser verdadeiro ou falso.',
    'confirmed' => ':attribute não corresponde.',
    'current_password' => 'senha incorreta.',
    'date' => ':attribute não é uma data válida.',
    'date_equals' => ':attribute deve ser uma data igual a :date.',
    'date_format' => ':attribute não corresponde ao formato :format.',
    'declined' => ':attribute deve ser recusado.',
    'declined_if' => ':attribute deve ser recusado quando :other for :value.',
    'different' => ':atributo e :other devem ser diferentes.',
    'digits' => ':attribute deve ser :digits digits.',
    'digits_between' => ':attribute deve estar entre :min e :max dígitos.',
    'dimensions' => ':attribute tem dimensões de imagem inválidas.',
    'distinct' => ':attribute tem um valor duplicado.',
    'email' => ':attribute deve ser um endereço de e-mail válido.',
    'ends_with' => ':attribute deve terminar com um dos seguintes: :values.',
    'enum' => 'selecionado :attribute é inválido.',
    'exists' => 'selecionado :attribute é inválido.',
    'file' => ':attribute deve ser um arquivo.',
    'filled' => ':attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'string' => 'O atributo :attribute deve ser maior que os caracteres :value.',
        'array' => 'O :attribute deve ter mais de :value items.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'file' => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um número inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'string' => 'O :attribute deve ser menor que :value caracteres.',
        'array' => 'O :attribute deve ter menos que :value items.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'file' => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser menor ou igual a :value characters.',
        'array' => 'O :attribute não deve ter mais que :value items.',
    ],
    'mac_address' => 'O :attribute deve ser um endereço MAC válido.',
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file' => 'O :attribute não deve ser maior que :max kilobytes.',
        'string' => 'O :attribute não deve ser maior que :max characters.',
        'array' => 'O :attribute não deve ter mais que :max items.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file' => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string' => 'O :attribute deve ter pelo menos :min characters.',
        'array' => 'O :attribute deve ter pelo menos :min items.',
    ],
    'multiple_of' => 'O :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O campo :attribute proíbe :other de estar presente.',
    'regex' => 'O formato :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'O campo :attribute deve conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same' => 'O atributo :attribute e :other devem corresponder.',
    'size' => [
        'numeric' => 'O :attribute deve ser :size.',
        'file' => 'O :attribute deve ser :size kilobytes.',
        'string' => 'O :attribute deve ter :size characters.',
        'array' => 'O :attribute deve conter :size items.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values.',
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser um fuso horário válido.',
    'unique' => 'O :attribute já foi usado.',
    'uploaded' => 'Falha ao carregar :attribute.',
    'url' => 'O :attribute deve ser um URL válido.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

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

    'attributes' => [
        'email' => 'e-mail',
        'cnpj' => 'CNPJ',
        'cpfcnpj' => 'CPF/CNPJ',
        'phone' => 'telefone',
        'sex' => 'sexo',
        'user_tp' => 'tipo de usuário',
        'zip_code' => 'CEP',
        'address' => 'endereço',
        'address_number' => 'número',
        'city' => 'cidade',
        'state' => 'estado',
        'type' => 'tipo',
        'password' => 'senha',
        'user_type_id' => 'tipo de usuário',
        'category_id' => 'categoria',
        'desc' => 'descrição',
        'price' => 'preço',
        'item_type_id' => 'tipo de aula',
        'country_id' => 'país',
        'type_discount' => 'tipo de desconto',
        'metaType' => 'tipo de meta',
        'pageType' => 'tipo de página',
        'file' => 'arquivo',
        'amount' => 'valor',
        'name' => 'nome',
        'state_id' => 'estado',
        'bank_code' => 'código do banco',
        'agencia' => 'agência',
        'conta_dv' => 'dígito da conta',
        'document_number' => 'número do documento',
        'legal_name' => 'nome legal',
        'condition' => 'condições',
        'phone_number' => 'telefone',
        'validation_delete' => 'senha',
        'active' => 'ativo',
        'limit' => 'limite',
        'initial' => 'inicial',
        'type_report' => 'tipo relatório',
        'terms' => 'termos',
        'type_id' => 'tipo',
        'telephone' => 'telefone',
    ],

];
