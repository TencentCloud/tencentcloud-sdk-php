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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像tag信息
 *
 * @method string getTagName() 获取<p>Tag名称</p>
 * @method void setTagName(string $TagName) 设置<p>Tag名称</p>
 * @method string getTagId() 获取<p>制品的 ID</p>
 * @method void setTagId(string $TagId) 设置<p>制品的 ID</p>
 * @method string getImageId() 获取<p>docker image 可以看到的id</p>
 * @method void setImageId(string $ImageId) 设置<p>docker image 可以看到的id</p>
 * @method string getSize() 获取<p>大小</p>
 * @method void setSize(string $Size) 设置<p>大小</p>
 * @method string getCreationTime() 获取<p>制品的创建时间</p>
 * @method void setCreationTime(string $CreationTime) 设置<p>制品的创建时间</p>
 * @method string getDurationDays() 获取<p>制品创建至今时间长度</p>
 * @method void setDurationDays(string $DurationDays) 设置<p>制品创建至今时间长度</p>
 * @method string getAuthor() 获取<p>标注的制品作者</p>
 * @method void setAuthor(string $Author) 设置<p>标注的制品作者</p>
 * @method string getArchitecture() 获取<p>标注的制品平台</p>
 * @method void setArchitecture(string $Architecture) 设置<p>标注的制品平台</p>
 * @method string getDockerVersion() 获取<p>创建制品的 Docker 版本</p>
 * @method void setDockerVersion(string $DockerVersion) 设置<p>创建制品的 Docker 版本</p>
 * @method string getOS() 获取<p>标注的制品操作系统</p>
 * @method void setOS(string $OS) 设置<p>标注的制品操作系统</p>
 * @method integer getSizeByte() 获取<p>制品大小，单位：Byte</p>
 * @method void setSizeByte(integer $SizeByte) 设置<p>制品大小，单位：Byte</p>
 * @method integer getId() 获取<p>序号</p>
 * @method void setId(integer $Id) 设置<p>序号</p>
 * @method string getUpdateTime() 获取<p>数据更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>数据更新时间</p>
 * @method string getPushTime() 获取<p>制品更新时间</p>
 * @method void setPushTime(string $PushTime) 设置<p>制品更新时间</p>
 * @method string getKind() 获取<p>制品类型</p>
 * @method void setKind(string $Kind) 设置<p>制品类型</p>
 */
class TagInfo extends AbstractModel
{
    /**
     * @var string <p>Tag名称</p>
     */
    public $TagName;

    /**
     * @var string <p>制品的 ID</p>
     */
    public $TagId;

    /**
     * @var string <p>docker image 可以看到的id</p>
     */
    public $ImageId;

    /**
     * @var string <p>大小</p>
     */
    public $Size;

    /**
     * @var string <p>制品的创建时间</p>
     */
    public $CreationTime;

    /**
     * @var string <p>制品创建至今时间长度</p>
     */
    public $DurationDays;

    /**
     * @var string <p>标注的制品作者</p>
     */
    public $Author;

    /**
     * @var string <p>标注的制品平台</p>
     */
    public $Architecture;

    /**
     * @var string <p>创建制品的 Docker 版本</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>标注的制品操作系统</p>
     */
    public $OS;

    /**
     * @var integer <p>制品大小，单位：Byte</p>
     */
    public $SizeByte;

    /**
     * @var integer <p>序号</p>
     */
    public $Id;

    /**
     * @var string <p>数据更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>制品更新时间</p>
     */
    public $PushTime;

    /**
     * @var string <p>制品类型</p>
     */
    public $Kind;

    /**
     * @param string $TagName <p>Tag名称</p>
     * @param string $TagId <p>制品的 ID</p>
     * @param string $ImageId <p>docker image 可以看到的id</p>
     * @param string $Size <p>大小</p>
     * @param string $CreationTime <p>制品的创建时间</p>
     * @param string $DurationDays <p>制品创建至今时间长度</p>
     * @param string $Author <p>标注的制品作者</p>
     * @param string $Architecture <p>标注的制品平台</p>
     * @param string $DockerVersion <p>创建制品的 Docker 版本</p>
     * @param string $OS <p>标注的制品操作系统</p>
     * @param integer $SizeByte <p>制品大小，单位：Byte</p>
     * @param integer $Id <p>序号</p>
     * @param string $UpdateTime <p>数据更新时间</p>
     * @param string $PushTime <p>制品更新时间</p>
     * @param string $Kind <p>制品类型</p>
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
