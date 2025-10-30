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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身问答模式结果。若未使用该意愿核身功能，该字段返回值可以不处理。
 *
 * @method string getVideo() 获取视频base64（其中包含全程问题和回答音频，mp4格式）

注：`需进行base64解码获取视频文件`
 * @method void setVideo(string $Video) 设置视频base64（其中包含全程问题和回答音频，mp4格式）

注：`需进行base64解码获取视频文件`
 * @method array getResultCode() 获取 和答案匹配结果列表
 * @method void setResultCode(array $ResultCode) 设置 和答案匹配结果列表
 * @method array getAsrResult() 获取回答问题语音识别结果列表
 * @method void setAsrResult(array $AsrResult) 设置回答问题语音识别结果列表
 */
class IntentionQuestionResult extends AbstractModel
{
    /**
     * @var string 视频base64（其中包含全程问题和回答音频，mp4格式）

注：`需进行base64解码获取视频文件`
     */
    public $Video;

    /**
     * @var array  和答案匹配结果列表
     */
    public $ResultCode;

    /**
     * @var array 回答问题语音识别结果列表
     */
    public $AsrResult;

    /**
     * @param string $Video 视频base64（其中包含全程问题和回答音频，mp4格式）

注：`需进行base64解码获取视频文件`
     * @param array $ResultCode  和答案匹配结果列表
     * @param array $AsrResult 回答问题语音识别结果列表
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
        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("AsrResult",$param) and $param["AsrResult"] !== null) {
            $this->AsrResult = $param["AsrResult"];
        }
    }
}
