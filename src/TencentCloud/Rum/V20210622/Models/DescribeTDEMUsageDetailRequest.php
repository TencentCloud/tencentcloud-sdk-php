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
 * DescribeTDEMUsageDetail请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
 * @method string getEndTime() 获取<p>结束时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
 * @method string getKeyword() 获取<p>可选关键字，匹配业务系统名称、应用名称或应用 ID</p>
 * @method void setKeyword(string $Keyword) 设置<p>可选关键字，匹配业务系统名称、应用名称或应用 ID</p>
 * @method integer getOffset() 获取<p>分页偏移，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，默认 0</p>
 * @method integer getLimit() 获取<p>每页数量，默认 20，上限 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认 20，上限 100</p>
 * @method boolean getDemoMode() 获取<p>演示模式开关</p>
 * @method void setDemoMode(boolean $DemoMode) 设置<p>演示模式开关</p>
 */
class DescribeTDEMUsageDetailRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
     */
    public $EndTime;

    /**
     * @var string <p>可选关键字，匹配业务系统名称、应用名称或应用 ID</p>
     */
    public $Keyword;

    /**
     * @var integer <p>分页偏移，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认 20，上限 100</p>
     */
    public $Limit;

    /**
     * @var boolean <p>演示模式开关</p>
     */
    public $DemoMode;

    /**
     * @param string $StartTime <p>开始时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
     * @param string $EndTime <p>结束时间，YYYY-MM-DD HH:00:00（小时对齐，必填）</p>
     * @param string $Keyword <p>可选关键字，匹配业务系统名称、应用名称或应用 ID</p>
     * @param integer $Offset <p>分页偏移，默认 0</p>
     * @param integer $Limit <p>每页数量，默认 20，上限 100</p>
     * @param boolean $DemoMode <p>演示模式开关</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DemoMode",$param) and $param["DemoMode"] !== null) {
            $this->DemoMode = $param["DemoMode"];
        }
    }
}
