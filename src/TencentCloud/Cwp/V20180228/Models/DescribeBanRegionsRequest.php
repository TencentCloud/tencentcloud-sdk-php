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
 * DescribeBanRegions请求参数结构体
 *
 * @method string getMode() 获取阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
 * @method void setMode(string $Mode) 设置阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
 */
class DescribeBanRegionsRequest extends AbstractModel
{
    /**
     * @var string 阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
     */
    public $Mode;

    /**
     * @param string $Mode 阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
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
    }
}
