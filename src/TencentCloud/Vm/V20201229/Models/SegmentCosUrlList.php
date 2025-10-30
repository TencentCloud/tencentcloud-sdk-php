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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 明细数据相关的cos url
 *
 * @method string getImageAllUrl() 获取全量图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageAllUrl(string $ImageAllUrl) 设置全量图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioAllUrl() 获取全量音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioAllUrl(string $AudioAllUrl) 设置全量音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageBlockUrl() 获取违规图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageBlockUrl(string $ImageBlockUrl) 设置违规图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioBlockUrl() 获取违规音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioBlockUrl(string $AudioBlockUrl) 设置违规音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrUrl() 获取全量音频识别文本的cos url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrUrl(string $AsrUrl) 设置全量音频识别文本的cos url
注意：此字段可能返回 null，表示取不到有效值。
 */
class SegmentCosUrlList extends AbstractModel
{
    /**
     * @var string 全量图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageAllUrl;

    /**
     * @var string 全量音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioAllUrl;

    /**
     * @var string 违规图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageBlockUrl;

    /**
     * @var string 违规音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioBlockUrl;

    /**
     * @var string 全量音频识别文本的cos url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrUrl;

    /**
     * @param string $ImageAllUrl 全量图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioAllUrl 全量音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageBlockUrl 违规图片片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioBlockUrl 违规音频片段的cos url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrUrl 全量音频识别文本的cos url
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
        if (array_key_exists("ImageAllUrl",$param) and $param["ImageAllUrl"] !== null) {
            $this->ImageAllUrl = $param["ImageAllUrl"];
        }

        if (array_key_exists("AudioAllUrl",$param) and $param["AudioAllUrl"] !== null) {
            $this->AudioAllUrl = $param["AudioAllUrl"];
        }

        if (array_key_exists("ImageBlockUrl",$param) and $param["ImageBlockUrl"] !== null) {
            $this->ImageBlockUrl = $param["ImageBlockUrl"];
        }

        if (array_key_exists("AudioBlockUrl",$param) and $param["AudioBlockUrl"] !== null) {
            $this->AudioBlockUrl = $param["AudioBlockUrl"];
        }

        if (array_key_exists("AsrUrl",$param) and $param["AsrUrl"] !== null) {
            $this->AsrUrl = $param["AsrUrl"];
        }
    }
}
