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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络相关信息。（该数据结构已废弃，网络相关信息使用DBInstanceNetInfo）
 *
 * @method string getResourceId() 获取网络资源id，实例id或RO组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置网络资源id，实例id或RO组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceType() 获取资源类型，1-实例 2-RO组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(integer $ResourceType) 设置资源类型，1-实例 2-RO组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip6() 获取IPV6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip6(string $Vip6) 设置IPV6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取访问端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置访问端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcStatus() 获取网络状态，1-申请中，2-使用中，3-删除中，4-已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcStatus(integer $VpcStatus) 设置网络状态，1-申请中，2-使用中，3-删除中，4-已删除
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkAccess extends AbstractModel
{
    /**
     * @var string 网络资源id，实例id或RO组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer 资源类型，1-实例 2-RO组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var string IPV6地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip6;

    /**
     * @var integer 访问端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 网络状态，1-申请中，2-使用中，3-删除中，4-已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcStatus;

    /**
     * @param string $ResourceId 网络资源id，实例id或RO组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceType 资源类型，1-实例 2-RO组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip6 IPV6地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport 访问端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcStatus 网络状态，1-申请中，2-使用中，3-删除中，4-已删除
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcStatus",$param) and $param["VpcStatus"] !== null) {
            $this->VpcStatus = $param["VpcStatus"];
        }
    }
}
