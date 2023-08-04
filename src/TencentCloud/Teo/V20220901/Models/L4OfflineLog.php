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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线日志详细信息
 *
 * @method string getProxyId() 获取四层代理实例 ID。
 * @method void setProxyId(string $ProxyId) 设置四层代理实例 ID。
 * @method string getArea() 获取日志所属区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置日志所属区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method string getLogPacketName() 获取离线日志数据包名。
 * @method void setLogPacketName(string $LogPacketName) 设置离线日志数据包名。
 * @method string getUrl() 获取离线日志下载地址。
 * @method void setUrl(string $Url) 设置离线日志下载地址。
 * @method integer getLogTime() 获取日志打包时间，此参数已经废弃。
 * @method void setLogTime(integer $LogTime) 设置日志打包时间，此参数已经废弃。
 * @method string getLogStartTime() 获取日志打包开始时间。
 * @method void setLogStartTime(string $LogStartTime) 设置日志打包开始时间。
 * @method string getLogEndTime() 获取日志打包结束时间。
 * @method void setLogEndTime(string $LogEndTime) 设置日志打包结束时间。
 * @method integer getSize() 获取日志大小，单位为 Byte。
 * @method void setSize(integer $Size) 设置日志大小，单位为 Byte。
 */
class L4OfflineLog extends AbstractModel
{
    /**
     * @var string 四层代理实例 ID。
     */
    public $ProxyId;

    /**
     * @var string 日志所属区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var string 离线日志数据包名。
     */
    public $LogPacketName;

    /**
     * @var string 离线日志下载地址。
     */
    public $Url;

    /**
     * @var integer 日志打包时间，此参数已经废弃。
     */
    public $LogTime;

    /**
     * @var string 日志打包开始时间。
     */
    public $LogStartTime;

    /**
     * @var string 日志打包结束时间。
     */
    public $LogEndTime;

    /**
     * @var integer 日志大小，单位为 Byte。
     */
    public $Size;

    /**
     * @param string $ProxyId 四层代理实例 ID。
     * @param string $Area 日志所属区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     * @param string $LogPacketName 离线日志数据包名。
     * @param string $Url 离线日志下载地址。
     * @param integer $LogTime 日志打包时间，此参数已经废弃。
     * @param string $LogStartTime 日志打包开始时间。
     * @param string $LogEndTime 日志打包结束时间。
     * @param integer $Size 日志大小，单位为 Byte。
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogPacketName",$param) and $param["LogPacketName"] !== null) {
            $this->LogPacketName = $param["LogPacketName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("LogStartTime",$param) and $param["LogStartTime"] !== null) {
            $this->LogStartTime = $param["LogStartTime"];
        }

        if (array_key_exists("LogEndTime",$param) and $param["LogEndTime"] !== null) {
            $this->LogEndTime = $param["LogEndTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
