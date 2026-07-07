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
 * 备份使用量信息
 *
 * @method float getBackupVolume() 获取备份使用量
 * @method void setBackupVolume(float $BackupVolume) 设置备份使用量
 * @method string getBackupType() 获取备份类型
 * @method void setBackupType(string $BackupType) 设置备份类型
 * @method string getBackupMethod() 获取备份方式
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式
 */
class BackupVolumeInfo extends AbstractModel
{
    /**
     * @var float 备份使用量
     */
    public $BackupVolume;

    /**
     * @var string 备份类型
     */
    public $BackupType;

    /**
     * @var string 备份方式
     */
    public $BackupMethod;

    /**
     * @param float $BackupVolume 备份使用量
     * @param string $BackupType 备份类型
     * @param string $BackupMethod 备份方式
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
        if (array_key_exists("BackupVolume",$param) and $param["BackupVolume"] !== null) {
            $this->BackupVolume = $param["BackupVolume"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }
    }
}
