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
 * DescribeMicroservices请求参数结构体
 *
 * @method string getNamespaceId() 获取命名空间ID。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method string getSearchWord() 获取搜索字段。
 * @method void setSearchWord(string $SearchWord) 设置搜索字段。
 * @method string getOrderBy() 获取排序字段。
- create_time：创建时间
默认为创建时间，暂不支持其他值。
 * @method void setOrderBy(string $OrderBy) 设置排序字段。
- create_time：创建时间
默认为创建时间，暂不支持其他值。
 * @method integer getOrderType() 获取排序类型。
- 1：倒序
默认为倒序，暂不支持其他值。
 * @method void setOrderType(integer $OrderType) 设置排序类型。
- 1：倒序
默认为倒序，暂不支持其他值。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为50。
 * @method array getStatus() 获取状态。
- online：在线
- offline：离线
- single_online：单点在线
 * @method void setStatus(array $Status) 设置状态。
- online：在线
- offline：离线
- single_online：单点在线
 * @method array getMicroserviceIdList() 获取微服务ID列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method void setMicroserviceIdList(array $MicroserviceIdList) 设置微服务ID列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method array getMicroserviceNameList() 获取微服务名称列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceName 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method void setMicroserviceNameList(array $MicroserviceNameList) 设置微服务名称列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceName 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method string getConfigCenterInstanceId() 获取注册中心实例ID。业务预留参数，忽略传参。
 * @method void setConfigCenterInstanceId(string $ConfigCenterInstanceId) 设置注册中心实例ID。业务预留参数，忽略传参。
 */
class DescribeMicroservicesRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     */
    public $NamespaceId;

    /**
     * @var string 搜索字段。
     */
    public $SearchWord;

    /**
     * @var string 排序字段。
- create_time：创建时间
默认为创建时间，暂不支持其他值。
     */
    public $OrderBy;

    /**
     * @var integer 排序类型。
- 1：倒序
默认为倒序，暂不支持其他值。
     */
    public $OrderType;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为50。
     */
    public $Limit;

    /**
     * @var array 状态。
- online：在线
- offline：离线
- single_online：单点在线
     */
    public $Status;

    /**
     * @var array 微服务ID列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     */
    public $MicroserviceIdList;

    /**
     * @var array 微服务名称列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceName 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     */
    public $MicroserviceNameList;

    /**
     * @var string 注册中心实例ID。业务预留参数，忽略传参。
     */
    public $ConfigCenterInstanceId;

    /**
     * @param string $NamespaceId 命名空间ID。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     * @param string $SearchWord 搜索字段。
     * @param string $OrderBy 排序字段。
- create_time：创建时间
默认为创建时间，暂不支持其他值。
     * @param integer $OrderType 排序类型。
- 1：倒序
默认为倒序，暂不支持其他值。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为50。
     * @param array $Status 状态。
- online：在线
- offline：离线
- single_online：单点在线
     * @param array $MicroserviceIdList 微服务ID列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     * @param array $MicroserviceNameList 微服务名称列表。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceName 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     * @param string $ConfigCenterInstanceId 注册中心实例ID。业务预留参数，忽略传参。
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MicroserviceIdList",$param) and $param["MicroserviceIdList"] !== null) {
            $this->MicroserviceIdList = $param["MicroserviceIdList"];
        }

        if (array_key_exists("MicroserviceNameList",$param) and $param["MicroserviceNameList"] !== null) {
            $this->MicroserviceNameList = $param["MicroserviceNameList"];
        }

        if (array_key_exists("ConfigCenterInstanceId",$param) and $param["ConfigCenterInstanceId"] !== null) {
            $this->ConfigCenterInstanceId = $param["ConfigCenterInstanceId"];
        }
    }
}
