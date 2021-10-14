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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePhoneEmailList请求参数结构体
 *
 * @method integer getType() 获取0：所有类型  1：手机  2：邮箱，默认0
 * @method void setType(integer $Type) 设置0：所有类型  1：手机  2：邮箱，默认0
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，取值范围[1,200]
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，取值范围[1,200]
 * @method string getCode() 获取手机或者邮箱精确搜索
 * @method void setCode(string $Code) 设置手机或者邮箱精确搜索
 */
class DescribePhoneEmailListRequest extends AbstractModel
{
    /**
     * @var integer 0：所有类型  1：手机  2：邮箱，默认0
     */
    public $Type;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，取值范围[1,200]
     */
    public $Limit;

    /**
     * @var string 手机或者邮箱精确搜索
     */
    public $Code;

    /**
     * @param integer $Type 0：所有类型  1：手机  2：邮箱，默认0
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，取值范围[1,200]
     * @param string $Code 手机或者邮箱精确搜索
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
