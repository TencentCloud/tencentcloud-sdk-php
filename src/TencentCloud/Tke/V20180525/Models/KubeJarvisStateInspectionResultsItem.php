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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群巡检结果历史列表
 *
 * @method string getName() 获取巡检结果名称
 * @method void setName(string $Name) 设置巡检结果名称
 * @method array getStatistics() 获取诊断结果统计
 * @method void setStatistics(array $Statistics) 设置诊断结果统计
 * @method string getStartTime() 获取诊断数据开始时间
 * @method void setStartTime(string $StartTime) 设置诊断数据开始时间
 * @method string getEndTime() 获取诊断数据结束时间
 * @method void setEndTime(string $EndTime) 设置诊断数据结束时间
 */
class KubeJarvisStateInspectionResultsItem extends AbstractModel
{
    /**
     * @var string 巡检结果名称
     */
    public $Name;

    /**
     * @var array 诊断结果统计
     */
    public $Statistics;

    /**
     * @var string 诊断数据开始时间
     */
    public $StartTime;

    /**
     * @var string 诊断数据结束时间
     */
    public $EndTime;

    /**
     * @param string $Name 巡检结果名称
     * @param array $Statistics 诊断结果统计
     * @param string $StartTime 诊断数据开始时间
     * @param string $EndTime 诊断数据结束时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new KubeJarvisStateStatistic();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
