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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMfaCodeStatus返回参数结构体
 *
 * @method integer getStatus() 获取微信mfa code状态
 * @method void setStatus(integer $Status) 设置微信mfa code状态
 * @method integer getRmDevice() 获取记住设备
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRmDevice(integer $RmDevice) 设置记住设备
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpcode() 获取临时Code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpcode(string $Tmpcode) 设置临时Code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickname() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHasOpenId() 获取是否有OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasOpenId(integer $HasOpenId) 设置是否有OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMfaCodeStatusResponse extends AbstractModel
{
    /**
     * @var integer 微信mfa code状态
     */
    public $Status;

    /**
     * @var integer 记住设备
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RmDevice;

    /**
     * @var string 临时Code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tmpcode;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var integer 是否有OpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasOpenId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 微信mfa code状态
     * @param integer $RmDevice 记住设备
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tmpcode 临时Code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nickname 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HasOpenId 是否有OpenId
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RmDevice",$param) and $param["RmDevice"] !== null) {
            $this->RmDevice = $param["RmDevice"];
        }

        if (array_key_exists("Tmpcode",$param) and $param["Tmpcode"] !== null) {
            $this->Tmpcode = $param["Tmpcode"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("HasOpenId",$param) and $param["HasOpenId"] !== null) {
            $this->HasOpenId = $param["HasOpenId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
