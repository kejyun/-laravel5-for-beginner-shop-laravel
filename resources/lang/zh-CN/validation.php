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
    
    'accepted'             => '必須接受 :attribute。',
    'active_url'           => ':attribute 並非一個有效的网址。',
    'after'                => ':attribute 必須要在 :date 之後。',
    'alpha'                => ':attribute 只能以字母組成。',
    'alpha_dash'           => ':attribute 只能以字母、整数及斜線組成。',
    'alpha_num'            => ':attribute 只能以字母及整数組成。',
    'array'                => ':attribute 必須為数组。',
    'before'               => ':attribute 必須要在 :date 之前。',
    'between'              => [
        'numeric' => ':attribute 必須介於 :min 至 :max 之間。',
        'file'    => ':attribute 必須介於 :min 至 :max kb 之間。 ',
        'string'  => ':attribute 必須介於 :min 至 :max 個字元之間。',
        'array'   => ':attribute: 必須有 :min - :max 個元素。',
    ],
    'boolean'              => ':attribute 必須為bool值。',
    'confirmed'            => ':attribute 確認欄位的輸入並不相符。',
    'date'                 => ':attribute 並非一個有效的日期。',
    'date_format'          => ':attribute 与 :format 格式不相符。',
    'different'            => ':attribute 与 :other 必須不同。',
    'digits'               => ':attribute 必須是 :digits 位數字。',
    'digits_between'       => ':attribute 必須介於 :min 至 :max 位數字。',
    'before_or_equal'      => ':attribute 必須小於 :date 。',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => ':attribute 已經存在。',
    'email'                => ':attribute 的格式無效。',
    'exists'               => '所選擇的 :attribute 選項無效。',
    'filled'               => ':attribute 不能留空。',
    'image'                => ':attribute 必須是一張图片。',
    'in'                   => '所選擇的 :attribute 選項無效。',
    'in_array'             => ':attribute 沒有在 :other 中。',
    'integer'              => ':attribute 必須是一個整數。',
    'ip'                   => ':attribute 必須是一個有效的 IP 地址。',
    'json'                 => ':attribute 必須是正确的 JSON 字符串。',
    'max'                  => [
        'numeric' => ':attribute 不能大於 :max。',
        'file'    => ':attribute 不能大於 :max kb。',
        'string'  => ':attribute 不能多於 :max 個字元。',
        'array'   => ':attribute 最多有 :max 個元素。',
    ],
    'mimes'                => ':attribute 必須為 :values 的檔案。',
    'min'                  => [
        'numeric' => ':attribute 不能小於 :min。',
        'file'    => ':attribute 不能小於 :min kb。',
        'string'  => ':attribute 不能小於 :min 個字元。',
        'array'   => ':attribute 至少有 :min 個元素。',
    ],
    'not_in'               => '所選擇的 :attribute 選項無效。',
    'numeric'              => ':attribute 必須為一個數字。',
    'present'              => ':attribute 必須存在。',
    'regex'                => ':attribute 的格式錯誤。',
    'required'             => ':attribute 不能留空。',
    'required_if'          => '當 :other 是 :value 時 :attribute 不能留空。',
    'required_unless'      => '當 :other 不是 :value 時 :attribute 不能留空。',
    'required_with'        => '當 :values 出現時 :attribute 不能留空。',
    'required_with_all'    => '當 :values 都出現時 :attribute 不能為空。',
    'required_without'     => '當 :values 留空時 :attribute field 不能留空。',
    'required_without_all' => '當 :values 都不出現時 :attribute 不能留空。',
    'same'                 => ':attribute 与 :other 必須相同。',
    'size'                 => [
        'numeric' => ':attribute 的大小必須是 :size。',
        'file'    => ':attribute 的大小必須是 :size kb。',
        'string'  => ':attribute 必須是 :size 個字元。',
        'array'   => ':attribute 必須是 :size 個元素。',
    ],
    'string'               => ':attribute 必須是一個字符串。',
    'timezone'             => ':attribute 必須是一個正确的時區值。',
    'unique'               => ':attribute 已經存在。',
    'url'                  => ':attribute 的格式錯誤。',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */
    'attributes'           => [
        // 會員
        'nickname'              => '昵称',
        'email'                 => '电子信箱',
        'password'              => '密码',
        'password_confirmation' => '确认密码',
        // 商品
        'name'            => '商品名称',
        'name_en'         => '商品英文名称',
        'introduction'    => '商品介绍',
        'introduction_en' => '商品英文介绍',
        'price'           => '商品价格',
        'remain_count'    => '商品剩余数量',
    ],
];