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
 * 服务别名结构信息
 *
 * @method string getAlias() 获取服务别名
 * @method void setAlias(string $Alias) 设置服务别名
 * @method string getAliasNamespace() 获取服务别名命名空间
 * @method void setAliasNamespace(string $AliasNamespace) 设置服务别名命名空间
 * @method string getService() 获取服务别名指向的服务名
 * @method void setService(string $Service) 设置服务别名指向的服务名
 * @method string getNamespace() 获取服务别名指向的服务命名空间
 * @method void setNamespace(string $Namespace) 设置服务别名指向的服务命名空间
 * @method string getComment() 获取服务别名的描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置服务别名的描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取服务别名创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置服务别名创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取服务别名修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置服务别名修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取服务别名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置服务别名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEditable() 获取该服务别名是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditable(boolean $Editable) 设置该服务别名是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
 */
class GovernanceAlias extends AbstractModel
{
    /**
     * @var string 服务别名
     */
    public $Alias;

    /**
     * @var string 服务别名命名空间
     */
    public $AliasNamespace;

    /**
     * @var string 服务别名指向的服务名
     */
    public $Service;

    /**
     * @var string 服务别名指向的服务命名空间
     */
    public $Namespace;

    /**
     * @var string 服务别名的描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 服务别名创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 服务别名修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 服务别名ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var boolean 该服务别名是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Editable;

    /**
     * @param string $Alias 服务别名
     * @param string $AliasNamespace 服务别名命名空间
     * @param string $Service 服务别名指向的服务名
     * @param string $Namespace 服务别名指向的服务命名空间
     * @param string $Comment 服务别名的描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 服务别名创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 服务别名修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 服务别名ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Editable 该服务别名是否可以编辑
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("AliasNamespace",$param) and $param["AliasNamespace"] !== null) {
            $this->AliasNamespace = $param["AliasNamespace"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }
    }
}
