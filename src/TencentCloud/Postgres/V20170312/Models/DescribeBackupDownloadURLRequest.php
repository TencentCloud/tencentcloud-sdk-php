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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadURL请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getBackupType() 获取备份类型，目前支持：LogBackup，BaseBackup。
 * @method void setBackupType(string $BackupType) 设置备份类型，目前支持：LogBackup，BaseBackup。
 * @method string getBackupId() 获取备份的唯一ID。
 * @method void setBackupId(string $BackupId) 设置备份的唯一ID。
 * @method integer getURLExpireTime() 获取链接的有效时间，默认为12小时。
 * @method void setURLExpireTime(integer $URLExpireTime) 设置链接的有效时间，默认为12小时。
 * @method BackupDownloadRestriction getBackupDownloadRestriction() 获取备份下载限制
 * @method void setBackupDownloadRestriction(BackupDownloadRestriction $BackupDownloadRestriction) 设置备份下载限制
 */
class DescribeBackupDownloadURLRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 备份类型，目前支持：LogBackup，BaseBackup。
     */
    public $BackupType;

    /**
     * @var string 备份的唯一ID。
     */
    public $BackupId;

    /**
     * @var integer 链接的有效时间，默认为12小时。
     */
    public $URLExpireTime;

    /**
     * @var BackupDownloadRestriction 备份下载限制
     */
    public $BackupDownloadRestriction;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param string $BackupType 备份类型，目前支持：LogBackup，BaseBackup。
     * @param string $BackupId 备份的唯一ID。
     * @param integer $URLExpireTime 链接的有效时间，默认为12小时。
     * @param BackupDownloadRestriction $BackupDownloadRestriction 备份下载限制
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("URLExpireTime",$param) and $param["URLExpireTime"] !== null) {
            $this->URLExpireTime = $param["URLExpireTime"];
        }

        if (array_key_exists("BackupDownloadRestriction",$param) and $param["BackupDownloadRestriction"] !== null) {
            $this->BackupDownloadRestriction = new BackupDownloadRestriction();
            $this->BackupDownloadRestriction->deserialize($param["BackupDownloadRestriction"]);
        }
    }
}
