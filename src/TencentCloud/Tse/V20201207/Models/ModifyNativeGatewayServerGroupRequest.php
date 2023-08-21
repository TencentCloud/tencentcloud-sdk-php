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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNativeGatewayServerGroup请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getGroupId() 获取网关分组 id
 * @method void setGroupId(string $GroupId) 设置网关分组 id
 * @method string getName() 获取云原生API网关名字, 最多支持60个字符。
 * @method void setName(string $Name) 设置云原生API网关名字, 最多支持60个字符。
 * @method string getDescription() 获取云原生API网关描述信息, 最多支持120个字符。
 * @method void setDescription(string $Description) 设置云原生API网关描述信息, 最多支持120个字符。
 */
class ModifyNativeGatewayServerGroupRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 网关分组 id
     */
    public $GroupId;

    /**
     * @var string 云原生API网关名字, 最多支持60个字符。
     */
    public $Name;

    /**
     * @var string 云原生API网关描述信息, 最多支持120个字符。
     */
    public $Description;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $GroupId 网关分组 id
     * @param string $Name 云原生API网关名字, 最多支持60个字符。
     * @param string $Description 云原生API网关描述信息, 最多支持120个字符。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
