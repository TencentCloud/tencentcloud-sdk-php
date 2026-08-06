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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWhiteRule请求参数结构体
 *
 * @method array getWhiteIdList() 获取JSON string 数组，至少一项；元素取自 DescribeWhiteRule.Data[].WhiteId，可批量。
 * @method void setWhiteIdList(array $WhiteIdList) 设置JSON string 数组，至少一项；元素取自 DescribeWhiteRule.Data[].WhiteId，可批量。
 */
class DeleteWhiteRuleRequest extends AbstractModel
{
    /**
     * @var array JSON string 数组，至少一项；元素取自 DescribeWhiteRule.Data[].WhiteId，可批量。
     */
    public $WhiteIdList;

    /**
     * @param array $WhiteIdList JSON string 数组，至少一项；元素取自 DescribeWhiteRule.Data[].WhiteId，可批量。
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
        if (array_key_exists("WhiteIdList",$param) and $param["WhiteIdList"] !== null) {
            $this->WhiteIdList = $param["WhiteIdList"];
        }
    }
}
