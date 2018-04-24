<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getProductKey() 获取产品Key
 * @method void setProductKey(string $ProductKey) 设置产品Key
 * @method string getProductSecret() 获取产品直连密钥
 * @method void setProductSecret(string $ProductSecret) 设置产品直连密钥
 * @method integer getAppId() 获取AppId
 * @method void setAppId(integer $AppId) 设置AppId
 * @method string getName() 获取产品名称
 * @method void setName(string $Name) 设置产品名称
 * @method string getDescription() 获取产品描述
 * @method void setDescription(string $Description) 设置产品描述
 * @method string getDomain() 获取连接域名
 * @method void setDomain(string $Domain) 设置连接域名
 * @method integer getStandard() 获取产品规格
 * @method void setStandard(integer $Standard) 设置产品规格
 * @method integer getAuthType() 获取鉴权类型（0：直连，1：Token）
 * @method void setAuthType(integer $AuthType) 设置鉴权类型（0：直连，1：Token）
 * @method integer getDeleted() 获取删除（0未删除）
 * @method void setDeleted(integer $Deleted) 设置删除（0未删除）
 * @method string getMessage() 获取备注
 * @method void setMessage(string $Message) 设置备注
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method Object getDataTemplate() 获取数据模版
 * @method void setDataTemplate(Object $DataTemplate) 设置数据模版
 */

/**
 *产品
 */
class Product extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 产品Key
     */
    public $ProductKey;

    /**
     * @var string 产品直连密钥
     */
    public $ProductSecret;

    /**
     * @var integer AppId
     */
    public $AppId;

    /**
     * @var string 产品名称
     */
    public $Name;

    /**
     * @var string 产品描述
     */
    public $Description;

    /**
     * @var string 连接域名
     */
    public $Domain;

    /**
     * @var integer 产品规格
     */
    public $Standard;

    /**
     * @var integer 鉴权类型（0：直连，1：Token）
     */
    public $AuthType;

    /**
     * @var integer 删除（0未删除）
     */
    public $Deleted;

    /**
     * @var string 备注
     */
    public $Message;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var Object 数据模版
     */
    public $DataTemplate;
    /**
     * @param string $ProductId 产品Id
     * @param string $ProductKey 产品Key
     * @param string $ProductSecret 产品直连密钥
     * @param integer $AppId AppId
     * @param string $Name 产品名称
     * @param string $Description 产品描述
     * @param string $Domain 连接域名
     * @param integer $Standard 产品规格
     * @param integer $AuthType 鉴权类型（0：直连，1：Token）
     * @param integer $Deleted 删除（0未删除）
     * @param string $Message 备注
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param Object $DataTemplate 数据模版
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductKey",$param) and $param["ProductKey"] !== null) {
            $this->ProductKey = $param["ProductKey"];
        }

        if (array_key_exists("ProductSecret",$param) and $param["ProductSecret"] !== null) {
            $this->ProductSecret = $param["ProductSecret"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DataTemplate",$param) and $param["DataTemplate"] !== null) {
            $this->DataTemplate = new Object();
            $this->DataTemplate->deserialize($param["DataTemplate"]);
        }
    }
}
