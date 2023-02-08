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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的主节点或者副本节点信息
 *
 * @method integer getNodeType() 获取节点类型，0 为主节点，1 为副本节点
 * @method void setNodeType(integer $NodeType) 设置节点类型，0 为主节点，1 为副本节点
 * @method integer getNodeId() 获取主节点或者副本节点的ID，创建时不需要传递此参数。
 * @method void setNodeId(integer $NodeId) 设置主节点或者副本节点的ID，创建时不需要传递此参数。
 * @method integer getZoneId() 获取主节点或者副本节点的可用区ID
 * @method void setZoneId(integer $ZoneId) 设置主节点或者副本节点的可用区ID
 * @method string getZoneName() 获取主节点或者副本节点的可用区名称
 * @method void setZoneName(string $ZoneName) 设置主节点或者副本节点的可用区名称
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var integer 节点类型，0 为主节点，1 为副本节点
     */
    public $NodeType;

    /**
     * @var integer 主节点或者副本节点的ID，创建时不需要传递此参数。
     */
    public $NodeId;

    /**
     * @var integer 主节点或者副本节点的可用区ID
     */
    public $ZoneId;

    /**
     * @var string 主节点或者副本节点的可用区名称
     */
    public $ZoneName;

    /**
     * @param integer $NodeType 节点类型，0 为主节点，1 为副本节点
     * @param integer $NodeId 主节点或者副本节点的ID，创建时不需要传递此参数。
     * @param integer $ZoneId 主节点或者副本节点的可用区ID
     * @param string $ZoneName 主节点或者副本节点的可用区名称
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
