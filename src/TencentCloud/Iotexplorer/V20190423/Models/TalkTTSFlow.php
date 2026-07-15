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
 * Flow TTS 的具体配置
 *
 * @method string getVoiceId() 获取<p>精品音色 ID 或克隆音色 ID：具体可参考https://cloud.tencent.com/document/product/647/115414</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>精品音色 ID 或克隆音色 ID：具体可参考https://cloud.tencent.com/document/product/647/115414</p>
 * @method float getSpeed() 获取<p>语速，范围 0.5–2.0；为 0 表示采用默认值</p>
 * @method void setSpeed(float $Speed) 设置<p>语速，范围 0.5–2.0；为 0 表示采用默认值</p>
 */
class TalkTTSFlow extends AbstractModel
{
    /**
     * @var string <p>精品音色 ID 或克隆音色 ID：具体可参考https://cloud.tencent.com/document/product/647/115414</p>
     */
    public $VoiceId;

    /**
     * @var float <p>语速，范围 0.5–2.0；为 0 表示采用默认值</p>
     */
    public $Speed;

    /**
     * @param string $VoiceId <p>精品音色 ID 或克隆音色 ID：具体可参考https://cloud.tencent.com/document/product/647/115414</p>
     * @param float $Speed <p>语速，范围 0.5–2.0；为 0 表示采用默认值</p>
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

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
