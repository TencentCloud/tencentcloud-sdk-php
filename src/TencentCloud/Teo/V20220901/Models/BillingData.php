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
 * 计费数据项。
 *
 * @method string getTime() 获取数据时间戳。
 * @method void setTime(string $Time) 设置数据时间戳。
 * @method integer getValue() 获取数值。
 * @method void setValue(integer $Value) 设置数值。
 * @method string getZoneId() 获取数据点所属站点 ID。若使用内容标识符功能，则该项值为内容标识符。
 * @method void setZoneId(string $ZoneId) 设置数据点所属站点 ID。若使用内容标识符功能，则该项值为内容标识符。
 * @method string getHost() 获取数据点所属域名。
 * @method void setHost(string $Host) 设置数据点所属域名。
 * @method string getProxyId() 获取数据点所属四层代理实例 ID。
 * @method void setProxyId(string $ProxyId) 设置数据点所属四层代理实例 ID。
 * @method string getRegionId() 获取数据点所属计费大区 ID。计费大区以实际服务用户客户端的 EdgeOne 节点所在区域为准。取值有：<li>CH：中国大陆境内</li><li>AF：非洲</li><li>AS1：亚太一区</li><li>AS2：亚太二区</li><li>AS3：亚太三区</li><li>EU：欧洲</li><li>MidEast：中东</li><li>NA：北美</li><li> SA：南美</li>
 * @method void setRegionId(string $RegionId) 设置数据点所属计费大区 ID。计费大区以实际服务用户客户端的 EdgeOne 节点所在区域为准。取值有：<li>CH：中国大陆境内</li><li>AF：非洲</li><li>AS1：亚太一区</li><li>AS2：亚太二区</li><li>AS3：亚太三区</li><li>EU：欧洲</li><li>MidEast：中东</li><li>NA：北美</li><li> SA：南美</li>
 */
class BillingData extends AbstractModel
{
    /**
     * @var string 数据时间戳。
     */
    public $Time;

    /**
     * @var integer 数值。
     */
    public $Value;

    /**
     * @var string 数据点所属站点 ID。若使用内容标识符功能，则该项值为内容标识符。
     */
    public $ZoneId;

    /**
     * @var string 数据点所属域名。
     */
    public $Host;

    /**
     * @var string 数据点所属四层代理实例 ID。
     */
    public $ProxyId;

    /**
     * @var string 数据点所属计费大区 ID。计费大区以实际服务用户客户端的 EdgeOne 节点所在区域为准。取值有：<li>CH：中国大陆境内</li><li>AF：非洲</li><li>AS1：亚太一区</li><li>AS2：亚太二区</li><li>AS3：亚太三区</li><li>EU：欧洲</li><li>MidEast：中东</li><li>NA：北美</li><li> SA：南美</li>
     */
    public $RegionId;

    /**
     * @param string $Time 数据时间戳。
     * @param integer $Value 数值。
     * @param string $ZoneId 数据点所属站点 ID。若使用内容标识符功能，则该项值为内容标识符。
     * @param string $Host 数据点所属域名。
     * @param string $ProxyId 数据点所属四层代理实例 ID。
     * @param string $RegionId 数据点所属计费大区 ID。计费大区以实际服务用户客户端的 EdgeOne 节点所在区域为准。取值有：<li>CH：中国大陆境内</li><li>AF：非洲</li><li>AS1：亚太一区</li><li>AS2：亚太二区</li><li>AS3：亚太三区</li><li>EU：欧洲</li><li>MidEast：中东</li><li>NA：北美</li><li> SA：南美</li>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
