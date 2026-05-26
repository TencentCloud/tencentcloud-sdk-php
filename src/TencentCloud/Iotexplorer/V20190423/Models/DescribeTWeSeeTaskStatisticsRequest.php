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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTWeSeeTaskStatistics请求参数结构体
 *
 * @method string getServiceType() 获取算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
 * @method void setServiceType(string $ServiceType) 设置算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
 * @method string getServiceTier() 获取套餐规格。可选值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
 * @method void setServiceTier(string $ServiceTier) 设置套餐规格。可选值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
 * @method integer getStartTime() 获取起始时间 UNIX 时间戳，单位：秒
 * @method void setStartTime(integer $StartTime) 设置起始时间 UNIX 时间戳，单位：秒
 * @method integer getEndTime() 获取结束时间 UNIX 时间戳，单位：秒
 * @method void setEndTime(integer $EndTime) 设置结束时间 UNIX 时间戳，单位：秒
 * @method integer getInterval() 获取数据点间隔，单位：秒；-1 表示汇总，只返回 1 个数据点
 * @method void setInterval(integer $Interval) 设置数据点间隔，单位：秒；-1 表示汇总，只返回 1 个数据点
 */
class DescribeTWeSeeTaskStatisticsRequest extends AbstractModel
{
    /**
     * @var string 算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
     */
    public $ServiceType;

    /**
     * @var string 套餐规格。可选值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
     */
    public $ServiceTier;

    /**
     * @var integer 起始时间 UNIX 时间戳，单位：秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间 UNIX 时间戳，单位：秒
     */
    public $EndTime;

    /**
     * @var integer 数据点间隔，单位：秒；-1 表示汇总，只返回 1 个数据点
     */
    public $Interval;

    /**
     * @param string $ServiceType 算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
     * @param string $ServiceTier 套餐规格。可选值：

- `POSTPAID`：后付费（适用于视频理解、图片理解）
- `BASIC`：包年包月基础版（适用于视频理解）
     * @param integer $StartTime 起始时间 UNIX 时间戳，单位：秒
     * @param integer $EndTime 结束时间 UNIX 时间戳，单位：秒
     * @param integer $Interval 数据点间隔，单位：秒；-1 表示汇总，只返回 1 个数据点
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceTier",$param) and $param["ServiceTier"] !== null) {
            $this->ServiceTier = $param["ServiceTier"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
