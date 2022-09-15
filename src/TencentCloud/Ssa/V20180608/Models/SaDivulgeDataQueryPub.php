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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询_通用字段
 *
 * @method string getId() 获取Id信息
 * @method void setId(string $Id) 设置Id信息
 * @method string getUin() 获取用户Uin
 * @method void setUin(string $Uin) 设置用户Uin
 * @method string getAppId() 获取用户AppId
 * @method void setAppId(string $AppId) 设置用户AppId
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getDivulgeSoure() 获取监控源 0:全部 1:GitHub 2:暗网 默认值1
 * @method void setDivulgeSoure(string $DivulgeSoure) 设置监控源 0:全部 1:GitHub 2:暗网 默认值1
 * @method string getAsset() 获取受影响资产
 * @method void setAsset(string $Asset) 设置受影响资产
 * @method string getRuleName() 获取命中主题集下的规则topic名称
 * @method void setRuleName(string $RuleName) 设置命中主题集下的规则topic名称
 * @method string getRuleId() 获取命中主题集下的规则topic唯一id
 * @method void setRuleId(string $RuleId) 设置命中主题集下的规则topic唯一id
 * @method string getRuleWord() 获取命中主题集下的自定义规则策略
 * @method void setRuleWord(string $RuleWord) 设置命中主题集下的自定义规则策略
 * @method string getScanUrl() 获取扫描监测url
 * @method void setScanUrl(string $ScanUrl) 设置扫描监测url
 * @method string getScanCount() 获取扫描监测命中次数
 * @method void setScanCount(string $ScanCount) 设置扫描监测命中次数
 * @method string getLevel() 获取风险等级 -1:未知 1:低危 2:中危 3:高危 4:严重
 * @method void setLevel(string $Level) 设置风险等级 -1:未知 1:低危 2:中危 3:高危 4:严重
 * @method string getStatus() 获取安全事件处理状态 -1:未知 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
 * @method void setStatus(string $Status) 设置安全事件处理状态 -1:未知 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
 * @method string getEventTime() 获取安全事件发生时间
 * @method void setEventTime(string $EventTime) 设置安全事件发生时间
 * @method string getInsertTime() 获取事件插入时间
 * @method void setInsertTime(string $InsertTime) 设置事件插入时间
 * @method string getUpdateTime() 获取事件更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置事件更新时间
 */
class SaDivulgeDataQueryPub extends AbstractModel
{
    /**
     * @var string Id信息
     */
    public $Id;

    /**
     * @var string 用户Uin
     */
    public $Uin;

    /**
     * @var string 用户AppId
     */
    public $AppId;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 监控源 0:全部 1:GitHub 2:暗网 默认值1
     */
    public $DivulgeSoure;

    /**
     * @var string 受影响资产
     */
    public $Asset;

    /**
     * @var string 命中主题集下的规则topic名称
     */
    public $RuleName;

    /**
     * @var string 命中主题集下的规则topic唯一id
     */
    public $RuleId;

    /**
     * @var string 命中主题集下的自定义规则策略
     */
    public $RuleWord;

    /**
     * @var string 扫描监测url
     */
    public $ScanUrl;

    /**
     * @var string 扫描监测命中次数
     */
    public $ScanCount;

    /**
     * @var string 风险等级 -1:未知 1:低危 2:中危 3:高危 4:严重
     */
    public $Level;

    /**
     * @var string 安全事件处理状态 -1:未知 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
     */
    public $Status;

    /**
     * @var string 安全事件发生时间
     */
    public $EventTime;

    /**
     * @var string 事件插入时间
     */
    public $InsertTime;

    /**
     * @var string 事件更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Id Id信息
     * @param string $Uin 用户Uin
     * @param string $AppId 用户AppId
     * @param string $EventName 事件名称
     * @param string $DivulgeSoure 监控源 0:全部 1:GitHub 2:暗网 默认值1
     * @param string $Asset 受影响资产
     * @param string $RuleName 命中主题集下的规则topic名称
     * @param string $RuleId 命中主题集下的规则topic唯一id
     * @param string $RuleWord 命中主题集下的自定义规则策略
     * @param string $ScanUrl 扫描监测url
     * @param string $ScanCount 扫描监测命中次数
     * @param string $Level 风险等级 -1:未知 1:低危 2:中危 3:高危 4:严重
     * @param string $Status 安全事件处理状态 -1:未知 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
     * @param string $EventTime 安全事件发生时间
     * @param string $InsertTime 事件插入时间
     * @param string $UpdateTime 事件更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("DivulgeSoure",$param) and $param["DivulgeSoure"] !== null) {
            $this->DivulgeSoure = $param["DivulgeSoure"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleWord",$param) and $param["RuleWord"] !== null) {
            $this->RuleWord = $param["RuleWord"];
        }

        if (array_key_exists("ScanUrl",$param) and $param["ScanUrl"] !== null) {
            $this->ScanUrl = $param["ScanUrl"];
        }

        if (array_key_exists("ScanCount",$param) and $param["ScanCount"] !== null) {
            $this->ScanCount = $param["ScanCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
