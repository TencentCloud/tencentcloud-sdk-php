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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储桶数量
 *
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getOwnerUin() 获取<p>uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>uin</p>
 * @method string getOwnerNickName() 获取<p>昵称</p>
 * @method void setOwnerNickName(string $OwnerNickName) 设置<p>昵称</p>
 * @method integer getBucketCount() 获取<p>存储桶数量</p>
 * @method void setBucketCount(integer $BucketCount) 设置<p>存储桶数量</p>
 * @method integer getBuyStatus() 获取<p>0 未购买 1  已单独购买 2 已被共享</p>
 * @method void setBuyStatus(integer $BuyStatus) 设置<p>0 未购买 1  已单独购买 2 已被共享</p>
 * @method integer getShareFromAppId() 获取<p>共享账号appid</p>
 * @method void setShareFromAppId(integer $ShareFromAppId) 设置<p>共享账号appid</p>
 * @method string getShareFromUin() 获取<p>共享账号uin</p>
 * @method void setShareFromUin(string $ShareFromUin) 设置<p>共享账号uin</p>
 * @method string getShareFromNickName() 获取<p>共享账号昵称</p>
 * @method void setShareFromNickName(string $ShareFromNickName) 设置<p>共享账号昵称</p>
 * @method integer getMonitorBucketCount() 获取<p>监控的存储桶数</p>
 * @method void setMonitorBucketCount(integer $MonitorBucketCount) 设置<p>监控的存储桶数</p>
 * @method integer getIsAutoMonitor() 获取<p>0 关闭 1 开启</p>
 * @method void setIsAutoMonitor(integer $IsAutoMonitor) 设置<p>0 关闭 1 开启</p>
 * @method boolean getLogFeatureWhitelist() 获取<p>是否启用白名单日志功能</p>
 * @method void setLogFeatureWhitelist(boolean $LogFeatureWhitelist) 设置<p>是否启用白名单日志功能</p>
 * @method boolean getIsHaveNewPostOrder() 获取<p>是否存在新的后付费订单</p>
 * @method void setIsHaveNewPostOrder(boolean $IsHaveNewPostOrder) 设置<p>是否存在新的后付费订单</p>
 * @method boolean getIsHaveOldPostOrder() 获取<p>是否存在旧后付费订单</p>
 * @method void setIsHaveOldPostOrder(boolean $IsHaveOldPostOrder) 设置<p>是否存在旧后付费订单</p>
 * @method array getPostProductList() 获取<p>后付费产品列表</p>
 * @method void setPostProductList(array $PostProductList) 设置<p>后付费产品列表</p>
 */
class CosBucketBillingInfo extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>昵称</p>
     */
    public $OwnerNickName;

    /**
     * @var integer <p>存储桶数量</p>
     */
    public $BucketCount;

    /**
     * @var integer <p>0 未购买 1  已单独购买 2 已被共享</p>
     */
    public $BuyStatus;

    /**
     * @var integer <p>共享账号appid</p>
     */
    public $ShareFromAppId;

    /**
     * @var string <p>共享账号uin</p>
     */
    public $ShareFromUin;

    /**
     * @var string <p>共享账号昵称</p>
     */
    public $ShareFromNickName;

    /**
     * @var integer <p>监控的存储桶数</p>
     */
    public $MonitorBucketCount;

    /**
     * @var integer <p>0 关闭 1 开启</p>
     */
    public $IsAutoMonitor;

    /**
     * @var boolean <p>是否启用白名单日志功能</p>
     */
    public $LogFeatureWhitelist;

    /**
     * @var boolean <p>是否存在新的后付费订单</p>
     */
    public $IsHaveNewPostOrder;

    /**
     * @var boolean <p>是否存在旧后付费订单</p>
     */
    public $IsHaveOldPostOrder;

    /**
     * @var array <p>后付费产品列表</p>
     */
    public $PostProductList;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $OwnerUin <p>uin</p>
     * @param string $OwnerNickName <p>昵称</p>
     * @param integer $BucketCount <p>存储桶数量</p>
     * @param integer $BuyStatus <p>0 未购买 1  已单独购买 2 已被共享</p>
     * @param integer $ShareFromAppId <p>共享账号appid</p>
     * @param string $ShareFromUin <p>共享账号uin</p>
     * @param string $ShareFromNickName <p>共享账号昵称</p>
     * @param integer $MonitorBucketCount <p>监控的存储桶数</p>
     * @param integer $IsAutoMonitor <p>0 关闭 1 开启</p>
     * @param boolean $LogFeatureWhitelist <p>是否启用白名单日志功能</p>
     * @param boolean $IsHaveNewPostOrder <p>是否存在新的后付费订单</p>
     * @param boolean $IsHaveOldPostOrder <p>是否存在旧后付费订单</p>
     * @param array $PostProductList <p>后付费产品列表</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerNickName",$param) and $param["OwnerNickName"] !== null) {
            $this->OwnerNickName = $param["OwnerNickName"];
        }

        if (array_key_exists("BucketCount",$param) and $param["BucketCount"] !== null) {
            $this->BucketCount = $param["BucketCount"];
        }

        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("ShareFromAppId",$param) and $param["ShareFromAppId"] !== null) {
            $this->ShareFromAppId = $param["ShareFromAppId"];
        }

        if (array_key_exists("ShareFromUin",$param) and $param["ShareFromUin"] !== null) {
            $this->ShareFromUin = $param["ShareFromUin"];
        }

        if (array_key_exists("ShareFromNickName",$param) and $param["ShareFromNickName"] !== null) {
            $this->ShareFromNickName = $param["ShareFromNickName"];
        }

        if (array_key_exists("MonitorBucketCount",$param) and $param["MonitorBucketCount"] !== null) {
            $this->MonitorBucketCount = $param["MonitorBucketCount"];
        }

        if (array_key_exists("IsAutoMonitor",$param) and $param["IsAutoMonitor"] !== null) {
            $this->IsAutoMonitor = $param["IsAutoMonitor"];
        }

        if (array_key_exists("LogFeatureWhitelist",$param) and $param["LogFeatureWhitelist"] !== null) {
            $this->LogFeatureWhitelist = $param["LogFeatureWhitelist"];
        }

        if (array_key_exists("IsHaveNewPostOrder",$param) and $param["IsHaveNewPostOrder"] !== null) {
            $this->IsHaveNewPostOrder = $param["IsHaveNewPostOrder"];
        }

        if (array_key_exists("IsHaveOldPostOrder",$param) and $param["IsHaveOldPostOrder"] !== null) {
            $this->IsHaveOldPostOrder = $param["IsHaveOldPostOrder"];
        }

        if (array_key_exists("PostProductList",$param) and $param["PostProductList"] !== null) {
            $this->PostProductList = $param["PostProductList"];
        }
    }
}
