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
 * AI配音结果信息
 *
 * @method string getOriginSubtitlePath() 获取<p>基于画面提取的字幕文件路径。</p>
 * @method void setOriginSubtitlePath(string $OriginSubtitlePath) 设置<p>基于画面提取的字幕文件路径。</p>
 * @method string getTranslateSubtitlePath() 获取<p>基于画面提取的字幕翻译文件路径。</p>
 * @method void setTranslateSubtitlePath(string $TranslateSubtitlePath) 设置<p>基于画面提取的字幕翻译文件路径。</p>
 * @method string getVoiceClonedVideo() 获取<p>音色克隆后的视频文件地址</p>
 * @method void setVoiceClonedVideo(string $VoiceClonedVideo) 设置<p>音色克隆后的视频文件地址</p>
 * @method string getVoiceClonedMarkFile() 获取<p>音色克隆的标注文件地址</p>
 * @method void setVoiceClonedMarkFile(string $VoiceClonedMarkFile) 设置<p>音色克隆的标注文件地址</p>
 * @method string getVideoPath() 获取<p>视频输出路径。</p>
 * @method void setVideoPath(string $VideoPath) 设置<p>视频输出路径。</p>
 * @method string getOriginSubtitleFileId() 获取<p>基于画面提取的字幕文件FileId。</p>
 * @method void setOriginSubtitleFileId(string $OriginSubtitleFileId) 设置<p>基于画面提取的字幕文件FileId。</p>
 * @method string getTranslateSubtitleFileId() 获取<p>基于画面提取的字幕翻译文件FileId    。</p>
 * @method void setTranslateSubtitleFileId(string $TranslateSubtitleFileId) 设置<p>基于画面提取的字幕翻译文件FileId    。</p>
 * @method string getSpeakerPath() 获取<p>标记文件路径。</p>
 * @method void setSpeakerPath(string $SpeakerPath) 设置<p>标记文件路径。</p>
 * @method string getSpeakerFileId() 获取<p>标记文件Fileid。</p>
 * @method void setSpeakerFileId(string $SpeakerFileId) 设置<p>标记文件Fileid。</p>
 * @method string getEraseVideoFileId() 获取<p>擦除视频输出FileId。</p>
 * @method void setEraseVideoFileId(string $EraseVideoFileId) 设置<p>擦除视频输出FileId。</p>
 * @method string getEraseVideoPath() 获取<p>擦除视频输出路径。</p>
 * @method void setEraseVideoPath(string $EraseVideoPath) 设置<p>擦除视频输出路径。</p>
 * @method string getDstAudioPath() 获取<p>译文配音音频文件路径。</p>
 * @method void setDstAudioPath(string $DstAudioPath) 设置<p>译文配音音频文件路径。</p>
 * @method string getDstAudioFileId() 获取<p>译文配音音频文件FileId。</p>
 * @method void setDstAudioFileId(string $DstAudioFileId) 设置<p>译文配音音频文件FileId。</p>
 * @method string getDubbingEditInfoUrl() 获取<p>音色克隆编辑信息</p><p>用于音色克隆二次修改的编辑信息</p>
 * @method void setDubbingEditInfoUrl(string $DubbingEditInfoUrl) 设置<p>音色克隆编辑信息</p><p>用于音色克隆二次修改的编辑信息</p>
 * @method SubtitlePosition getSubtitlePos() 获取<p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitlePos(SubtitlePosition $SubtitlePos) 设置<p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取<p>AI配音任务输出文件的存储位置。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>AI配音任务输出文件的存储位置。</p>
 */
class AIDubbingTaskOutput extends AbstractModel
{
    /**
     * @var string <p>基于画面提取的字幕文件路径。</p>
     */
    public $OriginSubtitlePath;

    /**
     * @var string <p>基于画面提取的字幕翻译文件路径。</p>
     */
    public $TranslateSubtitlePath;

    /**
     * @var string <p>音色克隆后的视频文件地址</p>
     */
    public $VoiceClonedVideo;

    /**
     * @var string <p>音色克隆的标注文件地址</p>
     */
    public $VoiceClonedMarkFile;

    /**
     * @var string <p>视频输出路径。</p>
     */
    public $VideoPath;

    /**
     * @var string <p>基于画面提取的字幕文件FileId。</p>
     */
    public $OriginSubtitleFileId;

    /**
     * @var string <p>基于画面提取的字幕翻译文件FileId    。</p>
     */
    public $TranslateSubtitleFileId;

    /**
     * @var string <p>标记文件路径。</p>
     */
    public $SpeakerPath;

    /**
     * @var string <p>标记文件Fileid。</p>
     */
    public $SpeakerFileId;

    /**
     * @var string <p>擦除视频输出FileId。</p>
     */
    public $EraseVideoFileId;

    /**
     * @var string <p>擦除视频输出路径。</p>
     */
    public $EraseVideoPath;

    /**
     * @var string <p>译文配音音频文件路径。</p>
     */
    public $DstAudioPath;

    /**
     * @var string <p>译文配音音频文件FileId。</p>
     */
    public $DstAudioFileId;

    /**
     * @var string <p>音色克隆编辑信息</p><p>用于音色克隆二次修改的编辑信息</p>
     */
    public $DubbingEditInfoUrl;

    /**
     * @var SubtitlePosition <p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitlePos;

    /**
     * @var TaskOutputStorage <p>AI配音任务输出文件的存储位置。</p>
     */
    public $OutputStorage;

    /**
     * @param string $OriginSubtitlePath <p>基于画面提取的字幕文件路径。</p>
     * @param string $TranslateSubtitlePath <p>基于画面提取的字幕翻译文件路径。</p>
     * @param string $VoiceClonedVideo <p>音色克隆后的视频文件地址</p>
     * @param string $VoiceClonedMarkFile <p>音色克隆的标注文件地址</p>
     * @param string $VideoPath <p>视频输出路径。</p>
     * @param string $OriginSubtitleFileId <p>基于画面提取的字幕文件FileId。</p>
     * @param string $TranslateSubtitleFileId <p>基于画面提取的字幕翻译文件FileId    。</p>
     * @param string $SpeakerPath <p>标记文件路径。</p>
     * @param string $SpeakerFileId <p>标记文件Fileid。</p>
     * @param string $EraseVideoFileId <p>擦除视频输出FileId。</p>
     * @param string $EraseVideoPath <p>擦除视频输出路径。</p>
     * @param string $DstAudioPath <p>译文配音音频文件路径。</p>
     * @param string $DstAudioFileId <p>译文配音音频文件FileId。</p>
     * @param string $DubbingEditInfoUrl <p>音色克隆编辑信息</p><p>用于音色克隆二次修改的编辑信息</p>
     * @param SubtitlePosition $SubtitlePos <p>擦除的字幕位置。<strong>注意</strong>：仅对字幕提取且开启返回字幕位置时有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage <p>AI配音任务输出文件的存储位置。</p>
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
        if (array_key_exists("OriginSubtitlePath",$param) and $param["OriginSubtitlePath"] !== null) {
            $this->OriginSubtitlePath = $param["OriginSubtitlePath"];
        }

        if (array_key_exists("TranslateSubtitlePath",$param) and $param["TranslateSubtitlePath"] !== null) {
            $this->TranslateSubtitlePath = $param["TranslateSubtitlePath"];
        }

        if (array_key_exists("VoiceClonedVideo",$param) and $param["VoiceClonedVideo"] !== null) {
            $this->VoiceClonedVideo = $param["VoiceClonedVideo"];
        }

        if (array_key_exists("VoiceClonedMarkFile",$param) and $param["VoiceClonedMarkFile"] !== null) {
            $this->VoiceClonedMarkFile = $param["VoiceClonedMarkFile"];
        }

        if (array_key_exists("VideoPath",$param) and $param["VideoPath"] !== null) {
            $this->VideoPath = $param["VideoPath"];
        }

        if (array_key_exists("OriginSubtitleFileId",$param) and $param["OriginSubtitleFileId"] !== null) {
            $this->OriginSubtitleFileId = $param["OriginSubtitleFileId"];
        }

        if (array_key_exists("TranslateSubtitleFileId",$param) and $param["TranslateSubtitleFileId"] !== null) {
            $this->TranslateSubtitleFileId = $param["TranslateSubtitleFileId"];
        }

        if (array_key_exists("SpeakerPath",$param) and $param["SpeakerPath"] !== null) {
            $this->SpeakerPath = $param["SpeakerPath"];
        }

        if (array_key_exists("SpeakerFileId",$param) and $param["SpeakerFileId"] !== null) {
            $this->SpeakerFileId = $param["SpeakerFileId"];
        }

        if (array_key_exists("EraseVideoFileId",$param) and $param["EraseVideoFileId"] !== null) {
            $this->EraseVideoFileId = $param["EraseVideoFileId"];
        }

        if (array_key_exists("EraseVideoPath",$param) and $param["EraseVideoPath"] !== null) {
            $this->EraseVideoPath = $param["EraseVideoPath"];
        }

        if (array_key_exists("DstAudioPath",$param) and $param["DstAudioPath"] !== null) {
            $this->DstAudioPath = $param["DstAudioPath"];
        }

        if (array_key_exists("DstAudioFileId",$param) and $param["DstAudioFileId"] !== null) {
            $this->DstAudioFileId = $param["DstAudioFileId"];
        }

        if (array_key_exists("DubbingEditInfoUrl",$param) and $param["DubbingEditInfoUrl"] !== null) {
            $this->DubbingEditInfoUrl = $param["DubbingEditInfoUrl"];
        }

        if (array_key_exists("SubtitlePos",$param) and $param["SubtitlePos"] !== null) {
            $this->SubtitlePos = new SubtitlePosition();
            $this->SubtitlePos->deserialize($param["SubtitlePos"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
