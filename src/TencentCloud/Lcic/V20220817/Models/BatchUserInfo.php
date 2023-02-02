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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量注册用户信息
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。

 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。

 * @method string getUserId() 获取用户ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginId() 获取用户在客户系统的Id。 若用户注册时该字段为空，则默认为 UserId 值一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginId(string $OriginId) 设置用户在客户系统的Id。 若用户注册时该字段为空，则默认为 UserId 值一致。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchUserInfo extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。

     */
    public $SdkAppId;

    /**
     * @var string 用户ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户在客户系统的Id。 若用户注册时该字段为空，则默认为 UserId 值一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginId;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。

     * @param string $UserId 用户ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginId 用户在客户系统的Id。 若用户注册时该字段为空，则默认为 UserId 值一致。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }
    }
}
