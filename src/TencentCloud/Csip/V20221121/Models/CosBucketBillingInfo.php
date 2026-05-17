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
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getOwnerUin() 获取uin
 * @method void setOwnerUin(string $OwnerUin) 设置uin
 * @method string getOwnerNickName() 获取昵称
 * @method void setOwnerNickName(string $OwnerNickName) 设置昵称
 * @method integer getBucketCount() 获取存储桶数量
 * @method void setBucketCount(integer $BucketCount) 设置存储桶数量
 * @method integer getBuyStatus() 获取0 未购买 1  已单独购买 2 已被共享
 * @method void setBuyStatus(integer $BuyStatus) 设置0 未购买 1  已单独购买 2 已被共享
 * @method integer getShareFromAppId() 获取共享账号appid
 * @method void setShareFromAppId(integer $ShareFromAppId) 设置共享账号appid
 * @method string getShareFromUin() 获取共享账号uin
 * @method void setShareFromUin(string $ShareFromUin) 设置共享账号uin
 * @method string getShareFromNickName() 获取共享账号昵称
 * @method void setShareFromNickName(string $ShareFromNickName) 设置共享账号昵称
 * @method integer getMonitorBucketCount() 获取监控的存储桶数
 * @method void setMonitorBucketCount(integer $MonitorBucketCount) 设置监控的存储桶数
 * @method integer getIsAutoMonitor() 获取0 关闭 1 开启
 * @method void setIsAutoMonitor(integer $IsAutoMonitor) 设置0 关闭 1 开启
 */
class CosBucketBillingInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string uin
     */
    public $OwnerUin;

    /**
     * @var string 昵称
     */
    public $OwnerNickName;

    /**
     * @var integer 存储桶数量
     */
    public $BucketCount;

    /**
     * @var integer 0 未购买 1  已单独购买 2 已被共享
     */
    public $BuyStatus;

    /**
     * @var integer 共享账号appid
     */
    public $ShareFromAppId;

    /**
     * @var string 共享账号uin
     */
    public $ShareFromUin;

    /**
     * @var string 共享账号昵称
     */
    public $ShareFromNickName;

    /**
     * @var integer 监控的存储桶数
     */
    public $MonitorBucketCount;

    /**
     * @var integer 0 关闭 1 开启
     */
    public $IsAutoMonitor;

    /**
     * @param integer $AppId appid
     * @param string $OwnerUin uin
     * @param string $OwnerNickName 昵称
     * @param integer $BucketCount 存储桶数量
     * @param integer $BuyStatus 0 未购买 1  已单独购买 2 已被共享
     * @param integer $ShareFromAppId 共享账号appid
     * @param string $ShareFromUin 共享账号uin
     * @param string $ShareFromNickName 共享账号昵称
     * @param integer $MonitorBucketCount 监控的存储桶数
     * @param integer $IsAutoMonitor 0 关闭 1 开启
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
    }
}
