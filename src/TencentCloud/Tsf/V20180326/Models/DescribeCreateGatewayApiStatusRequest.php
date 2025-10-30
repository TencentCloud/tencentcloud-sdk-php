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
 * DescribeCreateGatewayApiStatus请求参数结构体
 *
 * @method string getGroupId() 获取网关分组ID。该参数可以通过调用 [DescribeApiGroups](https://cloud.tencent.com/document/product/649/50636) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app?tab=middleware&subTab=app)-网关应用详情-Java网关实例-实例详情-分组管理页查看；也可以调用[CreateApiGroup](https://cloud.tencent.com/document/product/649/50641)创建新的网关分组。
 * @method void setGroupId(string $GroupId) 设置网关分组ID。该参数可以通过调用 [DescribeApiGroups](https://cloud.tencent.com/document/product/649/50636) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app?tab=middleware&subTab=app)-网关应用详情-Java网关实例-实例详情-分组管理页查看；也可以调用[CreateApiGroup](https://cloud.tencent.com/document/product/649/50641)创建新的网关分组。
 * @method string getMicroserviceId() 获取微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
 */
class DescribeCreateGatewayApiStatusRequest extends AbstractModel
{
    /**
     * @var string 网关分组ID。该参数可以通过调用 [DescribeApiGroups](https://cloud.tencent.com/document/product/649/50636) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app?tab=middleware&subTab=app)-网关应用详情-Java网关实例-实例详情-分组管理页查看；也可以调用[CreateApiGroup](https://cloud.tencent.com/document/product/649/50641)创建新的网关分组。
     */
    public $GroupId;

    /**
     * @var string 微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
     */
    public $MicroserviceId;

    /**
     * @param string $GroupId 网关分组ID。该参数可以通过调用 [DescribeApiGroups](https://cloud.tencent.com/document/product/649/50636) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app?tab=middleware&subTab=app)-网关应用详情-Java网关实例-实例详情-分组管理页查看；也可以调用[CreateApiGroup](https://cloud.tencent.com/document/product/649/50641)创建新的网关分组。
     * @param string $MicroserviceId 微服务ID。该参数可以通过调用 [DescribeMicroservices](https://cloud.tencent.com/document/product/649/36084) 的返回值中的 MicroserviceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=service)查看；也可以调用[CreateMicroserviceWithDetailResp](https://cloud.tencent.com/document/product/649/85860)创建新的微服务。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }
    }
}
