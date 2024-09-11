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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHealthCheckPolicy请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method HealthCheckPolicy getHealthCheckPolicy() 获取健康检测策略
 * @method void setHealthCheckPolicy(HealthCheckPolicy $HealthCheckPolicy) 设置健康检测策略
 */
class CreateHealthCheckPolicyRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var HealthCheckPolicy 健康检测策略
     */
    public $HealthCheckPolicy;

    /**
     * @param string $ClusterId 集群ID
     * @param HealthCheckPolicy $HealthCheckPolicy 健康检测策略
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("HealthCheckPolicy",$param) and $param["HealthCheckPolicy"] !== null) {
            $this->HealthCheckPolicy = new HealthCheckPolicy();
            $this->HealthCheckPolicy->deserialize($param["HealthCheckPolicy"]);
        }
    }
}
