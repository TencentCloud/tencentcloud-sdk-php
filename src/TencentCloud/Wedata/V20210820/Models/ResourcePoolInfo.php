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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源池信息
 *
 * @method array getResourcePools() 获取资源池id
 * @method void setResourcePools(array $ResourcePools) 设置资源池id
 * @method integer getStorageSize() 获取存储空间大小，单位 MB
 * @method void setStorageSize(integer $StorageSize) 设置存储空间大小，单位 MB
 * @method integer getStorageFileNum() 获取存储文件数大小
 * @method void setStorageFileNum(integer $StorageFileNum) 设置存储文件数大小
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getStorageType() 获取存储类型，0 代表HDFS，1 代表OZONE
 * @method void setStorageType(string $StorageType) 设置存储类型，0 代表HDFS，1 代表OZONE
 */
class ResourcePoolInfo extends AbstractModel
{
    /**
     * @var array 资源池id
     */
    public $ResourcePools;

    /**
     * @var integer 存储空间大小，单位 MB
     */
    public $StorageSize;

    /**
     * @var integer 存储文件数大小
     */
    public $StorageFileNum;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 存储类型，0 代表HDFS，1 代表OZONE
     */
    public $StorageType;

    /**
     * @param array $ResourcePools 资源池id
     * @param integer $StorageSize 存储空间大小，单位 MB
     * @param integer $StorageFileNum 存储文件数大小
     * @param string $ClusterId 集群id
     * @param string $StorageType 存储类型，0 代表HDFS，1 代表OZONE
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
        if (array_key_exists("ResourcePools",$param) and $param["ResourcePools"] !== null) {
            $this->ResourcePools = $param["ResourcePools"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("StorageFileNum",$param) and $param["StorageFileNum"] !== null) {
            $this->StorageFileNum = $param["StorageFileNum"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
