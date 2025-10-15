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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空闲检测信息。
 *
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method float getTimeoutSeconds() 获取用户沉默多少秒后触发空闲回调
 * @method void setTimeoutSeconds(float $TimeoutSeconds) 设置用户沉默多少秒后触发空闲回调
 * @method integer getMaxRetries() 获取最大重试次数（1-3）
 * @method void setMaxRetries(integer $MaxRetries) 设置最大重试次数（1-3）
 * @method array getIdleResponses() 获取空闲响应
 * @method void setIdleResponses(array $IdleResponses) 设置空闲响应
 */
class TalkIdleDetectionConfigInfo extends AbstractModel
{
    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var float 用户沉默多少秒后触发空闲回调
     */
    public $TimeoutSeconds;

    /**
     * @var integer 最大重试次数（1-3）
     */
    public $MaxRetries;

    /**
     * @var array 空闲响应
     */
    public $IdleResponses;

    /**
     * @param boolean $Enabled 是否启用
     * @param float $TimeoutSeconds 用户沉默多少秒后触发空闲回调
     * @param integer $MaxRetries 最大重试次数（1-3）
     * @param array $IdleResponses 空闲响应
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("MaxRetries",$param) and $param["MaxRetries"] !== null) {
            $this->MaxRetries = $param["MaxRetries"];
        }

        if (array_key_exists("IdleResponses",$param) and $param["IdleResponses"] !== null) {
            $this->IdleResponses = [];
            foreach ($param["IdleResponses"] as $key => $value){
                $obj = new IdleResponseInfo();
                $obj->deserialize($value);
                array_push($this->IdleResponses, $obj);
            }
        }
    }
}
