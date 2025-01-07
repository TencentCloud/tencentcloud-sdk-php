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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KMS密钥信息
 *
 * @method string getKeyId() 获取主密钥 ID。
 * @method void setKeyId(string $KeyId) 设置主密钥 ID。
 * @method string getKeyName() 获取主密钥名称。
 * @method void setKeyName(string $KeyName) 设置主密钥名称。
 * @method string getCreateTime() 获取实例与密钥绑定时间。
 * @method void setCreateTime(string $CreateTime) 设置实例与密钥绑定时间。
 * @method string getStatus() 获取密钥状态。
 * @method void setStatus(string $Status) 设置密钥状态。
 * @method string getKeyUsage() 获取密钥用途。
 * @method void setKeyUsage(string $KeyUsage) 设置密钥用途。
 * @method string getKeyOrigin() 获取密钥来源。
 * @method void setKeyOrigin(string $KeyOrigin) 设置密钥来源。
 * @method string getKmsRegion() 获取kms所在地域。
 * @method void setKmsRegion(string $KmsRegion) 设置kms所在地域。
 */
class KMSInfoDetail extends AbstractModel
{
    /**
     * @var string 主密钥 ID。
     */
    public $KeyId;

    /**
     * @var string 主密钥名称。
     */
    public $KeyName;

    /**
     * @var string 实例与密钥绑定时间。
     */
    public $CreateTime;

    /**
     * @var string 密钥状态。
     */
    public $Status;

    /**
     * @var string 密钥用途。
     */
    public $KeyUsage;

    /**
     * @var string 密钥来源。
     */
    public $KeyOrigin;

    /**
     * @var string kms所在地域。
     */
    public $KmsRegion;

    /**
     * @param string $KeyId 主密钥 ID。
     * @param string $KeyName 主密钥名称。
     * @param string $CreateTime 实例与密钥绑定时间。
     * @param string $Status 密钥状态。
     * @param string $KeyUsage 密钥用途。
     * @param string $KeyOrigin 密钥来源。
     * @param string $KmsRegion kms所在地域。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("KeyOrigin",$param) and $param["KeyOrigin"] !== null) {
            $this->KeyOrigin = $param["KeyOrigin"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }
    }
}
