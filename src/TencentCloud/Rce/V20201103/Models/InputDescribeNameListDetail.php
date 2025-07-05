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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询黑白名单详情入参
 *
 * @method integer getNameListId() 获取名单ID
 * @method void setNameListId(integer $NameListId) 设置名单ID
 */
class InputDescribeNameListDetail extends AbstractModel
{
    /**
     * @var integer 名单ID
     */
    public $NameListId;

    /**
     * @param integer $NameListId 名单ID
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
        if (array_key_exists("NameListId",$param) and $param["NameListId"] !== null) {
            $this->NameListId = $param["NameListId"];
        }
    }
}
