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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method string getBlueprintId() 获取镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
 * @method array getContainers() 获取要创建的容器配置列表。
注意：仅重装的镜像类型为Docker时支持传入该参数。
 * @method void setContainers(array $Containers) 设置要创建的容器配置列表。
注意：仅重装的镜像类型为Docker时支持传入该参数。
 * @method LoginConfiguration getLoginConfiguration() 获取实例登录信息配置。默认缺失情况下代表用户选择实例创建后设置登录密码或绑定密钥。
 * @method void setLoginConfiguration(LoginConfiguration $LoginConfiguration) 设置实例登录信息配置。默认缺失情况下代表用户选择实例创建后设置登录密码或绑定密钥。
 */
class ResetInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceId;

    /**
     * @var string 镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
     */
    public $BlueprintId;

    /**
     * @var array 要创建的容器配置列表。
注意：仅重装的镜像类型为Docker时支持传入该参数。
     */
    public $Containers;

    /**
     * @var LoginConfiguration 实例登录信息配置。默认缺失情况下代表用户选择实例创建后设置登录密码或绑定密钥。
     */
    public $LoginConfiguration;

    /**
     * @param string $InstanceId 实例 ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     * @param string $BlueprintId 镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
     * @param array $Containers 要创建的容器配置列表。
注意：仅重装的镜像类型为Docker时支持传入该参数。
     * @param LoginConfiguration $LoginConfiguration 实例登录信息配置。默认缺失情况下代表用户选择实例创建后设置登录密码或绑定密钥。
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

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new DockerContainerConfiguration();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("LoginConfiguration",$param) and $param["LoginConfiguration"] !== null) {
            $this->LoginConfiguration = new LoginConfiguration();
            $this->LoginConfiguration->deserialize($param["LoginConfiguration"]);
        }
    }
}
