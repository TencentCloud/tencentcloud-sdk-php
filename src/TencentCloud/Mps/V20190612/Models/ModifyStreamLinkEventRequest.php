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
 * ModifyStreamLinkEvent请求参数结构体
 *
 * @method string getEventId() 获取媒体传输事件Event Id。
 * @method void setEventId(string $EventId) 设置媒体传输事件Event Id。
 * @method string getEventName() 获取需要修改的事件名称。
 * @method void setEventName(string $EventName) 设置需要修改的事件名称。
 * @method string getDescription() 获取Event的描述信息。
 * @method void setDescription(string $Description) 设置Event的描述信息。
 */
class ModifyStreamLinkEventRequest extends AbstractModel
{
    /**
     * @var string 媒体传输事件Event Id。
     */
    public $EventId;

    /**
     * @var string 需要修改的事件名称。
     */
    public $EventName;

    /**
     * @var string Event的描述信息。
     */
    public $Description;

    /**
     * @param string $EventId 媒体传输事件Event Id。
     * @param string $EventName 需要修改的事件名称。
     * @param string $Description Event的描述信息。
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
