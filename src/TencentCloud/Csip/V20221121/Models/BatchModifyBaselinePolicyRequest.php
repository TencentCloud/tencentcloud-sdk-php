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
 * BatchModifyBaselinePolicy请求参数结构体
 *
 * @method array getPolicyIDList() 获取<p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
 * @method void setPolicyIDList(array $PolicyIDList) 设置<p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
 * @method CycleScanConf getCycleScanConf() 获取<p>周期扫描配置；不修改时可省略。Enable=1 时必须同时传 IntervalType 与 IntervalValueList。</p>
 * @method void setCycleScanConf(CycleScanConf $CycleScanConf) 设置<p>周期扫描配置；不修改时可省略。Enable=1 时必须同时传 IntervalType 与 IntervalValueList。</p>
 * @method boolean getAutoSyncItem() 获取<p>新增内置检测项自动同步开关。true 自动加入，false 不加入。</p>
 * @method void setAutoSyncItem(boolean $AutoSyncItem) 设置<p>新增内置检测项自动同步开关。true 自动加入，false 不加入。</p>
 * @method array getCategoryConf() 获取<p>分类 / 子分类 / 检测项命中配置；不修改时可省略。</p>
 * @method void setCategoryConf(array $CategoryConf) 设置<p>分类 / 子分类 / 检测项命中配置；不修改时可省略。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getCustomItemConf() 获取<p>自定义检测项取值配置列表；不修改时可省略。每个元素 RuleID 与 CustomItemID 不能同时为 0。</p>
 * @method void setCustomItemConf(array $CustomItemConf) 设置<p>自定义检测项取值配置列表；不修改时可省略。每个元素 RuleID 与 CustomItemID 不能同时为 0。</p>
 */
class BatchModifyBaselinePolicyRequest extends AbstractModel
{
    /**
     * @var array <p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
     */
    public $PolicyIDList;

    /**
     * @var CycleScanConf <p>周期扫描配置；不修改时可省略。Enable=1 时必须同时传 IntervalType 与 IntervalValueList。</p>
     */
    public $CycleScanConf;

    /**
     * @var boolean <p>新增内置检测项自动同步开关。true 自动加入，false 不加入。</p>
     */
    public $AutoSyncItem;

    /**
     * @var array <p>分类 / 子分类 / 检测项命中配置；不修改时可省略。</p>
     */
    public $CategoryConf;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>自定义检测项取值配置列表；不修改时可省略。每个元素 RuleID 与 CustomItemID 不能同时为 0。</p>
     */
    public $CustomItemConf;

    /**
     * @param array $PolicyIDList <p>待修改的基线策略 ID 列表，不可为空且元素不可为 0。</p>
     * @param CycleScanConf $CycleScanConf <p>周期扫描配置；不修改时可省略。Enable=1 时必须同时传 IntervalType 与 IntervalValueList。</p>
     * @param boolean $AutoSyncItem <p>新增内置检测项自动同步开关。true 自动加入，false 不加入。</p>
     * @param array $CategoryConf <p>分类 / 子分类 / 检测项命中配置；不修改时可省略。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $CustomItemConf <p>自定义检测项取值配置列表；不修改时可省略。每个元素 RuleID 与 CustomItemID 不能同时为 0。</p>
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
        if (array_key_exists("PolicyIDList",$param) and $param["PolicyIDList"] !== null) {
            $this->PolicyIDList = $param["PolicyIDList"];
        }

        if (array_key_exists("CycleScanConf",$param) and $param["CycleScanConf"] !== null) {
            $this->CycleScanConf = new CycleScanConf();
            $this->CycleScanConf->deserialize($param["CycleScanConf"]);
        }

        if (array_key_exists("AutoSyncItem",$param) and $param["AutoSyncItem"] !== null) {
            $this->AutoSyncItem = $param["AutoSyncItem"];
        }

        if (array_key_exists("CategoryConf",$param) and $param["CategoryConf"] !== null) {
            $this->CategoryConf = [];
            foreach ($param["CategoryConf"] as $key => $value){
                $obj = new BaselinePolicySystemCategoryConf();
                $obj->deserialize($value);
                array_push($this->CategoryConf, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CustomItemConf",$param) and $param["CustomItemConf"] !== null) {
            $this->CustomItemConf = [];
            foreach ($param["CustomItemConf"] as $key => $value){
                $obj = new BaselineCustomItemConf();
                $obj->deserialize($value);
                array_push($this->CustomItemConf, $obj);
            }
        }
    }
}
