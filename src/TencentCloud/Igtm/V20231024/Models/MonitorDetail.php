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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控器详情
 *
 * @method integer getMonitorId() 获取探测规则id
 * @method void setMonitorId(integer $MonitorId) 设置探测规则id
 * @method string getMonitorName() 获取监控器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorName(string $MonitorName) 设置监控器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取所属用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置所属用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetectorGroupIds() 获取监控节点id组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectorGroupIds(array $DetectorGroupIds) 设置监控节点id组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckProtocol() 获取探测协议 PING TCP HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckProtocol(string $CheckProtocol) 设置探测协议 PING TCP HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckInterval() 获取探测周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckInterval(integer $CheckInterval) 设置探测周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPingNum() 获取发包数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPingNum(integer $PingNum) 设置发包数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTcpPort() 获取tcp端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcpPort(integer $TcpPort) 设置tcp端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取探测 host
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置探测 host
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取探测路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置探测路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnCodeThreshold() 获取返回值阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnCodeThreshold(integer $ReturnCodeThreshold) 设置返回值阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableRedirect() 获取是否开启3xx重定向跟随 ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRedirect(string $EnableRedirect) 设置是否开启3xx重定向跟随 ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableSni() 获取是否启用 sni
ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableSni(string $EnableSni) 设置是否启用 sni
ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPacketLossRate() 获取丢包率上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPacketLossRate(integer $PacketLossRate) 设置丢包率上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取探测超时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置探测超时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailTimes() 获取失败次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailTimes(integer $FailTimes) 设置失败次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailRate() 获取失败率上限100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailRate(integer $FailRate) 设置失败率上限100
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedOn() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectorStyle() 获取监控节点类型
AUTO INTERNAL OVERSEAS IPV6 ALL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectorStyle(string $DetectorStyle) 设置监控节点类型
AUTO INTERNAL OVERSEAS IPV6 ALL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectNum() 获取探测次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectNum(integer $DetectNum) 设置探测次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContinuePeriod() 获取持续周期数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinuePeriod(integer $ContinuePeriod) 设置持续周期数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonitorDetail extends AbstractModel
{
    /**
     * @var integer 探测规则id
     */
    public $MonitorId;

    /**
     * @var string 监控器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorName;

    /**
     * @var string 所属用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var array 监控节点id组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectorGroupIds;

    /**
     * @var string 探测协议 PING TCP HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckProtocol;

    /**
     * @var integer 探测周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckInterval;

    /**
     * @var integer 发包数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PingNum;

    /**
     * @var integer tcp端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcpPort;

    /**
     * @var string 探测 host
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string 探测路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var integer 返回值阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnCodeThreshold;

    /**
     * @var string 是否开启3xx重定向跟随 ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRedirect;

    /**
     * @var string 是否启用 sni
ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableSni;

    /**
     * @var integer 丢包率上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PacketLossRate;

    /**
     * @var integer 探测超时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var integer 失败次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailTimes;

    /**
     * @var integer 失败率上限100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailRate;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedOn;

    /**
     * @var string 监控节点类型
AUTO INTERNAL OVERSEAS IPV6 ALL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectorStyle;

    /**
     * @var integer 探测次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectNum;

    /**
     * @var integer 持续周期数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinuePeriod;

    /**
     * @param integer $MonitorId 探测规则id
     * @param string $MonitorName 监控器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 所属用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetectorGroupIds 监控节点id组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckProtocol 探测协议 PING TCP HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckInterval 探测周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PingNum 发包数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TcpPort tcp端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host 探测 host
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 探测路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnCodeThreshold 返回值阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableRedirect 是否开启3xx重定向跟随 ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableSni 是否启用 sni
ENABLED DISABLED
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PacketLossRate 丢包率上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 探测超时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailTimes 失败次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailRate 失败率上限100
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedOn 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectorStyle 监控节点类型
AUTO INTERNAL OVERSEAS IPV6 ALL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectNum 探测次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContinuePeriod 持续周期数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("MonitorName",$param) and $param["MonitorName"] !== null) {
            $this->MonitorName = $param["MonitorName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DetectorGroupIds",$param) and $param["DetectorGroupIds"] !== null) {
            $this->DetectorGroupIds = $param["DetectorGroupIds"];
        }

        if (array_key_exists("CheckProtocol",$param) and $param["CheckProtocol"] !== null) {
            $this->CheckProtocol = $param["CheckProtocol"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("FailTimes",$param) and $param["FailTimes"] !== null) {
            $this->FailTimes = $param["FailTimes"];
        }

        if (array_key_exists("FailRate",$param) and $param["FailRate"] !== null) {
            $this->FailRate = $param["FailRate"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("DetectorStyle",$param) and $param["DetectorStyle"] !== null) {
            $this->DetectorStyle = $param["DetectorStyle"];
        }

        if (array_key_exists("DetectNum",$param) and $param["DetectNum"] !== null) {
            $this->DetectNum = $param["DetectNum"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }
    }
}
