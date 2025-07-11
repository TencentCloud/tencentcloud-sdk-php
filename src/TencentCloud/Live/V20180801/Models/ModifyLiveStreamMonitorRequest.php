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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveStreamMonitor请求参数结构体
 *
 * @method string getMonitorId() 获取监播任务ID。
 * @method void setMonitorId(string $MonitorId) 设置监播任务ID。
 * @method string getMonitorName() 获取监播任务的名称。长度128字节以内（一个汉字两个字节）。
 * @method void setMonitorName(string $MonitorName) 设置监播任务的名称。长度128字节以内（一个汉字两个字节）。
 * @method LiveStreamMonitorOutputInfo getOutputInfo() 获取监播任务输出信息。
 * @method void setOutputInfo(LiveStreamMonitorOutputInfo $OutputInfo) 设置监播任务输出信息。
 * @method array getInputList() 获取待监播的输入流信息。
 * @method void setInputList(array $InputList) 设置待监播的输入流信息。
 * @method LiveStreamMonitorNotifyPolicy getNotifyPolicy() 获取监播事件通知策略。
 * @method void setNotifyPolicy(LiveStreamMonitorNotifyPolicy $NotifyPolicy) 设置监播事件通知策略。
 * @method integer getAsrLanguage() 获取智能语音识别语种：
0 关闭 1 中文 2 英文 3 日文 4 韩文。
 * @method void setAsrLanguage(integer $AsrLanguage) 设置智能语音识别语种：
0 关闭 1 中文 2 英文 3 日文 4 韩文。
 * @method integer getOcrLanguage() 获取智能文字识别语种：
0 关闭 1 中、英文。
 * @method void setOcrLanguage(integer $OcrLanguage) 设置智能文字识别语种：
0 关闭 1 中、英文。
 * @method array getAiAsrInputIndexList() 获取语音识别输入流列表，1代表第一条输入流。
 * @method void setAiAsrInputIndexList(array $AiAsrInputIndexList) 设置语音识别输入流列表，1代表第一条输入流。
 * @method array getAiOcrInputIndexList() 获取文字识别输入流列表，1代表第一条输入流。
 * @method void setAiOcrInputIndexList(array $AiOcrInputIndexList) 设置文字识别输入流列表，1代表第一条输入流。
 * @method integer getCheckStreamBroken() 获取是否开启断流检测。
 * @method void setCheckStreamBroken(integer $CheckStreamBroken) 设置是否开启断流检测。
 * @method integer getCheckStreamLowFrameRate() 获取是否开启低帧率检测。
 * @method void setCheckStreamLowFrameRate(integer $CheckStreamLowFrameRate) 设置是否开启低帧率检测。
 * @method integer getAllowMonitorReport() 获取是否存储监播事件到监播报告，以及是否允许查询监播报告。
 * @method void setAllowMonitorReport(integer $AllowMonitorReport) 设置是否存储监播事件到监播报告，以及是否允许查询监播报告。
 * @method integer getAiFormatDiagnose() 获取是否开启格式诊断。
 * @method void setAiFormatDiagnose(integer $AiFormatDiagnose) 设置是否开启格式诊断。
 * @method integer getAiQualityControl() 获取是否开启内容质检。
 * @method void setAiQualityControl(integer $AiQualityControl) 设置是否开启内容质检。
 */
class ModifyLiveStreamMonitorRequest extends AbstractModel
{
    /**
     * @var string 监播任务ID。
     */
    public $MonitorId;

    /**
     * @var string 监播任务的名称。长度128字节以内（一个汉字两个字节）。
     */
    public $MonitorName;

    /**
     * @var LiveStreamMonitorOutputInfo 监播任务输出信息。
     */
    public $OutputInfo;

    /**
     * @var array 待监播的输入流信息。
     */
    public $InputList;

    /**
     * @var LiveStreamMonitorNotifyPolicy 监播事件通知策略。
     */
    public $NotifyPolicy;

    /**
     * @var integer 智能语音识别语种：
0 关闭 1 中文 2 英文 3 日文 4 韩文。
     */
    public $AsrLanguage;

    /**
     * @var integer 智能文字识别语种：
0 关闭 1 中、英文。
     */
    public $OcrLanguage;

    /**
     * @var array 语音识别输入流列表，1代表第一条输入流。
     */
    public $AiAsrInputIndexList;

    /**
     * @var array 文字识别输入流列表，1代表第一条输入流。
     */
    public $AiOcrInputIndexList;

    /**
     * @var integer 是否开启断流检测。
     */
    public $CheckStreamBroken;

    /**
     * @var integer 是否开启低帧率检测。
     */
    public $CheckStreamLowFrameRate;

    /**
     * @var integer 是否存储监播事件到监播报告，以及是否允许查询监播报告。
     */
    public $AllowMonitorReport;

    /**
     * @var integer 是否开启格式诊断。
     */
    public $AiFormatDiagnose;

    /**
     * @var integer 是否开启内容质检。
     */
    public $AiQualityControl;

    /**
     * @param string $MonitorId 监播任务ID。
     * @param string $MonitorName 监播任务的名称。长度128字节以内（一个汉字两个字节）。
     * @param LiveStreamMonitorOutputInfo $OutputInfo 监播任务输出信息。
     * @param array $InputList 待监播的输入流信息。
     * @param LiveStreamMonitorNotifyPolicy $NotifyPolicy 监播事件通知策略。
     * @param integer $AsrLanguage 智能语音识别语种：
0 关闭 1 中文 2 英文 3 日文 4 韩文。
     * @param integer $OcrLanguage 智能文字识别语种：
0 关闭 1 中、英文。
     * @param array $AiAsrInputIndexList 语音识别输入流列表，1代表第一条输入流。
     * @param array $AiOcrInputIndexList 文字识别输入流列表，1代表第一条输入流。
     * @param integer $CheckStreamBroken 是否开启断流检测。
     * @param integer $CheckStreamLowFrameRate 是否开启低帧率检测。
     * @param integer $AllowMonitorReport 是否存储监播事件到监播报告，以及是否允许查询监播报告。
     * @param integer $AiFormatDiagnose 是否开启格式诊断。
     * @param integer $AiQualityControl 是否开启内容质检。
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

        if (array_key_exists("NotifyPolicy",$param) and $param["NotifyPolicy"] !== null) {
            $this->NotifyPolicy = new LiveStreamMonitorNotifyPolicy();
            $this->NotifyPolicy->deserialize($param["NotifyPolicy"]);
        }

        if (array_key_exists("AsrLanguage",$param) and $param["AsrLanguage"] !== null) {
            $this->AsrLanguage = $param["AsrLanguage"];
        }

        if (array_key_exists("OcrLanguage",$param) and $param["OcrLanguage"] !== null) {
            $this->OcrLanguage = $param["OcrLanguage"];
        }

        if (array_key_exists("AiAsrInputIndexList",$param) and $param["AiAsrInputIndexList"] !== null) {
            $this->AiAsrInputIndexList = $param["AiAsrInputIndexList"];
        }

        if (array_key_exists("AiOcrInputIndexList",$param) and $param["AiOcrInputIndexList"] !== null) {
            $this->AiOcrInputIndexList = $param["AiOcrInputIndexList"];
        }

        if (array_key_exists("CheckStreamBroken",$param) and $param["CheckStreamBroken"] !== null) {
            $this->CheckStreamBroken = $param["CheckStreamBroken"];
        }

        if (array_key_exists("CheckStreamLowFrameRate",$param) and $param["CheckStreamLowFrameRate"] !== null) {
            $this->CheckStreamLowFrameRate = $param["CheckStreamLowFrameRate"];
        }

        if (array_key_exists("AllowMonitorReport",$param) and $param["AllowMonitorReport"] !== null) {
            $this->AllowMonitorReport = $param["AllowMonitorReport"];
        }

        if (array_key_exists("AiFormatDiagnose",$param) and $param["AiFormatDiagnose"] !== null) {
            $this->AiFormatDiagnose = $param["AiFormatDiagnose"];
        }

        if (array_key_exists("AiQualityControl",$param) and $param["AiQualityControl"] !== null) {
            $this->AiQualityControl = $param["AiQualityControl"];
        }
    }
}
