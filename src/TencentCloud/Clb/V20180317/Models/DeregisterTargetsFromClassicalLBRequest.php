<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * DeregisterTargetsFromClassicalLB请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID
 * @method array getInstanceIds() 获取后端服务的实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置后端服务的实例ID列表
 */
class DeregisterTargetsFromClassicalLBRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID
     */
    public $LoadBalancerId;

    /**
     * @var array 后端服务的实例ID列表
     */
    public $InstanceIds;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID
     * @param array $InstanceIds 后端服务的实例ID列表
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
        if (array_key_exists('LoadBalancerId',$param) and $param['LoadBalancerId'] !== null) {
            $this->LoadBalancerId = $param['LoadBalancerId'];
        }

        if (array_key_exists('InstanceIds',$param) and $param['InstanceIds'] !== null) {
            $this->InstanceIds = $param['InstanceIds'];
        }
    }
}
