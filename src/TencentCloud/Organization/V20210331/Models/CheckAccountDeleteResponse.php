<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAccountDelete返回参数结构体
 *
 * @method boolean getAllowDelete() 获取成员是否允许删除。 true-是、false-否
 * @method void setAllowDelete(boolean $AllowDelete) 设置成员是否允许删除。 true-是、false-否
 * @method NotAllowReason getNotAllowReason() 获取不允许删除原因。
 * @method void setNotAllowReason(NotAllowReason $NotAllowReason) 设置不允许删除原因。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckAccountDeleteResponse extends AbstractModel
{
    /**
     * @var boolean 成员是否允许删除。 true-是、false-否
     */
    public $AllowDelete;

    /**
     * @var NotAllowReason 不允许删除原因。
     */
    public $NotAllowReason;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $AllowDelete 成员是否允许删除。 true-是、false-否
     * @param NotAllowReason $NotAllowReason 不允许删除原因。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AllowDelete",$param) and $param["AllowDelete"] !== null) {
            $this->AllowDelete = $param["AllowDelete"];
        }

        if (array_key_exists("NotAllowReason",$param) and $param["NotAllowReason"] !== null) {
            $this->NotAllowReason = new NotAllowReason();
            $this->NotAllowReason->deserialize($param["NotAllowReason"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
