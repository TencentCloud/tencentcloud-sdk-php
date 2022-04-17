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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWafAutoDenyRules返回参数结构体
 *
 * @method integer getAttackThreshold() 获取攻击次数阈值
 * @method void setAttackThreshold(integer $AttackThreshold) 设置攻击次数阈值
 * @method integer getTimeThreshold() 获取攻击时间阈值
 * @method void setTimeThreshold(integer $TimeThreshold) 设置攻击时间阈值
 * @method integer getDenyTimeThreshold() 获取自动封禁时间
 * @method void setDenyTimeThreshold(integer $DenyTimeThreshold) 设置自动封禁时间
 * @method integer getDefenseStatus() 获取自动封禁状态
 * @method void setDefenseStatus(integer $DefenseStatus) 设置自动封禁状态
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWafAutoDenyRulesResponse extends AbstractModel
{
    /**
     * @var integer 攻击次数阈值
     */
    public $AttackThreshold;

    /**
     * @var integer 攻击时间阈值
     */
    public $TimeThreshold;

    /**
     * @var integer 自动封禁时间
     */
    public $DenyTimeThreshold;

    /**
     * @var integer 自动封禁状态
     */
    public $DefenseStatus;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AttackThreshold 攻击次数阈值
     * @param integer $TimeThreshold 攻击时间阈值
     * @param integer $DenyTimeThreshold 自动封禁时间
     * @param integer $DefenseStatus 自动封禁状态
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AttackThreshold",$param) and $param["AttackThreshold"] !== null) {
            $this->AttackThreshold = $param["AttackThreshold"];
        }

        if (array_key_exists("TimeThreshold",$param) and $param["TimeThreshold"] !== null) {
            $this->TimeThreshold = $param["TimeThreshold"];
        }

        if (array_key_exists("DenyTimeThreshold",$param) and $param["DenyTimeThreshold"] !== null) {
            $this->DenyTimeThreshold = $param["DenyTimeThreshold"];
        }

        if (array_key_exists("DefenseStatus",$param) and $param["DefenseStatus"] !== null) {
            $this->DefenseStatus = $param["DefenseStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
