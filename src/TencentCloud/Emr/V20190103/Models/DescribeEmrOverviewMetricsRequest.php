<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrOverviewMetrics请求参数结构体
 *
 * @method integer getEnd() 获取结束时间
 * @method void setEnd(integer $End) 设置结束时间
 * @method string getMetric() 获取指标名
 * @method void setMetric(string $Metric) 设置指标名
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getDownsample() 获取粒度 30s-max 1m-max 1h-max等
 * @method void setDownsample(string $Downsample) 设置粒度 30s-max 1m-max 1h-max等
 * @method integer getStart() 获取起始时间，画饼状图时不传
 * @method void setStart(integer $Start) 设置起始时间，画饼状图时不传
 * @method string getAggregator() 获取聚合方法，扩展用，这里目前不用传
 * @method void setAggregator(string $Aggregator) 设置聚合方法，扩展用，这里目前不用传
 * @method string getTags() 获取指标要查询的具体type 如："{"type":"CapacityTotal|CapacityRemaining"}"
 * @method void setTags(string $Tags) 设置指标要查询的具体type 如："{"type":"CapacityTotal|CapacityRemaining"}"
 */
class DescribeEmrOverviewMetricsRequest extends AbstractModel
{
    /**
     * @var integer 结束时间
     */
    public $End;

    /**
     * @var string 指标名
     */
    public $Metric;

    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 粒度 30s-max 1m-max 1h-max等
     */
    public $Downsample;

    /**
     * @var integer 起始时间，画饼状图时不传
     */
    public $Start;

    /**
     * @var string 聚合方法，扩展用，这里目前不用传
     */
    public $Aggregator;

    /**
     * @var string 指标要查询的具体type 如："{"type":"CapacityTotal|CapacityRemaining"}"
     */
    public $Tags;

    /**
     * @param integer $End 结束时间
     * @param string $Metric 指标名
     * @param string $InstanceId 集群id
     * @param string $Downsample 粒度 30s-max 1m-max 1h-max等
     * @param integer $Start 起始时间，画饼状图时不传
     * @param string $Aggregator 聚合方法，扩展用，这里目前不用传
     * @param string $Tags 指标要查询的具体type 如："{"type":"CapacityTotal|CapacityRemaining"}"
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
        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Downsample",$param) and $param["Downsample"] !== null) {
            $this->Downsample = $param["Downsample"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("Aggregator",$param) and $param["Aggregator"] !== null) {
            $this->Aggregator = $param["Aggregator"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
