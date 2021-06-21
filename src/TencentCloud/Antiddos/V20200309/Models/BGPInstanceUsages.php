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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高防包资产实例的使用信息统计
 *
 * @method integer getProtectCountUsage() 获取已使用的防护次数，单位次
 * @method void setProtectCountUsage(integer $ProtectCountUsage) 设置已使用的防护次数，单位次
 * @method integer getProtectIPNumberUsage() 获取已防护的IP数，单位个
 * @method void setProtectIPNumberUsage(integer $ProtectIPNumberUsage) 设置已防护的IP数，单位个
 * @method integer getLast7DayAttackCount() 获取最近7天的攻击次数，单位次
 * @method void setLast7DayAttackCount(integer $Last7DayAttackCount) 设置最近7天的攻击次数，单位次
 */
class BGPInstanceUsages extends AbstractModel
{
    /**
     * @var integer 已使用的防护次数，单位次
     */
    public $ProtectCountUsage;

    /**
     * @var integer 已防护的IP数，单位个
     */
    public $ProtectIPNumberUsage;

    /**
     * @var integer 最近7天的攻击次数，单位次
     */
    public $Last7DayAttackCount;

    /**
     * @param integer $ProtectCountUsage 已使用的防护次数，单位次
     * @param integer $ProtectIPNumberUsage 已防护的IP数，单位个
     * @param integer $Last7DayAttackCount 最近7天的攻击次数，单位次
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
        if (array_key_exists("ProtectCountUsage",$param) and $param["ProtectCountUsage"] !== null) {
            $this->ProtectCountUsage = $param["ProtectCountUsage"];
        }

        if (array_key_exists("ProtectIPNumberUsage",$param) and $param["ProtectIPNumberUsage"] !== null) {
            $this->ProtectIPNumberUsage = $param["ProtectIPNumberUsage"];
        }

        if (array_key_exists("Last7DayAttackCount",$param) and $param["Last7DayAttackCount"] !== null) {
            $this->Last7DayAttackCount = $param["Last7DayAttackCount"];
        }
    }
}
