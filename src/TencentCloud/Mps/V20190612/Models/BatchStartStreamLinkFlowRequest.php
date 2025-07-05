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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchStartStreamLinkFlow请求参数结构体
 *
 * @method string getEventId() 获取EventId。
 * @method void setEventId(string $EventId) 设置EventId。
 * @method array getFlowIds() 获取Event关联的流Id数组，如果不传默认启动Event下面的所有媒体传输流。
 * @method void setFlowIds(array $FlowIds) 设置Event关联的流Id数组，如果不传默认启动Event下面的所有媒体传输流。
 */
class BatchStartStreamLinkFlowRequest extends AbstractModel
{
    /**
     * @var string EventId。
     */
    public $EventId;

    /**
     * @var array Event关联的流Id数组，如果不传默认启动Event下面的所有媒体传输流。
     */
    public $FlowIds;

    /**
     * @param string $EventId EventId。
     * @param array $FlowIds Event关联的流Id数组，如果不传默认启动Event下面的所有媒体传输流。
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }
    }
}
