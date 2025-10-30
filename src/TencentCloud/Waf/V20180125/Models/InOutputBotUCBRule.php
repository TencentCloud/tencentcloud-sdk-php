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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改/新增自定义规则的入参，查询自定义规则列表时的出参
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method array getRule() 获取UCB的具体规则项
 * @method void setRule(array $Rule) 设置UCB的具体规则项
 * @method string getAction() 获取处置动作
 * @method void setAction(string $Action) 设置处置动作
 * @method string getOnOff() 获取规则开关
 * @method void setOnOff(string $OnOff) 设置规则开关
 * @method integer getRuleType() 获取规则类型
 * @method void setRuleType(integer $RuleType) 设置规则类型
 * @method integer getPrior() 获取规则优先级
 * @method void setPrior(integer $Prior) 设置规则优先级
 * @method integer getTimestamp() 获取修改时间戳
 * @method void setTimestamp(integer $Timestamp) 设置修改时间戳
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method string getId() 获取入参ID
 * @method void setId(string $Id) 设置入参ID
 * @method string getSceneId() 获取场景ID
 * @method void setSceneId(string $SceneId) 设置场景ID
 * @method integer getValidTime() 获取生效时间
 * @method void setValidTime(integer $ValidTime) 设置生效时间
 * @method integer getAppid() 获取传入的appid
 * @method void setAppid(integer $Appid) 设置传入的appid
 * @method string getAdditionArg() 获取额外参数
 * @method void setAdditionArg(string $AdditionArg) 设置额外参数
 * @method string getDesc() 获取规则描述
 * @method void setDesc(string $Desc) 设置规则描述
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method boolean getPreDefine() 获取true-系统预设规则 false-自定义规则
 * @method void setPreDefine(boolean $PreDefine) 设置true-系统预设规则 false-自定义规则
 * @method string getJobType() 获取定时任务类型
 * @method void setJobType(string $JobType) 设置定时任务类型
 * @method JobDateTime getJobDateTime() 获取定时任务配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务配置
 * @method integer getExpireTime() 获取生效截止时间
 * @method void setExpireTime(integer $ExpireTime) 设置生效截止时间
 * @method integer getValidStatus() 获取生效-1,失效-0
 * @method void setValidStatus(integer $ValidStatus) 设置生效-1,失效-0
 * @method integer getBlockPageId() 获取自定义拦截页面ID
 * @method void setBlockPageId(integer $BlockPageId) 设置自定义拦截页面ID
 * @method array getActionList() 获取当Action=intercept时，此字段必填
 * @method void setActionList(array $ActionList) 设置当Action=intercept时，此字段必填
 * @method integer getDelayTime() 获取惩罚时间
 * @method void setDelayTime(integer $DelayTime) 设置惩罚时间
 */
class InOutputBotUCBRule extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var array UCB的具体规则项
     */
    public $Rule;

    /**
     * @var string 处置动作
     */
    public $Action;

    /**
     * @var string 规则开关
     */
    public $OnOff;

    /**
     * @var integer 规则类型
     */
    public $RuleType;

    /**
     * @var integer 规则优先级
     */
    public $Prior;

    /**
     * @var integer 修改时间戳
     */
    public $Timestamp;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var string 入参ID
     */
    public $Id;

    /**
     * @var string 场景ID
     */
    public $SceneId;

    /**
     * @var integer 生效时间
     */
    public $ValidTime;

    /**
     * @var integer 传入的appid
     */
    public $Appid;

    /**
     * @var string 额外参数
     */
    public $AdditionArg;

    /**
     * @var string 规则描述
     */
    public $Desc;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var boolean true-系统预设规则 false-自定义规则
     */
    public $PreDefine;

    /**
     * @var string 定时任务类型
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务配置
     */
    public $JobDateTime;

    /**
     * @var integer 生效截止时间
     */
    public $ExpireTime;

    /**
     * @var integer 生效-1,失效-0
     */
    public $ValidStatus;

    /**
     * @var integer 自定义拦截页面ID
     */
    public $BlockPageId;

    /**
     * @var array 当Action=intercept时，此字段必填
     */
    public $ActionList;

    /**
     * @var integer 惩罚时间
     */
    public $DelayTime;

    /**
     * @param string $Domain 域名
     * @param string $Name 规则名称
     * @param array $Rule UCB的具体规则项
     * @param string $Action 处置动作
     * @param string $OnOff 规则开关
     * @param integer $RuleType 规则类型
     * @param integer $Prior 规则优先级
     * @param integer $Timestamp 修改时间戳
     * @param string $Label 标签
     * @param string $Id 入参ID
     * @param string $SceneId 场景ID
     * @param integer $ValidTime 生效时间
     * @param integer $Appid 传入的appid
     * @param string $AdditionArg 额外参数
     * @param string $Desc 规则描述
     * @param string $RuleId 规则ID
     * @param boolean $PreDefine true-系统预设规则 false-自定义规则
     * @param string $JobType 定时任务类型
     * @param JobDateTime $JobDateTime 定时任务配置
     * @param integer $ExpireTime 生效截止时间
     * @param integer $ValidStatus 生效-1,失效-0
     * @param integer $BlockPageId 自定义拦截页面ID
     * @param array $ActionList 当Action=intercept时，此字段必填
     * @param integer $DelayTime 惩罚时间
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new InOutputUCBRuleEntry();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("OnOff",$param) and $param["OnOff"] !== null) {
            $this->OnOff = $param["OnOff"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Prior",$param) and $param["Prior"] !== null) {
            $this->Prior = $param["Prior"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("AdditionArg",$param) and $param["AdditionArg"] !== null) {
            $this->AdditionArg = $param["AdditionArg"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("PreDefine",$param) and $param["PreDefine"] !== null) {
            $this->PreDefine = $param["PreDefine"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("BlockPageId",$param) and $param["BlockPageId"] !== null) {
            $this->BlockPageId = $param["BlockPageId"];
        }

        if (array_key_exists("ActionList",$param) and $param["ActionList"] !== null) {
            $this->ActionList = [];
            foreach ($param["ActionList"] as $key => $value){
                $obj = new UCBActionProportion();
                $obj->deserialize($value);
                array_push($this->ActionList, $obj);
            }
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }
    }
}
