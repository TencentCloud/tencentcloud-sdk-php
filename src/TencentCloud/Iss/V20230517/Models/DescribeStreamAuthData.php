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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询推拉流鉴权返回数据结构
 *
 * @method string getId() 获取鉴权配置ID（uuid）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置鉴权配置ID（uuid）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPullState() 获取是否开播放鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullState(integer $PullState) 设置是否开播放鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPullSecret() 获取播放密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullSecret(string $PullSecret) 设置播放密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPullExpired() 获取播放过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPullExpired(integer $PullExpired) 设置播放过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPushState() 获取是否开启推流鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPushState(integer $PushState) 设置是否开启推流鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPushSecret() 获取推流密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPushSecret(string $PushSecret) 设置推流密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPushExpired() 获取推流过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPushExpired(integer $PushExpired) 设置推流过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeStreamAuthData extends AbstractModel
{
    /**
     * @var string 鉴权配置ID（uuid）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 是否开播放鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullState;

    /**
     * @var string 播放密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullSecret;

    /**
     * @var integer 播放过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PullExpired;

    /**
     * @var integer 是否开启推流鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PushState;

    /**
     * @var string 推流密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PushSecret;

    /**
     * @var integer 推流过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PushExpired;

    /**
     * @var integer 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param string $Id 鉴权配置ID（uuid）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PullState 是否开播放鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PullSecret 播放密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PullExpired 播放过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PushState 是否开启推流鉴权（1:开启,0:关闭）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PushSecret 推流密钥（仅支持字母数字，长度0-10位）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PushExpired 推流过期时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PullState",$param) and $param["PullState"] !== null) {
            $this->PullState = $param["PullState"];
        }

        if (array_key_exists("PullSecret",$param) and $param["PullSecret"] !== null) {
            $this->PullSecret = $param["PullSecret"];
        }

        if (array_key_exists("PullExpired",$param) and $param["PullExpired"] !== null) {
            $this->PullExpired = $param["PullExpired"];
        }

        if (array_key_exists("PushState",$param) and $param["PushState"] !== null) {
            $this->PushState = $param["PushState"];
        }

        if (array_key_exists("PushSecret",$param) and $param["PushSecret"] !== null) {
            $this->PushSecret = $param["PushSecret"];
        }

        if (array_key_exists("PushExpired",$param) and $param["PushExpired"] !== null) {
            $this->PushExpired = $param["PushExpired"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
