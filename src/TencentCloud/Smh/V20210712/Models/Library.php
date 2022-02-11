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
 * PaaS 服务媒体库信息
 *
 * @method string getLibraryId() 获取媒体库 ID
 * @method void setLibraryId(string $LibraryId) 设置媒体库 ID
 * @method string getName() 获取媒体库友好名称
 * @method void setName(string $Name) 设置媒体库友好名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getBucketName() 获取媒体库绑定的 COS 存储桶
 * @method void setBucketName(string $BucketName) 设置媒体库绑定的 COS 存储桶
 * @method string getBucketRegion() 获取媒体库绑定的 COS 存储桶所在的地域
 * @method void setBucketRegion(string $BucketRegion) 设置媒体库绑定的 COS 存储桶所在的地域
 * @method string getCreationTime() 获取媒体库创建时间
 * @method void setCreationTime(string $CreationTime) 设置媒体库创建时间
 * @method LibraryExtension getLibraryExtension() 获取媒体库配置项
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) 设置媒体库配置项
 * @method string getSize() 获取媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method void setSize(string $Size) 设置媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method string getDirNum() 获取媒体库目录数，由于数字类型精度限制，该字段为 String 类型。
 * @method void setDirNum(string $DirNum) 设置媒体库目录数，由于数字类型精度限制，该字段为 String 类型。
 * @method string getFileNum() 获取媒体库文件数，由于数字类型精度限制，该字段为 String 类型。
 * @method void setFileNum(string $FileNum) 设置媒体库文件数，由于数字类型精度限制，该字段为 String 类型。
 */
class Library extends AbstractModel
{
    /**
     * @var string 媒体库 ID
     */
    public $LibraryId;

    /**
     * @var string 媒体库友好名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 媒体库绑定的 COS 存储桶
     */
    public $BucketName;

    /**
     * @var string 媒体库绑定的 COS 存储桶所在的地域
     */
    public $BucketRegion;

    /**
     * @var string 媒体库创建时间
     */
    public $CreationTime;

    /**
     * @var LibraryExtension 媒体库配置项
     */
    public $LibraryExtension;

    /**
     * @var string 媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     */
    public $Size;

    /**
     * @var string 媒体库目录数，由于数字类型精度限制，该字段为 String 类型。
     */
    public $DirNum;

    /**
     * @var string 媒体库文件数，由于数字类型精度限制，该字段为 String 类型。
     */
    public $FileNum;

    /**
     * @param string $LibraryId 媒体库 ID
     * @param string $Name 媒体库友好名称
     * @param string $Remark 备注
     * @param string $BucketName 媒体库绑定的 COS 存储桶
     * @param string $BucketRegion 媒体库绑定的 COS 存储桶所在的地域
     * @param string $CreationTime 媒体库创建时间
     * @param LibraryExtension $LibraryExtension 媒体库配置项
     * @param string $Size 媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     * @param string $DirNum 媒体库目录数，由于数字类型精度限制，该字段为 String 类型。
     * @param string $FileNum 媒体库文件数，由于数字类型精度限制，该字段为 String 类型。
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
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

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LibraryExtension",$param) and $param["LibraryExtension"] !== null) {
            $this->LibraryExtension = new LibraryExtension();
            $this->LibraryExtension->deserialize($param["LibraryExtension"]);
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DirNum",$param) and $param["DirNum"] !== null) {
            $this->DirNum = $param["DirNum"];
        }

        if (array_key_exists("FileNum",$param) and $param["FileNum"] !== null) {
            $this->FileNum = $param["FileNum"];
        }
    }
}
