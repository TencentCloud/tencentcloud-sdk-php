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
 * CreateStreamLinkInput请求参数结构体
 *
 * @method string getFlowId() 获取媒体传输流ID。
 * @method void setFlowId(string $FlowId) 设置媒体传输流ID。
 * @method array getInputGroup() 获取流的输入组。
 * @method void setInputGroup(array $InputGroup) 设置流的输入组。
 */
class CreateStreamLinkInputRequest extends AbstractModel
{
    /**
     * @var string 媒体传输流ID。
     */
    public $FlowId;

    /**
     * @var array 流的输入组。
     */
    public $InputGroup;

    /**
     * @param string $FlowId 媒体传输流ID。
     * @param array $InputGroup 流的输入组。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InputGroup",$param) and $param["InputGroup"] !== null) {
            $this->InputGroup = [];
            foreach ($param["InputGroup"] as $key => $value){
                $obj = new CreateInput();
                $obj->deserialize($value);
                array_push($this->InputGroup, $obj);
            }
        }
    }
}
