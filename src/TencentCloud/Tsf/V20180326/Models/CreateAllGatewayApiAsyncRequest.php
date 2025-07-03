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
 * CreateAllGatewayApiAsync请求参数结构体
 *
 * @method string getGroupId() 获取API分组ID
 * @method void setGroupId(string $GroupId) 设置API分组ID
 * @method string getMicroserviceId() 获取微服务ID
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 */
class CreateAllGatewayApiAsyncRequest extends AbstractModel
{
    /**
     * @var string API分组ID
     */
    public $GroupId;

    /**
     * @var string 微服务ID
     */
    public $MicroserviceId;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @param string $GroupId API分组ID
     * @param string $MicroserviceId 微服务ID
     * @param string $NamespaceId 命名空间ID
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }
    }
}
