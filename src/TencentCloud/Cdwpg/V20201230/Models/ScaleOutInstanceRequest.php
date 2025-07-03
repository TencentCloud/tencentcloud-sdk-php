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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance请求参数结构体
 *
 * @method string getInstanceId() 获取集群名
 * @method void setInstanceId(string $InstanceId) 设置集群名
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method integer getScaleOutCount() 获取扩容节点数量
 * @method void setScaleOutCount(integer $ScaleOutCount) 设置扩容节点数量
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string 集群名
     */
    public $InstanceId;

    /**
     * @var string 节点类型
     */
    public $NodeType;

    /**
     * @var integer 扩容节点数量
     */
    public $ScaleOutCount;

    /**
     * @param string $InstanceId 集群名
     * @param string $NodeType 节点类型
     * @param integer $ScaleOutCount 扩容节点数量
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ScaleOutCount",$param) and $param["ScaleOutCount"] !== null) {
            $this->ScaleOutCount = $param["ScaleOutCount"];
        }
    }
}
