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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 状态监控过滤条件。
 *
 * @method string getName() 获取<p>过滤字段名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>过滤字段名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取<p>过滤值列表，最多 10 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置<p>过滤值列表，最多 10 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperatorType() 获取<p>操作符类型，可选；仅支持后端允许的类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorType(integer $OperatorType) 设置<p>操作符类型，可选；仅支持后端允许的类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CfwStatusMonitorFilter extends AbstractModel
{
    /**
     * @var string <p>过滤字段名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array <p>过滤值列表，最多 10 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var integer <p>操作符类型，可选；仅支持后端允许的类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorType;

    /**
     * @param string $Name <p>过滤字段名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values <p>过滤值列表，最多 10 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperatorType <p>操作符类型，可选；仅支持后端允许的类型。</p>
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

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }
    }
}
