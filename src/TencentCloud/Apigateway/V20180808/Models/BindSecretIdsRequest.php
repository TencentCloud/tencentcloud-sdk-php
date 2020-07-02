<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindSecretIds请求参数结构体
 *
 * @method string getUsagePlanId() 获取待绑定的使用计划唯一 ID。
 * @method void setUsagePlanId(string $UsagePlanId) 设置待绑定的使用计划唯一 ID。
 * @method array getAccessKeyIds() 获取待绑定的密钥 ID 数组。
 * @method void setAccessKeyIds(array $AccessKeyIds) 设置待绑定的密钥 ID 数组。
 */
class BindSecretIdsRequest extends AbstractModel
{
    /**
     * @var string 待绑定的使用计划唯一 ID。
     */
    public $UsagePlanId;

    /**
     * @var array 待绑定的密钥 ID 数组。
     */
    public $AccessKeyIds;

    /**
     * @param string $UsagePlanId 待绑定的使用计划唯一 ID。
     * @param array $AccessKeyIds 待绑定的密钥 ID 数组。
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
        if (array_key_exists('UsagePlanId',$param) and $param['UsagePlanId'] !== null) {
            $this->UsagePlanId = $param['UsagePlanId'];
        }

        if (array_key_exists('AccessKeyIds',$param) and $param['AccessKeyIds'] !== null) {
            $this->AccessKeyIds = $param['AccessKeyIds'];
        }
    }
}
