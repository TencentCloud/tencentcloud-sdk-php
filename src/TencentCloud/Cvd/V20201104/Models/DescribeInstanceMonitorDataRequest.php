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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceMonitorData请求参数结构体
 *
 * @method array getInstances() 获取<p>实例维度组合数组</p>
 * @method void setInstances(array $Instances) 设置<p>实例维度组合数组</p>
 * @method string getNameSpace() 获取<p>命名空间。如QCE/CVM、QCE/BLOCK_STORAGE等</p>
 * @method void setNameSpace(string $NameSpace) 设置<p>命名空间。如QCE/CVM、QCE/BLOCK_STORAGE等</p>
 * @method string getMetricName() 获取<p>指标名</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名</p>
 * @method integer getPeriod() 获取<p>统计周期(时间粒度), 单位s。</p>
 * @method void setPeriod(integer $Period) 设置<p>统计周期(时间粒度), 单位s。</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method integer getSpecifyStatistics() 获取<p>多种统计方式数据。avg, max, min (1,2,4)可以自由组合</p>
 * @method void setSpecifyStatistics(integer $SpecifyStatistics) 设置<p>多种统计方式数据。avg, max, min (1,2,4)可以自由组合</p>
 */
class DescribeInstanceMonitorDataRequest extends AbstractModel
{
    /**
     * @var array <p>实例维度组合数组</p>
     */
    public $Instances;

    /**
     * @var string <p>命名空间。如QCE/CVM、QCE/BLOCK_STORAGE等</p>
     */
    public $NameSpace;

    /**
     * @var string <p>指标名</p>
     */
    public $MetricName;

    /**
     * @var integer <p>统计周期(时间粒度), 单位s。</p>
     */
    public $Period;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>多种统计方式数据。avg, max, min (1,2,4)可以自由组合</p>
     */
    public $SpecifyStatistics;

    /**
     * @param array $Instances <p>实例维度组合数组</p>
     * @param string $NameSpace <p>命名空间。如QCE/CVM、QCE/BLOCK_STORAGE等</p>
     * @param string $MetricName <p>指标名</p>
     * @param integer $Period <p>统计周期(时间粒度), 单位s。</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param integer $SpecifyStatistics <p>多种统计方式数据。avg, max, min (1,2,4)可以自由组合</p>
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
        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SpecifyStatistics",$param) and $param["SpecifyStatistics"] !== null) {
            $this->SpecifyStatistics = $param["SpecifyStatistics"];
        }
    }
}
