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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 认证凭据Token
 *
 * @method string getToken() 获取认证Token
 * @method void setToken(string $Token) 设置认证Token
 * @method integer getCurrentTime() 获取服务器时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentTime(integer $CurrentTime) 设置服务器时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNextRotationTime() 获取毫秒时间戳，根据轮转周期准确计算得到
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextRotationTime(integer $NextRotationTime) 设置毫秒时间戳，根据轮转周期准确计算得到
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastRotationTimeCost() 获取毫秒，如果轮转失败则为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRotationTimeCost(integer $LastRotationTimeCost) 设置毫秒，如果轮转失败则为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRotationStatus() 获取成功：success
失败：failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationStatus(string $RotationStatus) 设置成功：success
失败：failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRotationMessage() 获取成功：success
失败：失败信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationMessage(string $RotationMessage) 设置成功：success
失败：失败信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthToken extends AbstractModel
{
    /**
     * @var string 认证Token
     */
    public $Token;

    /**
     * @var integer 服务器时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentTime;

    /**
     * @var integer 毫秒时间戳，根据轮转周期准确计算得到
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextRotationTime;

    /**
     * @var integer 毫秒，如果轮转失败则为 -1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRotationTimeCost;

    /**
     * @var string 成功：success
失败：failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationStatus;

    /**
     * @var string 成功：success
失败：失败信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationMessage;

    /**
     * @param string $Token 认证Token
     * @param integer $CurrentTime 服务器时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NextRotationTime 毫秒时间戳，根据轮转周期准确计算得到
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastRotationTimeCost 毫秒，如果轮转失败则为 -1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RotationStatus 成功：success
失败：failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RotationMessage 成功：success
失败：失败信息
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("CurrentTime",$param) and $param["CurrentTime"] !== null) {
            $this->CurrentTime = $param["CurrentTime"];
        }

        if (array_key_exists("NextRotationTime",$param) and $param["NextRotationTime"] !== null) {
            $this->NextRotationTime = $param["NextRotationTime"];
        }

        if (array_key_exists("LastRotationTimeCost",$param) and $param["LastRotationTimeCost"] !== null) {
            $this->LastRotationTimeCost = $param["LastRotationTimeCost"];
        }

        if (array_key_exists("RotationStatus",$param) and $param["RotationStatus"] !== null) {
            $this->RotationStatus = $param["RotationStatus"];
        }

        if (array_key_exists("RotationMessage",$param) and $param["RotationMessage"] !== null) {
            $this->RotationMessage = $param["RotationMessage"];
        }
    }
}
