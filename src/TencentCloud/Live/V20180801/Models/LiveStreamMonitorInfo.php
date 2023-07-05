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
 * 直播监播任务信息。
 *
 * @method string getMonitorId() 获取监播任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorId(string $MonitorId) 设置监播任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorName() 获取监播任务名称。128字节以内。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorName(string $MonitorName) 设置监播任务名称。128字节以内。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamMonitorOutputInfo getOutputInfo() 获取监播任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputInfo(LiveStreamMonitorOutputInfo $OutputInfo) 设置监播任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInputList() 获取待监播的输入流信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputList(array $InputList) 设置待监播的输入流信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取监播任务状态。
0： 代表空闲
1： 代表监播中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置监播任务状态。
0： 代表空闲
1： 代表监播中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取上一次的启动时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置上一次的启动时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStopTime() 获取上一次的停止时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopTime(integer $StopTime) 设置上一次的停止时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取监播任务创建时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置监播任务创建时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取监播任务更新时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置监播任务更新时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveStreamMonitorNotifyPolicy getNotifyPolicy() 获取监播事件通知策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyPolicy(LiveStreamMonitorNotifyPolicy $NotifyPolicy) 设置监播事件通知策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudibleInputIndexList() 获取输出音频的输入Index列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudibleInputIndexList(array $AudibleInputIndexList) 设置输出音频的输入Index列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAiAsrInputIndexList() 获取开启智能语音识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAsrInputIndexList(array $AiAsrInputIndexList) 设置开启智能语音识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckStreamBroken() 获取是否开启断流检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckStreamBroken(integer $CheckStreamBroken) 设置是否开启断流检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckStreamLowFrameRate() 获取是否开启低帧率检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckStreamLowFrameRate(integer $CheckStreamLowFrameRate) 设置是否开启低帧率检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAsrLanguage() 获取智能语音识别语种：
0 关闭 1 中文 2 英文 3日文 4 韩文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrLanguage(integer $AsrLanguage) 设置智能语音识别语种：
0 关闭 1 中文 2 英文 3日文 4 韩文
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOcrLanguage() 获取智能文字识别语种：
0 关闭 1 中、英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrLanguage(integer $OcrLanguage) 设置智能文字识别语种：
0 关闭 1 中、英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAiOcrInputIndexList() 获取开启智能文字识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiOcrInputIndexList(array $AiOcrInputIndexList) 设置开启智能文字识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllowMonitorReport() 获取是否存储监播事件到监播报告，以及是否允许查询监播报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowMonitorReport(integer $AllowMonitorReport) 设置是否存储监播事件到监播报告，以及是否允许查询监播报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAiFormatDiagnose() 获取是否开启格式诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiFormatDiagnose(integer $AiFormatDiagnose) 设置是否开启格式诊断
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamMonitorInfo extends AbstractModel
{
    /**
     * @var string 监播任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorId;

    /**
     * @var string 监播任务名称。128字节以内。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorName;

    /**
     * @var LiveStreamMonitorOutputInfo 监播任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputInfo;

    /**
     * @var array 待监播的输入流信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputList;

    /**
     * @var integer 监播任务状态。
0： 代表空闲
1： 代表监播中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 上一次的启动时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 上一次的停止时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopTime;

    /**
     * @var integer 监播任务创建时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 监播任务更新时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var LiveStreamMonitorNotifyPolicy 监播事件通知策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyPolicy;

    /**
     * @var array 输出音频的输入Index列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudibleInputIndexList;

    /**
     * @var array 开启智能语音识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAsrInputIndexList;

    /**
     * @var integer 是否开启断流检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckStreamBroken;

    /**
     * @var integer 是否开启低帧率检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckStreamLowFrameRate;

    /**
     * @var integer 智能语音识别语种：
0 关闭 1 中文 2 英文 3日文 4 韩文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrLanguage;

    /**
     * @var integer 智能文字识别语种：
0 关闭 1 中、英文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrLanguage;

    /**
     * @var array 开启智能文字识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiOcrInputIndexList;

    /**
     * @var integer 是否存储监播事件到监播报告，以及是否允许查询监播报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowMonitorReport;

    /**
     * @var integer 是否开启格式诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiFormatDiagnose;

    /**
     * @param string $MonitorId 监播任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorName 监播任务名称。128字节以内。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamMonitorOutputInfo $OutputInfo 监播任务输出信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InputList 待监播的输入流信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 监播任务状态。
0： 代表空闲
1： 代表监播中。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 上一次的启动时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StopTime 上一次的停止时间，unix时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 监播任务创建时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 监播任务更新时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveStreamMonitorNotifyPolicy $NotifyPolicy 监播事件通知策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudibleInputIndexList 输出音频的输入Index列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AiAsrInputIndexList 开启智能语音识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckStreamBroken 是否开启断流检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckStreamLowFrameRate 是否开启低帧率检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AsrLanguage 智能语音识别语种：
0 关闭 1 中文 2 英文 3日文 4 韩文
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OcrLanguage 智能文字识别语种：
0 关闭 1 中、英文
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AiOcrInputIndexList 开启智能文字识别的输入Index列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllowMonitorReport 是否存储监播事件到监播报告，以及是否允许查询监播报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AiFormatDiagnose 是否开启格式诊断
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

        if (array_key_exists("OutputInfo",$param) and $param["OutputInfo"] !== null) {
            $this->OutputInfo = new LiveStreamMonitorOutputInfo();
            $this->OutputInfo->deserialize($param["OutputInfo"]);
        }

        if (array_key_exists("InputList",$param) and $param["InputList"] !== null) {
            $this->InputList = [];
            foreach ($param["InputList"] as $key => $value){
                $obj = new LiveStreamMonitorInputInfo();
                $obj->deserialize($value);
                array_push($this->InputList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NotifyPolicy",$param) and $param["NotifyPolicy"] !== null) {
            $this->NotifyPolicy = new LiveStreamMonitorNotifyPolicy();
            $this->NotifyPolicy->deserialize($param["NotifyPolicy"]);
        }

        if (array_key_exists("AudibleInputIndexList",$param) and $param["AudibleInputIndexList"] !== null) {
            $this->AudibleInputIndexList = $param["AudibleInputIndexList"];
        }

        if (array_key_exists("AiAsrInputIndexList",$param) and $param["AiAsrInputIndexList"] !== null) {
            $this->AiAsrInputIndexList = $param["AiAsrInputIndexList"];
        }

        if (array_key_exists("CheckStreamBroken",$param) and $param["CheckStreamBroken"] !== null) {
            $this->CheckStreamBroken = $param["CheckStreamBroken"];
        }

        if (array_key_exists("CheckStreamLowFrameRate",$param) and $param["CheckStreamLowFrameRate"] !== null) {
            $this->CheckStreamLowFrameRate = $param["CheckStreamLowFrameRate"];
        }

        if (array_key_exists("AsrLanguage",$param) and $param["AsrLanguage"] !== null) {
            $this->AsrLanguage = $param["AsrLanguage"];
        }

        if (array_key_exists("OcrLanguage",$param) and $param["OcrLanguage"] !== null) {
            $this->OcrLanguage = $param["OcrLanguage"];
        }

        if (array_key_exists("AiOcrInputIndexList",$param) and $param["AiOcrInputIndexList"] !== null) {
            $this->AiOcrInputIndexList = $param["AiOcrInputIndexList"];
        }

        if (array_key_exists("AllowMonitorReport",$param) and $param["AllowMonitorReport"] !== null) {
            $this->AllowMonitorReport = $param["AllowMonitorReport"];
        }

        if (array_key_exists("AiFormatDiagnose",$param) and $param["AiFormatDiagnose"] !== null) {
            $this->AiFormatDiagnose = $param["AiFormatDiagnose"];
        }
    }
}
