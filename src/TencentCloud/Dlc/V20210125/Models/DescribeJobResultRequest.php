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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobResult请求参数结构体
 *
 * @method string getJobId() 获取<p>作业唯一标识符（ID）。必填。</p>
 * @method void setJobId(string $JobId) 设置<p>作业唯一标识符（ID）。必填。</p>
 * @method integer getPage() 获取<p>页码，从1开始，默认为1.</p>
 * @method void setPage(integer $Page) 设置<p>页码，从1开始，默认为1.</p>
 * @method integer getPageSize() 获取<p>每页返回数量，默认为10.</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页返回数量，默认为10.</p>
 * @method integer getStatementIndex() 获取<p>Statement 序号（1-based），多语句作业时指定；缺省为 0，取整作业第一个结果集.</p>
 * @method void setStatementIndex(integer $StatementIndex) 设置<p>Statement 序号（1-based），多语句作业时指定；缺省为 0，取整作业第一个结果集.</p>
 */
class DescribeJobResultRequest extends AbstractModel
{
    /**
     * @var string <p>作业唯一标识符（ID）。必填。</p>
     */
    public $JobId;

    /**
     * @var integer <p>页码，从1开始，默认为1.</p>
     */
    public $Page;

    /**
     * @var integer <p>每页返回数量，默认为10.</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Statement 序号（1-based），多语句作业时指定；缺省为 0，取整作业第一个结果集.</p>
     */
    public $StatementIndex;

    /**
     * @param string $JobId <p>作业唯一标识符（ID）。必填。</p>
     * @param integer $Page <p>页码，从1开始，默认为1.</p>
     * @param integer $PageSize <p>每页返回数量，默认为10.</p>
     * @param integer $StatementIndex <p>Statement 序号（1-based），多语句作业时指定；缺省为 0，取整作业第一个结果集.</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StatementIndex",$param) and $param["StatementIndex"] !== null) {
            $this->StatementIndex = $param["StatementIndex"];
        }
    }
}
