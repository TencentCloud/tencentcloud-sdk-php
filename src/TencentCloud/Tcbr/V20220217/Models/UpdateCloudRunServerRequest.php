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
 * UpdateCloudRunServer请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境Id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境Id</p>
 * @method string getServerName() 获取<p>服务名</p>
 * @method void setServerName(string $ServerName) 设置<p>服务名</p>
 * @method DeployParam getDeployInfo() 获取<p>部署信息</p>
 * @method void setDeployInfo(DeployParam $DeployInfo) 设置<p>部署信息</p>
 * @method ServerBaseConfig getServerConfig() 获取<p>服务配置信息(已废弃)</p>
 * @method void setServerConfig(ServerBaseConfig $ServerConfig) 设置<p>服务配置信息(已废弃)</p>
 * @method string getBusiness() 获取<p>业务类型，默认tcr</p>
 * @method void setBusiness(string $Business) 设置<p>业务类型，默认tcr</p>
 * @method array getItems() 获取<p>服务配置信息</p>
 * @method void setItems(array $Items) 设置<p>服务配置信息</p>
 */
class UpdateCloudRunServerRequest extends AbstractModel
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
     * @var DeployParam <p>部署信息</p>
     */
    public $DeployInfo;

    /**
     * @var ServerBaseConfig <p>服务配置信息(已废弃)</p>
     */
    public $ServerConfig;

    /**
     * @var string <p>业务类型，默认tcr</p>
     */
    public $Business;

    /**
     * @var array <p>服务配置信息</p>
     */
    public $Items;

    /**
     * @param string $EnvId <p>环境Id</p>
     * @param string $ServerName <p>服务名</p>
     * @param DeployParam $DeployInfo <p>部署信息</p>
     * @param ServerBaseConfig $ServerConfig <p>服务配置信息(已废弃)</p>
     * @param string $Business <p>业务类型，默认tcr</p>
     * @param array $Items <p>服务配置信息</p>
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

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DiffConfigItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
