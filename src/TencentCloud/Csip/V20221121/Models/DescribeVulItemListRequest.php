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
 * DescribeVulItemList请求参数结构体
 *
 * @method array getFilters() 获取<p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>Keyword：关键字模糊搜索（对漏洞名/CVE/VulID 模糊匹配）<br>Category：漏洞分类（LINUX/WINDOWS/WEB_CMS/APPLICATION/EMERGENCY）<br>Level：威胁等级<br>VPRLevel：VPR 评级<br>Label：风险标签<br>CheckMethod：检测方式（VERSION_COMPARE/POC/VERSION_COMPARE_POC）<br>DefendStatus：漏洞防御状态（ENABLED/NOT_SUPPORTED/NOT_ENABLED）<br>SupportFix：是否支持一键修复（true/false）<br>Emergency:  紧急漏洞获取 (0/1)<br>Top5HotVul: 热点top 5 漏洞 (0/1)</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>Keyword：关键字模糊搜索（对漏洞名/CVE/VulID 模糊匹配）<br>Category：漏洞分类（LINUX/WINDOWS/WEB_CMS/APPLICATION/EMERGENCY）<br>Level：威胁等级<br>VPRLevel：VPR 评级<br>Label：风险标签<br>CheckMethod：检测方式（VERSION_COMPARE/POC/VERSION_COMPARE_POC）<br>DefendStatus：漏洞防御状态（ENABLED/NOT_SUPPORTED/NOT_ENABLED）<br>SupportFix：是否支持一键修复（true/false）<br>Emergency:  紧急漏洞获取 (0/1)<br>Top5HotVul: 热点top 5 漏洞 (0/1)</p>
 * @method integer getLimit() 获取<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method integer getOffset() 获取<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method string getOrder() 获取<p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
 * @method string getBy() 获取<p>排序字段<br>枚举值：<br>PublishTime：漏洞披露时间<br>默认值：PublishTime</p>
 * @method void setBy(string $By) 设置<p>排序字段<br>枚举值：<br>PublishTime：漏洞披露时间<br>默认值：PublishTime</p>
 */
class DescribeVulItemListRequest extends AbstractModel
{
    /**
     * @var array <p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>Keyword：关键字模糊搜索（对漏洞名/CVE/VulID 模糊匹配）<br>Category：漏洞分类（LINUX/WINDOWS/WEB_CMS/APPLICATION/EMERGENCY）<br>Level：威胁等级<br>VPRLevel：VPR 评级<br>Label：风险标签<br>CheckMethod：检测方式（VERSION_COMPARE/POC/VERSION_COMPARE_POC）<br>DefendStatus：漏洞防御状态（ENABLED/NOT_SUPPORTED/NOT_ENABLED）<br>SupportFix：是否支持一键修复（true/false）<br>Emergency:  紧急漏洞获取 (0/1)<br>Top5HotVul: 热点top 5 漏洞 (0/1)</p>
     */
    public $Filters;

    /**
     * @var integer <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段<br>枚举值：<br>PublishTime：漏洞披露时间<br>默认值：PublishTime</p>
     */
    public $By;

    /**
     * @param array $Filters <p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>Keyword：关键字模糊搜索（对漏洞名/CVE/VulID 模糊匹配）<br>Category：漏洞分类（LINUX/WINDOWS/WEB_CMS/APPLICATION/EMERGENCY）<br>Level：威胁等级<br>VPRLevel：VPR 评级<br>Label：风险标签<br>CheckMethod：检测方式（VERSION_COMPARE/POC/VERSION_COMPARE_POC）<br>DefendStatus：漏洞防御状态（ENABLED/NOT_SUPPORTED/NOT_ENABLED）<br>SupportFix：是否支持一键修复（true/false）<br>Emergency:  紧急漏洞获取 (0/1)<br>Top5HotVul: 热点top 5 漏洞 (0/1)</p>
     * @param integer $Limit <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     * @param integer $Offset <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param string $Order <p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
     * @param string $By <p>排序字段<br>枚举值：<br>PublishTime：漏洞披露时间<br>默认值：PublishTime</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
