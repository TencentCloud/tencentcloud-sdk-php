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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHost请求参数结构体
 *
 * @method HostRecord getHost() 获取<p>编辑的域名配置信息</p>
 * @method void setHost(HostRecord $Host) 设置<p>编辑的域名配置信息</p>
 * @method string getInstanceID() 获取<p>实例唯一ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例唯一ID</p>
 */
class ModifyHostRequest extends AbstractModel
{
    /**
     * @var HostRecord <p>编辑的域名配置信息</p>
     */
    public $Host;

    /**
     * @var string <p>实例唯一ID</p>
     */
    public $InstanceID;

    /**
     * @param HostRecord $Host <p>编辑的域名配置信息</p>
     * @param string $InstanceID <p>实例唯一ID</p>
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = new HostRecord();
            $this->Host->deserialize($param["Host"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
