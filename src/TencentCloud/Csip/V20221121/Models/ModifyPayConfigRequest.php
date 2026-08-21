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
 * ModifyPayConfig请求参数结构体
 *
 * @method HostAutoScaleConfig getHostConfig() 获取主机安全模块自动扩容配置
补充说明：不传则不修改主机配置；本期至少需传本模块。后续可扩展 ContainerConfig / AIAgentConfig 命名模块字段
 * @method void setHostConfig(HostAutoScaleConfig $HostConfig) 设置主机安全模块自动扩容配置
补充说明：不传则不修改主机配置；本期至少需传本模块。后续可扩展 ContainerConfig / AIAgentConfig 命名模块字段
 */
class ModifyPayConfigRequest extends AbstractModel
{
    /**
     * @var HostAutoScaleConfig 主机安全模块自动扩容配置
补充说明：不传则不修改主机配置；本期至少需传本模块。后续可扩展 ContainerConfig / AIAgentConfig 命名模块字段
     */
    public $HostConfig;

    /**
     * @param HostAutoScaleConfig $HostConfig 主机安全模块自动扩容配置
补充说明：不传则不修改主机配置；本期至少需传本模块。后续可扩展 ContainerConfig / AIAgentConfig 命名模块字段
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
        if (array_key_exists("HostConfig",$param) and $param["HostConfig"] !== null) {
            $this->HostConfig = new HostAutoScaleConfig();
            $this->HostConfig->deserialize($param["HostConfig"]);
        }
    }
}
