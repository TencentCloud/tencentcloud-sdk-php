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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个消费者 Token 用量查询结果
 *
 * @method string getConsumerId() 获取<p>消费者Id</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>消费者Id</p>
 * @method string getConsumerName() 获取<p>消费者名称</p>
 * @method void setConsumerName(string $ConsumerName) 设置<p>消费者名称</p>
 * @method array getConsumerGroups() 获取<p>消费者组信息列表</p>
 * @method void setConsumerGroups(array $ConsumerGroups) 设置<p>消费者组信息列表</p>
 * @method string getModelServiceId() 获取<p>模型服务Id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务Id</p>
 * @method string getModelServiceName() 获取<p>模型服务名称</p>
 * @method void setModelServiceName(string $ModelServiceName) 设置<p>模型服务名称</p>
 * @method integer getInputTokens() 获取<p>输入Token数（包含缓存命中Token数）</p>
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入Token数（包含缓存命中Token数）</p>
 * @method integer getCacheReadInputTokens() 获取<p>命中缓存输入Token数</p>
 * @method void setCacheReadInputTokens(integer $CacheReadInputTokens) 设置<p>命中缓存输入Token数</p>
 * @method integer getOutputTokens() 获取<p>输出Token数</p>
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出Token数</p>
 * @method integer getTotalTokens() 获取<p>消耗总Token数</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>消耗总Token数</p>
 * @method integer getRequestCount() 获取<p>请求总数</p>
 * @method void setRequestCount(integer $RequestCount) 设置<p>请求总数</p>
 * @method string getCost() 获取<p>花费成本</p>
 * @method void setCost(string $Cost) 设置<p>花费成本</p>
 * @method string getCurrency() 获取<p>成本货币单位</p><p>枚举值：</p><ul><li>CNY： 人民币</li></ul><p>当前仅支持CNY</p>
 * @method void setCurrency(string $Currency) 设置<p>成本货币单位</p><p>枚举值：</p><ul><li>CNY： 人民币</li></ul><p>当前仅支持CNY</p>
 */
class AIGWLLMTokenUsageItem extends AbstractModel
{
    /**
     * @var string <p>消费者Id</p>
     */
    public $ConsumerId;

    /**
     * @var string <p>消费者名称</p>
     */
    public $ConsumerName;

    /**
     * @var array <p>消费者组信息列表</p>
     */
    public $ConsumerGroups;

    /**
     * @var string <p>模型服务Id</p>
     */
    public $ModelServiceId;

    /**
     * @var string <p>模型服务名称</p>
     */
    public $ModelServiceName;

    /**
     * @var integer <p>输入Token数（包含缓存命中Token数）</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>命中缓存输入Token数</p>
     */
    public $CacheReadInputTokens;

    /**
     * @var integer <p>输出Token数</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>消耗总Token数</p>
     */
    public $TotalTokens;

    /**
     * @var integer <p>请求总数</p>
     */
    public $RequestCount;

    /**
     * @var string <p>花费成本</p>
     */
    public $Cost;

    /**
     * @var string <p>成本货币单位</p><p>枚举值：</p><ul><li>CNY： 人民币</li></ul><p>当前仅支持CNY</p>
     */
    public $Currency;

    /**
     * @param string $ConsumerId <p>消费者Id</p>
     * @param string $ConsumerName <p>消费者名称</p>
     * @param array $ConsumerGroups <p>消费者组信息列表</p>
     * @param string $ModelServiceId <p>模型服务Id</p>
     * @param string $ModelServiceName <p>模型服务名称</p>
     * @param integer $InputTokens <p>输入Token数（包含缓存命中Token数）</p>
     * @param integer $CacheReadInputTokens <p>命中缓存输入Token数</p>
     * @param integer $OutputTokens <p>输出Token数</p>
     * @param integer $TotalTokens <p>消耗总Token数</p>
     * @param integer $RequestCount <p>请求总数</p>
     * @param string $Cost <p>花费成本</p>
     * @param string $Currency <p>成本货币单位</p><p>枚举值：</p><ul><li>CNY： 人民币</li></ul><p>当前仅支持CNY</p>
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
        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("ConsumerGroups",$param) and $param["ConsumerGroups"] !== null) {
            $this->ConsumerGroups = [];
            foreach ($param["ConsumerGroups"] as $key => $value){
                $obj = new AIGWConsumerGroupBrief();
                $obj->deserialize($value);
                array_push($this->ConsumerGroups, $obj);
            }
        }

        if (array_key_exists("ModelServiceId",$param) and $param["ModelServiceId"] !== null) {
            $this->ModelServiceId = $param["ModelServiceId"];
        }

        if (array_key_exists("ModelServiceName",$param) and $param["ModelServiceName"] !== null) {
            $this->ModelServiceName = $param["ModelServiceName"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("CacheReadInputTokens",$param) and $param["CacheReadInputTokens"] !== null) {
            $this->CacheReadInputTokens = $param["CacheReadInputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
