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
 * 主机列表查询接口相应数据HostList的TagList节点
 *
 * @method integer getId() 获取策略id
 * @method void setId(integer $Id) 设置策略id
 * @method string getUin() 获取操作uin
 * @method void setUin(string $Uin) 设置操作uin
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method string getDescription() 获取策略备注
 * @method void setDescription(string $Description) 设置策略备注
 * @method integer getStatus() 获取开启状态：0关闭，1开启
 * @method void setStatus(integer $Status) 设置开启状态：0关闭，1开启
 * @method integer getIsAll() 获取是否对所有主机生效
 * @method void setIsAll(integer $IsAll) 设置是否对所有主机生效
 * @method string getIncludeDir() 获取包含目录，用;分隔
 * @method void setIncludeDir(string $IncludeDir) 设置包含目录，用;分隔
 * @method string getExcludeDir() 获取包含目录，用;分隔
 * @method void setExcludeDir(string $ExcludeDir) 设置包含目录，用;分隔
 * @method integer getBackupType() 获取备份模式： 0按周，1按天，2不备份
 * @method void setBackupType(integer $BackupType) 设置备份模式： 0按周，1按天，2不备份
 * @method string getWeekday() 获取备份星期天数（1-7）：1;2;3;4
 * @method void setWeekday(string $Weekday) 设置备份星期天数（1-7）：1;2;3;4
 * @method string getHour() 获取备份执行时间点(0-23): 11:00;12:00
 * @method void setHour(string $Hour) 设置备份执行时间点(0-23): 11:00;12:00
 * @method integer getSaveDay() 获取保存天数，0永久保存
 * @method void setSaveDay(integer $SaveDay) 设置保存天数，0永久保存
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取最近修改时间
 * @method void setModifyTime(string $ModifyTime) 设置最近修改时间
 * @method integer getMachineCount() 获取绑定机器数
 * @method void setMachineCount(integer $MachineCount) 设置绑定机器数
 */
class RansomDefenseStrategy extends AbstractModel
{
    /**
     * @var integer 策略id
     */
    public $Id;

    /**
     * @var string 操作uin
     */
    public $Uin;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var string 策略备注
     */
    public $Description;

    /**
     * @var integer 开启状态：0关闭，1开启
     */
    public $Status;

    /**
     * @var integer 是否对所有主机生效
     */
    public $IsAll;

    /**
     * @var string 包含目录，用;分隔
     */
    public $IncludeDir;

    /**
     * @var string 包含目录，用;分隔
     */
    public $ExcludeDir;

    /**
     * @var integer 备份模式： 0按周，1按天，2不备份
     */
    public $BackupType;

    /**
     * @var string 备份星期天数（1-7）：1;2;3;4
     */
    public $Weekday;

    /**
     * @var string 备份执行时间点(0-23): 11:00;12:00
     */
    public $Hour;

    /**
     * @var integer 保存天数，0永久保存
     */
    public $SaveDay;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 绑定机器数
     */
    public $MachineCount;

    /**
     * @param integer $Id 策略id
     * @param string $Uin 操作uin
     * @param string $Name 策略名称
     * @param string $Description 策略备注
     * @param integer $Status 开启状态：0关闭，1开启
     * @param integer $IsAll 是否对所有主机生效
     * @param string $IncludeDir 包含目录，用;分隔
     * @param string $ExcludeDir 包含目录，用;分隔
     * @param integer $BackupType 备份模式： 0按周，1按天，2不备份
     * @param string $Weekday 备份星期天数（1-7）：1;2;3;4
     * @param string $Hour 备份执行时间点(0-23): 11:00;12:00
     * @param integer $SaveDay 保存天数，0永久保存
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 最近修改时间
     * @param integer $MachineCount 绑定机器数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("SaveDay",$param) and $param["SaveDay"] !== null) {
            $this->SaveDay = $param["SaveDay"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }
    }
}
