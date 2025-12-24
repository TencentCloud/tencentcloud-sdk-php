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
 * RecognizeAudio返回参数结构体
 *
 * @method string getText() 获取整段音频的识别结果
 * @method void setText(string $Text) 设置整段音频的识别结果
 * @method float getAudioLength() 获取音频长度，单位秒
 * @method void setAudioLength(float $AudioLength) 设置音频长度，单位秒
 * @method array getSentence() 获取分句的识别结果
 * @method void setSentence(array $Sentence) 设置分句的识别结果
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeAudioResponse extends AbstractModel
{
    /**
     * @var string 整段音频的识别结果
     */
    public $Text;

    /**
     * @var float 音频长度，单位秒
     */
    public $AudioLength;

    /**
     * @var array 分句的识别结果
     */
    public $Sentence;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Text 整段音频的识别结果
     * @param float $AudioLength 音频长度，单位秒
     * @param array $Sentence 分句的识别结果
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("AudioLength",$param) and $param["AudioLength"] !== null) {
            $this->AudioLength = $param["AudioLength"];
        }

        if (array_key_exists("Sentence",$param) and $param["Sentence"] !== null) {
            $this->Sentence = [];
            foreach ($param["Sentence"] as $key => $value){
                $obj = new RecognizeAudioSentence();
                $obj->deserialize($value);
                array_push($this->Sentence, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
