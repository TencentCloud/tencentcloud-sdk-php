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
 * @method string getFlowId() 获取<p>媒体传输流ID。</p>
 * @method void setFlowId(string $FlowId) 设置<p>媒体传输流ID。</p>
 * @method array getInputGroup() 获取<p>流的输入组。</p>
 * @method void setInputGroup(array $InputGroup) 设置<p>流的输入组。</p>
 */
class CreateStreamLinkInputRequest extends AbstractModel
{
    /**
     * @var string <p>媒体传输流ID。</p>
     */
    public $FlowId;

    /**
     * @var array <p>流的输入组。</p>
     */
    public $InputGroup;

    /**
     * @param string $FlowId <p>媒体传输流ID。</p>
     * @param array $InputGroup <p>流的输入组。</p>
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
