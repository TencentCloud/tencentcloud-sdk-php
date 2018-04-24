<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEventName() 获取事件类型
 * @method void setEventName(string $EventName) 设置事件类型
 * @method array getEventVars() 获取自定义键值对
 * @method void setEventVars(array $EventVars) 设置自定义键值对
 */

/**
 *事件配置
 */
class EventConfig extends AbstractModel
{
    /**
     * @var string 事件类型
     */
    public $EventName;

    /**
     * @var array 自定义键值对
     */
    public $EventVars;
    /**
     * @param string $EventName 事件类型
     * @param array $EventVars 自定义键值对
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventVars",$param) and $param["EventVars"] !== null) {
            $this->EventVars = [];
            foreach ($param["EventVars"] as $key => $value){
                $obj = new EventVar();
                $obj->deserialize($value);
                array_push($this->EventVars, $obj);
            }
        }
    }
}
