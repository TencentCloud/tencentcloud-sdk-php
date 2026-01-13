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
 * CreateIVRSession请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getCallee() 获取被叫
 * @method void setCallee(string $Callee) 设置被叫
 * @method integer getIVRId() 获取指定的 IVR Id，目前支持呼入和自动外呼两种类型
 * @method void setIVRId(integer $IVRId) 设置指定的 IVR Id，目前支持呼入和自动外呼两种类型
 * @method array getCallers() 获取主叫号码列表
 * @method void setCallers(array $Callers) 设置主叫号码列表
 * @method array getVariables() 获取自定义变量
 * @method void setVariables(array $Variables) 设置自定义变量
 * @method string getUUI() 获取用户数据
 * @method void setUUI(string $UUI) 设置用户数据
 * @method integer getMaxRingTimeoutSecond() 获取最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) 设置最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
 */
class CreateIVRSessionRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 被叫
     */
    public $Callee;

    /**
     * @var integer 指定的 IVR Id，目前支持呼入和自动外呼两种类型
     */
    public $IVRId;

    /**
     * @var array 主叫号码列表
     */
    public $Callers;

    /**
     * @var array 自定义变量
     */
    public $Variables;

    /**
     * @var string 用户数据
     */
    public $UUI;

    /**
     * @var integer 最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
     */
    public $MaxRingTimeoutSecond;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Callee 被叫
     * @param integer $IVRId 指定的 IVR Id，目前支持呼入和自动外呼两种类型
     * @param array $Callers 主叫号码列表
     * @param array $Variables 自定义变量
     * @param string $UUI 用户数据
     * @param integer $MaxRingTimeoutSecond 最大振铃时长，达到时长阈值自动挂断。 仅自携号码支持当前参数
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

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("IVRId",$param) and $param["IVRId"] !== null) {
            $this->IVRId = $param["IVRId"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }
    }
}
