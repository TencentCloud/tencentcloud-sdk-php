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
 * @method boolean getServiceEnabled() 获取KMS服务是否开通， true 表示已开通
 * @method void setServiceEnabled(boolean $ServiceEnabled) 设置KMS服务是否开通， true 表示已开通
 * @method integer getInvalidType() 获取服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放
 * @method void setInvalidType(integer $InvalidType) 设置服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放
 * @method integer getUserLevel() 获取0-普通版，1-旗舰版
 * @method void setUserLevel(integer $UserLevel) 设置0-普通版，1-旗舰版
 * @method integer getProExpireTime() 获取旗舰版到期时间（Epoch Unix Timestamp）。
 * @method void setProExpireTime(integer $ProExpireTime) 设置旗舰版到期时间（Epoch Unix Timestamp）。
 * @method integer getProRenewFlag() 获取旗舰版是否自动续费：0-不自动续费，1-自动续费
 * @method void setProRenewFlag(integer $ProRenewFlag) 设置旗舰版是否自动续费：0-不自动续费，1-自动续费
 * @method string getProResourceId() 获取旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空
 * @method void setProResourceId(string $ProResourceId) 设置旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空
 * @method boolean getExclusiveVSMEnabled() 获取是否开通 KMS 托管版
 * @method void setExclusiveVSMEnabled(boolean $ExclusiveVSMEnabled) 设置是否开通 KMS 托管版
 * @method boolean getExclusiveHSMEnabled() 获取是否开通 KMS 独享版
 * @method void setExclusiveHSMEnabled(boolean $ExclusiveHSMEnabled) 设置是否开通 KMS 独享版
 * @method string getSubscriptionInfo() 获取KMS 订阅信息。
 * @method void setSubscriptionInfo(string $SubscriptionInfo) 设置KMS 订阅信息。
 * @method integer getCmkUserCount() 获取返回KMS用户密钥使用数量
 * @method void setCmkUserCount(integer $CmkUserCount) 设置返回KMS用户密钥使用数量
 * @method integer getCmkLimit() 获取返回KMS用户密钥规格数量
 * @method void setCmkLimit(integer $CmkLimit) 设置返回KMS用户密钥规格数量
 * @method array getExclusiveHSMList() 获取返回独享集群组
 * @method void setExclusiveHSMList(array $ExclusiveHSMList) 设置返回独享集群组
 * @method boolean getIsAllowedDataKeyHosted() 获取是否支持数据密钥托管。1:支持，0:不支持。
 * @method void setIsAllowedDataKeyHosted(boolean $IsAllowedDataKeyHosted) 设置是否支持数据密钥托管。1:支持，0:不支持。
 * @method integer getDataKeyLimit() 获取IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度
 * @method void setDataKeyLimit(integer $DataKeyLimit) 设置IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度
 * @method integer getFreeDataKeyLimit() 获取IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。
 * @method void setFreeDataKeyLimit(integer $FreeDataKeyLimit) 设置IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。
 * @method integer getDataKeyUsedCount() 获取IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。
 * @method void setDataKeyUsedCount(integer $DataKeyUsedCount) 设置IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。
 * @method array getSyncTaskList() 获取同步任务的目标地域信息
 * @method void setSyncTaskList(array $SyncTaskList) 设置同步任务的目标地域信息
 * @method boolean getIsAllowedSync() 获取是否支持同步任务。true:支持，false:不支持。
 * @method void setIsAllowedSync(boolean $IsAllowedSync) 设置是否支持同步任务。true:支持，false:不支持。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean KMS服务是否开通， true 表示已开通
     */
    public $ServiceEnabled;

    /**
     * @var integer 服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放
     */
    public $InvalidType;

    /**
     * @var integer 0-普通版，1-旗舰版
     */
    public $UserLevel;

    /**
     * @var integer 旗舰版到期时间（Epoch Unix Timestamp）。
     */
    public $ProExpireTime;

    /**
     * @var integer 旗舰版是否自动续费：0-不自动续费，1-自动续费
     */
    public $ProRenewFlag;

    /**
     * @var string 旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空
     */
    public $ProResourceId;

    /**
     * @var boolean 是否开通 KMS 托管版
     */
    public $ExclusiveVSMEnabled;

    /**
     * @var boolean 是否开通 KMS 独享版
     */
    public $ExclusiveHSMEnabled;

    /**
     * @var string KMS 订阅信息。
     */
    public $SubscriptionInfo;

    /**
     * @var integer 返回KMS用户密钥使用数量
     */
    public $CmkUserCount;

    /**
     * @var integer 返回KMS用户密钥规格数量
     */
    public $CmkLimit;

    /**
     * @var array 返回独享集群组
     */
    public $ExclusiveHSMList;

    /**
     * @var boolean 是否支持数据密钥托管。1:支持，0:不支持。
     */
    public $IsAllowedDataKeyHosted;

    /**
     * @var integer IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度
     */
    public $DataKeyLimit;

    /**
     * @var integer IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。
     */
    public $FreeDataKeyLimit;

    /**
     * @var integer IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。
     */
    public $DataKeyUsedCount;

    /**
     * @var array 同步任务的目标地域信息
     */
    public $SyncTaskList;

    /**
     * @var boolean 是否支持同步任务。true:支持，false:不支持。
     */
    public $IsAllowedSync;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled KMS服务是否开通， true 表示已开通
     * @param integer $InvalidType 服务不可用类型： 0-未购买，1-正常， 2-欠费停服， 3-资源释放
     * @param integer $UserLevel 0-普通版，1-旗舰版
     * @param integer $ProExpireTime 旗舰版到期时间（Epoch Unix Timestamp）。
     * @param integer $ProRenewFlag 旗舰版是否自动续费：0-不自动续费，1-自动续费
     * @param string $ProResourceId 旗舰版购买记录的唯一性标识。如果未开通旗舰版，则返回值为空
     * @param boolean $ExclusiveVSMEnabled 是否开通 KMS 托管版
     * @param boolean $ExclusiveHSMEnabled 是否开通 KMS 独享版
     * @param string $SubscriptionInfo KMS 订阅信息。
     * @param integer $CmkUserCount 返回KMS用户密钥使用数量
     * @param integer $CmkLimit 返回KMS用户密钥规格数量
     * @param array $ExclusiveHSMList 返回独享集群组
     * @param boolean $IsAllowedDataKeyHosted 是否支持数据密钥托管。1:支持，0:不支持。
     * @param integer $DataKeyLimit IsAllowedDataKeyHosted为1时有效，数据密钥的购买额度
     * @param integer $FreeDataKeyLimit IsAllowedDataKeyHosted为1时有效，数据密钥免费额度。
     * @param integer $DataKeyUsedCount IsAllowedDataKeyHosted为1时有效，已使用的数据密钥数量。
     * @param array $SyncTaskList 同步任务的目标地域信息
     * @param boolean $IsAllowedSync 是否支持同步任务。true:支持，false:不支持。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
