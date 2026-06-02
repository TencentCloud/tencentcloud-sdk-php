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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 匹配条件
 *
 * @method boolean getEnable() 获取<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取<p>匹配信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置<p>匹配信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompoundCondition extends AbstractModel
{
    /**
     * @var boolean <p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var array <p>匹配信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @param boolean $Enable <p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules <p>匹配信息</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new SimpleCondition();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
