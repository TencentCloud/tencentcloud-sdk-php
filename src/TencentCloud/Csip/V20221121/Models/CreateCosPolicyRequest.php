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
 * CreateCosPolicy请求参数结构体
 *
 * @method CosPolicyInfo getCosPolicyInfo() 获取策略信息
 * @method void setCosPolicyInfo(CosPolicyInfo $CosPolicyInfo) 设置策略信息
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class CreateCosPolicyRequest extends AbstractModel
{
    /**
     * @var CosPolicyInfo 策略信息
     */
    public $CosPolicyInfo;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param CosPolicyInfo $CosPolicyInfo 策略信息
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("CosPolicyInfo",$param) and $param["CosPolicyInfo"] !== null) {
            $this->CosPolicyInfo = new CosPolicyInfo();
            $this->CosPolicyInfo->deserialize($param["CosPolicyInfo"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
