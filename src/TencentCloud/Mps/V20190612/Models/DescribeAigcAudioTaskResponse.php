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
 * DescribeAigcAudioTask返回参数结构体
 *
 * @method string getStatus() 获取<p>任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。</p>
 * @method void setStatus(string $Status) 设置<p>任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。</p>
 * @method string getMessage() 获取<p>当任务状态为 FAIL时，返回失败信息。</p>
 * @method void setMessage(string $Message) 设置<p>当任务状态为 FAIL时，返回失败信息。</p>
 * @method array getAudioInfos() 获取<p>输出的音频信息。</p>
 * @method void setAudioInfos(array $AudioInfos) 设置<p>输出的音频信息。</p>
 * @method array getVideoInfos() 获取<p>输出的视频信息，仅视频配音等场景会输出。</p>
 * @method void setVideoInfos(array $VideoInfos) 设置<p>输出的视频信息，仅视频配音等场景会输出。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAigcAudioTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。</p>
     */
    public $Status;

    /**
     * @var string <p>当任务状态为 FAIL时，返回失败信息。</p>
     */
    public $Message;

    /**
     * @var array <p>输出的音频信息。</p>
     */
    public $AudioInfos;

    /**
     * @var array <p>输出的视频信息，仅视频配音等场景会输出。</p>
     */
    public $VideoInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。</p>
     * @param string $Message <p>当任务状态为 FAIL时，返回失败信息。</p>
     * @param array $AudioInfos <p>输出的音频信息。</p>
     * @param array $VideoInfos <p>输出的视频信息，仅视频配音等场景会输出。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcAudioOutputAudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcAudioOutputVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
