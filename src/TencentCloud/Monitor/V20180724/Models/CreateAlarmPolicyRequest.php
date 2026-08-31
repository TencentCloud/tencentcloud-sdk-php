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
 * CreateAlarmPolicy请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method string getPolicyName() 获取<p>策略名称，不超过60字符</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>策略名称，不超过60字符</p>
 * @method string getMonitorType() 获取<p>监控类型 MT_QCE=云产品监控</p>
 * @method void setMonitorType(string $MonitorType) 设置<p>监控类型 MT_QCE=云产品监控</p>
 * @method string getNamespace() 获取<p>告警策略类型，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
 * @method void setNamespace(string $Namespace) 设置<p>告警策略类型，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
 * @method string getRemark() 获取<p>备注，不超过100字符，仅支持中英文、数字、下划线、-</p>
 * @method void setRemark(string $Remark) 设置<p>备注，不超过100字符，仅支持中英文、数字、下划线、-</p>
 * @method integer getEnable() 获取<p>是否启用 0=停用 1=启用，可不传 默认为1</p>
 * @method void setEnable(integer $Enable) 设置<p>是否启用 0=停用 1=启用，可不传 默认为1</p>
 * @method integer getProjectId() 获取<p>项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 <a href="https://console.cloud.tencent.com/project">账号中心-项目管理</a> 中查看。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 <a href="https://console.cloud.tencent.com/project">账号中心-项目管理</a> 中查看。</p>
 * @method integer getConditionTemplateId() 获取<p>触发条件模板 Id，该参数与 Condition 参数二选一。如果策略绑定触发条件模板，则传该参数；否则不传该参数，而是传 Condition 参数。触发条件模板 Id 可以从 <a href="https://cloud.tencent.com/document/api/248/70250">DescribeConditionsTemplateList</a> 接口获取。</p>
 * @method void setConditionTemplateId(integer $ConditionTemplateId) 设置<p>触发条件模板 Id，该参数与 Condition 参数二选一。如果策略绑定触发条件模板，则传该参数；否则不传该参数，而是传 Condition 参数。触发条件模板 Id 可以从 <a href="https://cloud.tencent.com/document/api/248/70250">DescribeConditionsTemplateList</a> 接口获取。</p>
 * @method AlarmPolicyCondition getCondition() 获取<p>指标触发条件，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置<p>指标触发条件，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
 * @method AlarmPolicyEventCondition getEventCondition() 获取<p>事件触发条件，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询。</p>
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置<p>事件触发条件，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询。</p>
 * @method array getNoticeIds() 获取<p>通知规则 Id 列表，由 <a href="https://cloud.tencent.com/document/product/248/51280">DescribeAlarmNotices</a> 获得</p>
 * @method void setNoticeIds(array $NoticeIds) 设置<p>通知规则 Id 列表，由 <a href="https://cloud.tencent.com/document/product/248/51280">DescribeAlarmNotices</a> 获得</p>
 * @method array getTriggerTasks() 获取<p>触发任务列表</p>
 * @method void setTriggerTasks(array $TriggerTasks) 设置<p>触发任务列表</p>
 * @method AlarmPolicyFilter getFilter() 获取<p>全局过滤条件</p>
 * @method void setFilter(AlarmPolicyFilter $Filter) 设置<p>全局过滤条件</p>
 * @method array getGroupBy() 获取<p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
 * @method void setGroupBy(array $GroupBy) 设置<p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
 * @method integer getIsBindAll() 获取<p>是否绑定全部对象。如果是的话，不需要再传filter或者调用BindPolicyObject，0=否，1=是，默认为否</p><p>取值范围：[0, 1]</p><p>默认值：0</p><p>不是所有策略类型都支持绑定全部对象</p>
 * @method void setIsBindAll(integer $IsBindAll) 设置<p>是否绑定全部对象。如果是的话，不需要再传filter或者调用BindPolicyObject，0=否，1=是，默认为否</p><p>取值范围：[0, 1]</p><p>默认值：0</p><p>不是所有策略类型都支持绑定全部对象</p>
 * @method array getTags() 获取<p>模板绑定的标签</p>
 * @method void setTags(array $Tags) 设置<p>模板绑定的标签</p>
 * @method LogAlarmReq getLogAlarmReqInfo() 获取<p>日志告警信息</p>
 * @method void setLogAlarmReqInfo(LogAlarmReq $LogAlarmReqInfo) 设置<p>日志告警信息</p>
 * @method array getHierarchicalNotices() 获取<p>告警分级通知规则配置</p>
 * @method void setHierarchicalNotices(array $HierarchicalNotices) 设置<p>告警分级通知规则配置</p>
 * @method integer getMigrateFlag() 获取<p>迁移策略专用字段，0-走鉴权逻辑，1-跳过鉴权逻辑</p>
 * @method void setMigrateFlag(integer $MigrateFlag) 设置<p>迁移策略专用字段，0-走鉴权逻辑，1-跳过鉴权逻辑</p>
 * @method string getEbSubject() 获取<p>事件配置的告警</p>
 * @method void setEbSubject(string $EbSubject) 设置<p>事件配置的告警</p>
 * @method string getAdditionalAlarmContent() 获取<p>附加告警内容</p>
 * @method void setAdditionalAlarmContent(string $AdditionalAlarmContent) 设置<p>附加告警内容</p>
 * @method array getNoticeContentTmplBindInfos() 获取<p>通知模板绑定信息</p>
 * @method void setNoticeContentTmplBindInfos(array $NoticeContentTmplBindInfos) 设置<p>通知模板绑定信息</p>
 */
class CreateAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var string <p>策略名称，不超过60字符</p>
     */
    public $PolicyName;

    /**
     * @var string <p>监控类型 MT_QCE=云产品监控</p>
     */
    public $MonitorType;

    /**
     * @var string <p>告警策略类型，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
     */
    public $Namespace;

    /**
     * @var string <p>备注，不超过100字符，仅支持中英文、数字、下划线、-</p>
     */
    public $Remark;

    /**
     * @var integer <p>是否启用 0=停用 1=启用，可不传 默认为1</p>
     */
    public $Enable;

    /**
     * @var integer <p>项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 <a href="https://console.cloud.tencent.com/project">账号中心-项目管理</a> 中查看。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>触发条件模板 Id，该参数与 Condition 参数二选一。如果策略绑定触发条件模板，则传该参数；否则不传该参数，而是传 Condition 参数。触发条件模板 Id 可以从 <a href="https://cloud.tencent.com/document/api/248/70250">DescribeConditionsTemplateList</a> 接口获取。</p>
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition <p>指标触发条件，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition <p>事件触发条件，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询。</p>
     */
    public $EventCondition;

    /**
     * @var array <p>通知规则 Id 列表，由 <a href="https://cloud.tencent.com/document/product/248/51280">DescribeAlarmNotices</a> 获得</p>
     */
    public $NoticeIds;

    /**
     * @var array <p>触发任务列表</p>
     */
    public $TriggerTasks;

    /**
     * @var AlarmPolicyFilter <p>全局过滤条件</p>
     */
    public $Filter;

    /**
     * @var array <p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
     */
    public $GroupBy;

    /**
     * @var integer <p>是否绑定全部对象。如果是的话，不需要再传filter或者调用BindPolicyObject，0=否，1=是，默认为否</p><p>取值范围：[0, 1]</p><p>默认值：0</p><p>不是所有策略类型都支持绑定全部对象</p>
     */
    public $IsBindAll;

    /**
     * @var array <p>模板绑定的标签</p>
     */
    public $Tags;

    /**
     * @var LogAlarmReq <p>日志告警信息</p>
     */
    public $LogAlarmReqInfo;

    /**
     * @var array <p>告警分级通知规则配置</p>
     */
    public $HierarchicalNotices;

    /**
     * @var integer <p>迁移策略专用字段，0-走鉴权逻辑，1-跳过鉴权逻辑</p>
     */
    public $MigrateFlag;

    /**
     * @var string <p>事件配置的告警</p>
     */
    public $EbSubject;

    /**
     * @var string <p>附加告警内容</p>
     */
    public $AdditionalAlarmContent;

    /**
     * @var array <p>通知模板绑定信息</p>
     */
    public $NoticeContentTmplBindInfos;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param string $PolicyName <p>策略名称，不超过60字符</p>
     * @param string $MonitorType <p>监控类型 MT_QCE=云产品监控</p>
     * @param string $Namespace <p>告警策略类型，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
     * @param string $Remark <p>备注，不超过100字符，仅支持中英文、数字、下划线、-</p>
     * @param integer $Enable <p>是否启用 0=停用 1=启用，可不传 默认为1</p>
     * @param integer $ProjectId <p>项目 Id，对于区分项目的产品必须传入非 -1 的值。 -1=无项目 0=默认项目，如不传 默认为 -1。支持的项目 Id 可以在控制台 <a href="https://console.cloud.tencent.com/project">账号中心-项目管理</a> 中查看。</p>
     * @param integer $ConditionTemplateId <p>触发条件模板 Id，该参数与 Condition 参数二选一。如果策略绑定触发条件模板，则传该参数；否则不传该参数，而是传 Condition 参数。触发条件模板 Id 可以从 <a href="https://cloud.tencent.com/document/api/248/70250">DescribeConditionsTemplateList</a> 接口获取。</p>
     * @param AlarmPolicyCondition $Condition <p>指标触发条件，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
     * @param AlarmPolicyEventCondition $EventCondition <p>事件触发条件，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询。</p>
     * @param array $NoticeIds <p>通知规则 Id 列表，由 <a href="https://cloud.tencent.com/document/product/248/51280">DescribeAlarmNotices</a> 获得</p>
     * @param array $TriggerTasks <p>触发任务列表</p>
     * @param AlarmPolicyFilter $Filter <p>全局过滤条件</p>
     * @param array $GroupBy <p>聚合维度列表，指定按哪些维度 key 来做 group by</p>
     * @param integer $IsBindAll <p>是否绑定全部对象。如果是的话，不需要再传filter或者调用BindPolicyObject，0=否，1=是，默认为否</p><p>取值范围：[0, 1]</p><p>默认值：0</p><p>不是所有策略类型都支持绑定全部对象</p>
     * @param array $Tags <p>模板绑定的标签</p>
     * @param LogAlarmReq $LogAlarmReqInfo <p>日志告警信息</p>
     * @param array $HierarchicalNotices <p>告警分级通知规则配置</p>
     * @param integer $MigrateFlag <p>迁移策略专用字段，0-走鉴权逻辑，1-跳过鉴权逻辑</p>
     * @param string $EbSubject <p>事件配置的告警</p>
     * @param string $AdditionalAlarmContent <p>附加告警内容</p>
     * @param array $NoticeContentTmplBindInfos <p>通知模板绑定信息</p>
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmPolicyFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("IsBindAll",$param) and $param["IsBindAll"] !== null) {
            $this->IsBindAll = $param["IsBindAll"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LogAlarmReqInfo",$param) and $param["LogAlarmReqInfo"] !== null) {
            $this->LogAlarmReqInfo = new LogAlarmReq();
            $this->LogAlarmReqInfo->deserialize($param["LogAlarmReqInfo"]);
        }

        if (array_key_exists("HierarchicalNotices",$param) and $param["HierarchicalNotices"] !== null) {
            $this->HierarchicalNotices = [];
            foreach ($param["HierarchicalNotices"] as $key => $value){
                $obj = new AlarmHierarchicalNotice();
                $obj->deserialize($value);
                array_push($this->HierarchicalNotices, $obj);
            }
        }

        if (array_key_exists("MigrateFlag",$param) and $param["MigrateFlag"] !== null) {
            $this->MigrateFlag = $param["MigrateFlag"];
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("AdditionalAlarmContent",$param) and $param["AdditionalAlarmContent"] !== null) {
            $this->AdditionalAlarmContent = $param["AdditionalAlarmContent"];
        }

        if (array_key_exists("NoticeContentTmplBindInfos",$param) and $param["NoticeContentTmplBindInfos"] !== null) {
            $this->NoticeContentTmplBindInfos = [];
            foreach ($param["NoticeContentTmplBindInfos"] as $key => $value){
                $obj = new NoticeContentTmplBindInfo();
                $obj->deserialize($value);
                array_push($this->NoticeContentTmplBindInfos, $obj);
            }
        }
    }
}
