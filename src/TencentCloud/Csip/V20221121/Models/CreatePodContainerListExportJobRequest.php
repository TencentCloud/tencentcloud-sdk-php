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
 * CreatePodContainerListExportJob请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getPodUniqueID() 获取<p>Pod唯一ID</p>
 * @method void setPodUniqueID(string $PodUniqueID) 设置<p>Pod唯一ID</p>
 * @method string getClusterCaMD5() 获取<p>集群CA证书MD5（用于查节点信息）</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) 设置<p>集群CA证书MD5（用于查节点信息）</p>
 * @method Filter getFilter() 获取<p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。</p>
 * @method void setFilter(Filter $Filter) 设置<p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。</p>
 * @method array getExportFields() 获取<p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ContainerId：容器ID<br>ContainerName：容器名称<br>RunStatus：运行状态<br>NodeId：节点ID<br>NodeType：节点类型<br>ImageId：镜像ID<br>ImageName：镜像名称<br>IsolateStatus：隔离状态</p>
 * @method void setExportFields(array $ExportFields) 设置<p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ContainerId：容器ID<br>ContainerName：容器名称<br>RunStatus：运行状态<br>NodeId：节点ID<br>NodeType：节点类型<br>ImageId：镜像ID<br>ImageName：镜像名称<br>IsolateStatus：隔离状态</p>
 */
class CreatePodContainerListExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Pod唯一ID</p>
     */
    public $PodUniqueID;

    /**
     * @var string <p>集群CA证书MD5（用于查节点信息）</p>
     */
    public $ClusterCaMD5;

    /**
     * @var Filter <p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。</p>
     */
    public $Filter;

    /**
     * @var array <p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ContainerId：容器ID<br>ContainerName：容器名称<br>RunStatus：运行状态<br>NodeId：节点ID<br>NodeType：节点类型<br>ImageId：镜像ID<br>ImageName：镜像名称<br>IsolateStatus：隔离状态</p>
     */
    public $ExportFields;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $PodUniqueID <p>Pod唯一ID</p>
     * @param string $ClusterCaMD5 <p>集群CA证书MD5（用于查节点信息）</p>
     * @param Filter $Filter <p>通用过滤条件列表。支持的过滤字段：<br>ContainerId：容器ID，精确匹配。<br>ContainerName：容器名称，模糊匹配。<br>RunStatus：容器运行状态，精确匹配。取值：RUNNING、PAUSED、STOPPED、CREATED、DESTROYED、RESTARTING、REMOVING、DEAD、UNKNOWN。<br>ImageId：镜像ID，精确匹配。<br>ImageName：镜像名称，模糊匹配。<br>IsolateStatus：隔离状态，精确匹配。取值：NORMAL（未隔离）、ISOLATED（已隔离）、ISOLATING（隔离中）、ISOLATE_FAILED（隔离失败）、RESTORING（解除隔离中）、RESTORE_FAILED（解除隔离失败）。<br>NodeUniqueId：所属节点唯一ID，精确匹配（NodeAssetId 为等价别名）。<br>UUID：主机UUID，精确匹配。</p>
     * @param array $ExportFields <p>导出字段列表（不传则导出全部字段）<br>枚举值：<br>ContainerId：容器ID<br>ContainerName：容器名称<br>RunStatus：运行状态<br>NodeId：节点ID<br>NodeType：节点类型<br>ImageId：镜像ID<br>ImageName：镜像名称<br>IsolateStatus：隔离状态</p>
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

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ExportFields",$param) and $param["ExportFields"] !== null) {
            $this->ExportFields = $param["ExportFields"];
        }
    }
}
