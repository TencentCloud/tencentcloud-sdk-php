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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境计费信息
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getPackageId() 获取<p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
 * @method void setPackageId(string $PackageId) 设置<p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
 * @method boolean getIsAutoRenew() 获取<p>自动续费标记</p>
 * @method void setIsAutoRenew(boolean $IsAutoRenew) 设置<p>自动续费标记</p>
 * @method string getStatus() 获取<p>状态。包含以下取值：</p><li> 空字符串：初始化中</li><li> NORMAL：正常</li><li> ISOLATE：隔离</li>
 * @method void setStatus(string $Status) 设置<p>状态。包含以下取值：</p><li> 空字符串：初始化中</li><li> NORMAL：正常</li><li> ISOLATE：隔离</li>
 * @method string getPayMode() 获取<p>支付方式。包含以下取值：</p><li> PREPAYMENT：预付费</li><li> POSTPAID：后付费</li>
 * @method void setPayMode(string $PayMode) 设置<p>支付方式。包含以下取值：</p><li> PREPAYMENT：预付费</li><li> POSTPAID：后付费</li>
 * @method string getIsolatedTime() 获取<p>隔离时间，最近一次隔离的时间</p>
 * @method void setIsolatedTime(string $IsolatedTime) 设置<p>隔离时间，最近一次隔离的时间</p>
 * @method string getExpireTime() 获取<p>过期时间，套餐即将到期的时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间，套餐即将到期的时间</p>
 * @method string getCreateTime() 获取<p>创建时间，第一次接入计费方案的时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，第一次接入计费方案的时间。</p>
 * @method string getUpdateTime() 获取<p>更新时间，计费信息最近一次更新的时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间，计费信息最近一次更新的时间。</p>
 * @method boolean getIsAlwaysFree() 获取<p>true表示从未升级过付费版。</p>
 * @method void setIsAlwaysFree(boolean $IsAlwaysFree) 设置<p>true表示从未升级过付费版。</p>
 * @method string getPaymentChannel() 获取<p>付费渠道。</p><li> miniapp：小程序</li><li> qcloud：腾讯云</li>
 * @method void setPaymentChannel(string $PaymentChannel) 设置<p>付费渠道。</p><li> miniapp：小程序</li><li> qcloud：腾讯云</li>
 * @method OrderInfo getOrderInfo() 获取<p>最新的订单信息</p>
 * @method void setOrderInfo(OrderInfo $OrderInfo) 设置<p>最新的订单信息</p>
 * @method string getFreeQuota() 获取<p>免费配额信息。</p>
 * @method void setFreeQuota(string $FreeQuota) 设置<p>免费配额信息。</p>
 * @method boolean getEnableOverrun() 获取<p>是否开启 <code>超过套餐额度部分转按量付费</code></p>
 * @method void setEnableOverrun(boolean $EnableOverrun) 设置<p>是否开启 <code>超过套餐额度部分转按量付费</code></p>
 * @method string getExtPackageType() 获取<p>环境套餐类型</p>
 * @method void setExtPackageType(string $ExtPackageType) 设置<p>环境套餐类型</p>
 * @method string getEnvCharged() 获取<p>是否付费期环境，可取值：yes/no。</p>
 * @method void setEnvCharged(string $EnvCharged) 设置<p>是否付费期环境，可取值：yes/no。</p>
 * @method string getEnvActivated() 获取<p>是否已激活，可取值：yes/no。</p>
 * @method void setEnvActivated(string $EnvActivated) 设置<p>是否已激活，可取值：yes/no。</p>
 */
class EnvBillingInfoItem extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
     */
    public $PackageId;

    /**
     * @var boolean <p>自动续费标记</p>
     */
    public $IsAutoRenew;

    /**
     * @var string <p>状态。包含以下取值：</p><li> 空字符串：初始化中</li><li> NORMAL：正常</li><li> ISOLATE：隔离</li>
     */
    public $Status;

    /**
     * @var string <p>支付方式。包含以下取值：</p><li> PREPAYMENT：预付费</li><li> POSTPAID：后付费</li>
     */
    public $PayMode;

    /**
     * @var string <p>隔离时间，最近一次隔离的时间</p>
     */
    public $IsolatedTime;

    /**
     * @var string <p>过期时间，套餐即将到期的时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>创建时间，第一次接入计费方案的时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间，计费信息最近一次更新的时间。</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>true表示从未升级过付费版。</p>
     */
    public $IsAlwaysFree;

    /**
     * @var string <p>付费渠道。</p><li> miniapp：小程序</li><li> qcloud：腾讯云</li>
     */
    public $PaymentChannel;

    /**
     * @var OrderInfo <p>最新的订单信息</p>
     */
    public $OrderInfo;

    /**
     * @var string <p>免费配额信息。</p>
     */
    public $FreeQuota;

    /**
     * @var boolean <p>是否开启 <code>超过套餐额度部分转按量付费</code></p>
     */
    public $EnableOverrun;

    /**
     * @var string <p>环境套餐类型</p>
     */
    public $ExtPackageType;

    /**
     * @var string <p>是否付费期环境，可取值：yes/no。</p>
     */
    public $EnvCharged;

    /**
     * @var string <p>是否已激活，可取值：yes/no。</p>
     */
    public $EnvActivated;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $PackageId <p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
     * @param boolean $IsAutoRenew <p>自动续费标记</p>
     * @param string $Status <p>状态。包含以下取值：</p><li> 空字符串：初始化中</li><li> NORMAL：正常</li><li> ISOLATE：隔离</li>
     * @param string $PayMode <p>支付方式。包含以下取值：</p><li> PREPAYMENT：预付费</li><li> POSTPAID：后付费</li>
     * @param string $IsolatedTime <p>隔离时间，最近一次隔离的时间</p>
     * @param string $ExpireTime <p>过期时间，套餐即将到期的时间</p>
     * @param string $CreateTime <p>创建时间，第一次接入计费方案的时间。</p>
     * @param string $UpdateTime <p>更新时间，计费信息最近一次更新的时间。</p>
     * @param boolean $IsAlwaysFree <p>true表示从未升级过付费版。</p>
     * @param string $PaymentChannel <p>付费渠道。</p><li> miniapp：小程序</li><li> qcloud：腾讯云</li>
     * @param OrderInfo $OrderInfo <p>最新的订单信息</p>
     * @param string $FreeQuota <p>免费配额信息。</p>
     * @param boolean $EnableOverrun <p>是否开启 <code>超过套餐额度部分转按量付费</code></p>
     * @param string $ExtPackageType <p>环境套餐类型</p>
     * @param string $EnvCharged <p>是否付费期环境，可取值：yes/no。</p>
     * @param string $EnvActivated <p>是否已激活，可取值：yes/no。</p>
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
