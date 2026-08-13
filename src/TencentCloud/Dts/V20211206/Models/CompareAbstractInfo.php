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
 * 一致性校验摘要信息
 *
 * @method CompareOptions getOptions() 获取<p>校验配置参数</p>
 * @method void setOptions(CompareOptions $Options) 设置<p>校验配置参数</p>
 * @method CompareObject getObjects() 获取<p>一致性校验对比对象</p>
 * @method void setObjects(CompareObject $Objects) 设置<p>一致性校验对比对象</p>
 * @method string getConclusion() 获取<p>对比结论: same,different</p>
 * @method void setConclusion(string $Conclusion) 设置<p>对比结论: same,different</p>
 * @method string getStatus() 获取<p>任务状态: success,failed</p>
 * @method void setStatus(string $Status) 设置<p>任务状态: success,failed</p>
 * @method integer getTotalTables() 获取<p>总的表数量</p>
 * @method void setTotalTables(integer $TotalTables) 设置<p>总的表数量</p>
 * @method integer getCheckedTables() 获取<p>已校验的表数量</p>
 * @method void setCheckedTables(integer $CheckedTables) 设置<p>已校验的表数量</p>
 * @method integer getDifferentTables() 获取<p>不一致的表数量</p>
 * @method void setDifferentTables(integer $DifferentTables) 设置<p>不一致的表数量</p>
 * @method integer getSkippedTables() 获取<p>跳过校验的表数量</p>
 * @method void setSkippedTables(integer $SkippedTables) 设置<p>跳过校验的表数量</p>
 * @method integer getNearlyTableCount() 获取<p>预估表总数</p>
 * @method void setNearlyTableCount(integer $NearlyTableCount) 设置<p>预估表总数</p>
 * @method integer getDifferentRows() 获取<p>不一致的数据行数量</p>
 * @method void setDifferentRows(integer $DifferentRows) 设置<p>不一致的数据行数量</p>
 * @method integer getSrcSampleRows() 获取<p>源库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
 * @method void setSrcSampleRows(integer $SrcSampleRows) 设置<p>源库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
 * @method integer getDstSampleRows() 获取<p>目标库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
 * @method void setDstSampleRows(integer $DstSampleRows) 设置<p>目标库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
 * @method string getStartedAt() 获取<p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setStartedAt(string $StartedAt) 设置<p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getFinishedAt() 获取<p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setFinishedAt(string $FinishedAt) 设置<p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 */
class CompareAbstractInfo extends AbstractModel
{
    /**
     * @var CompareOptions <p>校验配置参数</p>
     */
    public $Options;

    /**
     * @var CompareObject <p>一致性校验对比对象</p>
     */
    public $Objects;

    /**
     * @var string <p>对比结论: same,different</p>
     */
    public $Conclusion;

    /**
     * @var string <p>任务状态: success,failed</p>
     */
    public $Status;

    /**
     * @var integer <p>总的表数量</p>
     */
    public $TotalTables;

    /**
     * @var integer <p>已校验的表数量</p>
     */
    public $CheckedTables;

    /**
     * @var integer <p>不一致的表数量</p>
     */
    public $DifferentTables;

    /**
     * @var integer <p>跳过校验的表数量</p>
     */
    public $SkippedTables;

    /**
     * @var integer <p>预估表总数</p>
     */
    public $NearlyTableCount;

    /**
     * @var integer <p>不一致的数据行数量</p>
     */
    public $DifferentRows;

    /**
     * @var integer <p>源库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
     */
    public $SrcSampleRows;

    /**
     * @var integer <p>目标库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
     */
    public $DstSampleRows;

    /**
     * @var string <p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $StartedAt;

    /**
     * @var string <p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $FinishedAt;

    /**
     * @param CompareOptions $Options <p>校验配置参数</p>
     * @param CompareObject $Objects <p>一致性校验对比对象</p>
     * @param string $Conclusion <p>对比结论: same,different</p>
     * @param string $Status <p>任务状态: success,failed</p>
     * @param integer $TotalTables <p>总的表数量</p>
     * @param integer $CheckedTables <p>已校验的表数量</p>
     * @param integer $DifferentTables <p>不一致的表数量</p>
     * @param integer $SkippedTables <p>跳过校验的表数量</p>
     * @param integer $NearlyTableCount <p>预估表总数</p>
     * @param integer $DifferentRows <p>不一致的数据行数量</p>
     * @param integer $SrcSampleRows <p>源库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
     * @param integer $DstSampleRows <p>目标库行数，当对比类型为<strong>行数对比</strong>时此项有意义</p>
     * @param string $StartedAt <p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $FinishedAt <p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
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
        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new CompareOptions();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new CompareObject();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalTables",$param) and $param["TotalTables"] !== null) {
            $this->TotalTables = $param["TotalTables"];
        }

        if (array_key_exists("CheckedTables",$param) and $param["CheckedTables"] !== null) {
            $this->CheckedTables = $param["CheckedTables"];
        }

        if (array_key_exists("DifferentTables",$param) and $param["DifferentTables"] !== null) {
            $this->DifferentTables = $param["DifferentTables"];
        }

        if (array_key_exists("SkippedTables",$param) and $param["SkippedTables"] !== null) {
            $this->SkippedTables = $param["SkippedTables"];
        }

        if (array_key_exists("NearlyTableCount",$param) and $param["NearlyTableCount"] !== null) {
            $this->NearlyTableCount = $param["NearlyTableCount"];
        }

        if (array_key_exists("DifferentRows",$param) and $param["DifferentRows"] !== null) {
            $this->DifferentRows = $param["DifferentRows"];
        }

        if (array_key_exists("SrcSampleRows",$param) and $param["SrcSampleRows"] !== null) {
            $this->SrcSampleRows = $param["SrcSampleRows"];
        }

        if (array_key_exists("DstSampleRows",$param) and $param["DstSampleRows"] !== null) {
            $this->DstSampleRows = $param["DstSampleRows"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }
    }
}
