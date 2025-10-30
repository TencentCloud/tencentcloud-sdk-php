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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话统计的维度信息,可以多个维度
 *
 * @method string getDimension() 获取维度名称，目前仅支持：SqlTag。
 * @method void setDimension(string $Dimension) 设置维度名称，目前仅支持：SqlTag。
 * @method array getData() 获取SQL 标签过滤与统计信息
示例：

示例 1：[p=position] 统计包含 p=position 标签的 SQL 会话。
示例 2：[p] 统计包含 p 标签的 SQL 会话。
示例 3：[p=position, c=idCard] 统计同时包含 p=position 标签和 c=idCard 标签的 SQL 会话。
 * @method void setData(array $Data) 设置SQL 标签过滤与统计信息
示例：

示例 1：[p=position] 统计包含 p=position 标签的 SQL 会话。
示例 2：[p] 统计包含 p 标签的 SQL 会话。
示例 3：[p=position, c=idCard] 统计同时包含 p=position 标签和 c=idCard 标签的 SQL 会话。
 */
class StatDimension extends AbstractModel
{
    /**
     * @var string 维度名称，目前仅支持：SqlTag。
     */
    public $Dimension;

    /**
     * @var array SQL 标签过滤与统计信息
示例：

示例 1：[p=position] 统计包含 p=position 标签的 SQL 会话。
示例 2：[p] 统计包含 p 标签的 SQL 会话。
示例 3：[p=position, c=idCard] 统计同时包含 p=position 标签和 c=idCard 标签的 SQL 会话。
     */
    public $Data;

    /**
     * @param string $Dimension 维度名称，目前仅支持：SqlTag。
     * @param array $Data SQL 标签过滤与统计信息
示例：

示例 1：[p=position] 统计包含 p=position 标签的 SQL 会话。
示例 2：[p] 统计包含 p 标签的 SQL 会话。
示例 3：[p=position, c=idCard] 统计同时包含 p=position 标签和 c=idCard 标签的 SQL 会话。
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
        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
