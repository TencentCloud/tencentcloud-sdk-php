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
 * CreateRansomDefenseStrategy请求参数结构体
 *
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method string getHour() 获取定时快照执行时间（0-23）：01:00;23:00
 * @method void setHour(string $Hour) 设置定时快照执行时间（0-23）：01:00;23:00
 * @method integer getId() 获取策略ID，填ID时修改策略，否则新增策略
 * @method void setId(integer $Id) 设置策略ID，填ID时修改策略，否则新增策略
 * @method string getDescription() 获取策略备注
 * @method void setDescription(string $Description) 设置策略备注
 * @method integer getStatus() 获取是否开启：0关，1开
 * @method void setStatus(integer $Status) 设置是否开启：0关，1开
 * @method integer getIsAll() 获取是否全部机器生效：0否，1是
 * @method void setIsAll(integer $IsAll) 设置是否全部机器生效：0否，1是
 * @method string getIncludeDir() 获取包含目录，;分隔
 * @method void setIncludeDir(string $IncludeDir) 设置包含目录，;分隔
 * @method string getExcludeDir() 获取排除目录，;分隔
 * @method void setExcludeDir(string $ExcludeDir) 设置排除目录，;分隔
 * @method integer getBackupType() 获取备份模式： 0按周，1按天，2不备份
 * @method void setBackupType(integer $BackupType) 设置备份模式： 0按周，1按天，2不备份
 * @method string getWeekday() 获取定时任务执行星期天数（1-7）：1;2;7
 * @method void setWeekday(string $Weekday) 设置定时任务执行星期天数（1-7）：1;2;7
 * @method integer getSaveDay() 获取保留天数：0永久
 * @method void setSaveDay(integer $SaveDay) 设置保留天数：0永久
 * @method array getMachines() 获取绑定主机列表
 * @method void setMachines(array $Machines) 设置绑定主机列表
 */
class CreateRansomDefenseStrategyRequest extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var string 定时快照执行时间（0-23）：01:00;23:00
     */
    public $Hour;

    /**
     * @var integer 策略ID，填ID时修改策略，否则新增策略
     */
    public $Id;

    /**
     * @var string 策略备注
     */
    public $Description;

    /**
     * @var integer 是否开启：0关，1开
     */
    public $Status;

    /**
     * @var integer 是否全部机器生效：0否，1是
     */
    public $IsAll;

    /**
     * @var string 包含目录，;分隔
     */
    public $IncludeDir;

    /**
     * @var string 排除目录，;分隔
     */
    public $ExcludeDir;

    /**
     * @var integer 备份模式： 0按周，1按天，2不备份
     */
    public $BackupType;

    /**
     * @var string 定时任务执行星期天数（1-7）：1;2;7
     */
    public $Weekday;

    /**
     * @var integer 保留天数：0永久
     */
    public $SaveDay;

    /**
     * @var array 绑定主机列表
     */
    public $Machines;

    /**
     * @param string $Name 策略名称
     * @param string $Hour 定时快照执行时间（0-23）：01:00;23:00
     * @param integer $Id 策略ID，填ID时修改策略，否则新增策略
     * @param string $Description 策略备注
     * @param integer $Status 是否开启：0关，1开
     * @param integer $IsAll 是否全部机器生效：0否，1是
     * @param string $IncludeDir 包含目录，;分隔
     * @param string $ExcludeDir 排除目录，;分隔
     * @param integer $BackupType 备份模式： 0按周，1按天，2不备份
     * @param string $Weekday 定时任务执行星期天数（1-7）：1;2;7
     * @param integer $SaveDay 保留天数：0永久
     * @param array $Machines 绑定主机列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("IncludeDir",$param) and $param["IncludeDir"] !== null) {
            $this->IncludeDir = $param["IncludeDir"];
        }

        if (array_key_exists("ExcludeDir",$param) and $param["ExcludeDir"] !== null) {
            $this->ExcludeDir = $param["ExcludeDir"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("Weekday",$param) and $param["Weekday"] !== null) {
            $this->Weekday = $param["Weekday"];
        }

        if (array_key_exists("SaveDay",$param) and $param["SaveDay"] !== null) {
            $this->SaveDay = $param["SaveDay"];
        }

        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new RansomDefenseStrategyMachineInfo();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }
    }
}
