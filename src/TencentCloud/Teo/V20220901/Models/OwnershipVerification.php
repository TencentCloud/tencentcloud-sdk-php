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
 * 该结构体表示各种场景、模式下，用于验证用户对站点域名的归属权内容。
 *
 * @method DnsVerification getDnsVerification() 获取CNAME 接入，使用 DNS 解析验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsVerification(DnsVerification $DnsVerification) 设置CNAME 接入，使用 DNS 解析验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileVerification getFileVerification() 获取CNAME 接入，使用文件验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileVerification(FileVerification $FileVerification) 设置CNAME 接入，使用文件验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method NsVerification getNsVerification() 获取NS 接入，切换 DNS 服务器所需的信息。详情参考 [修改 DNS 服务器](https://cloud.tencent.com/document/product/1552/90452)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNsVerification(NsVerification $NsVerification) 设置NS 接入，切换 DNS 服务器所需的信息。详情参考 [修改 DNS 服务器](https://cloud.tencent.com/document/product/1552/90452)。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OwnershipVerification extends AbstractModel
{
    /**
     * @var DnsVerification CNAME 接入，使用 DNS 解析验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsVerification;

    /**
     * @var FileVerification CNAME 接入，使用文件验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileVerification;

    /**
     * @var NsVerification NS 接入，切换 DNS 服务器所需的信息。详情参考 [修改 DNS 服务器](https://cloud.tencent.com/document/product/1552/90452)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NsVerification;

    /**
     * @param DnsVerification $DnsVerification CNAME 接入，使用 DNS 解析验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileVerification $FileVerification CNAME 接入，使用文件验证时所需的信息。详情参考 [站点/域名归属权验证
](https://cloud.tencent.com/document/product/1552/70789#7af6ecf8-afca-4e35-8811-b5797ed1bde5)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param NsVerification $NsVerification NS 接入，切换 DNS 服务器所需的信息。详情参考 [修改 DNS 服务器](https://cloud.tencent.com/document/product/1552/90452)。
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
        if (array_key_exists("DnsVerification",$param) and $param["DnsVerification"] !== null) {
            $this->DnsVerification = new DnsVerification();
            $this->DnsVerification->deserialize($param["DnsVerification"]);
        }

        if (array_key_exists("FileVerification",$param) and $param["FileVerification"] !== null) {
            $this->FileVerification = new FileVerification();
            $this->FileVerification->deserialize($param["FileVerification"]);
        }

        if (array_key_exists("NsVerification",$param) and $param["NsVerification"] !== null) {
            $this->NsVerification = new NsVerification();
            $this->NsVerification->deserialize($param["NsVerification"]);
        }
    }
}
