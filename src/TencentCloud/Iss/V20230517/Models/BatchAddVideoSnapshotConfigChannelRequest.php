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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchAddVideoSnapshotConfigChannel请求参数结构体
 *
 * @method string getConfigId() 获取<p>截图配置Id</p>
 * @method void setConfigId(string $ConfigId) 设置<p>截图配置Id</p>
 * @method array getChannels() 获取<p>通道Id列表</p>
 * @method void setChannels(array $Channels) 设置<p>通道Id列表</p>
 */
class BatchAddVideoSnapshotConfigChannelRequest extends AbstractModel
{
    /**
     * @var string <p>截图配置Id</p>
     */
    public $ConfigId;

    /**
     * @var array <p>通道Id列表</p>
     */
    public $Channels;

    /**
     * @param string $ConfigId <p>截图配置Id</p>
     * @param array $Channels <p>通道Id列表</p>
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }
    }
}
