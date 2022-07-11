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
 * DescribePushBandwidthAndFluxList请求参数结构体
 *
 * @method string getStartTime() 获取起始时间点，格式为 yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间点，格式为 yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间点，格式为 yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
 * @method void setEndTime(string $EndTime) 设置结束时间点，格式为 yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
 * @method array getPushDomains() 获取域名，可以填多个，若不填，表示总体数据。
 * @method void setPushDomains(array $PushDomains) 设置域名，可以填多个，若不填，表示总体数据。
 * @method string getMainlandOrOversea() 获取可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
不填则默认查询全球地区（境内+境外）的数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
不填则默认查询全球地区（境内+境外）的数据。
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
 * @method array getRegionNames() 获取大区，映射表如下：
China Mainland 中国大陆
Asia Pacific I 亚太一区
Asia Pacific II 亚太二区
Asia Pacific III 亚太三区
Europe 欧洲
North America 北美
South America 南美
Middle East 中东
Africa 非洲。
 * @method void setRegionNames(array $RegionNames) 设置大区，映射表如下：
China Mainland 中国大陆
Asia Pacific I 亚太一区
Asia Pacific II 亚太二区
Asia Pacific III 亚太三区
Europe 欧洲
North America 北美
South America 南美
Middle East 中东
Africa 非洲。
 * @method array getCountryNames() 获取国家，映射表参照如下文档：
https://cloud.tencent.com/document/product/267/34019。
 * @method void setCountryNames(array $CountryNames) 设置国家，映射表参照如下文档：
https://cloud.tencent.com/document/product/267/34019。
 */
class DescribePushBandwidthAndFluxListRequest extends AbstractModel
{
    /**
     * @var string 起始时间点，格式为 yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间点，格式为 yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
     */
    public $EndTime;

    /**
     * @var array 域名，可以填多个，若不填，表示总体数据。
     */
    public $PushDomains;

    /**
     * @var string 可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
不填则默认查询全球地区（境内+境外）的数据。
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
     * @var array 大区，映射表如下：
China Mainland 中国大陆
Asia Pacific I 亚太一区
Asia Pacific II 亚太二区
Asia Pacific III 亚太三区
Europe 欧洲
North America 北美
South America 南美
Middle East 中东
Africa 非洲。
     */
    public $RegionNames;

    /**
     * @var array 国家，映射表参照如下文档：
https://cloud.tencent.com/document/product/267/34019。
     */
    public $CountryNames;

    /**
     * @param string $StartTime 起始时间点，格式为 yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间点，格式为 yyyy-mm-dd HH:MM:SS，起始和结束时间跨度不支持超过31天。
     * @param array $PushDomains 域名，可以填多个，若不填，表示总体数据。
     * @param string $MainlandOrOversea 可选值：
Mainland：查询中国大陆（境内）数据，
Oversea：则查询国际/港澳台（境外）数据，
不填则默认查询全球地区（境内+境外）的数据。
     * @param integer $Granularity 数据粒度，支持如下粒度：
5：5分钟粒度，（跨度不支持超过1天），
60：1小时粒度（跨度不支持超过一个月），
1440：天粒度（跨度不支持超过一个月）。
默认值：5。
     * @param array $RegionNames 大区，映射表如下：
China Mainland 中国大陆
Asia Pacific I 亚太一区
Asia Pacific II 亚太二区
Asia Pacific III 亚太三区
Europe 欧洲
North America 北美
South America 南美
Middle East 中东
Africa 非洲。
     * @param array $CountryNames 国家，映射表参照如下文档：
https://cloud.tencent.com/document/product/267/34019。
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

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("RegionNames",$param) and $param["RegionNames"] !== null) {
            $this->RegionNames = $param["RegionNames"];
        }

        if (array_key_exists("CountryNames",$param) and $param["CountryNames"] !== null) {
            $this->CountryNames = $param["CountryNames"];
        }
    }
}
