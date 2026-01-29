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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLaneRules请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，默认为20，最大值为500。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为500。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getSearchWord() 获取搜索关键词。
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词。
 * @method string getRuleId() 获取灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
 * @method void setRuleId(string $RuleId) 设置灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
 * @method array getRuleIdList() 获取灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
 * @method void setRuleIdList(array $RuleIdList) 设置灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
 * @method boolean getQueryAll() 获取查询全部标记
 * @method void setQueryAll(boolean $QueryAll) 设置查询全部标记
 */
class DescribeLaneRulesRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认为20，最大值为500。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 搜索关键词。
     */
    public $SearchWord;

    /**
     * @var string 灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
     */
    public $RuleId;

    /**
     * @var array 灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
     */
    public $RuleIdList;

    /**
     * @var boolean 查询全部标记
     */
    public $QueryAll;

    /**
     * @param integer $Limit 返回数量，默认为20，最大值为500。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $SearchWord 搜索关键词。
     * @param string $RuleId 灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
     * @param array $RuleIdList 灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
     * @param boolean $QueryAll 查询全部标记
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("QueryAll",$param) and $param["QueryAll"] !== null) {
            $this->QueryAll = $param["QueryAll"];
        }
    }
}
