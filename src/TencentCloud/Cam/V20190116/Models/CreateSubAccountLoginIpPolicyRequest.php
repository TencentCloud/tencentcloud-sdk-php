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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubAccountLoginIpPolicy请求参数结构体
 *
 * @method array getIpPolicies() 获取IP策略集合
 * @method void setIpPolicies(array $IpPolicies) 设置IP策略集合
 * @method string getApproverType() 获取审批人类型，目前支持的类型有：SubAccountLoginLimitApproval（子账号登录限制审批）
 * @method void setApproverType(string $ApproverType) 设置审批人类型，目前支持的类型有：SubAccountLoginLimitApproval（子账号登录限制审批）
 * @method array getApproverUin() 获取被添加为协助审批人的账号ID数组
 * @method void setApproverUin(array $ApproverUin) 设置被添加为协助审批人的账号ID数组
 * @method integer getDisablePolicy() 获取是否禁用策略：0：不禁用，1：禁用
 * @method void setDisablePolicy(integer $DisablePolicy) 设置是否禁用策略：0：不禁用，1：禁用
 * @method integer getPolicyType() 获取策略类型：1：更新IP策略，2：设置异地登录校验校验规则
 * @method void setPolicyType(integer $PolicyType) 设置策略类型：1：更新IP策略，2：设置异地登录校验校验规则
 */
class CreateSubAccountLoginIpPolicyRequest extends AbstractModel
{
    /**
     * @var array IP策略集合
     */
    public $IpPolicies;

    /**
     * @var string 审批人类型，目前支持的类型有：SubAccountLoginLimitApproval（子账号登录限制审批）
     */
    public $ApproverType;

    /**
     * @var array 被添加为协助审批人的账号ID数组
     */
    public $ApproverUin;

    /**
     * @var integer 是否禁用策略：0：不禁用，1：禁用
     */
    public $DisablePolicy;

    /**
     * @var integer 策略类型：1：更新IP策略，2：设置异地登录校验校验规则
     */
    public $PolicyType;

    /**
     * @param array $IpPolicies IP策略集合
     * @param string $ApproverType 审批人类型，目前支持的类型有：SubAccountLoginLimitApproval（子账号登录限制审批）
     * @param array $ApproverUin 被添加为协助审批人的账号ID数组
     * @param integer $DisablePolicy 是否禁用策略：0：不禁用，1：禁用
     * @param integer $PolicyType 策略类型：1：更新IP策略，2：设置异地登录校验校验规则
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
        if (array_key_exists("IpPolicies",$param) and $param["IpPolicies"] !== null) {
            $this->IpPolicies = [];
            foreach ($param["IpPolicies"] as $key => $value){
                $obj = new IpPolicy();
                $obj->deserialize($value);
                array_push($this->IpPolicies, $obj);
            }
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ApproverUin",$param) and $param["ApproverUin"] !== null) {
            $this->ApproverUin = $param["ApproverUin"];
        }

        if (array_key_exists("DisablePolicy",$param) and $param["DisablePolicy"] !== null) {
            $this->DisablePolicy = $param["DisablePolicy"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
