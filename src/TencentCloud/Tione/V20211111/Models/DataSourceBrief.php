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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源简要信息
 *
 * @method string getStorageId() 获取<p>存储实例ID</p>
 * @method void setStorageId(string $StorageId) 设置<p>存储实例ID</p>
 * @method string getStorageName() 获取<p>存储实例名称</p>
 * @method void setStorageName(string $StorageName) 设置<p>存储实例名称</p>
 * @method string getWorkDir() 获取<p>存储目录</p>
 * @method void setWorkDir(string $WorkDir) 设置<p>存储目录</p>
 * @method string getPermission() 获取<p>数据源读写权限，RW/RO</p>
 * @method void setPermission(string $Permission) 设置<p>数据源读写权限，RW/RO</p>
 */
class DataSourceBrief extends AbstractModel
{
    /**
     * @var string <p>存储实例ID</p>
     */
    public $StorageId;

    /**
     * @var string <p>存储实例名称</p>
     */
    public $StorageName;

    /**
     * @var string <p>存储目录</p>
     */
    public $WorkDir;

    /**
     * @var string <p>数据源读写权限，RW/RO</p>
     */
    public $Permission;

    /**
     * @param string $StorageId <p>存储实例ID</p>
     * @param string $StorageName <p>存储实例名称</p>
     * @param string $WorkDir <p>存储目录</p>
     * @param string $Permission <p>数据源读写权限，RW/RO</p>
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
        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}
