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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBgpBizTrend请求参数结构体
 *
 * @method string getBusiness() 获取DDoS防护子产品代号（bgp-multip表示高防包）
 * @method void setBusiness(string $Business) 设置DDoS防护子产品代号（bgp-multip表示高防包）
 * @method string getStartTime() 获取统计开始时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
 * @method void setStartTime(string $StartTime) 设置统计开始时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
 * @method string getEndTime() 获取统计结束时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
 * @method void setEndTime(string $EndTime) 设置统计结束时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
 * @method string getMetricName() 获取统计维度，可取值intraffic, outtraffic, inpkg, outpkg； intraffic：入流量 outtraffic：出流量 inpkg：入包速率 outpkg：出包速率
 * @method void setMetricName(string $MetricName) 设置统计维度，可取值intraffic, outtraffic, inpkg, outpkg； intraffic：入流量 outtraffic：出流量 inpkg：入包速率 outpkg：出包速率
 * @method string getInstanceId() 获取资源实例ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID
 * @method integer getFlag() 获取0表示固定时间，1表示自定义时间
 * @method void setFlag(integer $Flag) 设置0表示固定时间，1表示自定义时间
 */
class DescribeBgpBizTrendRequest extends AbstractModel
{
    /**
     * @var string DDoS防护子产品代号（bgp-multip表示高防包）
     */
    public $Business;

    /**
     * @var string 统计开始时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
     */
    public $StartTime;

    /**
     * @var string 统计结束时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
     */
    public $EndTime;

    /**
     * @var string 统计维度，可取值intraffic, outtraffic, inpkg, outpkg； intraffic：入流量 outtraffic：出流量 inpkg：入包速率 outpkg：出包速率
     */
    public $MetricName;

    /**
     * @var string 资源实例ID
     */
    public $InstanceId;

    /**
     * @var integer 0表示固定时间，1表示自定义时间
     */
    public $Flag;

    /**
     * @param string $Business DDoS防护子产品代号（bgp-multip表示高防包）
     * @param string $StartTime 统计开始时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
     * @param string $EndTime 统计结束时间。 例：“2020-09-22 00:00:00”，注意该时间必须为5分钟的倍数
     * @param string $MetricName 统计维度，可取值intraffic, outtraffic, inpkg, outpkg； intraffic：入流量 outtraffic：出流量 inpkg：入包速率 outpkg：出包速率
     * @param string $InstanceId 资源实例ID
     * @param integer $Flag 0表示固定时间，1表示自定义时间
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}
