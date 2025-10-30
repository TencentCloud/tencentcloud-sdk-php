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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrometheusClusterAgent请求参数结构体
 *
 * @method array getAgents() 获取agent列表
 * @method void setAgents(array $Agents) 设置agent列表
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method boolean getForce() 获取在7天可回收期间，强制解除绑定
 * @method void setForce(boolean $Force) 设置在7天可回收期间，强制解除绑定
 */
class DeletePrometheusClusterAgentRequest extends AbstractModel
{
    /**
     * @var array agent列表
     */
    public $Agents;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var boolean 在7天可回收期间，强制解除绑定
     */
    public $Force;

    /**
     * @param array $Agents agent列表
     * @param string $InstanceId 实例id
     * @param boolean $Force 在7天可回收期间，强制解除绑定
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
        if (array_key_exists("Agents",$param) and $param["Agents"] !== null) {
            $this->Agents = [];
            foreach ($param["Agents"] as $key => $value){
                $obj = new PrometheusAgentInfo();
                $obj->deserialize($value);
                array_push($this->Agents, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
