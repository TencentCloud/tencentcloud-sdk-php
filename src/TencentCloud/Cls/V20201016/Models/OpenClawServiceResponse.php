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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenClawService返回参数结构体
 *
 * @method string getLogsetId() 获取<p>日志集id</p><p><a href="https://cloud.tencent.com/document/product/614/41034">日志集文档</a></p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p><p><a href="https://cloud.tencent.com/document/product/614/41034">日志集文档</a></p>
 * @method string getLogsetName() 获取<p>日志集名称</p>
 * @method void setLogsetName(string $LogsetName) 设置<p>日志集名称</p>
 * @method string getTopicId() 获取<p>日志主题id</p><p><a href="https://cloud.tencent.com/document/product/614/41035">日志主题文档</a></p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p><p><a href="https://cloud.tencent.com/document/product/614/41035">日志主题文档</a></p>
 * @method string getTopicName() 获取<p>日志主题名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题名称</p>
 * @method string getMetricTopicId() 获取<p>指标主题id</p><p><a href="https://cloud.tencent.com/document/product/614/90328">指标主题文档</a></p>
 * @method void setMetricTopicId(string $MetricTopicId) 设置<p>指标主题id</p><p><a href="https://cloud.tencent.com/document/product/614/90328">指标主题文档</a></p>
 * @method string getMetricTopicName() 获取<p>指标主题名称</p>
 * @method void setMetricTopicName(string $MetricTopicName) 设置<p>指标主题名称</p>
 * @method string getMachineGroupId() 获取<p>机器组id</p><p><a href="https://cloud.tencent.com/document/product/614/17412">机器组文档</a></p>
 * @method void setMachineGroupId(string $MachineGroupId) 设置<p>机器组id</p><p><a href="https://cloud.tencent.com/document/product/614/17412">机器组文档</a></p>
 * @method string getMachineGroupName() 获取<p>机器组名称</p>
 * @method void setMachineGroupName(string $MachineGroupName) 设置<p>机器组名称</p>
 * @method string getAppLogConfigId() 获取<p>采集配置id。应用日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
 * @method void setAppLogConfigId(string $AppLogConfigId) 设置<p>采集配置id。应用日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
 * @method string getAppLogConfigName() 获取<p>采集配置名称。应用日志</p>
 * @method void setAppLogConfigName(string $AppLogConfigName) 设置<p>采集配置名称。应用日志</p>
 * @method string getSessionLogConfigId() 获取<p>采集配置id。会话日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
 * @method void setSessionLogConfigId(string $SessionLogConfigId) 设置<p>采集配置id。会话日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
 * @method string getSessionLogConfigName() 获取<p>采集配置名称。会话日志</p>
 * @method void setSessionLogConfigName(string $SessionLogConfigName) 设置<p>采集配置名称。会话日志</p>
 * @method string getTraceTopicId() 获取<p>trace 主题 ID</p>
 * @method void setTraceTopicId(string $TraceTopicId) 设置<p>trace 主题 ID</p>
 * @method string getTraceTopicName() 获取<p>trace 主题名称</p>
 * @method void setTraceTopicName(string $TraceTopicName) 设置<p>trace 主题名称</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class OpenClawServiceResponse extends AbstractModel
{
    /**
     * @var string <p>日志集id</p><p><a href="https://cloud.tencent.com/document/product/614/41034">日志集文档</a></p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志集名称</p>
     */
    public $LogsetName;

    /**
     * @var string <p>日志主题id</p><p><a href="https://cloud.tencent.com/document/product/614/41035">日志主题文档</a></p>
     */
    public $TopicId;

    /**
     * @var string <p>日志主题名称</p>
     */
    public $TopicName;

    /**
     * @var string <p>指标主题id</p><p><a href="https://cloud.tencent.com/document/product/614/90328">指标主题文档</a></p>
     */
    public $MetricTopicId;

    /**
     * @var string <p>指标主题名称</p>
     */
    public $MetricTopicName;

    /**
     * @var string <p>机器组id</p><p><a href="https://cloud.tencent.com/document/product/614/17412">机器组文档</a></p>
     */
    public $MachineGroupId;

    /**
     * @var string <p>机器组名称</p>
     */
    public $MachineGroupName;

    /**
     * @var string <p>采集配置id。应用日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
     */
    public $AppLogConfigId;

    /**
     * @var string <p>采集配置名称。应用日志</p>
     */
    public $AppLogConfigName;

    /**
     * @var string <p>采集配置id。会话日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
     */
    public $SessionLogConfigId;

    /**
     * @var string <p>采集配置名称。会话日志</p>
     */
    public $SessionLogConfigName;

    /**
     * @var string <p>trace 主题 ID</p>
     */
    public $TraceTopicId;

    /**
     * @var string <p>trace 主题名称</p>
     */
    public $TraceTopicName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LogsetId <p>日志集id</p><p><a href="https://cloud.tencent.com/document/product/614/41034">日志集文档</a></p>
     * @param string $LogsetName <p>日志集名称</p>
     * @param string $TopicId <p>日志主题id</p><p><a href="https://cloud.tencent.com/document/product/614/41035">日志主题文档</a></p>
     * @param string $TopicName <p>日志主题名称</p>
     * @param string $MetricTopicId <p>指标主题id</p><p><a href="https://cloud.tencent.com/document/product/614/90328">指标主题文档</a></p>
     * @param string $MetricTopicName <p>指标主题名称</p>
     * @param string $MachineGroupId <p>机器组id</p><p><a href="https://cloud.tencent.com/document/product/614/17412">机器组文档</a></p>
     * @param string $MachineGroupName <p>机器组名称</p>
     * @param string $AppLogConfigId <p>采集配置id。应用日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
     * @param string $AppLogConfigName <p>采集配置名称。应用日志</p>
     * @param string $SessionLogConfigId <p>采集配置id。会话日志</p><p><a href="https://cloud.tencent.com/document/product/614/33494">采集概述文档</a> - <a href="https://cloud.tencent.com/document/product/614/57497">LogListener 采集配置导入</a></p>
     * @param string $SessionLogConfigName <p>采集配置名称。会话日志</p>
     * @param string $TraceTopicId <p>trace 主题 ID</p>
     * @param string $TraceTopicName <p>trace 主题名称</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MetricTopicId",$param) and $param["MetricTopicId"] !== null) {
            $this->MetricTopicId = $param["MetricTopicId"];
        }

        if (array_key_exists("MetricTopicName",$param) and $param["MetricTopicName"] !== null) {
            $this->MetricTopicName = $param["MetricTopicName"];
        }

        if (array_key_exists("MachineGroupId",$param) and $param["MachineGroupId"] !== null) {
            $this->MachineGroupId = $param["MachineGroupId"];
        }

        if (array_key_exists("MachineGroupName",$param) and $param["MachineGroupName"] !== null) {
            $this->MachineGroupName = $param["MachineGroupName"];
        }

        if (array_key_exists("AppLogConfigId",$param) and $param["AppLogConfigId"] !== null) {
            $this->AppLogConfigId = $param["AppLogConfigId"];
        }

        if (array_key_exists("AppLogConfigName",$param) and $param["AppLogConfigName"] !== null) {
            $this->AppLogConfigName = $param["AppLogConfigName"];
        }

        if (array_key_exists("SessionLogConfigId",$param) and $param["SessionLogConfigId"] !== null) {
            $this->SessionLogConfigId = $param["SessionLogConfigId"];
        }

        if (array_key_exists("SessionLogConfigName",$param) and $param["SessionLogConfigName"] !== null) {
            $this->SessionLogConfigName = $param["SessionLogConfigName"];
        }

        if (array_key_exists("TraceTopicId",$param) and $param["TraceTopicId"] !== null) {
            $this->TraceTopicId = $param["TraceTopicId"];
        }

        if (array_key_exists("TraceTopicName",$param) and $param["TraceTopicName"] !== null) {
            $this->TraceTopicName = $param["TraceTopicName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
