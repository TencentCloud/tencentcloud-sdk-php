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
 * TWeSee 语义理解结果
 *
 * @method integer getStatus() 获取任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功；4：执行中）
 * @method void setStatus(integer $Status) 设置任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功；4：执行中）
 * @method array getDetectedClassifications() 获取识别到的目标类型。可能取值：

- `person`：人
- `vehicle`：车辆
- `dog`：狗
- `cat`：猫
- `fire`：火焰
- `smoke`：烟雾
- `package`：快递包裹
- `license_plate`：车牌
 * @method void setDetectedClassifications(array $DetectedClassifications) 设置识别到的目标类型。可能取值：

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
 * @method array getDetectedObjects() 获取目标检测算法检测到的目标列表
 * @method void setDetectedObjects(array $DetectedObjects) 设置目标检测算法检测到的目标列表
 */
class VisionRecognitionResult extends AbstractModel
{
    /**
     * @var integer 任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功；4：执行中）
     */
    public $Status;

    /**
     * @var array 识别到的目标类型。可能取值：

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
     * @var array 目标检测算法检测到的目标列表
     */
    public $DetectedObjects;

    /**
     * @param integer $Status 任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功；4：执行中）
     * @param array $DetectedClassifications 识别到的目标类型。可能取值：

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
     * @param array $DetectedObjects 目标检测算法检测到的目标列表
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("DetectedObjects",$param) and $param["DetectedObjects"] !== null) {
            $this->DetectedObjects = [];
            foreach ($param["DetectedObjects"] as $key => $value){
                $obj = new VisionDetectedObject();
                $obj->deserialize($value);
                array_push($this->DetectedObjects, $obj);
            }
        }
    }
}
