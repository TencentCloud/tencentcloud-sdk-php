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
 * 自定义音色信息。
 *
 * @method string getVoiceId() 获取<p>音色 ID。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色 ID。</p>
 * @method string getVoiceInfo() 获取<p>音色信息。</p>
 * @method void setVoiceInfo(string $VoiceInfo) 设置<p>音色信息。</p>
 */
class CustomVoiceInfo extends AbstractModel
{
    /**
     * @var string <p>音色 ID。</p>
     */
    public $VoiceId;

    /**
     * @var string <p>音色信息。</p>
     */
    public $VoiceInfo;

    /**
     * @param string $VoiceId <p>音色 ID。</p>
     * @param string $VoiceInfo <p>音色信息。</p>
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("VoiceInfo",$param) and $param["VoiceInfo"] !== null) {
            $this->VoiceInfo = $param["VoiceInfo"];
        }
    }
}
