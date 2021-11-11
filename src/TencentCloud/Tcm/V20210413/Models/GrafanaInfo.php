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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grafana信息
 *
 * @method boolean getEnabled() 获取是否开启
 * @method void setEnabled(boolean $Enabled) 设置是否开启
 * @method string getInternalURL() 获取内网地址
 * @method void setInternalURL(string $InternalURL) 设置内网地址
 * @method string getPublicURL() 获取公网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicURL(string $PublicURL) 设置公网地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicFailedReason() 获取公网失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicFailedReason(string $PublicFailedReason) 设置公网失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicFailedMessage() 获取公网失败详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicFailedMessage(string $PublicFailedMessage) 设置公网失败详细信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class GrafanaInfo extends AbstractModel
{
    /**
     * @var boolean 是否开启
     */
    public $Enabled;

    /**
     * @var string 内网地址
     */
    public $InternalURL;

    /**
     * @var string 公网地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicURL;

    /**
     * @var string 公网失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicFailedReason;

    /**
     * @var string 公网失败详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicFailedMessage;

    /**
     * @param boolean $Enabled 是否开启
     * @param string $InternalURL 内网地址
     * @param string $PublicURL 公网地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicFailedReason 公网失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicFailedMessage 公网失败详细信息
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("InternalURL",$param) and $param["InternalURL"] !== null) {
            $this->InternalURL = $param["InternalURL"];
        }

        if (array_key_exists("PublicURL",$param) and $param["PublicURL"] !== null) {
            $this->PublicURL = $param["PublicURL"];
        }

        if (array_key_exists("PublicFailedReason",$param) and $param["PublicFailedReason"] !== null) {
            $this->PublicFailedReason = $param["PublicFailedReason"];
        }

        if (array_key_exists("PublicFailedMessage",$param) and $param["PublicFailedMessage"] !== null) {
            $this->PublicFailedMessage = $param["PublicFailedMessage"];
        }
    }
}
