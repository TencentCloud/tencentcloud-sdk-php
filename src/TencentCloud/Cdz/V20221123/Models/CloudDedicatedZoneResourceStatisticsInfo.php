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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专属可用区资源统计项数据详情，对应一个具体的垂直产品的资源统计项。
 *
 * @method string getItem() 获取资源统计项名称
 * @method void setItem(string $Item) 设置资源统计项名称
 * @method string getUnit() 获取资源统计项单位
 * @method void setUnit(string $Unit) 设置资源统计项单位
 * @method string getTotal() 获取资源总量
 * @method void setTotal(string $Total) 设置资源总量
 * @method string getUsage() 获取已用资源
 * @method void setUsage(string $Usage) 设置已用资源
 * @method string getUsageRate() 获取已用资源占比
 * @method void setUsageRate(string $UsageRate) 设置已用资源占比
 * @method string getRemain() 获取剩余资源
 * @method void setRemain(string $Remain) 设置剩余资源
 * @method string getRemainRate() 获取剩余资源占比
 * @method void setRemainRate(string $RemainRate) 设置剩余资源占比
 * @method string getThisMondayUsageRate() 获取本周一零点资源使用率
 * @method void setThisMondayUsageRate(string $ThisMondayUsageRate) 设置本周一零点资源使用率
 * @method string getThisMondayUsageGrowthRate() 获取本周资源增长比例
 * @method void setThisMondayUsageGrowthRate(string $ThisMondayUsageGrowthRate) 设置本周资源增长比例
 * @method string getLastMondayUsageGrowthRate() 获取上周资源增长比例
 * @method void setLastMondayUsageGrowthRate(string $LastMondayUsageGrowthRate) 设置上周资源增长比例
 */
class CloudDedicatedZoneResourceStatisticsInfo extends AbstractModel
{
    /**
     * @var string 资源统计项名称
     */
    public $Item;

    /**
     * @var string 资源统计项单位
     */
    public $Unit;

    /**
     * @var string 资源总量
     */
    public $Total;

    /**
     * @var string 已用资源
     */
    public $Usage;

    /**
     * @var string 已用资源占比
     */
    public $UsageRate;

    /**
     * @var string 剩余资源
     */
    public $Remain;

    /**
     * @var string 剩余资源占比
     */
    public $RemainRate;

    /**
     * @var string 本周一零点资源使用率
     */
    public $ThisMondayUsageRate;

    /**
     * @var string 本周资源增长比例
     */
    public $ThisMondayUsageGrowthRate;

    /**
     * @var string 上周资源增长比例
     */
    public $LastMondayUsageGrowthRate;

    /**
     * @param string $Item 资源统计项名称
     * @param string $Unit 资源统计项单位
     * @param string $Total 资源总量
     * @param string $Usage 已用资源
     * @param string $UsageRate 已用资源占比
     * @param string $Remain 剩余资源
     * @param string $RemainRate 剩余资源占比
     * @param string $ThisMondayUsageRate 本周一零点资源使用率
     * @param string $ThisMondayUsageGrowthRate 本周资源增长比例
     * @param string $LastMondayUsageGrowthRate 上周资源增长比例
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("UsageRate",$param) and $param["UsageRate"] !== null) {
            $this->UsageRate = $param["UsageRate"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("RemainRate",$param) and $param["RemainRate"] !== null) {
            $this->RemainRate = $param["RemainRate"];
        }

        if (array_key_exists("ThisMondayUsageRate",$param) and $param["ThisMondayUsageRate"] !== null) {
            $this->ThisMondayUsageRate = $param["ThisMondayUsageRate"];
        }

        if (array_key_exists("ThisMondayUsageGrowthRate",$param) and $param["ThisMondayUsageGrowthRate"] !== null) {
            $this->ThisMondayUsageGrowthRate = $param["ThisMondayUsageGrowthRate"];
        }

        if (array_key_exists("LastMondayUsageGrowthRate",$param) and $param["LastMondayUsageGrowthRate"] !== null) {
            $this->LastMondayUsageGrowthRate = $param["LastMondayUsageGrowthRate"];
        }
    }
}
