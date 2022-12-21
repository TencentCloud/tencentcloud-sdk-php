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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDiskBackup请求参数结构体
 *
 * @method string getDiskId() 获取云硬盘 ID。当前只支持数据盘创建备份点。
 * @method void setDiskId(string $DiskId) 设置云硬盘 ID。当前只支持数据盘创建备份点。
 * @method string getDiskBackupName() 获取云硬盘备份点名称，最大长度90。
 * @method void setDiskBackupName(string $DiskBackupName) 设置云硬盘备份点名称，最大长度90。
 */
class CreateDiskBackupRequest extends AbstractModel
{
    /**
     * @var string 云硬盘 ID。当前只支持数据盘创建备份点。
     */
    public $DiskId;

    /**
     * @var string 云硬盘备份点名称，最大长度90。
     */
    public $DiskBackupName;

    /**
     * @param string $DiskId 云硬盘 ID。当前只支持数据盘创建备份点。
     * @param string $DiskBackupName 云硬盘备份点名称，最大长度90。
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskBackupName",$param) and $param["DiskBackupName"] !== null) {
            $this->DiskBackupName = $param["DiskBackupName"];
        }
    }
}
