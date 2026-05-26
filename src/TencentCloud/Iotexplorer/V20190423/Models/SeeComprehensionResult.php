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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 视觉理解结果
 *
 * @method array getDetectedClassifications() 获取识别到的目标类型与事件标签。可能取值：

- `person`：人
- `vehicle`：车辆
- `dog`：狗
- `cat`：猫
- `fire`：火焰
- `smoke`：烟雾
- `package`：快递包裹
- `license_plate`：车牌
 * @method void setDetectedClassifications(array $DetectedClassifications) 设置识别到的目标类型与事件标签。可能取值：

- `person`：人
- `vehicle`：车辆
- `dog`：狗
- `cat`：猫
- `fire`：火焰
- `smoke`：烟雾
- `package`：快递包裹
- `license_plate`：车牌
 * @method string getSummary() 获取摘要文本
 * @method void setSummary(string $Summary) 设置摘要文本
 * @method string getAlternativeSummary() 获取摘要文本（次选语言）
 * @method void setAlternativeSummary(string $AlternativeSummary) 设置摘要文本（次选语言）
 * @method string getErrorCode() 获取错误码，可能取值：

- `DownloadFailed`：下载视频/图片文件失败
- `ReadFailed`：读取视频/图片文件失败
 * @method void setErrorCode(string $ErrorCode) 设置错误码，可能取值：

- `DownloadFailed`：下载视频/图片文件失败
- `ReadFailed`：读取视频/图片文件失败
 * @method string getErrorMsg() 获取错误消息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误消息
 */
class SeeComprehensionResult extends AbstractModel
{
    /**
     * @var array 识别到的目标类型与事件标签。可能取值：

- `person`：人
- `vehicle`：车辆
- `dog`：狗
- `cat`：猫
- `fire`：火焰
- `smoke`：烟雾
- `package`：快递包裹
- `license_plate`：车牌
     */
    public $DetectedClassifications;

    /**
     * @var string 摘要文本
     */
    public $Summary;

    /**
     * @var string 摘要文本（次选语言）
     */
    public $AlternativeSummary;

    /**
     * @var string 错误码，可能取值：

- `DownloadFailed`：下载视频/图片文件失败
- `ReadFailed`：读取视频/图片文件失败
     */
    public $ErrorCode;

    /**
     * @var string 错误消息
     */
    public $ErrorMsg;

    /**
     * @param array $DetectedClassifications 识别到的目标类型与事件标签。可能取值：

- `person`：人
- `vehicle`：车辆
- `dog`：狗
- `cat`：猫
- `fire`：火焰
- `smoke`：烟雾
- `package`：快递包裹
- `license_plate`：车牌
     * @param string $Summary 摘要文本
     * @param string $AlternativeSummary 摘要文本（次选语言）
     * @param string $ErrorCode 错误码，可能取值：

- `DownloadFailed`：下载视频/图片文件失败
- `ReadFailed`：读取视频/图片文件失败
     * @param string $ErrorMsg 错误消息
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
        if (array_key_exists("DetectedClassifications",$param) and $param["DetectedClassifications"] !== null) {
            $this->DetectedClassifications = $param["DetectedClassifications"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("AlternativeSummary",$param) and $param["AlternativeSummary"] !== null) {
            $this->AlternativeSummary = $param["AlternativeSummary"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
