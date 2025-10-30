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
 * 不满意回复检索过滤
 *
 * @method string getQuery() 获取检索，用户问题或答案
 * @method void setQuery(string $Query) 设置检索，用户问题或答案
 * @method array getReasons() 获取错误类型检索

 * @method void setReasons(array $Reasons) 设置错误类型检索
 */
class Filters extends AbstractModel
{
    /**
     * @var string 检索，用户问题或答案
     */
    public $Query;

    /**
     * @var array 错误类型检索

     */
    public $Reasons;

    /**
     * @param string $Query 检索，用户问题或答案
     * @param array $Reasons 错误类型检索
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }
    }
}
