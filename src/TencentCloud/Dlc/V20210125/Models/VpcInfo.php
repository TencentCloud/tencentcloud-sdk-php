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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vpc信息
 *
 * @method string getVpcId() 获取vpc Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcCidrBlock() 获取vpc子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置vpc子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessGroupId() 获取权限组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string vpc Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string vpc子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcCidrBlock;

    /**
     * @var integer 规则Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 权限组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessGroupId;

    /**
     * @param string $VpcId vpc Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcCidrBlock vpc子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessGroupId 权限组Id
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }
    }
}
