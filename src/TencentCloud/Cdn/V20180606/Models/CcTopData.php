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
 * CC攻击Top数据
 *
 * @method string getIp() 获取客户端Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置客户端Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取访问URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置访问URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAgent() 获取客户端UserAgent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAgent(string $UserAgent) 设置客户端UserAgent
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValue() 获取请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(integer $Value) 设置请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class CcTopData extends AbstractModel
{
    /**
     * @var string 客户端Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 访问URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 客户端UserAgent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAgent;

    /**
     * @var integer 请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @param string $Ip 客户端Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 访问URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAgent 客户端UserAgent
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Value 请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
