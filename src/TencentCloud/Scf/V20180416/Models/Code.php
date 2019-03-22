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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCosBucketName() 获取对象存储桶名称
 * @method void setCosBucketName(string $CosBucketName) 设置对象存储桶名称
 * @method string getCosObjectName() 获取对象存储对象路径
 * @method void setCosObjectName(string $CosObjectName) 设置对象存储对象路径
 * @method string getZipFile() 获取包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
 * @method void setZipFile(string $ZipFile) 设置包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
 * @method string getCosBucketRegion() 获取对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
 * @method void setCosBucketRegion(string $CosBucketRegion) 设置对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
 * @method string getDemoId() 获取如果是通过Demo创建的话，需要传入DemoId
 * @method void setDemoId(string $DemoId) 设置如果是通过Demo创建的话，需要传入DemoId
 * @method string getTempCosObjectName() 获取如果是从TempCos创建的话，需要传入TempCosObjectName
 * @method void setTempCosObjectName(string $TempCosObjectName) 设置如果是从TempCos创建的话，需要传入TempCosObjectName
 */

/**
 *函数代码
 */
class Code extends AbstractModel
{
    /**
     * @var string 对象存储桶名称
     */
    public $CosBucketName;

    /**
     * @var string 对象存储对象路径
     */
    public $CosObjectName;

    /**
     * @var string 包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
     */
    public $ZipFile;

    /**
     * @var string 对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
     */
    public $CosBucketRegion;

    /**
     * @var string 如果是通过Demo创建的话，需要传入DemoId
     */
    public $DemoId;

    /**
     * @var string 如果是从TempCos创建的话，需要传入TempCosObjectName
     */
    public $TempCosObjectName;
    /**
     * @param string $CosBucketName 对象存储桶名称
     * @param string $CosObjectName 对象存储对象路径
     * @param string $ZipFile 包含函数代码文件及其依赖项的 zip 格式文件，使用该接口时要求将 zip 文件的内容转成 base64 编码，最大支持20M
     * @param string $CosBucketRegion 对象存储的地域，地域为北京时需要传入ap-beijing,北京一区时需要传递ap-beijing-1，其他的地域不需要传递。
     * @param string $DemoId 如果是通过Demo创建的话，需要传入DemoId
     * @param string $TempCosObjectName 如果是从TempCos创建的话，需要传入TempCosObjectName
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("DemoId",$param) and $param["DemoId"] !== null) {
            $this->DemoId = $param["DemoId"];
        }

        if (array_key_exists("TempCosObjectName",$param) and $param["TempCosObjectName"] !== null) {
            $this->TempCosObjectName = $param["TempCosObjectName"];
        }
    }
}
