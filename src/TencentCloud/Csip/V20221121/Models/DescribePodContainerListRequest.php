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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePodContainerList请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getPodUniqueID() 获取<p>Pod唯一标识ID</p>
 * @method void setPodUniqueID(string $PodUniqueID) 设置<p>Pod唯一标识ID</p>
 * @method Filter getFilter() 获取<p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。<br>NodeId：所属节点实例ID，精确匹配。<br>NodeType：节点类型，精确匹配。取值：SUPER、MASTER、WORKER。</p>
 * @method void setFilter(Filter $Filter) 设置<p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。<br>NodeId：所属节点实例ID，精确匹配。<br>NodeType：节点类型，精确匹配。取值：SUPER、MASTER、WORKER。</p>
 */
class DescribePodContainerListRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Pod唯一标识ID</p>
     */
    public $PodUniqueID;

    /**
     * @var Filter <p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。<br>NodeId：所属节点实例ID，精确匹配。<br>NodeType：节点类型，精确匹配。取值：SUPER、MASTER、WORKER。</p>
     */
    public $Filter;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $PodUniqueID <p>Pod唯一标识ID</p>
     * @param Filter $Filter <p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。<br>NodeId：所属节点实例ID，精确匹配。<br>NodeType：节点类型，精确匹配。取值：SUPER、MASTER、WORKER。</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("PodUniqueID",$param) and $param["PodUniqueID"] !== null) {
            $this->PodUniqueID = $param["PodUniqueID"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
