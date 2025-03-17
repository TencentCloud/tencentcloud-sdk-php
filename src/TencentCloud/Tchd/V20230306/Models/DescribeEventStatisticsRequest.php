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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventStatistics请求参数结构体
 *
 * @method string getRegionId() 获取1. 查询非区域性产品事件时，地域ID指定为：non-regional
2. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
 * @method void setRegionId(string $RegionId) 设置1. 查询非区域性产品事件时，地域ID指定为：non-regional
2. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
 * @method array getProductIds() 获取1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
 * @method void setProductIds(array $ProductIds) 设置1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
 */
class DescribeEventStatisticsRequest extends AbstractModel
{
    /**
     * @var string 1. 查询非区域性产品事件时，地域ID指定为：non-regional
2. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
     */
    public $RegionId;

    /**
     * @var array 1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
     */
    public $ProductIds;

    /**
     * @param string $RegionId 1. 查询非区域性产品事件时，地域ID指定为：non-regional
2. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
     * @param array $ProductIds 1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProductIds",$param) and $param["ProductIds"] !== null) {
            $this->ProductIds = $param["ProductIds"];
        }
    }
}
