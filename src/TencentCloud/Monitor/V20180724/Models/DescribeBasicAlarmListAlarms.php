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
 * DescribeBasicAlarmList返回的Alarms
 *
 * @method integer getId() 获取<p>该条告警的ID</p>
 * @method void setId(integer $Id) 设置<p>该条告警的ID</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmStatus() 获取<p>告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmStatus(string $AlarmStatus) 设置<p>告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取<p>策略组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置<p>策略组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取<p>策略组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置<p>策略组名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstOccurTime() 获取<p>发生时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstOccurTime(string $FirstOccurTime) 设置<p>发生时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取<p>持续时间，单位s</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置<p>持续时间，单位s</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOccurTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOccurTime(string $LastOccurTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取<p>告警内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置<p>告警内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjName() 获取<p>告警对象</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjName(string $ObjName) 设置<p>告警对象</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjId() 获取<p>告警对象ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjId(string $ObjId) 设置<p>告警对象ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewName() 获取<p>策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewName(string $ViewName) 设置<p>策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpc() 获取<p>VPC，只有CVM有</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpc(string $Vpc) 设置<p>VPC，只有CVM有</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetricId() 获取<p>指标ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricId(integer $MetricId) 设置<p>指标ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetricName() 获取<p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置<p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmType() 获取<p>告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmType(integer $AlarmType) 设置<p>告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimensions() 获取<p>告警对象维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(string $Dimensions) 设置<p>告警对象维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotifyWay() 获取<p>通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyWay(array $NotifyWay) 设置<p>通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceGroup() 获取<p>所属实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceGroup(array $InstanceGroup) 设置<p>所属实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBasicAlarmListAlarms extends AbstractModel
{
    /**
     * @var integer <p>该条告警的ID</p>
     */
    public $Id;

    /**
     * @var integer <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer <p>告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmStatus;

    /**
     * @var integer <p>策略组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string <p>策略组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string <p>发生时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstOccurTime;

    /**
     * @var integer <p>持续时间，单位s</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOccurTime;

    /**
     * @var string <p>告警内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string <p>告警对象</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjName;

    /**
     * @var string <p>告警对象ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjId;

    /**
     * @var string <p>策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewName;

    /**
     * @var string <p>VPC，只有CVM有</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpc;

    /**
     * @var integer <p>指标ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricId;

    /**
     * @var string <p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var integer <p>告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmType;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>告警对象维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @var array <p>通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyWay;

    /**
     * @var array <p>所属实例组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceGroup;

    /**
     * @param integer $Id <p>该条告警的ID</p>
     * @param integer $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>告警状态ID，0表示未恢复；1表示已恢复；2,3,5表示数据不足；4表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmStatus <p>告警状态，ALARM表示未恢复；OK表示已恢复；NO_DATA表示数据不足；NO_CONF表示已失效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId <p>策略组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName <p>策略组名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstOccurTime <p>发生时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration <p>持续时间，单位s</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOccurTime <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content <p>告警内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjName <p>告警对象</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjId <p>告警对象ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewName <p>策略类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vpc <p>VPC，只有CVM有</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetricId <p>指标ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetricName <p>指标名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmType <p>告警类型，0表示指标告警，2表示产品事件告警，3表示平台事件告警</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dimensions <p>告警对象维度信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NotifyWay <p>通知方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceGroup <p>所属实例组信息</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("FirstOccurTime",$param) and $param["FirstOccurTime"] !== null) {
            $this->FirstOccurTime = $param["FirstOccurTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LastOccurTime",$param) and $param["LastOccurTime"] !== null) {
            $this->LastOccurTime = $param["LastOccurTime"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }

        if (array_key_exists("ObjId",$param) and $param["ObjId"] !== null) {
            $this->ObjId = $param["ObjId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("InstanceGroup",$param) and $param["InstanceGroup"] !== null) {
            $this->InstanceGroup = [];
            foreach ($param["InstanceGroup"] as $key => $value){
                $obj = new InstanceGroup();
                $obj->deserialize($value);
                array_push($this->InstanceGroup, $obj);
            }
        }
    }
}
