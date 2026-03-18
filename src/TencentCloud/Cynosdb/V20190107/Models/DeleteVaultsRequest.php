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
 * DeleteVaults请求参数结构体
 *
 * @method array getVaultIds() 获取待删除的备份保险箱ID列表，不能为空，保险箱内必须已清空所有文件
 * @method void setVaultIds(array $VaultIds) 设置待删除的备份保险箱ID列表，不能为空，保险箱内必须已清空所有文件
 */
class DeleteVaultsRequest extends AbstractModel
{
    /**
     * @var array 待删除的备份保险箱ID列表，不能为空，保险箱内必须已清空所有文件
     */
    public $VaultIds;

    /**
     * @param array $VaultIds 待删除的备份保险箱ID列表，不能为空，保险箱内必须已清空所有文件
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
        if (array_key_exists("VaultIds",$param) and $param["VaultIds"] !== null) {
            $this->VaultIds = $param["VaultIds"];
        }
    }
}
