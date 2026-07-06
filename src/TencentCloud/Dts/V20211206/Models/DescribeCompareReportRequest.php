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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareReport请求参数结构体
 *
 * @method string getJobId() 获取<p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method string getCompareTaskId() 获取<p>校验任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method void setCompareTaskId(string $CompareTaskId) 设置<p>校验任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method integer getDifferenceLimit() 获取<p>校验不一致结果的 limit</p>
 * @method void setDifferenceLimit(integer $DifferenceLimit) 设置<p>校验不一致结果的 limit</p>
 * @method integer getDifferenceOffset() 获取<p>不一致的 Offset</p>
 * @method void setDifferenceOffset(integer $DifferenceOffset) 设置<p>不一致的 Offset</p>
 * @method string getDifferenceDB() 获取<p>搜索条件，不一致的库名</p>
 * @method void setDifferenceDB(string $DifferenceDB) 设置<p>搜索条件，不一致的库名</p>
 * @method string getDifferenceTable() 获取<p>搜索条件，不一致的表名</p>
 * @method void setDifferenceTable(string $DifferenceTable) 设置<p>搜索条件，不一致的表名</p>
 * @method integer getSkippedLimit() 获取<p>未校验的 Limit</p>
 * @method void setSkippedLimit(integer $SkippedLimit) 设置<p>未校验的 Limit</p>
 * @method integer getSkippedOffset() 获取<p>未校验的 Offset</p>
 * @method void setSkippedOffset(integer $SkippedOffset) 设置<p>未校验的 Offset</p>
 * @method string getSkippedDB() 获取<p>搜索条件，未校验的库名</p>
 * @method void setSkippedDB(string $SkippedDB) 设置<p>搜索条件，未校验的库名</p>
 * @method string getSkippedTable() 获取<p>搜索条件，未校验的表名</p>
 * @method void setSkippedTable(string $SkippedTable) 设置<p>搜索条件，未校验的表名</p>
 */
class DescribeCompareReportRequest extends AbstractModel
{
    /**
     * @var string <p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var string <p>校验任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     */
    public $CompareTaskId;

    /**
     * @var integer <p>校验不一致结果的 limit</p>
     */
    public $DifferenceLimit;

    /**
     * @var integer <p>不一致的 Offset</p>
     */
    public $DifferenceOffset;

    /**
     * @var string <p>搜索条件，不一致的库名</p>
     */
    public $DifferenceDB;

    /**
     * @var string <p>搜索条件，不一致的表名</p>
     */
    public $DifferenceTable;

    /**
     * @var integer <p>未校验的 Limit</p>
     */
    public $SkippedLimit;

    /**
     * @var integer <p>未校验的 Offset</p>
     */
    public $SkippedOffset;

    /**
     * @var string <p>搜索条件，未校验的库名</p>
     */
    public $SkippedDB;

    /**
     * @var string <p>搜索条件，未校验的表名</p>
     */
    public $SkippedTable;

    /**
     * @param string $JobId <p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     * @param string $CompareTaskId <p>校验任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     * @param integer $DifferenceLimit <p>校验不一致结果的 limit</p>
     * @param integer $DifferenceOffset <p>不一致的 Offset</p>
     * @param string $DifferenceDB <p>搜索条件，不一致的库名</p>
     * @param string $DifferenceTable <p>搜索条件，不一致的表名</p>
     * @param integer $SkippedLimit <p>未校验的 Limit</p>
     * @param integer $SkippedOffset <p>未校验的 Offset</p>
     * @param string $SkippedDB <p>搜索条件，未校验的库名</p>
     * @param string $SkippedTable <p>搜索条件，未校验的表名</p>
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

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("DifferenceLimit",$param) and $param["DifferenceLimit"] !== null) {
            $this->DifferenceLimit = $param["DifferenceLimit"];
        }

        if (array_key_exists("DifferenceOffset",$param) and $param["DifferenceOffset"] !== null) {
            $this->DifferenceOffset = $param["DifferenceOffset"];
        }

        if (array_key_exists("DifferenceDB",$param) and $param["DifferenceDB"] !== null) {
            $this->DifferenceDB = $param["DifferenceDB"];
        }

        if (array_key_exists("DifferenceTable",$param) and $param["DifferenceTable"] !== null) {
            $this->DifferenceTable = $param["DifferenceTable"];
        }

        if (array_key_exists("SkippedLimit",$param) and $param["SkippedLimit"] !== null) {
            $this->SkippedLimit = $param["SkippedLimit"];
        }

        if (array_key_exists("SkippedOffset",$param) and $param["SkippedOffset"] !== null) {
            $this->SkippedOffset = $param["SkippedOffset"];
        }

        if (array_key_exists("SkippedDB",$param) and $param["SkippedDB"] !== null) {
            $this->SkippedDB = $param["SkippedDB"];
        }

        if (array_key_exists("SkippedTable",$param) and $param["SkippedTable"] !== null) {
            $this->SkippedTable = $param["SkippedTable"];
        }
    }
}
