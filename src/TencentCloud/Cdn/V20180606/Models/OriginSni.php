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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS回源SNI
 *
 * @method string getSwitch() 获取是否开启HTTPS回源SNI。
开启：on，
关闭：off
 * @method void setSwitch(string $Switch) 设置是否开启HTTPS回源SNI。
开启：on，
关闭：off
 * @method string getServerName() 获取回源域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerName(string $ServerName) 设置回源域名。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginSni extends AbstractModel
{
    /**
     * @var string 是否开启HTTPS回源SNI。
开启：on，
关闭：off
     */
    public $Switch;

    /**
     * @var string 回源域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerName;

    /**
     * @param string $Switch 是否开启HTTPS回源SNI。
开启：on，
关闭：off
     * @param string $ServerName 回源域名。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }
    }
}
