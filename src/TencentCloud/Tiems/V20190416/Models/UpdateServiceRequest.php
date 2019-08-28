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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getServiceId() 获取服务Id
 * @method void setServiceId(integer $ServiceId) 设置服务Id
 * @method Scaler getScaler() 获取扩缩容配置
 * @method void setScaler(Scaler $Scaler) 设置扩缩容配置
 * @method integer getServiceConfigId() 获取服务配置Id
 * @method void setServiceConfigId(integer $ServiceConfigId) 设置服务配置Id
 * @method string getScaleMode() 获取支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
 * @method void setScaleMode(string $ScaleMode) 设置支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
 * @method string getServiceAction() 获取支持STOP(停止) RESUME(重启)
 * @method void setServiceAction(string $ServiceAction) 设置支持STOP(停止) RESUME(重启)
 */

/**
 *UpdateService请求参数结构体
 */
class UpdateServiceRequest extends AbstractModel
{
    /**
     * @var integer 服务Id
     */
    public $ServiceId;

    /**
     * @var Scaler 扩缩容配置
     */
    public $Scaler;

    /**
     * @var integer 服务配置Id
     */
    public $ServiceConfigId;

    /**
     * @var string 支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
     */
    public $ScaleMode;

    /**
     * @var string 支持STOP(停止) RESUME(重启)
     */
    public $ServiceAction;
    /**
     * @param integer $ServiceId 服务Id
     * @param Scaler $Scaler 扩缩容配置
     * @param integer $ServiceConfigId 服务配置Id
     * @param string $ScaleMode 支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
     * @param string $ServiceAction 支持STOP(停止) RESUME(重启)
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Scaler",$param) and $param["Scaler"] !== null) {
            $this->Scaler = new Scaler();
            $this->Scaler->deserialize($param["Scaler"]);
        }

        if (array_key_exists("ServiceConfigId",$param) and $param["ServiceConfigId"] !== null) {
            $this->ServiceConfigId = $param["ServiceConfigId"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("ServiceAction",$param) and $param["ServiceAction"] !== null) {
            $this->ServiceAction = $param["ServiceAction"];
        }
    }
}
