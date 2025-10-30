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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回实例
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getResourceId() 获取资源 id
 * @method void setResourceId(string $ResourceId) 设置资源 id
 * @method string getDomain() 获取业务域名
 * @method void setDomain(string $Domain) 设置业务域名
 * @method string getAccessType() 获取Cname域名接入方式
CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
 * @method void setAccessType(string $AccessType) 设置Cname域名接入方式
CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
 * @method string getAccessDomain() 获取接入域名
 * @method void setAccessDomain(string $AccessDomain) 设置接入域名
 * @method string getAccessSubDomain() 获取接入子域名
 * @method void setAccessSubDomain(string $AccessSubDomain) 设置接入子域名
 * @method integer getGlobalTtl() 获取全局记录过期时间
 * @method void setGlobalTtl(integer $GlobalTtl) 设置全局记录过期时间
 * @method string getPackageType() 获取套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
 * @method void setPackageType(string $PackageType) 设置套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
 * @method string getWorkingStatus() 获取实例运行状态
NORMAL: 健康
FAULTY: 有风险
DOWN: 宕机
UNKNOWN: 未知
 * @method void setWorkingStatus(string $WorkingStatus) 设置实例运行状态
NORMAL: 健康
FAULTY: 有风险
DOWN: 宕机
UNKNOWN: 未知
 * @method string getStatus() 获取实例状态，ENABLED: 正常，DISABLED: 禁用
 * @method void setStatus(string $Status) 设置实例状态，ENABLED: 正常，DISABLED: 禁用
 * @method boolean getIsCnameConfigured() 获取是否cname接入：true已接入；false未接入
 * @method void setIsCnameConfigured(boolean $IsCnameConfigured) 设置是否cname接入：true已接入；false未接入
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getStrategyNum() 获取策略数量
 * @method void setStrategyNum(integer $StrategyNum) 设置策略数量
 * @method integer getAddressPoolNum() 获取绑定地址池个数
 * @method void setAddressPoolNum(integer $AddressPoolNum) 设置绑定地址池个数
 * @method integer getMonitorNum() 获取绑定监控器数量
 * @method void setMonitorNum(integer $MonitorNum) 设置绑定监控器数量
 * @method integer getPoolId() 获取地址池id
 * @method void setPoolId(integer $PoolId) 设置地址池id
 * @method string getPoolName() 获取地址池名称
 * @method void setPoolName(string $PoolName) 设置地址池名称
 * @method string getCreatedOn() 获取实例创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置实例创建时间
 * @method string getUpdatedOn() 获取实例更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置实例更新时间
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 资源 id
     */
    public $ResourceId;

    /**
     * @var string 业务域名
     */
    public $Domain;

    /**
     * @var string Cname域名接入方式
CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
     */
    public $AccessType;

    /**
     * @var string 接入域名
     */
    public $AccessDomain;

    /**
     * @var string 接入子域名
     */
    public $AccessSubDomain;

    /**
     * @var integer 全局记录过期时间
     */
    public $GlobalTtl;

    /**
     * @var string 套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
     */
    public $PackageType;

    /**
     * @var string 实例运行状态
NORMAL: 健康
FAULTY: 有风险
DOWN: 宕机
UNKNOWN: 未知
     */
    public $WorkingStatus;

    /**
     * @var string 实例状态，ENABLED: 正常，DISABLED: 禁用
     */
    public $Status;

    /**
     * @var boolean 是否cname接入：true已接入；false未接入
     */
    public $IsCnameConfigured;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 策略数量
     */
    public $StrategyNum;

    /**
     * @var integer 绑定地址池个数
     */
    public $AddressPoolNum;

    /**
     * @var integer 绑定监控器数量
     */
    public $MonitorNum;

    /**
     * @var integer 地址池id
     */
    public $PoolId;

    /**
     * @var string 地址池名称
     */
    public $PoolName;

    /**
     * @var string 实例创建时间
     */
    public $CreatedOn;

    /**
     * @var string 实例更新时间
     */
    public $UpdatedOn;

    /**
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $ResourceId 资源 id
     * @param string $Domain 业务域名
     * @param string $AccessType Cname域名接入方式
CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
     * @param string $AccessDomain 接入域名
     * @param string $AccessSubDomain 接入子域名
     * @param integer $GlobalTtl 全局记录过期时间
     * @param string $PackageType 套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
     * @param string $WorkingStatus 实例运行状态
NORMAL: 健康
FAULTY: 有风险
DOWN: 宕机
UNKNOWN: 未知
     * @param string $Status 实例状态，ENABLED: 正常，DISABLED: 禁用
     * @param boolean $IsCnameConfigured 是否cname接入：true已接入；false未接入
     * @param string $Remark 备注
     * @param integer $StrategyNum 策略数量
     * @param integer $AddressPoolNum 绑定地址池个数
     * @param integer $MonitorNum 绑定监控器数量
     * @param integer $PoolId 地址池id
     * @param string $PoolName 地址池名称
     * @param string $CreatedOn 实例创建时间
     * @param string $UpdatedOn 实例更新时间
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
        }

        if (array_key_exists("AccessSubDomain",$param) and $param["AccessSubDomain"] !== null) {
            $this->AccessSubDomain = $param["AccessSubDomain"];
        }

        if (array_key_exists("GlobalTtl",$param) and $param["GlobalTtl"] !== null) {
            $this->GlobalTtl = $param["GlobalTtl"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("WorkingStatus",$param) and $param["WorkingStatus"] !== null) {
            $this->WorkingStatus = $param["WorkingStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsCnameConfigured",$param) and $param["IsCnameConfigured"] !== null) {
            $this->IsCnameConfigured = $param["IsCnameConfigured"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("StrategyNum",$param) and $param["StrategyNum"] !== null) {
            $this->StrategyNum = $param["StrategyNum"];
        }

        if (array_key_exists("AddressPoolNum",$param) and $param["AddressPoolNum"] !== null) {
            $this->AddressPoolNum = $param["AddressPoolNum"];
        }

        if (array_key_exists("MonitorNum",$param) and $param["MonitorNum"] !== null) {
            $this->MonitorNum = $param["MonitorNum"];
        }

        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("PoolName",$param) and $param["PoolName"] !== null) {
            $this->PoolName = $param["PoolName"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
