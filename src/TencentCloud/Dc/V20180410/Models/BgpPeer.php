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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bgp参数，包括CloudAsn，Asn，AuthKey
 *
 * @method integer getCloudAsn() 获取腾讯侧BGP ASN
 * @method void setCloudAsn(integer $CloudAsn) 设置腾讯侧BGP ASN
 * @method integer getAsn() 获取用户侧BGP ASN
 * @method void setAsn(integer $Asn) 设置用户侧BGP ASN
 * @method string getAuthKey() 获取用户侧BGP密钥
 * @method void setAuthKey(string $AuthKey) 设置用户侧BGP密钥
 */
class BgpPeer extends AbstractModel
{
    /**
     * @var integer 腾讯侧BGP ASN
     */
    public $CloudAsn;

    /**
     * @var integer 用户侧BGP ASN
     */
    public $Asn;

    /**
     * @var string 用户侧BGP密钥
     */
    public $AuthKey;

    /**
     * @param integer $CloudAsn 腾讯侧BGP ASN
     * @param integer $Asn 用户侧BGP ASN
     * @param string $AuthKey 用户侧BGP密钥
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
        if (array_key_exists("CloudAsn",$param) and $param["CloudAsn"] !== null) {
            $this->CloudAsn = $param["CloudAsn"];
        }

        if (array_key_exists("Asn",$param) and $param["Asn"] !== null) {
            $this->Asn = $param["Asn"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }
    }
}
