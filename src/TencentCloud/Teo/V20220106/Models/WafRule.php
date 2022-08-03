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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Waf规则
 *
 * @method array getBlockRuleIDs() 获取黑名单，ID参考接口 DescribeSecurityPolicyManagedRules
 * @method void setBlockRuleIDs(array $BlockRuleIDs) 设置黑名单，ID参考接口 DescribeSecurityPolicyManagedRules
 * @method string getSwitch() 获取托管规则 开关
 * @method void setSwitch(string $Switch) 设置托管规则 开关
 * @method array getObserveRuleIDs() 获取观察模式，ID参考接口 DescribeSecurityPolicyManagedRules
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObserveRuleIDs(array $ObserveRuleIDs) 设置观察模式，ID参考接口 DescribeSecurityPolicyManagedRules
注意：此字段可能返回 null，表示取不到有效值。
 */
class WafRule extends AbstractModel
{
    /**
     * @var array 黑名单，ID参考接口 DescribeSecurityPolicyManagedRules
     */
    public $BlockRuleIDs;

    /**
     * @var string 托管规则 开关
     */
    public $Switch;

    /**
     * @var array 观察模式，ID参考接口 DescribeSecurityPolicyManagedRules
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObserveRuleIDs;

    /**
     * @param array $BlockRuleIDs 黑名单，ID参考接口 DescribeSecurityPolicyManagedRules
     * @param string $Switch 托管规则 开关
     * @param array $ObserveRuleIDs 观察模式，ID参考接口 DescribeSecurityPolicyManagedRules
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("BlockRuleIDs",$param) and $param["BlockRuleIDs"] !== null) {
            $this->BlockRuleIDs = $param["BlockRuleIDs"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ObserveRuleIDs",$param) and $param["ObserveRuleIDs"] !== null) {
            $this->ObserveRuleIDs = $param["ObserveRuleIDs"];
        }
    }
}
