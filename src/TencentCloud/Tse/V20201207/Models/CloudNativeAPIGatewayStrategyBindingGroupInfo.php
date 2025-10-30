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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略绑定的网关分组信息
 *
 * @method string getGroupId() 获取网关分组ID
 * @method void setGroupId(string $GroupId) 设置网关分组ID
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取节点配置
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置节点配置
 * @method string getBindTime() 获取绑定时间
 * @method void setBindTime(string $BindTime) 设置绑定时间
 * @method string getGroupName() 获取网关分组名称
 * @method void setGroupName(string $GroupName) 设置网关分组名称
 * @method string getStatus() 获取绑定状态
 * @method void setStatus(string $Status) 设置绑定状态
 */
class CloudNativeAPIGatewayStrategyBindingGroupInfo extends AbstractModel
{
    /**
     * @var string 网关分组ID
     */
    public $GroupId;

    /**
     * @var CloudNativeAPIGatewayNodeConfig 节点配置
     */
    public $NodeConfig;

    /**
     * @var string 绑定时间
     */
    public $BindTime;

    /**
     * @var string 网关分组名称
     */
    public $GroupName;

    /**
     * @var string 绑定状态
     */
    public $Status;

    /**
     * @param string $GroupId 网关分组ID
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig 节点配置
     * @param string $BindTime 绑定时间
     * @param string $GroupName 网关分组名称
     * @param string $Status 绑定状态
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
