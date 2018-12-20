<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCategory() 获取对应的类别名称 porn, politics, terror
 * @method void setCategory(string $Category) 设置对应的类别名称 porn, politics, terror
 * @method string getCode() 获取对应子类别状态码
 * @method void setCode(string $Code) 设置对应子类别状态码
 * @method string getCodeDescription() 获取对应子类别状态码信息描述
 * @method void setCodeDescription(string $CodeDescription) 设置对应子类别状态码信息描述
 * @method float getConfidence() 获取对应识别种类的置信度
 * @method void setConfidence(float $Confidence) 设置对应识别种类的置信度
 * @method string getSuggestion() 获取此字段为保留字段，目前统一返回pass。
 * @method void setSuggestion(string $Suggestion) 设置此字段为保留字段，目前统一返回pass。
 * @method array getDetailSet() 获取审核详细内容
 * @method void setDetailSet(array $DetailSet) 设置审核详细内容
 */

/**
 *人脸融合鉴黄鉴政返回参数item
 */
class FuseFaceReviewResult extends AbstractModel
{
    /**
     * @var string 对应的类别名称 porn, politics, terror
     */
    public $Category;

    /**
     * @var string 对应子类别状态码
     */
    public $Code;

    /**
     * @var string 对应子类别状态码信息描述
     */
    public $CodeDescription;

    /**
     * @var float 对应识别种类的置信度
     */
    public $Confidence;

    /**
     * @var string 此字段为保留字段，目前统一返回pass。
     */
    public $Suggestion;

    /**
     * @var array 审核详细内容
     */
    public $DetailSet;
    /**
     * @param string $Category 对应的类别名称 porn, politics, terror
     * @param string $Code 对应子类别状态码
     * @param string $CodeDescription 对应子类别状态码信息描述
     * @param float $Confidence 对应识别种类的置信度
     * @param string $Suggestion 此字段为保留字段，目前统一返回pass。
     * @param array $DetailSet 审核详细内容
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CodeDescription",$param) and $param["CodeDescription"] !== null) {
            $this->CodeDescription = $param["CodeDescription"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new FuseFaceReviewDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }
    }
}
