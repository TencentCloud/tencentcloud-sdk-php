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
 * AttachPolicy请求参数结构体
 *
 * @method integer getTargetId() 获取绑定策略目标ID。成员Uin或部门ID
 * @method void setTargetId(integer $TargetId) 设置绑定策略目标ID。成员Uin或部门ID
 * @method string getTargetType() 获取目标类型。取值范围：NODE-部门、MEMBER-成员
 * @method void setTargetType(string $TargetType) 设置目标类型。取值范围：NODE-部门、MEMBER-成员
 * @method integer getPolicyId() 获取策略ID。
 * @method void setPolicyId(integer $PolicyId) 设置策略ID。
 * @method string getType() 获取策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 * @method void setType(string $Type) 设置策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
 */
class AttachPolicyRequest extends AbstractModel
{
    /**
     * @var integer 绑定策略目标ID。成员Uin或部门ID
     */
    public $TargetId;

    /**
     * @var string 目标类型。取值范围：NODE-部门、MEMBER-成员
     */
    public $TargetType;

    /**
     * @var integer 策略ID。
     */
    public $PolicyId;

    /**
     * @var string 策略类型。默认值SERVICE_CONTROL_POLICY，取值范围：SERVICE_CONTROL_POLICY-服务控制策略、TAG_POLICY-标签策略
     */
    public $Type;

    /**
     * @param integer $TargetId 绑定策略目标ID。成员Uin或部门ID
     * @param string $TargetType 目标类型。取值范围：NODE-部门、MEMBER-成员
     * @param integer $PolicyId 策略ID。
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
