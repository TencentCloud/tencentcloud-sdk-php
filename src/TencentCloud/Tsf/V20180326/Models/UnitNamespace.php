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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务网关单元化命名空间
 *
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间Name
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间Name
 * @method string getId() 获取单元化命名空间ID
 * @method void setId(string $Id) 设置单元化命名空间ID
 * @method string getGatewayInstanceId() 获取网关实体ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 */
class UnitNamespace extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间Name
     */
    public $NamespaceName;

    /**
     * @var string 单元化命名空间ID
     */
    public $Id;

    /**
     * @var string 网关实体ID
     */
    public $GatewayInstanceId;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间Name
     * @param string $Id 单元化命名空间ID
     * @param string $GatewayInstanceId 网关实体ID
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 更新时间
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

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
