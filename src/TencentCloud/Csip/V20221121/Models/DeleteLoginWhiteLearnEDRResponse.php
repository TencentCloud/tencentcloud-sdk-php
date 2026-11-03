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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLoginWhiteLearnEDR返回参数结构体
 *
 * @method integer getDeletedCount() 获取<p>删除的主机记录行数（一个规则组可能含多行，与自定义白名单接口按规则条数统计的口径不同）</p>
 * @method void setDeletedCount(integer $DeletedCount) 设置<p>删除的主机记录行数（一个规则组可能含多行，与自定义白名单接口按规则条数统计的口径不同）</p>
 * @method array getFailedAppIds() 获取<p>删除失败的账号 AppId 列表；仅当全部失败时才返回错误</p>
 * @method void setFailedAppIds(array $FailedAppIds) 设置<p>删除失败的账号 AppId 列表；仅当全部失败时才返回错误</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteLoginWhiteLearnEDRResponse extends AbstractModel
{
    /**
     * @var integer <p>删除的主机记录行数（一个规则组可能含多行，与自定义白名单接口按规则条数统计的口径不同）</p>
     */
    public $DeletedCount;

    /**
     * @var array <p>删除失败的账号 AppId 列表；仅当全部失败时才返回错误</p>
     */
    public $FailedAppIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $DeletedCount <p>删除的主机记录行数（一个规则组可能含多行，与自定义白名单接口按规则条数统计的口径不同）</p>
     * @param array $FailedAppIds <p>删除失败的账号 AppId 列表；仅当全部失败时才返回错误</p>
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
        if (array_key_exists("DeletedCount",$param) and $param["DeletedCount"] !== null) {
            $this->DeletedCount = $param["DeletedCount"];
        }

        if (array_key_exists("FailedAppIds",$param) and $param["FailedAppIds"] !== null) {
            $this->FailedAppIds = $param["FailedAppIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
