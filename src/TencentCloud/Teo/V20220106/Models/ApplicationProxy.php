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
 * 应用代理实例
 *
 * @method string getProxyId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyId(string $ProxyId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyName() 获取实例名称
 * @method void setProxyName(string $ProxyName) 设置实例名称
 * @method string getPlatType() 获取调度模式：
ip表示Anycast IP
domain表示CNAME
 * @method void setPlatType(string $PlatType) 设置调度模式：
ip表示Anycast IP
domain表示CNAME
 * @method integer getSecurityType() 获取0关闭安全，1开启安全
 * @method void setSecurityType(integer $SecurityType) 设置0关闭安全，1开启安全
 * @method integer getAccelerateType() 获取0关闭加速，1开启加速
 * @method void setAccelerateType(integer $AccelerateType) 设置0关闭加速，1开启加速
 * @method string getForwardClientIp() 获取字段已经移至Rule.ForwardClientIp
 * @method void setForwardClientIp(string $ForwardClientIp) 设置字段已经移至Rule.ForwardClientIp
 * @method boolean getSessionPersist() 获取字段已经移至Rule.SessionPersist
 * @method void setSessionPersist(boolean $SessionPersist) 设置字段已经移至Rule.SessionPersist
 * @method array getRule() 获取规则列表
 * @method void setRule(array $Rule) 设置规则列表
 * @method string getStatus() 获取状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScheduleValue() 获取调度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleValue(array $ScheduleValue) 设置调度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取站点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置站点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneName() 获取站点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置站点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionPersistTime() 获取会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionPersistTime(integer $SessionPersistTime) 设置会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyType() 获取服务类型
hostname：子域名
instance：实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyType(string $ProxyType) 设置服务类型
hostname：子域名
instance：实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostId() 获取七层实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostId(string $HostId) 设置七层实例ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationProxy extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyId;

    /**
     * @var string 实例名称
     */
    public $ProxyName;

    /**
     * @var string 调度模式：
ip表示Anycast IP
domain表示CNAME
     */
    public $PlatType;

    /**
     * @var integer 0关闭安全，1开启安全
     */
    public $SecurityType;

    /**
     * @var integer 0关闭加速，1开启加速
     */
    public $AccelerateType;

    /**
     * @var string 字段已经移至Rule.ForwardClientIp
     */
    public $ForwardClientIp;

    /**
     * @var boolean 字段已经移至Rule.SessionPersist
     */
    public $SessionPersist;

    /**
     * @var array 规则列表
     */
    public $Rule;

    /**
     * @var string 状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 调度信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleValue;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 站点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 站点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneName;

    /**
     * @var integer 会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionPersistTime;

    /**
     * @var string 服务类型
hostname：子域名
instance：实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyType;

    /**
     * @var string 七层实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostId;

    /**
     * @param string $ProxyId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyName 实例名称
     * @param string $PlatType 调度模式：
ip表示Anycast IP
domain表示CNAME
     * @param integer $SecurityType 0关闭安全，1开启安全
     * @param integer $AccelerateType 0关闭加速，1开启加速
     * @param string $ForwardClientIp 字段已经移至Rule.ForwardClientIp
     * @param boolean $SessionPersist 字段已经移至Rule.SessionPersist
     * @param array $Rule 规则列表
     * @param string $Status 状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScheduleValue 调度信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId 站点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneName 站点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionPersistTime 会话保持时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyType 服务类型
hostname：子域名
instance：实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostId 七层实例ID
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("PlatType",$param) and $param["PlatType"] !== null) {
            $this->PlatType = $param["PlatType"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new ApplicationProxyRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScheduleValue",$param) and $param["ScheduleValue"] !== null) {
            $this->ScheduleValue = $param["ScheduleValue"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }
    }
}
