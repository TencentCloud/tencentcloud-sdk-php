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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全配置。
 *
 * @method WafConfig getWafConfig() 获取托管规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWafConfig(WafConfig $WafConfig) 设置托管规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RateLimitConfig getRateLimitConfig() 获取速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRateLimitConfig(RateLimitConfig $RateLimitConfig) 设置速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSConfig getDdosConfig() 获取DDoS配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosConfig(DDoSConfig $DdosConfig) 设置DDoS配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AclConfig getAclConfig() 获取自定义规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclConfig(AclConfig $AclConfig) 设置自定义规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method BotConfig getBotConfig() 获取Bot配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotConfig(BotConfig $BotConfig) 设置Bot配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SwitchConfig getSwitchConfig() 获取七层防护总开关。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchConfig(SwitchConfig $SwitchConfig) 设置七层防护总开关。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpTableConfig getIpTableConfig() 获取基础访问管控。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpTableConfig(IpTableConfig $IpTableConfig) 设置基础访问管控。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExceptConfig getExceptConfig() 获取例外规则配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptConfig(ExceptConfig $ExceptConfig) 设置例外规则配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DropPageConfig getDropPageConfig() 获取自定义拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropPageConfig(DropPageConfig $DropPageConfig) 设置自定义拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityConfig extends AbstractModel
{
    /**
     * @var WafConfig 托管规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WafConfig;

    /**
     * @var RateLimitConfig 速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RateLimitConfig;

    /**
     * @var DDoSConfig DDoS配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosConfig;

    /**
     * @var AclConfig 自定义规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclConfig;

    /**
     * @var BotConfig Bot配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotConfig;

    /**
     * @var SwitchConfig 七层防护总开关。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchConfig;

    /**
     * @var IpTableConfig 基础访问管控。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpTableConfig;

    /**
     * @var ExceptConfig 例外规则配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptConfig;

    /**
     * @var DropPageConfig 自定义拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropPageConfig;

    /**
     * @param WafConfig $WafConfig 托管规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RateLimitConfig $RateLimitConfig 速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSConfig $DdosConfig DDoS配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AclConfig $AclConfig 自定义规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param BotConfig $BotConfig Bot配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SwitchConfig $SwitchConfig 七层防护总开关。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpTableConfig $IpTableConfig 基础访问管控。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExceptConfig $ExceptConfig 例外规则配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DropPageConfig $DropPageConfig 自定义拦截页面配置。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("WafConfig",$param) and $param["WafConfig"] !== null) {
            $this->WafConfig = new WafConfig();
            $this->WafConfig->deserialize($param["WafConfig"]);
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfig();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("DdosConfig",$param) and $param["DdosConfig"] !== null) {
            $this->DdosConfig = new DDoSConfig();
            $this->DdosConfig->deserialize($param["DdosConfig"]);
        }

        if (array_key_exists("AclConfig",$param) and $param["AclConfig"] !== null) {
            $this->AclConfig = new AclConfig();
            $this->AclConfig->deserialize($param["AclConfig"]);
        }

        if (array_key_exists("BotConfig",$param) and $param["BotConfig"] !== null) {
            $this->BotConfig = new BotConfig();
            $this->BotConfig->deserialize($param["BotConfig"]);
        }

        if (array_key_exists("SwitchConfig",$param) and $param["SwitchConfig"] !== null) {
            $this->SwitchConfig = new SwitchConfig();
            $this->SwitchConfig->deserialize($param["SwitchConfig"]);
        }

        if (array_key_exists("IpTableConfig",$param) and $param["IpTableConfig"] !== null) {
            $this->IpTableConfig = new IpTableConfig();
            $this->IpTableConfig->deserialize($param["IpTableConfig"]);
        }

        if (array_key_exists("ExceptConfig",$param) and $param["ExceptConfig"] !== null) {
            $this->ExceptConfig = new ExceptConfig();
            $this->ExceptConfig->deserialize($param["ExceptConfig"]);
        }

        if (array_key_exists("DropPageConfig",$param) and $param["DropPageConfig"] !== null) {
            $this->DropPageConfig = new DropPageConfig();
            $this->DropPageConfig->deserialize($param["DropPageConfig"]);
        }
    }
}
