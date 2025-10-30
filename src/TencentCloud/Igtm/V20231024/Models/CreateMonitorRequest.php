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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMonitor请求参数结构体
 *
 * @method string getMonitorName() 获取监控器名称
 * @method void setMonitorName(string $MonitorName) 设置监控器名称
 * @method string getCheckProtocol() 获取探测协议，可选值 PING TCP HTTP HTTPS
 * @method void setCheckProtocol(string $CheckProtocol) 设置探测协议，可选值 PING TCP HTTP HTTPS
 * @method integer getCheckInterval() 获取检查间隔（秒），可选值有15 60 120 300
 * @method void setCheckInterval(integer $CheckInterval) 设置检查间隔（秒），可选值有15 60 120 300
 * @method integer getTimeout() 获取超时时间，单位秒，可选值为2 3 5 10
 * @method void setTimeout(integer $Timeout) 设置超时时间，单位秒，可选值为2 3 5 10
 * @method integer getFailTimes() 获取重试次数，可选值为 0，1，2
 * @method void setFailTimes(integer $FailTimes) 设置重试次数，可选值为 0，1，2
 * @method integer getFailRate() 获取失败比例，取值为 20 30 40 50 60 70 80 100，默认值50
 * @method void setFailRate(integer $FailRate) 设置失败比例，取值为 20 30 40 50 60 70 80 100，默认值50
 * @method string getDetectorStyle() 获取监控节点类型，可选值有AUTO INTERNAL OVERSEAS IPV6 ALL
 * @method void setDetectorStyle(string $DetectorStyle) 设置监控节点类型，可选值有AUTO INTERNAL OVERSEAS IPV6 ALL
 * @method array getDetectorGroupIds() 获取探测器组id列表以,分隔
 * @method void setDetectorGroupIds(array $DetectorGroupIds) 设置探测器组id列表以,分隔
 * @method integer getPingNum() 获取PING 包数目，当CheckProtocol=ping时必填，可选值有20 50 100
 * @method void setPingNum(integer $PingNum) 设置PING 包数目，当CheckProtocol=ping时必填，可选值有20 50 100
 * @method integer getTcpPort() 获取检查端口，可选值在1-65535之间
 * @method void setTcpPort(integer $TcpPort) 设置检查端口，可选值在1-65535之间
 * @method string getHost() 获取Host 设置，默认为业务域名
 * @method void setHost(string $Host) 设置Host 设置，默认为业务域名
 * @method string getPath() 获取URL 路径，默认为“/”
 * @method void setPath(string $Path) 设置URL 路径，默认为“/”
 * @method integer getReturnCodeThreshold() 获取返回错误码阈值, 可选值为 400 和 500, 默认值500
 * @method void setReturnCodeThreshold(integer $ReturnCodeThreshold) 设置返回错误码阈值, 可选值为 400 和 500, 默认值500
 * @method string getEnableRedirect() 获取跟随 3XX 重定向 ，不开启为 DISABLED， 开启为 ENABLED，默认不开启
 * @method void setEnableRedirect(string $EnableRedirect) 设置跟随 3XX 重定向 ，不开启为 DISABLED， 开启为 ENABLED，默认不开启
 * @method string getEnableSni() 获取启用 SNI，不开启为 DISABLED， 开启为 ENABLED，默认不开启
 * @method void setEnableSni(string $EnableSni) 设置启用 SNI，不开启为 DISABLED， 开启为 ENABLED，默认不开启
 * @method integer getPacketLossRate() 获取丢包率告警阈值，当CheckProtocol=ping时必填取值为10 30 50 80 90 100
 * @method void setPacketLossRate(integer $PacketLossRate) 设置丢包率告警阈值，当CheckProtocol=ping时必填取值为10 30 50 80 90 100
 * @method integer getContinuePeriod() 获取持续周期数，可选值1-5
 * @method void setContinuePeriod(integer $ContinuePeriod) 设置持续周期数，可选值1-5
 */
class CreateMonitorRequest extends AbstractModel
{
    /**
     * @var string 监控器名称
     */
    public $MonitorName;

    /**
     * @var string 探测协议，可选值 PING TCP HTTP HTTPS
     */
    public $CheckProtocol;

    /**
     * @var integer 检查间隔（秒），可选值有15 60 120 300
     */
    public $CheckInterval;

    /**
     * @var integer 超时时间，单位秒，可选值为2 3 5 10
     */
    public $Timeout;

    /**
     * @var integer 重试次数，可选值为 0，1，2
     */
    public $FailTimes;

    /**
     * @var integer 失败比例，取值为 20 30 40 50 60 70 80 100，默认值50
     */
    public $FailRate;

    /**
     * @var string 监控节点类型，可选值有AUTO INTERNAL OVERSEAS IPV6 ALL
     */
    public $DetectorStyle;

    /**
     * @var array 探测器组id列表以,分隔
     */
    public $DetectorGroupIds;

    /**
     * @var integer PING 包数目，当CheckProtocol=ping时必填，可选值有20 50 100
     */
    public $PingNum;

    /**
     * @var integer 检查端口，可选值在1-65535之间
     */
    public $TcpPort;

    /**
     * @var string Host 设置，默认为业务域名
     */
    public $Host;

    /**
     * @var string URL 路径，默认为“/”
     */
    public $Path;

    /**
     * @var integer 返回错误码阈值, 可选值为 400 和 500, 默认值500
     */
    public $ReturnCodeThreshold;

    /**
     * @var string 跟随 3XX 重定向 ，不开启为 DISABLED， 开启为 ENABLED，默认不开启
     */
    public $EnableRedirect;

    /**
     * @var string 启用 SNI，不开启为 DISABLED， 开启为 ENABLED，默认不开启
     */
    public $EnableSni;

    /**
     * @var integer 丢包率告警阈值，当CheckProtocol=ping时必填取值为10 30 50 80 90 100
     */
    public $PacketLossRate;

    /**
     * @var integer 持续周期数，可选值1-5
     */
    public $ContinuePeriod;

    /**
     * @param string $MonitorName 监控器名称
     * @param string $CheckProtocol 探测协议，可选值 PING TCP HTTP HTTPS
     * @param integer $CheckInterval 检查间隔（秒），可选值有15 60 120 300
     * @param integer $Timeout 超时时间，单位秒，可选值为2 3 5 10
     * @param integer $FailTimes 重试次数，可选值为 0，1，2
     * @param integer $FailRate 失败比例，取值为 20 30 40 50 60 70 80 100，默认值50
     * @param string $DetectorStyle 监控节点类型，可选值有AUTO INTERNAL OVERSEAS IPV6 ALL
     * @param array $DetectorGroupIds 探测器组id列表以,分隔
     * @param integer $PingNum PING 包数目，当CheckProtocol=ping时必填，可选值有20 50 100
     * @param integer $TcpPort 检查端口，可选值在1-65535之间
     * @param string $Host Host 设置，默认为业务域名
     * @param string $Path URL 路径，默认为“/”
     * @param integer $ReturnCodeThreshold 返回错误码阈值, 可选值为 400 和 500, 默认值500
     * @param string $EnableRedirect 跟随 3XX 重定向 ，不开启为 DISABLED， 开启为 ENABLED，默认不开启
     * @param string $EnableSni 启用 SNI，不开启为 DISABLED， 开启为 ENABLED，默认不开启
     * @param integer $PacketLossRate 丢包率告警阈值，当CheckProtocol=ping时必填取值为10 30 50 80 90 100
     * @param integer $ContinuePeriod 持续周期数，可选值1-5
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
        if (array_key_exists("MonitorName",$param) and $param["MonitorName"] !== null) {
            $this->MonitorName = $param["MonitorName"];
        }

        if (array_key_exists("CheckProtocol",$param) and $param["CheckProtocol"] !== null) {
            $this->CheckProtocol = $param["CheckProtocol"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("FailTimes",$param) and $param["FailTimes"] !== null) {
            $this->FailTimes = $param["FailTimes"];
        }

        if (array_key_exists("FailRate",$param) and $param["FailRate"] !== null) {
            $this->FailRate = $param["FailRate"];
        }

        if (array_key_exists("DetectorStyle",$param) and $param["DetectorStyle"] !== null) {
            $this->DetectorStyle = $param["DetectorStyle"];
        }

        if (array_key_exists("DetectorGroupIds",$param) and $param["DetectorGroupIds"] !== null) {
            $this->DetectorGroupIds = $param["DetectorGroupIds"];
        }

        if (array_key_exists("PingNum",$param) and $param["PingNum"] !== null) {
            $this->PingNum = $param["PingNum"];
        }

        if (array_key_exists("TcpPort",$param) and $param["TcpPort"] !== null) {
            $this->TcpPort = $param["TcpPort"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ReturnCodeThreshold",$param) and $param["ReturnCodeThreshold"] !== null) {
            $this->ReturnCodeThreshold = $param["ReturnCodeThreshold"];
        }

        if (array_key_exists("EnableRedirect",$param) and $param["EnableRedirect"] !== null) {
            $this->EnableRedirect = $param["EnableRedirect"];
        }

        if (array_key_exists("EnableSni",$param) and $param["EnableSni"] !== null) {
            $this->EnableSni = $param["EnableSni"];
        }

        if (array_key_exists("PacketLossRate",$param) and $param["PacketLossRate"] !== null) {
            $this->PacketLossRate = $param["PacketLossRate"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }
    }
}
