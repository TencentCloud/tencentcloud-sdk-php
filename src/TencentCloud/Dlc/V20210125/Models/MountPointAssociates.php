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
 * 绑定融合桶信息
 *
 * @method string getBucketId() 获取桶Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketId(string $BucketId) 设置桶Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcCidrBlock() 获取子网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置子网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessGroupId() 获取权限组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessRuleId() 获取权限规则Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessRuleId(integer $AccessRuleId) 设置权限规则Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class MountPointAssociates extends AbstractModel
{
    /**
     * @var string 桶Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketId;

    /**
     * @var string vpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcCidrBlock;

    /**
     * @var string 权限组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessGroupId;

    /**
     * @var integer 权限规则Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessRuleId;

    /**
     * @param string $BucketId 桶Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcCidrBlock 子网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessGroupId 权限组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessRuleId 权限规则Id
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
        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }

        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            $this->AccessRuleId = $param["AccessRuleId"];
        }
    }
}
