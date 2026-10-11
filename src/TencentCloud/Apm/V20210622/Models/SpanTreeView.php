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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 树形结构
 *
 * @method string getTreeData() 获取树结构json串
 * @method void setTreeData(string $TreeData) 设置树结构json串
 * @method ChartData getChartData() 获取列表
 * @method void setChartData(ChartData $ChartData) 设置列表
 * @method TraceOverview getTraceOverview() 获取Trace概览信息
 * @method void setTraceOverview(TraceOverview $TraceOverview) 设置Trace概览信息
 * @method string getCompressedTreeData() 获取压缩编码后的树结构json串
 * @method void setCompressedTreeData(string $CompressedTreeData) 设置压缩编码后的树结构json串
 * @method boolean getCntExceeded() 获取整条链路的 span 数量是否超过限制
 * @method void setCntExceeded(boolean $CntExceeded) 设置整条链路的 span 数量是否超过限制
 * @method boolean getQueryTimeout() 获取是否有内部查询超时
 * @method void setQueryTimeout(boolean $QueryTimeout) 设置是否有内部查询超时
 * @method integer getSpanTotalCnt() 获取链路中 span 总数量
 * @method void setSpanTotalCnt(integer $SpanTotalCnt) 设置链路中 span 总数量
 * @method array getFilterViewTagValues() 获取过滤视图的标签值列表
 * @method void setFilterViewTagValues(array $FilterViewTagValues) 设置过滤视图的标签值列表
 */
class SpanTreeView extends AbstractModel
{
    /**
     * @var string 树结构json串
     */
    public $TreeData;

    /**
     * @var ChartData 列表
     */
    public $ChartData;

    /**
     * @var TraceOverview Trace概览信息
     */
    public $TraceOverview;

    /**
     * @var string 压缩编码后的树结构json串
     */
    public $CompressedTreeData;

    /**
     * @var boolean 整条链路的 span 数量是否超过限制
     */
    public $CntExceeded;

    /**
     * @var boolean 是否有内部查询超时
     */
    public $QueryTimeout;

    /**
     * @var integer 链路中 span 总数量
     */
    public $SpanTotalCnt;

    /**
     * @var array 过滤视图的标签值列表
     */
    public $FilterViewTagValues;

    /**
     * @param string $TreeData 树结构json串
     * @param ChartData $ChartData 列表
     * @param TraceOverview $TraceOverview Trace概览信息
     * @param string $CompressedTreeData 压缩编码后的树结构json串
     * @param boolean $CntExceeded 整条链路的 span 数量是否超过限制
     * @param boolean $QueryTimeout 是否有内部查询超时
     * @param integer $SpanTotalCnt 链路中 span 总数量
     * @param array $FilterViewTagValues 过滤视图的标签值列表
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
        if (array_key_exists("TreeData",$param) and $param["TreeData"] !== null) {
            $this->TreeData = $param["TreeData"];
        }

        if (array_key_exists("ChartData",$param) and $param["ChartData"] !== null) {
            $this->ChartData = new ChartData();
            $this->ChartData->deserialize($param["ChartData"]);
        }

        if (array_key_exists("TraceOverview",$param) and $param["TraceOverview"] !== null) {
            $this->TraceOverview = new TraceOverview();
            $this->TraceOverview->deserialize($param["TraceOverview"]);
        }

        if (array_key_exists("CompressedTreeData",$param) and $param["CompressedTreeData"] !== null) {
            $this->CompressedTreeData = $param["CompressedTreeData"];
        }

        if (array_key_exists("CntExceeded",$param) and $param["CntExceeded"] !== null) {
            $this->CntExceeded = $param["CntExceeded"];
        }

        if (array_key_exists("QueryTimeout",$param) and $param["QueryTimeout"] !== null) {
            $this->QueryTimeout = $param["QueryTimeout"];
        }

        if (array_key_exists("SpanTotalCnt",$param) and $param["SpanTotalCnt"] !== null) {
            $this->SpanTotalCnt = $param["SpanTotalCnt"];
        }

        if (array_key_exists("FilterViewTagValues",$param) and $param["FilterViewTagValues"] !== null) {
            $this->FilterViewTagValues = [];
            foreach ($param["FilterViewTagValues"] as $key => $value){
                $obj = new TagValues();
                $obj->deserialize($value);
                array_push($this->FilterViewTagValues, $obj);
            }
        }
    }
}
