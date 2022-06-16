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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCloudRunServer请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method DeployParam getDeployInfo() 获取部署信息
 * @method void setDeployInfo(DeployParam $DeployInfo) 设置部署信息
 * @method ServerBaseConfig getServerConfig() 获取服务配置信息
 * @method void setServerConfig(ServerBaseConfig $ServerConfig) 设置服务配置信息
 */
class UpdateCloudRunServerRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var DeployParam 部署信息
     */
    public $DeployInfo;

    /**
     * @var ServerBaseConfig 服务配置信息
     */
    public $ServerConfig;

    /**
     * @param string $EnvId 环境Id
     * @param string $ServerName 服务名
     * @param DeployParam $DeployInfo 部署信息
     * @param ServerBaseConfig $ServerConfig 服务配置信息
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

        if (array_key_exists("DeployInfo",$param) and $param["DeployInfo"] !== null) {
            $this->DeployInfo = new DeployParam();
            $this->DeployInfo->deserialize($param["DeployInfo"]);
        }

        if (array_key_exists("ServerConfig",$param) and $param["ServerConfig"] !== null) {
            $this->ServerConfig = new ServerBaseConfig();
            $this->ServerConfig->deserialize($param["ServerConfig"]);
        }
    }
}
