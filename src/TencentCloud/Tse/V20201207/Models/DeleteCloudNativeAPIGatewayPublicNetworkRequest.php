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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudNativeAPIGatewayPublicNetwork请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getGroupId() 获取分组id，kong类型时必填
 * @method void setGroupId(string $GroupId) 设置分组id，kong类型时必填
 * @method string getInternetAddressVersion() 获取公网类型
- IPV4 （默认值）
- IPV6
 * @method void setInternetAddressVersion(string $InternetAddressVersion) 设置公网类型
- IPV4 （默认值）
- IPV6
 * @method string getVip() 获取公网ip，存在多个公网时必填
 * @method void setVip(string $Vip) 设置公网ip，存在多个公网时必填
 */
class DeleteCloudNativeAPIGatewayPublicNetworkRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 分组id，kong类型时必填
     */
    public $GroupId;

    /**
     * @var string 公网类型
- IPV4 （默认值）
- IPV6
     */
    public $InternetAddressVersion;

    /**
     * @var string 公网ip，存在多个公网时必填
     */
    public $Vip;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $GroupId 分组id，kong类型时必填
     * @param string $InternetAddressVersion 公网类型
- IPV4 （默认值）
- IPV6
     * @param string $Vip 公网ip，存在多个公网时必填
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("InternetAddressVersion",$param) and $param["InternetAddressVersion"] !== null) {
            $this->InternetAddressVersion = $param["InternetAddressVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
