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
 * DescribeAlarmHistories请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getPageNumber() 获取页数，从 1 开始计数，默认 1
 * @method void setPageNumber(integer $PageNumber) 设置页数，从 1 开始计数，默认 1
 * @method integer getPageSize() 获取每页的数量，取值1~100，默认20
 * @method void setPageSize(integer $PageSize) 设置每页的数量，取值1~100，默认20
 * @method string getOrder() 获取默认按首次出现时间倒序排列 "ASC"=正序 "DESC"=逆序
 * @method void setOrder(string $Order) 设置默认按首次出现时间倒序排列 "ASC"=正序 "DESC"=逆序
 * @method integer getStartTime() 获取起始时间，默认一天前的时间戳
 * @method void setStartTime(integer $StartTime) 设置起始时间，默认一天前的时间戳
 * @method integer getEndTime() 获取结束时间，默认当前时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间，默认当前时间戳
 * @method array getMonitorTypes() 获取根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控 "
 * @method void setMonitorTypes(array $MonitorTypes) 设置根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控 "
 * @method string getAlarmObject() 获取根据告警对象过滤 字符串模糊搜索
 * @method void setAlarmObject(string $AlarmObject) 设置根据告警对象过滤 字符串模糊搜索
 * @method array getAlarmStatus() 获取根据告警状态过滤 ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足，不选默认查所有
 * @method void setAlarmStatus(array $AlarmStatus) 设置根据告警状态过滤 ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足，不选默认查所有
 * @method array getProjectIds() 获取根据项目ID过滤，-1=无项目 0=默认项目
 * @method void setProjectIds(array $ProjectIds) 设置根据项目ID过滤，-1=无项目 0=默认项目
 * @method array getInstanceGroupIds() 获取根据实例组ID过滤
 * @method void setInstanceGroupIds(array $InstanceGroupIds) 设置根据实例组ID过滤
 * @method array getNamespaces() 获取根据策略类型过滤
 * @method void setNamespaces(array $Namespaces) 设置根据策略类型过滤
 * @method array getMetricNames() 获取根据指标名过滤
 * @method void setMetricNames(array $MetricNames) 设置根据指标名过滤
 * @method string getPolicyName() 获取根据策略名称模糊搜索
 * @method void setPolicyName(string $PolicyName) 设置根据策略名称模糊搜索
 * @method string getContent() 获取根据告警内容模糊搜索
 * @method void setContent(string $Content) 设置根据告警内容模糊搜索
 * @method array getReceiverUids() 获取根据接收人搜索
 * @method void setReceiverUids(array $ReceiverUids) 设置根据接收人搜索
 * @method array getReceiverGroups() 获取根据接收组搜索
 * @method void setReceiverGroups(array $ReceiverGroups) 设置根据接收组搜索
 * @method array getPolicyIds() 获取根据告警策略 Id 列表搜索
 * @method void setPolicyIds(array $PolicyIds) 设置根据告警策略 Id 列表搜索
 */
class DescribeAlarmHistoriesRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var integer 页数，从 1 开始计数，默认 1
     */
    public $PageNumber;

    /**
     * @var integer 每页的数量，取值1~100，默认20
     */
    public $PageSize;

    /**
     * @var string 默认按首次出现时间倒序排列 "ASC"=正序 "DESC"=逆序
     */
    public $Order;

    /**
     * @var integer 起始时间，默认一天前的时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间，默认当前时间戳
     */
    public $EndTime;

    /**
     * @var array 根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控 "
     */
    public $MonitorTypes;

    /**
     * @var string 根据告警对象过滤 字符串模糊搜索
     */
    public $AlarmObject;

    /**
     * @var array 根据告警状态过滤 ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足，不选默认查所有
     */
    public $AlarmStatus;

    /**
     * @var array 根据项目ID过滤，-1=无项目 0=默认项目
     */
    public $ProjectIds;

    /**
     * @var array 根据实例组ID过滤
     */
    public $InstanceGroupIds;

    /**
     * @var array 根据策略类型过滤
     */
    public $Namespaces;

    /**
     * @var array 根据指标名过滤
     */
    public $MetricNames;

    /**
     * @var string 根据策略名称模糊搜索
     */
    public $PolicyName;

    /**
     * @var string 根据告警内容模糊搜索
     */
    public $Content;

    /**
     * @var array 根据接收人搜索
     */
    public $ReceiverUids;

    /**
     * @var array 根据接收组搜索
     */
    public $ReceiverGroups;

    /**
     * @var array 根据告警策略 Id 列表搜索
     */
    public $PolicyIds;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $PageNumber 页数，从 1 开始计数，默认 1
     * @param integer $PageSize 每页的数量，取值1~100，默认20
     * @param string $Order 默认按首次出现时间倒序排列 "ASC"=正序 "DESC"=逆序
     * @param integer $StartTime 起始时间，默认一天前的时间戳
     * @param integer $EndTime 结束时间，默认当前时间戳
     * @param array $MonitorTypes 根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控 "
     * @param string $AlarmObject 根据告警对象过滤 字符串模糊搜索
     * @param array $AlarmStatus 根据告警状态过滤 ALARM=未恢复 OK=已恢复 NO_CONF=已失效 NO_DATA=数据不足，不选默认查所有
     * @param array $ProjectIds 根据项目ID过滤，-1=无项目 0=默认项目
     * @param array $InstanceGroupIds 根据实例组ID过滤
     * @param array $Namespaces 根据策略类型过滤
     * @param array $MetricNames 根据指标名过滤
     * @param string $PolicyName 根据策略名称模糊搜索
     * @param string $Content 根据告警内容模糊搜索
     * @param array $ReceiverUids 根据接收人搜索
     * @param array $ReceiverGroups 根据接收组搜索
     * @param array $PolicyIds 根据告警策略 Id 列表搜索
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("AlarmObject",$param) and $param["AlarmObject"] !== null) {
            $this->AlarmObject = $param["AlarmObject"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("InstanceGroupIds",$param) and $param["InstanceGroupIds"] !== null) {
            $this->InstanceGroupIds = $param["InstanceGroupIds"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = [];
            foreach ($param["Namespaces"] as $key => $value){
                $obj = new MonitorTypeNamespace();
                $obj->deserialize($value);
                array_push($this->Namespaces, $obj);
            }
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}
