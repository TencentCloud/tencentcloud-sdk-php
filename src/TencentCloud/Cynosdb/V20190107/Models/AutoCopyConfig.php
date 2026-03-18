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
 * 保险箱自动投递关系
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getVaultId() 获取保险箱ID
 * @method void setVaultId(string $VaultId) 设置保险箱ID
 * @method string getVaultRegion() 获取保险箱地域
 * @method void setVaultRegion(string $VaultRegion) 设置保险箱地域
 * @method string getCopyType() 获取投递类型：binlog, redolog, snapshot, logic
 * @method void setCopyType(string $CopyType) 设置投递类型：binlog, redolog, snapshot, logic
 */
class AutoCopyConfig extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 保险箱ID
     */
    public $VaultId;

    /**
     * @var string 保险箱地域
     */
    public $VaultRegion;

    /**
     * @var string 投递类型：binlog, redolog, snapshot, logic
     */
    public $CopyType;

    /**
     * @param string $ClusterId 集群id
     * @param string $VaultId 保险箱ID
     * @param string $VaultRegion 保险箱地域
     * @param string $CopyType 投递类型：binlog, redolog, snapshot, logic
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("VaultRegion",$param) and $param["VaultRegion"] !== null) {
            $this->VaultRegion = $param["VaultRegion"];
        }

        if (array_key_exists("CopyType",$param) and $param["CopyType"] !== null) {
            $this->CopyType = $param["CopyType"];
        }
    }
}
