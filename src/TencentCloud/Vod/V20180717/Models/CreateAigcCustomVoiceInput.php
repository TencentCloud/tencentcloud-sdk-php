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
 * 创建自定义音色回调输入信息。
 *
 * @method string getVoiceName() 获取<p>音色名称。</p>
 * @method void setVoiceName(string $VoiceName) 设置<p>音色名称。</p>
 * @method string getVoiceUrl() 获取<p>音色数据文件获取链接。</p>
 * @method void setVoiceUrl(string $VoiceUrl) 设置<p>音色数据文件获取链接。</p>
 * @method string getVideoId() 获取<p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
 * @method void setVideoId(string $VideoId) 设置<p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
 */
class CreateAigcCustomVoiceInput extends AbstractModel
{
    /**
     * @var string <p>音色名称。</p>
     */
    public $VoiceName;

    /**
     * @var string <p>音色数据文件获取链接。</p>
     */
    public $VoiceUrl;

    /**
     * @var string <p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
     */
    public $VideoId;

    /**
     * @param string $VoiceName <p>音色名称。</p>
     * @param string $VoiceUrl <p>音色数据文件获取链接。</p>
     * @param string $VideoId <p>历史作品 ID，可通过引用历史作品提供音频素材。</p>
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
        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceUrl",$param) and $param["VoiceUrl"] !== null) {
            $this->VoiceUrl = $param["VoiceUrl"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }
    }
}
