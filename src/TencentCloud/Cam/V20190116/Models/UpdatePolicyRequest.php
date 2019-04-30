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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPolicyId() 获取策略 id
 * @method void setPolicyId(integer $PolicyId) 设置策略 id
 * @method string getPolicyName() 获取策略名
 * @method void setPolicyName(string $PolicyName) 设置策略名
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method string getPolicyDocument() 获取策略文档
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档
 */

/**
 *UpdatePolicy请求参数结构体
 */
class UpdatePolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略 id
     */
    public $PolicyId;

    /**
     * @var string 策略名
     */
    public $PolicyName;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var string 策略文档
     */
    public $PolicyDocument;
    /**
     * @param integer $PolicyId 策略 id
     * @param string $PolicyName 策略名
     * @param string $Description 策略描述
     * @param string $PolicyDocument 策略文档
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }
    }
}
