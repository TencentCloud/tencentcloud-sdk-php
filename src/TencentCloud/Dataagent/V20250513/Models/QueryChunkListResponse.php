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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryChunkList返回参数结构体
 *
 * @method integer getTotal() 获取<p>总数</p>
 * @method void setTotal(integer $Total) 设置<p>总数</p>
 * @method integer getAutoTotal() 获取<p>文档的自动分段数</p>
 * @method void setAutoTotal(integer $AutoTotal) 设置<p>文档的自动分段数</p>
 * @method integer getManualTotal() 获取<p>文档的手动新建分段数</p>
 * @method void setManualTotal(integer $ManualTotal) 设置<p>文档的手动新建分段数</p>
 * @method array getChunks() 获取<p>分片信息</p>
 * @method void setChunks(array $Chunks) 设置<p>分片信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryChunkListResponse extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $Total;

    /**
     * @var integer <p>文档的自动分段数</p>
     */
    public $AutoTotal;

    /**
     * @var integer <p>文档的手动新建分段数</p>
     */
    public $ManualTotal;

    /**
     * @var array <p>分片信息</p>
     */
    public $Chunks;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>总数</p>
     * @param integer $AutoTotal <p>文档的自动分段数</p>
     * @param integer $ManualTotal <p>文档的手动新建分段数</p>
     * @param array $Chunks <p>分片信息</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AutoTotal",$param) and $param["AutoTotal"] !== null) {
            $this->AutoTotal = $param["AutoTotal"];
        }

        if (array_key_exists("ManualTotal",$param) and $param["ManualTotal"] !== null) {
            $this->ManualTotal = $param["ManualTotal"];
        }

        if (array_key_exists("Chunks",$param) and $param["Chunks"] !== null) {
            $this->Chunks = [];
            foreach ($param["Chunks"] as $key => $value){
                $obj = new Chunk();
                $obj->deserialize($value);
                array_push($this->Chunks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
