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
 * 音色克隆任务输出。
 *
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getDemoAudio() 获取<p>试听音频</p>
 * @method void setDemoAudio(string $DemoAudio) 设置<p>试听音频</p>
 * @method string getExtInfo() 获取<p>扩展信息</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>扩展信息</p>
 */
class CloneVoiceAsyncOutput extends AbstractModel
{
    /**
     * @var string <p>音色ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>试听音频</p>
     */
    public $DemoAudio;

    /**
     * @var string <p>扩展信息</p>
     */
    public $ExtInfo;

    /**
     * @param string $VoiceId <p>音色ID</p>
     * @param string $DemoAudio <p>试听音频</p>
     * @param string $ExtInfo <p>扩展信息</p>
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

        if (array_key_exists("DemoAudio",$param) and $param["DemoAudio"] !== null) {
            $this->DemoAudio = $param["DemoAudio"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
