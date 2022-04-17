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
 * Waf 攻击自动封禁详情
 *
 * @method array getAttackTags() 获取攻击封禁类型标签
 * @method void setAttackTags(array $AttackTags) 设置攻击封禁类型标签
 * @method integer getAttackThreshold() 获取攻击次数阈值
 * @method void setAttackThreshold(integer $AttackThreshold) 设置攻击次数阈值
 * @method integer getDefenseStatus() 获取自动封禁状态
 * @method void setDefenseStatus(integer $DefenseStatus) 设置自动封禁状态
 * @method integer getTimeThreshold() 获取攻击时间阈值
 * @method void setTimeThreshold(integer $TimeThreshold) 设置攻击时间阈值
 * @method integer getDenyTimeThreshold() 获取自动封禁时间
 * @method void setDenyTimeThreshold(integer $DenyTimeThreshold) 设置自动封禁时间
 * @method string getLastUpdateTime() 获取最后更新时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新时间
 */
class AutoDenyDetail extends AbstractModel
{
    /**
     * @var array 攻击封禁类型标签
     */
    public $AttackTags;

    /**
     * @var integer 攻击次数阈值
     */
    public $AttackThreshold;

    /**
     * @var integer 自动封禁状态
     */
    public $DefenseStatus;

    /**
     * @var integer 攻击时间阈值
     */
    public $TimeThreshold;

    /**
     * @var integer 自动封禁时间
     */
    public $DenyTimeThreshold;

    /**
     * @var string 最后更新时间
     */
    public $LastUpdateTime;

    /**
     * @param array $AttackTags 攻击封禁类型标签
     * @param integer $AttackThreshold 攻击次数阈值
     * @param integer $DefenseStatus 自动封禁状态
     * @param integer $TimeThreshold 攻击时间阈值
     * @param integer $DenyTimeThreshold 自动封禁时间
     * @param string $LastUpdateTime 最后更新时间
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
        if (array_key_exists("AttackTags",$param) and $param["AttackTags"] !== null) {
            $this->AttackTags = $param["AttackTags"];
        }

        if (array_key_exists("AttackThreshold",$param) and $param["AttackThreshold"] !== null) {
            $this->AttackThreshold = $param["AttackThreshold"];
        }

        if (array_key_exists("DefenseStatus",$param) and $param["DefenseStatus"] !== null) {
            $this->DefenseStatus = $param["DefenseStatus"];
        }

        if (array_key_exists("TimeThreshold",$param) and $param["TimeThreshold"] !== null) {
            $this->TimeThreshold = $param["TimeThreshold"];
        }

        if (array_key_exists("DenyTimeThreshold",$param) and $param["DenyTimeThreshold"] !== null) {
            $this->DenyTimeThreshold = $param["DenyTimeThreshold"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
