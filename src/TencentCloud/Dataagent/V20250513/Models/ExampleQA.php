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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 问答数据
 *
 * @method string getExampleId() 获取示例记录的唯一业务 ID
 * @method void setExampleId(string $ExampleId) 设置示例记录的唯一业务 ID
 * @method array getQuestions() 获取问题列表
 * @method void setQuestions(array $Questions) 设置问题列表
 * @method string getAnswer() 获取对应的标准答案或回复
 * @method void setAnswer(string $Answer) 设置对应的标准答案或回复
 * @method string getType() 获取内容类型，类型包含 'text', 'sql', 'code' 
 * @method void setType(string $Type) 设置内容类型，类型包含 'text', 'sql', 'code' 
 * @method string getCreateTime() 获取记录的创建时间
 * @method void setCreateTime(string $CreateTime) 设置记录的创建时间
 * @method string getUpdateTime() 获取记录的最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置记录的最后更新时间
 */
class ExampleQA extends AbstractModel
{
    /**
     * @var string 示例记录的唯一业务 ID
     */
    public $ExampleId;

    /**
     * @var array 问题列表
     */
    public $Questions;

    /**
     * @var string 对应的标准答案或回复
     */
    public $Answer;

    /**
     * @var string 内容类型，类型包含 'text', 'sql', 'code' 
     */
    public $Type;

    /**
     * @var string 记录的创建时间
     */
    public $CreateTime;

    /**
     * @var string 记录的最后更新时间
     */
    public $UpdateTime;

    /**
     * @param string $ExampleId 示例记录的唯一业务 ID
     * @param array $Questions 问题列表
     * @param string $Answer 对应的标准答案或回复
     * @param string $Type 内容类型，类型包含 'text', 'sql', 'code' 
     * @param string $CreateTime 记录的创建时间
     * @param string $UpdateTime 记录的最后更新时间
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
        if (array_key_exists("ExampleId",$param) and $param["ExampleId"] !== null) {
            $this->ExampleId = $param["ExampleId"];
        }

        if (array_key_exists("Questions",$param) and $param["Questions"] !== null) {
            $this->Questions = $param["Questions"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
