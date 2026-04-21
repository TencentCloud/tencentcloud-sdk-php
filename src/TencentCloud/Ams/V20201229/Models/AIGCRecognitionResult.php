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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * aigc片段审核结果
 *
 * @method string getLabel() 获取<p>一级标签名</p>
 * @method void setLabel(string $Label) 设置<p>一级标签名</p>
 * @method string getLabelCode() 获取<p>一级标签码</p>
 * @method void setLabelCode(string $LabelCode) 设置<p>一级标签码</p>
 * @method integer getScore() 获取<p>分数</p>
 * @method void setScore(integer $Score) 设置<p>分数</p>
 * @method float getStartTime() 获取<p>该vad片段在原始音频片段中的起始时间偏移</p>
 * @method void setStartTime(float $StartTime) 设置<p>该vad片段在原始音频片段中的起始时间偏移</p>
 * @method float getEndTime() 获取<p>该vad片段在原始音频片段中的结束时间偏移</p>
 * @method void setEndTime(float $EndTime) 设置<p>该vad片段在原始音频片段中的结束时间偏移</p>
 * @method string getSuggestion() 获取<p>建议值</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>建议值</p>
 * @method string getSubLabel() 获取<p>二级标签名</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>二级标签名</p>
 * @method string getSubLabelCode() 获取<p>二级标签码</p>
 * @method void setSubLabelCode(string $SubLabelCode) 设置<p>二级标签码</p>
 * @method string getSubTag() 获取<p>三级标签名</p>
 * @method void setSubTag(string $SubTag) 设置<p>三级标签名</p>
 * @method string getSubTagCode() 获取<p>三级标签码</p>
 * @method void setSubTagCode(string $SubTagCode) 设置<p>三级标签码</p>
 */
class AIGCRecognitionResult extends AbstractModel
{
    /**
     * @var string <p>一级标签名</p>
     */
    public $Label;

    /**
     * @var string <p>一级标签码</p>
     */
    public $LabelCode;

    /**
     * @var integer <p>分数</p>
     */
    public $Score;

    /**
     * @var float <p>该vad片段在原始音频片段中的起始时间偏移</p>
     */
    public $StartTime;

    /**
     * @var float <p>该vad片段在原始音频片段中的结束时间偏移</p>
     */
    public $EndTime;

    /**
     * @var string <p>建议值</p>
     */
    public $Suggestion;

    /**
     * @var string <p>二级标签名</p>
     */
    public $SubLabel;

    /**
     * @var string <p>二级标签码</p>
     */
    public $SubLabelCode;

    /**
     * @var string <p>三级标签名</p>
     */
    public $SubTag;

    /**
     * @var string <p>三级标签码</p>
     */
    public $SubTagCode;

    /**
     * @param string $Label <p>一级标签名</p>
     * @param string $LabelCode <p>一级标签码</p>
     * @param integer $Score <p>分数</p>
     * @param float $StartTime <p>该vad片段在原始音频片段中的起始时间偏移</p>
     * @param float $EndTime <p>该vad片段在原始音频片段中的结束时间偏移</p>
     * @param string $Suggestion <p>建议值</p>
     * @param string $SubLabel <p>二级标签名</p>
     * @param string $SubLabelCode <p>二级标签码</p>
     * @param string $SubTag <p>三级标签名</p>
     * @param string $SubTagCode <p>三级标签码</p>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LabelCode",$param) and $param["LabelCode"] !== null) {
            $this->LabelCode = $param["LabelCode"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("SubLabelCode",$param) and $param["SubLabelCode"] !== null) {
            $this->SubLabelCode = $param["SubLabelCode"];
        }

        if (array_key_exists("SubTag",$param) and $param["SubTag"] !== null) {
            $this->SubTag = $param["SubTag"];
        }

        if (array_key_exists("SubTagCode",$param) and $param["SubTagCode"] !== null) {
            $this->SubTagCode = $param["SubTagCode"];
        }
    }
}
