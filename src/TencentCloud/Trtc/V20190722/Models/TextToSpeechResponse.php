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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToSpeech返回参数结构体
 *
 * @method string getAudio() 获取<p>Base64编码的音频数据</p>
 * @method void setAudio(string $Audio) 设置<p>Base64编码的音频数据</p>
 * @method array getAlignments() 获取<p>字幕对齐数据</p>
 * @method void setAlignments(array $Alignments) 设置<p>字幕对齐数据</p>
 * @method integer getTotalDurationMs() 获取<p>音频时长</p>
 * @method void setTotalDurationMs(integer $TotalDurationMs) 设置<p>音频时长</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TextToSpeechResponse extends AbstractModel
{
    /**
     * @var string <p>Base64编码的音频数据</p>
     */
    public $Audio;

    /**
     * @var array <p>字幕对齐数据</p>
     */
    public $Alignments;

    /**
     * @var integer <p>音频时长</p>
     */
    public $TotalDurationMs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Audio <p>Base64编码的音频数据</p>
     * @param array $Alignments <p>字幕对齐数据</p>
     * @param integer $TotalDurationMs <p>音频时长</p>
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
        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = $param["Audio"];
        }

        if (array_key_exists("Alignments",$param) and $param["Alignments"] !== null) {
            $this->Alignments = [];
            foreach ($param["Alignments"] as $key => $value){
                $obj = new AlignmentItem();
                $obj->deserialize($value);
                array_push($this->Alignments, $obj);
            }
        }

        if (array_key_exists("TotalDurationMs",$param) and $param["TotalDurationMs"] !== null) {
            $this->TotalDurationMs = $param["TotalDurationMs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
