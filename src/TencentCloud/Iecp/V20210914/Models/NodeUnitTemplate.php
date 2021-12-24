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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeUnit模版信息
 *
 * @method integer getID() 获取NodeUnit模版ID
 * @method void setID(integer $ID) 设置NodeUnit模版ID
 * @method string getName() 获取NodeUnit模版名称
 * @method void setName(string $Name) 设置NodeUnit模版名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getNodeList() 获取包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeList(array $NodeList) 设置包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeGroups() 获取NodeGroup列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeGroups(array $NodeGroups) 设置NodeGroup列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class NodeUnitTemplate extends AbstractModel
{
    /**
     * @var integer NodeUnit模版ID
     */
    public $ID;

    /**
     * @var string NodeUnit模版名称
     */
    public $Name;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeList;

    /**
     * @var array NodeGroup列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeGroups;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param integer $ID NodeUnit模版ID
     * @param string $Name NodeUnit模版名称
     * @param string $Namespace 命名空间
     * @param string $Description 描述
     * @param array $NodeList 包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeGroups NodeGroup列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new NodeSimpleInfo();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }

        if (array_key_exists("NodeGroups",$param) and $param["NodeGroups"] !== null) {
            $this->NodeGroups = $param["NodeGroups"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
