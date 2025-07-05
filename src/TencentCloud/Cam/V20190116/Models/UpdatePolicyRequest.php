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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取策略ID，与PolicyName二选一必填
 * @method void setPolicyId(integer $PolicyId) 设置策略ID，与PolicyName二选一必填
 * @method string getPolicyName() 获取策略名，与PolicyId二选一必填
 * @method void setPolicyName(string $PolicyName) 设置策略名，与PolicyId二选一必填
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method string getPolicyDocument() 获取策略文档
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档
 * @method string getAlias() 获取预设策略备注
 * @method void setAlias(string $Alias) 设置预设策略备注
 */
class UpdatePolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略ID，与PolicyName二选一必填
     */
    public $PolicyId;

    /**
     * @var string 策略名，与PolicyId二选一必填
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
     * @var string 预设策略备注
     */
    public $Alias;

    /**
     * @param integer $PolicyId 策略ID，与PolicyName二选一必填
     * @param string $PolicyName 策略名，与PolicyId二选一必填
     * @param string $Description 策略描述
     * @param string $PolicyDocument 策略文档
     * @param string $Alias 预设策略备注
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
