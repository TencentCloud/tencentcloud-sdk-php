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
 * 受影响的存储桶信息
 *
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getBucketName() 获取桶名
 * @method void setBucketName(string $BucketName) 设置桶名
 * @method string getBucketRegion() 获取桶地域
 * @method void setBucketRegion(string $BucketRegion) 设置桶地域
 * @method string getBucketMarker() 获取桶备注信息
 * @method void setBucketMarker(string $BucketMarker) 设置桶备注信息
 * @method string getBucketUin() 获取桶uin
 * @method void setBucketUin(string $BucketUin) 设置桶uin
 * @method string getBucketNickName() 获取uin昵称
 * @method void setBucketNickName(string $BucketNickName) 设置uin昵称
 * @method string getBucketMainNickName() 获取uin主账号昵称
 * @method void setBucketMainNickName(string $BucketMainNickName) 设置uin主账号昵称
 * @method integer getBucketIdentify() 获取uin身份
 * @method void setBucketIdentify(integer $BucketIdentify) 设置uin身份
 * @method integer getLastScanTimestamp() 获取风险检出时间Unix时间单位毫秒
 * @method void setLastScanTimestamp(integer $LastScanTimestamp) 设置风险检出时间Unix时间单位毫秒
 * @method integer getHandleStatus() 获取状态信息
 * @method void setHandleStatus(integer $HandleStatus) 设置状态信息
 * @method string getPolicyName() 获取风险名称
 * @method void setPolicyName(string $PolicyName) 设置风险名称
 * @method integer getPolicyType() 获取风险类型
 * @method void setPolicyType(integer $PolicyType) 设置风险类型
 * @method integer getPolicyId() 获取策略id
 * @method void setPolicyId(integer $PolicyId) 设置策略id
 * @method integer getPolicyLevel() 获取策略级别
 * @method void setPolicyLevel(integer $PolicyLevel) 设置策略级别
 * @method string getPolicyDescription() 获取策略描述
 * @method void setPolicyDescription(string $PolicyDescription) 设置策略描述
 * @method string getBucketAccessWay() 获取访问方式
 * @method void setBucketAccessWay(string $BucketAccessWay) 设置访问方式
 * @method string getBucketTagInfo() 获取标签信息
 * @method void setBucketTagInfo(string $BucketTagInfo) 设置标签信息
 * @method integer getRiskId() 获取风险id
 * @method void setRiskId(integer $RiskId) 设置风险id
 * @method string getBucketRegionCode() 获取cos地域码值
 * @method void setBucketRegionCode(string $BucketRegionCode) 设置cos地域码值
 * @method integer getBucketMonitorStatus() 获取是否开启自动监测状态 0 关闭 1 开启
 * @method void setBucketMonitorStatus(integer $BucketMonitorStatus) 设置是否开启自动监测状态 0 关闭 1 开启
 */
class CosRiskBucketInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string 桶名
     */
    public $BucketName;

    /**
     * @var string 桶地域
     */
    public $BucketRegion;

    /**
     * @var string 桶备注信息
     */
    public $BucketMarker;

    /**
     * @var string 桶uin
     */
    public $BucketUin;

    /**
     * @var string uin昵称
     */
    public $BucketNickName;

    /**
     * @var string uin主账号昵称
     */
    public $BucketMainNickName;

    /**
     * @var integer uin身份
     */
    public $BucketIdentify;

    /**
     * @var integer 风险检出时间Unix时间单位毫秒
     */
    public $LastScanTimestamp;

    /**
     * @var integer 状态信息
     */
    public $HandleStatus;

    /**
     * @var string 风险名称
     */
    public $PolicyName;

    /**
     * @var integer 风险类型
     */
    public $PolicyType;

    /**
     * @var integer 策略id
     */
    public $PolicyId;

    /**
     * @var integer 策略级别
     */
    public $PolicyLevel;

    /**
     * @var string 策略描述
     */
    public $PolicyDescription;

    /**
     * @var string 访问方式
     */
    public $BucketAccessWay;

    /**
     * @var string 标签信息
     */
    public $BucketTagInfo;

    /**
     * @var integer 风险id
     */
    public $RiskId;

    /**
     * @var string cos地域码值
     */
    public $BucketRegionCode;

    /**
     * @var integer 是否开启自动监测状态 0 关闭 1 开启
     */
    public $BucketMonitorStatus;

    /**
     * @param integer $AppId appid
     * @param string $BucketName 桶名
     * @param string $BucketRegion 桶地域
     * @param string $BucketMarker 桶备注信息
     * @param string $BucketUin 桶uin
     * @param string $BucketNickName uin昵称
     * @param string $BucketMainNickName uin主账号昵称
     * @param integer $BucketIdentify uin身份
     * @param integer $LastScanTimestamp 风险检出时间Unix时间单位毫秒
     * @param integer $HandleStatus 状态信息
     * @param string $PolicyName 风险名称
     * @param integer $PolicyType 风险类型
     * @param integer $PolicyId 策略id
     * @param integer $PolicyLevel 策略级别
     * @param string $PolicyDescription 策略描述
     * @param string $BucketAccessWay 访问方式
     * @param string $BucketTagInfo 标签信息
     * @param integer $RiskId 风险id
     * @param string $BucketRegionCode cos地域码值
     * @param integer $BucketMonitorStatus 是否开启自动监测状态 0 关闭 1 开启
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

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketMarker",$param) and $param["BucketMarker"] !== null) {
            $this->BucketMarker = $param["BucketMarker"];
        }

        if (array_key_exists("BucketUin",$param) and $param["BucketUin"] !== null) {
            $this->BucketUin = $param["BucketUin"];
        }

        if (array_key_exists("BucketNickName",$param) and $param["BucketNickName"] !== null) {
            $this->BucketNickName = $param["BucketNickName"];
        }

        if (array_key_exists("BucketMainNickName",$param) and $param["BucketMainNickName"] !== null) {
            $this->BucketMainNickName = $param["BucketMainNickName"];
        }

        if (array_key_exists("BucketIdentify",$param) and $param["BucketIdentify"] !== null) {
            $this->BucketIdentify = $param["BucketIdentify"];
        }

        if (array_key_exists("LastScanTimestamp",$param) and $param["LastScanTimestamp"] !== null) {
            $this->LastScanTimestamp = $param["LastScanTimestamp"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyLevel",$param) and $param["PolicyLevel"] !== null) {
            $this->PolicyLevel = $param["PolicyLevel"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("BucketAccessWay",$param) and $param["BucketAccessWay"] !== null) {
            $this->BucketAccessWay = $param["BucketAccessWay"];
        }

        if (array_key_exists("BucketTagInfo",$param) and $param["BucketTagInfo"] !== null) {
            $this->BucketTagInfo = $param["BucketTagInfo"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("BucketMonitorStatus",$param) and $param["BucketMonitorStatus"] !== null) {
            $this->BucketMonitorStatus = $param["BucketMonitorStatus"];
        }
    }
}
