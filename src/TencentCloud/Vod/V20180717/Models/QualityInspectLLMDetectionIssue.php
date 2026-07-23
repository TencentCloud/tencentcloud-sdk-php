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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音画质检测的LLM 大模型检测发现的单条问题。
 *
 * @method string getTag() 获取<p>问题分类标签。</p>
 * @method void setTag(string $Tag) 设置<p>问题分类标签。</p>
 * @method string getDescription() 获取<p>问题描述。</p>
 * @method void setDescription(string $Description) 设置<p>问题描述。</p>
 * @method float getScore() 获取<p>该问题的质量得分</p><p>取值范围：[0, 100]</p>
 * @method void setScore(float $Score) 设置<p>该问题的质量得分</p><p>取值范围：[0, 100]</p>
 * @method float getConfidence() 获取<p>该问题的判断置信度</p><p>取值范围：[0, 100]</p>
 * @method void setConfidence(float $Confidence) 设置<p>该问题的判断置信度</p><p>取值范围：[0, 100]</p>
 * @method integer getStartTimeMs() 获取<p>问题起始时间。</p><p>单位：毫秒。</p>
 * @method void setStartTimeMs(integer $StartTimeMs) 设置<p>问题起始时间。</p><p>单位：毫秒。</p>
 * @method integer getEndTimeMs() 获取<p>问题结束时间。</p><p>单位：毫秒。</p>
 * @method void setEndTimeMs(integer $EndTimeMs) 设置<p>问题结束时间。</p><p>单位：毫秒。</p>
 * @method string getExtraData() 获取<p>附加数据（JSON 格式），如严重程度等补充信息。</p>
 * @method void setExtraData(string $ExtraData) 设置<p>附加数据（JSON 格式），如严重程度等补充信息。</p>
 */
class QualityInspectLLMDetectionIssue extends AbstractModel
{
    /**
     * @var string <p>问题分类标签。</p>
     */
    public $Tag;

    /**
     * @var string <p>问题描述。</p>
     */
    public $Description;

    /**
     * @var float <p>该问题的质量得分</p><p>取值范围：[0, 100]</p>
     */
    public $Score;

    /**
     * @var float <p>该问题的判断置信度</p><p>取值范围：[0, 100]</p>
     */
    public $Confidence;

    /**
     * @var integer <p>问题起始时间。</p><p>单位：毫秒。</p>
     */
    public $StartTimeMs;

    /**
     * @var integer <p>问题结束时间。</p><p>单位：毫秒。</p>
     */
    public $EndTimeMs;

    /**
     * @var string <p>附加数据（JSON 格式），如严重程度等补充信息。</p>
     */
    public $ExtraData;

    /**
     * @param string $Tag <p>问题分类标签。</p>
     * @param string $Description <p>问题描述。</p>
     * @param float $Score <p>该问题的质量得分</p><p>取值范围：[0, 100]</p>
     * @param float $Confidence <p>该问题的判断置信度</p><p>取值范围：[0, 100]</p>
     * @param integer $StartTimeMs <p>问题起始时间。</p><p>单位：毫秒。</p>
     * @param integer $EndTimeMs <p>问题结束时间。</p><p>单位：毫秒。</p>
     * @param string $ExtraData <p>附加数据（JSON 格式），如严重程度等补充信息。</p>
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
