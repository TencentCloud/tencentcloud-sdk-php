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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度信息
 *
 * @method string getEffectivePeriod() 获取生效周期
 * @method void setEffectivePeriod(string $EffectivePeriod) 设置生效周期
 * @method string getScheduleType() 获取调度类型，不传该参数时为立即执行：
Day-天
Week-周
Month-月
Once-单次

 * @method void setScheduleType(string $ScheduleType) 设置调度类型，不传该参数时为立即执行：
Day-天
Week-周
Month-月
Once-单次

 * @method string getScheduleData() 获取执行调度的日期。调度类型为周和月时以英文逗号分隔；
调度类型为单次时，该值是个日期
 * @method void setScheduleData(string $ScheduleData) 设置执行调度的日期。调度类型为周和月时以英文逗号分隔；
调度类型为单次时，该值是个日期
 * @method integer getScheduleHour() 获取执行时间：时
 * @method void setScheduleHour(integer $ScheduleHour) 设置执行时间：时
 * @method integer getScheduleMin() 获取执行时间：分
 * @method void setScheduleMin(integer $ScheduleMin) 设置执行时间：分
 * @method string getBackupScope() 获取备份粒度：
All-全量
Database-按库
Table-按表
 * @method void setBackupScope(string $BackupScope) 设置备份粒度：
All-全量
Database-按库
Table-按表
 * @method string getBackupDatabase() 获取备份库：如果是按库备份，则需要该字段，库之间用英文逗号分割
 * @method void setBackupDatabase(string $BackupDatabase) 设置备份库：如果是按库备份，则需要该字段，库之间用英文逗号分割
 */
class ScheduleInfo extends AbstractModel
{
    /**
     * @var string 生效周期
     */
    public $EffectivePeriod;

    /**
     * @var string 调度类型，不传该参数时为立即执行：
Day-天
Week-周
Month-月
Once-单次

     */
    public $ScheduleType;

    /**
     * @var string 执行调度的日期。调度类型为周和月时以英文逗号分隔；
调度类型为单次时，该值是个日期
     */
    public $ScheduleData;

    /**
     * @var integer 执行时间：时
     */
    public $ScheduleHour;

    /**
     * @var integer 执行时间：分
     */
    public $ScheduleMin;

    /**
     * @var string 备份粒度：
All-全量
Database-按库
Table-按表
     */
    public $BackupScope;

    /**
     * @var string 备份库：如果是按库备份，则需要该字段，库之间用英文逗号分割
     */
    public $BackupDatabase;

    /**
     * @param string $EffectivePeriod 生效周期
     * @param string $ScheduleType 调度类型，不传该参数时为立即执行：
Day-天
Week-周
Month-月
Once-单次

     * @param string $ScheduleData 执行调度的日期。调度类型为周和月时以英文逗号分隔；
调度类型为单次时，该值是个日期
     * @param integer $ScheduleHour 执行时间：时
     * @param integer $ScheduleMin 执行时间：分
     * @param string $BackupScope 备份粒度：
All-全量
Database-按库
Table-按表
     * @param string $BackupDatabase 备份库：如果是按库备份，则需要该字段，库之间用英文逗号分割
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
        if (array_key_exists("EffectivePeriod",$param) and $param["EffectivePeriod"] !== null) {
            $this->EffectivePeriod = $param["EffectivePeriod"];
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("ScheduleData",$param) and $param["ScheduleData"] !== null) {
            $this->ScheduleData = $param["ScheduleData"];
        }

        if (array_key_exists("ScheduleHour",$param) and $param["ScheduleHour"] !== null) {
            $this->ScheduleHour = $param["ScheduleHour"];
        }

        if (array_key_exists("ScheduleMin",$param) and $param["ScheduleMin"] !== null) {
            $this->ScheduleMin = $param["ScheduleMin"];
        }

        if (array_key_exists("BackupScope",$param) and $param["BackupScope"] !== null) {
            $this->BackupScope = $param["BackupScope"];
        }

        if (array_key_exists("BackupDatabase",$param) and $param["BackupDatabase"] !== null) {
            $this->BackupDatabase = $param["BackupDatabase"];
        }
    }
}
