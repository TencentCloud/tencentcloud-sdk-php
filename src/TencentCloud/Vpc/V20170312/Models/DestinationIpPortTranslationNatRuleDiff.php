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
 * @method integer getOriginalPort() 获取映射前端口
 * @method void setOriginalPort(integer $OriginalPort) 设置映射前端口
 * @method string getOriginalIp() 获取映射前IP
 * @method void setOriginalIp(string $OriginalIp) 设置映射前IP
 * @method integer getTranslationPort() 获取映射后端口
 * @method void setTranslationPort(integer $TranslationPort) 设置映射后端口
 * @method string getTranslationIp() 获取映射后IP
 * @method void setTranslationIp(string $TranslationIp) 设置映射后IP
 * @method string getOldProtocol() 获取旧协议。
 * @method void setOldProtocol(string $OldProtocol) 设置旧协议。
 * @method integer getOldOriginalPort() 获取旧映射前端口
 * @method void setOldOriginalPort(integer $OldOriginalPort) 设置旧映射前端口
 * @method string getOldOriginalIp() 获取旧映射前IP
 * @method void setOldOriginalIp(string $OldOriginalIp) 设置旧映射前IP
 * @method integer getOldTranslationPort() 获取旧映射后端口
 * @method void setOldTranslationPort(integer $OldTranslationPort) 设置旧映射后端口
 * @method string getOldTranslationIp() 获取旧映射后IP
 * @method void setOldTranslationIp(string $OldTranslationIp) 设置旧映射后IP
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class DestinationIpPortTranslationNatRuleDiff extends AbstractModel
{
    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var integer 映射前端口
     */
    public $OriginalPort;

    /**
     * @var string 映射前IP
     */
    public $OriginalIp;

    /**
     * @var integer 映射后端口
     */
    public $TranslationPort;

    /**
     * @var string 映射后IP
     */
    public $TranslationIp;

    /**
     * @var string 旧协议。
     */
    public $OldProtocol;

    /**
     * @var integer 旧映射前端口
     */
    public $OldOriginalPort;

    /**
     * @var string 旧映射前IP
     */
    public $OldOriginalIp;

    /**
     * @var integer 旧映射后端口
     */
    public $OldTranslationPort;

    /**
     * @var string 旧映射后IP
     */
    public $OldTranslationIp;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $Protocol 协议
     * @param integer $OriginalPort 映射前端口
     * @param string $OriginalIp 映射前IP
     * @param integer $TranslationPort 映射后端口
     * @param string $TranslationIp 映射后IP
     * @param string $OldProtocol 旧协议。
     * @param integer $OldOriginalPort 旧映射前端口
     * @param string $OldOriginalIp 旧映射前IP
     * @param integer $OldTranslationPort 旧映射后端口
     * @param string $OldTranslationIp 旧映射后IP
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

        if (array_key_exists("OldProtocol",$param) and $param["OldProtocol"] !== null) {
            $this->OldProtocol = $param["OldProtocol"];
        }

        if (array_key_exists("OldOriginalPort",$param) and $param["OldOriginalPort"] !== null) {
            $this->OldOriginalPort = $param["OldOriginalPort"];
        }

        if (array_key_exists("OldOriginalIp",$param) and $param["OldOriginalIp"] !== null) {
            $this->OldOriginalIp = $param["OldOriginalIp"];
        }

        if (array_key_exists("OldTranslationPort",$param) and $param["OldTranslationPort"] !== null) {
            $this->OldTranslationPort = $param["OldTranslationPort"];
        }

        if (array_key_exists("OldTranslationIp",$param) and $param["OldTranslationIp"] !== null) {
            $this->OldTranslationIp = $param["OldTranslationIp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
