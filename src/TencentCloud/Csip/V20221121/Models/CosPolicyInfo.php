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
 * cos策略信息
 *
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method integer getPolicyType() 获取策略类型
PolicyType：1 告警策略 2 风险策略  3  白名单策略  4 ip隐藏策略
 * @method void setPolicyType(integer $PolicyType) 设置策略类型
PolicyType：1 告警策略 2 风险策略  3  白名单策略  4 ip隐藏策略
 * @method integer getPolicySource() 获取system:系统内置 user:用户自定义
 * @method void setPolicySource(integer $PolicySource) 设置system:系统内置 user:用户自定义
 * @method string getPolicyContent() 获取策略内容
 * @method void setPolicyContent(string $PolicyContent) 设置策略内容
 * @method integer getPolicyStatus() 获取0 关闭
1 开启
 * @method void setPolicyStatus(integer $PolicyStatus) 设置0 关闭
1 开启
 * @method integer getPolicyAbnormalType() 获取策略分类
 * @method void setPolicyAbnormalType(integer $PolicyAbnormalType) 设置策略分类
 * @method integer getRiskLevel() 获取风险级别
 * @method void setRiskLevel(integer $RiskLevel) 设置风险级别
 * @method integer getPolicyId() 获取策略id
 * @method void setPolicyId(integer $PolicyId) 设置策略id
 * @method integer getPolicyCreateTime() 获取创建时间
 * @method void setPolicyCreateTime(integer $PolicyCreateTime) 设置创建时间
 * @method integer getPolicyUpdateTime() 获取更新时间
 * @method void setPolicyUpdateTime(integer $PolicyUpdateTime) 设置更新时间
 * @method integer getPolicyHitCount() 获取策略近七天命中次数
 * @method void setPolicyHitCount(integer $PolicyHitCount) 设置策略近七天命中次数
 * @method string getPolicyContentHash() 获取告警内容hash
 * @method void setPolicyContentHash(string $PolicyContentHash) 设置告警内容hash
 * @method integer getRelAccountCount() 获取关联账户数
 * @method void setRelAccountCount(integer $RelAccountCount) 设置关联账户数
 * @method string getRelAccountUin() 获取关联账号uin
 * @method void setRelAccountUin(string $RelAccountUin) 设置关联账号uin
 * @method string getRelAccountName() 获取关联账号名
 * @method void setRelAccountName(string $RelAccountName) 设置关联账号名
 * @method string getPolicyDescription() 获取描述信息
 * @method void setPolicyDescription(string $PolicyDescription) 设置描述信息
 * @method string getPolicyMarker() 获取备注信息
 * @method void setPolicyMarker(string $PolicyMarker) 设置备注信息
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method array getPolicyIdSet() 获取多账号场景下的id集合
 * @method void setPolicyIdSet(array $PolicyIdSet) 设置多账号场景下的id集合
 * @method integer getPolicyHistoryHandleStatus() 获取是否处置历史数据状态  0 无须处置 1 需要处置 2 已处置
 * @method void setPolicyHistoryHandleStatus(integer $PolicyHistoryHandleStatus) 设置是否处置历史数据状态  0 无须处置 1 需要处置 2 已处置
 * @method integer getSystemPolicyEditStatus() 获取系统策略编辑状态
 * @method void setSystemPolicyEditStatus(integer $SystemPolicyEditStatus) 设置系统策略编辑状态
 */
class CosPolicyInfo extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var integer 策略类型
PolicyType：1 告警策略 2 风险策略  3  白名单策略  4 ip隐藏策略
     */
    public $PolicyType;

    /**
     * @var integer system:系统内置 user:用户自定义
     */
    public $PolicySource;

    /**
     * @var string 策略内容
     */
    public $PolicyContent;

    /**
     * @var integer 0 关闭
1 开启
     */
    public $PolicyStatus;

    /**
     * @var integer 策略分类
     */
    public $PolicyAbnormalType;

    /**
     * @var integer 风险级别
     */
    public $RiskLevel;

    /**
     * @var integer 策略id
     */
    public $PolicyId;

    /**
     * @var integer 创建时间
     */
    public $PolicyCreateTime;

    /**
     * @var integer 更新时间
     */
    public $PolicyUpdateTime;

    /**
     * @var integer 策略近七天命中次数
     */
    public $PolicyHitCount;

    /**
     * @var string 告警内容hash
     */
    public $PolicyContentHash;

    /**
     * @var integer 关联账户数
     */
    public $RelAccountCount;

    /**
     * @var string 关联账号uin
     */
    public $RelAccountUin;

    /**
     * @var string 关联账号名
     */
    public $RelAccountName;

    /**
     * @var string 描述信息
     */
    public $PolicyDescription;

    /**
     * @var string 备注信息
     */
    public $PolicyMarker;

    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var array 多账号场景下的id集合
     */
    public $PolicyIdSet;

    /**
     * @var integer 是否处置历史数据状态  0 无须处置 1 需要处置 2 已处置
     */
    public $PolicyHistoryHandleStatus;

    /**
     * @var integer 系统策略编辑状态
     */
    public $SystemPolicyEditStatus;

    /**
     * @param string $PolicyName 策略名称
     * @param integer $PolicyType 策略类型
PolicyType：1 告警策略 2 风险策略  3  白名单策略  4 ip隐藏策略
     * @param integer $PolicySource system:系统内置 user:用户自定义
     * @param string $PolicyContent 策略内容
     * @param integer $PolicyStatus 0 关闭
1 开启
     * @param integer $PolicyAbnormalType 策略分类
     * @param integer $RiskLevel 风险级别
     * @param integer $PolicyId 策略id
     * @param integer $PolicyCreateTime 创建时间
     * @param integer $PolicyUpdateTime 更新时间
     * @param integer $PolicyHitCount 策略近七天命中次数
     * @param string $PolicyContentHash 告警内容hash
     * @param integer $RelAccountCount 关联账户数
     * @param string $RelAccountUin 关联账号uin
     * @param string $RelAccountName 关联账号名
     * @param string $PolicyDescription 描述信息
     * @param string $PolicyMarker 备注信息
     * @param integer $AppId appid
     * @param array $PolicyIdSet 多账号场景下的id集合
     * @param integer $PolicyHistoryHandleStatus 是否处置历史数据状态  0 无须处置 1 需要处置 2 已处置
     * @param integer $SystemPolicyEditStatus 系统策略编辑状态
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicySource",$param) and $param["PolicySource"] !== null) {
            $this->PolicySource = $param["PolicySource"];
        }

        if (array_key_exists("PolicyContent",$param) and $param["PolicyContent"] !== null) {
            $this->PolicyContent = $param["PolicyContent"];
        }

        if (array_key_exists("PolicyStatus",$param) and $param["PolicyStatus"] !== null) {
            $this->PolicyStatus = $param["PolicyStatus"];
        }

        if (array_key_exists("PolicyAbnormalType",$param) and $param["PolicyAbnormalType"] !== null) {
            $this->PolicyAbnormalType = $param["PolicyAbnormalType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyCreateTime",$param) and $param["PolicyCreateTime"] !== null) {
            $this->PolicyCreateTime = $param["PolicyCreateTime"];
        }

        if (array_key_exists("PolicyUpdateTime",$param) and $param["PolicyUpdateTime"] !== null) {
            $this->PolicyUpdateTime = $param["PolicyUpdateTime"];
        }

        if (array_key_exists("PolicyHitCount",$param) and $param["PolicyHitCount"] !== null) {
            $this->PolicyHitCount = $param["PolicyHitCount"];
        }

        if (array_key_exists("PolicyContentHash",$param) and $param["PolicyContentHash"] !== null) {
            $this->PolicyContentHash = $param["PolicyContentHash"];
        }

        if (array_key_exists("RelAccountCount",$param) and $param["RelAccountCount"] !== null) {
            $this->RelAccountCount = $param["RelAccountCount"];
        }

        if (array_key_exists("RelAccountUin",$param) and $param["RelAccountUin"] !== null) {
            $this->RelAccountUin = $param["RelAccountUin"];
        }

        if (array_key_exists("RelAccountName",$param) and $param["RelAccountName"] !== null) {
            $this->RelAccountName = $param["RelAccountName"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("PolicyMarker",$param) and $param["PolicyMarker"] !== null) {
            $this->PolicyMarker = $param["PolicyMarker"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PolicyIdSet",$param) and $param["PolicyIdSet"] !== null) {
            $this->PolicyIdSet = $param["PolicyIdSet"];
        }

        if (array_key_exists("PolicyHistoryHandleStatus",$param) and $param["PolicyHistoryHandleStatus"] !== null) {
            $this->PolicyHistoryHandleStatus = $param["PolicyHistoryHandleStatus"];
        }

        if (array_key_exists("SystemPolicyEditStatus",$param) and $param["SystemPolicyEditStatus"] !== null) {
            $this->SystemPolicyEditStatus = $param["SystemPolicyEditStatus"];
        }
    }
}
