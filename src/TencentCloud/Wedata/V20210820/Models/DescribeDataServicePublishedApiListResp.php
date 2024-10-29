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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取数据服务API的发布态信息列表响应内容
 *
 * @method string getId() 获取服务id
 * @method void setId(string $Id) 设置服务id
 * @method string getApiName() 获取服务Api名称
 * @method void setApiName(string $ApiName) 设置服务Api名称
 * @method string getApiFolderName() 获取所属目录名称
 * @method void setApiFolderName(string $ApiFolderName) 设置所属目录名称
 * @method string getApiTagNames() 获取服务Api标签名称集合
 * @method void setApiTagNames(string $ApiTagNames) 设置服务Api标签名称集合
 * @method string getOwnerName() 获取服务负责人
 * @method void setOwnerName(string $OwnerName) 设置服务负责人
 * @method string getCreateTime() 获取服务创建时间
 * @method void setCreateTime(string $CreateTime) 设置服务创建时间
 * @method string getApiId() 获取Api的id
 * @method void setApiId(string $ApiId) 设置Api的id
 * @method integer getAuthType() 获取服务Api认证方式 0:免认证 1:应用认证
 * @method void setAuthType(integer $AuthType) 设置服务Api认证方式 0:免认证 1:应用认证
 * @method integer getApiStatus() 获取服务Api状态 0:创建 1:已上线 2:已删除 3:已下线
 * @method void setApiStatus(integer $ApiStatus) 设置服务Api状态 0:创建 1:已上线 2:已删除 3:已下线
 * @method integer getConfigType() 获取配置方式 0:向导、1、脚本、2、注册Api
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigType(integer $ConfigType) 设置配置方式 0:向导、1、脚本、2、注册Api
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDataServicePublishedApiListResp extends AbstractModel
{
    /**
     * @var string 服务id
     */
    public $Id;

    /**
     * @var string 服务Api名称
     */
    public $ApiName;

    /**
     * @var string 所属目录名称
     */
    public $ApiFolderName;

    /**
     * @var string 服务Api标签名称集合
     */
    public $ApiTagNames;

    /**
     * @var string 服务负责人
     */
    public $OwnerName;

    /**
     * @var string 服务创建时间
     */
    public $CreateTime;

    /**
     * @var string Api的id
     */
    public $ApiId;

    /**
     * @var integer 服务Api认证方式 0:免认证 1:应用认证
     */
    public $AuthType;

    /**
     * @var integer 服务Api状态 0:创建 1:已上线 2:已删除 3:已下线
     */
    public $ApiStatus;

    /**
     * @var integer 配置方式 0:向导、1、脚本、2、注册Api
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigType;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param string $Id 服务id
     * @param string $ApiName 服务Api名称
     * @param string $ApiFolderName 所属目录名称
     * @param string $ApiTagNames 服务Api标签名称集合
     * @param string $OwnerName 服务负责人
     * @param string $CreateTime 服务创建时间
     * @param string $ApiId Api的id
     * @param integer $AuthType 服务Api认证方式 0:免认证 1:应用认证
     * @param integer $ApiStatus 服务Api状态 0:创建 1:已上线 2:已删除 3:已下线
     * @param integer $ConfigType 配置方式 0:向导、1、脚本、2、注册Api
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiFolderName",$param) and $param["ApiFolderName"] !== null) {
            $this->ApiFolderName = $param["ApiFolderName"];
        }

        if (array_key_exists("ApiTagNames",$param) and $param["ApiTagNames"] !== null) {
            $this->ApiTagNames = $param["ApiTagNames"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
