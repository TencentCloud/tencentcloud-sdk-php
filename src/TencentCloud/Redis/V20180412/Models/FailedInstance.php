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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转换失败的实例信息
 *
 * @method string getInstanceId() 获取<p>失败实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>失败实例ID</p>
 * @method string getMessage() 获取<p>失败信息</p>
 * @method void setMessage(string $Message) 设置<p>失败信息</p>
 */
class FailedInstance extends AbstractModel
{
    /**
     * @var string <p>失败实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>失败信息</p>
     */
    public $Message;

    /**
     * @param string $InstanceId <p>失败实例ID</p>
     * @param string $Message <p>失败信息</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
