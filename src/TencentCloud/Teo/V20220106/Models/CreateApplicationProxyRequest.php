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
 * CreateApplicationProxy请求参数结构体
 *
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getZoneName() 获取站点名称
 * @method void setZoneName(string $ZoneName) 设置站点名称
 * @method string getProxyName() 获取四层代理名称
 * @method void setProxyName(string $ProxyName) 设置四层代理名称
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
 * @method array getRule() 获取规则详细信息
 * @method void setRule(array $Rule) 设置规则详细信息
 * @method integer getSessionPersistTime() 获取会话保持时间，取值范围：30-3600，单位：秒
 * @method void setSessionPersistTime(integer $SessionPersistTime) 设置会话保持时间，取值范围：30-3600，单位：秒
 * @method string getProxyType() 获取服务类型
hostname：子域名
instance：实例
 * @method void setProxyType(string $ProxyType) 设置服务类型
hostname：子域名
instance：实例
 */
class CreateApplicationProxyRequest extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 站点名称
     */
    public $ZoneName;

    /**
     * @var string 四层代理名称
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
     * @var array 规则详细信息
     */
    public $Rule;

    /**
     * @var integer 会话保持时间，取值范围：30-3600，单位：秒
     */
    public $SessionPersistTime;

    /**
     * @var string 服务类型
hostname：子域名
instance：实例
     */
    public $ProxyType;

    /**
     * @param string $ZoneId 站点ID
     * @param string $ZoneName 站点名称
     * @param string $ProxyName 四层代理名称
     * @param string $PlatType 调度模式：
ip表示Anycast IP
domain表示CNAME
     * @param integer $SecurityType 0关闭安全，1开启安全
     * @param integer $AccelerateType 0关闭加速，1开启加速
     * @param string $ForwardClientIp 字段已经移至Rule.ForwardClientIp
     * @param boolean $SessionPersist 字段已经移至Rule.SessionPersist
     * @param array $Rule 规则详细信息
     * @param integer $SessionPersistTime 会话保持时间，取值范围：30-3600，单位：秒
     * @param string $ProxyType 服务类型
hostname：子域名
instance：实例
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
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

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }
    }
}
