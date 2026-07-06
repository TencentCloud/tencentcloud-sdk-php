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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStrategy请求参数结构体
 *
 * @method string getStrategyId() 获取策略Id
 * @method void setStrategyId(string $StrategyId) 设置策略Id
 * @method array getReceiveAccount() 获取下发规则接收账号
 * @method void setReceiveAccount(array $ReceiveAccount) 设置下发规则接收账号
 * @method integer getSequence() 获取优先级
 * @method void setSequence(integer $Sequence) 设置优先级
 * @method string getGroupId() 获取规则组Id
 * @method void setGroupId(string $GroupId) 设置规则组Id
 * @method array getReceiveGroup() 获取下发规则接收账号组
 * @method void setReceiveGroup(array $ReceiveGroup) 设置下发规则接收账号组
 */
class ModifyStrategyRequest extends AbstractModel
{
    /**
     * @var string 策略Id
     */
    public $StrategyId;

    /**
     * @var array 下发规则接收账号
     */
    public $ReceiveAccount;

    /**
     * @var integer 优先级
     */
    public $Sequence;

    /**
     * @var string 规则组Id
     */
    public $GroupId;

    /**
     * @var array 下发规则接收账号组
     */
    public $ReceiveGroup;

    /**
     * @param string $StrategyId 策略Id
     * @param array $ReceiveAccount 下发规则接收账号
     * @param integer $Sequence 优先级
     * @param string $GroupId 规则组Id
     * @param array $ReceiveGroup 下发规则接收账号组
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("ReceiveAccount",$param) and $param["ReceiveAccount"] !== null) {
            $this->ReceiveAccount = $param["ReceiveAccount"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ReceiveGroup",$param) and $param["ReceiveGroup"] !== null) {
            $this->ReceiveGroup = $param["ReceiveGroup"];
        }
    }
}
