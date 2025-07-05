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
 * ModifyBackupEncryptionStatus请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cdb-XXXX。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-XXXX。与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getEncryptionStatus() 获取设置实例新增的自动物理备份文件默认加密状态。可选值为 on或者off。
 * @method void setEncryptionStatus(string $EncryptionStatus) 设置设置实例新增的自动物理备份文件默认加密状态。可选值为 on或者off。
 */
class ModifyBackupEncryptionStatusRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-XXXX。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 设置实例新增的自动物理备份文件默认加密状态。可选值为 on或者off。
     */
    public $EncryptionStatus;

    /**
     * @param string $InstanceId 实例ID，格式如：cdb-XXXX。与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $EncryptionStatus 设置实例新增的自动物理备份文件默认加密状态。可选值为 on或者off。
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

        if (array_key_exists("EncryptionStatus",$param) and $param["EncryptionStatus"] !== null) {
            $this->EncryptionStatus = $param["EncryptionStatus"];
        }
    }
}
