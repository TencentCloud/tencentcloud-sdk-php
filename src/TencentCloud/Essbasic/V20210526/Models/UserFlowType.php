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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户合同类型信息
 *
 * @method string getUserFlowTypeId() 获取用户合同类型id
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置用户合同类型id
 * @method string getName() 获取用户合同类型名称
 * @method void setName(string $Name) 设置用户合同类型名称
 * @method string getDescription() 获取用户合同类型的描述信息
 * @method void setDescription(string $Description) 设置用户合同类型的描述信息
 */
class UserFlowType extends AbstractModel
{
    /**
     * @var string 用户合同类型id
     */
    public $UserFlowTypeId;

    /**
     * @var string 用户合同类型名称
     */
    public $Name;

    /**
     * @var string 用户合同类型的描述信息
     */
    public $Description;

    /**
     * @param string $UserFlowTypeId 用户合同类型id
     * @param string $Name 用户合同类型名称
     * @param string $Description 用户合同类型的描述信息
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
        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
