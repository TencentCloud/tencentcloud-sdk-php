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
 * ModifyBackupAttribute请求参数结构体
 *
 * @method string getBackupId() 获取备份ID。该字段的取值取决于ResourceType：当ResourceType=CVM（默认）时，需传入备份组ID（BackupGroupId），可通过DescribeBackupGroups（查询备份组列表）查询
 * @method void setBackupId(string $BackupId) 设置备份ID。该字段的取值取决于ResourceType：当ResourceType=CVM（默认）时，需传入备份组ID（BackupGroupId），可通过DescribeBackupGroups（查询备份组列表）查询
 * @method string getBackupName() 获取备份的名称。
 * @method void setBackupName(string $BackupName) 设置备份的名称。
 * @method boolean getIsPermanent() 获取是否为永久保留的备份。
 * @method void setIsPermanent(boolean $IsPermanent) 设置是否为永久保留的备份。
 * @method string getDeadline() 获取备份到期时间。
 * @method void setDeadline(string $Deadline) 设置备份到期时间。
 */
class ModifyBackupAttributeRequest extends AbstractModel
{
    /**
     * @var string 备份ID。该字段的取值取决于ResourceType：当ResourceType=CVM（默认）时，需传入备份组ID（BackupGroupId），可通过DescribeBackupGroups（查询备份组列表）查询
     */
    public $BackupId;

    /**
     * @var string 备份的名称。
     */
    public $BackupName;

    /**
     * @var boolean 是否为永久保留的备份。
     */
    public $IsPermanent;

    /**
     * @var string 备份到期时间。
     */
    public $Deadline;

    /**
     * @param string $BackupId 备份ID。该字段的取值取决于ResourceType：当ResourceType=CVM（默认）时，需传入备份组ID（BackupGroupId），可通过DescribeBackupGroups（查询备份组列表）查询
     * @param string $BackupName 备份的名称。
     * @param boolean $IsPermanent 是否为永久保留的备份。
     * @param string $Deadline 备份到期时间。
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
