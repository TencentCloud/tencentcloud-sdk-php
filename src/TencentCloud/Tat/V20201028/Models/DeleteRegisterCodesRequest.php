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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRegisterCodes请求参数结构体
 *
 * @method array getRegisterCodeIds() 获取注册码ID列表。限制输入的注册码ID数量大于0小于100。

可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
 * @method void setRegisterCodeIds(array $RegisterCodeIds) 设置注册码ID列表。限制输入的注册码ID数量大于0小于100。

可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
 */
class DeleteRegisterCodesRequest extends AbstractModel
{
    /**
     * @var array 注册码ID列表。限制输入的注册码ID数量大于0小于100。

可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
     */
    public $RegisterCodeIds;

    /**
     * @param array $RegisterCodeIds 注册码ID列表。限制输入的注册码ID数量大于0小于100。

可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
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
        if (array_key_exists("RegisterCodeIds",$param) and $param["RegisterCodeIds"] !== null) {
            $this->RegisterCodeIds = $param["RegisterCodeIds"];
        }
    }
}
