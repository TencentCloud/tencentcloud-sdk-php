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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道合作加固订单资源信息
 *
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method integer getPlatformType() 获取平台类型整型值 
 * @method void setPlatformType(integer $PlatformType) 设置平台类型整型值 
 * @method string getPlatformTypeDesc() 获取平台类型描述：  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformTypeDesc(string $PlatformTypeDesc) 设置平台类型描述：  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getOrderType() 获取订单采购类型整型值
 * @method void setOrderType(integer $OrderType) 设置订单采购类型整型值
 * @method string getOrderTypeDesc() 获取订单采购类型描述： 1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderTypeDesc(string $OrderTypeDesc) 设置订单采购类型描述： 1-免费试用 2-按年收费 3-按次收费
 * @method string getAppPkgName() 获取android包年收费加固的包名
 * @method void setAppPkgName(string $AppPkgName) 设置android包年收费加固的包名
 * @method string getResourceId() 获取资源号
 * @method void setResourceId(string $ResourceId) 设置资源号
 * @method integer getResourceStatus() 获取资源状态整型值
 * @method void setResourceStatus(integer $ResourceStatus) 设置资源状态整型值
 * @method string getResourceStatusDesc() 获取资源状态描述
0-未生效、1-生效中、2-已失效。
 * @method void setResourceStatusDesc(string $ResourceStatusDesc) 设置资源状态描述
0-未生效、1-生效中、2-已失效。
 * @method integer getTestTimes() 获取订单类型为免费试用时的免费加固次数。
 * @method void setTestTimes(integer $TestTimes) 设置订单类型为免费试用时的免费加固次数。
 * @method string getValidTime() 获取资源生效时间
 * @method void setValidTime(string $ValidTime) 设置资源生效时间
 * @method string getExpireTime() 获取资源过期时间
 * @method void setExpireTime(string $ExpireTime) 设置资源过期时间
 * @method string getCreateTime() 获取资源创建时间
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间
 * @method string getApprover() 获取订单审批人
 * @method void setApprover(string $Approver) 设置订单审批人
 * @method integer getApprovalStatus() 获取订单审批状态整型值
 * @method void setApprovalStatus(integer $ApprovalStatus) 设置订单审批状态整型值
 * @method string getApprovalStatusDesc() 获取订单审批状态整型值描述：0-未审批、1-审批通过、2-驳回。
 * @method void setApprovalStatusDesc(string $ApprovalStatusDesc) 设置订单审批状态整型值描述：0-未审批、1-审批通过、2-驳回。
 * @method string getApprovalTime() 获取订单审批时间
 * @method void setApprovalTime(string $ApprovalTime) 设置订单审批时间
 * @method integer getTimesTaskTotalCount() 获取按次收费加固资源，其关联的总任务数
 * @method void setTimesTaskTotalCount(integer $TimesTaskTotalCount) 设置按次收费加固资源，其关联的总任务数
 * @method integer getTimesTaskSuccessCount() 获取按次收费加固资源，其关联的任务成功数
 * @method void setTimesTaskSuccessCount(integer $TimesTaskSuccessCount) 设置按次收费加固资源，其关联的任务成功数
 * @method integer getTimesTaskFailCount() 获取按次收费加固资源，其关联的任务失败数
 * @method void setTimesTaskFailCount(integer $TimesTaskFailCount) 设置按次收费加固资源，其关联的任务失败数
 */
class Orders extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var integer 平台类型整型值 
     */
    public $PlatformType;

    /**
     * @var string 平台类型描述：  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     */
    public $PlatformTypeDesc;

    /**
     * @var integer 订单采购类型整型值
     */
    public $OrderType;

    /**
     * @var string 订单采购类型描述： 1-免费试用 2-按年收费 3-按次收费
     */
    public $OrderTypeDesc;

    /**
     * @var string android包年收费加固的包名
     */
    public $AppPkgName;

    /**
     * @var string 资源号
     */
    public $ResourceId;

    /**
     * @var integer 资源状态整型值
     */
    public $ResourceStatus;

    /**
     * @var string 资源状态描述
0-未生效、1-生效中、2-已失效。
     */
    public $ResourceStatusDesc;

    /**
     * @var integer 订单类型为免费试用时的免费加固次数。
     */
    public $TestTimes;

    /**
     * @var string 资源生效时间
     */
    public $ValidTime;

    /**
     * @var string 资源过期时间
     */
    public $ExpireTime;

    /**
     * @var string 资源创建时间
     */
    public $CreateTime;

    /**
     * @var string 订单审批人
     */
    public $Approver;

    /**
     * @var integer 订单审批状态整型值
     */
    public $ApprovalStatus;

    /**
     * @var string 订单审批状态整型值描述：0-未审批、1-审批通过、2-驳回。
     */
    public $ApprovalStatusDesc;

    /**
     * @var string 订单审批时间
     */
    public $ApprovalTime;

    /**
     * @var integer 按次收费加固资源，其关联的总任务数
     */
    public $TimesTaskTotalCount;

    /**
     * @var integer 按次收费加固资源，其关联的任务成功数
     */
    public $TimesTaskSuccessCount;

    /**
     * @var integer 按次收费加固资源，其关联的任务失败数
     */
    public $TimesTaskFailCount;

    /**
     * @param string $OrderId 订单号
     * @param integer $PlatformType 平台类型整型值 
     * @param string $PlatformTypeDesc 平台类型描述：  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $OrderType 订单采购类型整型值
     * @param string $OrderTypeDesc 订单采购类型描述： 1-免费试用 2-按年收费 3-按次收费
     * @param string $AppPkgName android包年收费加固的包名
     * @param string $ResourceId 资源号
     * @param integer $ResourceStatus 资源状态整型值
     * @param string $ResourceStatusDesc 资源状态描述
0-未生效、1-生效中、2-已失效。
     * @param integer $TestTimes 订单类型为免费试用时的免费加固次数。
     * @param string $ValidTime 资源生效时间
     * @param string $ExpireTime 资源过期时间
     * @param string $CreateTime 资源创建时间
     * @param string $Approver 订单审批人
     * @param integer $ApprovalStatus 订单审批状态整型值
     * @param string $ApprovalStatusDesc 订单审批状态整型值描述：0-未审批、1-审批通过、2-驳回。
     * @param string $ApprovalTime 订单审批时间
     * @param integer $TimesTaskTotalCount 按次收费加固资源，其关联的总任务数
     * @param integer $TimesTaskSuccessCount 按次收费加固资源，其关联的任务成功数
     * @param integer $TimesTaskFailCount 按次收费加固资源，其关联的任务失败数
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("PlatformTypeDesc",$param) and $param["PlatformTypeDesc"] !== null) {
            $this->PlatformTypeDesc = $param["PlatformTypeDesc"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderTypeDesc",$param) and $param["OrderTypeDesc"] !== null) {
            $this->OrderTypeDesc = $param["OrderTypeDesc"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ResourceStatusDesc",$param) and $param["ResourceStatusDesc"] !== null) {
            $this->ResourceStatusDesc = $param["ResourceStatusDesc"];
        }

        if (array_key_exists("TestTimes",$param) and $param["TestTimes"] !== null) {
            $this->TestTimes = $param["TestTimes"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Approver",$param) and $param["Approver"] !== null) {
            $this->Approver = $param["Approver"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("ApprovalStatusDesc",$param) and $param["ApprovalStatusDesc"] !== null) {
            $this->ApprovalStatusDesc = $param["ApprovalStatusDesc"];
        }

        if (array_key_exists("ApprovalTime",$param) and $param["ApprovalTime"] !== null) {
            $this->ApprovalTime = $param["ApprovalTime"];
        }

        if (array_key_exists("TimesTaskTotalCount",$param) and $param["TimesTaskTotalCount"] !== null) {
            $this->TimesTaskTotalCount = $param["TimesTaskTotalCount"];
        }

        if (array_key_exists("TimesTaskSuccessCount",$param) and $param["TimesTaskSuccessCount"] !== null) {
            $this->TimesTaskSuccessCount = $param["TimesTaskSuccessCount"];
        }

        if (array_key_exists("TimesTaskFailCount",$param) and $param["TimesTaskFailCount"] !== null) {
            $this->TimesTaskFailCount = $param["TimesTaskFailCount"];
        }
    }
}
