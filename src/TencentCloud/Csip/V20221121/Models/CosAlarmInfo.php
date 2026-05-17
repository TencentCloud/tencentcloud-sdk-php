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
 * 对象存储告警信息
 *
 * @method integer getAppId() 获取appid

 * @method void setAppId(integer $AppId) 设置appid

 * @method integer getPolicyId() 获取策略id
 * @method void setPolicyId(integer $PolicyId) 设置策略id
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method integer getPolicyAbnormalType() 获取策略类型 0-未知规则分类(Unknown), 1-异常行为(AbnormalBehavior), 2-权限过大(ExcessivePermission), 3-资源枚举(ResourceEnumerated), 4-匿名访问(AnonymousAccess)

 * @method void setPolicyAbnormalType(integer $PolicyAbnormalType) 设置策略类型 0-未知规则分类(Unknown), 1-异常行为(AbnormalBehavior), 2-权限过大(ExcessivePermission), 3-资源枚举(ResourceEnumerated), 4-匿名访问(AnonymousAccess)

 * @method integer getPolicyRiskLevel() 获取风险等级：0:Normal, 1:Tip, 2:Low, 3:Middle, 4:High, 5:Critical
 * @method void setPolicyRiskLevel(integer $PolicyRiskLevel) 设置风险等级：0:Normal, 1:Tip, 2:Low, 3:Middle, 4:High, 5:Critical
 * @method string getPolicyDescription() 获取策略信息描述
 * @method void setPolicyDescription(string $PolicyDescription) 设置策略信息描述
 * @method string getBucketName() 获取桶名
 * @method void setBucketName(string $BucketName) 设置桶名
 * @method string getBucketRegion() 获取桶地域
 * @method void setBucketRegion(string $BucketRegion) 设置桶地域
 * @method string getBucketMarker() 获取桶备注
 * @method void setBucketMarker(string $BucketMarker) 设置桶备注
 * @method string getBucketTagInfo() 获取桶tag信息
 * @method void setBucketTagInfo(string $BucketTagInfo) 设置桶tag信息
 * @method string getBucketAccessWay() 获取桶可访问属性
 * @method void setBucketAccessWay(string $BucketAccessWay) 设置桶可访问属性
 * @method string getAccountUin() 获取所属账号uin
 * @method void setAccountUin(string $AccountUin) 设置所属账号uin
 * @method string getAccountNickName() 获取所属账号昵称
 * @method void setAccountNickName(string $AccountNickName) 设置所属账号昵称
 * @method integer getAccountIdentify() 获取所属账号社身份 1 主 2子
 * @method void setAccountIdentify(integer $AccountIdentify) 设置所属账号社身份 1 主 2子
 * @method string getAccountMainNickName() 获取子账号所属主账号昵称
 * @method void setAccountMainNickName(string $AccountMainNickName) 设置子账号所属主账号昵称
 * @method integer getAlarmTimestamp() 获取告警时间戳Unix时间单位毫秒
 * @method void setAlarmTimestamp(integer $AlarmTimestamp) 设置告警时间戳Unix时间单位毫秒
 * @method integer getHandleStatus() 获取处置状态 0 未处理 1 标记处置 2标记忽略
 * @method void setHandleStatus(integer $HandleStatus) 设置处置状态 0 未处理 1 标记处置 2标记忽略
 * @method integer getAlarmId() 获取告警对象id
 * @method void setAlarmId(integer $AlarmId) 设置告警对象id
 * @method string getBucketRegionCode() 获取桶地域码值
 * @method void setBucketRegionCode(string $BucketRegionCode) 设置桶地域码值
 * @method array getCategoryDetails() 获取数据识别分类详情
 * @method void setCategoryDetails(array $CategoryDetails) 设置数据识别分类详情
 */
class CosAlarmInfo extends AbstractModel
{
    /**
     * @var integer appid

     */
    public $AppId;

    /**
     * @var integer 策略id
     */
    public $PolicyId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var integer 策略类型 0-未知规则分类(Unknown), 1-异常行为(AbnormalBehavior), 2-权限过大(ExcessivePermission), 3-资源枚举(ResourceEnumerated), 4-匿名访问(AnonymousAccess)

     */
    public $PolicyAbnormalType;

    /**
     * @var integer 风险等级：0:Normal, 1:Tip, 2:Low, 3:Middle, 4:High, 5:Critical
     */
    public $PolicyRiskLevel;

    /**
     * @var string 策略信息描述
     */
    public $PolicyDescription;

    /**
     * @var string 桶名
     */
    public $BucketName;

    /**
     * @var string 桶地域
     */
    public $BucketRegion;

    /**
     * @var string 桶备注
     */
    public $BucketMarker;

    /**
     * @var string 桶tag信息
     */
    public $BucketTagInfo;

    /**
     * @var string 桶可访问属性
     */
    public $BucketAccessWay;

    /**
     * @var string 所属账号uin
     */
    public $AccountUin;

    /**
     * @var string 所属账号昵称
     */
    public $AccountNickName;

    /**
     * @var integer 所属账号社身份 1 主 2子
     */
    public $AccountIdentify;

    /**
     * @var string 子账号所属主账号昵称
     */
    public $AccountMainNickName;

    /**
     * @var integer 告警时间戳Unix时间单位毫秒
     */
    public $AlarmTimestamp;

    /**
     * @var integer 处置状态 0 未处理 1 标记处置 2标记忽略
     */
    public $HandleStatus;

    /**
     * @var integer 告警对象id
     */
    public $AlarmId;

    /**
     * @var string 桶地域码值
     */
    public $BucketRegionCode;

    /**
     * @var array 数据识别分类详情
     */
    public $CategoryDetails;

    /**
     * @param integer $AppId appid

     * @param integer $PolicyId 策略id
     * @param string $PolicyName 策略名称
     * @param integer $PolicyAbnormalType 策略类型 0-未知规则分类(Unknown), 1-异常行为(AbnormalBehavior), 2-权限过大(ExcessivePermission), 3-资源枚举(ResourceEnumerated), 4-匿名访问(AnonymousAccess)

     * @param integer $PolicyRiskLevel 风险等级：0:Normal, 1:Tip, 2:Low, 3:Middle, 4:High, 5:Critical
     * @param string $PolicyDescription 策略信息描述
     * @param string $BucketName 桶名
     * @param string $BucketRegion 桶地域
     * @param string $BucketMarker 桶备注
     * @param string $BucketTagInfo 桶tag信息
     * @param string $BucketAccessWay 桶可访问属性
     * @param string $AccountUin 所属账号uin
     * @param string $AccountNickName 所属账号昵称
     * @param integer $AccountIdentify 所属账号社身份 1 主 2子
     * @param string $AccountMainNickName 子账号所属主账号昵称
     * @param integer $AlarmTimestamp 告警时间戳Unix时间单位毫秒
     * @param integer $HandleStatus 处置状态 0 未处理 1 标记处置 2标记忽略
     * @param integer $AlarmId 告警对象id
     * @param string $BucketRegionCode 桶地域码值
     * @param array $CategoryDetails 数据识别分类详情
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyAbnormalType",$param) and $param["PolicyAbnormalType"] !== null) {
            $this->PolicyAbnormalType = $param["PolicyAbnormalType"];
        }

        if (array_key_exists("PolicyRiskLevel",$param) and $param["PolicyRiskLevel"] !== null) {
            $this->PolicyRiskLevel = $param["PolicyRiskLevel"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
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

        if (array_key_exists("BucketTagInfo",$param) and $param["BucketTagInfo"] !== null) {
            $this->BucketTagInfo = $param["BucketTagInfo"];
        }

        if (array_key_exists("BucketAccessWay",$param) and $param["BucketAccessWay"] !== null) {
            $this->BucketAccessWay = $param["BucketAccessWay"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("AccountNickName",$param) and $param["AccountNickName"] !== null) {
            $this->AccountNickName = $param["AccountNickName"];
        }

        if (array_key_exists("AccountIdentify",$param) and $param["AccountIdentify"] !== null) {
            $this->AccountIdentify = $param["AccountIdentify"];
        }

        if (array_key_exists("AccountMainNickName",$param) and $param["AccountMainNickName"] !== null) {
            $this->AccountMainNickName = $param["AccountMainNickName"];
        }

        if (array_key_exists("AlarmTimestamp",$param) and $param["AlarmTimestamp"] !== null) {
            $this->AlarmTimestamp = $param["AlarmTimestamp"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("CategoryDetails",$param) and $param["CategoryDetails"] !== null) {
            $this->CategoryDetails = [];
            foreach ($param["CategoryDetails"] as $key => $value){
                $obj = new CosIdentifyCategoryDetail();
                $obj->deserialize($value);
                array_push($this->CategoryDetails, $obj);
            }
        }
    }
}
