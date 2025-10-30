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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulList请求参数结构体
 *
 * @method string getParams() 获取查询过滤参数:(json序列化的结果）
 * @method void setParams(string $Params) 设置查询过滤参数:(json序列化的结果）
 */
class DescribeVulListRequest extends AbstractModel
{
    /**
     * @var string 查询过滤参数:(json序列化的结果）
     */
    public $Params;

    /**
     * @param string $Params 查询过滤参数:(json序列化的结果）
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
        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
