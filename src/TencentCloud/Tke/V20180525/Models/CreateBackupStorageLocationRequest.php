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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackupStorageLocation请求参数结构体
 *
 * @method string getStorageRegion() 获取存储仓库所属地域，比如COS广州(ap-guangzhou)
 * @method void setStorageRegion(string $StorageRegion) 设置存储仓库所属地域，比如COS广州(ap-guangzhou)
 * @method string getBucket() 获取对象存储桶名称，如果是COS必须是tke-backup前缀开头
 * @method void setBucket(string $Bucket) 设置对象存储桶名称，如果是COS必须是tke-backup前缀开头
 * @method string getName() 获取备份仓库名称
 * @method void setName(string $Name) 设置备份仓库名称
 * @method string getProvider() 获取存储服务提供方，默认腾讯云
 * @method void setProvider(string $Provider) 设置存储服务提供方，默认腾讯云
 * @method string getPath() 获取对象存储桶路径
 * @method void setPath(string $Path) 设置对象存储桶路径
 */
class CreateBackupStorageLocationRequest extends AbstractModel
{
    /**
     * @var string 存储仓库所属地域，比如COS广州(ap-guangzhou)
     */
    public $StorageRegion;

    /**
     * @var string 对象存储桶名称，如果是COS必须是tke-backup前缀开头
     */
    public $Bucket;

    /**
     * @var string 备份仓库名称
     */
    public $Name;

    /**
     * @var string 存储服务提供方，默认腾讯云
     */
    public $Provider;

    /**
     * @var string 对象存储桶路径
     */
    public $Path;

    /**
     * @param string $StorageRegion 存储仓库所属地域，比如COS广州(ap-guangzhou)
     * @param string $Bucket 对象存储桶名称，如果是COS必须是tke-backup前缀开头
     * @param string $Name 备份仓库名称
     * @param string $Provider 存储服务提供方，默认腾讯云
     * @param string $Path 对象存储桶路径
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
        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
