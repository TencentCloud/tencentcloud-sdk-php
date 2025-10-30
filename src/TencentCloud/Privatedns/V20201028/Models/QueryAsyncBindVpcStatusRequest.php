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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAsyncBindVpcStatus请求参数结构体
 *
 * @method string getUniqId() 获取唯一ID
 * @method void setUniqId(string $UniqId) 设置唯一ID
 */
class QueryAsyncBindVpcStatusRequest extends AbstractModel
{
    /**
     * @var string 唯一ID
     */
    public $UniqId;

    /**
     * @param string $UniqId 唯一ID
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
        if (array_key_exists("UniqId",$param) and $param["UniqId"] !== null) {
            $this->UniqId = $param["UniqId"];
        }
    }
}
