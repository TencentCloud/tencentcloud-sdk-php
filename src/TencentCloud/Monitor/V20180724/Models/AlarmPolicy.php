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
 * 告警策略详情
 *
 * @method string getPolicyId() 获取<p>告警策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取<p>告警策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置<p>告警策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorType() 获取<p>监控类型 MT_QCE=云产品监控</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(string $MonitorType) 设置<p>监控类型 MT_QCE=云产品监控</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取<p>启停状态 0=停用 1=启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置<p>启停状态 0=停用 1=启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseSum() 获取<p>策略组绑定的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseSum(integer $UseSum) 设置<p>策略组绑定的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取<p>项目 Id -1=无项目 0=默认项目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 Id -1=无项目 0=默认项目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取<p>告警策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置<p>告警策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionTemplateId() 获取<p>触发条件模板 Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionTemplateId(string $ConditionTemplateId) 设置<p>触发条件模板 Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyCondition getCondition() 获取<p>指标触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置<p>指标触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyEventCondition getEventCondition() 获取<p>事件触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置<p>事件触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeIds() 获取<p>通知规则 id 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeIds(array $NoticeIds) 设置<p>通知规则 id 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotices() 获取<p>通知规则 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotices(array $Notices) 设置<p>通知规则 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerTasks() 获取<p>触发任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTasks(array $TriggerTasks) 设置<p>触发任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConditionsTemp getConditionsTemp() 获取<p>模板策略组<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsTemp(ConditionsTemp $ConditionsTemp) 设置<p>模板策略组<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastEditUin() 获取<p>最后编辑的用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastEditUin(string $LastEditUin) 设置<p>最后编辑的用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInsertTime() 获取<p>创建时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(integer $InsertTime) 设置<p>创建时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(array $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceShowName() 获取<p>namespace显示名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceShowName(string $NamespaceShowName) 设置<p>namespace显示名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取<p>是否默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCanSetDefault() 获取<p>能否设置默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanSetDefault(integer $CanSetDefault) 设置<p>能否设置默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceGroupId() 获取<p>实例分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置<p>实例分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceSum() 获取<p>实例分组总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSum(integer $InstanceSum) 设置<p>实例分组总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceGroupName() 获取<p>实例分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroupName(string $InstanceGroupName) 设置<p>实例分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取<p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置<p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginId() 获取<p>用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginId(string $OriginId) 设置<p>用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagInstances() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInstances(array $TagInstances) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmConditionFilter getFilter() 获取<p>过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilter(AlarmConditionFilter $Filter) 设置<p>过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupBy() 获取<p>聚合条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupBy(array $GroupBy) 设置<p>聚合条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilterDimensionsParam() 获取<p>策略关联的过滤维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterDimensionsParam(string $FilterDimensionsParam) 设置<p>策略关联的过滤维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsOneClick() 获取<p>是否为一键告警策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOneClick(integer $IsOneClick) 设置<p>是否为一键告警策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOneClickStatus() 获取<p>一键告警策略是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOneClickStatus(integer $OneClickStatus) 设置<p>一键告警策略是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAdvancedMetricNumber() 获取<p>高级指标数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedMetricNumber(integer $AdvancedMetricNumber) 设置<p>高级指标数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsBindAll() 获取<p>策略是否是全部对象策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsBindAll(integer $IsBindAll) 设置<p>策略是否是全部对象策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>策略标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>策略标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSupportAlarmTag() 获取<p>是否支持告警标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportAlarmTag(integer $IsSupportAlarmTag) 设置<p>是否支持告警标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagOperation() 获取<p>多标签交/并集关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagOperation(string $TagOperation) 设置<p>多标签交/并集关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeTmplBindInfos() 获取<p>通知模板绑定内容模板信息</p>
 * @method void setNoticeTmplBindInfos(array $NoticeTmplBindInfos) 设置<p>通知模板绑定内容模板信息</p>
 * @method array getHierarchicalNotices() 获取<p>模板通知的等级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHierarchicalNotices(array $HierarchicalNotices) 设置<p>模板通知的等级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeContentTmplBindInfos() 获取<p>通知模板绑定内容模板信息，同NoticeTmplBindInfos</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeContentTmplBindInfos(array $NoticeContentTmplBindInfos) 设置<p>通知模板绑定内容模板信息，同NoticeTmplBindInfos</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPredefinedConfigID() 获取<p>预设配置id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPredefinedConfigID(string $PredefinedConfigID) 设置<p>预设配置id</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmPolicy extends AbstractModel
{
    /**
     * @var string <p>告警策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string <p>告警策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string <p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>监控类型 MT_QCE=云产品监控</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var integer <p>启停状态 0=停用 1=启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer <p>策略组绑定的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseSum;

    /**
     * @var integer <p>项目 Id -1=无项目 0=默认项目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string <p>告警策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string <p>触发条件模板 Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionTemplateId;

    /**
     * @var AlarmPolicyCondition <p>指标触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition <p>事件触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCondition;

    /**
     * @var array <p>通知规则 id 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeIds;

    /**
     * @var array <p>通知规则 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notices;

    /**
     * @var array <p>触发任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTasks;

    /**
     * @var ConditionsTemp <p>模板策略组<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsTemp;

    /**
     * @var string <p>最后编辑的用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastEditUin;

    /**
     * @var integer <p>更新时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>创建时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var array <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>namespace显示名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceShowName;

    /**
     * @var integer <p>是否默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var integer <p>能否设置默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanSetDefault;

    /**
     * @var integer <p>实例分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupId;

    /**
     * @var integer <p>实例分组总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSum;

    /**
     * @var string <p>实例分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroupName;

    /**
     * @var string <p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string <p>用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginId;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInstances;

    /**
     * @var AlarmConditionFilter <p>过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filter;

    /**
     * @var array <p>聚合条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupBy;

    /**
     * @var string <p>策略关联的过滤维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterDimensionsParam;

    /**
     * @var integer <p>是否为一键告警策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOneClick;

    /**
     * @var integer <p>一键告警策略是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OneClickStatus;

    /**
     * @var integer <p>高级指标数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedMetricNumber;

    /**
     * @var integer <p>策略是否是全部对象策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsBindAll;

    /**
     * @var array <p>策略标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer <p>是否支持告警标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportAlarmTag;

    /**
     * @var string <p>多标签交/并集关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagOperation;

    /**
     * @var array <p>通知模板绑定内容模板信息</p>
     */
    public $NoticeTmplBindInfos;

    /**
     * @var array <p>模板通知的等级</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HierarchicalNotices;

    /**
     * @var array <p>通知模板绑定内容模板信息，同NoticeTmplBindInfos</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeContentTmplBindInfos;

    /**
     * @var string <p>预设配置id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PredefinedConfigID;

    /**
     * @param string $PolicyId <p>告警策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName <p>告警策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorType <p>监控类型 MT_QCE=云产品监控</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable <p>启停状态 0=停用 1=启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseSum <p>策略组绑定的实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId <p>项目 Id -1=无项目 0=默认项目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace <p>告警策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionTemplateId <p>触发条件模板 Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyCondition $Condition <p>指标触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyEventCondition $EventCondition <p>事件触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeIds <p>通知规则 id 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Notices <p>通知规则 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerTasks <p>触发任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConditionsTemp $ConditionsTemp <p>模板策略组<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastEditUin <p>最后编辑的用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InsertTime <p>创建时间<br>注意：此字段可能返回 null，表示取不到有效值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceShowName <p>namespace显示名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault <p>是否默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CanSetDefault <p>能否设置默认策略，1是，0否</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceGroupId <p>实例分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceSum <p>实例分组总实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceGroupName <p>实例分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType <p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginId <p>用于实例、实例组绑定和解绑接口（BindingPolicyObject、UnBindingAllPolicyObject、UnBindingPolicyObject）的策略 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagInstances <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmConditionFilter $Filter <p>过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupBy <p>聚合条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilterDimensionsParam <p>策略关联的过滤维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsOneClick <p>是否为一键告警策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OneClickStatus <p>一键告警策略是否开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AdvancedMetricNumber <p>高级指标数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsBindAll <p>策略是否是全部对象策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>策略标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSupportAlarmTag <p>是否支持告警标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagOperation <p>多标签交/并集关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeTmplBindInfos <p>通知模板绑定内容模板信息</p>
     * @param array $HierarchicalNotices <p>模板通知的等级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeContentTmplBindInfos <p>通知模板绑定内容模板信息，同NoticeTmplBindInfos</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PredefinedConfigID <p>预设配置id</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("UseSum",$param) and $param["UseSum"] !== null) {
            $this->UseSum = $param["UseSum"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
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

        if (array_key_exists("Notices",$param) and $param["Notices"] !== null) {
            $this->Notices = [];
            foreach ($param["Notices"] as $key => $value){
                $obj = new AlarmNotice();
                $obj->deserialize($value);
                array_push($this->Notices, $obj);
            }
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new ConditionsTemp();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NamespaceShowName",$param) and $param["NamespaceShowName"] !== null) {
            $this->NamespaceShowName = $param["NamespaceShowName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("InstanceGroupName",$param) and $param["InstanceGroupName"] !== null) {
            $this->InstanceGroupName = $param["InstanceGroupName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("TagInstances",$param) and $param["TagInstances"] !== null) {
            $this->TagInstances = [];
            foreach ($param["TagInstances"] as $key => $value){
                $obj = new TagInstance();
                $obj->deserialize($value);
                array_push($this->TagInstances, $obj);
            }
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmConditionFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = [];
            foreach ($param["GroupBy"] as $key => $value){
                $obj = new AlarmGroupByItem();
                $obj->deserialize($value);
                array_push($this->GroupBy, $obj);
            }
        }

        if (array_key_exists("FilterDimensionsParam",$param) and $param["FilterDimensionsParam"] !== null) {
            $this->FilterDimensionsParam = $param["FilterDimensionsParam"];
        }

        if (array_key_exists("IsOneClick",$param) and $param["IsOneClick"] !== null) {
            $this->IsOneClick = $param["IsOneClick"];
        }

        if (array_key_exists("OneClickStatus",$param) and $param["OneClickStatus"] !== null) {
            $this->OneClickStatus = $param["OneClickStatus"];
        }

        if (array_key_exists("AdvancedMetricNumber",$param) and $param["AdvancedMetricNumber"] !== null) {
            $this->AdvancedMetricNumber = $param["AdvancedMetricNumber"];
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

        if (array_key_exists("IsSupportAlarmTag",$param) and $param["IsSupportAlarmTag"] !== null) {
            $this->IsSupportAlarmTag = $param["IsSupportAlarmTag"];
        }

        if (array_key_exists("TagOperation",$param) and $param["TagOperation"] !== null) {
            $this->TagOperation = $param["TagOperation"];
        }

        if (array_key_exists("NoticeTmplBindInfos",$param) and $param["NoticeTmplBindInfos"] !== null) {
            $this->NoticeTmplBindInfos = [];
            foreach ($param["NoticeTmplBindInfos"] as $key => $value){
                $obj = new NoticeContentTmplBindInfo();
                $obj->deserialize($value);
                array_push($this->NoticeTmplBindInfos, $obj);
            }
        }

        if (array_key_exists("HierarchicalNotices",$param) and $param["HierarchicalNotices"] !== null) {
            $this->HierarchicalNotices = [];
            foreach ($param["HierarchicalNotices"] as $key => $value){
                $obj = new AlarmHierarchicalNotice();
                $obj->deserialize($value);
                array_push($this->HierarchicalNotices, $obj);
            }
        }

        if (array_key_exists("NoticeContentTmplBindInfos",$param) and $param["NoticeContentTmplBindInfos"] !== null) {
            $this->NoticeContentTmplBindInfos = [];
            foreach ($param["NoticeContentTmplBindInfos"] as $key => $value){
                $obj = new NoticeContentTmplBindInfo();
                $obj->deserialize($value);
                array_push($this->NoticeContentTmplBindInfos, $obj);
            }
        }

        if (array_key_exists("PredefinedConfigID",$param) and $param["PredefinedConfigID"] !== null) {
            $this->PredefinedConfigID = $param["PredefinedConfigID"];
        }
    }
}
