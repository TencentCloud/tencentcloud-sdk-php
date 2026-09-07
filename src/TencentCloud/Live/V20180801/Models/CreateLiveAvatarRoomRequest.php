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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveAvatarRoom请求参数结构体
 *
 * @method string getName() 获取<p>直播间名称。</p>
 * @method void setName(string $Name) 设置<p>直播间名称。</p>
 * @method string getOperator() 获取<p>操作者。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者。</p>
 * @method string getAvatarKey() 获取<p>形象ID</p>
 * @method void setAvatarKey(string $AvatarKey) 设置<p>形象ID</p>
 * @method string getTimbreKey() 获取<p>音色ID</p>
 * @method void setTimbreKey(string $TimbreKey) 设置<p>音色ID</p>
 * @method string getLiveMode() 获取<p>房间模式</p><p>枚举值：</p><ul><li>INTERACT： 交互模式</li><li>FREE： 自由模式</li><li>NORMAL： 普通模式</li></ul>
 * @method void setLiveMode(string $LiveMode) 设置<p>房间模式</p><p>枚举值：</p><ul><li>INTERACT： 交互模式</li><li>FREE： 自由模式</li><li>NORMAL： 普通模式</li></ul>
 */
class CreateLiveAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string <p>直播间名称。</p>
     */
    public $Name;

    /**
     * @var string <p>操作者。</p>
     */
    public $Operator;

    /**
     * @var string <p>形象ID</p>
     */
    public $AvatarKey;

    /**
     * @var string <p>音色ID</p>
     */
    public $TimbreKey;

    /**
     * @var string <p>房间模式</p><p>枚举值：</p><ul><li>INTERACT： 交互模式</li><li>FREE： 自由模式</li><li>NORMAL： 普通模式</li></ul>
     */
    public $LiveMode;

    /**
     * @param string $Name <p>直播间名称。</p>
     * @param string $Operator <p>操作者。</p>
     * @param string $AvatarKey <p>形象ID</p>
     * @param string $TimbreKey <p>音色ID</p>
     * @param string $LiveMode <p>房间模式</p><p>枚举值：</p><ul><li>INTERACT： 交互模式</li><li>FREE： 自由模式</li><li>NORMAL： 普通模式</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("AvatarKey",$param) and $param["AvatarKey"] !== null) {
            $this->AvatarKey = $param["AvatarKey"];
        }

        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("LiveMode",$param) and $param["LiveMode"] !== null) {
            $this->LiveMode = $param["LiveMode"];
        }
    }
}
