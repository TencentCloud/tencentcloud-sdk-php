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
 * 语音识别配置
 *
 * @method string getType() 获取当前仅支持 `trtc`（使用 TRTC 内置语音识别）。
 * @method void setType(string $Type) 设置当前仅支持 `trtc`（使用 TRTC 内置语音识别）。
 * @method TalkSTTTRTC getTRTC() 获取`Type=trtc` 时生效。整体省略表示全部使用 TRTC 默认值。
 * @method void setTRTC(TalkSTTTRTC $TRTC) 设置`Type=trtc` 时生效。整体省略表示全部使用 TRTC 默认值。
 */
class TalkSTTConfig extends AbstractModel
{
    /**
     * @var string 当前仅支持 `trtc`（使用 TRTC 内置语音识别）。
     */
    public $Type;

    /**
     * @var TalkSTTTRTC `Type=trtc` 时生效。整体省略表示全部使用 TRTC 默认值。
     */
    public $TRTC;

    /**
     * @param string $Type 当前仅支持 `trtc`（使用 TRTC 内置语音识别）。
     * @param TalkSTTTRTC $TRTC `Type=trtc` 时生效。整体省略表示全部使用 TRTC 默认值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TRTC",$param) and $param["TRTC"] !== null) {
            $this->TRTC = new TalkSTTTRTC();
            $this->TRTC->deserialize($param["TRTC"]);
        }
    }
}
