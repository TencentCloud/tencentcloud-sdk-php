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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrganizationIdentity请求参数结构体
 *
 * @method string getIdentityAliasName() 获取身份名称
 * @method void setIdentityAliasName(string $IdentityAliasName) 设置身份名称
 * @method array getIdentityPolicy() 获取身份策略
 * @method void setIdentityPolicy(array $IdentityPolicy) 设置身份策略
 * @method string getDescription() 获取身份描述
 * @method void setDescription(string $Description) 设置身份描述
 */
class CreateOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var string 身份名称
     */
    public $IdentityAliasName;

    /**
     * @var array 身份策略
     */
    public $IdentityPolicy;

    /**
     * @var string 身份描述
     */
    public $Description;

    /**
     * @param string $IdentityAliasName 身份名称
     * @param array $IdentityPolicy 身份策略
     * @param string $Description 身份描述
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
        if (array_key_exists("IdentityAliasName",$param) and $param["IdentityAliasName"] !== null) {
            $this->IdentityAliasName = $param["IdentityAliasName"];
        }

        if (array_key_exists("IdentityPolicy",$param) and $param["IdentityPolicy"] !== null) {
            $this->IdentityPolicy = [];
            foreach ($param["IdentityPolicy"] as $key => $value){
                $obj = new IdentityPolicy();
                $obj->deserialize($value);
                array_push($this->IdentityPolicy, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
