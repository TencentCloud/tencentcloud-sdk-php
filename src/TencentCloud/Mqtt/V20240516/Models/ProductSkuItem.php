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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT ProductSkuItem
 *
 * @method string getInstanceType() 获取规格类型
BASIC：基础版
PRO ：专业版
PLATINUM： 铂金版
 * @method void setInstanceType(string $InstanceType) 设置规格类型
BASIC：基础版
PRO ：专业版
PLATINUM： 铂金版
 * @method string getSkuCode() 获取规格代码
 * @method void setSkuCode(string $SkuCode) 设置规格代码
 * @method boolean getOnSale() 获取是否售卖
1: 可售卖
0: 不可售卖
 * @method void setOnSale(boolean $OnSale) 设置是否售卖
1: 可售卖
0: 不可售卖
 * @method integer getTopicNumLimit() 获取topic num限制
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置topic num限制
 * @method integer getTpsLimit() 获取MQTT 集群下每秒钟生产消息量和消费消息量之和。详细计算方式参考 [计费概述](https://cloud.tencent.com/document/product/1778/109698)
 * @method void setTpsLimit(integer $TpsLimit) 设置MQTT 集群下每秒钟生产消息量和消费消息量之和。详细计算方式参考 [计费概述](https://cloud.tencent.com/document/product/1778/109698)
 * @method integer getClientNumLimit() 获取客户端连接数
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端连接数
 * @method integer getMaxSubscriptionPerClient() 获取单客户端最大订阅数
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) 设置单客户端最大订阅数
 * @method integer getAuthorizationPolicyLimit() 获取授权规则条数
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) 设置授权规则条数
 * @method array getPriceTags() 获取计费项信息
 * @method void setPriceTags(array $PriceTags) 设置计费项信息
 */
class ProductSkuItem extends AbstractModel
{
    /**
     * @var string 规格类型
BASIC：基础版
PRO ：专业版
PLATINUM： 铂金版
     */
    public $InstanceType;

    /**
     * @var string 规格代码
     */
    public $SkuCode;

    /**
     * @var boolean 是否售卖
1: 可售卖
0: 不可售卖
     */
    public $OnSale;

    /**
     * @var integer topic num限制
     */
    public $TopicNumLimit;

    /**
     * @var integer MQTT 集群下每秒钟生产消息量和消费消息量之和。详细计算方式参考 [计费概述](https://cloud.tencent.com/document/product/1778/109698)
     */
    public $TpsLimit;

    /**
     * @var integer 客户端连接数
     */
    public $ClientNumLimit;

    /**
     * @var integer 单客户端最大订阅数
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer 授权规则条数
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var array 计费项信息
     */
    public $PriceTags;

    /**
     * @param string $InstanceType 规格类型
BASIC：基础版
PRO ：专业版
PLATINUM： 铂金版
     * @param string $SkuCode 规格代码
     * @param boolean $OnSale 是否售卖
1: 可售卖
0: 不可售卖
     * @param integer $TopicNumLimit topic num限制
     * @param integer $TpsLimit MQTT 集群下每秒钟生产消息量和消费消息量之和。详细计算方式参考 [计费概述](https://cloud.tencent.com/document/product/1778/109698)
     * @param integer $ClientNumLimit 客户端连接数
     * @param integer $MaxSubscriptionPerClient 单客户端最大订阅数
     * @param integer $AuthorizationPolicyLimit 授权规则条数
     * @param array $PriceTags 计费项信息
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

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }
    }
}
