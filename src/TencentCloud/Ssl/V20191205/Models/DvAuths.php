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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回参数键为 DvAuths 的内容。
 *
 * @method string getDvAuthKey() 获取证书域名验证记录Key
 * @method void setDvAuthKey(string $DvAuthKey) 设置证书域名验证记录Key
 * @method string getDvAuthValue() 获取证书域名验证记录值
 * @method void setDvAuthValue(string $DvAuthValue) 设置证书域名验证记录值
 * @method string getDvAuthDomain() 获取证书域名验证域名值
 * @method void setDvAuthDomain(string $DvAuthDomain) 设置证书域名验证域名值
 * @method string getDvAuthPath() 获取证书域名验证文件路径， 仅FILE、FILE_PROXY使用
 * @method void setDvAuthPath(string $DvAuthPath) 设置证书域名验证文件路径， 仅FILE、FILE_PROXY使用
 * @method string getDvAuthSubDomain() 获取证书域名验证子域名
 * @method void setDvAuthSubDomain(string $DvAuthSubDomain) 设置证书域名验证子域名
 * @method string getDvAuthVerifyType() 获取证书域名验证类型，取值：
TXT：DNS域名验证添加TXT记录
FILE：域名文件验证
CNAME：DNS域名验证添加CNAME记录
 * @method void setDvAuthVerifyType(string $DvAuthVerifyType) 设置证书域名验证类型，取值：
TXT：DNS域名验证添加TXT记录
FILE：域名文件验证
CNAME：DNS域名验证添加CNAME记录
 */
class DvAuths extends AbstractModel
{
    /**
     * @var string 证书域名验证记录Key
     */
    public $DvAuthKey;

    /**
     * @var string 证书域名验证记录值
     */
    public $DvAuthValue;

    /**
     * @var string 证书域名验证域名值
     */
    public $DvAuthDomain;

    /**
     * @var string 证书域名验证文件路径， 仅FILE、FILE_PROXY使用
     */
    public $DvAuthPath;

    /**
     * @var string 证书域名验证子域名
     */
    public $DvAuthSubDomain;

    /**
     * @var string 证书域名验证类型，取值：
TXT：DNS域名验证添加TXT记录
FILE：域名文件验证
CNAME：DNS域名验证添加CNAME记录
     */
    public $DvAuthVerifyType;

    /**
     * @param string $DvAuthKey 证书域名验证记录Key
     * @param string $DvAuthValue 证书域名验证记录值
     * @param string $DvAuthDomain 证书域名验证域名值
     * @param string $DvAuthPath 证书域名验证文件路径， 仅FILE、FILE_PROXY使用
     * @param string $DvAuthSubDomain 证书域名验证子域名
     * @param string $DvAuthVerifyType 证书域名验证类型，取值：
TXT：DNS域名验证添加TXT记录
FILE：域名文件验证
CNAME：DNS域名验证添加CNAME记录
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
        if (array_key_exists("DvAuthKey",$param) and $param["DvAuthKey"] !== null) {
            $this->DvAuthKey = $param["DvAuthKey"];
        }

        if (array_key_exists("DvAuthValue",$param) and $param["DvAuthValue"] !== null) {
            $this->DvAuthValue = $param["DvAuthValue"];
        }

        if (array_key_exists("DvAuthDomain",$param) and $param["DvAuthDomain"] !== null) {
            $this->DvAuthDomain = $param["DvAuthDomain"];
        }

        if (array_key_exists("DvAuthPath",$param) and $param["DvAuthPath"] !== null) {
            $this->DvAuthPath = $param["DvAuthPath"];
        }

        if (array_key_exists("DvAuthSubDomain",$param) and $param["DvAuthSubDomain"] !== null) {
            $this->DvAuthSubDomain = $param["DvAuthSubDomain"];
        }

        if (array_key_exists("DvAuthVerifyType",$param) and $param["DvAuthVerifyType"] !== null) {
            $this->DvAuthVerifyType = $param["DvAuthVerifyType"];
        }
    }
}
