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
 * 视频编辑/合成任务 视频流信息。
 *
 * @method string getCodec() 获取视频流的编码方式，可选值：
<li>H.264：H.264 编码（默认）。</li>
 * @method void setCodec(string $Codec) 设置视频流的编码方式，可选值：
<li>H.264：H.264 编码（默认）。</li>
 * @method integer getFps() 获取视频帧率，取值范围：[0, 60]，单位：Hz。  
默认值：0，表示和第一个视频帧率一致。
 * @method void setFps(integer $Fps) 设置视频帧率，取值范围：[0, 60]，单位：Hz。  
默认值：0，表示和第一个视频帧率一致。
 * @method integer getBitrate() 获取参考码率，单位 kbps，范围：50~35000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将通过画面复杂度自动采用合适的码率。
 * @method void setBitrate(integer $Bitrate) 设置参考码率，单位 kbps，范围：50~35000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将通过画面复杂度自动采用合适的码率。
 */
class ComposeVideoStream extends AbstractModel
{
    /**
     * @var string 视频流的编码方式，可选值：
<li>H.264：H.264 编码（默认）。</li>
     */
    public $Codec;

    /**
     * @var integer 视频帧率，取值范围：[0, 60]，单位：Hz。  
默认值：0，表示和第一个视频帧率一致。
     */
    public $Fps;

    /**
     * @var integer 参考码率，单位 kbps，范围：50~35000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将通过画面复杂度自动采用合适的码率。
     */
    public $Bitrate;

    /**
     * @param string $Codec 视频流的编码方式，可选值：
<li>H.264：H.264 编码（默认）。</li>
     * @param integer $Fps 视频帧率，取值范围：[0, 60]，单位：Hz。  
默认值：0，表示和第一个视频帧率一致。
     * @param integer $Bitrate 参考码率，单位 kbps，范围：50~35000。
如果设置，编码时会尽量按该码率进行编码。
如果不设置，服务将通过画面复杂度自动采用合适的码率。
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
