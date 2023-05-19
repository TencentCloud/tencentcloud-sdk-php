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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * live实例详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getCertId() 获取已绑定的证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置已绑定的证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
 * @method void setStatus(integer $Status) 设置-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
 */
class LiveInstanceDetail extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 已绑定的证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var integer -1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
     */
    public $Status;

    /**
     * @param string $Domain 域名
     * @param string $CertId 已绑定的证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status -1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
