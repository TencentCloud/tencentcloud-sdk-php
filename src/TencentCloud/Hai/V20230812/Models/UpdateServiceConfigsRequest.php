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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateServiceConfigs请求参数结构体
 *
 * @method string getServiceId() 获取<p>服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务ID</p>
 * @method integer getTargetReplicas() 获取<p>期望副本数</p>
 * @method void setTargetReplicas(integer $TargetReplicas) 设置<p>期望副本数</p>
 * @method array getDeploymentConfigs() 获取<p>启动参数、环境变量等参数</p>
 * @method void setDeploymentConfigs(array $DeploymentConfigs) 设置<p>启动参数、环境变量等参数</p>
 */
class UpdateServiceConfigsRequest extends AbstractModel
{
    /**
     * @var string <p>服务ID</p>
     */
    public $ServiceId;

    /**
     * @var integer <p>期望副本数</p>
     */
    public $TargetReplicas;

    /**
     * @var array <p>启动参数、环境变量等参数</p>
     */
    public $DeploymentConfigs;

    /**
     * @param string $ServiceId <p>服务ID</p>
     * @param integer $TargetReplicas <p>期望副本数</p>
     * @param array $DeploymentConfigs <p>启动参数、环境变量等参数</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("DeploymentConfigs",$param) and $param["DeploymentConfigs"] !== null) {
            $this->DeploymentConfigs = [];
            foreach ($param["DeploymentConfigs"] as $key => $value){
                $obj = new DeploymentConfig();
                $obj->deserialize($value);
                array_push($this->DeploymentConfigs, $obj);
            }
        }
    }
}
