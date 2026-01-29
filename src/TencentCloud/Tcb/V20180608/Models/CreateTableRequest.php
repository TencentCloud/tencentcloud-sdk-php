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
 * CreateTable请求参数结构体
 *
 * @method string getTableName() 获取数据表名；长度不超过96个字符，可以为英文字母、数字、下划线(_)和短横线(-)的组合，且不能以下划线开头
 * @method void setTableName(string $TableName) 设置数据表名；长度不超过96个字符，可以为英文字母、数字、下划线(_)和短横线(-)的组合，且不能以下划线开头
 * @method string getTag() 获取FlexDB实例ID，如：tnt-nl7hjzasw
 * @method void setTag(string $Tag) 设置FlexDB实例ID，如：tnt-nl7hjzasw
 * @method PermissionInfo getPermissionInfo() 获取FlexDB数据库权限信息
 * @method void setPermissionInfo(PermissionInfo $PermissionInfo) 设置FlexDB数据库权限信息
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method MongoConnector getMongoConnector() 获取MongoDB连接器配置
 * @method void setMongoConnector(MongoConnector $MongoConnector) 设置MongoDB连接器配置
 */
class CreateTableRequest extends AbstractModel
{
    /**
     * @var string 数据表名；长度不超过96个字符，可以为英文字母、数字、下划线(_)和短横线(-)的组合，且不能以下划线开头
     */
    public $TableName;

    /**
     * @var string FlexDB实例ID，如：tnt-nl7hjzasw
     */
    public $Tag;

    /**
     * @var PermissionInfo FlexDB数据库权限信息
     */
    public $PermissionInfo;

    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var MongoConnector MongoDB连接器配置
     */
    public $MongoConnector;

    /**
     * @param string $TableName 数据表名；长度不超过96个字符，可以为英文字母、数字、下划线(_)和短横线(-)的组合，且不能以下划线开头
     * @param string $Tag FlexDB实例ID，如：tnt-nl7hjzasw
     * @param PermissionInfo $PermissionInfo FlexDB数据库权限信息
     * @param string $EnvId 云开发环境ID
     * @param MongoConnector $MongoConnector MongoDB连接器配置
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("PermissionInfo",$param) and $param["PermissionInfo"] !== null) {
            $this->PermissionInfo = new PermissionInfo();
            $this->PermissionInfo->deserialize($param["PermissionInfo"]);
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("MongoConnector",$param) and $param["MongoConnector"] !== null) {
            $this->MongoConnector = new MongoConnector();
            $this->MongoConnector->deserialize($param["MongoConnector"]);
        }
    }
}
