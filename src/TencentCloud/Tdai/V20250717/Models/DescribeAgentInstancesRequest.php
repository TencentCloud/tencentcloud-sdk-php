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
 * @method string getInstanceId() 获取<p>实例ID，为空时查询所有，如果填写则会根据InstanceId筛选</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，为空时查询所有，如果填写则会根据InstanceId筛选</p>
 * @method string getInstanceName() 获取<p>实例名，为空时查询所有，如果填写则会根据InstanceName筛选</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名，为空时查询所有，如果填写则会根据InstanceName筛选</p>
 * @method string getAgentId() 获取<p>智能体ID，为空时查询所有，如果填写则会根据AgentId筛选</p>
 * @method void setAgentId(string $AgentId) 设置<p>智能体ID，为空时查询所有，如果填写则会根据AgentId筛选</p>
 * @method string getAgentName() 获取<p>智能体名称，为空时查询所有，如果填写则会根据AgentName筛选</p>
 * @method void setAgentName(string $AgentName) 设置<p>智能体名称，为空时查询所有，如果填写则会根据AgentName筛选</p>
 * @method string getAgentInternalName() 获取<p>智能体类型，为空时查询所有，如果填写则会根据AgentName筛选</p>
 * @method void setAgentInternalName(string $AgentInternalName) 设置<p>智能体类型，为空时查询所有，如果填写则会根据AgentName筛选</p>
 * @method string getStatus() 获取<p>智能体实例状态，为空时查询所有，如果填写则会根据Status筛选</p>
 * @method void setStatus(string $Status) 设置<p>智能体实例状态，为空时查询所有，如果填写则会根据Status筛选</p>
 * @method array getTagFilter() 获取<p>标签过滤信息</p>
 * @method void setTagFilter(array $TagFilter) 设置<p>标签过滤信息</p>
 * @method string getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型</p>
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
     * @var string <p>实例ID，为空时查询所有，如果填写则会根据InstanceId筛选</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名，为空时查询所有，如果填写则会根据InstanceName筛选</p>
     */
    public $InstanceName;

    /**
     * @var string <p>智能体ID，为空时查询所有，如果填写则会根据AgentId筛选</p>
     */
    public $AgentId;

    /**
     * @var string <p>智能体名称，为空时查询所有，如果填写则会根据AgentName筛选</p>
     */
    public $AgentName;

    /**
     * @var string <p>智能体类型，为空时查询所有，如果填写则会根据AgentName筛选</p>
     */
    public $AgentInternalName;

    /**
     * @var string <p>智能体实例状态，为空时查询所有，如果填写则会根据Status筛选</p>
     */
    public $Status;

    /**
     * @var array <p>标签过滤信息</p>
     */
    public $TagFilter;

    /**
     * @var string <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @param integer $Offset 查询开始位置
     * @param integer $Limit 列表查询数量
     * @param string $InstanceId <p>实例ID，为空时查询所有，如果填写则会根据InstanceId筛选</p>
     * @param string $InstanceName <p>实例名，为空时查询所有，如果填写则会根据InstanceName筛选</p>
     * @param string $AgentId <p>智能体ID，为空时查询所有，如果填写则会根据AgentId筛选</p>
     * @param string $AgentName <p>智能体名称，为空时查询所有，如果填写则会根据AgentName筛选</p>
     * @param string $AgentInternalName <p>智能体类型，为空时查询所有，如果填写则会根据AgentName筛选</p>
     * @param string $Status <p>智能体实例状态，为空时查询所有，如果填写则会根据Status筛选</p>
     * @param array $TagFilter <p>标签过滤信息</p>
     * @param string $InstanceType <p>实例类型</p>
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
