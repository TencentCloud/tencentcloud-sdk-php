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
 * 智能精彩集锦片段列表。
 *
 * @method float getConfidence() 获取置信度。
 * @method void setConfidence(float $Confidence) 设置置信度。
 * @method float getStartTimeOffset() 获取片段起始时间偏移。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置片段起始时间偏移。
 * @method float getEndTimeOffset() 获取片段结束时间偏移。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置片段结束时间偏移。
 * @method array getSegmentTags() 获取片段标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentTags(array $SegmentTags) 设置片段标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取直播切片对应直播起始时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置直播切片对应直播起始时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取直播切片对应直播结束时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置直播切片对应直播结束时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
 */
class HighlightSegmentItem extends AbstractModel
{
    /**
     * @var float 置信度。
     */
    public $Confidence;

    /**
     * @var float 片段起始时间偏移。
     */
    public $StartTimeOffset;

    /**
     * @var float 片段结束时间偏移。
     */
    public $EndTimeOffset;

    /**
     * @var array 片段标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentTags;

    /**
     * @var string 直播切片对应直播起始时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 直播切片对应直播结束时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param float $Confidence 置信度。
     * @param float $StartTimeOffset 片段起始时间偏移。
     * @param float $EndTimeOffset 片段结束时间偏移。
     * @param array $SegmentTags 片段标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime 直播切片对应直播起始时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 直播切片对应直播结束时间点，采用 ISO 日期格式。	
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SegmentTags",$param) and $param["SegmentTags"] !== null) {
            $this->SegmentTags = $param["SegmentTags"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
