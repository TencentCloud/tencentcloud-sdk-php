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
 * Agent 云函数代码
 *
 * @method string getCosBucketName() 获取对象存储桶名称
 * @method void setCosBucketName(string $CosBucketName) 设置对象存储桶名称
 * @method string getCosObjectName() 获取对象存储中代码包文件路径，以/开头
 * @method void setCosObjectName(string $CosObjectName) 设置对象存储中代码包文件路径，以/开头
 * @method string getZipFile() 获取包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
 * @method void setZipFile(string $ZipFile) 设置包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
 * @method string getCosBucketRegion() 获取对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
 * @method string getTempCosObjectName() 获取如果是从TempCos创建的话，需要传入TempCosObjectName
 * @method void setTempCosObjectName(string $TempCosObjectName) 设置如果是从TempCos创建的话，需要传入TempCosObjectName
 * @method AgentRuntimeCodeImageConfig getImageConfig() 获取镜像部署时配置TCR镜像信息
 * @method void setImageConfig(AgentRuntimeCodeImageConfig $ImageConfig) 设置镜像部署时配置TCR镜像信息
 * @method string getDemoId() 获取云函数DemoId
 * @method void setDemoId(string $DemoId) 设置云函数DemoId
 */
class AgentRuntimeCode extends AbstractModel
{
    /**
     * @var string 对象存储桶名称
     */
    public $CosBucketName;

    /**
     * @var string 对象存储中代码包文件路径，以/开头
     */
    public $CosObjectName;

    /**
     * @var string 包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
     */
    public $ZipFile;

    /**
     * @var string 对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
     */
    public $CosBucketRegion;

    /**
     * @var string 如果是从TempCos创建的话，需要传入TempCosObjectName
     */
    public $TempCosObjectName;

    /**
     * @var AgentRuntimeCodeImageConfig 镜像部署时配置TCR镜像信息
     */
    public $ImageConfig;

    /**
     * @var string 云函数DemoId
     */
    public $DemoId;

    /**
     * @param string $CosBucketName 对象存储桶名称
     * @param string $CosObjectName 对象存储中代码包文件路径，以/开头
     * @param string $ZipFile 包含函数代码文件及其依赖项的 zip 格式文件，zip包大小上限为 50MB，使用该接口时要求将 zip 文件的内容转成 base64 编码
     * @param string $CosBucketRegion 对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
     * @param string $TempCosObjectName 如果是从TempCos创建的话，需要传入TempCosObjectName
     * @param AgentRuntimeCodeImageConfig $ImageConfig 镜像部署时配置TCR镜像信息
     * @param string $DemoId 云函数DemoId
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
        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosObjectName",$param) and $param["CosObjectName"] !== null) {
            $this->CosObjectName = $param["CosObjectName"];
        }

        if (array_key_exists("ZipFile",$param) and $param["ZipFile"] !== null) {
            $this->ZipFile = $param["ZipFile"];
        }

        if (array_key_exists("CosBucketRegion",$param) and $param["CosBucketRegion"] !== null) {
            $this->CosBucketRegion = $param["CosBucketRegion"];
        }

        if (array_key_exists("TempCosObjectName",$param) and $param["TempCosObjectName"] !== null) {
            $this->TempCosObjectName = $param["TempCosObjectName"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new AgentRuntimeCodeImageConfig();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }

        if (array_key_exists("DemoId",$param) and $param["DemoId"] !== null) {
            $this->DemoId = $param["DemoId"];
        }
    }
}
