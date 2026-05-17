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
 * 风险视角风险列表
 *
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method string getPolicyId() 获取策略id
 * @method void setPolicyId(string $PolicyId) 设置策略id
 * @method integer getPolicyType() 获取策略分类
 * @method void setPolicyType(integer $PolicyType) 设置策略分类
 * @method integer getPolicyRiskLevel() 获取策略风险等级
 * @method void setPolicyRiskLevel(integer $PolicyRiskLevel) 设置策略风险等级
 * @method string getPolicyDescription() 获取策略描述
 * @method void setPolicyDescription(string $PolicyDescription) 设置策略描述
 * @method integer getHandleBucketCount() 获取待处理的桶数
 * @method void setHandleBucketCount(integer $HandleBucketCount) 设置待处理的桶数
 * @method integer getLastScanTimestamp() 获取最近风险检出时间Unix时间单位毫秒
 * @method void setLastScanTimestamp(integer $LastScanTimestamp) 设置最近风险检出时间Unix时间单位毫秒
 */
class CosRiskViewInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var string 策略id
     */
    public $PolicyId;

    /**
     * @var integer 策略分类
     */
    public $PolicyType;

    /**
     * @var integer 策略风险等级
     */
    public $PolicyRiskLevel;

    /**
     * @var string 策略描述
     */
    public $PolicyDescription;

    /**
     * @var integer 待处理的桶数
     */
    public $HandleBucketCount;

    /**
     * @var integer 最近风险检出时间Unix时间单位毫秒
     */
    public $LastScanTimestamp;

    /**
     * @param integer $AppId appid
     * @param string $PolicyName 策略名称
     * @param string $PolicyId 策略id
     * @param integer $PolicyType 策略分类
     * @param integer $PolicyRiskLevel 策略风险等级
     * @param string $PolicyDescription 策略描述
     * @param integer $HandleBucketCount 待处理的桶数
     * @param integer $LastScanTimestamp 最近风险检出时间Unix时间单位毫秒
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyRiskLevel",$param) and $param["PolicyRiskLevel"] !== null) {
            $this->PolicyRiskLevel = $param["PolicyRiskLevel"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("HandleBucketCount",$param) and $param["HandleBucketCount"] !== null) {
            $this->HandleBucketCount = $param["HandleBucketCount"];
        }

        if (array_key_exists("LastScanTimestamp",$param) and $param["LastScanTimestamp"] !== null) {
            $this->LastScanTimestamp = $param["LastScanTimestamp"];
        }
    }
}
