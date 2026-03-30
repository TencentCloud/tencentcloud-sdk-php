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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个视频切片审核详情
 *
 * @method integer getHitFlag() 获取<p>违规标志 0 未命中 1 命中</p>
 * @method void setHitFlag(integer $HitFlag) 设置<p>违规标志 0 未命中 1 命中</p>
 * @method string getSuggestion() 获取<p>审核建议，可选值： Pass 通过， Review 建议人审， Block 确认违规</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>审核建议，可选值： Pass 通过， Review 建议人审， Block 确认违规</p>
 * @method string getText() 获取<p>Asr文本内容</p>
 * @method void setText(string $Text) 设置<p>Asr文本内容</p>
 * @method array getDetail() 获取<p>审核结果</p>
 * @method void setDetail(array $Detail) 设置<p>审核结果</p>
 * @method string getVideoUrl() 获取<p>视频切片存储URL</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>视频切片存储URL</p>
 * @method string getAudioUrl() 获取<p>音频切片存储URL</p>
 * @method void setAudioUrl(string $AudioUrl) 设置<p>音频切片存储URL</p>
 * @method string getDuration() 获取<p>切片时长</p>
 * @method void setDuration(string $Duration) 设置<p>切片时长</p>
 * @method string getRequestId() 获取<p>切片请求ID</p>
 * @method void setRequestId(string $RequestId) 设置<p>切片请求ID</p>
 */
class VideoSegmentResult extends AbstractModel
{
    /**
     * @var integer <p>违规标志 0 未命中 1 命中</p>
     */
    public $HitFlag;

    /**
     * @var string <p>审核建议，可选值： Pass 通过， Review 建议人审， Block 确认违规</p>
     */
    public $Suggestion;

    /**
     * @var string <p>Asr文本内容</p>
     */
    public $Text;

    /**
     * @var array <p>审核结果</p>
     */
    public $Detail;

    /**
     * @var string <p>视频切片存储URL</p>
     */
    public $VideoUrl;

    /**
     * @var string <p>音频切片存储URL</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>切片时长</p>
     */
    public $Duration;

    /**
     * @var string <p>切片请求ID</p>
     */
    public $RequestId;

    /**
     * @param integer $HitFlag <p>违规标志 0 未命中 1 命中</p>
     * @param string $Suggestion <p>审核建议，可选值： Pass 通过， Review 建议人审， Block 确认违规</p>
     * @param string $Text <p>Asr文本内容</p>
     * @param array $Detail <p>审核结果</p>
     * @param string $VideoUrl <p>视频切片存储URL</p>
     * @param string $AudioUrl <p>音频切片存储URL</p>
     * @param string $Duration <p>切片时长</p>
     * @param string $RequestId <p>切片请求ID</p>
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
        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new VideoLLMDetail();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
