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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEipAcl请求参数结构体
 *
 * @method string getAclId() 获取待删除的 ACL 实例 ID
 * @method void setAclId(string $AclId) 设置待删除的 ACL 实例 ID
 */
class DeleteEipAclRequest extends AbstractModel
{
    /**
     * @var string 待删除的 ACL 实例 ID
     */
    public $AclId;

    /**
     * @param string $AclId 待删除的 ACL 实例 ID
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
        if (array_key_exists("AclId",$param) and $param["AclId"] !== null) {
            $this->AclId = $param["AclId"];
        }
    }
}
