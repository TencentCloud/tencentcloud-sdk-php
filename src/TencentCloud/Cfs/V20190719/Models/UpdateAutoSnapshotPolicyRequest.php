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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAutoSnapshotPolicy请求参数结构体
 *
 * @method string getAutoSnapshotPolicyId() 获取快照策略ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置快照策略ID
 * @method string getPolicyName() 获取快照策略名称
 * @method void setPolicyName(string $PolicyName) 设置快照策略名称
 * @method string getDayOfWeek() 获取快照定期备份在一星期哪一天
 * @method void setDayOfWeek(string $DayOfWeek) 设置快照定期备份在一星期哪一天
 * @method string getHour() 获取快照定期备份在一天的哪一小时
 * @method void setHour(string $Hour) 设置快照定期备份在一天的哪一小时
 * @method integer getAliveDays() 获取快照保留日期
 * @method void setAliveDays(integer $AliveDays) 设置快照保留日期
 * @method integer getIsActivated() 获取是否激活定期快照功能
 * @method void setIsActivated(integer $IsActivated) 设置是否激活定期快照功能
 * @method string getDayOfMonth() 获取定期快照在每月的第几天创建快照，该参数与DayOfWeek互斥
 * @method void setDayOfMonth(string $DayOfMonth) 设置定期快照在每月的第几天创建快照，该参数与DayOfWeek互斥
 * @method integer getIntervalDays() 获取间隔天数定期执行快照，该参数与DayOfWeek,DayOfMonth 互斥
 * @method void setIntervalDays(integer $IntervalDays) 设置间隔天数定期执行快照，该参数与DayOfWeek,DayOfMonth 互斥
 */
class UpdateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string 快照策略ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string 快照策略名称
     */
    public $PolicyName;

    /**
     * @var string 快照定期备份在一星期哪一天
     */
    public $DayOfWeek;

    /**
     * @var string 快照定期备份在一天的哪一小时
     */
    public $Hour;

    /**
     * @var integer 快照保留日期
     */
    public $AliveDays;

    /**
     * @var integer 是否激活定期快照功能
     */
    public $IsActivated;

    /**
     * @var string 定期快照在每月的第几天创建快照，该参数与DayOfWeek互斥
     */
    public $DayOfMonth;

    /**
     * @var integer 间隔天数定期执行快照，该参数与DayOfWeek,DayOfMonth 互斥
     */
    public $IntervalDays;

    /**
     * @param string $AutoSnapshotPolicyId 快照策略ID
     * @param string $PolicyName 快照策略名称
     * @param string $DayOfWeek 快照定期备份在一星期哪一天
     * @param string $Hour 快照定期备份在一天的哪一小时
     * @param integer $AliveDays 快照保留日期
     * @param integer $IsActivated 是否激活定期快照功能
     * @param string $DayOfMonth 定期快照在每月的第几天创建快照，该参数与DayOfWeek互斥
     * @param integer $IntervalDays 间隔天数定期执行快照，该参数与DayOfWeek,DayOfMonth 互斥
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}
