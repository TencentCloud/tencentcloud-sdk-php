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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户密钥对管理
 *
 * @method string getName() 获取<p>用户创建的集成的名称</p>
 * @method void setName(string $Name) 设置<p>用户创建的集成的名称</p>
 * @method string getDescription() 获取<p>用户对创建的集成的描述</p>
 * @method void setDescription(string $Description) 设置<p>用户对创建的集成的描述</p>
 * @method string getKeyID() 获取<p>集成ID，用户创建的集成的标识id，前半部分用户填写，后半部分平台按照一定规则生成</p>
 * @method void setKeyID(string $KeyID) 设置<p>集成ID，用户创建的集成的标识id，前半部分用户填写，后半部分平台按照一定规则生成</p>
 * @method string getExt() 获取<p>额外信息,根据集成类型不同，ext会有不同的子结构</p>
 * @method void setExt(string $Ext) 设置<p>额外信息,根据集成类型不同，ext会有不同的子结构</p>
 * @method string getAuthTypeCode() 获取<p>集成类型Code</p>
 * @method void setAuthTypeCode(string $AuthTypeCode) 设置<p>集成类型Code</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method BindServiceList getBindServiceList() 获取<p>引用该集成的服务列表</p>
 * @method void setBindServiceList(BindServiceList $BindServiceList) 设置<p>引用该集成的服务列表</p>
 * @method string getAuthTypeName() 获取<p>AuthTypeName 和AuthType 分别1-1对应</p>
 * @method void setAuthTypeName(string $AuthTypeName) 设置<p>AuthTypeName 和AuthType 分别1-1对应</p>
 * @method string getTicketID() 获取<p>github、gitlab、gitee、腾讯会议等oauth类型的，需要传这个ticket_id，创建的密钥对跟auth_ticket_token(对于github、gitlab、gitee)、weda_ticket_token(对于腾讯会议)关联起来</p>
 * @method void setTicketID(string $TicketID) 设置<p>github、gitlab、gitee、腾讯会议等oauth类型的，需要传这个ticket_id，创建的密钥对跟auth_ticket_token(对于github、gitlab、gitee)、weda_ticket_token(对于腾讯会议)关联起来</p>
 * @method string getDemoCodeFunctionName() 获取<p>用户在创建(weixinmp、wxvirtualpay、weixin-store、channels、weixinpaydc)这五种之一时创建的关联的示例代码云函数的函数名</p>
 * @method void setDemoCodeFunctionName(string $DemoCodeFunctionName) 设置<p>用户在创建(weixinmp、wxvirtualpay、weixin-store、channels、weixinpaydc)这五种之一时创建的关联的示例代码云函数的函数名</p>
 * @method string getCreateAt() 获取<p>创建时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>创建时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
 * @method string getUpdateAt() 获取<p>更新时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
 * @method void setUpdateAt(string $UpdateAt) 设置<p>更新时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
 */
class APIsUserKeyInfo extends AbstractModel
{
    /**
     * @var string <p>用户创建的集成的名称</p>
     */
    public $Name;

    /**
     * @var string <p>用户对创建的集成的描述</p>
     */
    public $Description;

    /**
     * @var string <p>集成ID，用户创建的集成的标识id，前半部分用户填写，后半部分平台按照一定规则生成</p>
     */
    public $KeyID;

    /**
     * @var string <p>额外信息,根据集成类型不同，ext会有不同的子结构</p>
     */
    public $Ext;

    /**
     * @var string <p>集成类型Code</p>
     */
    public $AuthTypeCode;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var BindServiceList <p>引用该集成的服务列表</p>
     */
    public $BindServiceList;

    /**
     * @var string <p>AuthTypeName 和AuthType 分别1-1对应</p>
     */
    public $AuthTypeName;

    /**
     * @var string <p>github、gitlab、gitee、腾讯会议等oauth类型的，需要传这个ticket_id，创建的密钥对跟auth_ticket_token(对于github、gitlab、gitee)、weda_ticket_token(对于腾讯会议)关联起来</p>
     */
    public $TicketID;

    /**
     * @var string <p>用户在创建(weixinmp、wxvirtualpay、weixin-store、channels、weixinpaydc)这五种之一时创建的关联的示例代码云函数的函数名</p>
     */
    public $DemoCodeFunctionName;

    /**
     * @var string <p>创建时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
     */
    public $CreateAt;

    /**
     * @var string <p>更新时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
     */
    public $UpdateAt;

    /**
     * @param string $Name <p>用户创建的集成的名称</p>
     * @param string $Description <p>用户对创建的集成的描述</p>
     * @param string $KeyID <p>集成ID，用户创建的集成的标识id，前半部分用户填写，后半部分平台按照一定规则生成</p>
     * @param string $Ext <p>额外信息,根据集成类型不同，ext会有不同的子结构</p>
     * @param string $AuthTypeCode <p>集成类型Code</p>
     * @param string $Status <p>状态</p>
     * @param BindServiceList $BindServiceList <p>引用该集成的服务列表</p>
     * @param string $AuthTypeName <p>AuthTypeName 和AuthType 分别1-1对应</p>
     * @param string $TicketID <p>github、gitlab、gitee、腾讯会议等oauth类型的，需要传这个ticket_id，创建的密钥对跟auth_ticket_token(对于github、gitlab、gitee)、weda_ticket_token(对于腾讯会议)关联起来</p>
     * @param string $DemoCodeFunctionName <p>用户在创建(weixinmp、wxvirtualpay、weixin-store、channels、weixinpaydc)这五种之一时创建的关联的示例代码云函数的函数名</p>
     * @param string $CreateAt <p>创建时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
     * @param string $UpdateAt <p>更新时间</p><p>参数格式：2026-05-25T11:18:28+08:00</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyID",$param) and $param["KeyID"] !== null) {
            $this->KeyID = $param["KeyID"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }

        if (array_key_exists("AuthTypeCode",$param) and $param["AuthTypeCode"] !== null) {
            $this->AuthTypeCode = $param["AuthTypeCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BindServiceList",$param) and $param["BindServiceList"] !== null) {
            $this->BindServiceList = new BindServiceList();
            $this->BindServiceList->deserialize($param["BindServiceList"]);
        }

        if (array_key_exists("AuthTypeName",$param) and $param["AuthTypeName"] !== null) {
            $this->AuthTypeName = $param["AuthTypeName"];
        }

        if (array_key_exists("TicketID",$param) and $param["TicketID"] !== null) {
            $this->TicketID = $param["TicketID"];
        }

        if (array_key_exists("DemoCodeFunctionName",$param) and $param["DemoCodeFunctionName"] !== null) {
            $this->DemoCodeFunctionName = $param["DemoCodeFunctionName"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
