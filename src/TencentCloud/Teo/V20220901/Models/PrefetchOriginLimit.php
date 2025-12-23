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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源限速限制详情。
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getDomainName() 获取加速域名。
 * @method void setDomainName(string $DomainName) 设置加速域名。
 * @method string getArea() 获取回源限速限制的加速区域。
预热时，该加速区域将会受到配置的Bandwidth值限制。取值有：
<li>Overseas：全球可用区（不含中国大陆）；</li>
<li>MainlandChina：中国大陆可用区。</li>
 * @method void setArea(string $Area) 设置回源限速限制的加速区域。
预热时，该加速区域将会受到配置的Bandwidth值限制。取值有：
<li>Overseas：全球可用区（不含中国大陆）；</li>
<li>MainlandChina：中国大陆可用区。</li>
 * @method integer getBandwidth() 获取回源限速带宽。
预热时回到源站的带宽上限值，取值范围 100 - 100,000，单位 Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置回源限速带宽。
预热时回到源站的带宽上限值，取值范围 100 - 100,000，单位 Mbps。
 * @method string getCreateTime() 获取回源限速限制创建的时间。
 * @method void setCreateTime(string $CreateTime) 设置回源限速限制创建的时间。
 * @method string getUpdateTime() 获取回源限速限制更新的时间。
 * @method void setUpdateTime(string $UpdateTime) 设置回源限速限制更新的时间。
 */
class PrefetchOriginLimit extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 加速域名。
     */
    public $DomainName;

    /**
     * @var string 回源限速限制的加速区域。
预热时，该加速区域将会受到配置的Bandwidth值限制。取值有：
<li>Overseas：全球可用区（不含中国大陆）；</li>
<li>MainlandChina：中国大陆可用区。</li>
     */
    public $Area;

    /**
     * @var integer 回源限速带宽。
预热时回到源站的带宽上限值，取值范围 100 - 100,000，单位 Mbps。
     */
    public $Bandwidth;

    /**
     * @var string 回源限速限制创建的时间。
     */
    public $CreateTime;

    /**
     * @var string 回源限速限制更新的时间。
     */
    public $UpdateTime;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $DomainName 加速域名。
     * @param string $Area 回源限速限制的加速区域。
预热时，该加速区域将会受到配置的Bandwidth值限制。取值有：
<li>Overseas：全球可用区（不含中国大陆）；</li>
<li>MainlandChina：中国大陆可用区。</li>
     * @param integer $Bandwidth 回源限速带宽。
预热时回到源站的带宽上限值，取值范围 100 - 100,000，单位 Mbps。
     * @param string $CreateTime 回源限速限制创建的时间。
     * @param string $UpdateTime 回源限速限制更新的时间。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
