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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoSummaryDetail返回参数结构体
 *
 * @method integer getStatus() 获取任务的状态
1: 等待处理中
2: 处理中
3: 处理成功
4: 处理失败
 * @method void setStatus(integer $Status) 设置任务的状态
1: 等待处理中
2: 处理中
3: 处理成功
4: 处理失败
 * @method string getFailedReason() 获取如果处理失败，返回失败的原因
 * @method void setFailedReason(string $FailedReason) 设置如果处理失败，返回失败的原因
 * @method array getAsrSet() 获取提取出的视频的 Asr 结果
 * @method void setAsrSet(array $AsrSet) 设置提取出的视频的 Asr 结果
 * @method string getTextSummary() 获取文本摘要结果
 * @method void setTextSummary(string $TextSummary) 设置文本摘要结果
 * @method array getTextSegSet() 获取文本摘要分割结果
 * @method void setTextSegSet(array $TextSegSet) 设置文本摘要分割结果
 * @method array getShotSegSet() 获取镜头分割结果
 * @method void setShotSegSet(array $ShotSegSet) 设置镜头分割结果
 * @method array getTextSegMatchShotScoreSet() 获取数组第 i 个结构 TextSegMatchShotConfidenceSet[i] 表示第 i 个文本摘要分割结果和所有镜头的匹配度。
 * @method void setTextSegMatchShotScoreSet(array $TextSegMatchShotScoreSet) 设置数组第 i 个结构 TextSegMatchShotConfidenceSet[i] 表示第 i 个文本摘要分割结果和所有镜头的匹配度。
 * @method array getTTSResultURLSet() 获取TTS 输出音频下载地址列表
 * @method void setTTSResultURLSet(array $TTSResultURLSet) 设置TTS 输出音频下载地址列表
 * @method string getVideoResultURL() 获取合成视频输出下载地址
 * @method void setVideoResultURL(string $VideoResultURL) 设置合成视频输出下载地址
 * @method string getVideoRotateResultURL() 获取合成后的视频横竖屏转换后的视频下载地址
 * @method void setVideoRotateResultURL(string $VideoRotateResultURL) 设置合成后的视频横竖屏转换后的视频下载地址
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoSummaryDetailResponse extends AbstractModel
{
    /**
     * @var integer 任务的状态
1: 等待处理中
2: 处理中
3: 处理成功
4: 处理失败
     */
    public $Status;

    /**
     * @var string 如果处理失败，返回失败的原因
     */
    public $FailedReason;

    /**
     * @var array 提取出的视频的 Asr 结果
     */
    public $AsrSet;

    /**
     * @var string 文本摘要结果
     */
    public $TextSummary;

    /**
     * @var array 文本摘要分割结果
     */
    public $TextSegSet;

    /**
     * @var array 镜头分割结果
     */
    public $ShotSegSet;

    /**
     * @var array 数组第 i 个结构 TextSegMatchShotConfidenceSet[i] 表示第 i 个文本摘要分割结果和所有镜头的匹配度。
     */
    public $TextSegMatchShotScoreSet;

    /**
     * @var array TTS 输出音频下载地址列表
     */
    public $TTSResultURLSet;

    /**
     * @var string 合成视频输出下载地址
     */
    public $VideoResultURL;

    /**
     * @var string 合成后的视频横竖屏转换后的视频下载地址
     */
    public $VideoRotateResultURL;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 任务的状态
1: 等待处理中
2: 处理中
3: 处理成功
4: 处理失败
     * @param string $FailedReason 如果处理失败，返回失败的原因
     * @param array $AsrSet 提取出的视频的 Asr 结果
     * @param string $TextSummary 文本摘要结果
     * @param array $TextSegSet 文本摘要分割结果
     * @param array $ShotSegSet 镜头分割结果
     * @param array $TextSegMatchShotScoreSet 数组第 i 个结构 TextSegMatchShotConfidenceSet[i] 表示第 i 个文本摘要分割结果和所有镜头的匹配度。
     * @param array $TTSResultURLSet TTS 输出音频下载地址列表
     * @param string $VideoResultURL 合成视频输出下载地址
     * @param string $VideoRotateResultURL 合成后的视频横竖屏转换后的视频下载地址
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

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("AsrSet",$param) and $param["AsrSet"] !== null) {
            $this->AsrSet = [];
            foreach ($param["AsrSet"] as $key => $value){
                $obj = new AsrResult();
                $obj->deserialize($value);
                array_push($this->AsrSet, $obj);
            }
        }

        if (array_key_exists("TextSummary",$param) and $param["TextSummary"] !== null) {
            $this->TextSummary = $param["TextSummary"];
        }

        if (array_key_exists("TextSegSet",$param) and $param["TextSegSet"] !== null) {
            $this->TextSegSet = $param["TextSegSet"];
        }

        if (array_key_exists("ShotSegSet",$param) and $param["ShotSegSet"] !== null) {
            $this->ShotSegSet = [];
            foreach ($param["ShotSegSet"] as $key => $value){
                $obj = new ShotInfo();
                $obj->deserialize($value);
                array_push($this->ShotSegSet, $obj);
            }
        }

        if (array_key_exists("TextSegMatchShotScoreSet",$param) and $param["TextSegMatchShotScoreSet"] !== null) {
            $this->TextSegMatchShotScoreSet = [];
            foreach ($param["TextSegMatchShotScoreSet"] as $key => $value){
                $obj = new TextSegMatchShotScore();
                $obj->deserialize($value);
                array_push($this->TextSegMatchShotScoreSet, $obj);
            }
        }

        if (array_key_exists("TTSResultURLSet",$param) and $param["TTSResultURLSet"] !== null) {
            $this->TTSResultURLSet = $param["TTSResultURLSet"];
        }

        if (array_key_exists("VideoResultURL",$param) and $param["VideoResultURL"] !== null) {
            $this->VideoResultURL = $param["VideoResultURL"];
        }

        if (array_key_exists("VideoRotateResultURL",$param) and $param["VideoRotateResultURL"] !== null) {
            $this->VideoRotateResultURL = $param["VideoRotateResultURL"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
