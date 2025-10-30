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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全实例状态。
 *
 * @method string getEntity() 获取实例名，现在只有子域名。
 * @method void setEntity(string $Entity) 设置实例名，现在只有子域名。
 * @method string getStatus() 获取实例配置下发状态，取值有：
<li>online：配置已生效；</li><li>fail：配置失败；</li><li> process：配置下发中。</li>
 * @method void setStatus(string $Status) 设置实例配置下发状态，取值有：
<li>online：配置已生效；</li><li>fail：配置失败；</li><li> process：配置下发中。</li>
 * @method string getMessage() 获取实例配置下发信息提示。
 * @method void setMessage(string $Message) 设置实例配置下发信息提示。
 */
class EntityStatus extends AbstractModel
{
    /**
     * @var string 实例名，现在只有子域名。
     */
    public $Entity;

    /**
     * @var string 实例配置下发状态，取值有：
<li>online：配置已生效；</li><li>fail：配置失败；</li><li> process：配置下发中。</li>
     */
    public $Status;

    /**
     * @var string 实例配置下发信息提示。
     */
    public $Message;

    /**
     * @param string $Entity 实例名，现在只有子域名。
     * @param string $Status 实例配置下发状态，取值有：
<li>online：配置已生效；</li><li>fail：配置失败；</li><li> process：配置下发中。</li>
     * @param string $Message 实例配置下发信息提示。
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
        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
