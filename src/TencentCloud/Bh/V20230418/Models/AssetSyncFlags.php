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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产同步标志
 *
 * @method boolean getRoleGranted() 获取是否已完成角色授权
 * @method void setRoleGranted(boolean $RoleGranted) 设置是否已完成角色授权
 * @method boolean getAutoSync() 获取是否已开启自动资产同步
 * @method void setAutoSync(boolean $AutoSync) 设置是否已开启自动资产同步
 */
class AssetSyncFlags extends AbstractModel
{
    /**
     * @var boolean 是否已完成角色授权
     */
    public $RoleGranted;

    /**
     * @var boolean 是否已开启自动资产同步
     */
    public $AutoSync;

    /**
     * @param boolean $RoleGranted 是否已完成角色授权
     * @param boolean $AutoSync 是否已开启自动资产同步
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
        if (array_key_exists("RoleGranted",$param) and $param["RoleGranted"] !== null) {
            $this->RoleGranted = $param["RoleGranted"];
        }

        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }
    }
}
