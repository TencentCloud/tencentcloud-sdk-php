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
 * AsyncTTSTextSegment对应的结果
 *
 * @method string getText() 获取<p>分段文本</p>
 * @method void setText(string $Text) 设置<p>分段文本</p>
 * @method string getAudioDownloadUrl() 获取<p>音频下载url</p>
 * @method void setAudioDownloadUrl(string $AudioDownloadUrl) 设置<p>音频下载url</p>
 * @method integer getDurationMs() 获取<p>音频时长</p><p>单位：ms</p>
 * @method void setDurationMs(integer $DurationMs) 设置<p>音频时长</p><p>单位：ms</p>
 */
class AsyncTTSSegmentResult extends AbstractModel
{
    /**
     * @var string <p>分段文本</p>
     */
    public $Text;

    /**
     * @var string <p>音频下载url</p>
     */
    public $AudioDownloadUrl;

    /**
     * @var integer <p>音频时长</p><p>单位：ms</p>
     */
    public $DurationMs;

    /**
     * @param string $Text <p>分段文本</p>
     * @param string $AudioDownloadUrl <p>音频下载url</p>
     * @param integer $DurationMs <p>音频时长</p><p>单位：ms</p>
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

        if (array_key_exists("AudioDownloadUrl",$param) and $param["AudioDownloadUrl"] !== null) {
            $this->AudioDownloadUrl = $param["AudioDownloadUrl"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }
    }
}
