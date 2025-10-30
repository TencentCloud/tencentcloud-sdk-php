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
 * ListOpsAlarmRules请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageNumber() 获取分页的页数，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置分页的页数，默认为1
 * @method integer getPageSize() 获取每页显示的条数，默认为20，最小值为1、最大值为200
 * @method void setPageSize(integer $PageSize) 设置每页显示的条数，默认为20，最小值为1、最大值为200
 * @method integer getMonitorObjectType() 获取监控对象类型, 任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
 * @method void setMonitorObjectType(integer $MonitorObjectType) 设置监控对象类型, 任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
 * @method string getTaskId() 获取根据任务id查询告警规则
 * @method void setTaskId(string $TaskId) 设置根据任务id查询告警规则
 * @method string getAlarmType() 获取查询配置对应告警类型的告警规则
告警规则监控类型 failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警； projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；
离线集成任务对账告警： reconciliationFailure： 离线对账任务失败告警 reconciliationOvertime： 离线对账任务运行超时告警 reconciliationMismatch： 数据对账任务不一致条数超过阀值告警
 * @method void setAlarmType(string $AlarmType) 设置查询配置对应告警类型的告警规则
告警规则监控类型 failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警； projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；
离线集成任务对账告警： reconciliationFailure： 离线对账任务失败告警 reconciliationOvertime： 离线对账任务运行超时告警 reconciliationMismatch： 数据对账任务不一致条数超过阀值告警
 * @method integer getAlarmLevel() 获取查询配置了对应告警级别的告警规则
告警级别 1.普通、2.重要、3.紧急
 * @method void setAlarmLevel(integer $AlarmLevel) 设置查询配置了对应告警级别的告警规则
告警级别 1.普通、2.重要、3.紧急
 * @method string getAlarmRecipientId() 获取查询配置对应告警接收人的告警规则
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置查询配置对应告警接收人的告警规则
 * @method string getKeyword() 获取根据告警规则id/规则名称查询对应的告警规则
 * @method void setKeyword(string $Keyword) 设置根据告警规则id/规则名称查询对应的告警规则
 * @method string getCreateUserUin() 获取告警规则创建人过滤
 * @method void setCreateUserUin(string $CreateUserUin) 设置告警规则创建人过滤
 * @method string getCreateTimeFrom() 获取告警规则创建时间范围起始时间, 格式如2025-08-17 00:00:00
 * @method void setCreateTimeFrom(string $CreateTimeFrom) 设置告警规则创建时间范围起始时间, 格式如2025-08-17 00:00:00
 * @method string getCreateTimeTo() 获取告警规则创建时间范围结束时间，格式如"2025-08-26 23:59:59"

 * @method void setCreateTimeTo(string $CreateTimeTo) 设置告警规则创建时间范围结束时间，格式如"2025-08-26 23:59:59"

 * @method string getUpdateTimeFrom() 获取最后更新时间过滤告警规则， 格式如"2025-08-26 00:00:00"

 * @method void setUpdateTimeFrom(string $UpdateTimeFrom) 设置最后更新时间过滤告警规则， 格式如"2025-08-26 00:00:00"

 * @method string getUpdateTimeTo() 获取最后更新时间过滤告警规则 格式如： "2025-08-26 23:59:59"

 * @method void setUpdateTimeTo(string $UpdateTimeTo) 设置最后更新时间过滤告警规则 格式如： "2025-08-26 23:59:59"
 */
class ListOpsAlarmRulesRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 分页的页数，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的条数，默认为20，最小值为1、最大值为200
     */
    public $PageSize;

    /**
     * @var integer 监控对象类型, 任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
     */
    public $MonitorObjectType;

    /**
     * @var string 根据任务id查询告警规则
     */
    public $TaskId;

    /**
     * @var string 查询配置对应告警类型的告警规则
告警规则监控类型 failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警； projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；
离线集成任务对账告警： reconciliationFailure： 离线对账任务失败告警 reconciliationOvertime： 离线对账任务运行超时告警 reconciliationMismatch： 数据对账任务不一致条数超过阀值告警
     */
    public $AlarmType;

    /**
     * @var integer 查询配置了对应告警级别的告警规则
告警级别 1.普通、2.重要、3.紧急
     */
    public $AlarmLevel;

    /**
     * @var string 查询配置对应告警接收人的告警规则
     */
    public $AlarmRecipientId;

    /**
     * @var string 根据告警规则id/规则名称查询对应的告警规则
     */
    public $Keyword;

    /**
     * @var string 告警规则创建人过滤
     */
    public $CreateUserUin;

    /**
     * @var string 告警规则创建时间范围起始时间, 格式如2025-08-17 00:00:00
     */
    public $CreateTimeFrom;

    /**
     * @var string 告警规则创建时间范围结束时间，格式如"2025-08-26 23:59:59"

     */
    public $CreateTimeTo;

    /**
     * @var string 最后更新时间过滤告警规则， 格式如"2025-08-26 00:00:00"

     */
    public $UpdateTimeFrom;

    /**
     * @var string 最后更新时间过滤告警规则 格式如： "2025-08-26 23:59:59"

     */
    public $UpdateTimeTo;

    /**
     * @param string $ProjectId 项目id
     * @param integer $PageNumber 分页的页数，默认为1
     * @param integer $PageSize 每页显示的条数，默认为20，最小值为1、最大值为200
     * @param integer $MonitorObjectType 监控对象类型, 任务维度监控： 可按照任务/工作流/项目来配置：1.任务、2.工作流、3.项目（默认为1.任务） 项目维度监控： 项目整体任务波动告警， 7：项目波动监控告警
     * @param string $TaskId 根据任务id查询告警规则
     * @param string $AlarmType 查询配置对应告警类型的告警规则
告警规则监控类型 failure：失败告警 ；overtime：超时告警 success：成功告警; backTrackingOrRerunSuccess: 补录重跑成功告警 backTrackingOrRerunFailure：补录重跑失败告警；
项目波动告警
projectFailureInstanceUpwardFluctuationAlarm： 当天失败实例数向上波动率超过阀值告警； projectSuccessInstanceDownwardFluctuationAlarm：当天成功实例数向下波动率超过阀值告警；
离线集成任务对账告警： reconciliationFailure： 离线对账任务失败告警 reconciliationOvertime： 离线对账任务运行超时告警 reconciliationMismatch： 数据对账任务不一致条数超过阀值告警
     * @param integer $AlarmLevel 查询配置了对应告警级别的告警规则
告警级别 1.普通、2.重要、3.紧急
     * @param string $AlarmRecipientId 查询配置对应告警接收人的告警规则
     * @param string $Keyword 根据告警规则id/规则名称查询对应的告警规则
     * @param string $CreateUserUin 告警规则创建人过滤
     * @param string $CreateTimeFrom 告警规则创建时间范围起始时间, 格式如2025-08-17 00:00:00
     * @param string $CreateTimeTo 告警规则创建时间范围结束时间，格式如"2025-08-26 23:59:59"

     * @param string $UpdateTimeFrom 最后更新时间过滤告警规则， 格式如"2025-08-26 00:00:00"

     * @param string $UpdateTimeTo 最后更新时间过滤告警规则 格式如： "2025-08-26 23:59:59"
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MonitorObjectType",$param) and $param["MonitorObjectType"] !== null) {
            $this->MonitorObjectType = $param["MonitorObjectType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }

        if (array_key_exists("UpdateTimeFrom",$param) and $param["UpdateTimeFrom"] !== null) {
            $this->UpdateTimeFrom = $param["UpdateTimeFrom"];
        }

        if (array_key_exists("UpdateTimeTo",$param) and $param["UpdateTimeTo"] !== null) {
            $this->UpdateTimeTo = $param["UpdateTimeTo"];
        }
    }
}
