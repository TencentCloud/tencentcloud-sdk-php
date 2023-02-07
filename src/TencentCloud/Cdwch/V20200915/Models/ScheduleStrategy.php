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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略详情
 *
 * @method string getCosBucketName() 获取备份桶列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketName(string $CosBucketName) 设置备份桶列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetainDays() 获取备份保留天数
 * @method void setRetainDays(integer $RetainDays) 设置备份保留天数
 * @method string getWeekDays() 获取备份的天
 * @method void setWeekDays(string $WeekDays) 设置备份的天
 * @method integer getExecuteHour() 获取备份小时
 * @method void setExecuteHour(integer $ExecuteHour) 设置备份小时
 * @method integer getScheduleId() 获取策略id
 * @method void setScheduleId(integer $ScheduleId) 设置策略id
 */
class ScheduleStrategy extends AbstractModel
{
    /**
     * @var string 备份桶列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketName;

    /**
     * @var integer 备份保留天数
     */
    public $RetainDays;

    /**
     * @var string 备份的天
     */
    public $WeekDays;

    /**
     * @var integer 备份小时
     */
    public $ExecuteHour;

    /**
     * @var integer 策略id
     */
    public $ScheduleId;

    /**
     * @param string $CosBucketName 备份桶列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetainDays 备份保留天数
     * @param string $WeekDays 备份的天
     * @param integer $ExecuteHour 备份小时
     * @param integer $ScheduleId 策略id
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("RetainDays",$param) and $param["RetainDays"] !== null) {
            $this->RetainDays = $param["RetainDays"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ExecuteHour",$param) and $param["ExecuteHour"] !== null) {
            $this->ExecuteHour = $param["ExecuteHour"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }
    }
}
