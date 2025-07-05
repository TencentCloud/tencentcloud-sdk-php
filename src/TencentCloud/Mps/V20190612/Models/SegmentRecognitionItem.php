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
 * 智能拆条片段。
 *
 * @method float getConfidence() 获取置信度。
 * @method void setConfidence(float $Confidence) 设置置信度。
 * @method float getStartTimeOffset() 获取片段起始时间偏移。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置片段起始时间偏移。
 * @method float getEndTimeOffset() 获取片段结束时间偏移。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置片段结束时间偏移。
 * @method string getSegmentUrl() 获取拆条片段URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentUrl(string $SegmentUrl) 设置拆条片段URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCovImgUrl() 获取拆条片段封面。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCovImgUrl(string $CovImgUrl) 设置拆条片段封面。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取分段标题。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置分段标题。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSummary() 获取分段概要。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(string $Summary) 设置分段概要。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeywords() 获取分段关键词。
 * @method void setKeywords(array $Keywords) 设置分段关键词。
 * @method string getBeginTime() 获取直播切片对应直播起始时间点，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置直播切片对应直播起始时间点，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取直播切片对应直播结束时间点，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置直播切片对应直播结束时间点，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioUrl() 获取直播拆条用，音频url。
 * @method void setAudioUrl(string $AudioUrl) 设置直播拆条用，音频url。
 * @method float getAudioBeginTime() 获取直播拆条用，音频对应起始时间戳；
 * @method void setAudioBeginTime(float $AudioBeginTime) 设置直播拆条用，音频对应起始时间戳；
 * @method float getAudioEndTime() 获取直播拆条用，音频对应结束时间戳。
 * @method void setAudioEndTime(float $AudioEndTime) 设置直播拆条用，音频对应结束时间戳。
 * @method string getPersonPositionUrl() 获取直播拆条用，人物位置参考信息用于横转竖。
 * @method void setPersonPositionUrl(string $PersonPositionUrl) 设置直播拆条用，人物位置参考信息用于横转竖。
 * @method string getPersonId() 获取指定人物ID。
 * @method void setPersonId(string $PersonId) 设置指定人物ID。
 */
class SegmentRecognitionItem extends AbstractModel
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
     * @var string 拆条片段URL。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentUrl;

    /**
     * @var string 拆条片段封面。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CovImgUrl;

    /**
     * @var string 分段标题。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 分段概要。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var array 分段关键词。
     */
    public $Keywords;

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
     * @var string 直播拆条用，音频url。
     */
    public $AudioUrl;

    /**
     * @var float 直播拆条用，音频对应起始时间戳；
     */
    public $AudioBeginTime;

    /**
     * @var float 直播拆条用，音频对应结束时间戳。
     */
    public $AudioEndTime;

    /**
     * @var string 直播拆条用，人物位置参考信息用于横转竖。
     */
    public $PersonPositionUrl;

    /**
     * @var string 指定人物ID。
     */
    public $PersonId;

    /**
     * @param float $Confidence 置信度。
     * @param float $StartTimeOffset 片段起始时间偏移。
     * @param float $EndTimeOffset 片段结束时间偏移。
     * @param string $SegmentUrl 拆条片段URL。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CovImgUrl 拆条片段封面。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 分段标题。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Summary 分段概要。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keywords 分段关键词。
     * @param string $BeginTime 直播切片对应直播起始时间点，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 直播切片对应直播结束时间点，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioUrl 直播拆条用，音频url。
     * @param float $AudioBeginTime 直播拆条用，音频对应起始时间戳；
     * @param float $AudioEndTime 直播拆条用，音频对应结束时间戳。
     * @param string $PersonPositionUrl 直播拆条用，人物位置参考信息用于横转竖。
     * @param string $PersonId 指定人物ID。
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

        if (array_key_exists("SegmentUrl",$param) and $param["SegmentUrl"] !== null) {
            $this->SegmentUrl = $param["SegmentUrl"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("AudioBeginTime",$param) and $param["AudioBeginTime"] !== null) {
            $this->AudioBeginTime = $param["AudioBeginTime"];
        }

        if (array_key_exists("AudioEndTime",$param) and $param["AudioEndTime"] !== null) {
            $this->AudioEndTime = $param["AudioEndTime"];
        }

        if (array_key_exists("PersonPositionUrl",$param) and $param["PersonPositionUrl"] !== null) {
            $this->PersonPositionUrl = $param["PersonPositionUrl"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
