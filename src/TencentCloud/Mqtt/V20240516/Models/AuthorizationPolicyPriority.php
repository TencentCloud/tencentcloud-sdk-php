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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略规则优先级
 *
 * @method integer getId() 获取授权策略规则id，可以从 [DescribeAuthorizationPolicies](https://cloud.tencent.com/document/api/1778/111074)接口获得。
 * @method void setId(integer $Id) 设置授权策略规则id，可以从 [DescribeAuthorizationPolicies](https://cloud.tencent.com/document/api/1778/111074)接口获得。
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 */
class AuthorizationPolicyPriority extends AbstractModel
{
    /**
     * @var integer 授权策略规则id，可以从 [DescribeAuthorizationPolicies](https://cloud.tencent.com/document/api/1778/111074)接口获得。
     */
    public $Id;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @param integer $Id 授权策略规则id，可以从 [DescribeAuthorizationPolicies](https://cloud.tencent.com/document/api/1778/111074)接口获得。
     * @param integer $Priority 优先级
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
