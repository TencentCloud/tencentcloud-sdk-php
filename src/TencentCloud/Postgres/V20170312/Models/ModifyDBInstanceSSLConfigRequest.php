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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSSLConfig请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例 ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例 ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method boolean getSSLEnabled() 获取开启或关闭SSL。true - 开启 ；false - 关闭。
 * @method void setSSLEnabled(boolean $SSLEnabled) 设置开启或关闭SSL。true - 开启 ；false - 关闭。
 * @method string getConnectAddress() 获取SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。
 * @method void setConnectAddress(string $ConnectAddress) 设置SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。
 */
class ModifyDBInstanceSSLConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var boolean 开启或关闭SSL。true - 开启 ；false - 关闭。
     */
    public $SSLEnabled;

    /**
     * @var string SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。
     */
    public $ConnectAddress;

    /**
     * @param string $DBInstanceId 实例 ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param boolean $SSLEnabled 开启或关闭SSL。true - 开启 ；false - 关闭。
     * @param string $ConnectAddress SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SSLEnabled",$param) and $param["SSLEnabled"] !== null) {
            $this->SSLEnabled = $param["SSLEnabled"];
        }

        if (array_key_exists("ConnectAddress",$param) and $param["ConnectAddress"] !== null) {
            $this->ConnectAddress = $param["ConnectAddress"];
        }
    }
}
