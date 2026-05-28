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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行计划详情
 *
 * @method string getTemplateID() 获取<p>模板ID</p>
 * @method void setTemplateID(string $TemplateID) 设置<p>模板ID</p>
 * @method string getDb() 获取<p>数据库名</p>
 * @method void setDb(string $Db) 设置<p>数据库名</p>
 * @method string getSQLSample() 获取<p>原始SQL样例</p>
 * @method void setSQLSample(string $SQLSample) 设置<p>原始SQL样例</p>
 * @method string getSQLSampleRewritten() 获取<p>改写后SQL样例</p>
 * @method void setSQLSampleRewritten(string $SQLSampleRewritten) 设置<p>改写后SQL样例</p>
 * @method array getTablePlanBefore() 获取<p>优化前执行计划- 列表</p>
 * @method void setTablePlanBefore(array $TablePlanBefore) 设置<p>优化前执行计划- 列表</p>
 * @method array getTablePlanAfter() 获取<p>优化后执行计划 - 列表</p>
 * @method void setTablePlanAfter(array $TablePlanAfter) 设置<p>优化后执行计划 - 列表</p>
 * @method string getTreePlanBefore() 获取<p>优化前树形执行计划</p>
 * @method void setTreePlanBefore(string $TreePlanBefore) 设置<p>优化前树形执行计划</p>
 * @method string getTreePlanAfter() 获取<p>优化后树形执行计划</p>
 * @method void setTreePlanAfter(string $TreePlanAfter) 设置<p>优化后树形执行计划</p>
 * @method float getQueryTimeBefore() 获取<p>优化前查询时间</p>
 * @method void setQueryTimeBefore(float $QueryTimeBefore) 设置<p>优化前查询时间</p>
 * @method float getQueryTimeAfter() 获取<p>优化后查询时间</p>
 * @method void setQueryTimeAfter(float $QueryTimeAfter) 设置<p>优化后查询时间</p>
 * @method integer getSQLScanRowsBefore() 获取<p>优化前扫描行数</p>
 * @method void setSQLScanRowsBefore(integer $SQLScanRowsBefore) 设置<p>优化前扫描行数</p>
 * @method integer getSQLScanRowsAfter() 获取<p>优化后扫描行数</p>
 * @method void setSQLScanRowsAfter(integer $SQLScanRowsAfter) 设置<p>优化后扫描行数</p>
 */
class ExecutionPlanDetail extends AbstractModel
{
    /**
     * @var string <p>模板ID</p>
     */
    public $TemplateID;

    /**
     * @var string <p>数据库名</p>
     */
    public $Db;

    /**
     * @var string <p>原始SQL样例</p>
     */
    public $SQLSample;

    /**
     * @var string <p>改写后SQL样例</p>
     */
    public $SQLSampleRewritten;

    /**
     * @var array <p>优化前执行计划- 列表</p>
     */
    public $TablePlanBefore;

    /**
     * @var array <p>优化后执行计划 - 列表</p>
     */
    public $TablePlanAfter;

    /**
     * @var string <p>优化前树形执行计划</p>
     */
    public $TreePlanBefore;

    /**
     * @var string <p>优化后树形执行计划</p>
     */
    public $TreePlanAfter;

    /**
     * @var float <p>优化前查询时间</p>
     */
    public $QueryTimeBefore;

    /**
     * @var float <p>优化后查询时间</p>
     */
    public $QueryTimeAfter;

    /**
     * @var integer <p>优化前扫描行数</p>
     */
    public $SQLScanRowsBefore;

    /**
     * @var integer <p>优化后扫描行数</p>
     */
    public $SQLScanRowsAfter;

    /**
     * @param string $TemplateID <p>模板ID</p>
     * @param string $Db <p>数据库名</p>
     * @param string $SQLSample <p>原始SQL样例</p>
     * @param string $SQLSampleRewritten <p>改写后SQL样例</p>
     * @param array $TablePlanBefore <p>优化前执行计划- 列表</p>
     * @param array $TablePlanAfter <p>优化后执行计划 - 列表</p>
     * @param string $TreePlanBefore <p>优化前树形执行计划</p>
     * @param string $TreePlanAfter <p>优化后树形执行计划</p>
     * @param float $QueryTimeBefore <p>优化前查询时间</p>
     * @param float $QueryTimeAfter <p>优化后查询时间</p>
     * @param integer $SQLScanRowsBefore <p>优化前扫描行数</p>
     * @param integer $SQLScanRowsAfter <p>优化后扫描行数</p>
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
        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("SQLSample",$param) and $param["SQLSample"] !== null) {
            $this->SQLSample = $param["SQLSample"];
        }

        if (array_key_exists("SQLSampleRewritten",$param) and $param["SQLSampleRewritten"] !== null) {
            $this->SQLSampleRewritten = $param["SQLSampleRewritten"];
        }

        if (array_key_exists("TablePlanBefore",$param) and $param["TablePlanBefore"] !== null) {
            $this->TablePlanBefore = [];
            foreach ($param["TablePlanBefore"] as $key => $value){
                $obj = new ExplainRow();
                $obj->deserialize($value);
                array_push($this->TablePlanBefore, $obj);
            }
        }

        if (array_key_exists("TablePlanAfter",$param) and $param["TablePlanAfter"] !== null) {
            $this->TablePlanAfter = [];
            foreach ($param["TablePlanAfter"] as $key => $value){
                $obj = new ExplainRow();
                $obj->deserialize($value);
                array_push($this->TablePlanAfter, $obj);
            }
        }

        if (array_key_exists("TreePlanBefore",$param) and $param["TreePlanBefore"] !== null) {
            $this->TreePlanBefore = $param["TreePlanBefore"];
        }

        if (array_key_exists("TreePlanAfter",$param) and $param["TreePlanAfter"] !== null) {
            $this->TreePlanAfter = $param["TreePlanAfter"];
        }

        if (array_key_exists("QueryTimeBefore",$param) and $param["QueryTimeBefore"] !== null) {
            $this->QueryTimeBefore = $param["QueryTimeBefore"];
        }

        if (array_key_exists("QueryTimeAfter",$param) and $param["QueryTimeAfter"] !== null) {
            $this->QueryTimeAfter = $param["QueryTimeAfter"];
        }

        if (array_key_exists("SQLScanRowsBefore",$param) and $param["SQLScanRowsBefore"] !== null) {
            $this->SQLScanRowsBefore = $param["SQLScanRowsBefore"];
        }

        if (array_key_exists("SQLScanRowsAfter",$param) and $param["SQLScanRowsAfter"] !== null) {
            $this->SQLScanRowsAfter = $param["SQLScanRowsAfter"];
        }
    }
}
