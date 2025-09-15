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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentInstances请求参数结构体
 *
 * @method integer getOffset() 获取查询开始位置
 * @method void setOffset(integer $Offset) 设置查询开始位置
 * @method integer getLimit() 获取列表查询数量
 * @method void setLimit(integer $Limit) 设置列表查询数量
 * @method string getInstanceId() 获取实例ID，为空时查询所有，如果填写则会根据InstanceId筛选
 * @method void setInstanceId(string $InstanceId) 设置实例ID，为空时查询所有，如果填写则会根据InstanceId筛选
 * @method string getInstanceName() 获取实例名，为空时查询所有，如果填写则会根据InstanceName筛选
 * @method void setInstanceName(string $InstanceName) 设置实例名，为空时查询所有，如果填写则会根据InstanceName筛选
 * @method string getAgentId() 获取智能体ID，为空时查询所有，如果填写则会根据AgentId筛选
 * @method void setAgentId(string $AgentId) 设置智能体ID，为空时查询所有，如果填写则会根据AgentId筛选
 * @method string getAgentName() 获取智能体名称，为空时查询所有，如果填写则会根据AgentName筛选
 * @method void setAgentName(string $AgentName) 设置智能体名称，为空时查询所有，如果填写则会根据AgentName筛选
 * @method string getAgentInternalName() 获取智能体类型，为空时查询所有，如果填写则会根据AgentName筛选
 * @method void setAgentInternalName(string $AgentInternalName) 设置智能体类型，为空时查询所有，如果填写则会根据AgentName筛选
 * @method string getStatus() 获取智能体实例状态，为空时查询所有，如果填写则会根据Status筛选
 * @method void setStatus(string $Status) 设置智能体实例状态，为空时查询所有，如果填写则会根据Status筛选
 * @method array getTagFilter() 获取标签过滤信息
 * @method void setTagFilter(array $TagFilter) 设置标签过滤信息
 */
class DescribeAgentInstancesRequest extends AbstractModel
{
    /**
     * @var integer 查询开始位置
     */
    public $Offset;

    /**
     * @var integer 列表查询数量
     */
    public $Limit;

    /**
     * @var string 实例ID，为空时查询所有，如果填写则会根据InstanceId筛选
     */
    public $InstanceId;

    /**
     * @var string 实例名，为空时查询所有，如果填写则会根据InstanceName筛选
     */
    public $InstanceName;

    /**
     * @var string 智能体ID，为空时查询所有，如果填写则会根据AgentId筛选
     */
    public $AgentId;

    /**
     * @var string 智能体名称，为空时查询所有，如果填写则会根据AgentName筛选
     */
    public $AgentName;

    /**
     * @var string 智能体类型，为空时查询所有，如果填写则会根据AgentName筛选
     */
    public $AgentInternalName;

    /**
     * @var string 智能体实例状态，为空时查询所有，如果填写则会根据Status筛选
     */
    public $Status;

    /**
     * @var array 标签过滤信息
     */
    public $TagFilter;

    /**
     * @param integer $Offset 查询开始位置
     * @param integer $Limit 列表查询数量
     * @param string $InstanceId 实例ID，为空时查询所有，如果填写则会根据InstanceId筛选
     * @param string $InstanceName 实例名，为空时查询所有，如果填写则会根据InstanceName筛选
     * @param string $AgentId 智能体ID，为空时查询所有，如果填写则会根据AgentId筛选
     * @param string $AgentName 智能体名称，为空时查询所有，如果填写则会根据AgentName筛选
     * @param string $AgentInternalName 智能体类型，为空时查询所有，如果填写则会根据AgentName筛选
     * @param string $Status 智能体实例状态，为空时查询所有，如果填写则会根据Status筛选
     * @param array $TagFilter 标签过滤信息
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AgentInternalName",$param) and $param["AgentInternalName"] !== null) {
            $this->AgentInternalName = $param["AgentInternalName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagFilter",$param) and $param["TagFilter"] !== null) {
            $this->TagFilter = [];
            foreach ($param["TagFilter"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilter, $obj);
            }
        }
    }
}
