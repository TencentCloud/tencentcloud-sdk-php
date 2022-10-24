<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线策略信息
 *
 * @method string getPolicyName() 获取策略名称,长度不超过128英文字符
 * @method void setPolicyName(string $PolicyName) 设置策略名称,长度不超过128英文字符
 * @method integer getDetectInterval() 获取检测间隔[1:1天|3:3天|5:5天|7:7天]
 * @method void setDetectInterval(integer $DetectInterval) 设置检测间隔[1:1天|3:3天|5:5天|7:7天]
 * @method string getDetectTime() 获取检测时间
 * @method void setDetectTime(string $DetectTime) 设置检测时间
 * @method integer getIsEnabled() 获取是否开启[0:未开启|1:开启]
 * @method void setIsEnabled(integer $IsEnabled) 设置是否开启[0:未开启|1:开启]
 * @method integer getAssetType() 获取资产类型[0:所有专业版旗舰版|1:id|2:ip]
 * @method void setAssetType(integer $AssetType) 设置资产类型[0:所有专业版旗舰版|1:id|2:ip]
 * @method integer getPolicyId() 获取策略Id
 * @method void setPolicyId(integer $PolicyId) 设置策略Id
 * @method integer getRuleCount() 获取关联基线项数目
 * @method void setRuleCount(integer $RuleCount) 设置关联基线项数目
 * @method integer getItemCount() 获取关联基线项数目
 * @method void setItemCount(integer $ItemCount) 设置关联基线项数目
 * @method integer getHostCount() 获取关联基线主机数目
 * @method void setHostCount(integer $HostCount) 设置关联基线主机数目
 * @method array getRuleIds() 获取规则Id
 * @method void setRuleIds(array $RuleIds) 设置规则Id
 * @method array getHostIds() 获取主机Id
 * @method void setHostIds(array $HostIds) 设置主机Id
 * @method array getHostIps() 获取主机Ip
 * @method void setHostIps(array $HostIps) 设置主机Ip
 * @method integer getIsDefault() 获取是否是系统默认
 * @method void setIsDefault(integer $IsDefault) 设置是否是系统默认
 */
class BaselinePolicy extends AbstractModel
{
    /**
     * @var string 策略名称,长度不超过128英文字符
     */
    public $PolicyName;

    /**
     * @var integer 检测间隔[1:1天|3:3天|5:5天|7:7天]
     */
    public $DetectInterval;

    /**
     * @var string 检测时间
     */
    public $DetectTime;

    /**
     * @var integer 是否开启[0:未开启|1:开启]
     */
    public $IsEnabled;

    /**
     * @var integer 资产类型[0:所有专业版旗舰版|1:id|2:ip]
     */
    public $AssetType;

    /**
     * @var integer 策略Id
     */
    public $PolicyId;

    /**
     * @var integer 关联基线项数目
     */
    public $RuleCount;

    /**
     * @var integer 关联基线项数目
     */
    public $ItemCount;

    /**
     * @var integer 关联基线主机数目
     */
    public $HostCount;

    /**
     * @var array 规则Id
     */
    public $RuleIds;

    /**
     * @var array 主机Id
     */
    public $HostIds;

    /**
     * @var array 主机Ip
     */
    public $HostIps;

    /**
     * @var integer 是否是系统默认
     */
    public $IsDefault;

    /**
     * @param string $PolicyName 策略名称,长度不超过128英文字符
     * @param integer $DetectInterval 检测间隔[1:1天|3:3天|5:5天|7:7天]
     * @param string $DetectTime 检测时间
     * @param integer $IsEnabled 是否开启[0:未开启|1:开启]
     * @param integer $AssetType 资产类型[0:所有专业版旗舰版|1:id|2:ip]
     * @param integer $PolicyId 策略Id
     * @param integer $RuleCount 关联基线项数目
     * @param integer $ItemCount 关联基线项数目
     * @param integer $HostCount 关联基线主机数目
     * @param array $RuleIds 规则Id
     * @param array $HostIds 主机Id
     * @param array $HostIps 主机Ip
     * @param integer $IsDefault 是否是系统默认
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

        if (array_key_exists("DetectInterval",$param) and $param["DetectInterval"] !== null) {
            $this->DetectInterval = $param["DetectInterval"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
