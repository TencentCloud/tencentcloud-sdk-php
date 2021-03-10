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
 * DescribeAlarmPolicies请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getPageNumber() 获取页数，从 1 开始计数，默认 1
 * @method void setPageNumber(integer $PageNumber) 设置页数，从 1 开始计数，默认 1
 * @method integer getPageSize() 获取每页的数量，取值1~100，默认20
 * @method void setPageSize(integer $PageSize) 设置每页的数量，取值1~100，默认20
 * @method string getPolicyName() 获取按策略名称模糊搜索
 * @method void setPolicyName(string $PolicyName) 设置按策略名称模糊搜索
 * @method array getMonitorTypes() 获取根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控
 * @method void setMonitorTypes(array $MonitorTypes) 设置根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控
 * @method array getNamespaces() 获取根据命名空间过滤，不同策略类型的值详见
[策略类型列表](https://cloud.tencent.com/document/product/248/50397)
 * @method void setNamespaces(array $Namespaces) 设置根据命名空间过滤，不同策略类型的值详见
[策略类型列表](https://cloud.tencent.com/document/product/248/50397)
 * @method string getDimensions() 获取告警对象列表，外层数组，对应多个实例
内层数组，每个数组对应一个实例，里面的object对应的是这个实例的维度信息。格式为
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
不同云产品参数示例详见
[维度信息Dimensions列表](https://cloud.tencent.com/document/product/248/50397)
 * @method void setDimensions(string $Dimensions) 设置告警对象列表，外层数组，对应多个实例
内层数组，每个数组对应一个实例，里面的object对应的是这个实例的维度信息。格式为
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
不同云产品参数示例详见
[维度信息Dimensions列表](https://cloud.tencent.com/document/product/248/50397)
 * @method array getReceiverUids() 获取根据接收人的uid搜索，需要调用访问管理的api查询。详见
[拉取子用户](https://cloud.tencent.com/document/product/598/34587)
 * @method void setReceiverUids(array $ReceiverUids) 设置根据接收人的uid搜索，需要调用访问管理的api查询。详见
[拉取子用户](https://cloud.tencent.com/document/product/598/34587)
 * @method array getReceiverGroups() 获取根据接收组的uid搜索，需要调用访问管理的api查询，详见
[查询用户组列表](https://cloud.tencent.com/document/product/598/34589)
 * @method void setReceiverGroups(array $ReceiverGroups) 设置根据接收组的uid搜索，需要调用访问管理的api查询，详见
[查询用户组列表](https://cloud.tencent.com/document/product/598/34589)
 * @method array getPolicyType() 获取根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
 * @method void setPolicyType(array $PolicyType) 设置根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
 * @method string getField() 获取排序字段，例如按照最后修改时间排序，Field: "UpdateTime"
 * @method void setField(string $Field) 设置排序字段，例如按照最后修改时间排序，Field: "UpdateTime"
 * @method string getOrder() 获取排序顺序：升序：ASC  降序：DESC
 * @method void setOrder(string $Order) 设置排序顺序：升序：ASC  降序：DESC
 * @method array getProjectIds() 获取策略所属项目的id数组，可在此页面查看
[项目管理](https://console.cloud.tencent.com/project)
 * @method void setProjectIds(array $ProjectIds) 设置策略所属项目的id数组，可在此页面查看
[项目管理](https://console.cloud.tencent.com/project)
 * @method array getNoticeIds() 获取通知模版的id列表，可查询通知模版列表获取。
[查询通知模板列表](https://cloud.tencent.com/document/product/248/51280)
 * @method void setNoticeIds(array $NoticeIds) 设置通知模版的id列表，可查询通知模版列表获取。
[查询通知模板列表](https://cloud.tencent.com/document/product/248/51280)
 * @method array getRuleTypes() 获取根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
 * @method void setRuleTypes(array $RuleTypes) 设置根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
 * @method array getEnable() 获取告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]
 * @method void setEnable(array $Enable) 设置告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]
 * @method integer getNotBindingNoticeRule() 获取是否未配置通知规则，1：未配置，0：配置
 * @method void setNotBindingNoticeRule(integer $NotBindingNoticeRule) 设置是否未配置通知规则，1：未配置，0：配置
 */
class DescribeAlarmPoliciesRequest extends AbstractModel
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
     * @var string 按策略名称模糊搜索
     */
    public $PolicyName;

    /**
     * @var array 根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控
     */
    public $MonitorTypes;

    /**
     * @var array 根据命名空间过滤，不同策略类型的值详见
[策略类型列表](https://cloud.tencent.com/document/product/248/50397)
     */
    public $Namespaces;

    /**
     * @var string 告警对象列表，外层数组，对应多个实例
内层数组，每个数组对应一个实例，里面的object对应的是这个实例的维度信息。格式为
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
不同云产品参数示例详见
[维度信息Dimensions列表](https://cloud.tencent.com/document/product/248/50397)
     */
    public $Dimensions;

    /**
     * @var array 根据接收人的uid搜索，需要调用访问管理的api查询。详见
[拉取子用户](https://cloud.tencent.com/document/product/598/34587)
     */
    public $ReceiverUids;

    /**
     * @var array 根据接收组的uid搜索，需要调用访问管理的api查询，详见
[查询用户组列表](https://cloud.tencent.com/document/product/598/34589)
     */
    public $ReceiverGroups;

    /**
     * @var array 根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
     */
    public $PolicyType;

    /**
     * @var string 排序字段，例如按照最后修改时间排序，Field: "UpdateTime"
     */
    public $Field;

    /**
     * @var string 排序顺序：升序：ASC  降序：DESC
     */
    public $Order;

    /**
     * @var array 策略所属项目的id数组，可在此页面查看
[项目管理](https://console.cloud.tencent.com/project)
     */
    public $ProjectIds;

    /**
     * @var array 通知模版的id列表，可查询通知模版列表获取。
[查询通知模板列表](https://cloud.tencent.com/document/product/248/51280)
     */
    public $NoticeIds;

    /**
     * @var array 根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
     */
    public $RuleTypes;

    /**
     * @var array 告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]
     */
    public $Enable;

    /**
     * @var integer 是否未配置通知规则，1：未配置，0：配置
     */
    public $NotBindingNoticeRule;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $PageNumber 页数，从 1 开始计数，默认 1
     * @param integer $PageSize 每页的数量，取值1~100，默认20
     * @param string $PolicyName 按策略名称模糊搜索
     * @param array $MonitorTypes 根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控
     * @param array $Namespaces 根据命名空间过滤，不同策略类型的值详见
[策略类型列表](https://cloud.tencent.com/document/product/248/50397)
     * @param string $Dimensions 告警对象列表，外层数组，对应多个实例
内层数组，每个数组对应一个实例，里面的object对应的是这个实例的维度信息。格式为
[
	[{"name":"unInstanceId","value":"ins-qr888845g"}],
	[{"name":"unInstanceId","value":"ins-qr8d555g"}]
	...
]
不同云产品参数示例详见
[维度信息Dimensions列表](https://cloud.tencent.com/document/product/248/50397)
     * @param array $ReceiverUids 根据接收人的uid搜索，需要调用访问管理的api查询。详见
[拉取子用户](https://cloud.tencent.com/document/product/598/34587)
     * @param array $ReceiverGroups 根据接收组的uid搜索，需要调用访问管理的api查询，详见
[查询用户组列表](https://cloud.tencent.com/document/product/598/34589)
     * @param array $PolicyType 根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
     * @param string $Field 排序字段，例如按照最后修改时间排序，Field: "UpdateTime"
     * @param string $Order 排序顺序：升序：ASC  降序：DESC
     * @param array $ProjectIds 策略所属项目的id数组，可在此页面查看
[项目管理](https://console.cloud.tencent.com/project)
     * @param array $NoticeIds 通知模版的id列表，可查询通知模版列表获取。
[查询通知模板列表](https://cloud.tencent.com/document/product/248/51280)
     * @param array $RuleTypes 根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
     * @param array $Enable 告警启停筛选，[1]：启用   [0]：停止，全部[0, 1]
     * @param integer $NotBindingNoticeRule 是否未配置通知规则，1：未配置，0：配置
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

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("ReceiverUids",$param) and $param["ReceiverUids"] !== null) {
            $this->ReceiverUids = $param["ReceiverUids"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("RuleTypes",$param) and $param["RuleTypes"] !== null) {
            $this->RuleTypes = $param["RuleTypes"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("NotBindingNoticeRule",$param) and $param["NotBindingNoticeRule"] !== null) {
            $this->NotBindingNoticeRule = $param["NotBindingNoticeRule"];
        }
    }
}
