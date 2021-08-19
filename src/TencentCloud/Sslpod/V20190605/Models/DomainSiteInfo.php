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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控的域名站点信息
 *
 * @method integer getId() 获取ID标识
 * @method void setId(integer $Id) 设置ID标识
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method boolean getAutoIP() 获取是否自动获取IP：true：是，false:否
 * @method void setAutoIP(boolean $AutoIP) 设置是否自动获取IP：true：是，false:否
 * @method string getGrade() 获取评级
"A+"，
 "A"，
"A-"，
"B"，
"C"，
"D"，
 "E"，
 "F"，
"T"，
 * @method void setGrade(string $Grade) 设置评级
"A+"，
 "A"，
"A-"，
"B"，
"C"，
"D"，
 "E"，
 "F"，
"T"，
 * @method string getBrand() 获取证书品牌
 * @method void setBrand(string $Brand) 设置证书品牌
 * @method integer getServerType() 获取监控服务类型
0 :Web
1: SMTP
2: IMAP
3: POP3
 * @method void setServerType(integer $ServerType) 设置监控服务类型
0 :Web
1: SMTP
2: IMAP
3: POP3
 * @method integer getGradeCode() 获取评级Code
0："unknown"，
1："A+"，
2： "A"，
3："A-"，
4："B"，
5："C"，
6："D"，
7： "E"，
8： "F"，
9："T"，
 * @method void setGradeCode(integer $GradeCode) 设置评级Code
0："unknown"，
1："A+"，
2： "A"，
3："A-"，
4："B"，
5："C"，
6："D"，
7： "E"，
8： "F"，
9："T"，
 * @method boolean getNotice() 获取是否监控告警；true：是，false:否
 * @method void setNotice(boolean $Notice) 设置是否监控告警；true：是，false:否
 * @method integer getAccountDomainId() 获取账号域名关系ID
 * @method void setAccountDomainId(integer $AccountDomainId) 设置账号域名关系ID
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取域名状态:
连接异常，
证书已过期，
证书已吊销，
证书黑名单，
证书域名不匹配，
证书不可信，
证书密钥弱，
证书即将过期，少于7天，
证书即将过期，少于30天，
正常，
部分异常
 * @method void setStatus(string $Status) 设置域名状态:
连接异常，
证书已过期，
证书已吊销，
证书黑名单，
证书域名不匹配，
证书不可信，
证书密钥弱，
证书即将过期，少于7天，
证书即将过期，少于30天，
正常，
部分异常
 * @method string getPort() 获取域名端口
 * @method void setPort(string $Port) 设置域名端口
 */
class DomainSiteInfo extends AbstractModel
{
    /**
     * @var integer ID标识
     */
    public $Id;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var boolean 是否自动获取IP：true：是，false:否
     */
    public $AutoIP;

    /**
     * @var string 评级
"A+"，
 "A"，
"A-"，
"B"，
"C"，
"D"，
 "E"，
 "F"，
"T"，
     */
    public $Grade;

    /**
     * @var string 证书品牌
     */
    public $Brand;

    /**
     * @var integer 监控服务类型
0 :Web
1: SMTP
2: IMAP
3: POP3
     */
    public $ServerType;

    /**
     * @var integer 评级Code
0："unknown"，
1："A+"，
2： "A"，
3："A-"，
4："B"，
5："C"，
6："D"，
7： "E"，
8： "F"，
9："T"，
     */
    public $GradeCode;

    /**
     * @var boolean 是否监控告警；true：是，false:否
     */
    public $Notice;

    /**
     * @var integer 账号域名关系ID
     */
    public $AccountDomainId;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 域名状态:
连接异常，
证书已过期，
证书已吊销，
证书黑名单，
证书域名不匹配，
证书不可信，
证书密钥弱，
证书即将过期，少于7天，
证书即将过期，少于30天，
正常，
部分异常
     */
    public $Status;

    /**
     * @var string 域名端口
     */
    public $Port;

    /**
     * @param integer $Id ID标识
     * @param string $Domain 域名
     * @param string $Ip IP地址
     * @param boolean $AutoIP 是否自动获取IP：true：是，false:否
     * @param string $Grade 评级
"A+"，
 "A"，
"A-"，
"B"，
"C"，
"D"，
 "E"，
 "F"，
"T"，
     * @param string $Brand 证书品牌
     * @param integer $ServerType 监控服务类型
0 :Web
1: SMTP
2: IMAP
3: POP3
     * @param integer $GradeCode 评级Code
0："unknown"，
1："A+"，
2： "A"，
3："A-"，
4："B"，
5："C"，
6："D"，
7： "E"，
8： "F"，
9："T"，
     * @param boolean $Notice 是否监控告警；true：是，false:否
     * @param integer $AccountDomainId 账号域名关系ID
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 域名状态:
连接异常，
证书已过期，
证书已吊销，
证书黑名单，
证书域名不匹配，
证书不可信，
证书密钥弱，
证书即将过期，少于7天，
证书即将过期，少于30天，
正常，
部分异常
     * @param string $Port 域名端口
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("AutoIP",$param) and $param["AutoIP"] !== null) {
            $this->AutoIP = $param["AutoIP"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("GradeCode",$param) and $param["GradeCode"] !== null) {
            $this->GradeCode = $param["GradeCode"];
        }

        if (array_key_exists("Notice",$param) and $param["Notice"] !== null) {
            $this->Notice = $param["Notice"];
        }

        if (array_key_exists("AccountDomainId",$param) and $param["AccountDomainId"] !== null) {
            $this->AccountDomainId = $param["AccountDomainId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
