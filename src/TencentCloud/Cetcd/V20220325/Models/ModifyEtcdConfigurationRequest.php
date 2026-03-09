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
 * ModifyEtcdConfiguration请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method EtcdAutoCompactionSettings getAutoCompactionSettings() 获取自动压缩设置
 * @method void setAutoCompactionSettings(EtcdAutoCompactionSettings $AutoCompactionSettings) 设置自动压缩设置
 * @method EtcdMonitorSettings getMonitorSettings() 获取监控设置
 * @method void setMonitorSettings(EtcdMonitorSettings $MonitorSettings) 设置监控设置
 * @method string getChargeType() 获取计费类型
PREPAID：预付费
POSTPAID_BY_HOUR：后付费
 * @method void setChargeType(string $ChargeType) 设置计费类型
PREPAID：预付费
POSTPAID_BY_HOUR：后付费
 * @method InstanceConfig getInstanceConfig() 获取实例配置信息
 * @method void setInstanceConfig(InstanceConfig $InstanceConfig) 设置实例配置信息
 * @method ChargePrepaidConfig getPrepaidConfig() 获取预付费配置信息
 * @method void setPrepaidConfig(ChargePrepaidConfig $PrepaidConfig) 设置预付费配置信息
 */
class ModifyEtcdConfigurationRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var EtcdAutoCompactionSettings 自动压缩设置
     */
    public $AutoCompactionSettings;

    /**
     * @var EtcdMonitorSettings 监控设置
     */
    public $MonitorSettings;

    /**
     * @var string 计费类型
PREPAID：预付费
POSTPAID_BY_HOUR：后付费
     */
    public $ChargeType;

    /**
     * @var InstanceConfig 实例配置信息
     */
    public $InstanceConfig;

    /**
     * @var ChargePrepaidConfig 预付费配置信息
     */
    public $PrepaidConfig;

    /**
     * @param string $InstanceId 实例id
     * @param EtcdAutoCompactionSettings $AutoCompactionSettings 自动压缩设置
     * @param EtcdMonitorSettings $MonitorSettings 监控设置
     * @param string $ChargeType 计费类型
PREPAID：预付费
POSTPAID_BY_HOUR：后付费
     * @param InstanceConfig $InstanceConfig 实例配置信息
     * @param ChargePrepaidConfig $PrepaidConfig 预付费配置信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AutoCompactionSettings",$param) and $param["AutoCompactionSettings"] !== null) {
            $this->AutoCompactionSettings = new EtcdAutoCompactionSettings();
            $this->AutoCompactionSettings->deserialize($param["AutoCompactionSettings"]);
        }

        if (array_key_exists("MonitorSettings",$param) and $param["MonitorSettings"] !== null) {
            $this->MonitorSettings = new EtcdMonitorSettings();
            $this->MonitorSettings->deserialize($param["MonitorSettings"]);
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("InstanceConfig",$param) and $param["InstanceConfig"] !== null) {
            $this->InstanceConfig = new InstanceConfig();
            $this->InstanceConfig->deserialize($param["InstanceConfig"]);
        }

        if (array_key_exists("PrepaidConfig",$param) and $param["PrepaidConfig"] !== null) {
            $this->PrepaidConfig = new ChargePrepaidConfig();
            $this->PrepaidConfig->deserialize($param["PrepaidConfig"]);
        }
    }
}
