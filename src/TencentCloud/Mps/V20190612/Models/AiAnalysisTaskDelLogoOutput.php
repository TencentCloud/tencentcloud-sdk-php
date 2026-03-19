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
 * 智能擦除结果信息
 *
 * @method string getPath() 获取<p>擦除后文件的路径。</p>
 * @method void setPath(string $Path) 设置<p>擦除后文件的路径。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>擦除后文件的存储位置。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>擦除后文件的存储位置。</p>
 * @method string getOriginSubtitlePath() 获取<p>基于画面提取的字幕文件路径。</p>
 * @method void setOriginSubtitlePath(string $OriginSubtitlePath) 设置<p>基于画面提取的字幕文件路径。</p>
 * @method string getTranslateSubtitlePath() 获取<p>基于画面提取的字幕翻译文件路径。</p>
 * @method void setTranslateSubtitlePath(string $TranslateSubtitlePath) 设置<p>基于画面提取的字幕翻译文件路径。</p>
 * @method SubtitlePosition getSubtitlePos() 获取<p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitlePos(SubtitlePosition $SubtitlePos) 设置<p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoiceClonedVideo() 获取<p>音色克隆后的视频文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceClonedVideo(string $VoiceClonedVideo) 设置<p>音色克隆后的视频文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoiceClonedMarkFile() 获取<p>音色克隆的标注文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceClonedMarkFile(string $VoiceClonedMarkFile) 设置<p>音色克隆的标注文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskDelLogoOutput extends AbstractModel
{
    /**
     * @var string <p>擦除后文件的路径。</p>
     */
    public $Path;

    /**
     * @var TaskOutputStorage <p>擦除后文件的存储位置。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>基于画面提取的字幕文件路径。</p>
     */
    public $OriginSubtitlePath;

    /**
     * @var string <p>基于画面提取的字幕翻译文件路径。</p>
     */
    public $TranslateSubtitlePath;

    /**
     * @var SubtitlePosition <p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitlePos;

    /**
     * @var string <p>音色克隆后的视频文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceClonedVideo;

    /**
     * @var string <p>音色克隆的标注文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceClonedMarkFile;

    /**
     * @param string $Path <p>擦除后文件的路径。</p>
     * @param TaskOutputStorage $OutputStorage <p>擦除后文件的存储位置。</p>
     * @param string $OriginSubtitlePath <p>基于画面提取的字幕文件路径。</p>
     * @param string $TranslateSubtitlePath <p>基于画面提取的字幕翻译文件路径。</p>
     * @param SubtitlePosition $SubtitlePos <p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoiceClonedVideo <p>音色克隆后的视频文件地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoiceClonedMarkFile <p>音色克隆的标注文件地址</p>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OriginSubtitlePath",$param) and $param["OriginSubtitlePath"] !== null) {
            $this->OriginSubtitlePath = $param["OriginSubtitlePath"];
        }

        if (array_key_exists("TranslateSubtitlePath",$param) and $param["TranslateSubtitlePath"] !== null) {
            $this->TranslateSubtitlePath = $param["TranslateSubtitlePath"];
        }

        if (array_key_exists("SubtitlePos",$param) and $param["SubtitlePos"] !== null) {
            $this->SubtitlePos = new SubtitlePosition();
            $this->SubtitlePos->deserialize($param["SubtitlePos"]);
        }

        if (array_key_exists("VoiceClonedVideo",$param) and $param["VoiceClonedVideo"] !== null) {
            $this->VoiceClonedVideo = $param["VoiceClonedVideo"];
        }

        if (array_key_exists("VoiceClonedMarkFile",$param) and $param["VoiceClonedMarkFile"] !== null) {
            $this->VoiceClonedMarkFile = $param["VoiceClonedMarkFile"];
        }
    }
}
