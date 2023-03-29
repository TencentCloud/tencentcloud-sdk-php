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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationCallbackInfo请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method integer getOperateType() 获取操作类型：1-新增，2-删除
 * @method void setOperateType(integer $OperateType) 设置操作类型：1-新增，2-删除
 * @method CallbackInfo getCallbackInfo() 获取回调信息
 * @method void setCallbackInfo(CallbackInfo $CallbackInfo) 设置回调信息
 */
class ModifyApplicationCallbackInfoRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var integer 操作类型：1-新增，2-删除
     */
    public $OperateType;

    /**
     * @var CallbackInfo 回调信息
     */
    public $CallbackInfo;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param integer $OperateType 操作类型：1-新增，2-删除
     * @param CallbackInfo $CallbackInfo 回调信息
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("CallbackInfo",$param) and $param["CallbackInfo"] !== null) {
            $this->CallbackInfo = new CallbackInfo();
            $this->CallbackInfo->deserialize($param["CallbackInfo"]);
        }
    }
}
