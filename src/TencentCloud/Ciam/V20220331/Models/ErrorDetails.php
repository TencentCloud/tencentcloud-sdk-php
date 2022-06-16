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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 失败详情
 *
 * @method string getUserId() 获取用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取失败原因
 * @method void setError(string $Error) 设置失败原因
 */
class ErrorDetails extends AbstractModel
{
    /**
     * @var string 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 失败原因
     */
    public $Error;

    /**
     * @param string $UserId 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error 失败原因
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
