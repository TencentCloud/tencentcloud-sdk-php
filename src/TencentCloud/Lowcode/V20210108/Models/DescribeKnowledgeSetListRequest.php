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
 * DescribeKnowledgeSetList请求参数结构体
 *
 * @method string getName() 获取知识库标识，精准查询
 * @method void setName(string $Name) 设置知识库标识，精准查询
 * @method string getTitle() 获取知识库名称，精准查询
 * @method void setTitle(string $Title) 设置知识库名称，精准查询
 * @method integer getLimit() 获取查询条数
 * @method void setLimit(integer $Limit) 设置查询条数
 * @method string getQueryMode() 获取NoPage标识不分页
 * @method void setQueryMode(string $QueryMode) 设置NoPage标识不分页
 */
class DescribeKnowledgeSetListRequest extends AbstractModel
{
    /**
     * @var string 知识库标识，精准查询
     */
    public $Name;

    /**
     * @var string 知识库名称，精准查询
     */
    public $Title;

    /**
     * @var integer 查询条数
     */
    public $Limit;

    /**
     * @var string NoPage标识不分页
     */
    public $QueryMode;

    /**
     * @param string $Name 知识库标识，精准查询
     * @param string $Title 知识库名称，精准查询
     * @param integer $Limit 查询条数
     * @param string $QueryMode NoPage标识不分页
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryMode",$param) and $param["QueryMode"] !== null) {
            $this->QueryMode = $param["QueryMode"];
        }
    }
}
