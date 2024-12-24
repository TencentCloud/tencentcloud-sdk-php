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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceBackupMode请求参数结构体
 *
 * @method string getInstanceId() 获取实例的ID，长度在12-36之间。
 * @method void setInstanceId(string $InstanceId) 设置实例的ID，长度在12-36之间。
 * @method string getBackupMode() 获取备份模式：
- SecondLevelBackup   秒级备份
- NormalLevelBackup    普通备份
 * @method void setBackupMode(string $BackupMode) 设置备份模式：
- SecondLevelBackup   秒级备份
- NormalLevelBackup    普通备份
 */
class ModifyInstanceBackupModeRequest extends AbstractModel
{
    /**
     * @var string 实例的ID，长度在12-36之间。
     */
    public $InstanceId;

    /**
     * @var string 备份模式：
- SecondLevelBackup   秒级备份
- NormalLevelBackup    普通备份
     */
    public $BackupMode;

    /**
     * @param string $InstanceId 实例的ID，长度在12-36之间。
     * @param string $BackupMode 备份模式：
- SecondLevelBackup   秒级备份
- NormalLevelBackup    普通备份
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

        if (array_key_exists("BackupMode",$param) and $param["BackupMode"] !== null) {
            $this->BackupMode = $param["BackupMode"];
        }
    }
}
