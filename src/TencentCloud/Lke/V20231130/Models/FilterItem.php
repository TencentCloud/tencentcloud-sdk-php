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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 筛选条件。
 *
 * @method string getFilterKey() 获取筛选内容。
例如筛选审核状态可以使用"AuditStatus"
 * @method void setFilterKey(string $FilterKey) 设置筛选内容。
例如筛选审核状态可以使用"AuditStatus"
 * @method array getFilterValue() 获取筛选条件。
例如对于筛选内容"AuditStatus"，可使用筛选条件:
"ContentFailed":"内容审核失败",
"PictureFailed":"图片审核失败",
"ContentAndPictureFailed":"图片和内容审核失败",
 * @method void setFilterValue(array $FilterValue) 设置筛选条件。
例如对于筛选内容"AuditStatus"，可使用筛选条件:
"ContentFailed":"内容审核失败",
"PictureFailed":"图片审核失败",
"ContentAndPictureFailed":"图片和内容审核失败",
 */
class FilterItem extends AbstractModel
{
    /**
     * @var string 筛选内容。
例如筛选审核状态可以使用"AuditStatus"
     */
    public $FilterKey;

    /**
     * @var array 筛选条件。
例如对于筛选内容"AuditStatus"，可使用筛选条件:
"ContentFailed":"内容审核失败",
"PictureFailed":"图片审核失败",
"ContentAndPictureFailed":"图片和内容审核失败",
     */
    public $FilterValue;

    /**
     * @param string $FilterKey 筛选内容。
例如筛选审核状态可以使用"AuditStatus"
     * @param array $FilterValue 筛选条件。
例如对于筛选内容"AuditStatus"，可使用筛选条件:
"ContentFailed":"内容审核失败",
"PictureFailed":"图片审核失败",
"ContentAndPictureFailed":"图片和内容审核失败",
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
        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("FilterValue",$param) and $param["FilterValue"] !== null) {
            $this->FilterValue = $param["FilterValue"];
        }
    }
}
