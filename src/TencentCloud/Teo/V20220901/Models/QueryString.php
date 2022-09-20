<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CacheKey中包含请求参数
 *
 * @method string getSwitch() 获取CacheKey是否由QueryString组成，取值有：
<li>on：是；</li>
<li>off：否。</li>
 * @method void setSwitch(string $Switch) 设置CacheKey是否由QueryString组成，取值有：
<li>on：是；</li>
<li>off：否。</li>
 * @method string getAction() 获取CacheKey使用QueryString的方式，取值有：
<li>includeCustom：使用部分url参数；</li>
<li>excludeCustom：排除部分url参数。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置CacheKey使用QueryString的方式，取值有：
<li>includeCustom：使用部分url参数；</li>
<li>excludeCustom：排除部分url参数。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValue() 获取使用/排除的url参数数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(array $Value) 设置使用/排除的url参数数组。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryString extends AbstractModel
{
    /**
     * @var string CacheKey是否由QueryString组成，取值有：
<li>on：是；</li>
<li>off：否。</li>
     */
    public $Switch;

    /**
     * @var string CacheKey使用QueryString的方式，取值有：
<li>includeCustom：使用部分url参数；</li>
<li>excludeCustom：排除部分url参数。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var array 使用/排除的url参数数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Switch CacheKey是否由QueryString组成，取值有：
<li>on：是；</li>
<li>off：否。</li>
     * @param string $Action CacheKey使用QueryString的方式，取值有：
<li>includeCustom：使用部分url参数；</li>
<li>excludeCustom：排除部分url参数。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Value 使用/排除的url参数数组。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
