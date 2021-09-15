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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubOrganizationAndSeal返回参数结构体
 *
 * @method string getSubOrganizationId() 获取子机构在电子文件签署平台唯一标识
 * @method void setSubOrganizationId(string $SubOrganizationId) 设置子机构在电子文件签署平台唯一标识
 * @method string getSealId() 获取电子印章ID
 * @method void setSealId(string $SealId) 设置电子印章ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSubOrganizationAndSealResponse extends AbstractModel
{
    /**
     * @var string 子机构在电子文件签署平台唯一标识
     */
    public $SubOrganizationId;

    /**
     * @var string 电子印章ID
     */
    public $SealId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubOrganizationId 子机构在电子文件签署平台唯一标识
     * @param string $SealId 电子印章ID
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
        if (array_key_exists("SubOrganizationId",$param) and $param["SubOrganizationId"] !== null) {
            $this->SubOrganizationId = $param["SubOrganizationId"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
