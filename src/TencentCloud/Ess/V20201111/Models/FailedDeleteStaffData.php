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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除员工失败数据
 *
 * @method string getUserId() 获取员工在电子签的userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置员工在电子签的userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取员工在第三方平台的openId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置员工在第三方平台的openId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取失败原因
 * @method void setReason(string $Reason) 设置失败原因
 */
class FailedDeleteStaffData extends AbstractModel
{
    /**
     * @var string 员工在电子签的userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 员工在第三方平台的openId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var string 失败原因
     */
    public $Reason;

    /**
     * @param string $UserId 员工在电子签的userId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId 员工在第三方平台的openId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 失败原因
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

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
