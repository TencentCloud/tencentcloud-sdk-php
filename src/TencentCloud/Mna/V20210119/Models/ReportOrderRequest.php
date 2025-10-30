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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportOrder请求参数结构体
 *
 * @method string getOrderId() 获取订单编号唯一标识符
 * @method void setOrderId(string $OrderId) 设置订单编号唯一标识符
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getPackageType() 获取用量类型
 * @method void setPackageType(string $PackageType) 设置用量类型
 * @method string getReportMonth() 获取上报月份，默认当前月
 * @method void setReportMonth(string $ReportMonth) 设置上报月份，默认当前月
 */
class ReportOrderRequest extends AbstractModel
{
    /**
     * @var string 订单编号唯一标识符
     */
    public $OrderId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 用量类型
     */
    public $PackageType;

    /**
     * @var string 上报月份，默认当前月
     */
    public $ReportMonth;

    /**
     * @param string $OrderId 订单编号唯一标识符
     * @param string $ProjectId 项目id
     * @param string $PackageType 用量类型
     * @param string $ReportMonth 上报月份，默认当前月
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ReportMonth",$param) and $param["ReportMonth"] !== null) {
            $this->ReportMonth = $param["ReportMonth"];
        }
    }
}
