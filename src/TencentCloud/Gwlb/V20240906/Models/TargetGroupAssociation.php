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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则与目标组的关联关系。
 *
 * @method string getLoadBalancerId() 获取网关负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置网关负载均衡实例ID。
 * @method string getTargetGroupId() 获取目标组ID。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID。
 */
class TargetGroupAssociation extends AbstractModel
{
    /**
     * @var string 网关负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 目标组ID。
     */
    public $TargetGroupId;

    /**
     * @param string $LoadBalancerId 网关负载均衡实例ID。
     * @param string $TargetGroupId 目标组ID。
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

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }
    }
}
