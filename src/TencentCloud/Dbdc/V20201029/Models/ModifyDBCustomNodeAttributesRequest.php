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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBCustomNodeAttributes请求参数结构体
 *
 * @method string getNodeId() 获取<p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
 * @method string getHostName() 获取<p>主机 HostName</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 HostName 参数说明。</p><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
 * @method void setHostName(string $HostName) 设置<p>主机 HostName</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 HostName 参数说明。</p><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
 * @method string getNodeName() 获取<p>节点名称</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 NodeName 参数说明。</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 NodeName 参数说明。</p>
 * @method boolean getAutoReboot() 获取<p>修改实例 HostName 是否自动重启实例，不传默认自动重启。</p><p>枚举值：</p><ul><li>true： 修改主机 HostName，并自动重启主机</li><li>false： 修改主机 HostName，不自动重启主机，需要手动重启使新主机 HostName 生效</li></ul><p>默认值：true</p>
 * @method void setAutoReboot(boolean $AutoReboot) 设置<p>修改实例 HostName 是否自动重启实例，不传默认自动重启。</p><p>枚举值：</p><ul><li>true： 修改主机 HostName，并自动重启主机</li><li>false： 修改主机 HostName，不自动重启主机，需要手动重启使新主机 HostName 生效</li></ul><p>默认值：true</p>
 */
class ModifyDBCustomNodeAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
     */
    public $NodeId;

    /**
     * @var string <p>主机 HostName</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 HostName 参数说明。</p><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
     */
    public $HostName;

    /**
     * @var string <p>节点名称</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 NodeName 参数说明。</p>
     */
    public $NodeName;

    /**
     * @var boolean <p>修改实例 HostName 是否自动重启实例，不传默认自动重启。</p><p>枚举值：</p><ul><li>true： 修改主机 HostName，并自动重启主机</li><li>false： 修改主机 HostName，不自动重启主机，需要手动重启使新主机 HostName 生效</li></ul><p>默认值：true</p>
     */
    public $AutoReboot;

    /**
     * @param string $NodeId <p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
     * @param string $HostName <p>主机 HostName</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 HostName 参数说明。</p><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
     * @param string $NodeName <p>节点名称</p><p>入参限制：参数设置规则参见：<a href="https://cloud.tencent.com/document/api/1322/132929">创建 DB Custom 节点接口</a>的 NodeName 参数说明。</p>
     * @param boolean $AutoReboot <p>修改实例 HostName 是否自动重启实例，不传默认自动重启。</p><p>枚举值：</p><ul><li>true： 修改主机 HostName，并自动重启主机</li><li>false： 修改主机 HostName，不自动重启主机，需要手动重启使新主机 HostName 生效</li></ul><p>默认值：true</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("AutoReboot",$param) and $param["AutoReboot"] !== null) {
            $this->AutoReboot = $param["AutoReboot"];
        }
    }
}
