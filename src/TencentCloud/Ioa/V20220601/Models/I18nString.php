<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * I18nString 国际化字符串（对齐云API平台已注册数据结构 ID:131745，用途：入参/出参） 使用方式：通常以 repeated I18nString 数组承载多语言，一条元素装一种语言。 出参示例：[{"Lang":"zh-CN","Value":"策略名"},{"Lang":"en-US","Value":"Policy Name"}] 入参约定：客户端至少提供 zh-CN 一条；后端建议在业务层调用 i18n.MustZhCn 校验。
 *
 * @method string getLang() 获取<p>语言枚举</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 英文</li></ul>
 * @method void setLang(string $Lang) 设置<p>语言枚举</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 英文</li></ul>
 * @method string getValue() 获取<p>这是一段业务字符串</p>
 * @method void setValue(string $Value) 设置<p>这是一段业务字符串</p>
 */
class I18nString extends AbstractModel
{
    /**
     * @var string <p>语言枚举</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 英文</li></ul>
     */
    public $Lang;

    /**
     * @var string <p>这是一段业务字符串</p>
     */
    public $Value;

    /**
     * @param string $Lang <p>语言枚举</p><p>枚举值：</p><ul><li>zh-CN： 简体中文</li><li>en-US： 英文</li></ul>
     * @param string $Value <p>这是一段业务字符串</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
