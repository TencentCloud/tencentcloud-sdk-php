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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEvents请求参数结构体
 *
 * @method string getEventDate() 获取事件的发生日期
 * @method void setEventDate(string $EventDate) 设置事件的发生日期
 * @method array getProductIds() 获取1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
 * @method void setProductIds(array $ProductIds) 设置1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
 * @method array getRegionIds() 获取1. 不指定地域列表时将查询所有地域。
2. 查询非区域性产品事件时，地域ID指定为：non-regional
3. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
 * @method void setRegionIds(array $RegionIds) 设置1. 不指定地域列表时将查询所有地域。
2. 查询非区域性产品事件时，地域ID指定为：non-regional
3. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
 */
class DescribeEventsRequest extends AbstractModel
{
    /**
     * @var string 事件的发生日期
     */
    public $EventDate;

    /**
     * @var array 1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
     */
    public $ProductIds;

    /**
     * @var array 1. 不指定地域列表时将查询所有地域。
2. 查询非区域性产品事件时，地域ID指定为：non-regional
3. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
     */
    public $RegionIds;

    /**
     * @param string $EventDate 事件的发生日期
     * @param array $ProductIds 1. 不指定产品列表时将查询所有产品。
2. 产品ID示例：cvm、lb、cdb、cdn、crs
     * @param array $RegionIds 1. 不指定地域列表时将查询所有地域。
2. 查询非区域性产品事件时，地域ID指定为：non-regional
3. 其他地域ID取值请参考：https://cloud.tencent.com/document/api/213/15692
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
        if (array_key_exists("EventDate",$param) and $param["EventDate"] !== null) {
            $this->EventDate = $param["EventDate"];
        }

        if (array_key_exists("ProductIds",$param) and $param["ProductIds"] !== null) {
            $this->ProductIds = $param["ProductIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }
    }
}
