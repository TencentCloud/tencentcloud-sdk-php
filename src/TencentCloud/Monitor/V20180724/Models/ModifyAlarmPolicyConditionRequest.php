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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyCondition请求参数结构体
 *
 * @method string getModule() 获取<p>模块名，固定值 monitor</p>
 * @method void setModule(string $Module) 设置<p>模块名，固定值 monitor</p>
 * @method string getPolicyId() 获取<p>告警策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略 ID</p>
 * @method integer getConditionTemplateId() 获取<p>触发条件模板 Id，可不传</p>
 * @method void setConditionTemplateId(integer $ConditionTemplateId) 设置<p>触发条件模板 Id，可不传</p>
 * @method AlarmPolicyCondition getCondition() 获取<p>指标触发条件</p>
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置<p>指标触发条件</p>
 * @method AlarmPolicyEventCondition getEventCondition() 获取<p>事件触发条件</p>
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置<p>事件触发条件</p>
 * @method AlarmPolicyFilter getFilter() 获取<p>全局过滤条件</p>
 * @method void setFilter(AlarmPolicyFilter $Filter) 设置<p>全局过滤条件</p>
 * @method array getGroupBy() 获取<p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
 * @method void setGroupBy(array $GroupBy) 设置<p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
 * @method LogAlarmReq getLogAlarmReqInfo() 获取<p>日志告警创建请求参数信息</p>
 * @method void setLogAlarmReqInfo(LogAlarmReq $LogAlarmReqInfo) 设置<p>日志告警创建请求参数信息</p>
 * @method array getNoticeIds() 获取<p>模板id，专供prom使用</p>
 * @method void setNoticeIds(array $NoticeIds) 设置<p>模板id，专供prom使用</p>
 * @method integer getEnable() 获取<p>启停状态，0=停用，1=启用</p>
 * @method void setEnable(integer $Enable) 设置<p>启停状态，0=停用，1=启用</p>
 * @method string getPolicyName() 获取<p>专供prom策略名称</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>专供prom策略名称</p>
 * @method string getEbSubject() 获取<p>事件配置的告警</p>
 * @method void setEbSubject(string $EbSubject) 设置<p>事件配置的告警</p>
 */
class ModifyAlarmPolicyConditionRequest extends AbstractModel
{
    /**
     * @var string <p>模块名，固定值 monitor</p>
     */
    public $Module;

    /**
     * @var string <p>告警策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var integer <p>触发条件模板 Id，可不传</p>
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition <p>指标触发条件</p>
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition <p>事件触发条件</p>
     */
    public $EventCondition;

    /**
     * @var AlarmPolicyFilter <p>全局过滤条件</p>
     */
    public $Filter;

    /**
     * @var array <p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
     */
    public $GroupBy;

    /**
     * @var LogAlarmReq <p>日志告警创建请求参数信息</p>
     */
    public $LogAlarmReqInfo;

    /**
     * @var array <p>模板id，专供prom使用</p>
     */
    public $NoticeIds;

    /**
     * @var integer <p>启停状态，0=停用，1=启用</p>
     */
    public $Enable;

    /**
     * @var string <p>专供prom策略名称</p>
     */
    public $PolicyName;

    /**
     * @var string <p>事件配置的告警</p>
     */
    public $EbSubject;

    /**
     * @param string $Module <p>模块名，固定值 monitor</p>
     * @param string $PolicyId <p>告警策略 ID</p>
     * @param integer $ConditionTemplateId <p>触发条件模板 Id，可不传</p>
     * @param AlarmPolicyCondition $Condition <p>指标触发条件</p>
     * @param AlarmPolicyEventCondition $EventCondition <p>事件触发条件</p>
     * @param AlarmPolicyFilter $Filter <p>全局过滤条件</p>
     * @param array $GroupBy <p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
     * @param LogAlarmReq $LogAlarmReqInfo <p>日志告警创建请求参数信息</p>
     * @param array $NoticeIds <p>模板id，专供prom使用</p>
     * @param integer $Enable <p>启停状态，0=停用，1=启用</p>
     * @param string $PolicyName <p>专供prom策略名称</p>
     * @param string $EbSubject <p>事件配置的告警</p>
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
