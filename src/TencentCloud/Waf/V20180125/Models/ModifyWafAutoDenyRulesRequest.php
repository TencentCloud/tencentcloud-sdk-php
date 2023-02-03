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
 * ModifyWafAutoDenyRules请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getAttackThreshold() 获取触发IP封禁的攻击次数阈值，范围为2~100次
 * @method void setAttackThreshold(integer $AttackThreshold) 设置触发IP封禁的攻击次数阈值，范围为2~100次
 * @method integer getTimeThreshold() 获取IP封禁统计时间，范围为1-60分钟
 * @method void setTimeThreshold(integer $TimeThreshold) 设置IP封禁统计时间，范围为1-60分钟
 * @method integer getDenyTimeThreshold() 获取触发IP封禁后的封禁时间，范围为5~360分钟
 * @method void setDenyTimeThreshold(integer $DenyTimeThreshold) 设置触发IP封禁后的封禁时间，范围为5~360分钟
 * @method integer getDefenseStatus() 获取自动封禁状态
 * @method void setDefenseStatus(integer $DefenseStatus) 设置自动封禁状态
 */
class ModifyWafAutoDenyRulesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 触发IP封禁的攻击次数阈值，范围为2~100次
     */
    public $AttackThreshold;

    /**
     * @var integer IP封禁统计时间，范围为1-60分钟
     */
    public $TimeThreshold;

    /**
     * @var integer 触发IP封禁后的封禁时间，范围为5~360分钟
     */
    public $DenyTimeThreshold;

    /**
     * @var integer 自动封禁状态
     */
    public $DefenseStatus;

    /**
     * @param string $Domain 域名
     * @param integer $AttackThreshold 触发IP封禁的攻击次数阈值，范围为2~100次
     * @param integer $TimeThreshold IP封禁统计时间，范围为1-60分钟
     * @param integer $DenyTimeThreshold 触发IP封禁后的封禁时间，范围为5~360分钟
     * @param integer $DefenseStatus 自动封禁状态
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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
    }
}
