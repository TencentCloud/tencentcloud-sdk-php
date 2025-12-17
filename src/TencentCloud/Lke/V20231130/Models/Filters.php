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

 * @method array getHandlingStatuses() 获取处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
 * @method void setHandlingStatuses(array $HandlingStatuses) 设置处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
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
     * @var array 处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
     */
    public $HandlingStatuses;

    /**
     * @param string $Query 检索，用户问题或答案
     * @param array $Reasons 错误类型检索

     * @param array $HandlingStatuses 处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
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

        if (array_key_exists("HandlingStatuses",$param) and $param["HandlingStatuses"] !== null) {
            $this->HandlingStatuses = $param["HandlingStatuses"];
        }
    }
}
