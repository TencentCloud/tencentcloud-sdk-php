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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部存储。
标识该存储介质，并非由云开发CloudBase创建，而是绑定的其他存储介质。
目前仅支持 [腾讯云-对象存储](https://cloud.tencent.com/document/product/436)。
 *
 * @method string getBucketName() 获取桶名。
当 Provider=cos 时，表示腾讯云对象存储桶。
 * @method void setBucketName(string $BucketName) 设置桶名。
当 Provider=cos 时，表示腾讯云对象存储桶。
 * @method string getRegion() 获取Bucket所属地域。
当 Provider=cos 时，表示腾讯云对象存储桶的所属地域。
 * @method void setRegion(string $Region) 设置Bucket所属地域。
当 Provider=cos 时，表示腾讯云对象存储桶的所属地域。
 * @method string getBasePath() 获取基础路径。
绑定之后，用户访问云存储内的文件，后台会自动以BasePath作为前缀，拼接到所访问的文件中。
例如：
  BasePath=my-cloudbase-path ， 当用户访问云存储内的 /tencentcloud.png 时，实际访问的完整路径是：/my-cloudbase-path/tencentcloud.png
 * @method void setBasePath(string $BasePath) 设置基础路径。
绑定之后，用户访问云存储内的文件，后台会自动以BasePath作为前缀，拼接到所访问的文件中。
例如：
  BasePath=my-cloudbase-path ， 当用户访问云存储内的 /tencentcloud.png 时，实际访问的完整路径是：/my-cloudbase-path/tencentcloud.png
 * @method boolean getEnabled() 获取是否启用外部存储
 * @method void setEnabled(boolean $Enabled) 设置是否启用外部存储
 */
class ExternalStorage extends AbstractModel
{
    /**
     * @var string 桶名。
当 Provider=cos 时，表示腾讯云对象存储桶。
     */
    public $BucketName;

    /**
     * @var string Bucket所属地域。
当 Provider=cos 时，表示腾讯云对象存储桶的所属地域。
     */
    public $Region;

    /**
     * @var string 基础路径。
绑定之后，用户访问云存储内的文件，后台会自动以BasePath作为前缀，拼接到所访问的文件中。
例如：
  BasePath=my-cloudbase-path ， 当用户访问云存储内的 /tencentcloud.png 时，实际访问的完整路径是：/my-cloudbase-path/tencentcloud.png
     */
    public $BasePath;

    /**
     * @var boolean 是否启用外部存储
     */
    public $Enabled;

    /**
     * @param string $BucketName 桶名。
当 Provider=cos 时，表示腾讯云对象存储桶。
     * @param string $Region Bucket所属地域。
当 Provider=cos 时，表示腾讯云对象存储桶的所属地域。
     * @param string $BasePath 基础路径。
绑定之后，用户访问云存储内的文件，后台会自动以BasePath作为前缀，拼接到所访问的文件中。
例如：
  BasePath=my-cloudbase-path ， 当用户访问云存储内的 /tencentcloud.png 时，实际访问的完整路径是：/my-cloudbase-path/tencentcloud.png
     * @param boolean $Enabled 是否启用外部存储
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
