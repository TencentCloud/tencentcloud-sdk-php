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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterIssuer请求参数结构体
 *
 * @method string getDid() 获取tdid
 * @method void setDid(string $Did) 设置tdid
 * @method string getName() 获取权威机构名称
 * @method void setName(string $Name) 设置权威机构名称
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class RegisterIssuerRequest extends AbstractModel
{
    /**
     * @var string tdid
     */
    public $Did;

    /**
     * @var string 权威机构名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $Did tdid
     * @param string $Name 权威机构名称
     * @param string $Description 备注
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
