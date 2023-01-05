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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRule请求参数结构体
 *
 * @method string getName() 获取自动化规则名称
 * @method void setName(string $Name) 设置自动化规则名称
 * @method integer getType() 获取规则类型：用量类(101 当月|102有效期内)、位置类(201行政区|202移动距离)、网络质量类(301网络盲点)
 * @method void setType(integer $Type) 设置规则类型：用量类(101 当月|102有效期内)、位置类(201行政区|202移动距离)、网络质量类(301网络盲点)
 * @method boolean getIsActive() 获取是否激活
 * @method void setIsActive(boolean $IsActive) 设置是否激活
 * @method integer getNotice() 获取触发动作：1 邮件 2 API请求 3 微信 4 停卡 5 地图标识为盲点
 * @method void setNotice(integer $Notice) 设置触发动作：1 邮件 2 API请求 3 微信 4 停卡 5 地图标识为盲点
 * @method integer getRuleID() 获取自动化规则ID
 * @method void setRuleID(integer $RuleID) 设置自动化规则ID
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getUrl() 获取推送的API地址
 * @method void setUrl(string $Url) 设置推送的API地址
 * @method integer getDataThreshold() 获取用量阈值
 * @method void setDataThreshold(integer $DataThreshold) 设置用量阈值
 * @method integer getDistrict() 获取行政区类型：1. 省份 2. 城市 3. 区
 * @method void setDistrict(integer $District) 设置行政区类型：1. 省份 2. 城市 3. 区
 * @method integer getDistance() 获取心跳移动距离阈值
 * @method void setDistance(integer $Distance) 设置心跳移动距离阈值
 * @method integer getSignalStrength() 获取信号强度阈值
 * @method void setSignalStrength(integer $SignalStrength) 设置信号强度阈值
 * @method array getTagIDs() 获取标签ID集合
 * @method void setTagIDs(array $TagIDs) 设置标签ID集合
 * @method string getSalePlan() 获取资费计划
 * @method void setSalePlan(string $SalePlan) 设置资费计划
 * @method string getUinAccount() 获取具体的账号
 * @method void setUinAccount(string $UinAccount) 设置具体的账号
 */
class ModifyRuleRequest extends AbstractModel
{
    /**
     * @var string 自动化规则名称
     */
    public $Name;

    /**
     * @var integer 规则类型：用量类(101 当月|102有效期内)、位置类(201行政区|202移动距离)、网络质量类(301网络盲点)
     */
    public $Type;

    /**
     * @var boolean 是否激活
     */
    public $IsActive;

    /**
     * @var integer 触发动作：1 邮件 2 API请求 3 微信 4 停卡 5 地图标识为盲点
     */
    public $Notice;

    /**
     * @var integer 自动化规则ID
     */
    public $RuleID;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 推送的API地址
     */
    public $Url;

    /**
     * @var integer 用量阈值
     */
    public $DataThreshold;

    /**
     * @var integer 行政区类型：1. 省份 2. 城市 3. 区
     */
    public $District;

    /**
     * @var integer 心跳移动距离阈值
     */
    public $Distance;

    /**
     * @var integer 信号强度阈值
     */
    public $SignalStrength;

    /**
     * @var array 标签ID集合
     */
    public $TagIDs;

    /**
     * @var string 资费计划
     */
    public $SalePlan;

    /**
     * @var string 具体的账号
     */
    public $UinAccount;

    /**
     * @param string $Name 自动化规则名称
     * @param integer $Type 规则类型：用量类(101 当月|102有效期内)、位置类(201行政区|202移动距离)、网络质量类(301网络盲点)
     * @param boolean $IsActive 是否激活
     * @param integer $Notice 触发动作：1 邮件 2 API请求 3 微信 4 停卡 5 地图标识为盲点
     * @param integer $RuleID 自动化规则ID
     * @param string $Email 邮箱
     * @param string $Url 推送的API地址
     * @param integer $DataThreshold 用量阈值
     * @param integer $District 行政区类型：1. 省份 2. 城市 3. 区
     * @param integer $Distance 心跳移动距离阈值
     * @param integer $SignalStrength 信号强度阈值
     * @param array $TagIDs 标签ID集合
     * @param string $SalePlan 资费计划
     * @param string $UinAccount 具体的账号
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("Notice",$param) and $param["Notice"] !== null) {
            $this->Notice = $param["Notice"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DataThreshold",$param) and $param["DataThreshold"] !== null) {
            $this->DataThreshold = $param["DataThreshold"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Distance",$param) and $param["Distance"] !== null) {
            $this->Distance = $param["Distance"];
        }

        if (array_key_exists("SignalStrength",$param) and $param["SignalStrength"] !== null) {
            $this->SignalStrength = $param["SignalStrength"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("SalePlan",$param) and $param["SalePlan"] !== null) {
            $this->SalePlan = $param["SalePlan"];
        }

        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }
    }
}
