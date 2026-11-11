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
 * 消息内容片段。
 *
 * @method string getType() 获取<p>内容类型</p><p>枚举值：</p><ul><li>text： 文本内容</li><li>input_image： 图片输入</li><li>input_video： 视频输入</li><li>input_audio： 音频输入</li><li>input_file： 文件输入</li></ul>
 * @method void setType(string $Type) 设置<p>内容类型</p><p>枚举值：</p><ul><li>text： 文本内容</li><li>input_image： 图片输入</li><li>input_video： 视频输入</li><li>input_audio： 音频输入</li><li>input_file： 文件输入</li></ul>
 * @method string getText() 获取<p>文本消息</p><p>Type=text 时必填</p>
 * @method void setText(string $Text) 设置<p>文本消息</p><p>Type=text 时必填</p>
 * @method ModelChatInputImage getInputImage() 获取<p>图片输入</p><p>Type=input_image 时必填</p>
 * @method void setInputImage(ModelChatInputImage $InputImage) 设置<p>图片输入</p><p>Type=input_image 时必填</p>
 * @method ModelChatInputVideo getInputVideo() 获取<p>视频输入</p><p>Type=input_video 时必填</p>
 * @method void setInputVideo(ModelChatInputVideo $InputVideo) 设置<p>视频输入</p><p>Type=input_video 时必填</p>
 * @method ModelChatInputAudio getInputAudio() 获取<p>音频输入</p><p>Type=input_audio 时必填</p>
 * @method void setInputAudio(ModelChatInputAudio $InputAudio) 设置<p>音频输入</p><p>Type=input_audio 时必填</p>
 * @method ModelChatInputFile getInputFile() 获取<p>文件输入</p><p>Type=input_file 时必填</p>
 * @method void setInputFile(ModelChatInputFile $InputFile) 设置<p>文件输入</p><p>Type=input_file 时必填</p>
 */
class ModelChatContentPart extends AbstractModel
{
    /**
     * @var string <p>内容类型</p><p>枚举值：</p><ul><li>text： 文本内容</li><li>input_image： 图片输入</li><li>input_video： 视频输入</li><li>input_audio： 音频输入</li><li>input_file： 文件输入</li></ul>
     */
    public $Type;

    /**
     * @var string <p>文本消息</p><p>Type=text 时必填</p>
     */
    public $Text;

    /**
     * @var ModelChatInputImage <p>图片输入</p><p>Type=input_image 时必填</p>
     */
    public $InputImage;

    /**
     * @var ModelChatInputVideo <p>视频输入</p><p>Type=input_video 时必填</p>
     */
    public $InputVideo;

    /**
     * @var ModelChatInputAudio <p>音频输入</p><p>Type=input_audio 时必填</p>
     */
    public $InputAudio;

    /**
     * @var ModelChatInputFile <p>文件输入</p><p>Type=input_file 时必填</p>
     */
    public $InputFile;

    /**
     * @param string $Type <p>内容类型</p><p>枚举值：</p><ul><li>text： 文本内容</li><li>input_image： 图片输入</li><li>input_video： 视频输入</li><li>input_audio： 音频输入</li><li>input_file： 文件输入</li></ul>
     * @param string $Text <p>文本消息</p><p>Type=text 时必填</p>
     * @param ModelChatInputImage $InputImage <p>图片输入</p><p>Type=input_image 时必填</p>
     * @param ModelChatInputVideo $InputVideo <p>视频输入</p><p>Type=input_video 时必填</p>
     * @param ModelChatInputAudio $InputAudio <p>音频输入</p><p>Type=input_audio 时必填</p>
     * @param ModelChatInputFile $InputFile <p>文件输入</p><p>Type=input_file 时必填</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = new ModelChatInputImage();
            $this->InputImage->deserialize($param["InputImage"]);
        }

        if (array_key_exists("InputVideo",$param) and $param["InputVideo"] !== null) {
            $this->InputVideo = new ModelChatInputVideo();
            $this->InputVideo->deserialize($param["InputVideo"]);
        }

        if (array_key_exists("InputAudio",$param) and $param["InputAudio"] !== null) {
            $this->InputAudio = new ModelChatInputAudio();
            $this->InputAudio->deserialize($param["InputAudio"]);
        }

        if (array_key_exists("InputFile",$param) and $param["InputFile"] !== null) {
            $this->InputFile = new ModelChatInputFile();
            $this->InputFile->deserialize($param["InputFile"]);
        }
    }
}
