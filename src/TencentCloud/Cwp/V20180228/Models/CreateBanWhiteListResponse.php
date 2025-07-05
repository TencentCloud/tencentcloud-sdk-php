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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBanWhiteList返回参数结构体
 *
 * @method boolean getIsGlobal() 获取是否全局规则
 * @method void setIsGlobal(boolean $IsGlobal) 设置是否全局规则
 * @method boolean getIsDuplicate() 获取添加规则是否重复
 * @method void setIsDuplicate(boolean $IsDuplicate) 设置添加规则是否重复
 * @method array getDuplicateHosts() 获取重复机器的信息
 * @method void setDuplicateHosts(array $DuplicateHosts) 设置重复机器的信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBanWhiteListResponse extends AbstractModel
{
    /**
     * @var boolean 是否全局规则
     */
    public $IsGlobal;

    /**
     * @var boolean 添加规则是否重复
     */
    public $IsDuplicate;

    /**
     * @var array 重复机器的信息
     */
    public $DuplicateHosts;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsGlobal 是否全局规则
     * @param boolean $IsDuplicate 添加规则是否重复
     * @param array $DuplicateHosts 重复机器的信息
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
        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("IsDuplicate",$param) and $param["IsDuplicate"] !== null) {
            $this->IsDuplicate = $param["IsDuplicate"];
        }

        if (array_key_exists("DuplicateHosts",$param) and $param["DuplicateHosts"] !== null) {
            $this->DuplicateHosts = [];
            foreach ($param["DuplicateHosts"] as $key => $value){
                $obj = new DuplicateHosts();
                $obj->deserialize($value);
                array_push($this->DuplicateHosts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
