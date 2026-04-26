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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus返回参数结构体
 *
 * @method boolean getServiceEnabled() 获取<p>KMS服务是否开通， true 表示已开通</p>
 * @method void setServiceEnabled(boolean $ServiceEnabled) 设置<p>KMS服务是否开通， true 表示已开通</p>
 * @method integer getInvalidType() 获取<p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放</p>
 * @method void setInvalidType(integer $InvalidType) 设置<p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放</p>
 * @method integer getUserLevel() 获取<p>0-普通版，1-旗舰版</p>
 * @method void setUserLevel(integer $UserLevel) 设置<p>0-普通版，1-旗舰版</p>
 * @method integer getProExpireTime() 获取<p>旗舰版到期时间（Epoch Unix Timestamp）。</p>
 * @method void setProExpireTime(integer $ProExpireTime) 设置<p>旗舰版到期时间（Epoch Unix Timestamp）。</p>
 * @method integer getProRenewFlag() 获取<p>旗舰版是否自动续费：0-不自动续费，1-自动续费</p>
 * @method void setProRenewFlag(integer $ProRenewFlag) 设置<p>旗舰版是否自动续费：0-不自动续费，1-自动续费</p>
 * @method string getProResourceId() 获取<p>旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空</p>
 * @method void setProResourceId(string $ProResourceId) 设置<p>旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空</p>
 * @method boolean getExclusiveVSMEnabled() 获取<p>是否开通 KMS 托管版</p>
 * @method void setExclusiveVSMEnabled(boolean $ExclusiveVSMEnabled) 设置<p>是否开通 KMS 托管版</p>
 * @method boolean getExclusiveHSMEnabled() 获取<p>是否开通 KMS 独享版</p>
 * @method void setExclusiveHSMEnabled(boolean $ExclusiveHSMEnabled) 设置<p>是否开通 KMS 独享版</p>
 * @method string getSubscriptionInfo() 获取<p>KMS 订阅信息。</p>
 * @method void setSubscriptionInfo(string $SubscriptionInfo) 设置<p>KMS 订阅信息。</p>
 * @method integer getCmkUserCount() 获取<p>返回KMS用户密钥使用数量</p>
 * @method void setCmkUserCount(integer $CmkUserCount) 设置<p>返回KMS用户密钥使用数量</p>
 * @method integer getCmkLimit() 获取<p>返回KMS用户密钥规格数量</p>
 * @method void setCmkLimit(integer $CmkLimit) 设置<p>返回KMS用户密钥规格数量</p>
 * @method array getExclusiveHSMList() 获取<p>返回独享集群组</p>
 * @method void setExclusiveHSMList(array $ExclusiveHSMList) 设置<p>返回独享集群组</p>
 * @method boolean getIsAllowedDataKeyHosted() 获取<p>是否支持数据密钥托管。1:支持，0:不支持。</p>
 * @method void setIsAllowedDataKeyHosted(boolean $IsAllowedDataKeyHosted) 设置<p>是否支持数据密钥托管。1:支持，0:不支持。</p>
 * @method integer getDataKeyLimit() 获取<p>IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度</p>
 * @method void setDataKeyLimit(integer $DataKeyLimit) 设置<p>IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度</p>
 * @method integer getFreeDataKeyLimit() 获取<p>IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。</p>
 * @method void setFreeDataKeyLimit(integer $FreeDataKeyLimit) 设置<p>IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。</p>
 * @method integer getDataKeyUsedCount() 获取<p>IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。</p>
 * @method void setDataKeyUsedCount(integer $DataKeyUsedCount) 设置<p>IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。</p>
 * @method array getSyncTaskList() 获取<p>同步任务的目标地域信息</p>
 * @method void setSyncTaskList(array $SyncTaskList) 设置<p>同步任务的目标地域信息</p>
 * @method boolean getIsAllowedSync() 获取<p>是否支持同步任务。true:支持，false:不支持。</p>
 * @method void setIsAllowedSync(boolean $IsAllowedSync) 设置<p>是否支持同步任务。true:支持，false:不支持。</p>
 * @method integer getQpsLimit() 获取<p>地域下的QPS</p>
 * @method void setQpsLimit(integer $QpsLimit) 设置<p>地域下的QPS</p>
 * @method integer getQpsTotalLimit() 获取<p>总的QPS值</p>
 * @method void setQpsTotalLimit(integer $QpsTotalLimit) 设置<p>总的QPS值</p>
 * @method array getRegionsQps() 获取<p>地域下的QPS</p>
 * @method void setRegionsQps(array $RegionsQps) 设置<p>地域下的QPS</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean <p>KMS服务是否开通， true 表示已开通</p>
     */
    public $ServiceEnabled;

    /**
     * @var integer <p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放</p>
     */
    public $InvalidType;

    /**
     * @var integer <p>0-普通版，1-旗舰版</p>
     */
    public $UserLevel;

    /**
     * @var integer <p>旗舰版到期时间（Epoch Unix Timestamp）。</p>
     */
    public $ProExpireTime;

    /**
     * @var integer <p>旗舰版是否自动续费：0-不自动续费，1-自动续费</p>
     */
    public $ProRenewFlag;

    /**
     * @var string <p>旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空</p>
     */
    public $ProResourceId;

    /**
     * @var boolean <p>是否开通 KMS 托管版</p>
     */
    public $ExclusiveVSMEnabled;

    /**
     * @var boolean <p>是否开通 KMS 独享版</p>
     */
    public $ExclusiveHSMEnabled;

    /**
     * @var string <p>KMS 订阅信息。</p>
     */
    public $SubscriptionInfo;

    /**
     * @var integer <p>返回KMS用户密钥使用数量</p>
     */
    public $CmkUserCount;

    /**
     * @var integer <p>返回KMS用户密钥规格数量</p>
     */
    public $CmkLimit;

    /**
     * @var array <p>返回独享集群组</p>
     */
    public $ExclusiveHSMList;

    /**
     * @var boolean <p>是否支持数据密钥托管。1:支持，0:不支持。</p>
     */
    public $IsAllowedDataKeyHosted;

    /**
     * @var integer <p>IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度</p>
     */
    public $DataKeyLimit;

    /**
     * @var integer <p>IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。</p>
     */
    public $FreeDataKeyLimit;

    /**
     * @var integer <p>IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。</p>
     */
    public $DataKeyUsedCount;

    /**
     * @var array <p>同步任务的目标地域信息</p>
     */
    public $SyncTaskList;

    /**
     * @var boolean <p>是否支持同步任务。true:支持，false:不支持。</p>
     */
    public $IsAllowedSync;

    /**
     * @var integer <p>地域下的QPS</p>
     */
    public $QpsLimit;

    /**
     * @var integer <p>总的QPS值</p>
     */
    public $QpsTotalLimit;

    /**
     * @var array <p>地域下的QPS</p>
     */
    public $RegionsQps;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled <p>KMS服务是否开通， true 表示已开通</p>
     * @param integer $InvalidType <p>服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放</p>
     * @param integer $UserLevel <p>0-普通版，1-旗舰版</p>
     * @param integer $ProExpireTime <p>旗舰版到期时间（Epoch Unix Timestamp）。</p>
     * @param integer $ProRenewFlag <p>旗舰版是否自动续费：0-不自动续费，1-自动续费</p>
     * @param string $ProResourceId <p>旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空</p>
     * @param boolean $ExclusiveVSMEnabled <p>是否开通 KMS 托管版</p>
     * @param boolean $ExclusiveHSMEnabled <p>是否开通 KMS 独享版</p>
     * @param string $SubscriptionInfo <p>KMS 订阅信息。</p>
     * @param integer $CmkUserCount <p>返回KMS用户密钥使用数量</p>
     * @param integer $CmkLimit <p>返回KMS用户密钥规格数量</p>
     * @param array $ExclusiveHSMList <p>返回独享集群组</p>
     * @param boolean $IsAllowedDataKeyHosted <p>是否支持数据密钥托管。1:支持，0:不支持。</p>
     * @param integer $DataKeyLimit <p>IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度</p>
     * @param integer $FreeDataKeyLimit <p>IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。</p>
     * @param integer $DataKeyUsedCount <p>IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。</p>
     * @param array $SyncTaskList <p>同步任务的目标地域信息</p>
     * @param boolean $IsAllowedSync <p>是否支持同步任务。true:支持，false:不支持。</p>
     * @param integer $QpsLimit <p>地域下的QPS</p>
     * @param integer $QpsTotalLimit <p>总的QPS值</p>
     * @param array $RegionsQps <p>地域下的QPS</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("UserLevel",$param) and $param["UserLevel"] !== null) {
            $this->UserLevel = $param["UserLevel"];
        }

        if (array_key_exists("ProExpireTime",$param) and $param["ProExpireTime"] !== null) {
            $this->ProExpireTime = $param["ProExpireTime"];
        }

        if (array_key_exists("ProRenewFlag",$param) and $param["ProRenewFlag"] !== null) {
            $this->ProRenewFlag = $param["ProRenewFlag"];
        }

        if (array_key_exists("ProResourceId",$param) and $param["ProResourceId"] !== null) {
            $this->ProResourceId = $param["ProResourceId"];
        }

        if (array_key_exists("ExclusiveVSMEnabled",$param) and $param["ExclusiveVSMEnabled"] !== null) {
            $this->ExclusiveVSMEnabled = $param["ExclusiveVSMEnabled"];
        }

        if (array_key_exists("ExclusiveHSMEnabled",$param) and $param["ExclusiveHSMEnabled"] !== null) {
            $this->ExclusiveHSMEnabled = $param["ExclusiveHSMEnabled"];
        }

        if (array_key_exists("SubscriptionInfo",$param) and $param["SubscriptionInfo"] !== null) {
            $this->SubscriptionInfo = $param["SubscriptionInfo"];
        }

        if (array_key_exists("CmkUserCount",$param) and $param["CmkUserCount"] !== null) {
            $this->CmkUserCount = $param["CmkUserCount"];
        }

        if (array_key_exists("CmkLimit",$param) and $param["CmkLimit"] !== null) {
            $this->CmkLimit = $param["CmkLimit"];
        }

        if (array_key_exists("ExclusiveHSMList",$param) and $param["ExclusiveHSMList"] !== null) {
            $this->ExclusiveHSMList = [];
            foreach ($param["ExclusiveHSMList"] as $key => $value){
                $obj = new ExclusiveHSM();
                $obj->deserialize($value);
                array_push($this->ExclusiveHSMList, $obj);
            }
        }

        if (array_key_exists("IsAllowedDataKeyHosted",$param) and $param["IsAllowedDataKeyHosted"] !== null) {
            $this->IsAllowedDataKeyHosted = $param["IsAllowedDataKeyHosted"];
        }

        if (array_key_exists("DataKeyLimit",$param) and $param["DataKeyLimit"] !== null) {
            $this->DataKeyLimit = $param["DataKeyLimit"];
        }

        if (array_key_exists("FreeDataKeyLimit",$param) and $param["FreeDataKeyLimit"] !== null) {
            $this->FreeDataKeyLimit = $param["FreeDataKeyLimit"];
        }

        if (array_key_exists("DataKeyUsedCount",$param) and $param["DataKeyUsedCount"] !== null) {
            $this->DataKeyUsedCount = $param["DataKeyUsedCount"];
        }

        if (array_key_exists("SyncTaskList",$param) and $param["SyncTaskList"] !== null) {
            $this->SyncTaskList = [];
            foreach ($param["SyncTaskList"] as $key => $value){
                $obj = new DestinationSyncConfig();
                $obj->deserialize($value);
                array_push($this->SyncTaskList, $obj);
            }
        }

        if (array_key_exists("IsAllowedSync",$param) and $param["IsAllowedSync"] !== null) {
            $this->IsAllowedSync = $param["IsAllowedSync"];
        }

        if (array_key_exists("QpsLimit",$param) and $param["QpsLimit"] !== null) {
            $this->QpsLimit = $param["QpsLimit"];
        }

        if (array_key_exists("QpsTotalLimit",$param) and $param["QpsTotalLimit"] !== null) {
            $this->QpsTotalLimit = $param["QpsTotalLimit"];
        }

        if (array_key_exists("RegionsQps",$param) and $param["RegionsQps"] !== null) {
            $this->RegionsQps = [];
            foreach ($param["RegionsQps"] as $key => $value){
                $obj = new RegionQps();
                $obj->deserialize($value);
                array_push($this->RegionsQps, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
