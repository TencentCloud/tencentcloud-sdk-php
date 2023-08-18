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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TestingTextGeneration返回参数结构体
 *
 * @method array getChoices() 获取结果
 * @method void setChoices(array $Choices) 设置结果
 * @method integer getCreated() 获取unix时间戳的字符串
 * @method void setCreated(integer $Created) 设置unix时间戳的字符串
 * @method string getId() 获取会话id
 * @method void setId(string $Id) 设置会话id
 * @method string getModel() 获取模型名
 * @method void setModel(string $Model) 设置模型名
 * @method TextGenerationUsage getUsage() 获取token数量
 * @method void setUsage(TextGenerationUsage $Usage) 设置token数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TestingTextGenerationResponse extends AbstractModel
{
    /**
     * @var array 结果
     */
    public $Choices;

    /**
     * @var integer unix时间戳的字符串
     */
    public $Created;

    /**
     * @var string 会话id
     */
    public $Id;

    /**
     * @var string 模型名
     */
    public $Model;

    /**
     * @var TextGenerationUsage token数量
     */
    public $Usage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Choices 结果
     * @param integer $Created unix时间戳的字符串
     * @param string $Id 会话id
     * @param string $Model 模型名
     * @param TextGenerationUsage $Usage token数量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = [];
            foreach ($param["Choices"] as $key => $value){
                $obj = new TextGenerationChoices();
                $obj->deserialize($value);
                array_push($this->Choices, $obj);
            }
        }

        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new TextGenerationUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
