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
 * @method string getResource() 获取<p>Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id</p>
 * @method void setResource(string $Resource) 设置<p>Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id</p>
 * @method boolean getSelfBuilt() 获取<p>是否为自建集群</p>
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置<p>是否为自建集群</p>
 * @method boolean getIsUpdate() 获取<p>是否更新到关联的Dip任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置<p>是否更新到关联的Dip任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerAddress() 获取<p>Kafka连接的broker地址, NetworkType=PUBLIC公网时必填</p>
 * @method void setBrokerAddress(string $BrokerAddress) 设置<p>Kafka连接的broker地址, NetworkType=PUBLIC公网时必填</p>
 * @method string getRegion() 获取<p>CKafka连接源的实例资源地域, 跨地域时必填</p>
 * @method void setRegion(string $Region) 设置<p>CKafka连接源的实例资源地域, 跨地域时必填</p>
 * @method string getNetworkType() 获取<p>网络类型：PUBLIC公网；VPC</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型：PUBLIC公网；VPC</p>
 * @method string getUniqVpcId() 获取<p>vpcId，NetworkType=VPC时必传</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>vpcId，NetworkType=VPC时必传</p>
 * @method string getServiceVip() 获取<p>vip，NetworkType=VPC时必传</p>
 * @method void setServiceVip(string $ServiceVip) 设置<p>vip，NetworkType=VPC时必传</p>
 * @method integer getPort() 获取<p>端口，NetworkType=VPC时必传</p>
 * @method void setPort(integer $Port) 设置<p>端口，NetworkType=VPC时必传</p>
 * @method string getCrossNetResourceUniqueId() 获取<p>跨云同步下需要客户传递唯一Id标志一组资源</p>
 * @method void setCrossNetResourceUniqueId(string $CrossNetResourceUniqueId) 设置<p>跨云同步下需要客户传递唯一Id标志一组资源</p>
 * @method string getCrossNetVpcSubNetId() 获取<p>跨云子网ID</p>
 * @method void setCrossNetVpcSubNetId(string $CrossNetVpcSubNetId) 设置<p>跨云子网ID</p>
 * @method string getOriginalBrokerAddresses() 获取<p>用户输入原始broker接入点地址</p>
 * @method void setOriginalBrokerAddresses(string $OriginalBrokerAddresses) 设置<p>用户输入原始broker接入点地址</p>
 */
class KafkaConnectParam extends AbstractModel
{
    /**
     * @var string <p>Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id</p>
     */
    public $Resource;

    /**
     * @var boolean <p>是否为自建集群</p>
     */
    public $SelfBuilt;

    /**
     * @var boolean <p>是否更新到关联的Dip任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @var string <p>Kafka连接的broker地址, NetworkType=PUBLIC公网时必填</p>
     */
    public $BrokerAddress;

    /**
     * @var string <p>CKafka连接源的实例资源地域, 跨地域时必填</p>
     */
    public $Region;

    /**
     * @var string <p>网络类型：PUBLIC公网；VPC</p>
     */
    public $NetworkType;

    /**
     * @var string <p>vpcId，NetworkType=VPC时必传</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>vip，NetworkType=VPC时必传</p>
     */
    public $ServiceVip;

    /**
     * @var integer <p>端口，NetworkType=VPC时必传</p>
     */
    public $Port;

    /**
     * @var string <p>跨云同步下需要客户传递唯一Id标志一组资源</p>
     */
    public $CrossNetResourceUniqueId;

    /**
     * @var string <p>跨云子网ID</p>
     */
    public $CrossNetVpcSubNetId;

    /**
     * @var string <p>用户输入原始broker接入点地址</p>
     */
    public $OriginalBrokerAddresses;

    /**
     * @param string $Resource <p>Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id</p>
     * @param boolean $SelfBuilt <p>是否为自建集群</p>
     * @param boolean $IsUpdate <p>是否更新到关联的Dip任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerAddress <p>Kafka连接的broker地址, NetworkType=PUBLIC公网时必填</p>
     * @param string $Region <p>CKafka连接源的实例资源地域, 跨地域时必填</p>
     * @param string $NetworkType <p>网络类型：PUBLIC公网；VPC</p>
     * @param string $UniqVpcId <p>vpcId，NetworkType=VPC时必传</p>
     * @param string $ServiceVip <p>vip，NetworkType=VPC时必传</p>
     * @param integer $Port <p>端口，NetworkType=VPC时必传</p>
     * @param string $CrossNetResourceUniqueId <p>跨云同步下需要客户传递唯一Id标志一组资源</p>
     * @param string $CrossNetVpcSubNetId <p>跨云子网ID</p>
     * @param string $OriginalBrokerAddresses <p>用户输入原始broker接入点地址</p>
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

        if (array_key_exists("OriginalBrokerAddresses",$param) and $param["OriginalBrokerAddresses"] !== null) {
            $this->OriginalBrokerAddresses = $param["OriginalBrokerAddresses"];
        }
    }
}
