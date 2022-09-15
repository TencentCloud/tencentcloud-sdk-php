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
 * 失败的用户
 *
 * @method string getFailedUserIdentification() 获取失败用户标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedUserIdentification(string $FailedUserIdentification) 设置失败用户标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailedReason() 获取导入的用户失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReason(string $FailedReason) 设置导入的用户失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class FailedUsers extends AbstractModel
{
    /**
     * @var string 失败用户标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedUserIdentification;

    /**
     * @var string 导入的用户失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReason;

    /**
     * @param string $FailedUserIdentification 失败用户标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailedReason 导入的用户失败原因
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FailedUserIdentification",$param) and $param["FailedUserIdentification"] !== null) {
            $this->FailedUserIdentification = $param["FailedUserIdentification"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }
    }
}
