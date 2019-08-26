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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStartTime() 获取起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
 * @method void setEndTime(string $EndTime) 设置结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
 * @method array getPlayDomains() 获取直播播放域名，若不填，表示总体数据。
 * @method void setPlayDomains(array $PlayDomains) 设置直播播放域名，若不填，表示总体数据。
 * @method string getMainlandOrOversea() 获取可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据。
默认：查询国内+国外的数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据。
默认：查询国内+国外的数据。
 * @method integer getGranularity() 获取数据粒度，支持如下粒度：
5：5分钟粒度，（跨度不支持超过1天），
60：1小时粒度（跨度不支持超过一个月），
1440：天粒度（跨度不支持超过一个月）。
默认值：5。
 * @method void setGranularity(integer $Granularity) 设置数据粒度，支持如下粒度：
5：5分钟粒度，（跨度不支持超过1天），
60：1小时粒度（跨度不支持超过一个月），
1440：天粒度（跨度不支持超过一个月）。
默认值：5。
 */

/**
 *DescribeBillBandwidthAndFluxList请求参数结构体
 */
class DescribeBillBandwidthAndFluxListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
     */
    public $EndTime;

    /**
     * @var array 直播播放域名，若不填，表示总体数据。
     */
    public $PlayDomains;

    /**
     * @var string 可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据。
默认：查询国内+国外的数据。
     */
    public $MainlandOrOversea;

    /**
     * @var integer 数据粒度，支持如下粒度：
5：5分钟粒度，（跨度不支持超过1天），
60：1小时粒度（跨度不支持超过一个月），
1440：天粒度（跨度不支持超过一个月）。
默认值：5。
     */
    public $Granularity;
    /**
     * @param string $StartTime 起始时间点，格式为yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间点，格式为yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
     * @param array $PlayDomains 直播播放域名，若不填，表示总体数据。
     * @param string $MainlandOrOversea 可选值：
Mainland：查询国内数据，
Oversea：则查询国外数据。
默认：查询国内+国外的数据。
     * @param integer $Granularity 数据粒度，支持如下粒度：
5：5分钟粒度，（跨度不支持超过1天），
60：1小时粒度（跨度不支持超过一个月），
1440：天粒度（跨度不支持超过一个月）。
默认值：5。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
