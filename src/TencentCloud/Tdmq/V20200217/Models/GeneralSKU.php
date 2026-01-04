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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用集群售卖信息
 *
 * @method string getSkuCode() 获取规格标识
 * @method void setSkuCode(string $SkuCode) 设置规格标识
 * @method boolean getOnSale() 获取是否可售卖
 * @method void setOnSale(boolean $OnSale) 设置是否可售卖
 * @method integer getTpsLimit() 获取TPS上限
 * @method void setTpsLimit(integer $TpsLimit) 设置TPS上限
 * @method integer getTopicNumLimit() 获取主题数免费额度
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置主题数免费额度
 * @method integer getTopicNumUpperLimit() 获取主题数上限
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) 设置主题数上限
 * @method array getPriceTags() 获取计费项信息
 * @method void setPriceTags(array $PriceTags) 设置计费项信息
 * @method integer getNodeCount() 获取存储节点个数
 * @method void setNodeCount(integer $NodeCount) 设置存储节点个数
 */
class GeneralSKU extends AbstractModel
{
    /**
     * @var string 规格标识
     */
    public $SkuCode;

    /**
     * @var boolean 是否可售卖
     */
    public $OnSale;

    /**
     * @var integer TPS上限
     */
    public $TpsLimit;

    /**
     * @var integer 主题数免费额度
     */
    public $TopicNumLimit;

    /**
     * @var integer 主题数上限
     */
    public $TopicNumUpperLimit;

    /**
     * @var array 计费项信息
     */
    public $PriceTags;

    /**
     * @var integer 存储节点个数
     */
    public $NodeCount;

    /**
     * @param string $SkuCode 规格标识
     * @param boolean $OnSale 是否可售卖
     * @param integer $TpsLimit TPS上限
     * @param integer $TopicNumLimit 主题数免费额度
     * @param integer $TopicNumUpperLimit 主题数上限
     * @param array $PriceTags 计费项信息
     * @param integer $NodeCount 存储节点个数
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
        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }
    }
}
