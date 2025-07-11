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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterTargetsWithClassicalLB请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method array getTargets() 获取后端服务信息。
 * @method void setTargets(array $Targets) 设置后端服务信息。
 */
class RegisterTargetsWithClassicalLBRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var array 后端服务信息。
     */
    public $Targets;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param array $Targets 后端服务信息。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new ClassicalTargetInfo();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
