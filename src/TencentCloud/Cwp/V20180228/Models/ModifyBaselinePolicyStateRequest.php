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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBaselinePolicyState请求参数结构体
 *
 * @method integer getPolicyId() 获取策略Id
 * @method void setPolicyId(integer $PolicyId) 设置策略Id
 * @method integer getIsEnabled() 获取开启状态[1:开启|0:未开启]
 * @method void setIsEnabled(integer $IsEnabled) 设置开启状态[1:开启|0:未开启]
 */
class ModifyBaselinePolicyStateRequest extends AbstractModel
{
    /**
     * @var integer 策略Id
     */
    public $PolicyId;

    /**
     * @var integer 开启状态[1:开启|0:未开启]
     */
    public $IsEnabled;

    /**
     * @param integer $PolicyId 策略Id
     * @param integer $IsEnabled 开启状态[1:开启|0:未开启]
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

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }
    }
}
