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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncAssetImageRegistryAsset请求参数结构体
 *
 * @method boolean getAll() 获取是否同步所有镜像仓库
 * @method void setAll(boolean $All) 设置是否同步所有镜像仓库
 * @method array getRegistryIds() 获取需要同步的部分镜像仓库
 * @method void setRegistryIds(array $RegistryIds) 设置需要同步的部分镜像仓库
 */
class SyncAssetImageRegistryAssetRequest extends AbstractModel
{
    /**
     * @var boolean 是否同步所有镜像仓库
     */
    public $All;

    /**
     * @var array 需要同步的部分镜像仓库
     */
    public $RegistryIds;

    /**
     * @param boolean $All 是否同步所有镜像仓库
     * @param array $RegistryIds 需要同步的部分镜像仓库
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("RegistryIds",$param) and $param["RegistryIds"] !== null) {
            $this->RegistryIds = $param["RegistryIds"];
        }
    }
}
