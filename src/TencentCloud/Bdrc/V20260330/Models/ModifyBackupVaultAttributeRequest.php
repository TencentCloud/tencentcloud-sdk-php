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
 * ModifyBackupVaultAttribute请求参数结构体
 *
 * @method string getVaultId() 获取备份库ID
 * @method void setVaultId(string $VaultId) 设置备份库ID
 * @method string getVaultName() 获取备份库名称
 * @method void setVaultName(string $VaultName) 设置备份库名称
 * @method string getDescription() 获取备份库描述
 * @method void setDescription(string $Description) 设置备份库描述
 */
class ModifyBackupVaultAttributeRequest extends AbstractModel
{
    /**
     * @var string 备份库ID
     */
    public $VaultId;

    /**
     * @var string 备份库名称
     */
    public $VaultName;

    /**
     * @var string 备份库描述
     */
    public $Description;

    /**
     * @param string $VaultId 备份库ID
     * @param string $VaultName 备份库名称
     * @param string $Description 备份库描述
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
