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
 * DeleteDspmShareUserData请求参数结构体
 *
 * @method integer getDeleteDataAppId() 获取用户appid
 * @method void setDeleteDataAppId(integer $DeleteDataAppId) 设置用户appid
 */
class DeleteDspmShareUserDataRequest extends AbstractModel
{
    /**
     * @var integer 用户appid
     */
    public $DeleteDataAppId;

    /**
     * @param integer $DeleteDataAppId 用户appid
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
        if (array_key_exists("DeleteDataAppId",$param) and $param["DeleteDataAppId"] !== null) {
            $this->DeleteDataAppId = $param["DeleteDataAppId"];
        }
    }
}
