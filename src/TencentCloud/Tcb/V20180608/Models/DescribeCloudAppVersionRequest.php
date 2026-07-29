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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudAppVersion请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getServiceName() 获取<p>服务名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名</p>
 * @method string getDeployType() 获取<p>部署类型</p>
 * @method void setDeployType(string $DeployType) 设置<p>部署类型</p>
 * @method string getVersionName() 获取<p>版本名</p>
 * @method void setVersionName(string $VersionName) 设置<p>版本名</p>
 * @method string getBuildId() 获取<p>构建id</p>
 * @method void setBuildId(string $BuildId) 设置<p>构建id</p>
 */
class DescribeCloudAppVersionRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>服务名</p>
     */
    public $ServiceName;

    /**
     * @var string <p>部署类型</p>
     */
    public $DeployType;

    /**
     * @var string <p>版本名</p>
     */
    public $VersionName;

    /**
     * @var string <p>构建id</p>
     */
    public $BuildId;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $ServiceName <p>服务名</p>
     * @param string $DeployType <p>部署类型</p>
     * @param string $VersionName <p>版本名</p>
     * @param string $BuildId <p>构建id</p>
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }
    }
}
