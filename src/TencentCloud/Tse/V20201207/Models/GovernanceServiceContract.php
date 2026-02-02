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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务契约定义
 *
 * @method string getName() 获取契约名称
 * @method void setName(string $Name) 设置契约名称
 * @method string getNamespace() 获取所属服务命名空间
 * @method void setNamespace(string $Namespace) 设置所属服务命名空间
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getID() 获取契约ID
 * @method void setID(string $ID) 设置契约ID
 * @method string getService() 获取所属服务名称
 * @method void setService(string $Service) 设置所属服务名称
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getRevision() 获取信息摘要
 * @method void setRevision(string $Revision) 设置信息摘要
 * @method string getContent() 获取额外内容描述
 * @method void setContent(string $Content) 设置额外内容描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method array getInterfaces() 获取契约接口列表
 * @method void setInterfaces(array $Interfaces) 设置契约接口列表
 * @method array getMetadatas() 获取元数据
 * @method void setMetadatas(array $Metadatas) 设置元数据
 */
class GovernanceServiceContract extends AbstractModel
{
    /**
     * @var string 契约名称
     */
    public $Name;

    /**
     * @var string 所属服务命名空间
     */
    public $Namespace;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 契约ID
     */
    public $ID;

    /**
     * @var string 所属服务名称
     */
    public $Service;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 信息摘要
     */
    public $Revision;

    /**
     * @var string 额外内容描述
     */
    public $Content;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var array 契约接口列表
     */
    public $Interfaces;

    /**
     * @var array 元数据
     */
    public $Metadatas;

    /**
     * @param string $Name 契约名称
     * @param string $Namespace 所属服务命名空间
     * @param string $Protocol 协议
     * @param string $ID 契约ID
     * @param string $Service 所属服务名称
     * @param string $Version 版本
     * @param string $Revision 信息摘要
     * @param string $Content 额外内容描述
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param array $Interfaces 契约接口列表
     * @param array $Metadatas 元数据
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Interfaces",$param) and $param["Interfaces"] !== null) {
            $this->Interfaces = [];
            foreach ($param["Interfaces"] as $key => $value){
                $obj = new GovernanceInterfaceDescription();
                $obj->deserialize($value);
                array_push($this->Interfaces, $obj);
            }
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }
    }
}
