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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储信息
 *
 * @method string getMountPath() 获取挂载路径
 * @method void setMountPath(string $MountPath) 设置挂载路径
 * @method COSStorage getCOSStorage() 获取cos挂载信息
 * @method void setCOSStorage(COSStorage $COSStorage) 设置cos挂载信息
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string 挂载路径
     */
    public $MountPath;

    /**
     * @var COSStorage cos挂载信息
     */
    public $COSStorage;

    /**
     * @param string $MountPath 挂载路径
     * @param COSStorage $COSStorage cos挂载信息
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
        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("COSStorage",$param) and $param["COSStorage"] !== null) {
            $this->COSStorage = new COSStorage();
            $this->COSStorage->deserialize($param["COSStorage"]);
        }
    }
}
