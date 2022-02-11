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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLibrary请求参数结构体
 *
 * @method string getName() 获取媒体库名称，最多 50 个字符
 * @method void setName(string $Name) 设置媒体库名称，最多 50 个字符
 * @method string getBucketName() 获取存储桶全名，新建后不可更改
 * @method void setBucketName(string $BucketName) 设置存储桶全名，新建后不可更改
 * @method string getBucketRegion() 获取存储桶所在地域，新建后不可更改
 * @method void setBucketRegion(string $BucketRegion) 设置存储桶所在地域，新建后不可更改
 * @method LibraryExtension getLibraryExtension() 获取媒体库配置项，部分参数新建后不可更改
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) 设置媒体库配置项，部分参数新建后不可更改
 * @method string getRemark() 获取备注，最多 250 个字符
 * @method void setRemark(string $Remark) 设置备注，最多 250 个字符
 */
class CreateLibraryRequest extends AbstractModel
{
    /**
     * @var string 媒体库名称，最多 50 个字符
     */
    public $Name;

    /**
     * @var string 存储桶全名，新建后不可更改
     */
    public $BucketName;

    /**
     * @var string 存储桶所在地域，新建后不可更改
     */
    public $BucketRegion;

    /**
     * @var LibraryExtension 媒体库配置项，部分参数新建后不可更改
     */
    public $LibraryExtension;

    /**
     * @var string 备注，最多 250 个字符
     */
    public $Remark;

    /**
     * @param string $Name 媒体库名称，最多 50 个字符
     * @param string $BucketName 存储桶全名，新建后不可更改
     * @param string $BucketRegion 存储桶所在地域，新建后不可更改
     * @param LibraryExtension $LibraryExtension 媒体库配置项，部分参数新建后不可更改
     * @param string $Remark 备注，最多 250 个字符
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("LibraryExtension",$param) and $param["LibraryExtension"] !== null) {
            $this->LibraryExtension = new LibraryExtension();
            $this->LibraryExtension->deserialize($param["LibraryExtension"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
