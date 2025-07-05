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
 * 配置文件
 *
 * @method integer getId() 获取配置文件id
 * @method void setId(integer $Id) 设置配置文件id
 * @method string getName() 获取配置文件名称
 * @method void setName(string $Name) 设置配置文件名称
 * @method string getNamespace() 获取配置文件命名空间
 * @method void setNamespace(string $Namespace) 设置配置文件命名空间
 * @method string getGroup() 获取配置文件组
 * @method void setGroup(string $Group) 设置配置文件组
 * @method string getContent() 获取配置文件内容
 * @method void setContent(string $Content) 设置配置文件内容
 * @method string getFormat() 获取配置文件格式
 * @method void setFormat(string $Format) 设置配置文件格式
 * @method string getComment() 获取配置文件注释
 * @method void setComment(string $Comment) 设置配置文件注释
 * @method string getStatus() 获取配置文件状态
 * @method void setStatus(string $Status) 设置配置文件状态
 * @method array getTags() 获取配置文件标签数组
 * @method void setTags(array $Tags) 设置配置文件标签数组
 * @method string getCreateTime() 获取配置文件创建时间
 * @method void setCreateTime(string $CreateTime) 设置配置文件创建时间
 * @method string getCreateBy() 获取配置文件创建者
 * @method void setCreateBy(string $CreateBy) 设置配置文件创建者
 * @method string getModifyTime() 获取配置文件修改时间
 * @method void setModifyTime(string $ModifyTime) 设置配置文件修改时间
 * @method string getModifyBy() 获取配置文件修改者
 * @method void setModifyBy(string $ModifyBy) 设置配置文件修改者
 * @method string getReleaseTime() 获取配置文件发布时间
 * @method void setReleaseTime(string $ReleaseTime) 设置配置文件发布时间
 * @method string getReleaseBy() 获取配置文件发布者
 * @method void setReleaseBy(string $ReleaseBy) 设置配置文件发布者
 * @method integer getConfigFileSupportedClient() 获取配置文件类型
 * @method void setConfigFileSupportedClient(integer $ConfigFileSupportedClient) 设置配置文件类型
 * @method ConfigFilePersistent getConfigFilePersistent() 获取配置文件持久化
 * @method void setConfigFilePersistent(ConfigFilePersistent $ConfigFilePersistent) 设置配置文件持久化
 * @method boolean getEncrypted() 获取是否开启加密算法
 * @method void setEncrypted(boolean $Encrypted) 设置是否开启加密算法
 * @method string getEncryptAlgo() 获取加密算法
 * @method void setEncryptAlgo(string $EncryptAlgo) 设置加密算法
 */
class ConfigFile extends AbstractModel
{
    /**
     * @var integer 配置文件id
     */
    public $Id;

    /**
     * @var string 配置文件名称
     */
    public $Name;

    /**
     * @var string 配置文件命名空间
     */
    public $Namespace;

    /**
     * @var string 配置文件组
     */
    public $Group;

    /**
     * @var string 配置文件内容
     */
    public $Content;

    /**
     * @var string 配置文件格式
     */
    public $Format;

    /**
     * @var string 配置文件注释
     */
    public $Comment;

    /**
     * @var string 配置文件状态
     */
    public $Status;

    /**
     * @var array 配置文件标签数组
     */
    public $Tags;

    /**
     * @var string 配置文件创建时间
     */
    public $CreateTime;

    /**
     * @var string 配置文件创建者
     */
    public $CreateBy;

    /**
     * @var string 配置文件修改时间
     */
    public $ModifyTime;

    /**
     * @var string 配置文件修改者
     */
    public $ModifyBy;

    /**
     * @var string 配置文件发布时间
     */
    public $ReleaseTime;

    /**
     * @var string 配置文件发布者
     */
    public $ReleaseBy;

    /**
     * @var integer 配置文件类型
     */
    public $ConfigFileSupportedClient;

    /**
     * @var ConfigFilePersistent 配置文件持久化
     */
    public $ConfigFilePersistent;

    /**
     * @var boolean 是否开启加密算法
     */
    public $Encrypted;

    /**
     * @var string 加密算法
     */
    public $EncryptAlgo;

    /**
     * @param integer $Id 配置文件id
     * @param string $Name 配置文件名称
     * @param string $Namespace 配置文件命名空间
     * @param string $Group 配置文件组
     * @param string $Content 配置文件内容
     * @param string $Format 配置文件格式
     * @param string $Comment 配置文件注释
     * @param string $Status 配置文件状态
     * @param array $Tags 配置文件标签数组
     * @param string $CreateTime 配置文件创建时间
     * @param string $CreateBy 配置文件创建者
     * @param string $ModifyTime 配置文件修改时间
     * @param string $ModifyBy 配置文件修改者
     * @param string $ReleaseTime 配置文件发布时间
     * @param string $ReleaseBy 配置文件发布者
     * @param integer $ConfigFileSupportedClient 配置文件类型
     * @param ConfigFilePersistent $ConfigFilePersistent 配置文件持久化
     * @param boolean $Encrypted 是否开启加密算法
     * @param string $EncryptAlgo 加密算法
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
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

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("ReleaseBy",$param) and $param["ReleaseBy"] !== null) {
            $this->ReleaseBy = $param["ReleaseBy"];
        }

        if (array_key_exists("ConfigFileSupportedClient",$param) and $param["ConfigFileSupportedClient"] !== null) {
            $this->ConfigFileSupportedClient = $param["ConfigFileSupportedClient"];
        }

        if (array_key_exists("ConfigFilePersistent",$param) and $param["ConfigFilePersistent"] !== null) {
            $this->ConfigFilePersistent = new ConfigFilePersistent();
            $this->ConfigFilePersistent->deserialize($param["ConfigFilePersistent"]);
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("EncryptAlgo",$param) and $param["EncryptAlgo"] !== null) {
            $this->EncryptAlgo = $param["EncryptAlgo"];
        }
    }
}
