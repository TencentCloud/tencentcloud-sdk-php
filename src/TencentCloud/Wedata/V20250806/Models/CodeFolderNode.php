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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索脚本文件树节点
 *
 * @method string getId() 获取唯一标识
 * @method void setId(string $Id) 设置唯一标识
 * @method string getTitle() 获取名称
 * @method void setTitle(string $Title) 设置名称
 * @method string getType() 获取类型 folder，script
 * @method void setType(string $Type) 设置类型 folder，script
 * @method boolean getIsLeaf() 获取是否叶子节点
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子节点
 * @method string getParams() 获取业务参数	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置业务参数	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessScope() 获取权限范围: SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessScope(string $AccessScope) 设置权限范围: SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取节点路径
 * @method void setPath(string $Path) 设置节点路径
 * @method string getOwnerUin() 获取目录/文件责任人uin
 * @method void setOwnerUin(string $OwnerUin) 设置目录/文件责任人uin
 * @method string getCreateUserUin() 获取创建人
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人
 * @method string getNodePermission() 获取当前用户对节点拥有的权限	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePermission(string $NodePermission) 设置当前用户对节点拥有的权限	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentFolderPath() 获取父文件夹路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeFolderNode extends AbstractModel
{
    /**
     * @var string 唯一标识
     */
    public $Id;

    /**
     * @var string 名称
     */
    public $Title;

    /**
     * @var string 类型 folder，script
     */
    public $Type;

    /**
     * @var boolean 是否叶子节点
     */
    public $IsLeaf;

    /**
     * @var string 业务参数	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 权限范围: SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessScope;

    /**
     * @var string 节点路径
     */
    public $Path;

    /**
     * @var string 目录/文件责任人uin
     */
    public $OwnerUin;

    /**
     * @var string 创建人
     */
    public $CreateUserUin;

    /**
     * @var string 当前用户对节点拥有的权限	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePermission;

    /**
     * @var array 子节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var string 父文件夹路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentFolderPath;

    /**
     * @param string $Id 唯一标识
     * @param string $Title 名称
     * @param string $Type 类型 folder，script
     * @param boolean $IsLeaf 是否叶子节点
     * @param string $Params 业务参数	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessScope 权限范围: SHARED, PRIVATE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 节点路径
     * @param string $OwnerUin 目录/文件责任人uin
     * @param string $CreateUserUin 创建人
     * @param string $NodePermission 当前用户对节点拥有的权限	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentFolderPath 父文件夹路径
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("NodePermission",$param) and $param["NodePermission"] !== null) {
            $this->NodePermission = $param["NodePermission"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new CodeFolderNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }
    }
}
