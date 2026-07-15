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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC STT配置
 *
 * @method string getLanguage() 获取<p>识别语言，只支持 <code>zh</code>、<code>16k_zh_large</code></p>
 * @method void setLanguage(string $Language) 设置<p>识别语言，只支持 <code>zh</code>、<code>16k_zh_large</code></p>
 * @method integer getVADSilenceTime() 获取<p>VAD 静默检测时间，单位 ms，范围 240–2000</p>
 * @method void setVADSilenceTime(integer $VADSilenceTime) 设置<p>VAD 静默检测时间，单位 ms，范围 240–2000</p>
 * @method integer getVADLevel() 获取<p>远场人声抑制等级，范围 0–5</p>
 * @method void setVADLevel(integer $VADLevel) 设置<p>远场人声抑制等级，范围 0–5</p>
 */
class TalkSTTTRTC extends AbstractModel
{
    /**
     * @var string <p>识别语言，只支持 <code>zh</code>、<code>16k_zh_large</code></p>
     */
    public $Language;

    /**
     * @var integer <p>VAD 静默检测时间，单位 ms，范围 240–2000</p>
     */
    public $VADSilenceTime;

    /**
     * @var integer <p>远场人声抑制等级，范围 0–5</p>
     */
    public $VADLevel;

    /**
     * @param string $Language <p>识别语言，只支持 <code>zh</code>、<code>16k_zh_large</code></p>
     * @param integer $VADSilenceTime <p>VAD 静默检测时间，单位 ms，范围 240–2000</p>
     * @param integer $VADLevel <p>远场人声抑制等级，范围 0–5</p>
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("VADSilenceTime",$param) and $param["VADSilenceTime"] !== null) {
            $this->VADSilenceTime = $param["VADSilenceTime"];
        }

        if (array_key_exists("VADLevel",$param) and $param["VADLevel"] !== null) {
            $this->VADLevel = $param["VADLevel"];
        }
    }
}
