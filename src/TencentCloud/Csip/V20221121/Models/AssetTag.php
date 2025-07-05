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
 * 安全中心资产标签
 *
 * @method string getTagKey() 获取标签的key值,可以是字母、数字、下划线
 * @method void setTagKey(string $TagKey) 设置标签的key值,可以是字母、数字、下划线
 * @method string getTagValue() 获取标签的vale值,可以是字母、数字、下划线
 * @method void setTagValue(string $TagValue) 设置标签的vale值,可以是字母、数字、下划线
 */
class AssetTag extends AbstractModel
{
    /**
     * @var string 标签的key值,可以是字母、数字、下划线
     */
    public $TagKey;

    /**
     * @var string 标签的vale值,可以是字母、数字、下划线
     */
    public $TagValue;

    /**
     * @param string $TagKey 标签的key值,可以是字母、数字、下划线
     * @param string $TagValue 标签的vale值,可以是字母、数字、下划线
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
