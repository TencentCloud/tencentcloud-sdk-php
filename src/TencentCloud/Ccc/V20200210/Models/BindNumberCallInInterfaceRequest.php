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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindNumberCallInInterface请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getNumber() 获取待绑定的号码
 * @method void setNumber(string $Number) 设置待绑定的号码
 * @method Interface getCallInInterface() 获取待绑定的回调地址
 * @method void setCallInInterface(Interface $CallInInterface) 设置待绑定的回调地址
 * @method string getNumberType() 获取绑定号码类型: inner: 内线号码 | number: 正常线路号码
 * @method void setNumberType(string $NumberType) 设置绑定号码类型: inner: 内线号码 | number: 正常线路号码
 */
class BindNumberCallInInterfaceRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 待绑定的号码
     */
    public $Number;

    /**
     * @var Interface 待绑定的回调地址
     */
    public $CallInInterface;

    /**
     * @var string 绑定号码类型: inner: 内线号码 | number: 正常线路号码
     */
    public $NumberType;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Number 待绑定的号码
     * @param Interface $CallInInterface 待绑定的回调地址
     * @param string $NumberType 绑定号码类型: inner: 内线号码 | number: 正常线路号码
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("CallInInterface",$param) and $param["CallInInterface"] !== null) {
            $this->CallInInterface = new Interface();
            $this->CallInInterface->deserialize($param["CallInInterface"]);
        }

        if (array_key_exists("NumberType",$param) and $param["NumberType"] !== null) {
            $this->NumberType = $param["NumberType"];
        }
    }
}
