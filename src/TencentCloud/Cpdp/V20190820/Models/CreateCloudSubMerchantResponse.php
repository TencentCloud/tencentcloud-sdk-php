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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudSubMerchant返回参数结构体
 *
 * @method string getSubAppId() 获取子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAppId(string $SubAppId) 设置子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelSubMerchantId() 获取渠道子商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取层级，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置层级，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelAppId() 获取渠道应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelAppId(string $ChannelAppId) 设置渠道应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCloudSubMerchantResponse extends AbstractModel
{
    /**
     * @var string 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAppId;

    /**
     * @var string 渠道子商户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSubMerchantId;

    /**
     * @var integer 层级，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 渠道应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelAppId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubAppId 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelSubMerchantId 渠道子商户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 层级，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelAppId 渠道应用ID
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ChannelAppId",$param) and $param["ChannelAppId"] !== null) {
            $this->ChannelAppId = $param["ChannelAppId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
