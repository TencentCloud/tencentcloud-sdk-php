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
 * 商品售卖信息
 *
 * @method string getInstanceType() 获取产品类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
 * @method void setInstanceType(string $InstanceType) 设置产品类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
 * @method string getSkuCode() 获取规格代码
 * @method void setSkuCode(string $SkuCode) 设置规格代码
 * @method integer getTpsLimit() 获取TPS上限
 * @method void setTpsLimit(integer $TpsLimit) 设置TPS上限
 * @method integer getScaledTpsLimit() 获取弹性TPS上限
 * @method void setScaledTpsLimit(integer $ScaledTpsLimit) 设置弹性TPS上限
 * @method integer getTopicNumLimit() 获取主题数量上限默认值
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置主题数量上限默认值
 * @method integer getGroupNumLimit() 获取消费组数量上限
 * @method void setGroupNumLimit(integer $GroupNumLimit) 设置消费组数量上限
 * @method integer getDefaultRetention() 获取默认消息保留时间，小时为单位
 * @method void setDefaultRetention(integer $DefaultRetention) 设置默认消息保留时间，小时为单位
 * @method integer getRetentionUpperLimit() 获取可调整消息保留时间上限，小时为单位
 * @method void setRetentionUpperLimit(integer $RetentionUpperLimit) 设置可调整消息保留时间上限，小时为单位
 * @method integer getRetentionLowerLimit() 获取可调整消息保留时间下限，小时为单位
 * @method void setRetentionLowerLimit(integer $RetentionLowerLimit) 设置可调整消息保留时间下限，小时为单位
 * @method integer getMaxMessageDelay() 获取延时消息最大时长，小时为单位
 * @method void setMaxMessageDelay(integer $MaxMessageDelay) 设置延时消息最大时长，小时为单位
 * @method boolean getOnSale() 获取是否可购买
 * @method void setOnSale(boolean $OnSale) 设置是否可购买
 * @method array getPriceTags() 获取计费项信息
 * @method void setPriceTags(array $PriceTags) 设置计费项信息
 * @method integer getTopicNumUpperLimit() 获取主题数量上限默认最大值
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) 设置主题数量上限默认最大值
 */
class ProductSKU extends AbstractModel
{
    /**
     * @var string 产品类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
     */
    public $InstanceType;

    /**
     * @var string 规格代码
     */
    public $SkuCode;

    /**
     * @var integer TPS上限
     */
    public $TpsLimit;

    /**
     * @var integer 弹性TPS上限
     */
    public $ScaledTpsLimit;

    /**
     * @var integer 主题数量上限默认值
     */
    public $TopicNumLimit;

    /**
     * @var integer 消费组数量上限
     */
    public $GroupNumLimit;

    /**
     * @var integer 默认消息保留时间，小时为单位
     */
    public $DefaultRetention;

    /**
     * @var integer 可调整消息保留时间上限，小时为单位
     */
    public $RetentionUpperLimit;

    /**
     * @var integer 可调整消息保留时间下限，小时为单位
     */
    public $RetentionLowerLimit;

    /**
     * @var integer 延时消息最大时长，小时为单位
     */
    public $MaxMessageDelay;

    /**
     * @var boolean 是否可购买
     */
    public $OnSale;

    /**
     * @var array 计费项信息
     */
    public $PriceTags;

    /**
     * @var integer 主题数量上限默认最大值
     */
    public $TopicNumUpperLimit;

    /**
     * @param string $InstanceType 产品类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
     * @param string $SkuCode 规格代码
     * @param integer $TpsLimit TPS上限
     * @param integer $ScaledTpsLimit 弹性TPS上限
     * @param integer $TopicNumLimit 主题数量上限默认值
     * @param integer $GroupNumLimit 消费组数量上限
     * @param integer $DefaultRetention 默认消息保留时间，小时为单位
     * @param integer $RetentionUpperLimit 可调整消息保留时间上限，小时为单位
     * @param integer $RetentionLowerLimit 可调整消息保留时间下限，小时为单位
     * @param integer $MaxMessageDelay 延时消息最大时长，小时为单位
     * @param boolean $OnSale 是否可购买
     * @param array $PriceTags 计费项信息
     * @param integer $TopicNumUpperLimit 主题数量上限默认最大值
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

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ScaledTpsLimit",$param) and $param["ScaledTpsLimit"] !== null) {
            $this->ScaledTpsLimit = $param["ScaledTpsLimit"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("GroupNumLimit",$param) and $param["GroupNumLimit"] !== null) {
            $this->GroupNumLimit = $param["GroupNumLimit"];
        }

        if (array_key_exists("DefaultRetention",$param) and $param["DefaultRetention"] !== null) {
            $this->DefaultRetention = $param["DefaultRetention"];
        }

        if (array_key_exists("RetentionUpperLimit",$param) and $param["RetentionUpperLimit"] !== null) {
            $this->RetentionUpperLimit = $param["RetentionUpperLimit"];
        }

        if (array_key_exists("RetentionLowerLimit",$param) and $param["RetentionLowerLimit"] !== null) {
            $this->RetentionLowerLimit = $param["RetentionLowerLimit"];
        }

        if (array_key_exists("MaxMessageDelay",$param) and $param["MaxMessageDelay"] !== null) {
            $this->MaxMessageDelay = $param["MaxMessageDelay"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }
    }
}
