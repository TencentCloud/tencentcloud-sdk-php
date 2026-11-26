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
 * DescribeAsyncTextToSpeech返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态</p><ul><li>Processing，处理中</li><li>Success，任务成功</li><li>Failed，任务失败</li><li>Expired，任务过期</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><ul><li>Processing，处理中</li><li>Success，任务成功</li><li>Failed，任务失败</li><li>Expired，任务过期</li></ul>
 * @method string getAudioDownloadUrl() 获取<p>音频下载url</p>
 * @method void setAudioDownloadUrl(string $AudioDownloadUrl) 设置<p>音频下载url</p>
 * @method string getSubtitleDownloadUrl() 获取<p>字幕下载url</p>
 * @method void setSubtitleDownloadUrl(string $SubtitleDownloadUrl) 设置<p>字幕下载url</p>
 * @method integer getTotalDurationMs() 获取<p>音频时长</p>
 * @method void setTotalDurationMs(integer $TotalDurationMs) 设置<p>音频时长</p>
 * @method array getSegmentResults() 获取<p>分段文本对应的结果</p>
 * @method void setSegmentResults(array $SegmentResults) 设置<p>分段文本对应的结果</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAsyncTextToSpeechResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态</p><ul><li>Processing，处理中</li><li>Success，任务成功</li><li>Failed，任务失败</li><li>Expired，任务过期</li></ul>
     */
    public $Status;

    /**
     * @var string <p>音频下载url</p>
     */
    public $AudioDownloadUrl;

    /**
     * @var string <p>字幕下载url</p>
     */
    public $SubtitleDownloadUrl;

    /**
     * @var integer <p>音频时长</p>
     */
    public $TotalDurationMs;

    /**
     * @var array <p>分段文本对应的结果</p>
     */
    public $SegmentResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态</p><ul><li>Processing，处理中</li><li>Success，任务成功</li><li>Failed，任务失败</li><li>Expired，任务过期</li></ul>
     * @param string $AudioDownloadUrl <p>音频下载url</p>
     * @param string $SubtitleDownloadUrl <p>字幕下载url</p>
     * @param integer $TotalDurationMs <p>音频时长</p>
     * @param array $SegmentResults <p>分段文本对应的结果</p>
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

        if (array_key_exists("AudioDownloadUrl",$param) and $param["AudioDownloadUrl"] !== null) {
            $this->AudioDownloadUrl = $param["AudioDownloadUrl"];
        }

        if (array_key_exists("SubtitleDownloadUrl",$param) and $param["SubtitleDownloadUrl"] !== null) {
            $this->SubtitleDownloadUrl = $param["SubtitleDownloadUrl"];
        }

        if (array_key_exists("TotalDurationMs",$param) and $param["TotalDurationMs"] !== null) {
            $this->TotalDurationMs = $param["TotalDurationMs"];
        }

        if (array_key_exists("SegmentResults",$param) and $param["SegmentResults"] !== null) {
            $this->SegmentResults = [];
            foreach ($param["SegmentResults"] as $key => $value){
                $obj = new AsyncTTSSegmentResult();
                $obj->deserialize($value);
                array_push($this->SegmentResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
