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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamLinkEvent请求参数结构体
 *
 * @method string getEventName() 获取事件名称。
 * @method void setEventName(string $EventName) 设置事件名称。
 * @method string getDescription() 获取事件描述。
 * @method void setDescription(string $Description) 设置事件描述。
 */
class CreateStreamLinkEventRequest extends AbstractModel
{
    /**
     * @var string 事件名称。
     */
    public $EventName;

    /**
     * @var string 事件描述。
     */
    public $Description;

    /**
     * @param string $EventName 事件名称。
     * @param string $Description 事件描述。
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
    }
}
