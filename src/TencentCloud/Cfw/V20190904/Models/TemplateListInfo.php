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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地址模板列表数据
 *
 * @method string getUuid() 获取模板ID
 * @method void setUuid(string $Uuid) 设置模板ID
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method string getIpString() 获取IP模板
 * @method void setIpString(string $IpString) 设置IP模板
 * @method string getInsertTime() 获取插入时间
 * @method void setInsertTime(string $InsertTime) 设置插入时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method integer getType() 获取模板类型
 * @method void setType(integer $Type) 设置模板类型
 * @method integer getRulesNum() 获取关联规则条数
 * @method void setRulesNum(integer $RulesNum) 设置关联规则条数
 * @method string getTemplateId() 获取模板Id
 * @method void setTemplateId(string $TemplateId) 设置模板Id
 * @method string getProtocolType() 获取协议端口模板，协议类型，4:4层协议，7:7层协议
 * @method void setProtocolType(string $ProtocolType) 设置协议端口模板，协议类型，4:4层协议，7:7层协议
 * @method integer getIPNum() 获取模板包含地址数量
 * @method void setIPNum(integer $IPNum) 设置模板包含地址数量
 * @method integer getIpVersion() 获取IP版本,0,IPv4;1,IPv6
 * @method void setIpVersion(integer $IpVersion) 设置IP版本,0,IPv4;1,IPv6
 */
class TemplateListInfo extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $Uuid;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var string IP模板
     */
    public $IpString;

    /**
     * @var string 插入时间
     */
    public $InsertTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var integer 模板类型
     */
    public $Type;

    /**
     * @var integer 关联规则条数
     */
    public $RulesNum;

    /**
     * @var string 模板Id
     */
    public $TemplateId;

    /**
     * @var string 协议端口模板，协议类型，4:4层协议，7:7层协议
     */
    public $ProtocolType;

    /**
     * @var integer 模板包含地址数量
     */
    public $IPNum;

    /**
     * @var integer IP版本,0,IPv4;1,IPv6
     */
    public $IpVersion;

    /**
     * @param string $Uuid 模板ID
     * @param string $Name 模板名称
     * @param string $Detail 描述
     * @param string $IpString IP模板
     * @param string $InsertTime 插入时间
     * @param string $UpdateTime 修改时间
     * @param integer $Type 模板类型
     * @param integer $RulesNum 关联规则条数
     * @param string $TemplateId 模板Id
     * @param string $ProtocolType 协议端口模板，协议类型，4:4层协议，7:7层协议
     * @param integer $IPNum 模板包含地址数量
     * @param integer $IpVersion IP版本,0,IPv4;1,IPv6
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
