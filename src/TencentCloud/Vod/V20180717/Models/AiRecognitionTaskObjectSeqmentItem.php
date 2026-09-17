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
 * 物体识别结果片段。
 *
 * @method float getStartTimeOffset() 获取<p>识别片段起始的偏移时间，单位：秒。</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置<p>识别片段起始的偏移时间，单位：秒。</p>
 * @method float getEndTimeOffset() 获取<p>识别片段终止的偏移时间，单位：秒。</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置<p>识别片段终止的偏移时间，单位：秒。</p>
 * @method float getConfidence() 获取<p>识别片段置信度。取值：0~100。</p>
 * @method void setConfidence(float $Confidence) 设置<p>识别片段置信度。取值：0~100。</p>
 * @method array getAreaCoordSet() 获取<p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置<p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
 */
class AiRecognitionTaskObjectSeqmentItem extends AbstractModel
{
    /**
     * @var float <p>识别片段起始的偏移时间，单位：秒。</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>识别片段终止的偏移时间，单位：秒。</p>
     */
    public $EndTimeOffset;

    /**
     * @var float <p>识别片段置信度。取值：0~100。</p>
     */
    public $Confidence;

    /**
     * @var array <p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
     */
    public $AreaCoordSet;

    /**
     * @param float $StartTimeOffset <p>识别片段起始的偏移时间，单位：秒。</p>
     * @param float $EndTimeOffset <p>识别片段终止的偏移时间，单位：秒。</p>
     * @param float $Confidence <p>识别片段置信度。取值：0~100。</p>
     * @param array $AreaCoordSet <p>识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。</p>
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
