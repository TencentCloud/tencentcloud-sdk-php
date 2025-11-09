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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱网络配置
 *
 * @method string getNetworkMode() 获取网络模式（当前支持 PUBLIC）
 * @method void setNetworkMode(string $NetworkMode) 设置网络模式（当前支持 PUBLIC）
 */
class NetworkConfiguration extends AbstractModel
{
    /**
     * @var string 网络模式（当前支持 PUBLIC）
     */
    public $NetworkMode;

    /**
     * @param string $NetworkMode 网络模式（当前支持 PUBLIC）
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
        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }
    }
}
