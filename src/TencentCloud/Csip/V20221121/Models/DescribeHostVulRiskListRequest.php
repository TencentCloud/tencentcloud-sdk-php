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
 * DescribeHostVulRiskList请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>CVSSLevel：CVSS level过滤<br>Keyword：关键字模糊搜索（多词使用｜分隔，对漏洞名/CVEID 模糊匹配）<br>Category：漏洞分类（LINUX/WEB_CMS/APPLICATION/EMERGENCY）<br>VPRLevel：VPR 评级<br>RiskStatus：修复状态<br>Label：VPR风险标签<br>InstanceID：实例ID<br>CheckMethod：检测方法</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>CVSSLevel：CVSS level过滤<br>Keyword：关键字模糊搜索（多词使用｜分隔，对漏洞名/CVEID 模糊匹配）<br>Category：漏洞分类（LINUX/WEB_CMS/APPLICATION/EMERGENCY）<br>VPRLevel：VPR 评级<br>RiskStatus：修复状态<br>Label：VPR风险标签<br>InstanceID：实例ID<br>CheckMethod：检测方法</p>
 * @method integer getLimit() 获取<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method integer getOffset() 获取<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method string getOrder() 获取<p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
 * @method string getBy() 获取<p>排序字段<br>枚举值：<br>LatestScanTime：最近扫描时间<br>默认值：LatestScanTime</p>
 * @method void setBy(string $By) 设置<p>排序字段<br>枚举值：<br>LatestScanTime：最近扫描时间<br>默认值：LatestScanTime</p>
 */
class DescribeHostVulRiskListRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>CVSSLevel：CVSS level过滤<br>Keyword：关键字模糊搜索（多词使用｜分隔，对漏洞名/CVEID 模糊匹配）<br>Category：漏洞分类（LINUX/WEB_CMS/APPLICATION/EMERGENCY）<br>VPRLevel：VPR 评级<br>RiskStatus：修复状态<br>Label：VPR风险标签<br>InstanceID：实例ID<br>CheckMethod：检测方法</p>
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
     * @var string <p>排序字段<br>枚举值：<br>LatestScanTime：最近扫描时间<br>默认值：LatestScanTime</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>筛选条件数组，多条件之间为 AND 关系<br>支持的 Filter.Name：<br>CVSSLevel：CVSS level过滤<br>Keyword：关键字模糊搜索（多词使用｜分隔，对漏洞名/CVEID 模糊匹配）<br>Category：漏洞分类（LINUX/WEB_CMS/APPLICATION/EMERGENCY）<br>VPRLevel：VPR 评级<br>RiskStatus：修复状态<br>Label：VPR风险标签<br>InstanceID：实例ID<br>CheckMethod：检测方法</p>
     * @param integer $Limit <p>每页返回数量<br>取值范围：[1, 100]<br>默认值：10</p>
     * @param integer $Offset <p>分页偏移量<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param string $Order <p>排序方向<br>枚举值：<br>ASC：升序<br>DESC：降序<br>默认值：DESC</p>
     * @param string $By <p>排序字段<br>枚举值：<br>LatestScanTime：最近扫描时间<br>默认值：LatestScanTime</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
