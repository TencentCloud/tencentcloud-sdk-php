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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于按指定字段过滤查询结果，例如按防护实例 ID、名称、状态等过滤。多个 Filter 之间为逻辑与（AND）关系；同一 Filter 的多个 Values 之间为逻辑或（OR）关系。
 *
 * @method string getName() 获取<p>需要过滤的字段名。</p>
 * @method void setName(string $Name) 设置<p>需要过滤的字段名。</p>
 * @method array getValues() 获取<p>对应字段的过滤值。</p>
 * @method void setValues(array $Values) 设置<p>对应字段的过滤值。</p>
 * @method boolean getFuzzy() 获取<p>是否启用模糊查询。</p>
 * @method void setFuzzy(boolean $Fuzzy) 设置<p>是否启用模糊查询。</p>
 */
class ProtectionFilter extends AbstractModel
{
    /**
     * @var string <p>需要过滤的字段名。</p>
     */
    public $Name;

    /**
     * @var array <p>对应字段的过滤值。</p>
     */
    public $Values;

    /**
     * @var boolean <p>是否启用模糊查询。</p>
     */
    public $Fuzzy;

    /**
     * @param string $Name <p>需要过滤的字段名。</p>
     * @param array $Values <p>对应字段的过滤值。</p>
     * @param boolean $Fuzzy <p>是否启用模糊查询。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
