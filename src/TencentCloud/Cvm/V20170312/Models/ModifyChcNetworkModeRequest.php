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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyChcNetworkMode请求参数结构体
 *
 * @method array getChcIds() 获取<p>CHC物理服务器id列表，如[&quot;chc-1a2b3c4d&quot;]</p>
 * @method void setChcIds(array $ChcIds) 设置<p>CHC物理服务器id列表，如[&quot;chc-1a2b3c4d&quot;]</p>
 * @method string getNetworkMode() 获取<p>所要切换的网络模式</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
 * @method void setNetworkMode(string $NetworkMode) 设置<p>所要切换的网络模式</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
 */
class ModifyChcNetworkModeRequest extends AbstractModel
{
    /**
     * @var array <p>CHC物理服务器id列表，如[&quot;chc-1a2b3c4d&quot;]</p>
     */
    public $ChcIds;

    /**
     * @var string <p>所要切换的网络模式</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
     */
    public $NetworkMode;

    /**
     * @param array $ChcIds <p>CHC物理服务器id列表，如[&quot;chc-1a2b3c4d&quot;]</p>
     * @param string $NetworkMode <p>所要切换的网络模式</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
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
        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }
    }
}
