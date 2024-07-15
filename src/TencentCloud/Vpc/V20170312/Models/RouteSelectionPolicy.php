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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由表选择策略信息
 *
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method string getRouteTableId() 获取路由表ID。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表ID。
 * @method string getRouteTableName() 获取路由表名称。
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称。
 * @method string getInstanceType() 获取实例类型。如VPC
 * @method void setInstanceType(string $InstanceType) 设置实例类型。如VPC
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getSourceCidrBlock() 获取源端cidr。
 * @method void setSourceCidrBlock(string $SourceCidrBlock) 设置源端cidr。
 * @method string getDescription() 获取路由表描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置路由表描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceUin() 获取关联实例所属UIN（根账号）。
 * @method void setInstanceUin(string $InstanceUin) 设置关联实例所属UIN（根账号）。
 */
class RouteSelectionPolicy extends AbstractModel
{
    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var string 路由表ID。
     */
    public $RouteTableId;

    /**
     * @var string 路由表名称。
     */
    public $RouteTableName;

    /**
     * @var string 实例类型。如VPC
     */
    public $InstanceType;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 源端cidr。
     */
    public $SourceCidrBlock;

    /**
     * @var string 路由表描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 关联实例所属UIN（根账号）。
     */
    public $InstanceUin;

    /**
     * @param string $CcnId 云联网ID。
     * @param string $RouteTableId 路由表ID。
     * @param string $RouteTableName 路由表名称。
     * @param string $InstanceType 实例类型。如VPC
     * @param string $InstanceName 实例名称。
     * @param string $SourceCidrBlock 源端cidr。
     * @param string $Description 路由表描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID。
     * @param string $InstanceUin 关联实例所属UIN（根账号）。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SourceCidrBlock",$param) and $param["SourceCidrBlock"] !== null) {
            $this->SourceCidrBlock = $param["SourceCidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }
    }
}
