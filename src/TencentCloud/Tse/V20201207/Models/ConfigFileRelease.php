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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置文件发布
 *
 * @method integer getId() 获取配置文件发布id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置配置文件发布id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取配置文件发布名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置配置文件发布名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取配置文件发布命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置配置文件发布命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroup() 获取配置文件发布组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(string $Group) 设置配置文件发布组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取配置文件发布文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置配置文件发布文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取配置文件发布内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置配置文件发布内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取配置文件发布注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置配置文件发布注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取配置文件发布Md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置配置文件发布Md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersion() 获取配置文件发布版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置配置文件发布版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取配置文件发布创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置配置文件发布创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateBy() 获取配置文件发布创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateBy(string $CreateBy) 设置配置文件发布创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取配置文件发布修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置配置文件发布修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyBy() 获取配置文件发布修改者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyBy(string $ModifyBy) 设置配置文件发布修改者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseDescription() 获取发布描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseDescription(string $ReleaseDescription) 设置发布描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getActive() 获取是否生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActive(boolean $Active) 设置是否生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormat() 获取格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigFileRelease extends AbstractModel
{
    /**
     * @var integer 配置文件发布id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 配置文件发布名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 配置文件发布命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 配置文件发布组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @var string 配置文件发布文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 配置文件发布内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 配置文件发布注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 配置文件发布Md5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var integer 配置文件发布版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 配置文件发布创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 配置文件发布创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateBy;

    /**
     * @var string 配置文件发布修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 配置文件发布修改者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyBy;

    /**
     * @var string 发布描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseDescription;

    /**
     * @var boolean 是否生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Active;

    /**
     * @var string 格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @param integer $Id 配置文件发布id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 配置文件发布名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 配置文件发布命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Group 配置文件发布组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 配置文件发布文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 配置文件发布内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 配置文件发布注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 配置文件发布Md5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Version 配置文件发布版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 配置文件发布创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateBy 配置文件发布创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 配置文件发布修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyBy 配置文件发布修改者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseDescription 发布描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Active 是否生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Format 格式
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
