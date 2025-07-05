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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本端目的IP端口转换复杂结构
 *
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method integer getOriginalPort() 获取源端口
 * @method void setOriginalPort(integer $OriginalPort) 设置源端口
 * @method string getOriginalIp() 获取源IP
 * @method void setOriginalIp(string $OriginalIp) 设置源IP
 * @method integer getTranslationPort() 获取目的端口
 * @method void setTranslationPort(integer $TranslationPort) 设置目的端口
 * @method string getTranslationIp() 获取目的IP
 * @method void setTranslationIp(string $TranslationIp) 设置目的IP
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class LocalDestinationIpPortTranslationNatRule extends AbstractModel
{
    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var integer 源端口
     */
    public $OriginalPort;

    /**
     * @var string 源IP
     */
    public $OriginalIp;

    /**
     * @var integer 目的端口
     */
    public $TranslationPort;

    /**
     * @var string 目的IP
     */
    public $TranslationIp;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $Protocol 协议
     * @param integer $OriginalPort 源端口
     * @param string $OriginalIp 源IP
     * @param integer $TranslationPort 目的端口
     * @param string $TranslationIp 目的IP
     * @param string $Description 描述
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OriginalPort",$param) and $param["OriginalPort"] !== null) {
            $this->OriginalPort = $param["OriginalPort"];
        }

        if (array_key_exists("OriginalIp",$param) and $param["OriginalIp"] !== null) {
            $this->OriginalIp = $param["OriginalIp"];
        }

        if (array_key_exists("TranslationPort",$param) and $param["TranslationPort"] !== null) {
            $this->TranslationPort = $param["TranslationPort"];
        }

        if (array_key_exists("TranslationIp",$param) and $param["TranslationIp"] !== null) {
            $this->TranslationIp = $param["TranslationIp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
