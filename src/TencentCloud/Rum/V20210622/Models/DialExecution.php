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
 * 一次拨测执行批次
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method string getTaskName() 获取<p>任务名称。任务已删除时仍返回当时名称，找不到则为空。</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称。任务已删除时仍返回当时名称，找不到则为空。</p>
 * @method string getTaskSessionId() 获取<p>拨测批次 ID</p>
 * @method void setTaskSessionId(string $TaskSessionId) 设置<p>拨测批次 ID</p>
 * @method integer getStartTime() 获取<p>批次开始时间，毫秒时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>批次开始时间，毫秒时间戳</p>
 * @method string getPlatform() 获取<p>客户端平台</p>
 * @method void setPlatform(string $Platform) 设置<p>客户端平台</p>
 * @method string getAppVersion() 获取<p>应用版本</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本</p>
 * @method string getDevice() 获取<p>设备机型</p>
 * @method void setDevice(string $Device) 设置<p>设备机型</p>
 * @method string getNetType() 获取<p>网络类型</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型</p>
 * @method string getOperator() 获取<p>客户端运营商。不是目标 IP 运营商。</p>
 * @method void setOperator(string $Operator) 设置<p>客户端运营商。不是目标 IP 运营商。</p>
 * @method string getRegion() 获取<p>客户端地区。不是目标 IP 地区。</p>
 * @method void setRegion(string $Region) 设置<p>客户端地区。不是目标 IP 地区。</p>
 * @method array getTargetIps() 获取<p>本批次探测到的目标 IP，顺序与 TargetIpGeo 一致</p>
 * @method void setTargetIps(array $TargetIps) 设置<p>本批次探测到的目标 IP，顺序与 TargetIpGeo 一致</p>
 * @method array getTargetIpGeo() 获取<p>每个目标 IP 的地区和运营商</p>
 * @method void setTargetIpGeo(array $TargetIpGeo) 设置<p>每个目标 IP 的地区和运营商</p>
 * @method boolean getSuccess() 获取<p>本批次是否全部探测成功</p>
 * @method void setSuccess(boolean $Success) 设置<p>本批次是否全部探测成功</p>
 * @method boolean getNotProbed() 获取<p>本批次是否未实际探测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotProbed(boolean $NotProbed) 设置<p>本批次是否未实际探测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAvgDuration() 获取<p>本批次成功目标的平均时延，单位毫秒</p>
 * @method void setAvgDuration(float $AvgDuration) 设置<p>本批次成功目标的平均时延，单位毫秒</p>
 * @method boolean getHasMTR() 获取<p>本批次是否包含路由追踪</p>
 * @method void setHasMTR(boolean $HasMTR) 设置<p>本批次是否包含路由追踪</p>
 * @method string getSessionId() 获取<p>所属用户会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>所属用户会话 ID</p>
 */
class DialExecution extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称。任务已删除时仍返回当时名称，找不到则为空。</p>
     */
    public $TaskName;

    /**
     * @var string <p>拨测批次 ID</p>
     */
    public $TaskSessionId;

    /**
     * @var integer <p>批次开始时间，毫秒时间戳</p>
     */
    public $StartTime;

    /**
     * @var string <p>客户端平台</p>
     */
    public $Platform;

    /**
     * @var string <p>应用版本</p>
     */
    public $AppVersion;

    /**
     * @var string <p>设备机型</p>
     */
    public $Device;

    /**
     * @var string <p>网络类型</p>
     */
    public $NetType;

    /**
     * @var string <p>客户端运营商。不是目标 IP 运营商。</p>
     */
    public $Operator;

    /**
     * @var string <p>客户端地区。不是目标 IP 地区。</p>
     */
    public $Region;

    /**
     * @var array <p>本批次探测到的目标 IP，顺序与 TargetIpGeo 一致</p>
     */
    public $TargetIps;

    /**
     * @var array <p>每个目标 IP 的地区和运营商</p>
     */
    public $TargetIpGeo;

    /**
     * @var boolean <p>本批次是否全部探测成功</p>
     */
    public $Success;

    /**
     * @var boolean <p>本批次是否未实际探测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotProbed;

    /**
     * @var float <p>本批次成功目标的平均时延，单位毫秒</p>
     */
    public $AvgDuration;

    /**
     * @var boolean <p>本批次是否包含路由追踪</p>
     */
    public $HasMTR;

    /**
     * @var string <p>所属用户会话 ID</p>
     */
    public $SessionId;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param string $TaskName <p>任务名称。任务已删除时仍返回当时名称，找不到则为空。</p>
     * @param string $TaskSessionId <p>拨测批次 ID</p>
     * @param integer $StartTime <p>批次开始时间，毫秒时间戳</p>
     * @param string $Platform <p>客户端平台</p>
     * @param string $AppVersion <p>应用版本</p>
     * @param string $Device <p>设备机型</p>
     * @param string $NetType <p>网络类型</p>
     * @param string $Operator <p>客户端运营商。不是目标 IP 运营商。</p>
     * @param string $Region <p>客户端地区。不是目标 IP 地区。</p>
     * @param array $TargetIps <p>本批次探测到的目标 IP，顺序与 TargetIpGeo 一致</p>
     * @param array $TargetIpGeo <p>每个目标 IP 的地区和运营商</p>
     * @param boolean $Success <p>本批次是否全部探测成功</p>
     * @param boolean $NotProbed <p>本批次是否未实际探测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AvgDuration <p>本批次成功目标的平均时延，单位毫秒</p>
     * @param boolean $HasMTR <p>本批次是否包含路由追踪</p>
     * @param string $SessionId <p>所属用户会话 ID</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskSessionId",$param) and $param["TaskSessionId"] !== null) {
            $this->TaskSessionId = $param["TaskSessionId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TargetIps",$param) and $param["TargetIps"] !== null) {
            $this->TargetIps = $param["TargetIps"];
        }

        if (array_key_exists("TargetIpGeo",$param) and $param["TargetIpGeo"] !== null) {
            $this->TargetIpGeo = [];
            foreach ($param["TargetIpGeo"] as $key => $value){
                $obj = new DialTargetIpGeo();
                $obj->deserialize($value);
                array_push($this->TargetIpGeo, $obj);
            }
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("NotProbed",$param) and $param["NotProbed"] !== null) {
            $this->NotProbed = $param["NotProbed"];
        }

        if (array_key_exists("AvgDuration",$param) and $param["AvgDuration"] !== null) {
            $this->AvgDuration = $param["AvgDuration"];
        }

        if (array_key_exists("HasMTR",$param) and $param["HasMTR"] !== null) {
            $this->HasMTR = $param["HasMTR"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
