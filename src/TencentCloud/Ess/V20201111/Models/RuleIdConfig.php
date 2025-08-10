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
 * 视频核身相关配置
 *
 * @method integer getSpeed() 获取意愿核身语音播报速度，配置后问答模式和点头模式的语音播报环节都会生效，默认值为0：
0-智能语速（根据播报文案的长度自动调整语音播报速度）
1-固定1倍速
2-固定1.2倍速
3-固定1.5倍速
 * @method void setSpeed(integer $Speed) 设置意愿核身语音播报速度，配置后问答模式和点头模式的语音播报环节都会生效，默认值为0：
0-智能语速（根据播报文案的长度自动调整语音播报速度）
1-固定1倍速
2-固定1.2倍速
3-固定1.5倍速
 */
class RuleIdConfig extends AbstractModel
{
    /**
     * @var integer 意愿核身语音播报速度，配置后问答模式和点头模式的语音播报环节都会生效，默认值为0：
0-智能语速（根据播报文案的长度自动调整语音播报速度）
1-固定1倍速
2-固定1.2倍速
3-固定1.5倍速
     */
    public $Speed;

    /**
     * @param integer $Speed 意愿核身语音播报速度，配置后问答模式和点头模式的语音播报环节都会生效，默认值为0：
0-智能语速（根据播报文案的长度自动调整语音播报速度）
1-固定1倍速
2-固定1.2倍速
3-固定1.5倍速
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
        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
