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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePvList请求参数结构体
 *
 * @method integer getProjectId() 获取<p>ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>ID</p>
 * @method string getEndTime() 获取<p>查询结束时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
 * @method string getStartTime() 获取<p>查询开始时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
 * @method string getDimension() 获取<p>对PV指标的查询维度。获取day：d，   获取min则不填。</p>
 * @method void setDimension(string $Dimension) 设置<p>对PV指标的查询维度。获取day：d，   获取min则不填。</p>
 */
class DescribePvListRequest extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>查询结束时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
     */
    public $EndTime;

    /**
     * @var string <p>查询开始时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
     */
    public $StartTime;

    /**
     * @var string <p>对PV指标的查询维度。获取day：d，   获取min则不填。</p>
     */
    public $Dimension;

    /**
     * @param integer $ProjectId <p>ID</p>
     * @param string $EndTime <p>查询结束时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
     * @param string $StartTime <p>查询开始时间（必填）。</p><p>参数格式：日维度继续支持 YYYYMMDD，也支持带时区的 RFC3339。</p><p>入参限制：仅 Dimension=d 支持 RFC3339，须等于北京时间 00:00:00。</p><p>等价日期的查询结果和返回字段一致。</p>
     * @param string $Dimension <p>对PV指标的查询维度。获取day：d，   获取min则不填。</p>
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

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
