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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用筛选条件
 *
 * @method string getName() 获取<p>筛选字段名。支持：SecurityGroupId、FwGroupId、IP（IP地址模糊搜索）、InstanceName（实例名称模糊搜索）、VpcId（VPC ID精确搜索）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>筛选字段名。支持：SecurityGroupId、FwGroupId、IP（IP地址模糊搜索）、InstanceName（实例名称模糊搜索）、VpcId（VPC ID精确搜索）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取<p>筛选值列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置<p>筛选值列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperatorType() 获取<p>操作类型。1=等于，7=in，9=模糊匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorType(integer $OperatorType) 设置<p>操作类型。1=等于，7=in，9=模糊匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CommonFilter extends AbstractModel
{
    /**
     * @var string <p>筛选字段名。支持：SecurityGroupId、FwGroupId、IP（IP地址模糊搜索）、InstanceName（实例名称模糊搜索）、VpcId（VPC ID精确搜索）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array <p>筛选值列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var integer <p>操作类型。1=等于，7=in，9=模糊匹配</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorType;

    /**
     * @param string $Name <p>筛选字段名。支持：SecurityGroupId、FwGroupId、IP（IP地址模糊搜索）、InstanceName（实例名称模糊搜索）、VpcId（VPC ID精确搜索）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values <p>筛选值列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperatorType <p>操作类型。1=等于，7=in，9=模糊匹配</p>
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
