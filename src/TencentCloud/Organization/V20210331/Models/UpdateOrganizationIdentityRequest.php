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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateOrganizationIdentity请求参数结构体
 *
 * @method integer getIdentityId() 获取身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 * @method void setIdentityId(integer $IdentityId) 设置身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
 * @method string getDescription() 获取身份描述。
 * @method void setDescription(string $Description) 设置身份描述。
 * @method array getIdentityPolicy() 获取身份策略。
 * @method void setIdentityPolicy(array $IdentityPolicy) 设置身份策略。
 */
class UpdateOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var integer 身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
     */
    public $IdentityId;

    /**
     * @var string 身份描述。
     */
    public $Description;

    /**
     * @var array 身份策略。
     */
    public $IdentityPolicy;

    /**
     * @param integer $IdentityId 身份ID。可以通过[ListOrganizationIdentity](https://cloud.tencent.com/document/product/850/82934)获取
     * @param string $Description 身份描述。
     * @param array $IdentityPolicy 身份策略。
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IdentityPolicy",$param) and $param["IdentityPolicy"] !== null) {
            $this->IdentityPolicy = [];
            foreach ($param["IdentityPolicy"] as $key => $value){
                $obj = new IdentityPolicy();
                $obj->deserialize($value);
                array_push($this->IdentityPolicy, $obj);
            }
        }
    }
}
