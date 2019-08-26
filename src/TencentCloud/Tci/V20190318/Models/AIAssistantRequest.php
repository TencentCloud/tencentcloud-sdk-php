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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getFileContent() 获取输入分析对象内容
 * @method void setFileContent(string $FileContent) 设置输入分析对象内容
 * @method string getFileType() 获取输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,audio_url: 音频文件
 * @method void setFileType(string $FileType) 设置输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,audio_url: 音频文件
 * @method integer getLang() 获取音频源的语言，默认0为英文，1为中文
 * @method void setLang(integer $Lang) 设置音频源的语言，默认0为英文，1为中文
 * @method array getLibrarySet() 获取查询人员库列表
 * @method void setLibrarySet(array $LibrarySet) 设置查询人员库列表
 * @method integer getMaxVideoDuration() 获取直播流评估时间，在FileType为live_url时生效，默认值为10分钟。
 * @method void setMaxVideoDuration(integer $MaxVideoDuration) 设置直播流评估时间，在FileType为live_url时生效，默认值为10分钟。
 * @method integer getTemplate() 获取标准化模板选择：0：AI助教基础版本，1：AI评教基础版本，2：AI评教标准版本。AI 助教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、学生动作选项，音频信息分析，微笑识别。AI 评教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、音频信息分析。AI 评教标准版功能包括人脸检索、人脸检测、人脸表情识别、手势识别、音频信息分析、音频关键词分析、视频精彩集锦分析。
 * @method void setTemplate(integer $Template) 设置标准化模板选择：0：AI助教基础版本，1：AI评教基础版本，2：AI评教标准版本。AI 助教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、学生动作选项，音频信息分析，微笑识别。AI 评教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、音频信息分析。AI 评教标准版功能包括人脸检索、人脸检测、人脸表情识别、手势识别、音频信息分析、音频关键词分析、视频精彩集锦分析。
 * @method array getVocabLibNameList() 获取识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
 * @method void setVocabLibNameList(array $VocabLibNameList) 设置识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
 * @method integer getVoiceEncodeType() 获取语音编码类型 1:pcm
 * @method void setVoiceEncodeType(integer $VoiceEncodeType) 设置语音编码类型 1:pcm
 * @method integer getVoiceFileType() 获取语音文件类型 1:raw, 2:wav, 3:mp3，10:视频（三种音频格式目前仅支持16k采样率16bit）
 * @method void setVoiceFileType(integer $VoiceFileType) 设置语音文件类型 1:raw, 2:wav, 3:mp3，10:视频（三种音频格式目前仅支持16k采样率16bit）
 */

/**
 *AIAssistant请求参数结构体
 */
class AIAssistantRequest extends AbstractModel
{
    /**
     * @var string 输入分析对象内容
     */
    public $FileContent;

    /**
     * @var string 输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,audio_url: 音频文件
     */
    public $FileType;

    /**
     * @var integer 音频源的语言，默认0为英文，1为中文
     */
    public $Lang;

    /**
     * @var array 查询人员库列表
     */
    public $LibrarySet;

    /**
     * @var integer 直播流评估时间，在FileType为live_url时生效，默认值为10分钟。
     */
    public $MaxVideoDuration;

    /**
     * @var integer 标准化模板选择：0：AI助教基础版本，1：AI评教基础版本，2：AI评教标准版本。AI 助教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、学生动作选项，音频信息分析，微笑识别。AI 评教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、音频信息分析。AI 评教标准版功能包括人脸检索、人脸检测、人脸表情识别、手势识别、音频信息分析、音频关键词分析、视频精彩集锦分析。
     */
    public $Template;

    /**
     * @var array 识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
     */
    public $VocabLibNameList;

    /**
     * @var integer 语音编码类型 1:pcm
     */
    public $VoiceEncodeType;

    /**
     * @var integer 语音文件类型 1:raw, 2:wav, 3:mp3，10:视频（三种音频格式目前仅支持16k采样率16bit）
     */
    public $VoiceFileType;
    /**
     * @param string $FileContent 输入分析对象内容
     * @param string $FileType 输入分析对象类型，picture_url:图片地址，vod_url:视频地址，live_url：直播地址,audio_url: 音频文件
     * @param integer $Lang 音频源的语言，默认0为英文，1为中文
     * @param array $LibrarySet 查询人员库列表
     * @param integer $MaxVideoDuration 直播流评估时间，在FileType为live_url时生效，默认值为10分钟。
     * @param integer $Template 标准化模板选择：0：AI助教基础版本，1：AI评教基础版本，2：AI评教标准版本。AI 助教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、学生动作选项，音频信息分析，微笑识别。AI 评教基础版本功能包括：人脸检索、人脸检测、人脸表情识别、音频信息分析。AI 评教标准版功能包括人脸检索、人脸检测、人脸表情识别、手势识别、音频信息分析、音频关键词分析、视频精彩集锦分析。
     * @param array $VocabLibNameList 识别词库名列表，评估过程使用这些词汇库中的词汇进行词汇使用行为分析
     * @param integer $VoiceEncodeType 语音编码类型 1:pcm
     * @param integer $VoiceFileType 语音文件类型 1:raw, 2:wav, 3:mp3，10:视频（三种音频格式目前仅支持16k采样率16bit）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("LibrarySet",$param) and $param["LibrarySet"] !== null) {
            $this->LibrarySet = $param["LibrarySet"];
        }

        if (array_key_exists("MaxVideoDuration",$param) and $param["MaxVideoDuration"] !== null) {
            $this->MaxVideoDuration = $param["MaxVideoDuration"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("VocabLibNameList",$param) and $param["VocabLibNameList"] !== null) {
            $this->VocabLibNameList = $param["VocabLibNameList"];
        }

        if (array_key_exists("VoiceEncodeType",$param) and $param["VoiceEncodeType"] !== null) {
            $this->VoiceEncodeType = $param["VoiceEncodeType"];
        }

        if (array_key_exists("VoiceFileType",$param) and $param["VoiceFileType"] !== null) {
            $this->VoiceFileType = $param["VoiceFileType"];
        }
    }
}
