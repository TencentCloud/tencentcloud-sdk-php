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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityPolicies请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getCidrBlock() 获取192.168.0.0/24
 * @method void setCidrBlock(string $CidrBlock) 设置192.168.0.0/24
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class CreateSecurityPoliciesRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string 192.168.0.0/24
     */
    public $CidrBlock;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $RegistryId 实例Id
     * @param string $CidrBlock 192.168.0.0/24
     * @param string $Description 描述
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
