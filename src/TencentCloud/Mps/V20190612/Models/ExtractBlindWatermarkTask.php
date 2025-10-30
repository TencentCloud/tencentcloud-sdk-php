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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提取视频数字水印任务信息
 *
 * @method string getTaskId() 获取媒体处理任务 ID。
 * @method void setTaskId(string $TaskId) 设置媒体处理任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取错误码，0 表示成功，其他值表示失败。
 * @method void setErrCode(integer $ErrCode) 设置错误码，0 表示成功，其他值表示失败。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method MediaInputInfo getInputInfo() 获取媒体处理的目标文件信息。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置媒体处理的目标文件信息。
 * @method string getType() 获取数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li> <li>blind-ab：ab版权数字水印；</li>
 * @method void setType(string $Type) 设置数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li> <li>blind-ab：ab版权数字水印；</li>
 * @method boolean getIsDetected() 获取标记是否检测到水印，如果该参数为true， Result字段将返回水印提取结果，如果该参数为false，Result字段不会返回。
 * @method void setIsDetected(boolean $IsDetected) 设置标记是否检测到水印，如果该参数为true， Result字段将返回水印提取结果，如果该参数为false，Result字段不会返回。
 * @method string getResult() 获取提取出的数字水印内容，当没有检测到水印时该字段不会返回。
 * @method void setResult(string $Result) 设置提取出的数字水印内容，当没有检测到水印时该字段不会返回。
 * @method ExtractBlindWatermarkTaskConfig getExtractBlindWatermarkConfig() 获取提取数字水印配置。
 * @method void setExtractBlindWatermarkConfig(ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig) 设置提取数字水印配置。
 */
class ExtractBlindWatermarkTask extends AbstractModel
{
    /**
     * @var string 媒体处理任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 错误码，0 表示成功，其他值表示失败。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var MediaInputInfo 媒体处理的目标文件信息。
     */
    public $InputInfo;

    /**
     * @var string 数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li> <li>blind-ab：ab版权数字水印；</li>
     */
    public $Type;

    /**
     * @var boolean 标记是否检测到水印，如果该参数为true， Result字段将返回水印提取结果，如果该参数为false，Result字段不会返回。
     */
    public $IsDetected;

    /**
     * @var string 提取出的数字水印内容，当没有检测到水印时该字段不会返回。
     */
    public $Result;

    /**
     * @var ExtractBlindWatermarkTaskConfig 提取数字水印配置。
     */
    public $ExtractBlindWatermarkConfig;

    /**
     * @param string $TaskId 媒体处理任务 ID。
     * @param string $Status 任务流状态，取值：
<li>WAITING：等待中；</li>
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param integer $ErrCode 错误码，0 表示成功，其他值表示失败。
     * @param string $Message 错误信息。
     * @param MediaInputInfo $InputInfo 媒体处理的目标文件信息。
     * @param string $Type 数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li> <li>blind-ab：ab版权数字水印；</li>
     * @param boolean $IsDetected 标记是否检测到水印，如果该参数为true， Result字段将返回水印提取结果，如果该参数为false，Result字段不会返回。
     * @param string $Result 提取出的数字水印内容，当没有检测到水印时该字段不会返回。
     * @param ExtractBlindWatermarkTaskConfig $ExtractBlindWatermarkConfig 提取数字水印配置。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsDetected",$param) and $param["IsDetected"] !== null) {
            $this->IsDetected = $param["IsDetected"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ExtractBlindWatermarkConfig",$param) and $param["ExtractBlindWatermarkConfig"] !== null) {
            $this->ExtractBlindWatermarkConfig = new ExtractBlindWatermarkTaskConfig();
            $this->ExtractBlindWatermarkConfig->deserialize($param["ExtractBlindWatermarkConfig"]);
        }
    }
}
