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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenAuditService请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getLogExpireDay() 获取<p>日志保存时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
 * @method void setLogExpireDay(integer $LogExpireDay) 设置<p>日志保存时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
 * @method integer getHotLogExpireDay() 获取<p>高频存储时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) 设置<p>高频存储时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
 * @method string getAuditType() 获取<p>审计类型</p><p>枚举值：</p><ul><li>complex： 精细审计，审计日志更全面，包含对象类型、对象等，开启后对性能有一定影响</li><li>simple： 极速审计，审计日志覆盖绝大多数字段，开启审计后对性能影响较小</li></ul>
 * @method void setAuditType(string $AuditType) 设置<p>审计类型</p><p>枚举值：</p><ul><li>complex： 精细审计，审计日志更全面，包含对象类型、对象等，开启后对性能有一定影响</li><li>simple： 极速审计，审计日志覆盖绝大多数字段，开启审计后对性能影响较小</li></ul>
 * @method string getProduct() 获取<p>产品名称</p><p>入参限制：postgres</p>
 * @method void setProduct(string $Product) 设置<p>产品名称</p><p>入参限制：postgres</p>
 */
class OpenAuditServiceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>日志保存时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>高频存储时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
     */
    public $HotLogExpireDay;

    /**
     * @var string <p>审计类型</p><p>枚举值：</p><ul><li>complex： 精细审计，审计日志更全面，包含对象类型、对象等，开启后对性能有一定影响</li><li>simple： 极速审计，审计日志覆盖绝大多数字段，开启审计后对性能影响较小</li></ul>
     */
    public $AuditType;

    /**
     * @var string <p>产品名称</p><p>入参限制：postgres</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $LogExpireDay <p>日志保存时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
     * @param integer $HotLogExpireDay <p>高频存储时长</p><p>枚举值：</p><ul><li>7： 7天</li><li>30： 30天</li><li>90： 90天</li><li>180： 180天</li><li>365： 365天</li><li>1095： 1095天</li><li>1825： 1825天</li></ul>
     * @param string $AuditType <p>审计类型</p><p>枚举值：</p><ul><li>complex： 精细审计，审计日志更全面，包含对象类型、对象等，开启后对性能有一定影响</li><li>simple： 极速审计，审计日志覆盖绝大多数字段，开启审计后对性能影响较小</li></ul>
     * @param string $Product <p>产品名称</p><p>入参限制：postgres</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }

        if (array_key_exists("AuditType",$param) and $param["AuditType"] !== null) {
            $this->AuditType = $param["AuditType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
