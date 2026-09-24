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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewRegistryRecord返回参数结构体
 *
 * @method string getPreviewResult() 获取<p>只读元数据预览结果对象（JSON 字符串形式）。字段：StatusCode（远端 HTTP 状态码，必返）、Body（远端响应体截断字符串，必返）、HasUpdate（Boolean，必返；远端内容按 Sync 相同的规范化规则处理后是否与请求 Version 配置不同；Error 非空时固定返回 false，此时不表示远端没有变化）、Error（调用错误信息，可选）。</p>
 * @method void setPreviewResult(string $PreviewResult) 设置<p>只读元数据预览结果对象（JSON 字符串形式）。字段：StatusCode（远端 HTTP 状态码，必返）、Body（远端响应体截断字符串，必返）、HasUpdate（Boolean，必返；远端内容按 Sync 相同的规范化规则处理后是否与请求 Version 配置不同；Error 非空时固定返回 false，此时不表示远端没有变化）、Error（调用错误信息，可选）。</p>
 * @method string getResolvedVersionId() 获取<p>实际预览的 Version ID（由 VersionId / Label 解析得到）。</p>
 * @method void setResolvedVersionId(string $ResolvedVersionId) 设置<p>实际预览的 Version ID（由 VersionId / Label 解析得到）。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class PreviewRegistryRecordResponse extends AbstractModel
{
    /**
     * @var string <p>只读元数据预览结果对象（JSON 字符串形式）。字段：StatusCode（远端 HTTP 状态码，必返）、Body（远端响应体截断字符串，必返）、HasUpdate（Boolean，必返；远端内容按 Sync 相同的规范化规则处理后是否与请求 Version 配置不同；Error 非空时固定返回 false，此时不表示远端没有变化）、Error（调用错误信息，可选）。</p>
     */
    public $PreviewResult;

    /**
     * @var string <p>实际预览的 Version ID（由 VersionId / Label 解析得到）。</p>
     */
    public $ResolvedVersionId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PreviewResult <p>只读元数据预览结果对象（JSON 字符串形式）。字段：StatusCode（远端 HTTP 状态码，必返）、Body（远端响应体截断字符串，必返）、HasUpdate（Boolean，必返；远端内容按 Sync 相同的规范化规则处理后是否与请求 Version 配置不同；Error 非空时固定返回 false，此时不表示远端没有变化）、Error（调用错误信息，可选）。</p>
     * @param string $ResolvedVersionId <p>实际预览的 Version ID（由 VersionId / Label 解析得到）。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PreviewResult",$param) and $param["PreviewResult"] !== null) {
            $this->PreviewResult = $param["PreviewResult"];
        }

        if (array_key_exists("ResolvedVersionId",$param) and $param["ResolvedVersionId"] !== null) {
            $this->ResolvedVersionId = $param["ResolvedVersionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
