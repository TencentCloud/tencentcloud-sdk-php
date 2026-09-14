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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GA访问日志
 *
 * @method string getLogPushTaskId() 获取<p>日志唯一Id</p>
 * @method void setLogPushTaskId(string $LogPushTaskId) 设置<p>日志唯一Id</p>
 * @method string getGlobalAcceleratorId() 获取<p>GA实例唯一Id</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>GA实例唯一Id</p>
 * @method string getListenerId() 获取<p>监听器唯一Id</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器唯一Id</p>
 * @method string getEndpointGroupId() 获取<p>终端节点组唯一Id</p>
 * @method void setEndpointGroupId(string $EndpointGroupId) 设置<p>终端节点组唯一Id</p>
 * @method string getFlowLogDescription() 获取<p>日志任务描述</p>
 * @method void setFlowLogDescription(string $FlowLogDescription) 设置<p>日志任务描述</p>
 * @method string getCloudRegion() 获取<p>日志所在地域</p>
 * @method void setCloudRegion(string $CloudRegion) 设置<p>日志所在地域</p>
 * @method string getCloudLogId() 获取<p>日志主题Id</p>
 * @method void setCloudLogId(string $CloudLogId) 设置<p>日志主题Id</p>
 * @method string getCloudLogSetId() 获取<p>日志集Id</p>
 * @method void setCloudLogSetId(string $CloudLogSetId) 设置<p>日志集Id</p>
 * @method array getFieldKeys() 获取<p>选择日志采集字段</p>
 * @method void setFieldKeys(array $FieldKeys) 设置<p>选择日志采集字段</p>
 * @method string getStatus() 获取<p>日志任务状态</p><p>枚举值：</p><ul><li>active： 运行中</li><li>stopped： 已暂停</li></ul>
 * @method void setStatus(string $Status) 设置<p>日志任务状态</p><p>枚举值：</p><ul><li>active： 运行中</li><li>stopped： 已暂停</li></ul>
 */
class GlobalAcceleratorAccessLog extends AbstractModel
{
    /**
     * @var string <p>日志唯一Id</p>
     */
    public $LogPushTaskId;

    /**
     * @var string <p>GA实例唯一Id</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>监听器唯一Id</p>
     */
    public $ListenerId;

    /**
     * @var string <p>终端节点组唯一Id</p>
     */
    public $EndpointGroupId;

    /**
     * @var string <p>日志任务描述</p>
     */
    public $FlowLogDescription;

    /**
     * @var string <p>日志所在地域</p>
     */
    public $CloudRegion;

    /**
     * @var string <p>日志主题Id</p>
     */
    public $CloudLogId;

    /**
     * @var string <p>日志集Id</p>
     */
    public $CloudLogSetId;

    /**
     * @var array <p>选择日志采集字段</p>
     */
    public $FieldKeys;

    /**
     * @var string <p>日志任务状态</p><p>枚举值：</p><ul><li>active： 运行中</li><li>stopped： 已暂停</li></ul>
     */
    public $Status;

    /**
     * @param string $LogPushTaskId <p>日志唯一Id</p>
     * @param string $GlobalAcceleratorId <p>GA实例唯一Id</p>
     * @param string $ListenerId <p>监听器唯一Id</p>
     * @param string $EndpointGroupId <p>终端节点组唯一Id</p>
     * @param string $FlowLogDescription <p>日志任务描述</p>
     * @param string $CloudRegion <p>日志所在地域</p>
     * @param string $CloudLogId <p>日志主题Id</p>
     * @param string $CloudLogSetId <p>日志集Id</p>
     * @param array $FieldKeys <p>选择日志采集字段</p>
     * @param string $Status <p>日志任务状态</p><p>枚举值：</p><ul><li>active： 运行中</li><li>stopped： 已暂停</li></ul>
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
        if (array_key_exists("LogPushTaskId",$param) and $param["LogPushTaskId"] !== null) {
            $this->LogPushTaskId = $param["LogPushTaskId"];
        }

        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("EndpointGroupId",$param) and $param["EndpointGroupId"] !== null) {
            $this->EndpointGroupId = $param["EndpointGroupId"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }

        if (array_key_exists("CloudRegion",$param) and $param["CloudRegion"] !== null) {
            $this->CloudRegion = $param["CloudRegion"];
        }

        if (array_key_exists("CloudLogId",$param) and $param["CloudLogId"] !== null) {
            $this->CloudLogId = $param["CloudLogId"];
        }

        if (array_key_exists("CloudLogSetId",$param) and $param["CloudLogSetId"] !== null) {
            $this->CloudLogSetId = $param["CloudLogSetId"];
        }

        if (array_key_exists("FieldKeys",$param) and $param["FieldKeys"] !== null) {
            $this->FieldKeys = $param["FieldKeys"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
