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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警事件
 *
 * @method string getEventName() 获取<p>事件名</p>
 * @method void setEventName(string $EventName) 设置<p>事件名</p>
 * @method string getDescription() 获取<p>展示的事件名</p>
 * @method void setDescription(string $Description) 设置<p>展示的事件名</p>
 * @method string getNamespace() 获取<p>告警策略类型</p>
 * @method void setNamespace(string $Namespace) 设置<p>告警策略类型</p>
 */
class AlarmEvent extends AbstractModel
{
    /**
     * @var string <p>事件名</p>
     */
    public $EventName;

    /**
     * @var string <p>展示的事件名</p>
     */
    public $Description;

    /**
     * @var string <p>告警策略类型</p>
     */
    public $Namespace;

    /**
     * @param string $EventName <p>事件名</p>
     * @param string $Description <p>展示的事件名</p>
     * @param string $Namespace <p>告警策略类型</p>
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
