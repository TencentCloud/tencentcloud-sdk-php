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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例的增强服务启用情况与其设置，如云安全，云监控等实例 Agent
 *
 * @method RunSecurityServiceEnabled getSecurityService() 获取开启云安全服务。若不指定该参数，则默认开启云安全服务。
 * @method void setSecurityService(RunSecurityServiceEnabled $SecurityService) 设置开启云安全服务。若不指定该参数，则默认开启云安全服务。
 * @method RunSecurityServiceEnabled getMonitorService() 获取开启云监控服务。若不指定该参数，则默认开启云监控服务。
 * @method void setMonitorService(RunSecurityServiceEnabled $MonitorService) 设置开启云监控服务。若不指定该参数，则默认开启云监控服务。
 * @method AutomationServiceEnabled getAutomationService() 获取安装 tat-agent。若不指定该参数，则默认逻辑与 CVM 控制台一致：境外地域不安装、境内非 GPU 机型默认安装、境内 GPU 机型默认不安装。
 * @method void setAutomationService(AutomationServiceEnabled $AutomationService) 设置安装 tat-agent。若不指定该参数，则默认逻辑与 CVM 控制台一致：境外地域不安装、境内非 GPU 机型默认安装、境内 GPU 机型默认不安装。
 * @method BasicServicesSettings getBasicService() 获取开启基础服务。
 * @method void setBasicService(BasicServicesSettings $BasicService) 设置开启基础服务。
 */
class EnhancedService extends AbstractModel
{
    /**
     * @var RunSecurityServiceEnabled 开启云安全服务。若不指定该参数，则默认开启云安全服务。
     */
    public $SecurityService;

    /**
     * @var RunSecurityServiceEnabled 开启云监控服务。若不指定该参数，则默认开启云监控服务。
     */
    public $MonitorService;

    /**
     * @var AutomationServiceEnabled 安装 tat-agent。若不指定该参数，则默认逻辑与 CVM 控制台一致：境外地域不安装、境内非 GPU 机型默认安装、境内 GPU 机型默认不安装。
     */
    public $AutomationService;

    /**
     * @var BasicServicesSettings 开启基础服务。
     */
    public $BasicService;

    /**
     * @param RunSecurityServiceEnabled $SecurityService 开启云安全服务。若不指定该参数，则默认开启云安全服务。
     * @param RunSecurityServiceEnabled $MonitorService 开启云监控服务。若不指定该参数，则默认开启云监控服务。
     * @param AutomationServiceEnabled $AutomationService 安装 tat-agent。若不指定该参数，则默认逻辑与 CVM 控制台一致：境外地域不安装、境内非 GPU 机型默认安装、境内 GPU 机型默认不安装。
     * @param BasicServicesSettings $BasicService 开启基础服务。
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
            $this->MonitorService = new RunSecurityServiceEnabled();
            $this->MonitorService->deserialize($param["MonitorService"]);
        }

        if (array_key_exists("AutomationService",$param) and $param["AutomationService"] !== null) {
            $this->AutomationService = new AutomationServiceEnabled();
            $this->AutomationService->deserialize($param["AutomationService"]);
        }

        if (array_key_exists("BasicService",$param) and $param["BasicService"] !== null) {
            $this->BasicService = new BasicServicesSettings();
            $this->BasicService->deserialize($param["BasicService"]);
        }
    }
}
