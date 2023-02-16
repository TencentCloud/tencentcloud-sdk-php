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
 * 智能插帧控制参数
 *
 * @method string getSwitch() 获取智能插帧控制开关，可选值：
<li>ON：开启智能插帧；</li>
<li>OFF：关闭智能插帧。</li>
 * @method void setSwitch(string $Switch) 设置智能插帧控制开关，可选值：
<li>ON：开启智能插帧；</li>
<li>OFF：关闭智能插帧。</li>
 * @method integer getFps() 获取智能插帧帧率，帧率范围为 (0, 60]，仅当智能插帧控制开关为 ON 时有效。默认跟源文件帧率一致。
 * @method void setFps(integer $Fps) 设置智能插帧帧率，帧率范围为 (0, 60]，仅当智能插帧控制开关为 ON 时有效。默认跟源文件帧率一致。
 */
class VideoFrameInterpolationInfo extends AbstractModel
{
    /**
     * @var string 智能插帧控制开关，可选值：
<li>ON：开启智能插帧；</li>
<li>OFF：关闭智能插帧。</li>
     */
    public $Switch;

    /**
     * @var integer 智能插帧帧率，帧率范围为 (0, 60]，仅当智能插帧控制开关为 ON 时有效。默认跟源文件帧率一致。
     */
    public $Fps;

    /**
     * @param string $Switch 智能插帧控制开关，可选值：
<li>ON：开启智能插帧；</li>
<li>OFF：关闭智能插帧。</li>
     * @param integer $Fps 智能插帧帧率，帧率范围为 (0, 60]，仅当智能插帧控制开关为 ON 时有效。默认跟源文件帧率一致。
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
