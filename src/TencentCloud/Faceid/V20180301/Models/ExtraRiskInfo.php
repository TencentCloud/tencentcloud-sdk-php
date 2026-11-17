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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtraRiskInfo
 *
 * @method string getPersonId() 获取<p>客户业务域内稳定且唯一的人员标识，用于把同一人员的多次位置上报关联起来，判断是否存在异常位移。</p><p>入参限制：长度 ≤ 128 字符；不可含控制字符（ASCII &lt; 0x20 或 0x7F）；建议传脱敏标识，勿传明文身份证号/手机号</p>
 * @method void setPersonId(string $PersonId) 设置<p>客户业务域内稳定且唯一的人员标识，用于把同一人员的多次位置上报关联起来，判断是否存在异常位移。</p><p>入参限制：长度 ≤ 128 字符；不可含控制字符（ASCII &lt; 0x20 或 0x7F）；建议传脱敏标识，勿传明文身份证号/手机号</p>
 * @method string getLatitude() 获取<p>设备采集时的纬度，WGS84 十进制度    </p><p>入参限制：与 Longitude 必须成对出现；取值 [-90, 90]；须为有效数字，不接受 NaN/Inf；JSON 中按字符串传（如 &quot;22.5431&quot;）</p>
 * @method void setLatitude(string $Latitude) 设置<p>设备采集时的纬度，WGS84 十进制度    </p><p>入参限制：与 Longitude 必须成对出现；取值 [-90, 90]；须为有效数字，不接受 NaN/Inf；JSON 中按字符串传（如 &quot;22.5431&quot;）</p>
 * @method string getLongitude() 获取<p>设备采集时的经度，WGS84 十进制度    </p><p>入参限制：与 Latitude 必须成对出现；取值 [-180, 180]；其余同上</p>
 * @method void setLongitude(string $Longitude) 设置<p>设备采集时的经度，WGS84 十进制度    </p><p>入参限制：与 Latitude 必须成对出现；取值 [-180, 180]；其余同上</p>
 * @method string getIp() 获取<p>设备采集时的公网出口 IP    </p><p>入参限制：长度 ≤ 64；须为可解析的 IPv4/IPv6；私网、回环、链路本地、组播地址视为不可定位</p>
 * @method void setIp(string $Ip) 设置<p>设备采集时的公网出口 IP    </p><p>入参限制：长度 ≤ 64；须为可解析的 IPv4/IPv6；私网、回环、链路本地、组播地址视为不可定位</p>
 */
class ExtraRiskInfo extends AbstractModel
{
    /**
     * @var string <p>客户业务域内稳定且唯一的人员标识，用于把同一人员的多次位置上报关联起来，判断是否存在异常位移。</p><p>入参限制：长度 ≤ 128 字符；不可含控制字符（ASCII &lt; 0x20 或 0x7F）；建议传脱敏标识，勿传明文身份证号/手机号</p>
     */
    public $PersonId;

    /**
     * @var string <p>设备采集时的纬度，WGS84 十进制度    </p><p>入参限制：与 Longitude 必须成对出现；取值 [-90, 90]；须为有效数字，不接受 NaN/Inf；JSON 中按字符串传（如 &quot;22.5431&quot;）</p>
     */
    public $Latitude;

    /**
     * @var string <p>设备采集时的经度，WGS84 十进制度    </p><p>入参限制：与 Latitude 必须成对出现；取值 [-180, 180]；其余同上</p>
     */
    public $Longitude;

    /**
     * @var string <p>设备采集时的公网出口 IP    </p><p>入参限制：长度 ≤ 64；须为可解析的 IPv4/IPv6；私网、回环、链路本地、组播地址视为不可定位</p>
     */
    public $Ip;

    /**
     * @param string $PersonId <p>客户业务域内稳定且唯一的人员标识，用于把同一人员的多次位置上报关联起来，判断是否存在异常位移。</p><p>入参限制：长度 ≤ 128 字符；不可含控制字符（ASCII &lt; 0x20 或 0x7F）；建议传脱敏标识，勿传明文身份证号/手机号</p>
     * @param string $Latitude <p>设备采集时的纬度，WGS84 十进制度    </p><p>入参限制：与 Longitude 必须成对出现；取值 [-90, 90]；须为有效数字，不接受 NaN/Inf；JSON 中按字符串传（如 &quot;22.5431&quot;）</p>
     * @param string $Longitude <p>设备采集时的经度，WGS84 十进制度    </p><p>入参限制：与 Latitude 必须成对出现；取值 [-180, 180]；其余同上</p>
     * @param string $Ip <p>设备采集时的公网出口 IP    </p><p>入参限制：长度 ≤ 64；须为可解析的 IPv4/IPv6；私网、回环、链路本地、组播地址视为不可定位</p>
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
