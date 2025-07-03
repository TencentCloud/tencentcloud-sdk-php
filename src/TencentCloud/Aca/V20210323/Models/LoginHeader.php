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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录接口请求头
 *
 * @method string getHospitalId() 获取机构ID
 * @method void setHospitalId(string $HospitalId) 设置机构ID
 * @method string getPartnerId() 获取合作方ID
 * @method void setPartnerId(string $PartnerId) 设置合作方ID
 * @method integer getTimestamp() 获取加密时间戳毫秒
 * @method void setTimestamp(integer $Timestamp) 设置加密时间戳毫秒
 * @method string getSignature() 获取签名数据
 * @method void setSignature(string $Signature) 设置签名数据
 * @method string getPlatformId() 获取平台ID，平台版登录时传入
 * @method void setPlatformId(string $PlatformId) 设置平台ID，平台版登录时传入
 */
class LoginHeader extends AbstractModel
{
    /**
     * @var string 机构ID
     */
    public $HospitalId;

    /**
     * @var string 合作方ID
     */
    public $PartnerId;

    /**
     * @var integer 加密时间戳毫秒
     */
    public $Timestamp;

    /**
     * @var string 签名数据
     */
    public $Signature;

    /**
     * @var string 平台ID，平台版登录时传入
     */
    public $PlatformId;

    /**
     * @param string $HospitalId 机构ID
     * @param string $PartnerId 合作方ID
     * @param integer $Timestamp 加密时间戳毫秒
     * @param string $Signature 签名数据
     * @param string $PlatformId 平台ID，平台版登录时传入
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
        if (array_key_exists("HospitalId",$param) and $param["HospitalId"] !== null) {
            $this->HospitalId = $param["HospitalId"];
        }

        if (array_key_exists("PartnerId",$param) and $param["PartnerId"] !== null) {
            $this->PartnerId = $param["PartnerId"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
