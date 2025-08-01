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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频流配置参数。
 *
 * @method string getCodec() 获取音频流的编码格式。可选值为：
<li>libfdk_aac。</li>
 * @method void setCodec(string $Codec) 设置音频流的编码格式。可选值为：
<li>libfdk_aac。</li>
 * @method integer getAudioChannel() 获取音频通道数，可选值：<li>2：双通道。</li>默认值：2。
 * @method void setAudioChannel(integer $AudioChannel) 设置音频通道数，可选值：<li>2：双通道。</li>默认值：2。
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string 音频流的编码格式。可选值为：
<li>libfdk_aac。</li>
     */
    public $Codec;

    /**
     * @var integer 音频通道数，可选值：<li>2：双通道。</li>默认值：2。
     */
    public $AudioChannel;

    /**
     * @param string $Codec 音频流的编码格式。可选值为：
<li>libfdk_aac。</li>
     * @param integer $AudioChannel 音频通道数，可选值：<li>2：双通道。</li>默认值：2。
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }
    }
}
