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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryMerchant请求参数结构体
 *
 * @method string getMerchantAppId() 获取进件成功后返给商户方的 AppId
 * @method void setMerchantAppId(string $MerchantAppId) 设置进件成功后返给商户方的 AppId
 */
class QueryMerchantRequest extends AbstractModel
{
    /**
     * @var string 进件成功后返给商户方的 AppId
     */
    public $MerchantAppId;

    /**
     * @param string $MerchantAppId 进件成功后返给商户方的 AppId
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
        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }
    }
}
