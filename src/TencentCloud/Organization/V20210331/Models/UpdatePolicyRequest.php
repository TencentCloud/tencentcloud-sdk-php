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
 * UpdatePolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取需要编辑的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取
 * @method void setPolicyId(integer $PolicyId) 设置需要编辑的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取
 * @method string getDescription() 获取策略描述。
 * @method void setDescription(string $Description) 设置策略描述。
 * @method string getContent() 获取策略内容。参考CAM策略语法
 * @method void setContent(string $Content) 设置策略内容。参考CAM策略语法
 * @method string getName() 获取策略名。长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）
 * @method void setName(string $Name) 设置策略名。长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）
 * @method string getType() 获取策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 * @method void setType(string $Type) 设置策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 */
class UpdatePolicyRequest extends AbstractModel
{
    /**
     * @var integer 需要编辑的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取
     */
    public $PolicyId;

    /**
     * @var string 策略描述。
     */
    public $Description;

    /**
     * @var string 策略内容。参考CAM策略语法
     */
    public $Content;

    /**
     * @var string 策略名。长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）
     */
    public $Name;

    /**
     * @var string 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
     */
    public $Type;

    /**
     * @param integer $PolicyId 需要编辑的策略ID。可以调用[ListPolicies](https://cloud.tencent.com/document/product/850/105311)获取
     * @param string $Description 策略描述。
     * @param string $Content 策略内容。参考CAM策略语法
     * @param string $Name 策略名。长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）
     * @param string $Type 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
