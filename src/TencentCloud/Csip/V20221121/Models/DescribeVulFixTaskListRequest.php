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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixTaskList请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method integer getLimit() 获取<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method array getFilters() 获取<p>过滤条件<br>支持的Filter.Name：<br>TaskId - 精确匹配，按任务ID筛选<br>JobId - 精确匹配，按任务JobId筛选，对应后台任务系统的任务ID<br>FixStatus - 精确匹配，按修复状态筛选：0-初始化 1-修复中 2-修复成功 3-部分修复失败 4-全部修复失败 5-停止修复<br>StartTime - 范围匹配，修复启动时间范围，传入两个值表示起止时间<br>AppId - 精确匹配，按创建者AppId筛选<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>TaskName - 模糊匹配，按漏洞名称/CVE编号/KB补丁名称筛选，匹配任务关联的漏洞或KB补丁</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>支持的Filter.Name：<br>TaskId - 精确匹配，按任务ID筛选<br>JobId - 精确匹配，按任务JobId筛选，对应后台任务系统的任务ID<br>FixStatus - 精确匹配，按修复状态筛选：0-初始化 1-修复中 2-修复成功 3-部分修复失败 4-全部修复失败 5-停止修复<br>StartTime - 范围匹配，修复启动时间范围，传入两个值表示起止时间<br>AppId - 精确匹配，按创建者AppId筛选<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>TaskName - 模糊匹配，按漏洞名称/CVE编号/KB补丁名称筛选，匹配任务关联的漏洞或KB补丁</p>
 * @method string getOrder() 获取<p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序<br>CreateTime：按创建时间排序</p>
 * @method void setOrder(string $Order) 设置<p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序<br>CreateTime：按创建时间排序</p>
 * @method string getBy() 获取<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method void setBy(string $By) 设置<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class DescribeVulFixTaskListRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件<br>支持的Filter.Name：<br>TaskId - 精确匹配，按任务ID筛选<br>JobId - 精确匹配，按任务JobId筛选，对应后台任务系统的任务ID<br>FixStatus - 精确匹配，按修复状态筛选：0-初始化 1-修复中 2-修复成功 3-部分修复失败 4-全部修复失败 5-停止修复<br>StartTime - 范围匹配，修复启动时间范围，传入两个值表示起止时间<br>AppId - 精确匹配，按创建者AppId筛选<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>TaskName - 模糊匹配，按漏洞名称/CVE编号/KB补丁名称筛选，匹配任务关联的漏洞或KB补丁</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序<br>CreateTime：按创建时间排序</p>
     */
    public $Order;

    /**
     * @var string <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     */
    public $By;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param integer $Limit <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     * @param array $Filters <p>过滤条件<br>支持的Filter.Name：<br>TaskId - 精确匹配，按任务ID筛选<br>JobId - 精确匹配，按任务JobId筛选，对应后台任务系统的任务ID<br>FixStatus - 精确匹配，按修复状态筛选：0-初始化 1-修复中 2-修复成功 3-部分修复失败 4-全部修复失败 5-停止修复<br>StartTime - 范围匹配，修复启动时间范围，传入两个值表示起止时间<br>AppId - 精确匹配，按创建者AppId筛选<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>TaskName - 模糊匹配，按漏洞名称/CVE编号/KB补丁名称筛选，匹配任务关联的漏洞或KB补丁</p>
     * @param string $Order <p>排序字段<br>枚举值：<br>StartTime：按修复启动时间排序<br>EndTime：按修复结束时间排序<br>CreateTime：按创建时间排序</p>
     * @param string $By <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
