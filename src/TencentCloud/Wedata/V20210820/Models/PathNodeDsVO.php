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
 * 数据开发-统一树结构返回属性
 *
 * @method string getId() 获取PathNode ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置PathNode ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取PathNode 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置PathNode 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取PathNode 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置PathNode 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取父节点唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父节点唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLeaf() 获取是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取子节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置子节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取业务参数 ,base64编译的json串，获取具体参数需要base64反编译
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置业务参数 ,base64编译的json串，获取具体参数需要base64反编译
注意：此字段可能返回 null，表示取不到有效值。
 */
class PathNodeDsVO extends AbstractModel
{
    /**
     * @var string PathNode ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string PathNode 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string PathNode 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 父节点唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var boolean 是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLeaf;

    /**
     * @var array 子节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var string 业务参数 ,base64编译的json串，获取具体参数需要base64反编译
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $Id PathNode ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title PathNode 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type PathNode 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 父节点唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLeaf 是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 子节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 业务参数 ,base64编译的json串，获取具体参数需要base64反编译
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

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new PathNodeDsVO();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
