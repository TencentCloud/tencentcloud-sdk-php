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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCoolDownPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method string getCoolDownTtl() 获取cooldown_ttl
 * @method void setCoolDownTtl(string $CoolDownTtl) 设置cooldown_ttl
 * @method string getCoolDownDatetime() 获取cooldown_datetime
 * @method void setCoolDownDatetime(string $CoolDownDatetime) 设置cooldown_datetime
 */
class ModifyCoolDownPolicyRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var string cooldown_ttl
     */
    public $CoolDownTtl;

    /**
     * @var string cooldown_datetime
     */
    public $CoolDownDatetime;

    /**
     * @param string $InstanceId 集群id
     * @param string $PolicyName 策略名称
     * @param string $CoolDownTtl cooldown_ttl
     * @param string $CoolDownDatetime cooldown_datetime
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CoolDownTtl",$param) and $param["CoolDownTtl"] !== null) {
            $this->CoolDownTtl = $param["CoolDownTtl"];
        }

        if (array_key_exists("CoolDownDatetime",$param) and $param["CoolDownDatetime"] !== null) {
            $this->CoolDownDatetime = $param["CoolDownDatetime"];
        }
    }
}
