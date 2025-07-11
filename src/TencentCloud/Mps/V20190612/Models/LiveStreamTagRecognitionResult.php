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
 * 直播 AI 打点识别结果
 *
 * @method string getId() 获取打点事件。
 * @method void setId(string $Id) 设置打点事件。
 * @method float getStartPtsTime() 获取识别片段起始的 PTS 时间，单位：秒。
 * @method void setStartPtsTime(float $StartPtsTime) 设置识别片段起始的 PTS 时间，单位：秒。
 * @method float getEndPtsTime() 获取识别片段终止的 PTS 时间，单位：秒。
 * @method void setEndPtsTime(float $EndPtsTime) 设置识别片段终止的 PTS 时间，单位：秒。
 * @method float getConfidence() 获取识别片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置识别片段置信度。取值：0~100。
 */
class LiveStreamTagRecognitionResult extends AbstractModel
{
    /**
     * @var string 打点事件。
     */
    public $Id;

    /**
     * @var float 识别片段起始的 PTS 时间，单位：秒。
     */
    public $StartPtsTime;

    /**
     * @var float 识别片段终止的 PTS 时间，单位：秒。
     */
    public $EndPtsTime;

    /**
     * @var float 识别片段置信度。取值：0~100。
     */
    public $Confidence;

    /**
     * @param string $Id 打点事件。
     * @param float $StartPtsTime 识别片段起始的 PTS 时间，单位：秒。
     * @param float $EndPtsTime 识别片段终止的 PTS 时间，单位：秒。
     * @param float $Confidence 识别片段置信度。取值：0~100。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
