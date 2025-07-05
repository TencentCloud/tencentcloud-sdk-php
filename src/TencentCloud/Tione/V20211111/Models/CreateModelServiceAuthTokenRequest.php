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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateModelServiceAuthToken请求参数结构体
 *
 * @method string getServiceGroupId() 获取服务组 id
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组 id
 * @method string getName() 获取token 名称
 * @method void setName(string $Name) 设置token 名称
 * @method string getDescription() 获取Description 描述
 * @method void setDescription(string $Description) 设置Description 描述
 */
class CreateModelServiceAuthTokenRequest extends AbstractModel
{
    /**
     * @var string 服务组 id
     */
    public $ServiceGroupId;

    /**
     * @var string token 名称
     */
    public $Name;

    /**
     * @var string Description 描述
     */
    public $Description;

    /**
     * @param string $ServiceGroupId 服务组 id
     * @param string $Name token 名称
     * @param string $Description Description 描述
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
