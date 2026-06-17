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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGrafanaConfig请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getConfig() 获取<p>JSON 编码后的字符串，如 &quot;{&quot;server&quot;:{&quot;root_url&quot;:&quot;http://custom.domain&quot;}}&quot;</p>
 * @method void setConfig(string $Config) 设置<p>JSON 编码后的字符串，如 &quot;{&quot;server&quot;:{&quot;root_url&quot;:&quot;http://custom.domain&quot;}}&quot;</p>
 */
class UpdateGrafanaConfigRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>JSON 编码后的字符串，如 &quot;{&quot;server&quot;:{&quot;root_url&quot;:&quot;http://custom.domain&quot;}}&quot;</p>
     */
    public $Config;

    /**
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $Config <p>JSON 编码后的字符串，如 &quot;{&quot;server&quot;:{&quot;root_url&quot;:&quot;http://custom.domain&quot;}}&quot;</p>
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
