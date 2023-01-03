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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyCondition请求参数结构体
 *
 * @method string getModule() 获取模块名，固定值 monitor
 * @method void setModule(string $Module) 设置模块名，固定值 monitor
 * @method string getPolicyId() 获取告警策略 ID
 * @method void setPolicyId(string $PolicyId) 设置告警策略 ID
 * @method integer getConditionTemplateId() 获取触发条件模板 Id，可不传
 * @method void setConditionTemplateId(integer $ConditionTemplateId) 设置触发条件模板 Id，可不传
 * @method AlarmPolicyCondition getCondition() 获取指标触发条件
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置指标触发条件
 * @method AlarmPolicyEventCondition getEventCondition() 获取事件触发条件
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置事件触发条件
 * @method AlarmPolicyFilter getFilter() 获取全局过滤条件
 * @method void setFilter(AlarmPolicyFilter $Filter) 设置全局过滤条件
 * @method array getGroupBy() 获取聚合维度列表，指定按哪些维度 key 来做 group by
 * @method void setGroupBy(array $GroupBy) 设置聚合维度列表，指定按哪些维度 key 来做 group by
 * @method LogAlarmReq getLogAlarmReqInfo() 获取日志告警创建请求参数信息
 * @method void setLogAlarmReqInfo(LogAlarmReq $LogAlarmReqInfo) 设置日志告警创建请求参数信息
 * @method array getNoticeIds() 获取模版id，专供prom使用
 * @method void setNoticeIds(array $NoticeIds) 设置模版id，专供prom使用
 * @method integer getEnable() 获取启停状态，0=停用，1=启用
 * @method void setEnable(integer $Enable) 设置启停状态，0=停用，1=启用
 * @method string getPolicyName() 获取专供prom策略名称
 * @method void setPolicyName(string $PolicyName) 设置专供prom策略名称
 * @method string getEbSubject() 获取事件配置的告警
 * @method void setEbSubject(string $EbSubject) 设置事件配置的告警
 */
class ModifyAlarmPolicyConditionRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定值 monitor
     */
    public $Module;

    /**
     * @var string 告警策略 ID
     */
    public $PolicyId;

    /**
     * @var integer 触发条件模板 Id，可不传
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition 指标触发条件
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition 事件触发条件
     */
    public $EventCondition;

    /**
     * @var AlarmPolicyFilter 全局过滤条件
     */
    public $Filter;

    /**
     * @var array 聚合维度列表，指定按哪些维度 key 来做 group by
     */
    public $GroupBy;

    /**
     * @var LogAlarmReq 日志告警创建请求参数信息
     */
    public $LogAlarmReqInfo;

    /**
     * @var array 模版id，专供prom使用
     */
    public $NoticeIds;

    /**
     * @var integer 启停状态，0=停用，1=启用
     */
    public $Enable;

    /**
     * @var string 专供prom策略名称
     */
    public $PolicyName;

    /**
     * @var string 事件配置的告警
     */
    public $EbSubject;

    /**
     * @param string $Module 模块名，固定值 monitor
     * @param string $PolicyId 告警策略 ID
     * @param integer $ConditionTemplateId 触发条件模板 Id，可不传
     * @param AlarmPolicyCondition $Condition 指标触发条件
     * @param AlarmPolicyEventCondition $EventCondition 事件触发条件
     * @param AlarmPolicyFilter $Filter 全局过滤条件
     * @param array $GroupBy 聚合维度列表，指定按哪些维度 key 来做 group by
     * @param LogAlarmReq $LogAlarmReqInfo 日志告警创建请求参数信息
     * @param array $NoticeIds 模版id，专供prom使用
     * @param integer $Enable 启停状态，0=停用，1=启用
     * @param string $PolicyName 专供prom策略名称
     * @param string $EbSubject 事件配置的告警
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("ConditionTemplateId",$param) and $param["ConditionTemplateId"] !== null) {
            $this->ConditionTemplateId = $param["ConditionTemplateId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new AlarmPolicyCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("EventCondition",$param) and $param["EventCondition"] !== null) {
            $this->EventCondition = new AlarmPolicyEventCondition();
            $this->EventCondition->deserialize($param["EventCondition"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmPolicyFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("LogAlarmReqInfo",$param) and $param["LogAlarmReqInfo"] !== null) {
            $this->LogAlarmReqInfo = new LogAlarmReq();
            $this->LogAlarmReqInfo->deserialize($param["LogAlarmReqInfo"]);
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }
    }
}
