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
 * UpdateResourceFile请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getResourceId() 获取资源文件ID,可通过ListResourceFiles接口获取
 * @method void setResourceId(string $ResourceId) 设置资源文件ID,可通过ListResourceFiles接口获取
 * @method string getResourceFile() 获取- 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-  手填值必须是存在的cos路径, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:
     /datastudio/resource/projectId/parentFolderPath/name 

 * @method void setResourceFile(string $ResourceFile) 设置- 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-  手填值必须是存在的cos路径, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:
     /datastudio/resource/projectId/parentFolderPath/name 

 * @method string getResourceName() 获取资源名称, 尽可能和文件名保持一致
 * @method void setResourceName(string $ResourceName) 设置资源名称, 尽可能和文件名保持一致
 * @method string getBundleId() 获取bundle客户端ID
 * @method void setBundleId(string $BundleId) 设置bundle客户端ID
 * @method string getBundleInfo() 获取bundle客户端名称
 * @method void setBundleInfo(string $BundleInfo) 设置bundle客户端名称
 */
class UpdateResourceFileRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 资源文件ID,可通过ListResourceFiles接口获取
     */
    public $ResourceId;

    /**
     * @var string - 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-  手填值必须是存在的cos路径, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:
     /datastudio/resource/projectId/parentFolderPath/name 

     */
    public $ResourceFile;

    /**
     * @var string 资源名称, 尽可能和文件名保持一致
     */
    public $ResourceName;

    /**
     * @var string bundle客户端ID
     */
    public $BundleId;

    /**
     * @var string bundle客户端名称
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ResourceId 资源文件ID,可通过ListResourceFiles接口获取
     * @param string $ResourceFile - 上传文件及手填两种方式只能选择其一，如果两者均提供，取值顺序为文件>手填值
-  手填值必须是存在的cos路径, parentFolderPath为父文件夹路径, name为文件名, 手填值取值示例:
     /datastudio/resource/projectId/parentFolderPath/name 

     * @param string $ResourceName 资源名称, 尽可能和文件名保持一致
     * @param string $BundleId bundle客户端ID
     * @param string $BundleInfo bundle客户端名称
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceFile",$param) and $param["ResourceFile"] !== null) {
            $this->ResourceFile = $param["ResourceFile"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
