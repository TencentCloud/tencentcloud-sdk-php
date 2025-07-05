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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例机型配置信息及状态信息
 *
 * @method string getStatus() 获取状态描述
 * @method void setStatus(string $Status) 设置状态描述
 * @method string getMessage() 获取状态描述信息
 * @method void setMessage(string $Message) 设置状态描述信息
 * @method InstanceTypeConfig getInstanceTypeConfig() 获取配置信息
 * @method void setInstanceTypeConfig(InstanceTypeConfig $InstanceTypeConfig) 设置配置信息
 */
class InstanceTypeConfigStatus extends AbstractModel
{
    /**
     * @var string 状态描述
     */
    public $Status;

    /**
     * @var string 状态描述信息
     */
    public $Message;

    /**
     * @var InstanceTypeConfig 配置信息
     */
    public $InstanceTypeConfig;

    /**
     * @param string $Status 状态描述
     * @param string $Message 状态描述信息
     * @param InstanceTypeConfig $InstanceTypeConfig 配置信息
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceTypeConfig",$param) and $param["InstanceTypeConfig"] !== null) {
            $this->InstanceTypeConfig = new InstanceTypeConfig();
            $this->InstanceTypeConfig->deserialize($param["InstanceTypeConfig"]);
        }
    }
}
