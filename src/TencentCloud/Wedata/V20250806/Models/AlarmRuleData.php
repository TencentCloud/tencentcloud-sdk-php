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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警规则详情
 *
 * @method string getAlarmRuleId() 获取告警规则id
 * @method void setAlarmRuleId(string $AlarmRuleId) 设置告警规则id
 * @method string getAlarmRuleName() 获取告警规则名称
 * @method void setAlarmRuleName(string $AlarmRuleName) 设置告警规则名称
 * @method string getDescription() 获取告警规则描述
 * @method void setDescription(string $Description) 设置告警规则描述
 * @method integer getMonitorObjectType() 获取监控对象类型,
任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 
项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置监控对象类型,
任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 
项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
 * @method array getMonitorObjectIds() 获取根据MonitorType 的设置传入不同的业务id，如下1（任务）： MonitorObjectIds为任务id列表2（工作流）： MonitorObjectIds 为工作流id列表(工作流id可从接口ListWorkflows获取)3（项目）： MonitorObjectIds为项目id列表
 * @method void setMonitorObjectIds(array $MonitorObjectIds) 设置根据MonitorType 的设置传入不同的业务id，如下1（任务）： MonitorObjectIds为任务id列表2（工作流）： MonitorObjectIds 为工作流id列表(工作流id可从接口ListWorkflows获取)3（项目）： MonitorObjectIds为项目id列表
 * @method array getAlarmTypes() 获取告警规则监控类型
failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警；
projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；

离线集成任务对账告警：
reconciliationFailure： 离线对账任务失败告警
reconciliationOvertime： 离线对账任务运行超时告警
reconciliationMismatch： 数据对账任务不一致条数超过阀值告警

 * @method void setAlarmTypes(array $AlarmTypes) 设置告警规则监控类型
failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警；
projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；

离线集成任务对账告警：
reconciliationFailure： 离线对账任务失败告警
reconciliationOvertime： 离线对账任务运行超时告警
reconciliationMismatch： 数据对账任务不一致条数超过阀值告警

 * @method integer getStatus() 获取告警规则是否启用
0-- 禁用 1--启用
 * @method void setStatus(integer $Status) 设置告警规则是否启用
0-- 禁用 1--启用
 * @method AlarmRuleDetail getAlarmRuleDetail() 获取告警规则配置信息 成功告警无需配置；失败告警可以配置首次失败告警或者所有重试失败告警；超时配置需要配置超时类型及超时阀值；项目波动告警需要配置波动率及防抖周期配置
 * @method void setAlarmRuleDetail(AlarmRuleDetail $AlarmRuleDetail) 设置告警规则配置信息 成功告警无需配置；失败告警可以配置首次失败告警或者所有重试失败告警；超时配置需要配置超时类型及超时阀值；项目波动告警需要配置波动率及防抖周期配置
 * @method integer getAlarmLevel() 获取告警级别 1.普通、2.重要、3.紧急
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别 1.普通、2.重要、3.紧急
 * @method string getOwnerUin() 获取告警规则创建人uid
 * @method void setOwnerUin(string $OwnerUin) 设置告警规则创建人uid
 * @method string getBundleId() 获取bundle 客户端绑定的告警规则:  为空是正常的告警规则，不为空则是对应bundle客户端绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置bundle 客户端绑定的告警规则:  为空是正常的告警规则，不为空则是对应bundle客户端绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取bundleId不为空 则表示绑定的bundle客户端名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置bundleId不为空 则表示绑定的bundle客户端名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarmGroups() 获取告警接收人配置列表
 * @method void setAlarmGroups(array $AlarmGroups) 设置告警接收人配置列表
 */
class AlarmRuleData extends AbstractModel
{
    /**
     * @var string 告警规则id
     */
    public $AlarmRuleId;

    /**
     * @var string 告警规则名称
     */
    public $AlarmRuleName;

    /**
     * @var string 告警规则描述
     */
    public $Description;

    /**
     * @var integer 监控对象类型,
任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 
项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
     */
    public $MonitorObjectType;

    /**
     * @var array 根据MonitorType 的设置传入不同的业务id，如下1（任务）： MonitorObjectIds为任务id列表2（工作流）： MonitorObjectIds 为工作流id列表(工作流id可从接口ListWorkflows获取)3（项目）： MonitorObjectIds为项目id列表
     */
    public $MonitorObjectIds;

    /**
     * @var array 告警规则监控类型
failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警；
projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；

离线集成任务对账告警：
reconciliationFailure： 离线对账任务失败告警
reconciliationOvertime： 离线对账任务运行超时告警
reconciliationMismatch： 数据对账任务不一致条数超过阀值告警

     */
    public $AlarmTypes;

    /**
     * @var integer 告警规则是否启用
0-- 禁用 1--启用
     */
    public $Status;

    /**
     * @var AlarmRuleDetail 告警规则配置信息 成功告警无需配置；失败告警可以配置首次失败告警或者所有重试失败告警；超时配置需要配置超时类型及超时阀值；项目波动告警需要配置波动率及防抖周期配置
     */
    public $AlarmRuleDetail;

    /**
     * @var integer 告警级别 1.普通、2.重要、3.紧急
     */
    public $AlarmLevel;

    /**
     * @var string 告警规则创建人uid
     */
    public $OwnerUin;

    /**
     * @var string bundle 客户端绑定的告警规则:  为空是正常的告警规则，不为空则是对应bundle客户端绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string bundleId不为空 则表示绑定的bundle客户端名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var array 告警接收人配置列表
     */
    public $AlarmGroups;

    /**
     * @param string $AlarmRuleId 告警规则id
     * @param string $AlarmRuleName 告警规则名称
     * @param string $Description 告警规则描述
     * @param integer $MonitorObjectType 监控对象类型,
任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 
项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
     * @param array $MonitorObjectIds 根据MonitorType 的设置传入不同的业务id，如下1（任务）： MonitorObjectIds为任务id列表2（工作流）： MonitorObjectIds 为工作流id列表(工作流id可从接口ListWorkflows获取)3（项目）： MonitorObjectIds为项目id列表
     * @param array $AlarmTypes 告警规则监控类型
failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警；
projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；

离线集成任务对账告警：
reconciliationFailure： 离线对账任务失败告警
reconciliationOvertime： 离线对账任务运行超时告警
reconciliationMismatch： 数据对账任务不一致条数超过阀值告警

     * @param integer $Status 告警规则是否启用
0-- 禁用 1--启用
     * @param AlarmRuleDetail $AlarmRuleDetail 告警规则配置信息 成功告警无需配置；失败告警可以配置首次失败告警或者所有重试失败告警；超时配置需要配置超时类型及超时阀值；项目波动告警需要配置波动率及防抖周期配置
     * @param integer $AlarmLevel 告警级别 1.普通、2.重要、3.紧急
     * @param string $OwnerUin 告警规则创建人uid
     * @param string $BundleId bundle 客户端绑定的告警规则:  为空是正常的告警规则，不为空则是对应bundle客户端绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo bundleId不为空 则表示绑定的bundle客户端名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmGroups 告警接收人配置列表
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
        if (array_key_exists("AlarmRuleId",$param) and $param["AlarmRuleId"] !== null) {
            $this->AlarmRuleId = $param["AlarmRuleId"];
        }

        if (array_key_exists("AlarmRuleName",$param) and $param["AlarmRuleName"] !== null) {
            $this->AlarmRuleName = $param["AlarmRuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("MonitorObjectIds",$param) and $param["MonitorObjectIds"] !== null) {
            $this->MonitorObjectIds = $param["MonitorObjectIds"];
        }

        if (array_key_exists("AlarmTypes",$param) and $param["AlarmTypes"] !== null) {
            $this->AlarmTypes = $param["AlarmTypes"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmRuleDetail",$param) and $param["AlarmRuleDetail"] !== null) {
            $this->AlarmRuleDetail = new AlarmRuleDetail();
            $this->AlarmRuleDetail->deserialize($param["AlarmRuleDetail"]);
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("AlarmGroups",$param) and $param["AlarmGroups"] !== null) {
            $this->AlarmGroups = [];
            foreach ($param["AlarmGroups"] as $key => $value){
                $obj = new AlarmGroup();
                $obj->deserialize($value);
                array_push($this->AlarmGroups, $obj);
            }
        }
    }
}
