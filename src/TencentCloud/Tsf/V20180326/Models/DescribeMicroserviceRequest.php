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
 * DescribeMicroservice请求参数结构体
 *
 * @method string getMicroserviceId() 获取微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为50。
 * @method array getGroupIds() 获取部署组ID。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method void setGroupIds(array $GroupIds) 设置部署组ID。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method array getFilters() 获取过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"LanIp","Values":["172.16.16.139"]}]
filter name 取值范围：
- id：实例ID
- name：实例名
- lan-ip：内网IP
- node-ip：所在节点IP
 * @method void setFilters(array $Filters) 设置过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"LanIp","Values":["172.16.16.139"]}]
filter name 取值范围：
- id：实例ID
- name：实例名
- lan-ip：内网IP
- node-ip：所在节点IP
 */
class DescribeMicroserviceRequest extends AbstractModel
{
    /**
     * @var string 微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     */
    public $MicroserviceId;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为50。
     */
    public $Limit;

    /**
     * @var array 部署组ID。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     */
    public $GroupIds;

    /**
     * @var array 过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"LanIp","Values":["172.16.16.139"]}]
filter name 取值范围：
- id：实例ID
- name：实例名
- lan-ip：内网IP
- node-ip：所在节点IP
     */
    public $Filters;

    /**
     * @param string $MicroserviceId 微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为50。
     * @param array $GroupIds 部署组ID。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     * @param array $Filters 过滤条件。多个 filter 之间是与关系，单个 filter 多个 value 之间是或关系。
参考：[{"Name":"LanIp","Values":["172.16.16.139"]}]
filter name 取值范围：
- id：实例ID
- name：实例名
- lan-ip：内网IP
- node-ip：所在节点IP
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
