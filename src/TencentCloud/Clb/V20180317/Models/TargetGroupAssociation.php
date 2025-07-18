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
 * 规则与目标组的关联关系
 *
 * @method string getLoadBalancerId() 获取负载均衡ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡ID
 * @method string getTargetGroupId() 获取目标组ID
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID
 * @method string getListenerId() 获取监听器ID。访问AssociateTargetGroups和DisassociateTargetGroups接口时必传此参数。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。访问AssociateTargetGroups和DisassociateTargetGroups接口时必传此参数。
 * @method string getLocationId() 获取转发规则ID
 * @method void setLocationId(string $LocationId) 设置转发规则ID
 * @method integer getWeight() 获取目标组权重，范围[0, 100]。仅绑定v2目标组时生效，如果不存在，则默认为10。
 * @method void setWeight(integer $Weight) 设置目标组权重，范围[0, 100]。仅绑定v2目标组时生效，如果不存在，则默认为10。
 */
class TargetGroupAssociation extends AbstractModel
{
    /**
     * @var string 负载均衡ID
     */
    public $LoadBalancerId;

    /**
     * @var string 目标组ID
     */
    public $TargetGroupId;

    /**
     * @var string 监听器ID。访问AssociateTargetGroups和DisassociateTargetGroups接口时必传此参数。
     */
    public $ListenerId;

    /**
     * @var string 转发规则ID
     */
    public $LocationId;

    /**
     * @var integer 目标组权重，范围[0, 100]。仅绑定v2目标组时生效，如果不存在，则默认为10。
     */
    public $Weight;

    /**
     * @param string $LoadBalancerId 负载均衡ID
     * @param string $TargetGroupId 目标组ID
     * @param string $ListenerId 监听器ID。访问AssociateTargetGroups和DisassociateTargetGroups接口时必传此参数。
     * @param string $LocationId 转发规则ID
     * @param integer $Weight 目标组权重，范围[0, 100]。仅绑定v2目标组时生效，如果不存在，则默认为10。
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
