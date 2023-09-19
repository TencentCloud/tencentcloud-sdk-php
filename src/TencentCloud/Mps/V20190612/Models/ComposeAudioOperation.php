<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 音频操作。
 *
 * @method string getType() 获取音频操作类型，取值有：
<li>Volume：音量调节。</li>
 * @method void setType(string $Type) 设置音频操作类型，取值有：
<li>Volume：音量调节。</li>
 * @method float getVolume() 获取 当 Type = Volume 时有效。音量调节参数，取值范围: 0~5。 
<li>0 表示静音。</li>
<li>小于1 表示降低音量。</li>
<li>1 表示不变。</li>
<li>大于1表示升高音量。</li>
 * @method void setVolume(float $Volume) 设置 当 Type = Volume 时有效。音量调节参数，取值范围: 0~5。 
<li>0 表示静音。</li>
<li>小于1 表示降低音量。</li>
<li>1 表示不变。</li>
<li>大于1表示升高音量。</li>
 */
class ComposeAudioOperation extends AbstractModel
{
    /**
     * @var string 音频操作类型，取值有：
<li>Volume：音量调节。</li>
     */
    public $Type;

    /**
     * @var float  当 Type = Volume 时有效。音量调节参数，取值范围: 0~5。 
<li>0 表示静音。</li>
<li>小于1 表示降低音量。</li>
<li>1 表示不变。</li>
<li>大于1表示升高音量。</li>
     */
    public $Volume;

    /**
     * @param string $Type 音频操作类型，取值有：
<li>Volume：音量调节。</li>
     * @param float $Volume  当 Type = Volume 时有效。音量调节参数，取值范围: 0~5。 
<li>0 表示静音。</li>
<li>小于1 表示降低音量。</li>
<li>1 表示不变。</li>
<li>大于1表示升高音量。</li>
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

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
