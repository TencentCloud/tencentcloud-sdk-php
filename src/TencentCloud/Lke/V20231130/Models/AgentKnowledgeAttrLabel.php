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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签过滤器
 *
 * @method string getAttributeBizId() 获取属性ID
 * @method void setAttributeBizId(string $AttributeBizId) 设置属性ID
 * @method array getInputs() 获取标签值，标签值之间是或的关系，只有匹配的，才会进行知识检索，否则报检索不到
 * @method void setInputs(array $Inputs) 设置标签值，标签值之间是或的关系，只有匹配的，才会进行知识检索，否则报检索不到
 */
class AgentKnowledgeAttrLabel extends AbstractModel
{
    /**
     * @var string 属性ID
     */
    public $AttributeBizId;

    /**
     * @var array 标签值，标签值之间是或的关系，只有匹配的，才会进行知识检索，否则报检索不到
     */
    public $Inputs;

    /**
     * @param string $AttributeBizId 属性ID
     * @param array $Inputs 标签值，标签值之间是或的关系，只有匹配的，才会进行知识检索，否则报检索不到
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
        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new AgentInput();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }
    }
}
