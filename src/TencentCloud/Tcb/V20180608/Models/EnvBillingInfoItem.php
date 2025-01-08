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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境计费信息
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getPackageId() 获取tcb产品套餐ID，参考DescribePackages接口的返回值。
 * @method void setPackageId(string $PackageId) 设置tcb产品套餐ID，参考DescribePackages接口的返回值。
 * @method boolean getIsAutoRenew() 获取自动续费标记
 * @method void setIsAutoRenew(boolean $IsAutoRenew) 设置自动续费标记
 * @method string getStatus() 获取状态。包含以下取值：
<li> 空字符串：初始化中</li>
<li> NORMAL：正常</li>
<li> ISOLATE：隔离</li>
 * @method void setStatus(string $Status) 设置状态。包含以下取值：
<li> 空字符串：初始化中</li>
<li> NORMAL：正常</li>
<li> ISOLATE：隔离</li>
 * @method string getPayMode() 获取支付方式。包含以下取值：
<li> PREPAYMENT：预付费</li>
<li> POSTPAID：后付费</li>
 * @method void setPayMode(string $PayMode) 设置支付方式。包含以下取值：
<li> PREPAYMENT：预付费</li>
<li> POSTPAID：后付费</li>
 * @method string getIsolatedTime() 获取隔离时间，最近一次隔离的时间
 * @method void setIsolatedTime(string $IsolatedTime) 设置隔离时间，最近一次隔离的时间
 * @method string getExpireTime() 获取过期时间，套餐即将到期的时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，套餐即将到期的时间
 * @method string getCreateTime() 获取创建时间，第一次接入计费方案的时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，第一次接入计费方案的时间。
 * @method string getUpdateTime() 获取更新时间，计费信息最近一次更新的时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，计费信息最近一次更新的时间。
 * @method boolean getIsAlwaysFree() 获取true表示从未升级过付费版。
 * @method void setIsAlwaysFree(boolean $IsAlwaysFree) 设置true表示从未升级过付费版。
 * @method string getPaymentChannel() 获取付费渠道。
<li> miniapp：小程序</li>
<li> qcloud：腾讯云</li>
 * @method void setPaymentChannel(string $PaymentChannel) 设置付费渠道。
<li> miniapp：小程序</li>
<li> qcloud：腾讯云</li>
 * @method OrderInfo getOrderInfo() 获取最新的订单信息
 * @method void setOrderInfo(OrderInfo $OrderInfo) 设置最新的订单信息
 * @method string getFreeQuota() 获取免费配额信息。
 * @method void setFreeQuota(string $FreeQuota) 设置免费配额信息。
 * @method boolean getEnableOverrun() 获取是否开启 `超过套餐额度部分转按量付费`
 * @method void setEnableOverrun(boolean $EnableOverrun) 设置是否开启 `超过套餐额度部分转按量付费`
 * @method string getExtPackageType() 获取环境套餐类型
 * @method void setExtPackageType(string $ExtPackageType) 设置环境套餐类型
 * @method string getEnvCharged() 获取是否付费期环境，可取值：yes/no。
 * @method void setEnvCharged(string $EnvCharged) 设置是否付费期环境，可取值：yes/no。
 * @method string getEnvActivated() 获取是否已激活，可取值：yes/no。
 * @method void setEnvActivated(string $EnvActivated) 设置是否已激活，可取值：yes/no。
 */
class EnvBillingInfoItem extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string tcb产品套餐ID，参考DescribePackages接口的返回值。
     */
    public $PackageId;

    /**
     * @var boolean 自动续费标记
     */
    public $IsAutoRenew;

    /**
     * @var string 状态。包含以下取值：
<li> 空字符串：初始化中</li>
<li> NORMAL：正常</li>
<li> ISOLATE：隔离</li>
     */
    public $Status;

    /**
     * @var string 支付方式。包含以下取值：
<li> PREPAYMENT：预付费</li>
<li> POSTPAID：后付费</li>
     */
    public $PayMode;

    /**
     * @var string 隔离时间，最近一次隔离的时间
     */
    public $IsolatedTime;

    /**
     * @var string 过期时间，套餐即将到期的时间
     */
    public $ExpireTime;

    /**
     * @var string 创建时间，第一次接入计费方案的时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，计费信息最近一次更新的时间。
     */
    public $UpdateTime;

    /**
     * @var boolean true表示从未升级过付费版。
     */
    public $IsAlwaysFree;

    /**
     * @var string 付费渠道。
<li> miniapp：小程序</li>
<li> qcloud：腾讯云</li>
     */
    public $PaymentChannel;

    /**
     * @var OrderInfo 最新的订单信息
     */
    public $OrderInfo;

    /**
     * @var string 免费配额信息。
     */
    public $FreeQuota;

    /**
     * @var boolean 是否开启 `超过套餐额度部分转按量付费`
     */
    public $EnableOverrun;

    /**
     * @var string 环境套餐类型
     */
    public $ExtPackageType;

    /**
     * @var string 是否付费期环境，可取值：yes/no。
     */
    public $EnvCharged;

    /**
     * @var string 是否已激活，可取值：yes/no。
     */
    public $EnvActivated;

    /**
     * @param string $EnvId 环境ID
     * @param string $PackageId tcb产品套餐ID，参考DescribePackages接口的返回值。
     * @param boolean $IsAutoRenew 自动续费标记
     * @param string $Status 状态。包含以下取值：
<li> 空字符串：初始化中</li>
<li> NORMAL：正常</li>
<li> ISOLATE：隔离</li>
     * @param string $PayMode 支付方式。包含以下取值：
<li> PREPAYMENT：预付费</li>
<li> POSTPAID：后付费</li>
     * @param string $IsolatedTime 隔离时间，最近一次隔离的时间
     * @param string $ExpireTime 过期时间，套餐即将到期的时间
     * @param string $CreateTime 创建时间，第一次接入计费方案的时间。
     * @param string $UpdateTime 更新时间，计费信息最近一次更新的时间。
     * @param boolean $IsAlwaysFree true表示从未升级过付费版。
     * @param string $PaymentChannel 付费渠道。
<li> miniapp：小程序</li>
<li> qcloud：腾讯云</li>
     * @param OrderInfo $OrderInfo 最新的订单信息
     * @param string $FreeQuota 免费配额信息。
     * @param boolean $EnableOverrun 是否开启 `超过套餐额度部分转按量付费`
     * @param string $ExtPackageType 环境套餐类型
     * @param string $EnvCharged 是否付费期环境，可取值：yes/no。
     * @param string $EnvActivated 是否已激活，可取值：yes/no。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsAlwaysFree",$param) and $param["IsAlwaysFree"] !== null) {
            $this->IsAlwaysFree = $param["IsAlwaysFree"];
        }

        if (array_key_exists("PaymentChannel",$param) and $param["PaymentChannel"] !== null) {
            $this->PaymentChannel = $param["PaymentChannel"];
        }

        if (array_key_exists("OrderInfo",$param) and $param["OrderInfo"] !== null) {
            $this->OrderInfo = new OrderInfo();
            $this->OrderInfo->deserialize($param["OrderInfo"]);
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("EnableOverrun",$param) and $param["EnableOverrun"] !== null) {
            $this->EnableOverrun = $param["EnableOverrun"];
        }

        if (array_key_exists("ExtPackageType",$param) and $param["ExtPackageType"] !== null) {
            $this->ExtPackageType = $param["ExtPackageType"];
        }

        if (array_key_exists("EnvCharged",$param) and $param["EnvCharged"] !== null) {
            $this->EnvCharged = $param["EnvCharged"];
        }

        if (array_key_exists("EnvActivated",$param) and $param["EnvActivated"] !== null) {
            $this->EnvActivated = $param["EnvActivated"];
        }
    }
}
