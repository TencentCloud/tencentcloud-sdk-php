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
     * @param string $Resource Kafka连接源的实例资源, 非自建时必填，NetworkType=VPC时传clb实例id
     * @param boolean $SelfBuilt 是否为自建集群
     * @param boolean $IsUpdate 是否更新到关联的Dip任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerAddress Kafka连接的broker地址, NetworkType=PUBLIC公网时必填
     * @param string $Region CKafka连接源的实例资源地域, 跨地域时必填
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
    }
}
