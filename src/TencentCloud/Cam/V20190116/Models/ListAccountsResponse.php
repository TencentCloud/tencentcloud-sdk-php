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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccounts返回参数结构体
 *
 * @method array getUsers() 获取<p>子账号列表。</p>
 * @method void setUsers(array $Users) 设置<p>子账号列表。</p>
 * @method string getMarker() 获取<p>当IsTruncated为true时才有此字段，当返回true时，需要继续调用此接口，并且使用Marker获取截断后的内容 。</p>
 * @method void setMarker(string $Marker) 设置<p>当IsTruncated为true时才有此字段，当返回true时，需要继续调用此接口，并且使用Marker获取截断后的内容 。</p>
 * @method boolean getIsTruncated() 获取<p>请求返回结果是否被截断。</p>
 * @method void setIsTruncated(boolean $IsTruncated) 设置<p>请求返回结果是否被截断。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListAccountsResponse extends AbstractModel
{
    /**
     * @var array <p>子账号列表。</p>
     */
    public $Users;

    /**
     * @var string <p>当IsTruncated为true时才有此字段，当返回true时，需要继续调用此接口，并且使用Marker获取截断后的内容 。</p>
     */
    public $Marker;

    /**
     * @var boolean <p>请求返回结果是否被截断。</p>
     */
    public $IsTruncated;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Users <p>子账号列表。</p>
     * @param string $Marker <p>当IsTruncated为true时才有此字段，当返回true时，需要继续调用此接口，并且使用Marker获取截断后的内容 。</p>
     * @param boolean $IsTruncated <p>请求返回结果是否被截断。</p>
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
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new ListAllUser();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("IsTruncated",$param) and $param["IsTruncated"] !== null) {
            $this->IsTruncated = $param["IsTruncated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
