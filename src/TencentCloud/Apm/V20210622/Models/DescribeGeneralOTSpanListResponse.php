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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralOTSpanList返回参数结构体
 *
 * @method integer getTotalCount() 获取总数量
 * @method void setTotalCount(integer $TotalCount) 设置总数量
 * @method string getSpans() 获取Spans字段中包含了链路数据的全部内容，由于数据经过了压缩，需要对结果进行如下三步转换，以还原始的文本。
1. 将Spans字段中的文本进行 Base64 解码，得到经过压缩后字节数组。
2. 使用 gzip 对压缩后的字节数组进行解压，得到压缩前的字节数组。
3. 使用 UTF-8 字符集，将压缩前的字节数组转换为文本。

 * @method void setSpans(string $Spans) 设置Spans字段中包含了链路数据的全部内容，由于数据经过了压缩，需要对结果进行如下三步转换，以还原始的文本。
1. 将Spans字段中的文本进行 Base64 解码，得到经过压缩后字节数组。
2. 使用 gzip 对压缩后的字节数组进行解压，得到压缩前的字节数组。
3. 使用 UTF-8 字符集，将压缩前的字节数组转换为文本。

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGeneralOTSpanListResponse extends AbstractModel
{
    /**
     * @var integer 总数量
     */
    public $TotalCount;

    /**
     * @var string Spans字段中包含了链路数据的全部内容，由于数据经过了压缩，需要对结果进行如下三步转换，以还原始的文本。
1. 将Spans字段中的文本进行 Base64 解码，得到经过压缩后字节数组。
2. 使用 gzip 对压缩后的字节数组进行解压，得到压缩前的字节数组。
3. 使用 UTF-8 字符集，将压缩前的字节数组转换为文本。

     */
    public $Spans;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数量
     * @param string $Spans Spans字段中包含了链路数据的全部内容，由于数据经过了压缩，需要对结果进行如下三步转换，以还原始的文本。
1. 将Spans字段中的文本进行 Base64 解码，得到经过压缩后字节数组。
2. 使用 gzip 对压缩后的字节数组进行解压，得到压缩前的字节数组。
3. 使用 UTF-8 字符集，将压缩前的字节数组转换为文本。

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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Spans",$param) and $param["Spans"] !== null) {
            $this->Spans = $param["Spans"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
