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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点验证信息
 *
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getDomain() 获取验证子域名。验证站点时，该值为空。验证子域名是为具体子域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置验证子域名。验证站点时，该值为空。验证子域名是为具体子域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取验证状态，取值有：
<li> pending：验证中；</li>
<li> finished：验证完成。</li>
 * @method void setStatus(string $Status) 设置验证状态，取值有：
<li> pending：验证中；</li>
<li> finished：验证完成。</li>
 * @method AscriptionInfo getAscription() 获取站点归属权校验：Dns校验信息。
 * @method void setAscription(AscriptionInfo $Ascription) 设置站点归属权校验：Dns校验信息。
 * @method array getOriginalNameServers() 获取域名当前的 NS 记录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置域名当前的 NS 记录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileAscriptionInfo getFileAscription() 获取站点归属权校验：文件校验信息。
 * @method void setFileAscription(FileAscriptionInfo $FileAscription) 设置站点归属权校验：文件校验信息。
 */
class Identification extends AbstractModel
{
    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 验证子域名。验证站点时，该值为空。验证子域名是为具体子域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 验证状态，取值有：
<li> pending：验证中；</li>
<li> finished：验证完成。</li>
     */
    public $Status;

    /**
     * @var AscriptionInfo 站点归属权校验：Dns校验信息。
     */
    public $Ascription;

    /**
     * @var array 域名当前的 NS 记录。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalNameServers;

    /**
     * @var FileAscriptionInfo 站点归属权校验：文件校验信息。
     */
    public $FileAscription;

    /**
     * @param string $ZoneName 站点名称。
     * @param string $Domain 验证子域名。验证站点时，该值为空。验证子域名是为具体子域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 验证状态，取值有：
<li> pending：验证中；</li>
<li> finished：验证完成。</li>
     * @param AscriptionInfo $Ascription 站点归属权校验：Dns校验信息。
     * @param array $OriginalNameServers 域名当前的 NS 记录。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileAscriptionInfo $FileAscription 站点归属权校验：文件校验信息。
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ascription",$param) and $param["Ascription"] !== null) {
            $this->Ascription = new AscriptionInfo();
            $this->Ascription->deserialize($param["Ascription"]);
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("FileAscription",$param) and $param["FileAscription"] !== null) {
            $this->FileAscription = new FileAscriptionInfo();
            $this->FileAscription->deserialize($param["FileAscription"]);
        }
    }
}
