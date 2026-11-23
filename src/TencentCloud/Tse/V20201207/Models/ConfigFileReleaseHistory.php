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
 * @method integer getId() 获取<p>配置文件发布历史记录id</p>
 * @method void setId(integer $Id) 设置<p>配置文件发布历史记录id</p>
 * @method string getName() 获取<p>配置文件发布历史名称</p>
 * @method void setName(string $Name) 设置<p>配置文件发布历史名称</p>
 * @method string getNamespace() 获取<p>配置文件发布历史命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>配置文件发布历史命名空间</p>
 * @method string getGroup() 获取<p>配置文件发布历史组</p>
 * @method void setGroup(string $Group) 设置<p>配置文件发布历史组</p>
 * @method string getFileName() 获取<p>配置文件发布历史名称</p>
 * @method void setFileName(string $FileName) 设置<p>配置文件发布历史名称</p>
 * @method string getContent() 获取<p>配置文件发布历史内容</p>
 * @method void setContent(string $Content) 设置<p>配置文件发布历史内容</p>
 * @method string getFormat() 获取<p>配置文件发布历史格式</p>
 * @method void setFormat(string $Format) 设置<p>配置文件发布历史格式</p>
 * @method string getComment() 获取<p>配置文件发布历史注释</p>
 * @method void setComment(string $Comment) 设置<p>配置文件发布历史注释</p>
 * @method string getMd5() 获取<p>配置文件发布历史Md5</p>
 * @method void setMd5(string $Md5) 设置<p>配置文件发布历史Md5</p>
 * @method string getType() 获取<p>配置文件发布历史类型</p>
 * @method void setType(string $Type) 设置<p>配置文件发布历史类型</p>
 * @method string getStatus() 获取<p>配置文件发布历史状态</p>
 * @method void setStatus(string $Status) 设置<p>配置文件发布历史状态</p>
 * @method array getTags() 获取<p>配置文件发布历史标签组</p>
 * @method void setTags(array $Tags) 设置<p>配置文件发布历史标签组</p>
 * @method string getCreateTime() 获取<p>配置文件发布创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>配置文件发布创建时间</p>
 * @method string getCreateBy() 获取<p>配置文件发布创建者</p>
 * @method void setCreateBy(string $CreateBy) 设置<p>配置文件发布创建者</p>
 * @method string getModifyTime() 获取<p>配置文件发布修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>配置文件发布修改时间</p>
 * @method string getModifyBy() 获取<p>配置文件发布修改者</p>
 * @method void setModifyBy(string $ModifyBy) 设置<p>配置文件发布修改者</p>
 * @method string getReleaseDescription() 获取<p>发布描述</p>
 * @method void setReleaseDescription(string $ReleaseDescription) 设置<p>发布描述</p>
 * @method string getReleaseReason() 获取<p>原因，用于失败时原因展示</p>
 * @method void setReleaseReason(string $ReleaseReason) 设置<p>原因，用于失败时原因展示</p>
 * @method integer getConfigFileSupportedClient() 获取<p>配置文件类型</p>
 * @method void setConfigFileSupportedClient(integer $ConfigFileSupportedClient) 设置<p>配置文件类型</p>
 * @method ConfigFilePersistent getConfigFilePersistent() 获取<p>配置文件持久化</p>
 * @method void setConfigFilePersistent(ConfigFilePersistent $ConfigFilePersistent) 设置<p>配置文件持久化</p>
 */
class ConfigFileReleaseHistory extends AbstractModel
{
    /**
     * @var integer <p>配置文件发布历史记录id</p>
     */
    public $Id;

    /**
     * @var string <p>配置文件发布历史名称</p>
     */
    public $Name;

    /**
     * @var string <p>配置文件发布历史命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>配置文件发布历史组</p>
     */
    public $Group;

    /**
     * @var string <p>配置文件发布历史名称</p>
     */
    public $FileName;

    /**
     * @var string <p>配置文件发布历史内容</p>
     */
    public $Content;

    /**
     * @var string <p>配置文件发布历史格式</p>
     */
    public $Format;

    /**
     * @var string <p>配置文件发布历史注释</p>
     */
    public $Comment;

    /**
     * @var string <p>配置文件发布历史Md5</p>
     */
    public $Md5;

    /**
     * @var string <p>配置文件发布历史类型</p>
     */
    public $Type;

    /**
     * @var string <p>配置文件发布历史状态</p>
     */
    public $Status;

    /**
     * @var array <p>配置文件发布历史标签组</p>
     */
    public $Tags;

    /**
     * @var string <p>配置文件发布创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>配置文件发布创建者</p>
     */
    public $CreateBy;

    /**
     * @var string <p>配置文件发布修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>配置文件发布修改者</p>
     */
    public $ModifyBy;

    /**
     * @var string <p>发布描述</p>
     */
    public $ReleaseDescription;

    /**
     * @var string <p>原因，用于失败时原因展示</p>
     */
    public $ReleaseReason;

    /**
     * @var integer <p>配置文件类型</p>
     */
    public $ConfigFileSupportedClient;

    /**
     * @var ConfigFilePersistent <p>配置文件持久化</p>
     */
    public $ConfigFilePersistent;

    /**
     * @param integer $Id <p>配置文件发布历史记录id</p>
     * @param string $Name <p>配置文件发布历史名称</p>
     * @param string $Namespace <p>配置文件发布历史命名空间</p>
     * @param string $Group <p>配置文件发布历史组</p>
     * @param string $FileName <p>配置文件发布历史名称</p>
     * @param string $Content <p>配置文件发布历史内容</p>
     * @param string $Format <p>配置文件发布历史格式</p>
     * @param string $Comment <p>配置文件发布历史注释</p>
     * @param string $Md5 <p>配置文件发布历史Md5</p>
     * @param string $Type <p>配置文件发布历史类型</p>
     * @param string $Status <p>配置文件发布历史状态</p>
     * @param array $Tags <p>配置文件发布历史标签组</p>
     * @param string $CreateTime <p>配置文件发布创建时间</p>
     * @param string $CreateBy <p>配置文件发布创建者</p>
     * @param string $ModifyTime <p>配置文件发布修改时间</p>
     * @param string $ModifyBy <p>配置文件发布修改者</p>
     * @param string $ReleaseDescription <p>发布描述</p>
     * @param string $ReleaseReason <p>原因，用于失败时原因展示</p>
     * @param integer $ConfigFileSupportedClient <p>配置文件类型</p>
     * @param ConfigFilePersistent $ConfigFilePersistent <p>配置文件持久化</p>
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
