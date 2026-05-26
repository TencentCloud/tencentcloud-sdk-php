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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartDBInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>需要重启的实例ID的数组</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>需要重启的实例ID的数组</p>
 * @method string getRestartTime() 获取<p>重启时间，不传表示立即重启</p>
 * @method void setRestartTime(string $RestartTime) 设置<p>重启时间，不传表示立即重启</p>
 */
class RestartDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>需要重启的实例ID的数组</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>重启时间，不传表示立即重启</p>
     */
    public $RestartTime;

    /**
     * @param array $InstanceIds <p>需要重启的实例ID的数组</p>
     * @param string $RestartTime <p>重启时间，不传表示立即重启</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RestartTime",$param) and $param["RestartTime"] !== null) {
            $this->RestartTime = $param["RestartTime"];
        }
    }
}
