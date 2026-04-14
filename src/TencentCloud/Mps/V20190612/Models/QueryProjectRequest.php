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
 * QueryProject请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method string getProjectName() 获取<p>项目名称</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
 * @method integer getPage() 获取<p>页码，从 1 开始，默认 1</p>
 * @method void setPage(integer $Page) 设置<p>页码，从 1 开始，默认 1</p>
 * @method integer getPageSize() 获取<p>每页数量，默认 20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认 20</p>
 */
class QueryProjectRequest extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
     */
    public $ProjectName;

    /**
     * @var integer <p>页码，从 1 开始，默认 1</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数量，默认 20</p>
     */
    public $PageSize;

    /**
     * @param string $ProjectId <p>项目id</p>
     * @param string $ProjectName <p>项目名称</p>
     * @param integer $Page <p>页码，从 1 开始，默认 1</p>
     * @param integer $PageSize <p>每页数量，默认 20</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
