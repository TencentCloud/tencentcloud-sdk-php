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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云硬盘备份点。
 *
 * @method string getDiskBackupId() 获取云硬盘备份点的ID。
 * @method void setDiskBackupId(string $DiskBackupId) 设置云硬盘备份点的ID。
 * @method string getDiskId() 获取云硬盘备份点关联的云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置云硬盘备份点关联的云硬盘ID。
 * @method integer getDiskSize() 获取云硬盘大小，单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小，单位GB。
 * @method string getDiskUsage() 获取云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
 * @method void setDiskUsage(string $DiskUsage) 设置云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
 * @method string getDiskBackupName() 获取备份点名称。
 * @method void setDiskBackupName(string $DiskBackupName) 设置备份点名称。
 * @method string getDiskBackupState() 获取云硬盘备份点状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中
 * @method void setDiskBackupState(string $DiskBackupState) 设置云硬盘备份点状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中
 * @method integer getPercent() 获取云硬盘创建进度百分比。
 * @method void setPercent(integer $Percent) 设置云硬盘创建进度百分比。
 * @method string getCreateTime() 获取云硬盘备份点的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置云硬盘备份点的创建时间。
 * @method boolean getEncrypt() 获取云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
 * @method void setEncrypt(boolean $Encrypt) 设置云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
 */
class DiskBackup extends AbstractModel
{
    /**
     * @var string 云硬盘备份点的ID。
     */
    public $DiskBackupId;

    /**
     * @var string 云硬盘备份点关联的云硬盘ID。
     */
    public $DiskId;

    /**
     * @var integer 云硬盘大小，单位GB。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
     */
    public $DiskUsage;

    /**
     * @var string 备份点名称。
     */
    public $DiskBackupName;

    /**
     * @var string 云硬盘备份点状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中
     */
    public $DiskBackupState;

    /**
     * @var integer 云硬盘创建进度百分比。
     */
    public $Percent;

    /**
     * @var string 云硬盘备份点的创建时间。
     */
    public $CreateTime;

    /**
     * @var boolean 云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
     */
    public $Encrypt;

    /**
     * @param string $DiskBackupId 云硬盘备份点的ID。
     * @param string $DiskId 云硬盘备份点关联的云硬盘ID。
     * @param integer $DiskSize 云硬盘大小，单位GB。
     * @param string $DiskUsage 云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
     * @param string $DiskBackupName 备份点名称。
     * @param string $DiskBackupState 云硬盘备份点状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中
     * @param integer $Percent 云硬盘创建进度百分比。
     * @param string $CreateTime 云硬盘备份点的创建时间。
     * @param boolean $Encrypt 云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
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
        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskBackupName",$param) and $param["DiskBackupName"] !== null) {
            $this->DiskBackupName = $param["DiskBackupName"];
        }

        if (array_key_exists("DiskBackupState",$param) and $param["DiskBackupState"] !== null) {
            $this->DiskBackupState = $param["DiskBackupState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }
    }
}
