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
 * @method string getOrderId() 获取<p>订单编号唯一标识符</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单编号唯一标识符</p>
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method string getPackageType() 获取<p>用量类型</p>
 * @method void setPackageType(string $PackageType) 设置<p>用量类型</p>
 * @method string getReportMonth() 获取<p>上报月份，默认当前月</p>
 * @method void setReportMonth(string $ReportMonth) 设置<p>上报月份，默认当前月</p>
 */
class ReportOrderRequest extends AbstractModel
{
    /**
     * @var string <p>订单编号唯一标识符</p>
     */
    public $OrderId;

    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>用量类型</p>
     */
    public $PackageType;

    /**
     * @var string <p>上报月份，默认当前月</p>
     */
    public $ReportMonth;

    /**
     * @param string $OrderId <p>订单编号唯一标识符</p>
     * @param string $ProjectId <p>项目id</p>
     * @param string $PackageType <p>用量类型</p>
     * @param string $ReportMonth <p>上报月份，默认当前月</p>
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
