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
 * 返回上报的订单信息
 *
 * @method string getUin() 获取父账号uin
 * @method void setUin(string $Uin) 设置父账号uin
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getPackageType() 获取用量类型
 * @method void setPackageType(string $PackageType) 设置用量类型
 * @method string getOrderId() 获取订单编号唯一标识符
 * @method void setOrderId(string $OrderId) 设置订单编号唯一标识符
 * @method string getReportMonth() 获取上报月份，默认当前月
 * @method void setReportMonth(string $ReportMonth) 设置上报月份，默认当前月
 * @method string getUpdated() 获取数据更新时间
 * @method void setUpdated(string $Updated) 设置数据更新时间
 */
class OrderInfo extends AbstractModel
{
    /**
     * @var string 父账号uin
     */
    public $Uin;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 用量类型
     */
    public $PackageType;

    /**
     * @var string 订单编号唯一标识符
     */
    public $OrderId;

    /**
     * @var string 上报月份，默认当前月
     */
    public $ReportMonth;

    /**
     * @var string 数据更新时间
     */
    public $Updated;

    /**
     * @param string $Uin 父账号uin
     * @param string $ProjectId 项目id
     * @param string $PackageType 用量类型
     * @param string $OrderId 订单编号唯一标识符
     * @param string $ReportMonth 上报月份，默认当前月
     * @param string $Updated 数据更新时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ReportMonth",$param) and $param["ReportMonth"] !== null) {
            $this->ReportMonth = $param["ReportMonth"];
        }

        if (array_key_exists("Updated",$param) and $param["Updated"] !== null) {
            $this->Updated = $param["Updated"];
        }
    }
}
