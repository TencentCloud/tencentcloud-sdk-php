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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToSpeechSync返回参数结构体
 *
 * @method string getAudioData() 获取<p>合成音频的base64编码，wav格式。</p>
 * @method void setAudioData(string $AudioData) 设置<p>合成音频的base64编码，wav格式。</p>
 * @method string getAudioUrl() 获取<p>合成音频url，有效期24小时</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>合成音频url，有效期24小时</p>
 * @method string getExtInfo() 获取<p>扩展信息，json字符串</p><p>duration: 结果音频时长，单位秒</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>扩展信息，json字符串</p><p>duration: 结果音频时长，单位秒</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TextToSpeechSyncResponse extends AbstractModel
{
    /**
     * @var string <p>合成音频的base64编码，wav格式。</p>
     */
    public $AudioData;

    /**
     * @var string <p>合成音频url，有效期24小时</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>扩展信息，json字符串</p><p>duration: 结果音频时长，单位秒</p>
     */
    public $ExtInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AudioData <p>合成音频的base64编码，wav格式。</p>
     * @param string $AudioUrl <p>合成音频url，有效期24小时</p>
     * @param string $ExtInfo <p>扩展信息，json字符串</p><p>duration: 结果音频时长，单位秒</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
