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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKnowledgeSet请求参数结构体
 *
 * @method string getName() 获取知识库标识
 * @method void setName(string $Name) 设置知识库标识
 * @method string getTitle() 获取知识库名称
 * @method void setTitle(string $Title) 设置知识库名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 */
class CreateKnowledgeSetRequest extends AbstractModel
{
    /**
     * @var string 知识库标识
     */
    public $Name;

    /**
     * @var string 知识库名称
     */
    public $Title;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @param string $Name 知识库标识
     * @param string $Title 知识库名称
     * @param string $Desc 描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
