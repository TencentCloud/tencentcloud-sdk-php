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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLibrary请求参数结构体
 *
 * @method string getName() 获取<p>媒体库名称，最多 50 个字符</p>
 * @method void setName(string $Name) 设置<p>媒体库名称，最多 50 个字符</p>
 * @method string getRemark() 获取<p>备注，最多 250 个字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注，最多 250 个字符</p>
 * @method string getBucketName() 获取<p>存储桶全名，新建后不可更改。当前版本不再支持指定存储桶。</p>
 * @method void setBucketName(string $BucketName) 设置<p>存储桶全名，新建后不可更改。当前版本不再支持指定存储桶。</p>
 * @method string getBucketRegion() 获取<p>存储桶所在地域，新建后不可更改。当前版本不再支持指定存储桶所在地域。</p>
 * @method void setBucketRegion(string $BucketRegion) 设置<p>存储桶所在地域，新建后不可更改。当前版本不再支持指定存储桶所在地域。</p>
 * @method LibraryExtension getLibraryExtension() 获取<p>媒体库配置项，部分参数新建后不可更改</p>
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) 设置<p>媒体库配置项，部分参数新建后不可更改</p>
 */
class CreateLibraryRequest extends AbstractModel
{
    /**
     * @var string <p>媒体库名称，最多 50 个字符</p>
     */
    public $Name;

    /**
     * @var string <p>备注，最多 250 个字符</p>
     */
    public $Remark;

    /**
     * @var string <p>存储桶全名，新建后不可更改。当前版本不再支持指定存储桶。</p>
     */
    public $BucketName;

    /**
     * @var string <p>存储桶所在地域，新建后不可更改。当前版本不再支持指定存储桶所在地域。</p>
     */
    public $BucketRegion;

    /**
     * @var LibraryExtension <p>媒体库配置项，部分参数新建后不可更改</p>
     */
    public $LibraryExtension;

    /**
     * @param string $Name <p>媒体库名称，最多 50 个字符</p>
     * @param string $Remark <p>备注，最多 250 个字符</p>
     * @param string $BucketName <p>存储桶全名，新建后不可更改。当前版本不再支持指定存储桶。</p>
     * @param string $BucketRegion <p>存储桶所在地域，新建后不可更改。当前版本不再支持指定存储桶所在地域。</p>
     * @param LibraryExtension $LibraryExtension <p>媒体库配置项，部分参数新建后不可更改</p>
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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
    }
}
