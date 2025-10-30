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
 * ModifyLaneRule请求参数结构体
 *
 * @method string getRuleId() 获取灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
 * @method void setRuleId(string $RuleId) 设置灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
 * @method string getRuleName() 获取灰度发布规则名称，最多支持60个字符，支持中英文字符。
 * @method void setRuleName(string $RuleName) 设置灰度发布规则名称，最多支持60个字符，支持中英文字符。
 * @method string getRemark() 获取灰度发布规则备注，最多支持200个字符。
 * @method void setRemark(string $Remark) 设置灰度发布规则备注，最多支持200个字符。
 * @method array getRuleTagList() 获取灰度发布规则标签列表。
 * @method void setRuleTagList(array $RuleTagList) 设置灰度发布规则标签列表。
 * @method string getRuleTagRelationship() 获取灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或
 * @method void setRuleTagRelationship(string $RuleTagRelationship) 设置灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或
 * @method string getLaneId() 获取泳道配置ID。该参数可以通过调用 [DescribeLanes](https://cloud.tencent.com/document/product/649/44504) 的返回值中的 LaneId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lane)查看；也可以调用[CreateLane](https://cloud.tencent.com/document/product/649/44508)创建新的泳道配置。
 * @method void setLaneId(string $LaneId) 设置泳道配置ID。该参数可以通过调用 [DescribeLanes](https://cloud.tencent.com/document/product/649/44504) 的返回值中的 LaneId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lane)查看；也可以调用[CreateLane](https://cloud.tencent.com/document/product/649/44508)创建新的泳道配置。
 * @method boolean getEnable() 获取开启状态。
- true：开启
- false：关闭
 * @method void setEnable(boolean $Enable) 设置开启状态。
- true：开启
- false：关闭
 */
class ModifyLaneRuleRequest extends AbstractModel
{
    /**
     * @var string 灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
     */
    public $RuleId;

    /**
     * @var string 灰度发布规则名称，最多支持60个字符，支持中英文字符。
     */
    public $RuleName;

    /**
     * @var string 灰度发布规则备注，最多支持200个字符。
     */
    public $Remark;

    /**
     * @var array 灰度发布规则标签列表。
     */
    public $RuleTagList;

    /**
     * @var string 灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或
     */
    public $RuleTagRelationship;

    /**
     * @var string 泳道配置ID。该参数可以通过调用 [DescribeLanes](https://cloud.tencent.com/document/product/649/44504) 的返回值中的 LaneId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lane)查看；也可以调用[CreateLane](https://cloud.tencent.com/document/product/649/44508)创建新的泳道配置。
     */
    public $LaneId;

    /**
     * @var boolean 开启状态。
- true：开启
- false：关闭
     */
    public $Enable;

    /**
     * @param string $RuleId 灰度发布规则ID。该参数可以通过调用 [DescribeLaneRules](https://cloud.tencent.com/document/product/649/44505) 的返回值中的 RuleId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lanerule)查看；也可以调用[CreateLaneRule](https://cloud.tencent.com/document/product/649/44507)创建新的灰度发布规则。
     * @param string $RuleName 灰度发布规则名称，最多支持60个字符，支持中英文字符。
     * @param string $Remark 灰度发布规则备注，最多支持200个字符。
     * @param array $RuleTagList 灰度发布规则标签列表。
     * @param string $RuleTagRelationship 灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或
     * @param string $LaneId 泳道配置ID。该参数可以通过调用 [DescribeLanes](https://cloud.tencent.com/document/product/649/44504) 的返回值中的 LaneId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&subTab=lane)查看；也可以调用[CreateLane](https://cloud.tencent.com/document/product/649/44508)创建新的泳道配置。
     * @param boolean $Enable 开启状态。
- true：开启
- false：关闭
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleTagList",$param) and $param["RuleTagList"] !== null) {
            $this->RuleTagList = [];
            foreach ($param["RuleTagList"] as $key => $value){
                $obj = new LaneRuleTag();
                $obj->deserialize($value);
                array_push($this->RuleTagList, $obj);
            }
        }

        if (array_key_exists("RuleTagRelationship",$param) and $param["RuleTagRelationship"] !== null) {
            $this->RuleTagRelationship = $param["RuleTagRelationship"];
        }

        if (array_key_exists("LaneId",$param) and $param["LaneId"] !== null) {
            $this->LaneId = $param["LaneId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
