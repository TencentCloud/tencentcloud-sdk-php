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
 * 外挂音频。
 *
 * @method MediaInputInfo getInputInfo() 获取<p>音频文件输入信息。注意：（1）音频流的编码格式支持：aac、ac3、eac3、flac、opus和mp3；（2）当转自适应码流模板中设置的切片类型为ts的时候，音频流的编码格式不能为flac。</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置<p>音频文件输入信息。注意：（1）音频流的编码格式支持：aac、ac3、eac3、flac、opus和mp3；（2）当转自适应码流模板中设置的切片类型为ts的时候，音频流的编码格式不能为flac。</p>
 * @method string getAudioName() 获取<p>音轨名称，如：中文、English。注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
 * @method void setAudioName(string $AudioName) 设置<p>音轨名称，如：中文、English。注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
 * @method string getAudioLanguage() 获取<p>音轨语言，如：chi、eng，遵循 ISO 639-2</p>
 * @method void setAudioLanguage(string $AudioLanguage) 设置<p>音轨语言，如：chi、eng，遵循 ISO 639-2</p>
 * @method boolean getDefaultTrack() 获取<p>默认音频轨道。为true时指定当前音频为默认音频轨道，最多可指定1条默认音频轨道。</p><p>默认值：false</p>
 * @method void setDefaultTrack(boolean $DefaultTrack) 设置<p>默认音频轨道。为true时指定当前音频为默认音频轨道，最多可指定1条默认音频轨道。</p><p>默认值：false</p>
 */
class AddOnAudio extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>音频文件输入信息。注意：（1）音频流的编码格式支持：aac、ac3、eac3、flac、opus和mp3；（2）当转自适应码流模板中设置的切片类型为ts的时候，音频流的编码格式不能为flac。</p>
     */
    public $InputInfo;

    /**
     * @var string <p>音轨名称，如：中文、English。注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
     */
    public $AudioName;

    /**
     * @var string <p>音轨语言，如：chi、eng，遵循 ISO 639-2</p>
     */
    public $AudioLanguage;

    /**
     * @var boolean <p>默认音频轨道。为true时指定当前音频为默认音频轨道，最多可指定1条默认音频轨道。</p><p>默认值：false</p>
     */
    public $DefaultTrack;

    /**
     * @param MediaInputInfo $InputInfo <p>音频文件输入信息。注意：（1）音频流的编码格式支持：aac、ac3、eac3、flac、opus和mp3；（2）当转自适应码流模板中设置的切片类型为ts的时候，音频流的编码格式不能为flac。</p>
     * @param string $AudioName <p>音轨名称，如：中文、English。注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
     * @param string $AudioLanguage <p>音轨语言，如：chi、eng，遵循 ISO 639-2</p>
     * @param boolean $DefaultTrack <p>默认音频轨道。为true时指定当前音频为默认音频轨道，最多可指定1条默认音频轨道。</p><p>默认值：false</p>
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("AudioName",$param) and $param["AudioName"] !== null) {
            $this->AudioName = $param["AudioName"];
        }

        if (array_key_exists("AudioLanguage",$param) and $param["AudioLanguage"] !== null) {
            $this->AudioLanguage = $param["AudioLanguage"];
        }

        if (array_key_exists("DefaultTrack",$param) and $param["DefaultTrack"] !== null) {
            $this->DefaultTrack = $param["DefaultTrack"];
        }
    }
}
