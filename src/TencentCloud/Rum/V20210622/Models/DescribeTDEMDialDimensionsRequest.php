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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMDialDimensions请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method integer getStartTime() 获取<p>开始时间，毫秒时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，毫秒时间戳</p>
 * @method integer getEndTime() 获取<p>结束时间，毫秒时间戳，必须大于 StartTime</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，毫秒时间戳，必须大于 StartTime</p>
 * @method string getDimension() 获取<p>维度。取值说明：platform、app_version、device、net_type、operator、region、country、target_ip。</p>
 * @method void setDimension(string $Dimension) 设置<p>维度。取值说明：platform、app_version、device、net_type、operator、region、country、target_ip。</p>
 * @method string getTaskId() 获取<p>任务 ID。不传表示不过滤。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID。不传表示不过滤。</p>
 * @method string getPlatform() 获取<p>客户端平台。不传表示不过滤。</p>
 * @method void setPlatform(string $Platform) 设置<p>客户端平台。不传表示不过滤。</p>
 * @method string getAppVersion() 获取<p>应用版本。不传表示不过滤。</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本。不传表示不过滤。</p>
 * @method string getDevice() 获取<p>设备机型，对应 device_type。不传表示不过滤。</p>
 * @method void setDevice(string $Device) 设置<p>设备机型，对应 device_type。不传表示不过滤。</p>
 * @method string getNetType() 获取<p>网络类型，对应 network_type。不传表示不过滤。</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型，对应 network_type。不传表示不过滤。</p>
 * @method string getOperator() 获取<p>客户端运营商，对应 isp。不传表示不过滤。不是目标 IP 运营商。</p>
 * @method void setOperator(string $Operator) 设置<p>客户端运营商，对应 isp。不传表示不过滤。不是目标 IP 运营商。</p>
 * @method string getClientRegion() 获取<p>客户端地区，对应 province。云 API 公共参数已占用 Region，筛选入参名为 ClientRegion。不传表示不过滤。不是目标 IP 地区。</p>
 * @method void setClientRegion(string $ClientRegion) 设置<p>客户端地区，对应 province。云 API 公共参数已占用 Region，筛选入参名为 ClientRegion。不传表示不过滤。不是目标 IP 地区。</p>
 * @method string getTargetIp() 获取<p>目标 IP。不传表示不过滤。</p>
 * @method void setTargetIp(string $TargetIp) 设置<p>目标 IP。不传表示不过滤。</p>
 * @method string getEnvironment() 获取<p>环境。可选。不传表示不过滤。</p>
 * @method void setEnvironment(string $Environment) 设置<p>环境。可选。不传表示不过滤。</p>
 */
class DescribeTDEMDialDimensionsRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间，毫秒时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，毫秒时间戳，必须大于 StartTime</p>
     */
    public $EndTime;

    /**
     * @var string <p>维度。取值说明：platform、app_version、device、net_type、operator、region、country、target_ip。</p>
     */
    public $Dimension;

    /**
     * @var string <p>任务 ID。不传表示不过滤。</p>
     */
    public $TaskId;

    /**
     * @var string <p>客户端平台。不传表示不过滤。</p>
     */
    public $Platform;

    /**
     * @var string <p>应用版本。不传表示不过滤。</p>
     */
    public $AppVersion;

    /**
     * @var string <p>设备机型，对应 device_type。不传表示不过滤。</p>
     */
    public $Device;

    /**
     * @var string <p>网络类型，对应 network_type。不传表示不过滤。</p>
     */
    public $NetType;

    /**
     * @var string <p>客户端运营商，对应 isp。不传表示不过滤。不是目标 IP 运营商。</p>
     */
    public $Operator;

    /**
     * @var string <p>客户端地区，对应 province。云 API 公共参数已占用 Region，筛选入参名为 ClientRegion。不传表示不过滤。不是目标 IP 地区。</p>
     */
    public $ClientRegion;

    /**
     * @var string <p>目标 IP。不传表示不过滤。</p>
     */
    public $TargetIp;

    /**
     * @var string <p>环境。可选。不传表示不过滤。</p>
     */
    public $Environment;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param integer $StartTime <p>开始时间，毫秒时间戳</p>
     * @param integer $EndTime <p>结束时间，毫秒时间戳，必须大于 StartTime</p>
     * @param string $Dimension <p>维度。取值说明：platform、app_version、device、net_type、operator、region、country、target_ip。</p>
     * @param string $TaskId <p>任务 ID。不传表示不过滤。</p>
     * @param string $Platform <p>客户端平台。不传表示不过滤。</p>
     * @param string $AppVersion <p>应用版本。不传表示不过滤。</p>
     * @param string $Device <p>设备机型，对应 device_type。不传表示不过滤。</p>
     * @param string $NetType <p>网络类型，对应 network_type。不传表示不过滤。</p>
     * @param string $Operator <p>客户端运营商，对应 isp。不传表示不过滤。不是目标 IP 运营商。</p>
     * @param string $ClientRegion <p>客户端地区，对应 province。云 API 公共参数已占用 Region，筛选入参名为 ClientRegion。不传表示不过滤。不是目标 IP 地区。</p>
     * @param string $TargetIp <p>目标 IP。不传表示不过滤。</p>
     * @param string $Environment <p>环境。可选。不传表示不过滤。</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ClientRegion",$param) and $param["ClientRegion"] !== null) {
            $this->ClientRegion = $param["ClientRegion"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
