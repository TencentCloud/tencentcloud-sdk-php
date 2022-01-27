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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体更新事件。
 *
 * @method string getMaterialId() 获取媒体 Id。
 * @method void setMaterialId(string $MaterialId) 设置媒体 Id。
 * @method string getName() 获取更新后的媒体名称。如未更新则为空。
 * @method void setName(string $Name) 设置更新后的媒体名称。如未更新则为空。
 * @method array getPresetTagIdSet() 获取更新后的媒体预置标签列表。如未更新媒体预置标签，则该字段为空数组。
 * @method void setPresetTagIdSet(array $PresetTagIdSet) 设置更新后的媒体预置标签列表。如未更新媒体预置标签，则该字段为空数组。
 * @method array getTagSet() 获取更新后的媒体自定义标签列表。如未更新媒体自定义标签，则该字段为空数组。
 * @method void setTagSet(array $TagSet) 设置更新后的媒体自定义标签列表。如未更新媒体自定义标签，则该字段为空数组。
 */
class MaterialModifiedEvent extends AbstractModel
{
    /**
     * @var string 媒体 Id。
     */
    public $MaterialId;

    /**
     * @var string 更新后的媒体名称。如未更新则为空。
     */
    public $Name;

    /**
     * @var array 更新后的媒体预置标签列表。如未更新媒体预置标签，则该字段为空数组。
     */
    public $PresetTagIdSet;

    /**
     * @var array 更新后的媒体自定义标签列表。如未更新媒体自定义标签，则该字段为空数组。
     */
    public $TagSet;

    /**
     * @param string $MaterialId 媒体 Id。
     * @param string $Name 更新后的媒体名称。如未更新则为空。
     * @param array $PresetTagIdSet 更新后的媒体预置标签列表。如未更新媒体预置标签，则该字段为空数组。
     * @param array $TagSet 更新后的媒体自定义标签列表。如未更新媒体自定义标签，则该字段为空数组。
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PresetTagIdSet",$param) and $param["PresetTagIdSet"] !== null) {
            $this->PresetTagIdSet = $param["PresetTagIdSet"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }
    }
}
