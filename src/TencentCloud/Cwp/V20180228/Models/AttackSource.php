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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击溯源
 *
 * @method array getNodes() 获取攻击溯源节点描述
 * @method void setNodes(array $Nodes) 设置攻击溯源节点描述
 * @method array getEdges() 获取攻击溯源节点路径
 * @method void setEdges(array $Edges) 设置攻击溯源节点路径
 * @method string getEventInfoParam() 获取请求节点相关事件详情的参数
 * @method void setEventInfoParam(string $EventInfoParam) 设置请求节点相关事件详情的参数
 */
class AttackSource extends AbstractModel
{
    /**
     * @var array 攻击溯源节点描述
     */
    public $Nodes;

    /**
     * @var array 攻击溯源节点路径
     */
    public $Edges;

    /**
     * @var string 请求节点相关事件详情的参数
     */
    public $EventInfoParam;

    /**
     * @param array $Nodes 攻击溯源节点描述
     * @param array $Edges 攻击溯源节点路径
     * @param string $EventInfoParam 请求节点相关事件详情的参数
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
        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new AttackSourceNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("Edges",$param) and $param["Edges"] !== null) {
            $this->Edges = [];
            foreach ($param["Edges"] as $key => $value){
                $obj = new AttackSourceEdge();
                $obj->deserialize($value);
                array_push($this->Edges, $obj);
            }
        }

        if (array_key_exists("EventInfoParam",$param) and $param["EventInfoParam"] !== null) {
            $this->EventInfoParam = $param["EventInfoParam"];
        }
    }
}
