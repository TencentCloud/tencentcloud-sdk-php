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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSearchExportList请求参数结构体
 *
 * @method string getQuery() 获取ES查询条件JSON
 * @method void setQuery(string $Query) 设置ES查询条件JSON
 * @method array getLogTypes() 获取日志类型列表
 * @method void setLogTypes(array $LogTypes) 设置日志类型列表
 */
class DescribeSearchExportListRequest extends AbstractModel
{
    /**
     * @var string ES查询条件JSON
     */
    public $Query;

    /**
     * @var array 日志类型列表
     */
    public $LogTypes;

    /**
     * @param string $Query ES查询条件JSON
     * @param array $LogTypes 日志类型列表
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

        if (array_key_exists("LogTypes",$param) and $param["LogTypes"] !== null) {
            $this->LogTypes = $param["LogTypes"];
        }
    }
}
