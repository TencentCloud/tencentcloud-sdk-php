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
 * 域名与协议纬度的CC防护阈值
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议（可取值https）
 * @method void setProtocol(string $Protocol) 设置协议（可取值https）
 * @method integer getCCEnable() 获取开关状态（0：关闭，1：开启）
 * @method void setCCEnable(integer $CCEnable) 设置开关状态（0：关闭，1：开启）
 * @method integer getCCThreshold() 获取cc防护阈值
 * @method void setCCThreshold(integer $CCThreshold) 设置cc防护阈值
 */
class ListenerCcThreholdConfig extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议（可取值https）
     */
    public $Protocol;

    /**
     * @var integer 开关状态（0：关闭，1：开启）
     */
    public $CCEnable;

    /**
     * @var integer cc防护阈值
     */
    public $CCThreshold;

    /**
     * @param string $Domain 域名
     * @param string $Protocol 协议（可取值https）
     * @param integer $CCEnable 开关状态（0：关闭，1：开启）
     * @param integer $CCThreshold cc防护阈值
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }

        if (array_key_exists("CCThreshold",$param) and $param["CCThreshold"] !== null) {
            $this->CCThreshold = $param["CCThreshold"];
        }
    }
}
