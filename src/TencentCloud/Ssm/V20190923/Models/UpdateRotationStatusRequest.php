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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRotationStatus请求参数结构体
 *
 * @method string getSecretName() 获取云产品凭据名称。
 * @method void setSecretName(string $SecretName) 设置云产品凭据名称。
 * @method boolean getEnableRotation() 获取是否开启轮转。
true -- 开启轮转；
false -- 禁止轮转。
 * @method void setEnableRotation(boolean $EnableRotation) 设置是否开启轮转。
true -- 开启轮转；
false -- 禁止轮转。
 * @method integer getFrequency() 获取轮转周期，以天为单位，最小为30天，最大为365天。
 * @method void setFrequency(integer $Frequency) 设置轮转周期，以天为单位，最小为30天，最大为365天。
 * @method string getRotationBeginTime() 获取用户设置的期望开始轮转时间，格式为：2006-01-02 15:04:05。
当EnableRotation为true时，如果不填RotationBeginTime，则默认填充为当前时间。
 * @method void setRotationBeginTime(string $RotationBeginTime) 设置用户设置的期望开始轮转时间，格式为：2006-01-02 15:04:05。
当EnableRotation为true时，如果不填RotationBeginTime，则默认填充为当前时间。
 */
class UpdateRotationStatusRequest extends AbstractModel
{
    /**
     * @var string 云产品凭据名称。
     */
    public $SecretName;

    /**
     * @var boolean 是否开启轮转。
true -- 开启轮转；
false -- 禁止轮转。
     */
    public $EnableRotation;

    /**
     * @var integer 轮转周期，以天为单位，最小为30天，最大为365天。
     */
    public $Frequency;

    /**
     * @var string 用户设置的期望开始轮转时间，格式为：2006-01-02 15:04:05。
当EnableRotation为true时，如果不填RotationBeginTime，则默认填充为当前时间。
     */
    public $RotationBeginTime;

    /**
     * @param string $SecretName 云产品凭据名称。
     * @param boolean $EnableRotation 是否开启轮转。
true -- 开启轮转；
false -- 禁止轮转。
     * @param integer $Frequency 轮转周期，以天为单位，最小为30天，最大为365天。
     * @param string $RotationBeginTime 用户设置的期望开始轮转时间，格式为：2006-01-02 15:04:05。
当EnableRotation为true时，如果不填RotationBeginTime，则默认填充为当前时间。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("RotationBeginTime",$param) and $param["RotationBeginTime"] !== null) {
            $this->RotationBeginTime = $param["RotationBeginTime"];
        }
    }
}
