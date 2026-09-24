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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobLog返回参数结构体
 *
 * @method array getLines() 获取<p>日志行数据。</p>
 * @method void setLines(array $Lines) 设置<p>日志行数据。</p>
 * @method string getCursor() 获取<p>下一页游标（不透明令牌，原样透传回请求即可；无更多日志时不返回）。</p>
 * @method void setCursor(string $Cursor) 设置<p>下一页游标（不透明令牌，原样透传回请求即可；无更多日志时不返回）。</p>
 * @method boolean getHasMore() 获取<p>是否还有更多日志。</p>
 * @method void setHasMore(boolean $HasMore) 设置<p>是否还有更多日志。</p>
 * @method array getResults() 获取<p>日志条目列表。</p>
 * @method void setResults(array $Results) 设置<p>日志条目列表。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobLogResponse extends AbstractModel
{
    /**
     * @var array <p>日志行数据。</p>
     */
    public $Lines;

    /**
     * @var string <p>下一页游标（不透明令牌，原样透传回请求即可；无更多日志时不返回）。</p>
     */
    public $Cursor;

    /**
     * @var boolean <p>是否还有更多日志。</p>
     */
    public $HasMore;

    /**
     * @var array <p>日志条目列表。</p>
     */
    public $Results;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Lines <p>日志行数据。</p>
     * @param string $Cursor <p>下一页游标（不透明令牌，原样透传回请求即可；无更多日志时不返回）。</p>
     * @param boolean $HasMore <p>是否还有更多日志。</p>
     * @param array $Results <p>日志条目列表。</p>
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
        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ClsLogEntry();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
