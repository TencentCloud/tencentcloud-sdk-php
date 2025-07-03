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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 语义理解结果
 *
 * @method integer getStatus() 获取任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功）
 * @method void setStatus(integer $Status) 设置任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功）
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
 */
class VisionRecognitionResult extends AbstractModel
{
    /**
     * @var integer 任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功）
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
     * @param integer $Status 任务状态（1：分析失败；2：下载/读取视频/图片失败；3：成功）
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
    }
}
