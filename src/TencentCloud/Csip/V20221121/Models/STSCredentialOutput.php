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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * STS临时密钥凭据（出参专用），用于查询详情接口的响应。SecretID和SecretKey字段返回打码后的值，System返回原文
 *
 * @method string getSystem() 获取凭据提供商标识（原文），如tencentCam、aws、aliyun等
 * @method void setSystem(string $System) 设置凭据提供商标识（原文），如tencentCam、aws、aliyun等
 * @method string getSecretID() 获取SecretID（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
 * @method void setSecretID(string $SecretID) 设置SecretID（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
 * @method string getSecretKey() 获取SecretKey（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
 * @method void setSecretKey(string $SecretKey) 设置SecretKey（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
 */
class STSCredentialOutput extends AbstractModel
{
    /**
     * @var string 凭据提供商标识（原文），如tencentCam、aws、aliyun等
     */
    public $System;

    /**
     * @var string SecretID（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
     */
    public $SecretID;

    /**
     * @var string SecretKey（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
     */
    public $SecretKey;

    /**
     * @param string $System 凭据提供商标识（原文），如tencentCam、aws、aliyun等
     * @param string $SecretID SecretID（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
     * @param string $SecretKey SecretKey（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
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
        if (array_key_exists("System",$param) and $param["System"] !== null) {
            $this->System = $param["System"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
