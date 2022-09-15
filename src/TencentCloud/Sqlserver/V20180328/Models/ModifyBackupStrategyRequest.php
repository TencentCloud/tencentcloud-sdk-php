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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getBackupType() 获取备份类型，当length(BackupDay) <=7 && length(BackupDay) >=2时，取值为weekly，当length(BackupDay)=1时，取值daily，默认daily
 * @method void setBackupType(string $BackupType) 设置备份类型，当length(BackupDay) <=7 && length(BackupDay) >=2时，取值为weekly，当length(BackupDay)=1时，取值daily，默认daily
 * @method integer getBackupTime() 获取备份时间点，取值为0-23的整数
 * @method void setBackupTime(integer $BackupTime) 设置备份时间点，取值为0-23的整数
 * @method integer getBackupDay() 获取BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
 * @method void setBackupDay(integer $BackupDay) 设置BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
 * @method string getBackupModel() 获取备份模式，master_pkg-主节点上打包备份文件；master_no_pkg-主节点单库备份文件；slave_pkg-从节点上打包备份文件；slave_no_pkg-从节点上单库备份文件，从节点上备份只有在always on容灾模式下支持。
 * @method void setBackupModel(string $BackupModel) 设置备份模式，master_pkg-主节点上打包备份文件；master_no_pkg-主节点单库备份文件；slave_pkg-从节点上打包备份文件；slave_no_pkg-从节点上单库备份文件，从节点上备份只有在always on容灾模式下支持。
 * @method array getBackupCycle() 获取BackupType取值为weekly时，表示每周的星期N做备份。（如果数据备份保留时间<7天，则取值[1,2,3,4,5,6,7]。如果数据备份保留时间>=7天，则备份周期取值至少是一周的任意2天）
 * @method void setBackupCycle(array $BackupCycle) 设置BackupType取值为weekly时，表示每周的星期N做备份。（如果数据备份保留时间<7天，则取值[1,2,3,4,5,6,7]。如果数据备份保留时间>=7天，则备份周期取值至少是一周的任意2天）
 * @method integer getBackupSaveDays() 获取数据(日志)备份保留时间，取值[3-1830]天，默认7天
 * @method void setBackupSaveDays(integer $BackupSaveDays) 设置数据(日志)备份保留时间，取值[3-1830]天，默认7天
 */
class ModifyBackupStrategyRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 备份类型，当length(BackupDay) <=7 && length(BackupDay) >=2时，取值为weekly，当length(BackupDay)=1时，取值daily，默认daily
     */
    public $BackupType;

    /**
     * @var integer 备份时间点，取值为0-23的整数
     */
    public $BackupTime;

    /**
     * @var integer BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
     */
    public $BackupDay;

    /**
     * @var string 备份模式，master_pkg-主节点上打包备份文件；master_no_pkg-主节点单库备份文件；slave_pkg-从节点上打包备份文件；slave_no_pkg-从节点上单库备份文件，从节点上备份只有在always on容灾模式下支持。
     */
    public $BackupModel;

    /**
     * @var array BackupType取值为weekly时，表示每周的星期N做备份。（如果数据备份保留时间<7天，则取值[1,2,3,4,5,6,7]。如果数据备份保留时间>=7天，则备份周期取值至少是一周的任意2天）
     */
    public $BackupCycle;

    /**
     * @var integer 数据(日志)备份保留时间，取值[3-1830]天，默认7天
     */
    public $BackupSaveDays;

    /**
     * @param string $InstanceId 实例ID
     * @param string $BackupType 备份类型，当length(BackupDay) <=7 && length(BackupDay) >=2时，取值为weekly，当length(BackupDay)=1时，取值daily，默认daily
     * @param integer $BackupTime 备份时间点，取值为0-23的整数
     * @param integer $BackupDay BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
     * @param string $BackupModel 备份模式，master_pkg-主节点上打包备份文件；master_no_pkg-主节点单库备份文件；slave_pkg-从节点上打包备份文件；slave_no_pkg-从节点上单库备份文件，从节点上备份只有在always on容灾模式下支持。
     * @param array $BackupCycle BackupType取值为weekly时，表示每周的星期N做备份。（如果数据备份保留时间<7天，则取值[1,2,3,4,5,6,7]。如果数据备份保留时间>=7天，则备份周期取值至少是一周的任意2天）
     * @param integer $BackupSaveDays 数据(日志)备份保留时间，取值[3-1830]天，默认7天
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupDay",$param) and $param["BackupDay"] !== null) {
            $this->BackupDay = $param["BackupDay"];
        }

        if (array_key_exists("BackupModel",$param) and $param["BackupModel"] !== null) {
            $this->BackupModel = $param["BackupModel"];
        }

        if (array_key_exists("BackupCycle",$param) and $param["BackupCycle"] !== null) {
            $this->BackupCycle = $param["BackupCycle"];
        }

        if (array_key_exists("BackupSaveDays",$param) and $param["BackupSaveDays"] !== null) {
            $this->BackupSaveDays = $param["BackupSaveDays"];
        }
    }
}
