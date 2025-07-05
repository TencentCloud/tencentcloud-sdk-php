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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAESDataSample请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getFieldResultId() 获取字段扫描结果ID
 * @method void setFieldResultId(integer $FieldResultId) 设置字段扫描结果ID
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getOrderField() 获取排序字段
 * @method void setOrderField(string $OrderField) 设置排序字段
 */
class DescribeDSPAESDataSampleRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 字段扫描结果ID
     */
    public $FieldResultId;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 排序字段
     */
    public $OrderField;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $FieldResultId 字段扫描结果ID
     * @param string $Order 排序方式
     * @param string $OrderField 排序字段
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("FieldResultId",$param) and $param["FieldResultId"] !== null) {
            $this->FieldResultId = $param["FieldResultId"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
