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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 将被删除的备份文件列表
 *
 * @method integer getBackupId() 获取备份文件ID
 * @method void setBackupId(integer $BackupId) 设置备份文件ID
 * @method string getBackupName() 获取备份文件名称
 * @method void setBackupName(string $BackupName) 设置备份文件名称
 */
class WillDeleteItem extends AbstractModel
{
    /**
     * @var integer 备份文件ID
     */
    public $BackupId;

    /**
     * @var string 备份文件名称
     */
    public $BackupName;

    /**
     * @param integer $BackupId 备份文件ID
     * @param string $BackupName 备份文件名称
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
    }
}
