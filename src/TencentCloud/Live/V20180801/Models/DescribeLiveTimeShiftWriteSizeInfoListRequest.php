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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTimeShiftWriteSizeInfoList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
 * @method void setStartTime(string $StartTime) 设置起始时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
 * @method string getEndTime() 获取结束时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
 * @method void setEndTime(string $EndTime) 设置结束时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
 * @method array getDomainNames() 获取域名。
 * @method void setDomainNames(array $DomainNames) 设置域名。
 * @method array getDimensions() 获取维度
Area地区、Domain 域名、StorageDays 时移天数
 * @method void setDimensions(array $Dimensions) 设置维度
Area地区、Domain 域名、StorageDays 时移天数
 * @method array getStorageDays() 获取时移天数。
 * @method void setStorageDays(array $StorageDays) 设置时移天数。
 * @method integer getGranularity() 获取时间跨度（分钟）
默认5，可选 5、60或者1440。
 * @method void setGranularity(integer $Granularity) 设置时间跨度（分钟）
默认5，可选 5、60或者1440。
 * @method string getMainlandOrOversea() 获取区域
可选Mainland、Oversea。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置区域
可选Mainland、Oversea。
 */
class DescribeLiveTimeShiftWriteSizeInfoListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
     */
    public $EndTime;

    /**
     * @var array 域名。
     */
    public $DomainNames;

    /**
     * @var array 维度
Area地区、Domain 域名、StorageDays 时移天数
     */
    public $Dimensions;

    /**
     * @var array 时移天数。
     */
    public $StorageDays;

    /**
     * @var integer 时间跨度（分钟）
默认5，可选 5、60或者1440。
     */
    public $Granularity;

    /**
     * @var string 区域
可选Mainland、Oversea。
     */
    public $MainlandOrOversea;

    /**
     * @param string $StartTime 起始时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
     * @param string $EndTime 结束时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
支持最近六个月的查询，查询开始和结束时间跨度不支持超过31天。
     * @param array $DomainNames 域名。
     * @param array $Dimensions 维度
Area地区、Domain 域名、StorageDays 时移天数
     * @param array $StorageDays 时移天数。
     * @param integer $Granularity 时间跨度（分钟）
默认5，可选 5、60或者1440。
     * @param string $MainlandOrOversea 区域
可选Mainland、Oversea。
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

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("StorageDays",$param) and $param["StorageDays"] !== null) {
            $this->StorageDays = $param["StorageDays"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
