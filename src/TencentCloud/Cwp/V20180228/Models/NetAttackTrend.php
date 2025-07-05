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
 * 攻击趋势统计数据
 *
 * @method string getDateTime() 获取时间点，如 2023-05-06
 * @method void setDateTime(string $DateTime) 设置时间点，如 2023-05-06
 * @method integer getAttackCount() 获取攻击次数
 * @method void setAttackCount(integer $AttackCount) 设置攻击次数
 * @method integer getTryAttackCount() 获取尝试攻击次数
 * @method void setTryAttackCount(integer $TryAttackCount) 设置尝试攻击次数
 * @method integer getSuccAttackCount() 获取攻击成功次数
 * @method void setSuccAttackCount(integer $SuccAttackCount) 设置攻击成功次数
 */
class NetAttackTrend extends AbstractModel
{
    /**
     * @var string 时间点，如 2023-05-06
     */
    public $DateTime;

    /**
     * @var integer 攻击次数
     */
    public $AttackCount;

    /**
     * @var integer 尝试攻击次数
     */
    public $TryAttackCount;

    /**
     * @var integer 攻击成功次数
     */
    public $SuccAttackCount;

    /**
     * @param string $DateTime 时间点，如 2023-05-06
     * @param integer $AttackCount 攻击次数
     * @param integer $TryAttackCount 尝试攻击次数
     * @param integer $SuccAttackCount 攻击成功次数
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
        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("TryAttackCount",$param) and $param["TryAttackCount"] !== null) {
            $this->TryAttackCount = $param["TryAttackCount"];
        }

        if (array_key_exists("SuccAttackCount",$param) and $param["SuccAttackCount"] !== null) {
            $this->SuccAttackCount = $param["SuccAttackCount"];
        }
    }
}
