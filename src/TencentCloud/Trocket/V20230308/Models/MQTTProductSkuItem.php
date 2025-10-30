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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT ProductSkuItem
 *
 * @method string getInstanceType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkuCode() 获取cide
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkuCode(string $SkuCode) 设置cide
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOnSale() 获取sale
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnSale(boolean $OnSale) 设置sale
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNumLimit() 获取topic num限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置topic num限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTpsLimit() 获取tps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTpsLimit(integer $TpsLimit) 设置tps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClientNumLimit() 获取客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubscriptionNumLimit() 获取订阅数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscriptionNumLimit(integer $SubscriptionNumLimit) 设置订阅数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxySpecCore() 获取代理核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxySpecCore(integer $ProxySpecCore) 设置代理核
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxySpecMemory() 获取代理内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxySpecMemory(integer $ProxySpecMemory) 设置代理内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxySpecCount() 获取代理总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxySpecCount(integer $ProxySpecCount) 设置代理总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MQTTProductSkuItem extends AbstractModel
{
    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string cide
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkuCode;

    /**
     * @var boolean sale
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnSale;

    /**
     * @var integer topic num限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNumLimit;

    /**
     * @var integer tps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TpsLimit;

    /**
     * @var integer 客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientNumLimit;

    /**
     * @var integer 订阅数限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscriptionNumLimit;

    /**
     * @var integer 代理核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxySpecCore;

    /**
     * @var integer 代理内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxySpecMemory;

    /**
     * @var integer 代理总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxySpecCount;

    /**
     * @param string $InstanceType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkuCode cide
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OnSale sale
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNumLimit topic num限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TpsLimit tps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClientNumLimit 客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubscriptionNumLimit 订阅数限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxySpecCore 代理核
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxySpecMemory 代理内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxySpecCount 代理总数
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("SubscriptionNumLimit",$param) and $param["SubscriptionNumLimit"] !== null) {
            $this->SubscriptionNumLimit = $param["SubscriptionNumLimit"];
        }

        if (array_key_exists("ProxySpecCore",$param) and $param["ProxySpecCore"] !== null) {
            $this->ProxySpecCore = $param["ProxySpecCore"];
        }

        if (array_key_exists("ProxySpecMemory",$param) and $param["ProxySpecMemory"] !== null) {
            $this->ProxySpecMemory = $param["ProxySpecMemory"];
        }

        if (array_key_exists("ProxySpecCount",$param) and $param["ProxySpecCount"] !== null) {
            $this->ProxySpecCount = $param["ProxySpecCount"];
        }
    }
}
