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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库详情
 *
 * @method string getName() 获取仓库名称
 * @method void setName(string $Name) 设置仓库名称
 * @method string getType() 获取仓库类型
aws
ccr
harbor
jfrog
other-tcr
quay
tcr
 * @method void setType(string $Type) 设置仓库类型
aws
ccr
harbor
jfrog
other-tcr
quay
tcr
 * @method string getAddress() 获取仓库地址
 * @method void setAddress(string $Address) 设置仓库地址
 */
class ImageRegistryInfo extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $Name;

    /**
     * @var string 仓库类型
aws
ccr
harbor
jfrog
other-tcr
quay
tcr
     */
    public $Type;

    /**
     * @var string 仓库地址
     */
    public $Address;

    /**
     * @param string $Name 仓库名称
     * @param string $Type 仓库类型
aws
ccr
harbor
jfrog
other-tcr
quay
tcr
     * @param string $Address 仓库地址
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
