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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditKeywordLibs请求参数结构体
 *
 * @method integer getOffset() 获取<p>获取偏移量。</p>
 * @method void setOffset(integer $Offset) 设置<p>获取偏移量。</p>
 * @method integer getLimit() 获取<p>获取条数。</p>
 * @method void setLimit(integer $Limit) 设置<p>获取条数。</p>
 * @method string getName() 获取<p>根据关键词库名进行模糊查询。<br>传递空字符串时，忽略。</p>
 * @method void setName(string $Name) 设置<p>根据关键词库名进行模糊查询。<br>传递空字符串时，忽略。</p>
 */
class DescribeAuditKeywordLibsRequest extends AbstractModel
{
    /**
     * @var integer <p>获取偏移量。</p>
     */
    public $Offset;

    /**
     * @var integer <p>获取条数。</p>
     */
    public $Limit;

    /**
     * @var string <p>根据关键词库名进行模糊查询。<br>传递空字符串时，忽略。</p>
     */
    public $Name;

    /**
     * @param integer $Offset <p>获取偏移量。</p>
     * @param integer $Limit <p>获取条数。</p>
     * @param string $Name <p>根据关键词库名进行模糊查询。<br>传递空字符串时，忽略。</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
