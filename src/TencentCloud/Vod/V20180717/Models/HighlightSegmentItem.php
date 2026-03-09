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
 * 智能精彩集锦片段列表。
 *
 * @method float getConfidence() 获取<p>置信度。</p>
 * @method void setConfidence(float $Confidence) 设置<p>置信度。</p>
 * @method float getStartTimeOffset() 获取<p>片段起始时间偏移。</p><p>单位：秒</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置<p>片段起始时间偏移。</p><p>单位：秒</p>
 * @method float getEndTimeOffset() 获取<p>片段结束时间偏移。</p><p>单位：秒</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置<p>片段结束时间偏移。</p><p>单位：秒</p>
 */
class HighlightSegmentItem extends AbstractModel
{
    /**
     * @var float <p>置信度。</p>
     */
    public $Confidence;

    /**
     * @var float <p>片段起始时间偏移。</p><p>单位：秒</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>片段结束时间偏移。</p><p>单位：秒</p>
     */
    public $EndTimeOffset;

    /**
     * @param float $Confidence <p>置信度。</p>
     * @param float $StartTimeOffset <p>片段起始时间偏移。</p><p>单位：秒</p>
     * @param float $EndTimeOffset <p>片段结束时间偏移。</p><p>单位：秒</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
