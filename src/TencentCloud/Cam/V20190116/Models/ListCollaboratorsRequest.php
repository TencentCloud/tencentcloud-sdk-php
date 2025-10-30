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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListCollaborators请求参数结构体
 *
 * @method integer getLimit() 获取分页的条数，默认是20条。
 * @method void setLimit(integer $Limit) 设置分页的条数，默认是20条。
 * @method integer getOffset() 获取分页的起始值，默认从0开始。
 * @method void setOffset(integer $Offset) 设置分页的起始值，默认从0开始。
 */
class ListCollaboratorsRequest extends AbstractModel
{
    /**
     * @var integer 分页的条数，默认是20条。
     */
    public $Limit;

    /**
     * @var integer 分页的起始值，默认从0开始。
     */
    public $Offset;

    /**
     * @param integer $Limit 分页的条数，默认是20条。
     * @param integer $Offset 分页的起始值，默认从0开始。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
