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
 * 指定NodeGroup中查询NodeUnit模版
 *
 * @method integer getID() 获取模版ID
 * @method void setID(integer $ID) 设置模版ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getNodeList() 获取包含节点列表
 * @method void setNodeList(array $NodeList) 设置包含节点列表
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getRelation() 获取是否关联
 * @method void setRelation(boolean $Relation) 设置是否关联
 */
class NodeGroupNodeUnitTemplateInfo extends AbstractModel
{
    /**
     * @var integer 模版ID
     */
    public $ID;

    /**
     * @var string 名称
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
     */
    public $NodeList;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否关联
     */
    public $Relation;

    /**
     * @param integer $ID 模版ID
     * @param string $Name 名称
     * @param string $Namespace 命名空间
     * @param string $Description 描述
     * @param array $NodeList 包含节点列表
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param boolean $Relation 是否关联
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
