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
 * 配置文件
 *
 * @method integer getId() 获取配置文件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置配置文件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取配置文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置配置文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取配置文件命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置配置文件命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroup() 获取配置文件组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(string $Group) 设置配置文件组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取配置文件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置配置文件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormat() 获取配置文件格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置配置文件格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取配置文件注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置配置文件注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取配置文件状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置配置文件状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取配置文件标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置配置文件标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取配置文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置配置文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateBy() 获取配置文件创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateBy(string $CreateBy) 设置配置文件创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取配置文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置配置文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyBy() 获取配置文件修改者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyBy(string $ModifyBy) 设置配置文件修改者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseTime() 获取配置文件发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseTime(string $ReleaseTime) 设置配置文件发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseBy() 获取配置文件发布者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseBy(string $ReleaseBy) 设置配置文件发布者
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigFile extends AbstractModel
{
    /**
     * @var integer 配置文件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 配置文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 配置文件命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 配置文件组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @var string 配置文件内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 配置文件格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @var string 配置文件注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 配置文件状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 配置文件标签数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 配置文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 配置文件创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateBy;

    /**
     * @var string 配置文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 配置文件修改者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyBy;

    /**
     * @var string 配置文件发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseTime;

    /**
     * @var string 配置文件发布者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseBy;

    /**
     * @param integer $Id 配置文件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 配置文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 配置文件命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Group 配置文件组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 配置文件内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Format 配置文件格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 配置文件注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 配置文件状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 配置文件标签数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 配置文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateBy 配置文件创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 配置文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyBy 配置文件修改者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseTime 配置文件发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseBy 配置文件发布者
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
    }
}
