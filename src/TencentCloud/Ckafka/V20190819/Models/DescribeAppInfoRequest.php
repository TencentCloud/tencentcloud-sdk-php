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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppInfo请求参数结构体
 *
 * @method integer getOffset() 获取偏移位置
 * @method void setOffset(integer $Offset) 设置偏移位置
 * @method integer getLimit() 获取本次查询用户数目最大数量限制，最大值为50，默认50
 * @method void setLimit(integer $Limit) 设置本次查询用户数目最大数量限制，最大值为50，默认50
 */
class DescribeAppInfoRequest extends AbstractModel
{
    /**
     * @var integer 偏移位置
     */
    public $Offset;

    /**
     * @var integer 本次查询用户数目最大数量限制，最大值为50，默认50
     */
    public $Limit;

    /**
     * @param integer $Offset 偏移位置
     * @param integer $Limit 本次查询用户数目最大数量限制，最大值为50，默认50
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
    }
}
