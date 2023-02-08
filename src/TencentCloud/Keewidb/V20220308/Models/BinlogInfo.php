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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例增量备份信息
 *
 * @method string getStartTime() 获取备份开始时间。
 * @method void setStartTime(string $StartTime) 设置备份开始时间。
 * @method string getEndTime() 获取备份结束时间。
 * @method void setEndTime(string $EndTime) 设置备份结束时间。
 * @method string getBackupId() 获取备份 ID。
 * @method void setBackupId(string $BackupId) 设置备份 ID。
 * @method string getFilename() 获取备份文件名。
 * @method void setFilename(string $Filename) 设置备份文件名。
 * @method integer getFileSize() 获取备份文件大小，单位：Byte。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置备份文件大小，单位：Byte。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string 备份开始时间。
     */
    public $StartTime;

    /**
     * @var string 备份结束时间。
     */
    public $EndTime;

    /**
     * @var string 备份 ID。
     */
    public $BackupId;

    /**
     * @var string 备份文件名。
     */
    public $Filename;

    /**
     * @var integer 备份文件大小，单位：Byte。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @param string $StartTime 备份开始时间。
     * @param string $EndTime 备份结束时间。
     * @param string $BackupId 备份 ID。
     * @param string $Filename 备份文件名。
     * @param integer $FileSize 备份文件大小，单位：Byte。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
