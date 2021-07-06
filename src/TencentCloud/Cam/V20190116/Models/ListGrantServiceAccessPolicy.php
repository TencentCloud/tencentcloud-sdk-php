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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于ListPoliciesGrantingServiceAccess接口的Policy节点
 *
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method string getPolicyName() 获取策略名
 * @method void setPolicyName(string $PolicyName) 设置策略名
 * @method string getPolicyType() 获取策略类型: Custom自定义策略，Presetting预设策略
 * @method void setPolicyType(string $PolicyType) 设置策略类型: Custom自定义策略，Presetting预设策略
 * @method string getPolicyDescription() 获取策略描述
 * @method void setPolicyDescription(string $PolicyDescription) 设置策略描述
 */
class ListGrantServiceAccessPolicy extends AbstractModel
{
    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var string 策略名
     */
    public $PolicyName;

    /**
     * @var string 策略类型: Custom自定义策略，Presetting预设策略
     */
    public $PolicyType;

    /**
     * @var string 策略描述
     */
    public $PolicyDescription;

    /**
     * @param string $PolicyId 策略ID
     * @param string $PolicyName 策略名
     * @param string $PolicyType 策略类型: Custom自定义策略，Presetting预设策略
     * @param string $PolicyDescription 策略描述
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }
    }
}
