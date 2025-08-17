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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications请求参数结构体
 *
 * @method string getSearchWord() 获取搜索字段
 * @method void setSearchWord(string $SearchWord) 设置搜索字段
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method integer getOrderType() 获取指定排序类型，目前支持：
`0`：降序
`1`：升序
 * @method void setOrderType(integer $OrderType) 设置指定排序类型，目前支持：
`0`：降序
`1`：升序
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method integer getLimit() 获取数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method void setLimit(integer $Limit) 设置数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
 * @method string getApplicationType() 获取指定应用类型，目前支持：
- `V`：普通应用/CVM应用
- `C`：容器应用
- `S`：serverless 应用
 * @method void setApplicationType(string $ApplicationType) 设置指定应用类型，目前支持：
- `V`：普通应用/CVM应用
- `C`：容器应用
- `S`：serverless 应用
 * @method string getMicroserviceType() 获取应用的微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用的微服务类型
 * @method array getApplicationResourceTypeList() 获取应用资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
 * @method void setApplicationResourceTypeList(array $ApplicationResourceTypeList) 设置应用资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
 * @method array getApplicationIdList() 获取IdList
 * @method void setApplicationIdList(array $ApplicationIdList) 设置IdList
 * @method array getMicroserviceTypeList() 获取查询多种微服务类型的应用
 * @method void setMicroserviceTypeList(array $MicroserviceTypeList) 设置查询多种微服务类型的应用
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string 搜索字段
     */
    public $SearchWord;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var integer 指定排序类型，目前支持：
`0`：降序
`1`：升序
     */
    public $OrderType;

    /**
     * @var integer 偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     */
    public $Offset;

    /**
     * @var integer 数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     */
    public $Limit;

    /**
     * @var string 指定应用类型，目前支持：
- `V`：普通应用/CVM应用
- `C`：容器应用
- `S`：serverless 应用
     */
    public $ApplicationType;

    /**
     * @var string 应用的微服务类型
     */
    public $MicroserviceType;

    /**
     * @var array 应用资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
     */
    public $ApplicationResourceTypeList;

    /**
     * @var array IdList
     */
    public $ApplicationIdList;

    /**
     * @var array 查询多种微服务类型的应用
     */
    public $MicroserviceTypeList;

    /**
     * @param string $SearchWord 搜索字段
     * @param string $OrderBy 排序字段
     * @param integer $OrderType 指定排序类型，目前支持：
`0`：降序
`1`：升序
     * @param integer $Offset 偏移量，默认为0。关于Offset详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     * @param integer $Limit 数量限制，默认为20，最大值为100。关于Limit详见[API简介](https://cloud.tencent.com/document/api/213/568#.E8.BE.93.E5.85.A5.E5.8F.82.E6.95.B0.E4.B8.8E.E8.BF.94.E5.9B.9E.E5.8F.82.E6.95.B0.E9.87.8A.E4.B9.89)
     * @param string $ApplicationType 指定应用类型，目前支持：
- `V`：普通应用/CVM应用
- `C`：容器应用
- `S`：serverless 应用
     * @param string $MicroserviceType 应用的微服务类型
     * @param array $ApplicationResourceTypeList 应用资源类型列表；DEF 表示默认资源类型；GW 表示网关资源类型
     * @param array $ApplicationIdList IdList
     * @param array $MicroserviceTypeList 查询多种微服务类型的应用
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationResourceTypeList",$param) and $param["ApplicationResourceTypeList"] !== null) {
            $this->ApplicationResourceTypeList = $param["ApplicationResourceTypeList"];
        }

        if (array_key_exists("ApplicationIdList",$param) and $param["ApplicationIdList"] !== null) {
            $this->ApplicationIdList = $param["ApplicationIdList"];
        }

        if (array_key_exists("MicroserviceTypeList",$param) and $param["MicroserviceTypeList"] !== null) {
            $this->MicroserviceTypeList = $param["MicroserviceTypeList"];
        }
    }
}
