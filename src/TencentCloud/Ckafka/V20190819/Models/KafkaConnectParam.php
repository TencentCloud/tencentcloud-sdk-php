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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka连接源参数
 *
 * @method string getResource() 获取Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id
 * @method void setResource(string $Resource) 设置Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 * @method boolean getIsUpdate() 获取是否更新到关联的Dip任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Dip任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerAddress() 获取Kafka连接的broker地址, NetworkType=PUBLIC公网时必填
 * @method void setBrokerAddress(string $BrokerAddress) 设置Kafka连接的broker地址, NetworkType=PUBLIC公网时必填
 * @method string getRegion() 获取CKafka连接源的实例资源地域, 跨地域时必填
 * @method void setRegion(string $Region) 设置CKafka连接源的实例资源地域, 跨地域时必填
 * @method string getNetworkType() 获取网络类型：PUBLIC公网；VPC
 * @method void setNetworkType(string $NetworkType) 设置网络类型：PUBLIC公网；VPC
 * @method string getUniqVpcId() 获取vpcId，NetworkType=VPC时必传
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpcId，NetworkType=VPC时必传
 * @method string getServiceVip() 获取vip，NetworkType=VPC时必传
 * @method void setServiceVip(string $ServiceVip) 设置vip，NetworkType=VPC时必传
 * @method integer getPort() 获取端口，NetworkType=VPC时必传
 * @method void setPort(integer $Port) 设置端口，NetworkType=VPC时必传
 * @method string getCrossNetResourceUniqueId() 获取跨云同步下需要客户传递唯一Id标志一组资源
 * @method void setCrossNetResourceUniqueId(string $CrossNetResourceUniqueId) 设置跨云同步下需要客户传递唯一Id标志一组资源
 * @method string getCrossNetVpcSubNetId() 获取跨云子网ID
 * @method void setCrossNetVpcSubNetId(string $CrossNetVpcSubNetId) 设置跨云子网ID
 */
class KafkaConnectParam extends AbstractModel
{
    /**
     * @var string Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id
     */
    public $Resource;

    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var boolean 是否更新到关联的Dip任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @var string Kafka连接的broker地址, NetworkType=PUBLIC公网时必填
     */
    public $BrokerAddress;

    /**
     * @var string CKafka连接源的实例资源地域, 跨地域时必填
     */
    public $Region;

    /**
     * @var string 网络类型：PUBLIC公网；VPC
     */
    public $NetworkType;

    /**
     * @var string vpcId，NetworkType=VPC时必传
     */
    public $UniqVpcId;

    /**
     * @var string vip，NetworkType=VPC时必传
     */
    public $ServiceVip;

    /**
     * @var integer 端口，NetworkType=VPC时必传
     */
    public $Port;

    /**
     * @var string 跨云同步下需要客户传递唯一Id标志一组资源
     */
    public $CrossNetResourceUniqueId;

    /**
     * @var string 跨云子网ID
     */
    public $CrossNetVpcSubNetId;

    /**
     * @param string $Resource Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id
     * @param boolean $SelfBuilt 是否为自建集群
     * @param boolean $IsUpdate 是否更新到关联的Dip任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerAddress Kafka连接的broker地址, NetworkType=PUBLIC公网时必填
     * @param string $Region CKafka连接源的实例资源地域, 跨地域时必填
     * @param string $NetworkType 网络类型：PUBLIC公网；VPC
     * @param string $UniqVpcId vpcId，NetworkType=VPC时必传
     * @param string $ServiceVip vip，NetworkType=VPC时必传
     * @param integer $Port 端口，NetworkType=VPC时必传
     * @param string $CrossNetResourceUniqueId 跨云同步下需要客户传递唯一Id标志一组资源
     * @param string $CrossNetVpcSubNetId 跨云子网ID
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("BrokerAddress",$param) and $param["BrokerAddress"] !== null) {
            $this->BrokerAddress = $param["BrokerAddress"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CrossNetResourceUniqueId",$param) and $param["CrossNetResourceUniqueId"] !== null) {
            $this->CrossNetResourceUniqueId = $param["CrossNetResourceUniqueId"];
        }

        if (array_key_exists("CrossNetVpcSubNetId",$param) and $param["CrossNetVpcSubNetId"] !== null) {
            $this->CrossNetVpcSubNetId = $param["CrossNetVpcSubNetId"];
        }
    }
}
