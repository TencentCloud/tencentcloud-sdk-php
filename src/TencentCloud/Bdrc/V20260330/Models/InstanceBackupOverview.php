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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 整机备份（CVM 备份组）概览数据
 *
 * @method integer getBackupCount() 获取整机备份点总数
 * @method void setBackupCount(integer $BackupCount) 设置整机备份点总数
 * @method integer getCreatingBackupCount() 获取创建中数量
 * @method void setCreatingBackupCount(integer $CreatingBackupCount) 设置创建中数量
 * @method integer getFailedBackupCount() 获取失败数量
 * @method void setFailedBackupCount(integer $FailedBackupCount) 设置失败数量
 * @method integer getSuccessBackupCount() 获取已完成数量
 * @method void setSuccessBackupCount(integer $SuccessBackupCount) 设置已完成数量
 * @method integer getRestoringBackupCount() 获取恢复中的总数量
 * @method void setRestoringBackupCount(integer $RestoringBackupCount) 设置恢复中的总数量
 * @method integer getBackupSizeMb() 获取整机备份总容量
 * @method void setBackupSizeMb(integer $BackupSizeMb) 设置整机备份总容量
 * @method integer getBackupResourceCount() 获取受保护 CVM 资源数
 * @method void setBackupResourceCount(integer $BackupResourceCount) 设置受保护 CVM 资源数
 */
class InstanceBackupOverview extends AbstractModel
{
    /**
     * @var integer 整机备份点总数
     */
    public $BackupCount;

    /**
     * @var integer 创建中数量
     */
    public $CreatingBackupCount;

    /**
     * @var integer 失败数量
     */
    public $FailedBackupCount;

    /**
     * @var integer 已完成数量
     */
    public $SuccessBackupCount;

    /**
     * @var integer 恢复中的总数量
     */
    public $RestoringBackupCount;

    /**
     * @var integer 整机备份总容量
     */
    public $BackupSizeMb;

    /**
     * @var integer 受保护 CVM 资源数
     */
    public $BackupResourceCount;

    /**
     * @param integer $BackupCount 整机备份点总数
     * @param integer $CreatingBackupCount 创建中数量
     * @param integer $FailedBackupCount 失败数量
     * @param integer $SuccessBackupCount 已完成数量
     * @param integer $RestoringBackupCount 恢复中的总数量
     * @param integer $BackupSizeMb 整机备份总容量
     * @param integer $BackupResourceCount 受保护 CVM 资源数
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
        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }

        if (array_key_exists("CreatingBackupCount",$param) and $param["CreatingBackupCount"] !== null) {
            $this->CreatingBackupCount = $param["CreatingBackupCount"];
        }

        if (array_key_exists("FailedBackupCount",$param) and $param["FailedBackupCount"] !== null) {
            $this->FailedBackupCount = $param["FailedBackupCount"];
        }

        if (array_key_exists("SuccessBackupCount",$param) and $param["SuccessBackupCount"] !== null) {
            $this->SuccessBackupCount = $param["SuccessBackupCount"];
        }

        if (array_key_exists("RestoringBackupCount",$param) and $param["RestoringBackupCount"] !== null) {
            $this->RestoringBackupCount = $param["RestoringBackupCount"];
        }

        if (array_key_exists("BackupSizeMb",$param) and $param["BackupSizeMb"] !== null) {
            $this->BackupSizeMb = $param["BackupSizeMb"];
        }

        if (array_key_exists("BackupResourceCount",$param) and $param["BackupResourceCount"] !== null) {
            $this->BackupResourceCount = $param["BackupResourceCount"];
        }
    }
}
