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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVersionDetail请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境Id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境Id</p>
 * @method string getServerName() 获取<p>服务名</p>
 * @method void setServerName(string $ServerName) 设置<p>服务名</p>
 * @method string getVersionName() 获取<p>版本名</p>
 * @method void setVersionName(string $VersionName) 设置<p>版本名</p>
 * @method string getChannel() 获取<p>channel</p>
 * @method void setChannel(string $Channel) 设置<p>channel</p>
 */
class DescribeVersionDetailRequest extends AbstractModel
{
    /**
     * @var string <p>环境Id</p>
     */
    public $EnvId;

    /**
     * @var string <p>服务名</p>
     */
    public $ServerName;

    /**
     * @var string <p>版本名</p>
     */
    public $VersionName;

    /**
     * @var string <p>channel</p>
     */
    public $Channel;

    /**
     * @param string $EnvId <p>环境Id</p>
     * @param string $ServerName <p>服务名</p>
     * @param string $VersionName <p>版本名</p>
     * @param string $Channel <p>channel</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
