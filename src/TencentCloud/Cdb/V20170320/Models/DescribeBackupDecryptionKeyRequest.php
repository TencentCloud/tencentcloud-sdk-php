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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDecryptionKey请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-fybaegd8。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-fybaegd8。与云数据库控制台页面中显示的实例 ID 相同。
 * @method integer getBackupId() 获取实例的备份 ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/api/236/15842) 接口查询备份的 ID。
 * @method void setBackupId(integer $BackupId) 设置实例的备份 ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/api/236/15842) 接口查询备份的 ID。
 * @method string getBackupType() 获取备份类型。data-数据备份，binlog-日志备份，默认为 data。
 * @method void setBackupType(string $BackupType) 设置备份类型。data-数据备份，binlog-日志备份，默认为 data。
 */
class DescribeBackupDecryptionKeyRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-fybaegd8。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var integer 实例的备份 ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/api/236/15842) 接口查询备份的 ID。
     */
    public $BackupId;

    /**
     * @var string 备份类型。data-数据备份，binlog-日志备份，默认为 data。
     */
    public $BackupType;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-fybaegd8。与云数据库控制台页面中显示的实例 ID 相同。
     * @param integer $BackupId 实例的备份 ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/api/236/15842) 接口查询备份的 ID。
     * @param string $BackupType 备份类型。data-数据备份，binlog-日志备份，默认为 data。
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }
    }
}
