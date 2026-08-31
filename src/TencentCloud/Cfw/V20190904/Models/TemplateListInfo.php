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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地址模板列表数据
 *
 * @method string getUuid() 获取<p>模板ID</p>
 * @method void setUuid(string $Uuid) 设置<p>模板ID</p>
 * @method string getName() 获取<p>模板名称</p>
 * @method void setName(string $Name) 设置<p>模板名称</p>
 * @method string getDetail() 获取<p>描述</p>
 * @method void setDetail(string $Detail) 设置<p>描述</p>
 * @method string getIpString() 获取<p>IP模板</p>
 * @method void setIpString(string $IpString) 设置<p>IP模板</p>
 * @method string getInsertTime() 获取<p>插入时间</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>插入时间</p>
 * @method string getUpdateTime() 获取<p>修改时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>修改时间</p>
 * @method integer getType() 获取<p>模板类型</p>
 * @method void setType(integer $Type) 设置<p>模板类型</p>
 * @method integer getRulesNum() 获取<p>关联规则条数</p>
 * @method void setRulesNum(integer $RulesNum) 设置<p>关联规则条数</p>
 * @method string getTemplateId() 获取<p>模板Id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板Id</p>
 * @method string getProtocolType() 获取<p>协议端口模板，协议类型，4:4层协议，7:7层协议</p>
 * @method void setProtocolType(string $ProtocolType) 设置<p>协议端口模板，协议类型，4:4层协议，7:7层协议</p>
 * @method integer getIPNum() 获取<p>模板包含地址数量</p>
 * @method void setIPNum(integer $IPNum) 设置<p>模板包含地址数量</p>
 * @method integer getIpVersion() 获取<p>IP版本,0,IPv4;1,IPv6</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>IP版本,0,IPv4;1,IPv6</p>
 */
class TemplateListInfo extends AbstractModel
{
    /**
     * @var string <p>模板ID</p>
     */
    public $Uuid;

    /**
     * @var string <p>模板名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Detail;

    /**
     * @var string <p>IP模板</p>
     */
    public $IpString;

    /**
     * @var string <p>插入时间</p>
     */
    public $InsertTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>模板类型</p>
     */
    public $Type;

    /**
     * @var integer <p>关联规则条数</p>
     */
    public $RulesNum;

    /**
     * @var string <p>模板Id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>协议端口模板，协议类型，4:4层协议，7:7层协议</p>
     */
    public $ProtocolType;

    /**
     * @var integer <p>模板包含地址数量</p>
     */
    public $IPNum;

    /**
     * @var integer <p>IP版本,0,IPv4;1,IPv6</p>
     */
    public $IpVersion;

    /**
     * @param string $Uuid <p>模板ID</p>
     * @param string $Name <p>模板名称</p>
     * @param string $Detail <p>描述</p>
     * @param string $IpString <p>IP模板</p>
     * @param string $InsertTime <p>插入时间</p>
     * @param string $UpdateTime <p>修改时间</p>
     * @param integer $Type <p>模板类型</p>
     * @param integer $RulesNum <p>关联规则条数</p>
     * @param string $TemplateId <p>模板Id</p>
     * @param string $ProtocolType <p>协议端口模板，协议类型，4:4层协议，7:7层协议</p>
     * @param integer $IPNum <p>模板包含地址数量</p>
     * @param integer $IpVersion <p>IP版本,0,IPv4;1,IPv6</p>
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("IpString",$param) and $param["IpString"] !== null) {
            $this->IpString = $param["IpString"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RulesNum",$param) and $param["RulesNum"] !== null) {
            $this->RulesNum = $param["RulesNum"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("IPNum",$param) and $param["IPNum"] !== null) {
            $this->IPNum = $param["IPNum"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
