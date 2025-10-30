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
 * 配置文件发布历史
 *
 * @method integer getId() 获取配置文件发布历史记录id
 * @method void setId(integer $Id) 设置配置文件发布历史记录id
 * @method string getName() 获取配置文件发布历史名称
 * @method void setName(string $Name) 设置配置文件发布历史名称
 * @method string getNamespace() 获取配置文件发布历史命名空间
 * @method void setNamespace(string $Namespace) 设置配置文件发布历史命名空间
 * @method string getGroup() 获取配置文件发布历史组
 * @method void setGroup(string $Group) 设置配置文件发布历史组
 * @method string getFileName() 获取配置文件发布历史名称
 * @method void setFileName(string $FileName) 设置配置文件发布历史名称
 * @method string getContent() 获取配置文件发布历史内容
 * @method void setContent(string $Content) 设置配置文件发布历史内容
 * @method string getFormat() 获取配置文件发布历史格式
 * @method void setFormat(string $Format) 设置配置文件发布历史格式
 * @method string getComment() 获取配置文件发布历史注释
 * @method void setComment(string $Comment) 设置配置文件发布历史注释
 * @method string getMd5() 获取配置文件发布历史Md5
 * @method void setMd5(string $Md5) 设置配置文件发布历史Md5
 * @method string getType() 获取配置文件发布历史类型
 * @method void setType(string $Type) 设置配置文件发布历史类型
 * @method string getStatus() 获取配置文件发布历史状态
 * @method void setStatus(string $Status) 设置配置文件发布历史状态
 * @method array getTags() 获取配置文件发布历史标签组
 * @method void setTags(array $Tags) 设置配置文件发布历史标签组
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
 * @method string getReleaseReason() 获取原因，用于失败时原因展示
 * @method void setReleaseReason(string $ReleaseReason) 设置原因，用于失败时原因展示
 * @method integer getConfigFileSupportedClient() 获取配置文件类型

 * @method void setConfigFileSupportedClient(integer $ConfigFileSupportedClient) 设置配置文件类型

 * @method ConfigFilePersistent getConfigFilePersistent() 获取配置文件持久化
 * @method void setConfigFilePersistent(ConfigFilePersistent $ConfigFilePersistent) 设置配置文件持久化
 */
class ConfigFileReleaseHistory extends AbstractModel
{
    /**
     * @var integer 配置文件发布历史记录id
     */
    public $Id;

    /**
     * @var string 配置文件发布历史名称
     */
    public $Name;

    /**
     * @var string 配置文件发布历史命名空间
     */
    public $Namespace;

    /**
     * @var string 配置文件发布历史组
     */
    public $Group;

    /**
     * @var string 配置文件发布历史名称
     */
    public $FileName;

    /**
     * @var string 配置文件发布历史内容
     */
    public $Content;

    /**
     * @var string 配置文件发布历史格式
     */
    public $Format;

    /**
     * @var string 配置文件发布历史注释
     */
    public $Comment;

    /**
     * @var string 配置文件发布历史Md5
     */
    public $Md5;

    /**
     * @var string 配置文件发布历史类型
     */
    public $Type;

    /**
     * @var string 配置文件发布历史状态
     */
    public $Status;

    /**
     * @var array 配置文件发布历史标签组
     */
    public $Tags;

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
     * @var string 原因，用于失败时原因展示
     */
    public $ReleaseReason;

    /**
     * @var integer 配置文件类型

     */
    public $ConfigFileSupportedClient;

    /**
     * @var ConfigFilePersistent 配置文件持久化
     */
    public $ConfigFilePersistent;

    /**
     * @param integer $Id 配置文件发布历史记录id
     * @param string $Name 配置文件发布历史名称
     * @param string $Namespace 配置文件发布历史命名空间
     * @param string $Group 配置文件发布历史组
     * @param string $FileName 配置文件发布历史名称
     * @param string $Content 配置文件发布历史内容
     * @param string $Format 配置文件发布历史格式
     * @param string $Comment 配置文件发布历史注释
     * @param string $Md5 配置文件发布历史Md5
     * @param string $Type 配置文件发布历史类型
     * @param string $Status 配置文件发布历史状态
     * @param array $Tags 配置文件发布历史标签组
     * @param string $CreateTime 配置文件发布创建时间
     * @param string $CreateBy 配置文件发布创建者
     * @param string $ModifyTime 配置文件发布修改时间
     * @param string $ModifyBy 配置文件发布修改者
     * @param string $ReleaseDescription 发布描述
     * @param string $ReleaseReason 原因，用于失败时原因展示
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

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ConfigFileTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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

        if (array_key_exists("ReleaseReason",$param) and $param["ReleaseReason"] !== null) {
            $this->ReleaseReason = $param["ReleaseReason"];
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
