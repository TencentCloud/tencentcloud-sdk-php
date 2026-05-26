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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMemoryPlusSpace请求参数结构体
 *
 * @method string getName() 获取<p>Memory 实例的自定义名称，用于唯一标识和管理实例。支持 60 个字符内的中英文、数字、中划线（-）及下划线（_）。</p>
 * @method void setName(string $Name) 设置<p>Memory 实例的自定义名称，用于唯一标识和管理实例。支持 60 个字符内的中英文、数字、中划线（-）及下划线（_）。</p>
 * @method string getDescription() 获取<p>emory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。长度限制为 0-200 个字符。</p>
 * @method void setDescription(string $Description) 设置<p>emory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。长度限制为 0-200 个字符。</p>
 * @method array getResourceTags() 获取<p>以键值对（Key-Value）形式为 Memory 实例绑定的标签，用于项目管理、成本分摊、环境隔离等场景。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>以键值对（Key-Value）形式为 Memory 实例绑定的标签，用于项目管理、成本分摊、环境隔离等场景。</p>
 * @method integer getGoodsNum() 获取<p>单次批量创建 Memory 实例的数量。取值范围为 1-50。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>单次批量创建 Memory 实例的数量。取值范围为 1-50。</p>
 */
class CreateMemoryPlusSpaceRequest extends AbstractModel
{
    /**
     * @var string <p>Memory 实例的自定义名称，用于唯一标识和管理实例。支持 60 个字符内的中英文、数字、中划线（-）及下划线（_）。</p>
     */
    public $Name;

    /**
     * @var string <p>emory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。长度限制为 0-200 个字符。</p>
     */
    public $Description;

    /**
     * @var array <p>以键值对（Key-Value）形式为 Memory 实例绑定的标签，用于项目管理、成本分摊、环境隔离等场景。</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>单次批量创建 Memory 实例的数量。取值范围为 1-50。</p>
     */
    public $GoodsNum;

    /**
     * @param string $Name <p>Memory 实例的自定义名称，用于唯一标识和管理实例。支持 60 个字符内的中英文、数字、中划线（-）及下划线（_）。</p>
     * @param string $Description <p>emory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。长度限制为 0-200 个字符。</p>
     * @param array $ResourceTags <p>以键值对（Key-Value）形式为 Memory 实例绑定的标签，用于项目管理、成本分摊、环境隔离等场景。</p>
     * @param integer $GoodsNum <p>单次批量创建 Memory 实例的数量。取值范围为 1-50。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }
    }
}
