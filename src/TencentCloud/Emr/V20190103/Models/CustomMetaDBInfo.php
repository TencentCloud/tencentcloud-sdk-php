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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户自定义数据库信息
 *
 * @method string getMetaDataJdbcUrl() 获取<p>自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname</p>
 * @method void setMetaDataJdbcUrl(string $MetaDataJdbcUrl) 设置<p>自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname</p>
 * @method string getMetaDataUser() 获取<p>自定义MetaDB用户名</p>
 * @method void setMetaDataUser(string $MetaDataUser) 设置<p>自定义MetaDB用户名</p>
 * @method string getMetaDataPass() 获取<p>自定义MetaDB密码</p>
 * @method void setMetaDataPass(string $MetaDataPass) 设置<p>自定义MetaDB密码</p>
 * @method string getMetaType() 获取<p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method void setMetaType(string $MetaType) 设置<p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method string getUnifyMetaInstanceId() 获取<p>EMR-MetaDB实例</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) 设置<p>EMR-MetaDB实例</p>
 * @method array getComponents() 获取<p>组件</p>
 * @method void setComponents(array $Components) 设置<p>组件</p>
 * @method string getDefaultMetaVersion() 获取<p>metadb版本</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) 设置<p>metadb版本</p>
 * @method string getLinkInstanceId() 获取<p>CDBId</p>
 * @method void setLinkInstanceId(string $LinkInstanceId) 设置<p>CDBId</p>
 */
class CustomMetaDBInfo extends AbstractModel
{
    /**
     * @var string <p>自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname</p>
     */
    public $MetaDataJdbcUrl;

    /**
     * @var string <p>自定义MetaDB用户名</p>
     */
    public $MetaDataUser;

    /**
     * @var string <p>自定义MetaDB密码</p>
     */
    public $MetaDataPass;

    /**
     * @var string <p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     */
    public $MetaType;

    /**
     * @var string <p>EMR-MetaDB实例</p>
     */
    public $UnifyMetaInstanceId;

    /**
     * @var array <p>组件</p>
     */
    public $Components;

    /**
     * @var string <p>metadb版本</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var string <p>CDBId</p>
     */
    public $LinkInstanceId;

    /**
     * @param string $MetaDataJdbcUrl <p>自定义MetaDB的JDBC连接，示例: jdbc:mysql://10.10.10.10:3306/dbname</p>
     * @param string $MetaDataUser <p>自定义MetaDB用户名</p>
     * @param string $MetaDataPass <p>自定义MetaDB密码</p>
     * @param string $MetaType <p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB实例</p>
     * @param array $Components <p>组件</p>
     * @param string $DefaultMetaVersion <p>metadb版本</p>
     * @param string $LinkInstanceId <p>CDBId</p>
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

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("LinkInstanceId",$param) and $param["LinkInstanceId"] !== null) {
            $this->LinkInstanceId = $param["LinkInstanceId"];
        }
    }
}
