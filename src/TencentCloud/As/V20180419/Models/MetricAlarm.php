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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩告警指标
 *
 * @method string getComparisonOperator() 获取<p>比较运算符，可选值：<br><li>GREATER_THAN：大于</li><li>GREATER_THAN_OR_EQUAL_TO：大于或等于</li><li>LESS_THAN：小于</li><li> LESS_THAN_OR_EQUAL_TO：小于或等于</li><li> EQUAL_TO：等于</li> <li>NOT_EQUAL_TO：不等于</li></p>
 * @method void setComparisonOperator(string $ComparisonOperator) 设置<p>比较运算符，可选值：<br><li>GREATER_THAN：大于</li><li>GREATER_THAN_OR_EQUAL_TO：大于或等于</li><li>LESS_THAN：小于</li><li> LESS_THAN_OR_EQUAL_TO：小于或等于</li><li> EQUAL_TO：等于</li> <li>NOT_EQUAL_TO：不等于</li></p>
 * @method string getMetricName() 获取<p>指标名称，可选字段如下：<li>CPU_UTILIZATION：CPU利用率</li><li>MEM_UTILIZATION：内存利用率</li><li>LAN_TRAFFIC_OUT：内网出带宽</li><li>LAN_TRAFFIC_IN：内网入带宽</li><li>WAN_TRAFFIC_OUT：外网出带宽</li><li>WAN_TRAFFIC_IN：外网入带宽</li><li>TCP_CURR_ESTAB：TCP连接数</li></p><p>当前外网出入带宽属于 CLB 类指标，其他指标属于 CVM 类指标。修改指标名称时不允许跨类别修改。</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名称，可选字段如下：<li>CPU_UTILIZATION：CPU利用率</li><li>MEM_UTILIZATION：内存利用率</li><li>LAN_TRAFFIC_OUT：内网出带宽</li><li>LAN_TRAFFIC_IN：内网入带宽</li><li>WAN_TRAFFIC_OUT：外网出带宽</li><li>WAN_TRAFFIC_IN：外网入带宽</li><li>TCP_CURR_ESTAB：TCP连接数</li></p><p>当前外网出入带宽属于 CLB 类指标，其他指标属于 CVM 类指标。修改指标名称时不允许跨类别修改。</p>
 * @method integer getThreshold() 获取<p>告警阈值：<br><li>CPU_UTILIZATION：[1, 100]，单位：%</li><li>MEM_UTILIZATION：[1, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
 * @method void setThreshold(integer $Threshold) 设置<p>告警阈值：<br><li>CPU_UTILIZATION：[1, 100]，单位：%</li><li>MEM_UTILIZATION：[1, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
 * @method integer getPeriod() 获取<p>时间周期，单位：秒，取值枚举值为60、300。</p>
 * @method void setPeriod(integer $Period) 设置<p>时间周期，单位：秒，取值枚举值为60、300。</p>
 * @method integer getContinuousTime() 获取<p>重复次数。取值范围 [1, 10]</p>
 * @method void setContinuousTime(integer $ContinuousTime) 设置<p>重复次数。取值范围 [1, 10]</p>
 * @method string getStatistic() 获取<p>统计类型，可选字段如下：<br><li>AVERAGE：平均值</li><li>MAXIMUM：最大值<li>MINIMUM：最小值</li><br> 默认取值：AVERAGE</p>
 * @method void setStatistic(string $Statistic) 设置<p>统计类型，可选字段如下：<br><li>AVERAGE：平均值</li><li>MAXIMUM：最大值<li>MINIMUM：最小值</li><br> 默认取值：AVERAGE</p>
 * @method float getPreciseThreshold() 获取<p>精确告警阈值，本参数不作为入参输入，仅用作查询接口出参：<br><li>CPU_UTILIZATION：(0, 100]，单位：%</li><li>MEM_UTILIZATION：(0, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
 * @method void setPreciseThreshold(float $PreciseThreshold) 设置<p>精确告警阈值，本参数不作为入参输入，仅用作查询接口出参：<br><li>CPU_UTILIZATION：(0, 100]，单位：%</li><li>MEM_UTILIZATION：(0, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
 */
class MetricAlarm extends AbstractModel
{
    /**
     * @var string <p>比较运算符，可选值：<br><li>GREATER_THAN：大于</li><li>GREATER_THAN_OR_EQUAL_TO：大于或等于</li><li>LESS_THAN：小于</li><li> LESS_THAN_OR_EQUAL_TO：小于或等于</li><li> EQUAL_TO：等于</li> <li>NOT_EQUAL_TO：不等于</li></p>
     */
    public $ComparisonOperator;

    /**
     * @var string <p>指标名称，可选字段如下：<li>CPU_UTILIZATION：CPU利用率</li><li>MEM_UTILIZATION：内存利用率</li><li>LAN_TRAFFIC_OUT：内网出带宽</li><li>LAN_TRAFFIC_IN：内网入带宽</li><li>WAN_TRAFFIC_OUT：外网出带宽</li><li>WAN_TRAFFIC_IN：外网入带宽</li><li>TCP_CURR_ESTAB：TCP连接数</li></p><p>当前外网出入带宽属于 CLB 类指标，其他指标属于 CVM 类指标。修改指标名称时不允许跨类别修改。</p>
     */
    public $MetricName;

    /**
     * @var integer <p>告警阈值：<br><li>CPU_UTILIZATION：[1, 100]，单位：%</li><li>MEM_UTILIZATION：[1, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
     */
    public $Threshold;

    /**
     * @var integer <p>时间周期，单位：秒，取值枚举值为60、300。</p>
     */
    public $Period;

    /**
     * @var integer <p>重复次数。取值范围 [1, 10]</p>
     */
    public $ContinuousTime;

    /**
     * @var string <p>统计类型，可选字段如下：<br><li>AVERAGE：平均值</li><li>MAXIMUM：最大值<li>MINIMUM：最小值</li><br> 默认取值：AVERAGE</p>
     */
    public $Statistic;

    /**
     * @var float <p>精确告警阈值，本参数不作为入参输入，仅用作查询接口出参：<br><li>CPU_UTILIZATION：(0, 100]，单位：%</li><li>MEM_UTILIZATION：(0, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
     */
    public $PreciseThreshold;

    /**
     * @param string $ComparisonOperator <p>比较运算符，可选值：<br><li>GREATER_THAN：大于</li><li>GREATER_THAN_OR_EQUAL_TO：大于或等于</li><li>LESS_THAN：小于</li><li> LESS_THAN_OR_EQUAL_TO：小于或等于</li><li> EQUAL_TO：等于</li> <li>NOT_EQUAL_TO：不等于</li></p>
     * @param string $MetricName <p>指标名称，可选字段如下：<li>CPU_UTILIZATION：CPU利用率</li><li>MEM_UTILIZATION：内存利用率</li><li>LAN_TRAFFIC_OUT：内网出带宽</li><li>LAN_TRAFFIC_IN：内网入带宽</li><li>WAN_TRAFFIC_OUT：外网出带宽</li><li>WAN_TRAFFIC_IN：外网入带宽</li><li>TCP_CURR_ESTAB：TCP连接数</li></p><p>当前外网出入带宽属于 CLB 类指标，其他指标属于 CVM 类指标。修改指标名称时不允许跨类别修改。</p>
     * @param integer $Threshold <p>告警阈值：<br><li>CPU_UTILIZATION：[1, 100]，单位：%</li><li>MEM_UTILIZATION：[1, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
     * @param integer $Period <p>时间周期，单位：秒，取值枚举值为60、300。</p>
     * @param integer $ContinuousTime <p>重复次数。取值范围 [1, 10]</p>
     * @param string $Statistic <p>统计类型，可选字段如下：<br><li>AVERAGE：平均值</li><li>MAXIMUM：最大值<li>MINIMUM：最小值</li><br> 默认取值：AVERAGE</p>
     * @param float $PreciseThreshold <p>精确告警阈值，本参数不作为入参输入，仅用作查询接口出参：<br><li>CPU_UTILIZATION：(0, 100]，单位：%</li><li>MEM_UTILIZATION：(0, 100]，单位：%</li><li>LAN_TRAFFIC_OUT：&gt;0，单位：Mbps </li><li>LAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_OUT：&gt;0，单位：Mbps</li><li>WAN_TRAFFIC_IN：&gt;0，单位：Mbps</li><li>TCP_CURR_ESTAB：&gt;0, 单位：Count</li></p>
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
        if (array_key_exists("ComparisonOperator",$param) and $param["ComparisonOperator"] !== null) {
            $this->ComparisonOperator = $param["ComparisonOperator"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ContinuousTime",$param) and $param["ContinuousTime"] !== null) {
            $this->ContinuousTime = $param["ContinuousTime"];
        }

        if (array_key_exists("Statistic",$param) and $param["Statistic"] !== null) {
            $this->Statistic = $param["Statistic"];
        }

        if (array_key_exists("PreciseThreshold",$param) and $param["PreciseThreshold"] !== null) {
            $this->PreciseThreshold = $param["PreciseThreshold"];
        }
    }
}
