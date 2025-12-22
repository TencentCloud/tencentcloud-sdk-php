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
 * CSPM条款
 *
 * @method string getTag() 获取标签
 * @method void setTag(string $Tag) 设置标签
 * @method array getTerms() 获取条款
 * @method void setTerms(array $Terms) 设置条款
 */
class StandardTerm extends AbstractModel
{
    /**
     * @var string 标签
     */
    public $Tag;

    /**
     * @var array 条款
     */
    public $Terms;

    /**
     * @param string $Tag 标签
     * @param array $Terms 条款
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Terms",$param) and $param["Terms"] !== null) {
            $this->Terms = $param["Terms"];
        }
    }
}
