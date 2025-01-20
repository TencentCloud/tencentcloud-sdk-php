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
 * @method string getOldProtocol() 获取旧协议。
 * @method void setOldProtocol(string $OldProtocol) 设置旧协议。
 * @method integer getOldOriginalPort() 获取旧源端口
 * @method void setOldOriginalPort(integer $OldOriginalPort) 设置旧源端口
 * @method string getOldOriginalIp() 获取旧源IP
 * @method void setOldOriginalIp(string $OldOriginalIp) 设置旧源IP
 * @method integer getOldTranslationPort() 获取旧目的端口
 * @method void setOldTranslationPort(integer $OldTranslationPort) 设置旧目的端口
 * @method string getOldTranslationIp() 获取旧目的IP
 * @method void setOldTranslationIp(string $OldTranslationIp) 设置旧目的IP
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
     * @var string 旧协议。
     */
    public $OldProtocol;

    /**
     * @var integer 旧源端口
     */
    public $OldOriginalPort;

    /**
     * @var string 旧源IP
     */
    public $OldOriginalIp;

    /**
     * @var integer 旧目的端口
     */
    public $OldTranslationPort;

    /**
     * @var string 旧目的IP
     */
    public $OldTranslationIp;

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
     * @param string $OldProtocol 旧协议。
     * @param integer $OldOriginalPort 旧源端口
     * @param string $OldOriginalIp 旧源IP
     * @param integer $OldTranslationPort 旧目的端口
     * @param string $OldTranslationIp 旧目的IP
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
