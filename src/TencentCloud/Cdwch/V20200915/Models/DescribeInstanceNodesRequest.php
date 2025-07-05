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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodes请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method string getNodeRole() 获取集群角色类型，“DATA” 为数据节点、“COMMON” 为 ZooKeeper 节点，默认为 "DATA" 数据节点。
 * @method void setNodeRole(string $NodeRole) 设置集群角色类型，“DATA” 为数据节点、“COMMON” 为 ZooKeeper 节点，默认为 "DATA" 数据节点。
 * @method integer getOffset() 获取分页参数，第一页为0，第二页为10
 * @method void setOffset(integer $Offset) 设置分页参数，第一页为0，第二页为10
 * @method integer getLimit() 获取分页参数，分页步长，默认为10
 * @method void setLimit(integer $Limit) 设置分页参数，分页步长，默认为10
 * @method string getDisplayPolicy() 获取展现策略，All时显示所有
 * @method void setDisplayPolicy(string $DisplayPolicy) 设置展现策略，All时显示所有
 * @method boolean getForceAll() 获取当true的时候返回所有节点，即Limit无限大
 * @method void setForceAll(boolean $ForceAll) 设置当true的时候返回所有节点，即Limit无限大
 */
class DescribeInstanceNodesRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var string 集群角色类型，“DATA” 为数据节点、“COMMON” 为 ZooKeeper 节点，默认为 "DATA" 数据节点。
     */
    public $NodeRole;

    /**
     * @var integer 分页参数，第一页为0，第二页为10
     */
    public $Offset;

    /**
     * @var integer 分页参数，分页步长，默认为10
     */
    public $Limit;

    /**
     * @var string 展现策略，All时显示所有
     */
    public $DisplayPolicy;

    /**
     * @var boolean 当true的时候返回所有节点，即Limit无限大
     */
    public $ForceAll;

    /**
     * @param string $InstanceId 集群实例ID
     * @param string $NodeRole 集群角色类型，“DATA” 为数据节点、“COMMON” 为 ZooKeeper 节点，默认为 "DATA" 数据节点。
     * @param integer $Offset 分页参数，第一页为0，第二页为10
     * @param integer $Limit 分页参数，分页步长，默认为10
     * @param string $DisplayPolicy 展现策略，All时显示所有
     * @param boolean $ForceAll 当true的时候返回所有节点，即Limit无限大
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

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DisplayPolicy",$param) and $param["DisplayPolicy"] !== null) {
            $this->DisplayPolicy = $param["DisplayPolicy"];
        }

        if (array_key_exists("ForceAll",$param) and $param["ForceAll"] !== null) {
            $this->ForceAll = $param["ForceAll"];
        }
    }
}
