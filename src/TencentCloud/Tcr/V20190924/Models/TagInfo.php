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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像tag信息
 *
 * @method string getTagName() 获取Tag名称
 * @method void setTagName(string $TagName) 设置Tag名称
 * @method string getTagId() 获取制品的 ID
 * @method void setTagId(string $TagId) 设置制品的 ID
 * @method string getImageId() 获取docker image 可以看到的id
 * @method void setImageId(string $ImageId) 设置docker image 可以看到的id
 * @method string getSize() 获取大小
 * @method void setSize(string $Size) 设置大小
 * @method string getCreationTime() 获取制品的创建时间
 * @method void setCreationTime(string $CreationTime) 设置制品的创建时间
 * @method string getDurationDays() 获取制品创建至今时间长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationDays(string $DurationDays) 设置制品创建至今时间长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthor() 获取标注的制品作者
 * @method void setAuthor(string $Author) 设置标注的制品作者
 * @method string getArchitecture() 获取标注的制品平台
 * @method void setArchitecture(string $Architecture) 设置标注的制品平台
 * @method string getDockerVersion() 获取创建制品的 Docker 版本
 * @method void setDockerVersion(string $DockerVersion) 设置创建制品的 Docker 版本
 * @method string getOS() 获取标注的制品操作系统
 * @method void setOS(string $OS) 设置标注的制品操作系统
 * @method integer getSizeByte() 获取制品大小
 * @method void setSizeByte(integer $SizeByte) 设置制品大小
 * @method integer getId() 获取序号
 * @method void setId(integer $Id) 设置序号
 * @method string getUpdateTime() 获取数据更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
 * @method string getPushTime() 获取制品更新时间
 * @method void setPushTime(string $PushTime) 设置制品更新时间
 * @method string getKind() 获取制品类型
 * @method void setKind(string $Kind) 设置制品类型
 */
class TagInfo extends AbstractModel
{
    /**
     * @var string Tag名称
     */
    public $TagName;

    /**
     * @var string 制品的 ID
     */
    public $TagId;

    /**
     * @var string docker image 可以看到的id
     */
    public $ImageId;

    /**
     * @var string 大小
     */
    public $Size;

    /**
     * @var string 制品的创建时间
     */
    public $CreationTime;

    /**
     * @var string 制品创建至今时间长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationDays;

    /**
     * @var string 标注的制品作者
     */
    public $Author;

    /**
     * @var string 标注的制品平台
     */
    public $Architecture;

    /**
     * @var string 创建制品的 Docker 版本
     */
    public $DockerVersion;

    /**
     * @var string 标注的制品操作系统
     */
    public $OS;

    /**
     * @var integer 制品大小
     */
    public $SizeByte;

    /**
     * @var integer 序号
     */
    public $Id;

    /**
     * @var string 数据更新时间
     */
    public $UpdateTime;

    /**
     * @var string 制品更新时间
     */
    public $PushTime;

    /**
     * @var string 制品类型
     */
    public $Kind;

    /**
     * @param string $TagName Tag名称
     * @param string $TagId 制品的 ID
     * @param string $ImageId docker image 可以看到的id
     * @param string $Size 大小
     * @param string $CreationTime 制品的创建时间
     * @param string $DurationDays 制品创建至今时间长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Author 标注的制品作者
     * @param string $Architecture 标注的制品平台
     * @param string $DockerVersion 创建制品的 Docker 版本
     * @param string $OS 标注的制品操作系统
     * @param integer $SizeByte 制品大小
     * @param integer $Id 序号
     * @param string $UpdateTime 数据更新时间
     * @param string $PushTime 制品更新时间
     * @param string $Kind 制品类型
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("DurationDays",$param) and $param["DurationDays"] !== null) {
            $this->DurationDays = $param["DurationDays"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PushTime",$param) and $param["PushTime"] !== null) {
            $this->PushTime = $param["PushTime"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
