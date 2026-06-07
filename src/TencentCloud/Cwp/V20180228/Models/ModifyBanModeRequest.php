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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBanMode请求参数结构体
 *
 * @method string getMode() 获取<p>阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断</p>
 * @method void setMode(string $Mode) 设置<p>阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断</p>
 * @method integer getTtl() 获取<p>阻断时间，用于标准阻断模式</p>
 * @method void setTtl(integer $Ttl) 设置<p>阻断时间，用于标准阻断模式</p>
 */
class ModifyBanModeRequest extends AbstractModel
{
    /**
     * @var string <p>阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断</p>
     */
    public $Mode;

    /**
     * @var integer <p>阻断时间，用于标准阻断模式</p>
     */
    public $Ttl;

    /**
     * @param string $Mode <p>阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断</p>
     * @param integer $Ttl <p>阻断时间，用于标准阻断模式</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }
    }
}
