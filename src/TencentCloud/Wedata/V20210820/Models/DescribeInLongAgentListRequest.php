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
 * DescribeInLongAgentList请求参数结构体
 *
 * @method string getProjectId() 获取WeData项目ID
 * @method void setProjectId(string $ProjectId) 设置WeData项目ID
 * @method string getAgentId() 获取采集器ID
 * @method void setAgentId(string $AgentId) 设置采集器ID
 * @method string getAgentName() 获取Agent Name
 * @method void setAgentName(string $AgentName) 设置Agent Name
 * @method integer getAgentType() 获取集群类型，1：TKE Agent，2：BOSS SDK，默认：1，3：CVM，4：自建服务器 【传多个用逗号分割】
 * @method void setAgentType(integer $AgentType) 设置集群类型，1：TKE Agent，2：BOSS SDK，默认：1，3：CVM，4：自建服务器 【传多个用逗号分割】
 * @method string getStatus() 获取Agent状态(running运行中，initializing 操作中，failed心跳异常)
 * @method void setStatus(string $Status) 设置Agent状态(running运行中，initializing 操作中，failed心跳异常)
 * @method string getVpcId() 获取Vpc Id
 * @method void setVpcId(string $VpcId) 设置Vpc Id
 * @method integer getPageIndex() 获取分页页码，从1开始，默认：1
 * @method void setPageIndex(integer $PageIndex) 设置分页页码，从1开始，默认：1
 * @method integer getPageSize() 获取分页每页记录数，默认10
 * @method void setPageSize(integer $PageSize) 设置分页每页记录数，默认10
 * @method integer getLike() 获取名称搜索是否开启模糊匹配，1：开启，0：不开启（精确匹配）
 * @method void setLike(integer $Like) 设置名称搜索是否开启模糊匹配，1：开启，0：不开启（精确匹配）
 * @method string getAgentTypes() 获取agent类型【多个用逗号分隔】
 * @method void setAgentTypes(string $AgentTypes) 设置agent类型【多个用逗号分隔】
 */
class DescribeInLongAgentListRequest extends AbstractModel
{
    /**
     * @var string WeData项目ID
     */
    public $ProjectId;

    /**
     * @var string 采集器ID
     */
    public $AgentId;

    /**
     * @var string Agent Name
     */
    public $AgentName;

    /**
     * @var integer 集群类型，1：TKE Agent，2：BOSS SDK，默认：1，3：CVM，4：自建服务器 【传多个用逗号分割】
     */
    public $AgentType;

    /**
     * @var string Agent状态(running运行中，initializing 操作中，failed心跳异常)
     */
    public $Status;

    /**
     * @var string Vpc Id
     */
    public $VpcId;

    /**
     * @var integer 分页页码，从1开始，默认：1
     */
    public $PageIndex;

    /**
     * @var integer 分页每页记录数，默认10
     */
    public $PageSize;

    /**
     * @var integer 名称搜索是否开启模糊匹配，1：开启，0：不开启（精确匹配）
     */
    public $Like;

    /**
     * @var string agent类型【多个用逗号分隔】
     */
    public $AgentTypes;

    /**
     * @param string $ProjectId WeData项目ID
     * @param string $AgentId 采集器ID
     * @param string $AgentName Agent Name
     * @param integer $AgentType 集群类型，1：TKE Agent，2：BOSS SDK，默认：1，3：CVM，4：自建服务器 【传多个用逗号分割】
     * @param string $Status Agent状态(running运行中，initializing 操作中，failed心跳异常)
     * @param string $VpcId Vpc Id
     * @param integer $PageIndex 分页页码，从1开始，默认：1
     * @param integer $PageSize 分页每页记录数，默认10
     * @param integer $Like 名称搜索是否开启模糊匹配，1：开启，0：不开启（精确匹配）
     * @param string $AgentTypes agent类型【多个用逗号分隔】
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Like",$param) and $param["Like"] !== null) {
            $this->Like = $param["Like"];
        }

        if (array_key_exists("AgentTypes",$param) and $param["AgentTypes"] !== null) {
            $this->AgentTypes = $param["AgentTypes"];
        }
    }
}
