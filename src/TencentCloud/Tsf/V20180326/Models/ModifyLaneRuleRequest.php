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
 * @method string getRuleId() 获取<p>灰度发布规则ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44505">DescribeLaneRules</a> 的返回值中的 RuleId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lanerule">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44507">CreateLaneRule</a>创建新的灰度发布规则。</p>
 * @method void setRuleId(string $RuleId) 设置<p>灰度发布规则ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44505">DescribeLaneRules</a> 的返回值中的 RuleId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lanerule">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44507">CreateLaneRule</a>创建新的灰度发布规则。</p>
 * @method string getRuleName() 获取<p>灰度发布规则名称，最多支持60个字符，支持中英文字符。</p>
 * @method void setRuleName(string $RuleName) 设置<p>灰度发布规则名称，最多支持60个字符，支持中英文字符。</p>
 * @method string getRemark() 获取<p>灰度发布规则备注，最多支持200个字符。</p>
 * @method void setRemark(string $Remark) 设置<p>灰度发布规则备注，最多支持200个字符。</p>
 * @method array getRuleTagList() 获取<p>灰度发布规则标签列表。</p>
 * @method void setRuleTagList(array $RuleTagList) 设置<p>灰度发布规则标签列表。</p>
 * @method string getLaneId() 获取<p>泳道配置ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44504">DescribeLanes</a> 的返回值中的 LaneId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lane">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44508">CreateLane</a>创建新的泳道配置。</p>
 * @method void setLaneId(string $LaneId) 设置<p>泳道配置ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44504">DescribeLanes</a> 的返回值中的 LaneId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lane">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44508">CreateLane</a>创建新的泳道配置。</p>
 * @method boolean getEnable() 获取<p>开启状态。</p><ul><li>true：开启</li><li>false：关闭</li></ul>
 * @method void setEnable(boolean $Enable) 设置<p>开启状态。</p><ul><li>true：开启</li><li>false：关闭</li></ul>
 * @method string getRuleTagRelationship() 获取<p>灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或</p>
 * @method void setRuleTagRelationship(string $RuleTagRelationship) 设置<p>灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或</p>
 */
class ModifyLaneRuleRequest extends AbstractModel
{
    /**
     * @var string <p>灰度发布规则ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44505">DescribeLaneRules</a> 的返回值中的 RuleId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lanerule">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44507">CreateLaneRule</a>创建新的灰度发布规则。</p>
     */
    public $RuleId;

    /**
     * @var string <p>灰度发布规则名称，最多支持60个字符，支持中英文字符。</p>
     */
    public $RuleName;

    /**
     * @var string <p>灰度发布规则备注，最多支持200个字符。</p>
     */
    public $Remark;

    /**
     * @var array <p>灰度发布规则标签列表。</p>
     */
    public $RuleTagList;

    /**
     * @var string <p>泳道配置ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44504">DescribeLanes</a> 的返回值中的 LaneId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lane">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44508">CreateLane</a>创建新的泳道配置。</p>
     */
    public $LaneId;

    /**
     * @var boolean <p>开启状态。</p><ul><li>true：开启</li><li>false：关闭</li></ul>
     */
    public $Enable;

    /**
     * @var string <p>灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或</p>
     */
    public $RuleTagRelationship;

    /**
     * @param string $RuleId <p>灰度发布规则ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44505">DescribeLaneRules</a> 的返回值中的 RuleId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lanerule">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44507">CreateLaneRule</a>创建新的灰度发布规则。</p>
     * @param string $RuleName <p>灰度发布规则名称，最多支持60个字符，支持中英文字符。</p>
     * @param string $Remark <p>灰度发布规则备注，最多支持200个字符。</p>
     * @param array $RuleTagList <p>灰度发布规则标签列表。</p>
     * @param string $LaneId <p>泳道配置ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/44504">DescribeLanes</a> 的返回值中的 LaneId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=grayscale&amp;subTab=lane">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/44508">CreateLane</a>创建新的泳道配置。</p>
     * @param boolean $Enable <p>开启状态。</p><ul><li>true：开启</li><li>false：关闭</li></ul>
     * @param string $RuleTagRelationship <p>灰度发布规则标签关系。- RELEATION_AND：与- RELEATION_OR：或</p>
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

        if (array_key_exists("LaneId",$param) and $param["LaneId"] !== null) {
            $this->LaneId = $param["LaneId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RuleTagRelationship",$param) and $param["RuleTagRelationship"] !== null) {
            $this->RuleTagRelationship = $param["RuleTagRelationship"];
        }
    }
}
