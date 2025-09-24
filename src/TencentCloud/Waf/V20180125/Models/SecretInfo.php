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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于JWT验签的密钥信息
 *
 * @method string getSecretSource() 获取密钥上传方式，可选值：manual、upload
 * @method void setSecretSource(string $SecretSource) 设置密钥上传方式，可选值：manual、upload
 * @method string getSecretKey() 获取密钥内容（用户手动输入/前端从密钥文件提取出的密钥内容）
 * @method void setSecretKey(string $SecretKey) 设置密钥内容（用户手动输入/前端从密钥文件提取出的密钥内容）
 * @method string getFileName() 获取上传的密钥文件文件名
 * @method void setFileName(string $FileName) 设置上传的密钥文件文件名
 */
class SecretInfo extends AbstractModel
{
    /**
     * @var string 密钥上传方式，可选值：manual、upload
     */
    public $SecretSource;

    /**
     * @var string 密钥内容（用户手动输入/前端从密钥文件提取出的密钥内容）
     */
    public $SecretKey;

    /**
     * @var string 上传的密钥文件文件名
     */
    public $FileName;

    /**
     * @param string $SecretSource 密钥上传方式，可选值：manual、upload
     * @param string $SecretKey 密钥内容（用户手动输入/前端从密钥文件提取出的密钥内容）
     * @param string $FileName 上传的密钥文件文件名
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
        if (array_key_exists("SecretSource",$param) and $param["SecretSource"] !== null) {
            $this->SecretSource = $param["SecretSource"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
