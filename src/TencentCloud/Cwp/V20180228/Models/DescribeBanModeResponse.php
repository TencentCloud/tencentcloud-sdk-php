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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBanMode返回参数结构体
 *
 * @method string getMode() 获取阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
 * @method void setMode(string $Mode) 设置阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
 * @method StandardModeConfig getStandardModeConfig() 获取标准阻断模式的配置
 * @method void setStandardModeConfig(StandardModeConfig $StandardModeConfig) 设置标准阻断模式的配置
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBanModeResponse extends AbstractModel
{
    /**
     * @var string 阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
     */
    public $Mode;

    /**
     * @var StandardModeConfig 标准阻断模式的配置
     */
    public $StandardModeConfig;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Mode 阻断模式，STANDARD_MODE：标准阻断，DEEP_MODE：深度阻断
     * @param StandardModeConfig $StandardModeConfig 标准阻断模式的配置
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("StandardModeConfig",$param) and $param["StandardModeConfig"] !== null) {
            $this->StandardModeConfig = new StandardModeConfig();
            $this->StandardModeConfig->deserialize($param["StandardModeConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
