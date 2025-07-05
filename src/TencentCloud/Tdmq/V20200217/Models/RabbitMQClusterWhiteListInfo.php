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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbiteMQ集群白名单信息
 *
 * @method string getWhiteList() 获取废弃
 * @method void setWhiteList(string $WhiteList) 设置废弃
 * @method string getPublicControlConsoleWhiteList() 获取公网管控台白名单
 * @method void setPublicControlConsoleWhiteList(string $PublicControlConsoleWhiteList) 设置公网管控台白名单
 * @method string getPublicDataStreamWhiteList() 获取公网数据流白名单
 * @method void setPublicDataStreamWhiteList(string $PublicDataStreamWhiteList) 设置公网数据流白名单
 * @method string getPublicControlConsoleWhiteListStatus() 获取公网管控台白名单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicControlConsoleWhiteListStatus(string $PublicControlConsoleWhiteListStatus) 设置公网管控台白名单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicDataStreamWhiteListStatus() 获取公网数据流白名单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicDataStreamWhiteListStatus(string $PublicDataStreamWhiteListStatus) 设置公网数据流白名单状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQClusterWhiteListInfo extends AbstractModel
{
    /**
     * @var string 废弃
     */
    public $WhiteList;

    /**
     * @var string 公网管控台白名单
     */
    public $PublicControlConsoleWhiteList;

    /**
     * @var string 公网数据流白名单
     */
    public $PublicDataStreamWhiteList;

    /**
     * @var string 公网管控台白名单状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicControlConsoleWhiteListStatus;

    /**
     * @var string 公网数据流白名单状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicDataStreamWhiteListStatus;

    /**
     * @param string $WhiteList 废弃
     * @param string $PublicControlConsoleWhiteList 公网管控台白名单
     * @param string $PublicDataStreamWhiteList 公网数据流白名单
     * @param string $PublicControlConsoleWhiteListStatus 公网管控台白名单状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicDataStreamWhiteListStatus 公网数据流白名单状态
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
        if (array_key_exists("WhiteList",$param) and $param["WhiteList"] !== null) {
            $this->WhiteList = $param["WhiteList"];
        }

        if (array_key_exists("PublicControlConsoleWhiteList",$param) and $param["PublicControlConsoleWhiteList"] !== null) {
            $this->PublicControlConsoleWhiteList = $param["PublicControlConsoleWhiteList"];
        }

        if (array_key_exists("PublicDataStreamWhiteList",$param) and $param["PublicDataStreamWhiteList"] !== null) {
            $this->PublicDataStreamWhiteList = $param["PublicDataStreamWhiteList"];
        }

        if (array_key_exists("PublicControlConsoleWhiteListStatus",$param) and $param["PublicControlConsoleWhiteListStatus"] !== null) {
            $this->PublicControlConsoleWhiteListStatus = $param["PublicControlConsoleWhiteListStatus"];
        }

        if (array_key_exists("PublicDataStreamWhiteListStatus",$param) and $param["PublicDataStreamWhiteListStatus"] !== null) {
            $this->PublicDataStreamWhiteListStatus = $param["PublicDataStreamWhiteListStatus"];
        }
    }
}
