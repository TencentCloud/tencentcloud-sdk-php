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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResourceFile请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getResourceName() 获取资源文件名称, 尽可能和上传文件名保持一致
 * @method void setResourceName(string $ResourceName) 设置资源文件名称, 尽可能和上传文件名保持一致
 * @method string getBucketName() 获取cos存储桶名称, 可从GetResourceCosPath接口获取
 * @method void setBucketName(string $BucketName) 设置cos存储桶名称, 可从GetResourceCosPath接口获取
 * @method string getCosRegion() 获取BucketName桶对应的cos存储桶区域
 * @method void setCosRegion(string $CosRegion) 设置BucketName桶对应的cos存储桶区域
 * @method string getParentFolderPath() 获取项目中资源文件上传的路径, 取值示例: /wedata/qxxxm/, 根目录,请使用/即可
 * @method void setParentFolderPath(string $ParentFolderPath) 设置项目中资源文件上传的路径, 取值示例: /wedata/qxxxm/, 根目录,请使用/即可
 * @method string getResourceFile() 获取- 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-   手填值必须是存在的cos路径, /datastudio/resource/ 为固定前缀, projectId 为项目ID,需传入具体值, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:     /datastudio/resource/projectId/parentFolderPath/name 

 * @method void setResourceFile(string $ResourceFile) 设置- 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-   手填值必须是存在的cos路径, /datastudio/resource/ 为固定前缀, projectId 为项目ID,需传入具体值, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:     /datastudio/resource/projectId/parentFolderPath/name 

 * @method string getBundleId() 获取bundle客户端ID
 * @method void setBundleId(string $BundleId) 设置bundle客户端ID
 * @method string getBundleInfo() 获取bundle客户端信息
 * @method void setBundleInfo(string $BundleInfo) 设置bundle客户端信息
 */
class CreateResourceFileRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 资源文件名称, 尽可能和上传文件名保持一致
     */
    public $ResourceName;

    /**
     * @var string cos存储桶名称, 可从GetResourceCosPath接口获取
     */
    public $BucketName;

    /**
     * @var string BucketName桶对应的cos存储桶区域
     */
    public $CosRegion;

    /**
     * @var string 项目中资源文件上传的路径, 取值示例: /wedata/qxxxm/, 根目录,请使用/即可
     */
    public $ParentFolderPath;

    /**
     * @var string - 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-   手填值必须是存在的cos路径, /datastudio/resource/ 为固定前缀, projectId 为项目ID,需传入具体值, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:     /datastudio/resource/projectId/parentFolderPath/name 

     */
    public $ResourceFile;

    /**
     * @var string bundle客户端ID
     */
    public $BundleId;

    /**
     * @var string bundle客户端信息
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ResourceName 资源文件名称, 尽可能和上传文件名保持一致
     * @param string $BucketName cos存储桶名称, 可从GetResourceCosPath接口获取
     * @param string $CosRegion BucketName桶对应的cos存储桶区域
     * @param string $ParentFolderPath 项目中资源文件上传的路径, 取值示例: /wedata/qxxxm/, 根目录,请使用/即可
     * @param string $ResourceFile - 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-   手填值必须是存在的cos路径, /datastudio/resource/ 为固定前缀, projectId 为项目ID,需传入具体值, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:     /datastudio/resource/projectId/parentFolderPath/name 

     * @param string $BundleId bundle客户端ID
     * @param string $BundleInfo bundle客户端信息
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ResourceFile",$param) and $param["ResourceFile"] !== null) {
            $this->ResourceFile = $param["ResourceFile"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
