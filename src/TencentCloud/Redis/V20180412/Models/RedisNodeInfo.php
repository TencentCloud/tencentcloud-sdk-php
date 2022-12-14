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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述 Redis 实例的主节点或者副本节点信息。
 *
 * @method integer getNodeType() 获取节点类型。<ul><li>0：为主节点。</li><li>1：为副本节点。</li></ul>
 * @method void setNodeType(integer $NodeType) 设置节点类型。<ul><li>0：为主节点。</li><li>1：为副本节点。</li></ul>
 * @method integer getNodeId() 获取主节点或者副本节点的 ID。<ul><li>该参数用于创建 Redis 实例接口[CreateInstances](https://cloud.tencent.com/document/product/239/20026) 并不需要设置，而用于变更实例配置的接口 [UpgradeInstance](https://cloud.tencent.com/document/product/239/20013) 则需要设置。</li><li>该参数可使用接口 [DescribeInstances](https://cloud.tencent.com/document/product/239/20018) 获取Integer类型的节点 ID。</li></ul>
 * @method void setNodeId(integer $NodeId) 设置主节点或者副本节点的 ID。<ul><li>该参数用于创建 Redis 实例接口[CreateInstances](https://cloud.tencent.com/document/product/239/20026) 并不需要设置，而用于变更实例配置的接口 [UpgradeInstance](https://cloud.tencent.com/document/product/239/20013) 则需要设置。</li><li>该参数可使用接口 [DescribeInstances](https://cloud.tencent.com/document/product/239/20018) 获取Integer类型的节点 ID。</li></ul>
 * @method integer getZoneId() 获取主节点或者副本节点的可用区 ID。
 * @method void setZoneId(integer $ZoneId) 设置主节点或者副本节点的可用区 ID。
 * @method string getZoneName() 获取主节点或者副本节点的可用区名称。
 * @method void setZoneName(string $ZoneName) 设置主节点或者副本节点的可用区名称。
 */
class RedisNodeInfo extends AbstractModel
{
    /**
     * @var integer 节点类型。<ul><li>0：为主节点。</li><li>1：为副本节点。</li></ul>
     */
    public $NodeType;

    /**
     * @var integer 主节点或者副本节点的 ID。<ul><li>该参数用于创建 Redis 实例接口[CreateInstances](https://cloud.tencent.com/document/product/239/20026) 并不需要设置，而用于变更实例配置的接口 [UpgradeInstance](https://cloud.tencent.com/document/product/239/20013) 则需要设置。</li><li>该参数可使用接口 [DescribeInstances](https://cloud.tencent.com/document/product/239/20018) 获取Integer类型的节点 ID。</li></ul>
     */
    public $NodeId;

    /**
     * @var integer 主节点或者副本节点的可用区 ID。
     */
    public $ZoneId;

    /**
     * @var string 主节点或者副本节点的可用区名称。
     */
    public $ZoneName;

    /**
     * @param integer $NodeType 节点类型。<ul><li>0：为主节点。</li><li>1：为副本节点。</li></ul>
     * @param integer $NodeId 主节点或者副本节点的 ID。<ul><li>该参数用于创建 Redis 实例接口[CreateInstances](https://cloud.tencent.com/document/product/239/20026) 并不需要设置，而用于变更实例配置的接口 [UpgradeInstance](https://cloud.tencent.com/document/product/239/20013) 则需要设置。</li><li>该参数可使用接口 [DescribeInstances](https://cloud.tencent.com/document/product/239/20018) 获取Integer类型的节点 ID。</li></ul>
     * @param integer $ZoneId 主节点或者副本节点的可用区 ID。
     * @param string $ZoneName 主节点或者副本节点的可用区名称。
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
