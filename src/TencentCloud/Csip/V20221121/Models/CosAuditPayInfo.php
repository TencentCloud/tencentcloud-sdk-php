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
 * cos审计支付信息
 *
 * @method integer getAppId() 获取<p>APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>APPID</p>
 * @method integer getOrderStatus() 获取<p>订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期</p>
 * @method void setOrderStatus(integer $OrderStatus) 设置<p>订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期</p>
 * @method integer getBucketNum() 获取<p>已购对象存储数量</p>
 * @method void setBucketNum(integer $BucketNum) 设置<p>已购对象存储数量</p>
 * @method integer getPayMode() 获取<p>支付模式，0-后付费 1-预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>支付模式，0-后付费 1-预付费</p>
 * @method integer getIsSelfBuy() 获取<p>是否单独购买，1-单独购买，2-被其它账号共享</p>
 * @method void setIsSelfBuy(integer $IsSelfBuy) 设置<p>是否单独购买，1-单独购买，2-被其它账号共享</p>
 * @method string getBeginTime() 获取<p>订单开始时间</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>订单开始时间</p>
 * @method string getEndTime() 获取<p>订单到期时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>订单到期时间</p>
 * @method integer getAutoRenew() 获取<p>0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费</p>
 * @method integer getTimeSpan() 获取<p>订单时长</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>订单时长</p>
 * @method string getTimeUnit() 获取<p>时长单位</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时长单位</p>
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method string getBetaEndTime() 获取<p>公测结束时间</p>
 * @method void setBetaEndTime(string $BetaEndTime) 设置<p>公测结束时间</p>
 * @method string getTimeNow() 获取<p>系统当前时间</p>
 * @method void setTimeNow(string $TimeNow) 设置<p>系统当前时间</p>
 * @method integer getIsShareToOther() 获取<p>是否分享给其它账号，1-是，2-否</p>
 * @method void setIsShareToOther(integer $IsShareToOther) 设置<p>是否分享给其它账号，1-是，2-否</p>
 * @method string getUin() 获取<p>uin</p>
 * @method void setUin(string $Uin) 设置<p>uin</p>
 * @method string getNickName() 获取<p>昵称</p>
 * @method void setNickName(string $NickName) 设置<p>昵称</p>
 * @method array getBindBucket() 获取<p>共享的bucketIdSet</p>
 * @method void setBindBucket(array $BindBucket) 设置<p>共享的bucketIdSet</p>
 * @method array getSharedAppIdSet() 获取<p>共享的appid</p>
 * @method void setSharedAppIdSet(array $SharedAppIdSet) 设置<p>共享的appid</p>
 * @method integer getPostPayStatus() 获取<p>是否已经开启后付费</p>
 * @method void setPostPayStatus(integer $PostPayStatus) 设置<p>是否已经开启后付费</p>
 * @method integer getIsTestUser() 获取<p>0：未做过试用期试用   1 ：做过试用期试用</p>
 * @method void setIsTestUser(integer $IsTestUser) 设置<p>0：未做过试用期试用   1 ：做过试用期试用</p>
 * @method integer getAvailableBucketNum() 获取<p>剩余可用数</p>
 * @method void setAvailableBucketNum(integer $AvailableBucketNum) 设置<p>剩余可用数</p>
 * @method integer getMonitorBucketNum() 获取<p>已开启的监测存储桶数</p>
 * @method void setMonitorBucketNum(integer $MonitorBucketNum) 设置<p>已开启的监测存储桶数</p>
 * @method integer getTotalBucketNum() 获取<p>总的存储桶数</p>
 * @method void setTotalBucketNum(integer $TotalBucketNum) 设置<p>总的存储桶数</p>
 * @method array getPostProductStatusList() 获取<p>后付费产品开关状态</p>
 * @method void setPostProductStatusList(array $PostProductStatusList) 设置<p>后付费产品开关状态</p>
 * @method array getPostProductBuyStatusList() 获取<p>后付费产品购买状态</p>
 * @method void setPostProductBuyStatusList(array $PostProductBuyStatusList) 设置<p>后付费产品购买状态</p>
 * @method string getNewPostPayResourceId() 获取<p>新后付费资源id</p>
 * @method void setNewPostPayResourceId(string $NewPostPayResourceId) 设置<p>新后付费资源id</p>
 */
class CosAuditPayInfo extends AbstractModel
{
    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var integer <p>订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期</p>
     */
    public $OrderStatus;

    /**
     * @var integer <p>已购对象存储数量</p>
     */
    public $BucketNum;

    /**
     * @var integer <p>支付模式，0-后付费 1-预付费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>是否单独购买，1-单独购买，2-被其它账号共享</p>
     */
    public $IsSelfBuy;

    /**
     * @var string <p>订单开始时间</p>
     */
    public $BeginTime;

    /**
     * @var string <p>订单到期时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>订单时长</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>时长单位</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>公测结束时间</p>
     */
    public $BetaEndTime;

    /**
     * @var string <p>系统当前时间</p>
     */
    public $TimeNow;

    /**
     * @var integer <p>是否分享给其它账号，1-是，2-否</p>
     */
    public $IsShareToOther;

    /**
     * @var string <p>uin</p>
     */
    public $Uin;

    /**
     * @var string <p>昵称</p>
     */
    public $NickName;

    /**
     * @var array <p>共享的bucketIdSet</p>
     */
    public $BindBucket;

    /**
     * @var array <p>共享的appid</p>
     */
    public $SharedAppIdSet;

    /**
     * @var integer <p>是否已经开启后付费</p>
     */
    public $PostPayStatus;

    /**
     * @var integer <p>0：未做过试用期试用   1 ：做过试用期试用</p>
     */
    public $IsTestUser;

    /**
     * @var integer <p>剩余可用数</p>
     */
    public $AvailableBucketNum;

    /**
     * @var integer <p>已开启的监测存储桶数</p>
     */
    public $MonitorBucketNum;

    /**
     * @var integer <p>总的存储桶数</p>
     */
    public $TotalBucketNum;

    /**
     * @var array <p>后付费产品开关状态</p>
     */
    public $PostProductStatusList;

    /**
     * @var array <p>后付费产品购买状态</p>
     */
    public $PostProductBuyStatusList;

    /**
     * @var string <p>新后付费资源id</p>
     */
    public $NewPostPayResourceId;

    /**
     * @param integer $AppId <p>APPID</p>
     * @param integer $OrderStatus <p>订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期</p>
     * @param integer $BucketNum <p>已购对象存储数量</p>
     * @param integer $PayMode <p>支付模式，0-后付费 1-预付费</p>
     * @param integer $IsSelfBuy <p>是否单独购买，1-单独购买，2-被其它账号共享</p>
     * @param string $BeginTime <p>订单开始时间</p>
     * @param string $EndTime <p>订单到期时间</p>
     * @param integer $AutoRenew <p>0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费</p>
     * @param integer $TimeSpan <p>订单时长</p>
     * @param string $TimeUnit <p>时长单位</p>
     * @param string $ResourceId <p>资源id</p>
     * @param string $BetaEndTime <p>公测结束时间</p>
     * @param string $TimeNow <p>系统当前时间</p>
     * @param integer $IsShareToOther <p>是否分享给其它账号，1-是，2-否</p>
     * @param string $Uin <p>uin</p>
     * @param string $NickName <p>昵称</p>
     * @param array $BindBucket <p>共享的bucketIdSet</p>
     * @param array $SharedAppIdSet <p>共享的appid</p>
     * @param integer $PostPayStatus <p>是否已经开启后付费</p>
     * @param integer $IsTestUser <p>0：未做过试用期试用   1 ：做过试用期试用</p>
     * @param integer $AvailableBucketNum <p>剩余可用数</p>
     * @param integer $MonitorBucketNum <p>已开启的监测存储桶数</p>
     * @param integer $TotalBucketNum <p>总的存储桶数</p>
     * @param array $PostProductStatusList <p>后付费产品开关状态</p>
     * @param array $PostProductBuyStatusList <p>后付费产品购买状态</p>
     * @param string $NewPostPayResourceId <p>新后付费资源id</p>
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

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("BucketNum",$param) and $param["BucketNum"] !== null) {
            $this->BucketNum = $param["BucketNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BetaEndTime",$param) and $param["BetaEndTime"] !== null) {
            $this->BetaEndTime = $param["BetaEndTime"];
        }

        if (array_key_exists("TimeNow",$param) and $param["TimeNow"] !== null) {
            $this->TimeNow = $param["TimeNow"];
        }

        if (array_key_exists("IsShareToOther",$param) and $param["IsShareToOther"] !== null) {
            $this->IsShareToOther = $param["IsShareToOther"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("BindBucket",$param) and $param["BindBucket"] !== null) {
            $this->BindBucket = [];
            foreach ($param["BindBucket"] as $key => $value){
                $obj = new CosBucketId();
                $obj->deserialize($value);
                array_push($this->BindBucket, $obj);
            }
        }

        if (array_key_exists("SharedAppIdSet",$param) and $param["SharedAppIdSet"] !== null) {
            $this->SharedAppIdSet = $param["SharedAppIdSet"];
        }

        if (array_key_exists("PostPayStatus",$param) and $param["PostPayStatus"] !== null) {
            $this->PostPayStatus = $param["PostPayStatus"];
        }

        if (array_key_exists("IsTestUser",$param) and $param["IsTestUser"] !== null) {
            $this->IsTestUser = $param["IsTestUser"];
        }

        if (array_key_exists("AvailableBucketNum",$param) and $param["AvailableBucketNum"] !== null) {
            $this->AvailableBucketNum = $param["AvailableBucketNum"];
        }

        if (array_key_exists("MonitorBucketNum",$param) and $param["MonitorBucketNum"] !== null) {
            $this->MonitorBucketNum = $param["MonitorBucketNum"];
        }

        if (array_key_exists("TotalBucketNum",$param) and $param["TotalBucketNum"] !== null) {
            $this->TotalBucketNum = $param["TotalBucketNum"];
        }

        if (array_key_exists("PostProductStatusList",$param) and $param["PostProductStatusList"] !== null) {
            $this->PostProductStatusList = $param["PostProductStatusList"];
        }

        if (array_key_exists("PostProductBuyStatusList",$param) and $param["PostProductBuyStatusList"] !== null) {
            $this->PostProductBuyStatusList = $param["PostProductBuyStatusList"];
        }

        if (array_key_exists("NewPostPayResourceId",$param) and $param["NewPostPayResourceId"] !== null) {
            $this->NewPostPayResourceId = $param["NewPostPayResourceId"];
        }
    }
}
