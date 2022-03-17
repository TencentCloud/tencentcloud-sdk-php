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
 * ModifyEdgeDracoNode请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置边缘单元ID
 * @method integer getNodeId() 获取边缘节点ID
 * @method void setNodeId(integer $NodeId) 设置边缘节点ID
 * @method DracoNodeInfo getNodeInfo() 获取节点信息
 * @method void setNodeInfo(DracoNodeInfo $NodeInfo) 设置节点信息
 * @method boolean getIsReset() 获取是否重置draco设备
 * @method void setIsReset(boolean $IsReset) 设置是否重置draco设备
 */
class ModifyEdgeDracoNodeRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer 边缘节点ID
     */
    public $NodeId;

    /**
     * @var DracoNodeInfo 节点信息
     */
    public $NodeInfo;

    /**
     * @var boolean 是否重置draco设备
     */
    public $IsReset;

    /**
     * @param integer $EdgeUnitId 边缘单元ID
     * @param integer $NodeId 边缘节点ID
     * @param DracoNodeInfo $NodeInfo 节点信息
     * @param boolean $IsReset 是否重置draco设备
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = new DracoNodeInfo();
            $this->NodeInfo->deserialize($param["NodeInfo"]);
        }

        if (array_key_exists("IsReset",$param) and $param["IsReset"] !== null) {
            $this->IsReset = $param["IsReset"];
        }
    }
}
