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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePackageItems请求参数结构体
 *
 * @method string getOrderId() 获取订单id
 * @method void setOrderId(string $OrderId) 设置订单id
 * @method integer getOffset() 获取默认0
 * @method void setOffset(integer $Offset) 设置默认0
 * @method integer getLength() 获取默认20
 * @method void setLength(integer $Length) 设置默认20
 */
class DescribePackageItemsRequest extends AbstractModel
{
    /**
     * @var string 订单id
     */
    public $OrderId;

    /**
     * @var integer 默认0
     */
    public $Offset;

    /**
     * @var integer 默认20
     */
    public $Length;

    /**
     * @param string $OrderId 订单id
     * @param integer $Offset 默认0
     * @param integer $Length 默认20
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }
    }
}
