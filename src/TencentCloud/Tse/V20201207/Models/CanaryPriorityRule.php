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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度规则 Priority - Rule
 *
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method CloudNativeAPIGatewayCanaryRule getCanaryRule() 获取灰度规则配置
 * @method void setCanaryRule(CloudNativeAPIGatewayCanaryRule $CanaryRule) 设置灰度规则配置
 */
class CanaryPriorityRule extends AbstractModel
{
    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var CloudNativeAPIGatewayCanaryRule 灰度规则配置
     */
    public $CanaryRule;

    /**
     * @param integer $Priority 优先级
     * @param CloudNativeAPIGatewayCanaryRule $CanaryRule 灰度规则配置
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
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CanaryRule",$param) and $param["CanaryRule"] !== null) {
            $this->CanaryRule = new CloudNativeAPIGatewayCanaryRule();
            $this->CanaryRule->deserialize($param["CanaryRule"]);
        }
    }
}
