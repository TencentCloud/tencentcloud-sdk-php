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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileTamperRuleInfo请求参数结构体
 *
 * @method integer getId() 获取规则id
 * @method void setId(integer $Id) 设置规则id
 * @method integer getLimit() 获取控制返回的uuids 数量
 * @method void setLimit(integer $Limit) 设置控制返回的uuids 数量
 * @method integer getOffset() 获取控制返回的uuids 数量，起始位置
 * @method void setOffset(integer $Offset) 设置控制返回的uuids 数量，起始位置
 */
class DescribeFileTamperRuleInfoRequest extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $Id;

    /**
     * @var integer 控制返回的uuids 数量
     */
    public $Limit;

    /**
     * @var integer 控制返回的uuids 数量，起始位置
     */
    public $Offset;

    /**
     * @param integer $Id 规则id
     * @param integer $Limit 控制返回的uuids 数量
     * @param integer $Offset 控制返回的uuids 数量，起始位置
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
