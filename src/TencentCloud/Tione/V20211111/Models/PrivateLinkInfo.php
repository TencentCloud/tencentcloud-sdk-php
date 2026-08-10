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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有连接信息
 *
 * @method string getVpcId() 获取<p>私有连接所在的VPCID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>私有连接所在的VPCID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取<p>私有连接所在的子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>私有连接所在的子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerHttpAddr() 获取<p>HTTP内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpAddr(array $InnerHttpAddr) 设置<p>HTTP内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerHttpsAddr() 获取<p>HTTPS内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpsAddr(array $InnerHttpsAddr) 设置<p>HTTPS内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取<p>私有连接状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置<p>私有连接状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerGrpcAddr() 获取<p>grpc内网调用地址</p>
 * @method void setInnerGrpcAddr(array $InnerGrpcAddr) 设置<p>grpc内网调用地址</p>
 * @method string getCreatedBy() 获取<p>创建者 UIN</p>
 * @method void setCreatedBy(string $CreatedBy) 设置<p>创建者 UIN</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getSubUinName() 获取<p>子用户名称</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>子用户名称</p>
 */
class PrivateLinkInfo extends AbstractModel
{
    /**
     * @var string <p>私有连接所在的VPCID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>私有连接所在的子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var array <p>HTTP内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpAddr;

    /**
     * @var array <p>HTTPS内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpsAddr;

    /**
     * @var string <p>私有连接状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var array <p>grpc内网调用地址</p>
     */
    public $InnerGrpcAddr;

    /**
     * @var string <p>创建者 UIN</p>
     */
    public $CreatedBy;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>子用户名称</p>
     */
    public $SubUinName;

    /**
     * @param string $VpcId <p>私有连接所在的VPCID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId <p>私有连接所在的子网ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerHttpAddr <p>HTTP内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerHttpsAddr <p>HTTPS内网调用地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State <p>私有连接状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerGrpcAddr <p>grpc内网调用地址</p>
     * @param string $CreatedBy <p>创建者 UIN</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $SubUinName <p>子用户名称</p>
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InnerHttpAddr",$param) and $param["InnerHttpAddr"] !== null) {
            $this->InnerHttpAddr = $param["InnerHttpAddr"];
        }

        if (array_key_exists("InnerHttpsAddr",$param) and $param["InnerHttpsAddr"] !== null) {
            $this->InnerHttpsAddr = $param["InnerHttpsAddr"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InnerGrpcAddr",$param) and $param["InnerGrpcAddr"] !== null) {
            $this->InnerGrpcAddr = $param["InnerGrpcAddr"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }
    }
}
