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
 * DescribeOrderInstances请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页展示数量
 * @method void setPageSize(integer $PageSize) 设置每页展示数量
 * @method string getOrderField() 获取按某个字段排序，目前仅支持CreateTime排序。
 * @method void setOrderField(string $OrderField) 设置按某个字段排序，目前仅支持CreateTime排序。
 * @method string getOrderDirection() 获取升序（asc）还是降序（desc），默认：desc。
 * @method void setOrderDirection(string $OrderDirection) 设置升序（asc）还是降序（desc），默认：desc。
 * @method integer getPlatformType() 获取（条件过滤字段）平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置（条件过滤字段）平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getOrderType() 获取（条件过滤字段）订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method void setOrderType(integer $OrderType) 设置（条件过滤字段）订单采购类型 1-免费试用 2-按年收费 3-按次收费
 * @method integer getApprovalStatus() 获取（条件过滤字段）订单审批状态：
 * @method void setApprovalStatus(integer $ApprovalStatus) 设置（条件过滤字段）订单审批状态：
 * @method integer getResourceStatus() 获取（条件过滤字段）资源状态：
 * @method void setResourceStatus(integer $ResourceStatus) 设置（条件过滤字段）资源状态：
 * @method string getOrderId() 获取（条件过滤字段）订单ID
 * @method void setOrderId(string $OrderId) 设置（条件过滤字段）订单ID
 * @method string getResourceId() 获取（条件过滤字段）资源ID
 * @method void setResourceId(string $ResourceId) 设置（条件过滤字段）资源ID
 * @method string getAppPkgName() 获取（条件过滤字段）包名，查询android加固订单时使用
 * @method void setAppPkgName(string $AppPkgName) 设置（条件过滤字段）包名，查询android加固订单时使用
 */
class DescribeOrderInstancesRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页展示数量
     */
    public $PageSize;

    /**
     * @var string 按某个字段排序，目前仅支持CreateTime排序。
     */
    public $OrderField;

    /**
     * @var string 升序（asc）还是降序（desc），默认：desc。
     */
    public $OrderDirection;

    /**
     * @var integer （条件过滤字段）平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     */
    public $PlatformType;

    /**
     * @var integer （条件过滤字段）订单采购类型 1-免费试用 2-按年收费 3-按次收费
     */
    public $OrderType;

    /**
     * @var integer （条件过滤字段）订单审批状态：
     */
    public $ApprovalStatus;

    /**
     * @var integer （条件过滤字段）资源状态：
     */
    public $ResourceStatus;

    /**
     * @var string （条件过滤字段）订单ID
     */
    public $OrderId;

    /**
     * @var string （条件过滤字段）资源ID
     */
    public $ResourceId;

    /**
     * @var string （条件过滤字段）包名，查询android加固订单时使用
     */
    public $AppPkgName;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页展示数量
     * @param string $OrderField 按某个字段排序，目前仅支持CreateTime排序。
     * @param string $OrderDirection 升序（asc）还是降序（desc），默认：desc。
     * @param integer $PlatformType （条件过滤字段）平台类型  1.android加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $OrderType （条件过滤字段）订单采购类型 1-免费试用 2-按年收费 3-按次收费
     * @param integer $ApprovalStatus （条件过滤字段）订单审批状态：
     * @param integer $ResourceStatus （条件过滤字段）资源状态：
     * @param string $OrderId （条件过滤字段）订单ID
     * @param string $ResourceId （条件过滤字段）资源ID
     * @param string $AppPkgName （条件过滤字段）包名，查询android加固订单时使用
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }
    }
}
