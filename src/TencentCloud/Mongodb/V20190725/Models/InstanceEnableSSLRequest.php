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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstanceEnableSSL请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method boolean getEnable() 获取<p>配置是否要开启SSL访问。</p><ul><li>true：开启。</li><li>false：关闭。</li></ul>
 * @method void setEnable(boolean $Enable) 设置<p>配置是否要开启SSL访问。</p><ul><li>true：开启。</li><li>false：关闭。</li></ul>
 */
class InstanceEnableSSLRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>配置是否要开启SSL访问。</p><ul><li>true：开启。</li><li>false：关闭。</li></ul>
     */
    public $Enable;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param boolean $Enable <p>配置是否要开启SSL访问。</p><ul><li>true：开启。</li><li>false：关闭。</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
