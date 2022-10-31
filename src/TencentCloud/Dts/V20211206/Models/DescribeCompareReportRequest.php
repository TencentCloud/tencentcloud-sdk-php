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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareReport请求参数结构体
 *
 * @method string getJobId() 获取迁移任务 Id
 * @method void setJobId(string $JobId) 设置迁移任务 Id
 * @method string getCompareTaskId() 获取校验任务 Id
 * @method void setCompareTaskId(string $CompareTaskId) 设置校验任务 Id
 * @method integer getDifferenceLimit() 获取校验不一致结果的 limit
 * @method void setDifferenceLimit(integer $DifferenceLimit) 设置校验不一致结果的 limit
 * @method integer getDifferenceOffset() 获取不一致的 Offset
 * @method void setDifferenceOffset(integer $DifferenceOffset) 设置不一致的 Offset
 * @method string getDifferenceDB() 获取搜索条件，不一致的库名
 * @method void setDifferenceDB(string $DifferenceDB) 设置搜索条件，不一致的库名
 * @method string getDifferenceTable() 获取搜索条件，不一致的表名
 * @method void setDifferenceTable(string $DifferenceTable) 设置搜索条件，不一致的表名
 * @method integer getSkippedLimit() 获取未校验的 Limit
 * @method void setSkippedLimit(integer $SkippedLimit) 设置未校验的 Limit
 * @method integer getSkippedOffset() 获取未校验的 Offset
 * @method void setSkippedOffset(integer $SkippedOffset) 设置未校验的 Offset
 * @method string getSkippedDB() 获取搜索条件，未校验的库名
 * @method void setSkippedDB(string $SkippedDB) 设置搜索条件，未校验的库名
 * @method string getSkippedTable() 获取搜索条件，未校验的表名
 * @method void setSkippedTable(string $SkippedTable) 设置搜索条件，未校验的表名
 */
class DescribeCompareReportRequest extends AbstractModel
{
    /**
     * @var string 迁移任务 Id
     */
    public $JobId;

    /**
     * @var string 校验任务 Id
     */
    public $CompareTaskId;

    /**
     * @var integer 校验不一致结果的 limit
     */
    public $DifferenceLimit;

    /**
     * @var integer 不一致的 Offset
     */
    public $DifferenceOffset;

    /**
     * @var string 搜索条件，不一致的库名
     */
    public $DifferenceDB;

    /**
     * @var string 搜索条件，不一致的表名
     */
    public $DifferenceTable;

    /**
     * @var integer 未校验的 Limit
     */
    public $SkippedLimit;

    /**
     * @var integer 未校验的 Offset
     */
    public $SkippedOffset;

    /**
     * @var string 搜索条件，未校验的库名
     */
    public $SkippedDB;

    /**
     * @var string 搜索条件，未校验的表名
     */
    public $SkippedTable;

    /**
     * @param string $JobId 迁移任务 Id
     * @param string $CompareTaskId 校验任务 Id
     * @param integer $DifferenceLimit 校验不一致结果的 limit
     * @param integer $DifferenceOffset 不一致的 Offset
     * @param string $DifferenceDB 搜索条件，不一致的库名
     * @param string $DifferenceTable 搜索条件，不一致的表名
     * @param integer $SkippedLimit 未校验的 Limit
     * @param integer $SkippedOffset 未校验的 Offset
     * @param string $SkippedDB 搜索条件，未校验的库名
     * @param string $SkippedTable 搜索条件，未校验的表名
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
