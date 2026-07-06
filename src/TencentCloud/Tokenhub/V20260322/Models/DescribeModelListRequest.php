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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelList请求参数结构体
 *
 * @method array getModelIds() 获取<p>模型 ID 列表。最多支持 10 个，不支持重复。</p>
 * @method void setModelIds(array $ModelIds) 设置<p>模型 ID 列表。最多支持 10 个，不支持重复。</p>
 * @method array getModelNames() 获取<p>模型名称列表。最多支持 10 个，不支持重复。</p>
 * @method void setModelNames(array $ModelNames) 设置<p>模型名称列表。最多支持 10 个，不支持重复。</p>
 * @method array getModelTypes() 获取<p>模型类型列表，筛选指定类型的模型。最多支持 10 个，不支持重复。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p>
 * @method void setModelTypes(array $ModelTypes) 设置<p>模型类型列表，筛选指定类型的模型。最多支持 10 个，不支持重复。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p>
 * @method array getTags() 获取<p>模型标签</p>
 * @method void setTags(array $Tags) 设置<p>模型标签</p>
 * @method integer getLimit() 获取<p>返回数量，默认为 20，最大值为 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为 20，最大值为 100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为 0。</p>
 */
class DescribeModelListRequest extends AbstractModel
{
    /**
     * @var array <p>模型 ID 列表。最多支持 10 个，不支持重复。</p>
     */
    public $ModelIds;

    /**
     * @var array <p>模型名称列表。最多支持 10 个，不支持重复。</p>
     */
    public $ModelNames;

    /**
     * @var array <p>模型类型列表，筛选指定类型的模型。最多支持 10 个，不支持重复。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p>
     */
    public $ModelTypes;

    /**
     * @var array <p>模型标签</p>
     */
    public $Tags;

    /**
     * @var integer <p>返回数量，默认为 20，最大值为 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为 0。</p>
     */
    public $Offset;

    /**
     * @param array $ModelIds <p>模型 ID 列表。最多支持 10 个，不支持重复。</p>
     * @param array $ModelNames <p>模型名称列表。最多支持 10 个，不支持重复。</p>
     * @param array $ModelTypes <p>模型类型列表，筛选指定类型的模型。最多支持 10 个，不支持重复。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p>
     * @param array $Tags <p>模型标签</p>
     * @param integer $Limit <p>返回数量，默认为 20，最大值为 100。</p>
     * @param integer $Offset <p>偏移量，默认为 0。</p>
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
        if (array_key_exists("ModelIds",$param) and $param["ModelIds"] !== null) {
            $this->ModelIds = $param["ModelIds"];
        }

        if (array_key_exists("ModelNames",$param) and $param["ModelNames"] !== null) {
            $this->ModelNames = $param["ModelNames"];
        }

        if (array_key_exists("ModelTypes",$param) and $param["ModelTypes"] !== null) {
            $this->ModelTypes = $param["ModelTypes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
