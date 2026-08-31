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
 * PaaS 服务媒体库信息
 *
 * @method string getLibraryId() 获取<p>媒体库 ID</p>
 * @method void setLibraryId(string $LibraryId) 设置<p>媒体库 ID</p>
 * @method string getName() 获取<p>媒体库友好名称</p>
 * @method void setName(string $Name) 设置<p>媒体库友好名称</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getBucketName() 获取<p>媒体库绑定的 COS 存储桶</p>
 * @method void setBucketName(string $BucketName) 设置<p>媒体库绑定的 COS 存储桶</p>
 * @method string getBucketRegion() 获取<p>媒体库绑定的 COS 存储桶所在的地域</p>
 * @method void setBucketRegion(string $BucketRegion) 设置<p>媒体库绑定的 COS 存储桶所在的地域</p>
 * @method string getAccessDomain() 获取<p>该媒体库的业务 API 访问域名</p>
 * @method void setAccessDomain(string $AccessDomain) 设置<p>该媒体库的业务 API 访问域名</p>
 * @method string getCreationTime() 获取<p>媒体库创建时间</p>
 * @method void setCreationTime(string $CreationTime) 设置<p>媒体库创建时间</p>
 * @method LibraryExtension getLibraryExtension() 获取<p>媒体库配置项</p>
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) 设置<p>媒体库配置项</p>
 * @method string getSize() 获取<p>媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。</p>
 * @method void setSize(string $Size) 设置<p>媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。</p>
 * @method string getDirNum() 获取<p>媒体库目录数，由于数字类型精度限制，该字段为 String 类型。</p>
 * @method void setDirNum(string $DirNum) 设置<p>媒体库目录数，由于数字类型精度限制，该字段为 String 类型。</p>
 * @method string getFileNum() 获取<p>媒体库文件数，由于数字类型精度限制，该字段为 String 类型。</p>
 * @method void setFileNum(string $FileNum) 设置<p>媒体库文件数，由于数字类型精度限制，该字段为 String 类型。</p>
 * @method array getTags() 获取<p>媒体库关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>媒体库关联的标签列表。</p>
 */
class Library extends AbstractModel
{
    /**
     * @var string <p>媒体库 ID</p>
     */
    public $LibraryId;

    /**
     * @var string <p>媒体库友好名称</p>
     */
    public $Name;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>媒体库绑定的 COS 存储桶</p>
     */
    public $BucketName;

    /**
     * @var string <p>媒体库绑定的 COS 存储桶所在的地域</p>
     */
    public $BucketRegion;

    /**
     * @var string <p>该媒体库的业务 API 访问域名</p>
     */
    public $AccessDomain;

    /**
     * @var string <p>媒体库创建时间</p>
     */
    public $CreationTime;

    /**
     * @var LibraryExtension <p>媒体库配置项</p>
     */
    public $LibraryExtension;

    /**
     * @var string <p>媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。</p>
     */
    public $Size;

    /**
     * @var string <p>媒体库目录数，由于数字类型精度限制，该字段为 String 类型。</p>
     */
    public $DirNum;

    /**
     * @var string <p>媒体库文件数，由于数字类型精度限制，该字段为 String 类型。</p>
     */
    public $FileNum;

    /**
     * @var array <p>媒体库关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @param string $LibraryId <p>媒体库 ID</p>
     * @param string $Name <p>媒体库友好名称</p>
     * @param string $Remark <p>备注</p>
     * @param string $BucketName <p>媒体库绑定的 COS 存储桶</p>
     * @param string $BucketRegion <p>媒体库绑定的 COS 存储桶所在的地域</p>
     * @param string $AccessDomain <p>该媒体库的业务 API 访问域名</p>
     * @param string $CreationTime <p>媒体库创建时间</p>
     * @param LibraryExtension $LibraryExtension <p>媒体库配置项</p>
     * @param string $Size <p>媒体库用量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。</p>
     * @param string $DirNum <p>媒体库目录数，由于数字类型精度限制，该字段为 String 类型。</p>
     * @param string $FileNum <p>媒体库文件数，由于数字类型精度限制，该字段为 String 类型。</p>
     * @param array $Tags <p>媒体库关联的标签列表。</p>
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

        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
