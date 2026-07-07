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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelRewrite请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例 ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例 ID。</p>
 * @method string getSourceModel() 获取<p>选填，按源模型名精确过滤（大小写敏感）。</p><p>长度 1-255 字符；不传则返回该实例的全部重写规则；命中至多 1 条；未命中返回空列表（不报错）。</p>
 * @method void setSourceModel(string $SourceModel) 设置<p>选填，按源模型名精确过滤（大小写敏感）。</p><p>长度 1-255 字符；不传则返回该实例的全部重写规则；命中至多 1 条；未命中返回空列表（不报错）。</p>
 */
class DescribeModelRewriteRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例 ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>选填，按源模型名精确过滤（大小写敏感）。</p><p>长度 1-255 字符；不传则返回该实例的全部重写规则；命中至多 1 条；未命中返回空列表（不报错）。</p>
     */
    public $SourceModel;

    /**
     * @param string $ModelRouterId <p>模型路由实例 ID。</p>
     * @param string $SourceModel <p>选填，按源模型名精确过滤（大小写敏感）。</p><p>长度 1-255 字符；不传则返回该实例的全部重写规则；命中至多 1 条；未命中返回空列表（不报错）。</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("SourceModel",$param) and $param["SourceModel"] !== null) {
            $this->SourceModel = $param["SourceModel"];
        }
    }
}
