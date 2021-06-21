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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生成的水印密钥
 *
 * @method string getKeyVersion() 获取密钥版本号
 * @method void setKeyVersion(string $KeyVersion) 设置密钥版本号
 * @method string getKeyContent() 获取密钥内容
 * @method void setKeyContent(string $KeyContent) 设置密钥内容
 * @method string getKeyId() 获取密钥ID
 * @method void setKeyId(string $KeyId) 设置密钥ID
 * @method integer getKeyOpenStatus() 获取密钥启用状态，只有一个取值1(启用)
 * @method void setKeyOpenStatus(integer $KeyOpenStatus) 设置密钥启用状态，只有一个取值1(启用)
 * @method string getCreateTime() 获取密钥生成时间
 * @method void setCreateTime(string $CreateTime) 设置密钥生成时间
 */
class WaterPrintKey extends AbstractModel
{
    /**
     * @var string 密钥版本号
     */
    public $KeyVersion;

    /**
     * @var string 密钥内容
     */
    public $KeyContent;

    /**
     * @var string 密钥ID
     */
    public $KeyId;

    /**
     * @var integer 密钥启用状态，只有一个取值1(启用)
     */
    public $KeyOpenStatus;

    /**
     * @var string 密钥生成时间
     */
    public $CreateTime;

    /**
     * @param string $KeyVersion 密钥版本号
     * @param string $KeyContent 密钥内容
     * @param string $KeyId 密钥ID
     * @param integer $KeyOpenStatus 密钥启用状态，只有一个取值1(启用)
     * @param string $CreateTime 密钥生成时间
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
        if (array_key_exists("KeyVersion",$param) and $param["KeyVersion"] !== null) {
            $this->KeyVersion = $param["KeyVersion"];
        }

        if (array_key_exists("KeyContent",$param) and $param["KeyContent"] !== null) {
            $this->KeyContent = $param["KeyContent"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyOpenStatus",$param) and $param["KeyOpenStatus"] !== null) {
            $this->KeyOpenStatus = $param["KeyOpenStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
