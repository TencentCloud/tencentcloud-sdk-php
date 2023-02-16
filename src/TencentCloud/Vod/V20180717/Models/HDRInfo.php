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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高动态范围类型控制参数。
 *
 * @method string getSwitch() 获取高动态范围类型控制开关，可选值：
<li>ON：开启高动态范围类型转换；</li>
<li>OFF：关闭高动态范围类型转换。</li>
 * @method void setSwitch(string $Switch) 设置高动态范围类型控制开关，可选值：
<li>ON：开启高动态范围类型转换；</li>
<li>OFF：关闭高动态范围类型转换。</li>
 * @method string getType() 获取高动态范围类型，可选值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>

注意：
<li> 仅当高动态范围类型控制开关为 ON 时有效；</li>
<li>当画质重生目标参数中指定视频输出参数的视频流编码格式 Codec 为 libx265 时有效。</li>
 * @method void setType(string $Type) 设置高动态范围类型，可选值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>

注意：
<li> 仅当高动态范围类型控制开关为 ON 时有效；</li>
<li>当画质重生目标参数中指定视频输出参数的视频流编码格式 Codec 为 libx265 时有效。</li>
 */
class HDRInfo extends AbstractModel
{
    /**
     * @var string 高动态范围类型控制开关，可选值：
<li>ON：开启高动态范围类型转换；</li>
<li>OFF：关闭高动态范围类型转换。</li>
     */
    public $Switch;

    /**
     * @var string 高动态范围类型，可选值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>

注意：
<li> 仅当高动态范围类型控制开关为 ON 时有效；</li>
<li>当画质重生目标参数中指定视频输出参数的视频流编码格式 Codec 为 libx265 时有效。</li>
     */
    public $Type;

    /**
     * @param string $Switch 高动态范围类型控制开关，可选值：
<li>ON：开启高动态范围类型转换；</li>
<li>OFF：关闭高动态范围类型转换。</li>
     * @param string $Type 高动态范围类型，可选值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>

注意：
<li> 仅当高动态范围类型控制开关为 ON 时有效；</li>
<li>当画质重生目标参数中指定视频输出参数的视频流编码格式 Codec 为 libx265 时有效。</li>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
