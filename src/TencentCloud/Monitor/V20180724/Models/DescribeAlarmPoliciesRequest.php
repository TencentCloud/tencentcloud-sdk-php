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
 * @method array getNamespaces() 获取根据命名空间过滤
 * @method void setNamespaces(array $Namespaces) 设置根据命名空间过滤
 * @method string getDimensions() 获取告警对象列表
 * @method void setDimensions(string $Dimensions) 设置告警对象列表
 * @method array getReceiverUids() 获取根据接收人搜索
 * @method void setReceiverUids(array $ReceiverUids) 设置根据接收人搜索
 * @method array getReceiverGroups() 获取根据接收组搜索
 * @method void setReceiverGroups(array $ReceiverGroups) 设置根据接收组搜索
 * @method array getPolicyType() 获取根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
 * @method void setPolicyType(array $PolicyType) 设置根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
 * @method string getField() 获取排序字段
 * @method void setField(string $Field) 设置排序字段
 * @method string getOrder() 获取排序顺序：升序：ASC  降序：DESC
 * @method void setOrder(string $Order) 设置排序顺序：升序：ASC  降序：DESC
 * @method array getProjectIds() 获取项目id数组
 * @method void setProjectIds(array $ProjectIds) 设置项目id数组
 * @method array getNoticeIds() 获取告警通知id列表
 * @method void setNoticeIds(array $NoticeIds) 设置告警通知id列表
 * @method array getRuleTypes() 获取根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
 * @method void setRuleTypes(array $RuleTypes) 设置根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
 * @method array getEnable() 获取启停，1：启用   0：停止
 * @method void setEnable(array $Enable) 设置启停，1：启用   0：停止
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
     * @var array 根据命名空间过滤
     */
    public $Namespaces;

    /**
     * @var string 告警对象列表
     */
    public $Dimensions;

    /**
     * @var array 根据接收人搜索
     */
    public $ReceiverUids;

    /**
     * @var array 根据接收组搜索
     */
    public $ReceiverGroups;

    /**
     * @var array 根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
     */
    public $PolicyType;

    /**
     * @var string 排序字段
     */
    public $Field;

    /**
     * @var string 排序顺序：升序：ASC  降序：DESC
     */
    public $Order;

    /**
     * @var array 项目id数组
     */
    public $ProjectIds;

    /**
     * @var array 告警通知id列表
     */
    public $NoticeIds;

    /**
     * @var array 根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
     */
    public $RuleTypes;

    /**
     * @var array 启停，1：启用   0：停止
     */
    public $Enable;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $PageNumber 页数，从 1 开始计数，默认 1
     * @param integer $PageSize 每页的数量，取值1~100，默认20
     * @param string $PolicyName 按策略名称模糊搜索
     * @param array $MonitorTypes 根据监控类型过滤 不选默认查所有类型 "MT_QCE"=云产品监控
     * @param array $Namespaces 根据命名空间过滤
     * @param string $Dimensions 告警对象列表
     * @param array $ReceiverUids 根据接收人搜索
     * @param array $ReceiverGroups 根据接收组搜索
     * @param array $PolicyType 根据默认策略筛选 不传展示全部策略 DEFAULT=展示默认策略 NOT_DEFAULT=展示非默认策略
     * @param string $Field 排序字段
     * @param string $Order 排序顺序：升序：ASC  降序：DESC
     * @param array $ProjectIds 项目id数组
     * @param array $NoticeIds 告警通知id列表
     * @param array $RuleTypes 根据触发条件筛选 不传展示全部策略 STATIC=展示静态阈值策略 DYNAMIC=展示动态阈值策略
     * @param array $Enable 启停，1：启用   0：停止
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
    }
}
