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
 * DescribePkgOfflineMusic请求参数结构体
 *
 * @method string getPackageOrderId() 获取订单id
 * @method void setPackageOrderId(string $PackageOrderId) 设置订单id
 * @method integer getLimit() 获取分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条(注：单次上限为100)。
 * @method void setLimit(integer $Limit) 设置分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条(注：单次上限为100)。
 * @method integer getOffset() 获取分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setOffset(integer $Offset) 设置分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 */
class DescribePkgOfflineMusicRequest extends AbstractModel
{
    /**
     * @var string 订单id
     */
    public $PackageOrderId;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条(注：单次上限为100)。
     */
    public $Limit;

    /**
     * @var integer 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Offset;

    /**
     * @param string $PackageOrderId 订单id
     * @param integer $Limit 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条(注：单次上限为100)。
     * @param integer $Offset 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
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
        if (array_key_exists("PackageOrderId",$param) and $param["PackageOrderId"] !== null) {
            $this->PackageOrderId = $param["PackageOrderId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
