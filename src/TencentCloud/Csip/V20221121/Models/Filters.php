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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * filter过滤条件
 *
 * @method string getName() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExactMatch() 获取模糊匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExactMatch(string $ExactMatch) 设置模糊匹配
注意：此字段可能返回 null，表示取不到有效值。
 */
class Filters extends AbstractModel
{
    /**
     * @var string 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var string 模糊匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExactMatch;

    /**
     * @param string $Name 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExactMatch 模糊匹配
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
