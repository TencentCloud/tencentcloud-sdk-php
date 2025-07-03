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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络域
 *
 * @method integer getId() 获取自增id
 * @method void setId(integer $Id) 设置自增id
 * @method string getDomainId() 获取网络域id
 * @method void setDomainId(string $DomainId) 设置网络域id
 * @method string getDomainName() 获取网络域名称
 * @method void setDomainName(string $DomainName) 设置网络域名称
 * @method string getResourceId() 获取堡垒机id
 * @method void setResourceId(string $ResourceId) 设置堡垒机id
 * @method array getWhiteIpSet() 获取ip，网段
 * @method void setWhiteIpSet(array $WhiteIpSet) 设置ip，网段
 * @method integer getEnabled() 获取是否启用  默认 1启用 0禁用
 * @method void setEnabled(integer $Enabled) 设置是否启用  默认 1启用 0禁用
 * @method integer getStatus() 获取状态 0-已断开  1-已连接
 * @method void setStatus(integer $Status) 设置状态 0-已断开  1-已连接
 * @method string getCreateTime() 获取网络域创建时间
 * @method void setCreateTime(string $CreateTime) 设置网络域创建时间
 * @method integer getDefault() 获取是否资源默认网络域 1-资源默认网络域 0-用户添加网络域
 * @method void setDefault(integer $Default) 设置是否资源默认网络域 1-资源默认网络域 0-用户添加网络域
 */
class Domain extends AbstractModel
{
    /**
     * @var integer 自增id
     */
    public $Id;

    /**
     * @var string 网络域id
     */
    public $DomainId;

    /**
     * @var string 网络域名称
     */
    public $DomainName;

    /**
     * @var string 堡垒机id
     */
    public $ResourceId;

    /**
     * @var array ip，网段
     */
    public $WhiteIpSet;

    /**
     * @var integer 是否启用  默认 1启用 0禁用
     */
    public $Enabled;

    /**
     * @var integer 状态 0-已断开  1-已连接
     */
    public $Status;

    /**
     * @var string 网络域创建时间
     */
    public $CreateTime;

    /**
     * @var integer 是否资源默认网络域 1-资源默认网络域 0-用户添加网络域
     */
    public $Default;

    /**
     * @param integer $Id 自增id
     * @param string $DomainId 网络域id
     * @param string $DomainName 网络域名称
     * @param string $ResourceId 堡垒机id
     * @param array $WhiteIpSet ip，网段
     * @param integer $Enabled 是否启用  默认 1启用 0禁用
     * @param integer $Status 状态 0-已断开  1-已连接
     * @param string $CreateTime 网络域创建时间
     * @param integer $Default 是否资源默认网络域 1-资源默认网络域 0-用户添加网络域
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("WhiteIpSet",$param) and $param["WhiteIpSet"] !== null) {
            $this->WhiteIpSet = $param["WhiteIpSet"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
