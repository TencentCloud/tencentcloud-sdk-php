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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd高级设置
 *
 * @method EtcdSecuritySettings getSecuritySettings() 获取安全相关设置
 * @method void setSecuritySettings(EtcdSecuritySettings $SecuritySettings) 设置安全相关设置
 * @method EtcdAutoCompactionSettings getAutoCompactionSettings() 获取自动压缩设置
 * @method void setAutoCompactionSettings(EtcdAutoCompactionSettings $AutoCompactionSettings) 设置自动压缩设置
 * @method EtcdMonitorSettings getMonitorSettings() 获取监控设置
 * @method void setMonitorSettings(EtcdMonitorSettings $MonitorSettings) 设置监控设置
 * @method EtcdBackupSettings getBackupSettings() 获取备份相关设置
 * @method void setBackupSettings(EtcdBackupSettings $BackupSettings) 设置备份相关设置
 * @method string getCustomDomains() 获取自定义域名
 * @method void setCustomDomains(string $CustomDomains) 设置自定义域名
 * @method string getCustomIPs() 获取自定义ip
 * @method void setCustomIPs(string $CustomIPs) 设置自定义ip
 */
class EtcdAdvancedSettings extends AbstractModel
{
    /**
     * @var EtcdSecuritySettings 安全相关设置
     */
    public $SecuritySettings;

    /**
     * @var EtcdAutoCompactionSettings 自动压缩设置
     */
    public $AutoCompactionSettings;

    /**
     * @var EtcdMonitorSettings 监控设置
     */
    public $MonitorSettings;

    /**
     * @var EtcdBackupSettings 备份相关设置
     */
    public $BackupSettings;

    /**
     * @var string 自定义域名
     */
    public $CustomDomains;

    /**
     * @var string 自定义ip
     */
    public $CustomIPs;

    /**
     * @param EtcdSecuritySettings $SecuritySettings 安全相关设置
     * @param EtcdAutoCompactionSettings $AutoCompactionSettings 自动压缩设置
     * @param EtcdMonitorSettings $MonitorSettings 监控设置
     * @param EtcdBackupSettings $BackupSettings 备份相关设置
     * @param string $CustomDomains 自定义域名
     * @param string $CustomIPs 自定义ip
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
        if (array_key_exists("SecuritySettings",$param) and $param["SecuritySettings"] !== null) {
            $this->SecuritySettings = new EtcdSecuritySettings();
            $this->SecuritySettings->deserialize($param["SecuritySettings"]);
        }

        if (array_key_exists("AutoCompactionSettings",$param) and $param["AutoCompactionSettings"] !== null) {
            $this->AutoCompactionSettings = new EtcdAutoCompactionSettings();
            $this->AutoCompactionSettings->deserialize($param["AutoCompactionSettings"]);
        }

        if (array_key_exists("MonitorSettings",$param) and $param["MonitorSettings"] !== null) {
            $this->MonitorSettings = new EtcdMonitorSettings();
            $this->MonitorSettings->deserialize($param["MonitorSettings"]);
        }

        if (array_key_exists("BackupSettings",$param) and $param["BackupSettings"] !== null) {
            $this->BackupSettings = new EtcdBackupSettings();
            $this->BackupSettings->deserialize($param["BackupSettings"]);
        }

        if (array_key_exists("CustomDomains",$param) and $param["CustomDomains"] !== null) {
            $this->CustomDomains = $param["CustomDomains"];
        }

        if (array_key_exists("CustomIPs",$param) and $param["CustomIPs"] !== null) {
            $this->CustomIPs = $param["CustomIPs"];
        }
    }
}
