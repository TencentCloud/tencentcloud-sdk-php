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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTopDDoSData请求参数结构体
 *
 * @method string getStartTime() 获取查询Top数据的开始时间，格式为：2020-01-01 00:00:00
 * @method void setStartTime(string $StartTime) 设置查询Top数据的开始时间，格式为：2020-01-01 00:00:00
 * @method string getEndTime() 获取查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，时间跨度要小于等于7天
 * @method void setEndTime(string $EndTime) 设置查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，时间跨度要小于等于7天
 * @method integer getTopCount() 获取查询Top的数量，不填默认值为10
 * @method void setTopCount(integer $TopCount) 设置查询Top的数量，不填默认值为10
 * @method string getMetric() 获取AttackIP表示查询攻击ip的top排行，AttackType表示攻击类型的top排行，为空默认为AttackType
 * @method void setMetric(string $Metric) 设置AttackIP表示查询攻击ip的top排行，AttackType表示攻击类型的top排行，为空默认为AttackType
 */
class ListTopDDoSDataRequest extends AbstractModel
{
    /**
     * @var string 查询Top数据的开始时间，格式为：2020-01-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string 查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，时间跨度要小于等于7天
     */
    public $EndTime;

    /**
     * @var integer 查询Top的数量，不填默认值为10
     */
    public $TopCount;

    /**
     * @var string AttackIP表示查询攻击ip的top排行，AttackType表示攻击类型的top排行，为空默认为AttackType
     */
    public $Metric;

    /**
     * @param string $StartTime 查询Top数据的开始时间，格式为：2020-01-01 00:00:00
     * @param string $EndTime 查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，时间跨度要小于等于7天
     * @param integer $TopCount 查询Top的数量，不填默认值为10
     * @param string $Metric AttackIP表示查询攻击ip的top排行，AttackType表示攻击类型的top排行，为空默认为AttackType
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TopCount",$param) and $param["TopCount"] !== null) {
            $this->TopCount = $param["TopCount"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }
    }
}
