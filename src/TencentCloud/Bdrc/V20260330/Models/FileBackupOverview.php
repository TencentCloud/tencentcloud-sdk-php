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
 * 文件备份概览数据
 *
 * @method integer getBackupCount() 获取<p>备份点总数</p>
 * @method void setBackupCount(integer $BackupCount) 设置<p>备份点总数</p>
 * @method integer getCreatingBackupCount() 获取<p>创建中数量</p>
 * @method void setCreatingBackupCount(integer $CreatingBackupCount) 设置<p>创建中数量</p>
 * @method integer getFailedBackupCount() 获取<p>失败数量</p>
 * @method void setFailedBackupCount(integer $FailedBackupCount) 设置<p>失败数量</p>
 * @method integer getSuccessBackupCount() 获取<p>已完成数量</p>
 * @method void setSuccessBackupCount(integer $SuccessBackupCount) 设置<p>已完成数量</p>
 * @method integer getRestoringBackupCount() 获取<p>恢复中的总数量</p>
 * @method void setRestoringBackupCount(integer $RestoringBackupCount) 设置<p>恢复中的总数量</p>
 * @method integer getBackupSizeMb() 获取<p>备份总容量</p>
 * @method void setBackupSizeMb(integer $BackupSizeMb) 设置<p>备份总容量</p>
 * @method integer getBackupResourceCount() 获取<p>受保护资源数</p>
 * @method void setBackupResourceCount(integer $BackupResourceCount) 设置<p>受保护资源数</p>
 */
class FileBackupOverview extends AbstractModel
{
    /**
     * @var integer <p>备份点总数</p>
     */
    public $BackupCount;

    /**
     * @var integer <p>创建中数量</p>
     */
    public $CreatingBackupCount;

    /**
     * @var integer <p>失败数量</p>
     */
    public $FailedBackupCount;

    /**
     * @var integer <p>已完成数量</p>
     */
    public $SuccessBackupCount;

    /**
     * @var integer <p>恢复中的总数量</p>
     */
    public $RestoringBackupCount;

    /**
     * @var integer <p>备份总容量</p>
     */
    public $BackupSizeMb;

    /**
     * @var integer <p>受保护资源数</p>
     */
    public $BackupResourceCount;

    /**
     * @param integer $BackupCount <p>备份点总数</p>
     * @param integer $CreatingBackupCount <p>创建中数量</p>
     * @param integer $FailedBackupCount <p>失败数量</p>
     * @param integer $SuccessBackupCount <p>已完成数量</p>
     * @param integer $RestoringBackupCount <p>恢复中的总数量</p>
     * @param integer $BackupSizeMb <p>备份总容量</p>
     * @param integer $BackupResourceCount <p>受保护资源数</p>
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
