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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户Hive-MetaDB信息
 *
 * @method string getMetaDataJdbcUrl() 获取自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname
 * @method void setMetaDataJdbcUrl(string $MetaDataJdbcUrl) 设置自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname
 * @method string getMetaDataUser() 获取自定义MetaDB用户名
 * @method void setMetaDataUser(string $MetaDataUser) 设置自定义MetaDB用户名
 * @method string getMetaDataPass() 获取自定义MetaDB密码
 * @method void setMetaDataPass(string $MetaDataPass) 设置自定义MetaDB密码
 * @method string getMetaType() 获取hive共享元数据库类型。取值范围：
<li>EMR_DEFAULT_META：表示集群默认创建</li>
<li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li>
<li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method void setMetaType(string $MetaType) 设置hive共享元数据库类型。取值范围：
<li>EMR_DEFAULT_META：表示集群默认创建</li>
<li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li>
<li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method string getUnifyMetaInstanceId() 获取EMR-MetaDB实例
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) 设置EMR-MetaDB实例
 */
class CustomMetaDBInfo extends AbstractModel
{
    /**
     * @var string 自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname
     */
    public $MetaDataJdbcUrl;

    /**
     * @var string 自定义MetaDB用户名
     */
    public $MetaDataUser;

    /**
     * @var string 自定义MetaDB密码
     */
    public $MetaDataPass;

    /**
     * @var string hive共享元数据库类型。取值范围：
<li>EMR_DEFAULT_META：表示集群默认创建</li>
<li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li>
<li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     */
    public $MetaType;

    /**
     * @var string EMR-MetaDB实例
     */
    public $UnifyMetaInstanceId;

    /**
     * @param string $MetaDataJdbcUrl 自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname
     * @param string $MetaDataUser 自定义MetaDB用户名
     * @param string $MetaDataPass 自定义MetaDB密码
     * @param string $MetaType hive共享元数据库类型。取值范围：
<li>EMR_DEFAULT_META：表示集群默认创建</li>
<li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li>
<li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     * @param string $UnifyMetaInstanceId EMR-MetaDB实例
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
        if (array_key_exists("MetaDataJdbcUrl",$param) and $param["MetaDataJdbcUrl"] !== null) {
            $this->MetaDataJdbcUrl = $param["MetaDataJdbcUrl"];
        }

        if (array_key_exists("MetaDataUser",$param) and $param["MetaDataUser"] !== null) {
            $this->MetaDataUser = $param["MetaDataUser"];
        }

        if (array_key_exists("MetaDataPass",$param) and $param["MetaDataPass"] !== null) {
            $this->MetaDataPass = $param["MetaDataPass"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }
    }
}
