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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBSBackupPolicy请求参数结构体
 *
 * @method BackupPolicyModelInput getBackupPolicy() 获取备份策略
 * @method void setBackupPolicy(BackupPolicyModelInput $BackupPolicy) 设置备份策略
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class ModifyDBSBackupPolicyRequest extends AbstractModel
{
    /**
     * @var BackupPolicyModelInput 备份策略
     */
    public $BackupPolicy;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param BackupPolicyModelInput $BackupPolicy 备份策略
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("BackupPolicy",$param) and $param["BackupPolicy"] !== null) {
            $this->BackupPolicy = new BackupPolicyModelInput();
            $this->BackupPolicy->deserialize($param["BackupPolicy"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
