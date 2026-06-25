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
 * AI 网关token消耗统计汇总响应结果
 *
 * @method integer getTotalRequestCount() 获取<p>查询时间范围内请求总数</p>
 * @method void setTotalRequestCount(integer $TotalRequestCount) 设置<p>查询时间范围内请求总数</p>
 * @method integer getTotalInputTokens() 获取<p>查询时间范围内总输入Token数（包含命中缓存的Token数）</p>
 * @method void setTotalInputTokens(integer $TotalInputTokens) 设置<p>查询时间范围内总输入Token数（包含命中缓存的Token数）</p>
 * @method integer getTotalOutputTokens() 获取<p>查询时间范围内总输出Token数</p>
 * @method void setTotalOutputTokens(integer $TotalOutputTokens) 设置<p>查询时间范围内总输出Token数</p>
 * @method integer getTotalCachedReadInputTokens() 获取<p>查询时间范围内总命中缓存输入Token数</p>
 * @method void setTotalCachedReadInputTokens(integer $TotalCachedReadInputTokens) 设置<p>查询时间范围内总命中缓存输入Token数</p>
 * @method string getTotalCost() 获取<p>查询时间范围内总成本</p>
 * @method void setTotalCost(string $TotalCost) 设置<p>查询时间范围内总成本</p>
 * @method string getCurrency() 获取<p>成本货币单位</p>
 * @method void setCurrency(string $Currency) 设置<p>成本货币单位</p>
 * @method array getTopConsumers() 获取<p>查询时间范围内成本最高的消费者</p>
 * @method void setTopConsumers(array $TopConsumers) 设置<p>查询时间范围内成本最高的消费者</p>
 */
class AIGWLLMTokenUsageStatisticsResult extends AbstractModel
{
    /**
     * @var integer <p>查询时间范围内请求总数</p>
     */
    public $TotalRequestCount;

    /**
     * @var integer <p>查询时间范围内总输入Token数（包含命中缓存的Token数）</p>
     */
    public $TotalInputTokens;

    /**
     * @var integer <p>查询时间范围内总输出Token数</p>
     */
    public $TotalOutputTokens;

    /**
     * @var integer <p>查询时间范围内总命中缓存输入Token数</p>
     */
    public $TotalCachedReadInputTokens;

    /**
     * @var string <p>查询时间范围内总成本</p>
     */
    public $TotalCost;

    /**
     * @var string <p>成本货币单位</p>
     */
    public $Currency;

    /**
     * @var array <p>查询时间范围内成本最高的消费者</p>
     */
    public $TopConsumers;

    /**
     * @param integer $TotalRequestCount <p>查询时间范围内请求总数</p>
     * @param integer $TotalInputTokens <p>查询时间范围内总输入Token数（包含命中缓存的Token数）</p>
     * @param integer $TotalOutputTokens <p>查询时间范围内总输出Token数</p>
     * @param integer $TotalCachedReadInputTokens <p>查询时间范围内总命中缓存输入Token数</p>
     * @param string $TotalCost <p>查询时间范围内总成本</p>
     * @param string $Currency <p>成本货币单位</p>
     * @param array $TopConsumers <p>查询时间范围内成本最高的消费者</p>
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
        if (array_key_exists("TotalRequestCount",$param) and $param["TotalRequestCount"] !== null) {
            $this->TotalRequestCount = $param["TotalRequestCount"];
        }

        if (array_key_exists("TotalInputTokens",$param) and $param["TotalInputTokens"] !== null) {
            $this->TotalInputTokens = $param["TotalInputTokens"];
        }

        if (array_key_exists("TotalOutputTokens",$param) and $param["TotalOutputTokens"] !== null) {
            $this->TotalOutputTokens = $param["TotalOutputTokens"];
        }

        if (array_key_exists("TotalCachedReadInputTokens",$param) and $param["TotalCachedReadInputTokens"] !== null) {
            $this->TotalCachedReadInputTokens = $param["TotalCachedReadInputTokens"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("TopConsumers",$param) and $param["TopConsumers"] !== null) {
            $this->TopConsumers = [];
            foreach ($param["TopConsumers"] as $key => $value){
                $obj = new AIGWTopConsumersItem();
                $obj->deserialize($value);
                array_push($this->TopConsumers, $obj);
            }
        }
    }
}
