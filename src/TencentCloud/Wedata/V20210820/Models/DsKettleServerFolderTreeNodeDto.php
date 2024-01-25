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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kettle 服务器文件树节点
 *
 * @method string getId() 获取节点编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置节点编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取带后缀名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置带后缀名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型  file 或者 folder
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型  file 或者 folder
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLeaf() 获取是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteCommand() 获取执行命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteCommand(string $ExecuteCommand) 设置执行命令
注意：此字段可能返回 null，表示取不到有效值。
 */
class DsKettleServerFolderTreeNodeDto extends AbstractModel
{
    /**
     * @var string 节点编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 带后缀名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 类型  file 或者 folder
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean 是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLeaf;

    /**
     * @var string 路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var array 子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var string 执行命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteCommand;

    /**
     * @param string $Id 节点编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 带后缀名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型  file 或者 folder
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLeaf 是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteCommand 执行命令
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new DsKettleServerFolderTreeNodeDto();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("ExecuteCommand",$param) and $param["ExecuteCommand"] !== null) {
            $this->ExecuteCommand = $param["ExecuteCommand"];
        }
    }
}
