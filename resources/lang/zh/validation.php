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

    'accepted'             => ':attribute 必须被接受。',
    'active_url'           => ':attribute 不是一个有效的URL。',
    'after'                => ':attribute 必须是在 :date 之后的日期。',
    'after_or_equal'       => ':attribute 必须是在 :date 之后或与 :date 相同的日期。',
    'alpha'                => ':attribute 只能包含字母。',
    'alpha_dash'           => ':attribute 可以包含字母、数字和短横线。',
    'alpha_num'            => ':attribute 只能包含字母和数字。',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须是在 :date 之前的日期。',
    'before_or_equal'      => ':attribute 必须是在 :date 之前或与 :date 相同的日期。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 和 :max 之间。',
        'file'    => ':attribute 必须在 :min 和 :max 千字节之间。',
        'string'  => ':attribute 必须在 :min 和 :max 字符之间。',
        'array'   => ':attribute 必须有 :min 到 :max 个项目。',
    ],
    'boolean'              => ':attribute 字段必须为 true 或 false。',
    'confirmed'            => ':attribute 确认不匹配。',
    'date'                 => ':attribute 不是一个有效的日期。',
    'date_format'          => ':attribute 不符合 :format 格式。',
    'different'            => ':attribute 和 :other 必须不同。',
    'digits'               => ':attribute 必须是 :digits 位数字。',
    'digits_between'       => ':attribute 必须在 :min 和 :max 位数字之间。',
    'dimensions'           => ':attribute 的图片尺寸无效。',
    'distinct'             => ':attribute 字段有重复值。',
    'email'                => ':attribute 必须是一个有效的电子邮件地址。',
    'exists'               => '所选的 :attribute 是无效的。',
    'file'                 => ':attribute 必须是一个文件。',
    'filled'               => ':attribute 字段必须有一个值。',
    'image'                => ':attribute 必须是一张图片。',
    'in'                   => '所选的 :attribute 是无效的。',
    'in_array'             => ':attribute 字段在 :other 中不存在。',
    'integer'              => ':attribute 必须是一个整数。',
    'ip'                   => ':attribute 必须是一个有效的IP地址。',
    'ipv4'                 => ':attribute 必须是一个有效的IPv4地址。',
    'ipv6'                 => ':attribute 必须是一个有效的IPv6地址。',
    'json'                 => ':attribute 必须是一个有效的JSON字符串。',
    'max'                  => [
        'numeric' => ':attribute 不能大于 :max。',
        'file'    => ':attribute 不能大于 :max 千字节。',
        'string'  => ':attribute 不能超过 :max 个字符。',
        'array'   => ':attribute 最多可以有 :max 个项目。',
    ],
    'mimes'                => ':attribute 必须是以下类型的文件: :values。',
    'mimetypes'            => ':attribute 必须是以下类型的文件: :values。',
    'min'                  => [
        'numeric' => ':attribute 至少为 :min。',
        'file'    => ':attribute 至少为 :min 千字节。',
        'string'  => ':attribute 至少为 :min 个字符。',
        'array'   => ':attribute 至少有 :min 个项目。',
    ],
    'not_in'               => '所选的 :attribute 是无效的。',
    'numeric'              => ':attribute 必须是一个数字。',
    'present'              => ':attribute 字段必须存在。',
    'regex'                => ':attribute 格式无效。',
    'required'             => ':attribute 字段是必需的。',
    'required_if'          => '当 :other 是 :value 时，:attribute 字段是必需的。',
    'required_unless'      => '除非 :other 在 :values 中，否则 :attribute 字段是必需的。',
    'required_with'        => '当 :values 存在时，:attribute 字段是必需的。',
    'required_with_all'    => '当 :values 存在时，:attribute 字段是必需的。',
    'required_without'     => '当 :values 不存在时，:attribute 字段是必需的。',
    'required_without_all' => '当没有一个 :values 存在时，:attribute 字段是必需的。',
    'same'                 => ':attribute 和 :other 必须相同。',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size。',
        'file'    => ':attribute 必须是 :size 千字节。',
        'string'  => ':attribute 必须是 :size 个字符。',
        'array'   => ':attribute 必须包含 :size 个项目。',
    ],
    'string'               => ':attribute 必须是一个字符串。',
    'timezone'             => ':attribute 必须是一个有效的时区。',
    'unique'               => ':attribute 已经被占用。',
    'uploaded'             => ':attribute 上传失败。',
    'url'                  => ':attribute 格式无效。',

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

    'user' => [
        'replacement_user_id' => [
            'required' => '请选择一个。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];