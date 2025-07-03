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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例的增强服务启用情况与其设置，如云安全，腾讯云可观测平台等实例 Agent
 *
 * @method RunSecurityServiceEnabled getSecurityService() 获取开启云安全服务。若不指定该参数，则默认开启云安全服务。
 * @method void setSecurityService(RunSecurityServiceEnabled $SecurityService) 设置开启云安全服务。若不指定该参数，则默认开启云安全服务。
 * @method RunMonitorServiceEnabled getMonitorService() 获取开启腾讯云可观测平台服务。若不指定该参数，则默认开启腾讯云可观测平台服务。
 * @method void setMonitorService(RunMonitorServiceEnabled $MonitorService) 设置开启腾讯云可观测平台服务。若不指定该参数，则默认开启腾讯云可观测平台服务。
 * @method RunAutomationServiceEnabled getAutomationService() 获取开启云自动化助手服务（TencentCloud Automation Tools，TAT）。若不指定该参数，默认开启云自动化助手服务。
 * @method void setAutomationService(RunAutomationServiceEnabled $AutomationService) 设置开启云自动化助手服务（TencentCloud Automation Tools，TAT）。若不指定该参数，默认开启云自动化助手服务。
 */
class EnhancedService extends AbstractModel
{
    /**
     * @var RunSecurityServiceEnabled 开启云安全服务。若不指定该参数，则默认开启云安全服务。
     */
    public $SecurityService;

    /**
     * @var RunMonitorServiceEnabled 开启腾讯云可观测平台服务。若不指定该参数，则默认开启腾讯云可观测平台服务。
     */
    public $MonitorService;

    /**
     * @var RunAutomationServiceEnabled 开启云自动化助手服务（TencentCloud Automation Tools，TAT）。若不指定该参数，默认开启云自动化助手服务。
     */
    public $AutomationService;

    /**
     * @param RunSecurityServiceEnabled $SecurityService 开启云安全服务。若不指定该参数，则默认开启云安全服务。
     * @param RunMonitorServiceEnabled $MonitorService 开启腾讯云可观测平台服务。若不指定该参数，则默认开启腾讯云可观测平台服务。
     * @param RunAutomationServiceEnabled $AutomationService 开启云自动化助手服务（TencentCloud Automation Tools，TAT）。若不指定该参数，默认开启云自动化助手服务。
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
        if (array_key_exists("SecurityService",$param) and $param["SecurityService"] !== null) {
            $this->SecurityService = new RunSecurityServiceEnabled();
            $this->SecurityService->deserialize($param["SecurityService"]);
        }

        if (array_key_exists("MonitorService",$param) and $param["MonitorService"] !== null) {
            $this->MonitorService = new RunMonitorServiceEnabled();
            $this->MonitorService->deserialize($param["MonitorService"]);
        }

        if (array_key_exists("AutomationService",$param) and $param["AutomationService"] !== null) {
            $this->AutomationService = new RunAutomationServiceEnabled();
            $this->AutomationService->deserialize($param["AutomationService"]);
        }
    }
}
