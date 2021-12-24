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
 * NodeUnit信息
 *
 * @method integer getId() 获取NodeUnitId
 * @method void setId(integer $Id) 设置NodeUnitId
 * @method string getNodeUnitName() 获取NodeUnit名称
 * @method void setNodeUnitName(string $NodeUnitName) 设置NodeUnit名称
 * @method array getNodeList() 获取包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeList(array $NodeList) 设置包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeUnitInfo extends AbstractModel
{
    /**
     * @var integer NodeUnitId
     */
    public $Id;

    /**
     * @var string NodeUnit名称
     */
    public $NodeUnitName;

    /**
     * @var array 包含节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeList;

    /**
     * @param integer $Id NodeUnitId
     * @param string $NodeUnitName NodeUnit名称
     * @param array $NodeList 包含节点列表
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

        if (array_key_exists("NodeUnitName",$param) and $param["NodeUnitName"] !== null) {
            $this->NodeUnitName = $param["NodeUnitName"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new NodeUnitNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }
    }
}
