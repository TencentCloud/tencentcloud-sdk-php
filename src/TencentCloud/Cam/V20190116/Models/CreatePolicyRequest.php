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
 * CreatePolicy请求参数结构体
 *
 * @method string getPolicyName() 获取策略名称。长度为1~128个字符，可包含英文字母、数字和+=,.@-_。
 * @method void setPolicyName(string $PolicyName) 设置策略名称。长度为1~128个字符，可包含英文字母、数字和+=,.@-_。
 * @method string getPolicyDocument() 获取策略文档
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method array getTags() 获取策略关联的标签列表
 * @method void setTags(array $Tags) 设置策略关联的标签列表
 */
class CreatePolicyRequest extends AbstractModel
{
    /**
     * @var string 策略名称。长度为1~128个字符，可包含英文字母、数字和+=,.@-_。
     */
    public $PolicyName;

    /**
     * @var string 策略文档
     */
    public $PolicyDocument;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var array 策略关联的标签列表
     */
    public $Tags;

    /**
     * @param string $PolicyName 策略名称。长度为1~128个字符，可包含英文字母、数字和+=,.@-_。
     * @param string $PolicyDocument 策略文档
     * @param string $Description 策略描述
     * @param array $Tags 策略关联的标签列表
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
