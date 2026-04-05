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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EdgeKVList返回参数结构体
 *
 * @method array getKeys() 获取键名列表。
 * @method void setKeys(array $Keys) 设置键名列表。
 * @method string getCursor() 获取游标位置。标识当前遍历的位置，用于获取下一批数据。将此值填入下次请求的 Cursor 参数中，可继续向后遍历。若为空字符串，表示已遍历完所有数据。

 * @method void setCursor(string $Cursor) 设置游标位置。标识当前遍历的位置，用于获取下一批数据。将此值填入下次请求的 Cursor 参数中，可继续向后遍历。若为空字符串，表示已遍历完所有数据。

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class EdgeKVListResponse extends AbstractModel
{
    /**
     * @var array 键名列表。
     */
    public $Keys;

    /**
     * @var string 游标位置。标识当前遍历的位置，用于获取下一批数据。将此值填入下次请求的 Cursor 参数中，可继续向后遍历。若为空字符串，表示已遍历完所有数据。

     */
    public $Cursor;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Keys 键名列表。
     * @param string $Cursor 游标位置。标识当前遍历的位置，用于获取下一批数据。将此值填入下次请求的 Cursor 参数中，可继续向后遍历。若为空字符串，表示已遍历完所有数据。

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
        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
