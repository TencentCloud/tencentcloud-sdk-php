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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置文件发布
 *
 * @method integer getId() 获取配置文件发布id
 * @method void setId(integer $Id) 设置配置文件发布id
 * @method string getName() 获取配置文件发布名称
 * @method void setName(string $Name) 设置配置文件发布名称
 * @method string getNamespace() 获取配置文件发布命名空间
 * @method void setNamespace(string $Namespace) 设置配置文件发布命名空间
 * @method string getGroup() 获取配置文件发布组
 * @method void setGroup(string $Group) 设置配置文件发布组
 * @method string getFileName() 获取配置文件发布文件名称
 * @method void setFileName(string $FileName) 设置配置文件发布文件名称
 * @method string getContent() 获取配置文件发布内容
 * @method void setContent(string $Content) 设置配置文件发布内容
 * @method string getComment() 获取配置文件发布注释
 * @method void setComment(string $Comment) 设置配置文件发布注释
 * @method string getMd5() 获取配置文件发布Md5
 * @method void setMd5(string $Md5) 设置配置文件发布Md5
 * @method integer getVersion() 获取配置文件发布版本
 * @method void setVersion(integer $Version) 设置配置文件发布版本
 * @method string getCreateTime() 获取配置文件发布创建时间
 * @method void setCreateTime(string $CreateTime) 设置配置文件发布创建时间
 * @method string getCreateBy() 获取配置文件发布创建者
 * @method void setCreateBy(string $CreateBy) 设置配置文件发布创建者
 * @method string getModifyTime() 获取配置文件发布修改时间
 * @method void setModifyTime(string $ModifyTime) 设置配置文件发布修改时间
 * @method string getModifyBy() 获取配置文件发布修改者
 * @method void setModifyBy(string $ModifyBy) 设置配置文件发布修改者
 * @method string getReleaseDescription() 获取发布描述
 * @method void setReleaseDescription(string $ReleaseDescription) 设置发布描述
 * @method boolean getActive() 获取是否生效
 * @method void setActive(boolean $Active) 设置是否生效
 * @method string getFormat() 获取格式
 * @method void setFormat(string $Format) 设置格式
 * @method string getConfigFileId() 获取配置文件ID
 * @method void setConfigFileId(string $ConfigFileId) 设置配置文件ID
 * @method integer getConfigFileSupportedClient() 获取配置文件类型
 * @method void setConfigFileSupportedClient(integer $ConfigFileSupportedClient) 设置配置文件类型
 * @method ConfigFilePersistent getConfigFilePersistent() 获取配置文件持久化
 * @method void setConfigFilePersistent(ConfigFilePersistent $ConfigFilePersistent) 设置配置文件持久化
 */
class ConfigFileRelease extends AbstractModel
{
    /**
     * @var integer 配置文件发布id
     */
    public $Id;

    /**
     * @var string 配置文件发布名称
     */
    public $Name;

    /**
     * @var string 配置文件发布命名空间
     */
    public $Namespace;

    /**
     * @var string 配置文件发布组
     */
    public $Group;

    /**
     * @var string 配置文件发布文件名称
     */
    public $FileName;

    /**
     * @var string 配置文件发布内容
     */
    public $Content;

    /**
     * @var string 配置文件发布注释
     */
    public $Comment;

    /**
     * @var string 配置文件发布Md5
     */
    public $Md5;

    /**
     * @var integer 配置文件发布版本
     */
    public $Version;

    /**
     * @var string 配置文件发布创建时间
     */
    public $CreateTime;

    /**
     * @var string 配置文件发布创建者
     */
    public $CreateBy;

    /**
     * @var string 配置文件发布修改时间
     */
    public $ModifyTime;

    /**
     * @var string 配置文件发布修改者
     */
    public $ModifyBy;

    /**
     * @var string 发布描述
     */
    public $ReleaseDescription;

    /**
     * @var boolean 是否生效
     */
    public $Active;

    /**
     * @var string 格式
     */
    public $Format;

    /**
     * @var string 配置文件ID
     */
    public $ConfigFileId;

    /**
     * @var integer 配置文件类型
     */
    public $ConfigFileSupportedClient;

    /**
     * @var ConfigFilePersistent 配置文件持久化
     */
    public $ConfigFilePersistent;

    /**
     * @param integer $Id 配置文件发布id
     * @param string $Name 配置文件发布名称
     * @param string $Namespace 配置文件发布命名空间
     * @param string $Group 配置文件发布组
     * @param string $FileName 配置文件发布文件名称
     * @param string $Content 配置文件发布内容
     * @param string $Comment 配置文件发布注释
     * @param string $Md5 配置文件发布Md5
     * @param integer $Version 配置文件发布版本
     * @param string $CreateTime 配置文件发布创建时间
     * @param string $CreateBy 配置文件发布创建者
     * @param string $ModifyTime 配置文件发布修改时间
     * @param string $ModifyBy 配置文件发布修改者
     * @param string $ReleaseDescription 发布描述
     * @param boolean $Active 是否生效
     * @param string $Format 格式
     * @param string $ConfigFileId 配置文件ID
     * @param integer $ConfigFileSupportedClient 配置文件类型
     * @param ConfigFilePersistent $ConfigFilePersistent 配置文件持久化
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ModifyBy",$param) and $param["ModifyBy"] !== null) {
            $this->ModifyBy = $param["ModifyBy"];
        }

        if (array_key_exists("ReleaseDescription",$param) and $param["ReleaseDescription"] !== null) {
            $this->ReleaseDescription = $param["ReleaseDescription"];
        }

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("ConfigFileId",$param) and $param["ConfigFileId"] !== null) {
            $this->ConfigFileId = $param["ConfigFileId"];
        }

        if (array_key_exists("ConfigFileSupportedClient",$param) and $param["ConfigFileSupportedClient"] !== null) {
            $this->ConfigFileSupportedClient = $param["ConfigFileSupportedClient"];
        }

        if (array_key_exists("ConfigFilePersistent",$param) and $param["ConfigFilePersistent"] !== null) {
            $this->ConfigFilePersistent = new ConfigFilePersistent();
            $this->ConfigFilePersistent->deserialize($param["ConfigFilePersistent"]);
        }
    }
}
