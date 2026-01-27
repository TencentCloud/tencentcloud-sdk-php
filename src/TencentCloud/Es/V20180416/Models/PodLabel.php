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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod标签
 *
 * @method string getLabelKey() 获取标签键，支持大小写字母、数字、以及-_./，最多支持63个字符
 * @method void setLabelKey(string $LabelKey) 设置标签键，支持大小写字母、数字、以及-_./，最多支持63个字符
 * @method string getLabelValue() 获取标签值，支持大小写字母、数字、以及-_./，最多支持63个字符
 * @method void setLabelValue(string $LabelValue) 设置标签值，支持大小写字母、数字、以及-_./，最多支持63个字符
 */
class PodLabel extends AbstractModel
{
    /**
     * @var string 标签键，支持大小写字母、数字、以及-_./，最多支持63个字符
     */
    public $LabelKey;

    /**
     * @var string 标签值，支持大小写字母、数字、以及-_./，最多支持63个字符
     */
    public $LabelValue;

    /**
     * @param string $LabelKey 标签键，支持大小写字母、数字、以及-_./，最多支持63个字符
     * @param string $LabelValue 标签值，支持大小写字母、数字、以及-_./，最多支持63个字符
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
        if (array_key_exists("LabelKey",$param) and $param["LabelKey"] !== null) {
            $this->LabelKey = $param["LabelKey"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}
