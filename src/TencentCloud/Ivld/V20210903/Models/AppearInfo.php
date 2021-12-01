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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出现信息结构

包含关键词在音频转文字(ASR)，图片转文字(OCR)以及视频结果中的出现信息

 *
 * @method array getAudioAppearSet() 获取关键词在音频文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioAppearSet(array $AudioAppearSet) 设置关键词在音频文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTextAppearSet() 获取关键词在可视文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextAppearSet(array $TextAppearSet) 设置关键词在可视文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVideoAppearSet() 获取关键词在视频信息中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoAppearSet(array $VideoAppearSet) 设置关键词在视频信息中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppearInfo extends AbstractModel
{
    /**
     * @var array 关键词在音频文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioAppearSet;

    /**
     * @var array 关键词在可视文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextAppearSet;

    /**
     * @var array 关键词在视频信息中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoAppearSet;

    /**
     * @param array $AudioAppearSet 关键词在音频文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TextAppearSet 关键词在可视文本结果中的出现位置数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VideoAppearSet 关键词在视频信息中的出现位置数组
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
        if (array_key_exists("AudioAppearSet",$param) and $param["AudioAppearSet"] !== null) {
            $this->AudioAppearSet = [];
            foreach ($param["AudioAppearSet"] as $key => $value){
                $obj = new TextAppearInfo();
                $obj->deserialize($value);
                array_push($this->AudioAppearSet, $obj);
            }
        }

        if (array_key_exists("TextAppearSet",$param) and $param["TextAppearSet"] !== null) {
            $this->TextAppearSet = [];
            foreach ($param["TextAppearSet"] as $key => $value){
                $obj = new TextAppearInfo();
                $obj->deserialize($value);
                array_push($this->TextAppearSet, $obj);
            }
        }

        if (array_key_exists("VideoAppearSet",$param) and $param["VideoAppearSet"] !== null) {
            $this->VideoAppearSet = [];
            foreach ($param["VideoAppearSet"] as $key => $value){
                $obj = new VideoAppearInfo();
                $obj->deserialize($value);
                array_push($this->VideoAppearSet, $obj);
            }
        }
    }
}
