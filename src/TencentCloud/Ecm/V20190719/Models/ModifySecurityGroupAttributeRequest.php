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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityGroupAttribute请求参数结构体
 *
 * @method string getSecurityGroupId() 获取安全组实例ID，例如esg-33ocnj9n，可通过DescribeSecurityGroups获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如esg-33ocnj9n，可通过DescribeSecurityGroups获取。
 * @method string getGroupName() 获取安全组名称，可任意命名，但不得超过60个字符。
 * @method void setGroupName(string $GroupName) 设置安全组名称，可任意命名，但不得超过60个字符。
 * @method string getGroupDescription() 获取安全组备注，最多100个字符。
 * @method void setGroupDescription(string $GroupDescription) 设置安全组备注，最多100个字符。
 */
class ModifySecurityGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 安全组实例ID，例如esg-33ocnj9n，可通过DescribeSecurityGroups获取。
     */
    public $SecurityGroupId;

    /**
     * @var string 安全组名称，可任意命名，但不得超过60个字符。
     */
    public $GroupName;

    /**
     * @var string 安全组备注，最多100个字符。
     */
    public $GroupDescription;

    /**
     * @param string $SecurityGroupId 安全组实例ID，例如esg-33ocnj9n，可通过DescribeSecurityGroups获取。
     * @param string $GroupName 安全组名称，可任意命名，但不得超过60个字符。
     * @param string $GroupDescription 安全组备注，最多100个字符。
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }
    }
}
