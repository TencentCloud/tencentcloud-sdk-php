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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播 AI 物体识别结果
 *
 * @method string getName() 获取识别的物体名称。
 * @method void setName(string $Name) 设置识别的物体名称。
 * @method float getStartPtsOffset() 获取识别片段起始的 PTS 时间，单位：秒。
 * @method void setStartPtsOffset(float $StartPtsOffset) 设置识别片段起始的 PTS 时间，单位：秒。
 * @method float getEndPtsOffset() 获取识别片段终止的 PTS 时间，单位：秒。
 * @method void setEndPtsOffset(float $EndPtsOffset) 设置识别片段终止的 PTS 时间，单位：秒。
 * @method float getConfidence() 获取识别片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置识别片段置信度。取值：0~100。
 * @method array getAreaCoordSet() 获取识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
 * @method string getUrl() 获取截图链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置截图链接。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamObjectRecognitionResult extends AbstractModel
{
    /**
     * @var string 识别的物体名称。
     */
    public $Name;

    /**
     * @var float 识别片段起始的 PTS 时间，单位：秒。
     */
    public $StartPtsOffset;

    /**
     * @var float 识别片段终止的 PTS 时间，单位：秒。
     */
    public $EndPtsOffset;

    /**
     * @var float 识别片段置信度。取值：0~100。
     */
    public $Confidence;

    /**
     * @var array 识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
     */
    public $AreaCoordSet;

    /**
     * @var string 截图链接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $Name 识别的物体名称。
     * @param float $StartPtsOffset 识别片段起始的 PTS 时间，单位：秒。
     * @param float $EndPtsOffset 识别片段终止的 PTS 时间，单位：秒。
     * @param float $Confidence 识别片段置信度。取值：0~100。
     * @param array $AreaCoordSet 识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
     * @param string $Url 截图链接。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartPtsOffset",$param) and $param["StartPtsOffset"] !== null) {
            $this->StartPtsOffset = $param["StartPtsOffset"];
        }

        if (array_key_exists("EndPtsOffset",$param) and $param["EndPtsOffset"] !== null) {
            $this->EndPtsOffset = $param["EndPtsOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
