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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAttackDetail请求参数结构体
 *
 * @method string getSeqId() 获取<p>待查询的检测请求 ID，来自上游检测接口（如 <code>DetectAIFakeFaces</code>）返回的 <code>RequestId</code>。长度 32 ~ 64，仅支持数字、字母及短横线 <code>-</code>。检测结果保留期为 3 天，超期后将返回 <code>ResourceUnavailable.ResultExpired</code>。</p>
 * @method void setSeqId(string $SeqId) 设置<p>待查询的检测请求 ID，来自上游检测接口（如 <code>DetectAIFakeFaces</code>）返回的 <code>RequestId</code>。长度 32 ~ 64，仅支持数字、字母及短横线 <code>-</code>。检测结果保留期为 3 天，超期后将返回 <code>ResourceUnavailable.ResultExpired</code>。</p>
 */
class GetAttackDetailRequest extends AbstractModel
{
    /**
     * @var string <p>待查询的检测请求 ID，来自上游检测接口（如 <code>DetectAIFakeFaces</code>）返回的 <code>RequestId</code>。长度 32 ~ 64，仅支持数字、字母及短横线 <code>-</code>。检测结果保留期为 3 天，超期后将返回 <code>ResourceUnavailable.ResultExpired</code>。</p>
     */
    public $SeqId;

    /**
     * @param string $SeqId <p>待查询的检测请求 ID，来自上游检测接口（如 <code>DetectAIFakeFaces</code>）返回的 <code>RequestId</code>。长度 32 ~ 64，仅支持数字、字母及短横线 <code>-</code>。检测结果保留期为 3 天，超期后将返回 <code>ResourceUnavailable.ResultExpired</code>。</p>
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
        if (array_key_exists("SeqId",$param) and $param["SeqId"] !== null) {
            $this->SeqId = $param["SeqId"];
        }
    }
}
