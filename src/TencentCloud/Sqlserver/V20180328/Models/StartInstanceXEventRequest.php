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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartInstanceXEvent请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getEventConfig() 获取开启、关闭扩展事件
 * @method void setEventConfig(array $EventConfig) 设置开启、关闭扩展事件
 */
class StartInstanceXEventRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 开启、关闭扩展事件
     */
    public $EventConfig;

    /**
     * @param string $InstanceId 实例ID
     * @param array $EventConfig 开启、关闭扩展事件
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

        if (array_key_exists("EventConfig",$param) and $param["EventConfig"] !== null) {
            $this->EventConfig = [];
            foreach ($param["EventConfig"] as $key => $value){
                $obj = new EventConfig();
                $obj->deserialize($value);
                array_push($this->EventConfig, $obj);
            }
        }
    }
}
