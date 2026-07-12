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
 * @method integer getId() 获取<p>配置文件发布id</p>
 * @method void setId(integer $Id) 设置<p>配置文件发布id</p>
 * @method string getName() 获取<p>配置文件发布名称</p>
 * @method void setName(string $Name) 设置<p>配置文件发布名称</p>
 * @method string getNamespace() 获取<p>配置文件发布命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>配置文件发布命名空间</p>
 * @method string getGroup() 获取<p>配置文件发布组</p>
 * @method void setGroup(string $Group) 设置<p>配置文件发布组</p>
 * @method string getFileName() 获取<p>配置文件发布文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>配置文件发布文件名称</p>
 * @method string getContent() 获取<p>配置文件发布内容</p>
 * @method void setContent(string $Content) 设置<p>配置文件发布内容</p>
 * @method string getComment() 获取<p>配置文件发布注释</p>
 * @method void setComment(string $Comment) 设置<p>配置文件发布注释</p>
 * @method string getMd5() 获取<p>配置文件发布Md5</p>
 * @method void setMd5(string $Md5) 设置<p>配置文件发布Md5</p>
 * @method integer getVersion() 获取<p>配置文件发布版本</p>
 * @method void setVersion(integer $Version) 设置<p>配置文件发布版本</p>
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
 * @method boolean getActive() 获取<p>是否生效</p>
 * @method void setActive(boolean $Active) 设置<p>是否生效</p>
 * @method string getFormat() 获取<p>格式</p>
 * @method void setFormat(string $Format) 设置<p>格式</p>
 * @method string getConfigFileId() 获取<p>配置文件ID</p>
 * @method void setConfigFileId(string $ConfigFileId) 设置<p>配置文件ID</p>
 * @method integer getConfigFileSupportedClient() 获取<p>配置文件类型</p>
 * @method void setConfigFileSupportedClient(integer $ConfigFileSupportedClient) 设置<p>配置文件类型</p>
 * @method ConfigFilePersistent getConfigFilePersistent() 获取<p>配置文件持久化</p>
 * @method void setConfigFilePersistent(ConfigFilePersistent $ConfigFilePersistent) 设置<p>配置文件持久化</p>
 * @method array getBetaLabels() 获取<p>灰度标签</p>
 * @method void setBetaLabels(array $BetaLabels) 设置<p>灰度标签</p>
 * @method string getReleaseType() 获取<p>发布类型</p><p>枚举值：</p><ul><li>gary： 灰度发布</li></ul>
 * @method void setReleaseType(string $ReleaseType) 设置<p>发布类型</p><p>枚举值：</p><ul><li>gary： 灰度发布</li></ul>
 */
class ConfigFileRelease extends AbstractModel
{
    /**
     * @var integer <p>配置文件发布id</p>
     */
    public $Id;

    /**
     * @var string <p>配置文件发布名称</p>
     */
    public $Name;

    /**
     * @var string <p>配置文件发布命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>配置文件发布组</p>
     */
    public $Group;

    /**
     * @var string <p>配置文件发布文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>配置文件发布内容</p>
     */
    public $Content;

    /**
     * @var string <p>配置文件发布注释</p>
     */
    public $Comment;

    /**
     * @var string <p>配置文件发布Md5</p>
     */
    public $Md5;

    /**
     * @var integer <p>配置文件发布版本</p>
     */
    public $Version;

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
     * @var boolean <p>是否生效</p>
     */
    public $Active;

    /**
     * @var string <p>格式</p>
     */
    public $Format;

    /**
     * @var string <p>配置文件ID</p>
     */
    public $ConfigFileId;

    /**
     * @var integer <p>配置文件类型</p>
     */
    public $ConfigFileSupportedClient;

    /**
     * @var ConfigFilePersistent <p>配置文件持久化</p>
     */
    public $ConfigFilePersistent;

    /**
     * @var array <p>灰度标签</p>
     */
    public $BetaLabels;

    /**
     * @var string <p>发布类型</p><p>枚举值：</p><ul><li>gary： 灰度发布</li></ul>
     */
    public $ReleaseType;

    /**
     * @param integer $Id <p>配置文件发布id</p>
     * @param string $Name <p>配置文件发布名称</p>
     * @param string $Namespace <p>配置文件发布命名空间</p>
     * @param string $Group <p>配置文件发布组</p>
     * @param string $FileName <p>配置文件发布文件名称</p>
     * @param string $Content <p>配置文件发布内容</p>
     * @param string $Comment <p>配置文件发布注释</p>
     * @param string $Md5 <p>配置文件发布Md5</p>
     * @param integer $Version <p>配置文件发布版本</p>
     * @param string $CreateTime <p>配置文件发布创建时间</p>
     * @param string $CreateBy <p>配置文件发布创建者</p>
     * @param string $ModifyTime <p>配置文件发布修改时间</p>
     * @param string $ModifyBy <p>配置文件发布修改者</p>
     * @param string $ReleaseDescription <p>发布描述</p>
     * @param boolean $Active <p>是否生效</p>
     * @param string $Format <p>格式</p>
     * @param string $ConfigFileId <p>配置文件ID</p>
     * @param integer $ConfigFileSupportedClient <p>配置文件类型</p>
     * @param ConfigFilePersistent $ConfigFilePersistent <p>配置文件持久化</p>
     * @param array $BetaLabels <p>灰度标签</p>
     * @param string $ReleaseType <p>发布类型</p><p>枚举值：</p><ul><li>gary： 灰度发布</li></ul>
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

        if (array_key_exists("BetaLabels",$param) and $param["BetaLabels"] !== null) {
            $this->BetaLabels = [];
            foreach ($param["BetaLabels"] as $key => $value){
                $obj = new BetaLabel();
                $obj->deserialize($value);
                array_push($this->BetaLabels, $obj);
            }
        }

        if (array_key_exists("ReleaseType",$param) and $param["ReleaseType"] !== null) {
            $this->ReleaseType = $param["ReleaseType"];
        }
    }
}
