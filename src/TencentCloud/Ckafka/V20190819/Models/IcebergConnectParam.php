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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Iceberg连接源参数
 *
 * @method string getServiceVip() 获取<p>EMR实例的HiveMetaStore节点IP</p><p>参数格式：多个使用英文分号;分隔</p><p>创建连接时必选，编辑连接时不接收该参数</p>
 * @method void setServiceVip(string $ServiceVip) 设置<p>EMR实例的HiveMetaStore节点IP</p><p>参数格式：多个使用英文分号;分隔</p><p>创建连接时必选，编辑连接时不接收该参数</p>
 * @method string getResource() 获取<p>EMR实例ID</p><p>创建连接时必选，编辑连接时不接收该参数</p>
 * @method void setResource(string $Resource) 设置<p>EMR实例ID</p><p>创建连接时必选，编辑连接时不接收该参数</p>
 * @method string getUniqVpcId() 获取<p>EMR实例的集群网络vpcId</p><p>创建连接时必选，编辑连接时不接收该参数</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>EMR实例的集群网络vpcId</p><p>创建连接时必选，编辑连接时不接收该参数</p>
 * @method string getAuthType() 获取<p>认证类型</p><p>枚举值：</p><ul><li>NONE： 无认证</li><li>KERBEROS： Kerberos认证</li></ul><p>开启Kerberos认证的EMR实例，此处需传入KERBEROS，创建连接时必选，编辑连接时非必选</p>
 * @method void setAuthType(string $AuthType) 设置<p>认证类型</p><p>枚举值：</p><ul><li>NONE： 无认证</li><li>KERBEROS： Kerberos认证</li></ul><p>开启Kerberos认证的EMR实例，此处需传入KERBEROS，创建连接时必选，编辑连接时非必选</p>
 * @method array getEniIdList() 获取<p>EMR实例的HiveMetaStore节点IP绑定的弹性网卡Id列表</p><p>数量和顺序必须与ServiceVip字段中的多个IP对应，创建连接时必选，编辑连接时不接收该参数</p>
 * @method void setEniIdList(array $EniIdList) 设置<p>EMR实例的HiveMetaStore节点IP绑定的弹性网卡Id列表</p><p>数量和顺序必须与ServiceVip字段中的多个IP对应，创建连接时必选，编辑连接时不接收该参数</p>
 * @method string getCatalogType() 获取<p>Catalog数据目录类型</p><p>枚举值：</p><ul><li>HIVE： Hive Catalog</li></ul><p>默认值：HIVE</p><p>仅支持Hive Catalog</p>
 * @method void setCatalogType(string $CatalogType) 设置<p>Catalog数据目录类型</p><p>枚举值：</p><ul><li>HIVE： Hive Catalog</li></ul><p>默认值：HIVE</p><p>仅支持Hive Catalog</p>
 * @method string getKeyTabContent() 获取<p>用于Kerberos认证的user.keytab文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
 * @method void setKeyTabContent(string $KeyTabContent) 设置<p>用于Kerberos认证的user.keytab文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
 * @method string getKRB5ConfContent() 获取<p>用于Kerberos认证的krb5.conf文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
 * @method void setKRB5ConfContent(string $KRB5ConfContent) 设置<p>用于Kerberos认证的krb5.conf文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
 * @method string getKerberosUserPrincipal() 获取<p>用户的Kerberos身份凭证</p>
 * @method void setKerberosUserPrincipal(string $KerberosUserPrincipal) 设置<p>用户的Kerberos身份凭证</p>
 * @method string getKerberosPrincipal() 获取<p>HiveMetastore服务端配置的Kerberos Principal</p><p>hive-site.xml中hive.metastore.kerberos.principal的值</p>
 * @method void setKerberosPrincipal(string $KerberosPrincipal) 设置<p>HiveMetastore服务端配置的Kerberos Principal</p><p>hive-site.xml中hive.metastore.kerberos.principal的值</p>
 * @method boolean getIsUpdate() 获取<p>是否更新并重启所有关联的连接器任务</p><p>编辑连接时使用，如果不传，则根据认证类型及认证参数是否发生变化，来判断是否更新并重启所有关联的连接器任务</p>
 * @method void setIsUpdate(boolean $IsUpdate) 设置<p>是否更新并重启所有关联的连接器任务</p><p>编辑连接时使用，如果不传，则根据认证类型及认证参数是否发生变化，来判断是否更新并重启所有关联的连接器任务</p>
 */
class IcebergConnectParam extends AbstractModel
{
    /**
     * @var string <p>EMR实例的HiveMetaStore节点IP</p><p>参数格式：多个使用英文分号;分隔</p><p>创建连接时必选，编辑连接时不接收该参数</p>
     */
    public $ServiceVip;

    /**
     * @var string <p>EMR实例ID</p><p>创建连接时必选，编辑连接时不接收该参数</p>
     */
    public $Resource;

    /**
     * @var string <p>EMR实例的集群网络vpcId</p><p>创建连接时必选，编辑连接时不接收该参数</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>认证类型</p><p>枚举值：</p><ul><li>NONE： 无认证</li><li>KERBEROS： Kerberos认证</li></ul><p>开启Kerberos认证的EMR实例，此处需传入KERBEROS，创建连接时必选，编辑连接时非必选</p>
     */
    public $AuthType;

    /**
     * @var array <p>EMR实例的HiveMetaStore节点IP绑定的弹性网卡Id列表</p><p>数量和顺序必须与ServiceVip字段中的多个IP对应，创建连接时必选，编辑连接时不接收该参数</p>
     */
    public $EniIdList;

    /**
     * @var string <p>Catalog数据目录类型</p><p>枚举值：</p><ul><li>HIVE： Hive Catalog</li></ul><p>默认值：HIVE</p><p>仅支持Hive Catalog</p>
     */
    public $CatalogType;

    /**
     * @var string <p>用于Kerberos认证的user.keytab文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
     */
    public $KeyTabContent;

    /**
     * @var string <p>用于Kerberos认证的krb5.conf文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
     */
    public $KRB5ConfContent;

    /**
     * @var string <p>用户的Kerberos身份凭证</p>
     */
    public $KerberosUserPrincipal;

    /**
     * @var string <p>HiveMetastore服务端配置的Kerberos Principal</p><p>hive-site.xml中hive.metastore.kerberos.principal的值</p>
     */
    public $KerberosPrincipal;

    /**
     * @var boolean <p>是否更新并重启所有关联的连接器任务</p><p>编辑连接时使用，如果不传，则根据认证类型及认证参数是否发生变化，来判断是否更新并重启所有关联的连接器任务</p>
     */
    public $IsUpdate;

    /**
     * @param string $ServiceVip <p>EMR实例的HiveMetaStore节点IP</p><p>参数格式：多个使用英文分号;分隔</p><p>创建连接时必选，编辑连接时不接收该参数</p>
     * @param string $Resource <p>EMR实例ID</p><p>创建连接时必选，编辑连接时不接收该参数</p>
     * @param string $UniqVpcId <p>EMR实例的集群网络vpcId</p><p>创建连接时必选，编辑连接时不接收该参数</p>
     * @param string $AuthType <p>认证类型</p><p>枚举值：</p><ul><li>NONE： 无认证</li><li>KERBEROS： Kerberos认证</li></ul><p>开启Kerberos认证的EMR实例，此处需传入KERBEROS，创建连接时必选，编辑连接时非必选</p>
     * @param array $EniIdList <p>EMR实例的HiveMetaStore节点IP绑定的弹性网卡Id列表</p><p>数量和顺序必须与ServiceVip字段中的多个IP对应，创建连接时必选，编辑连接时不接收该参数</p>
     * @param string $CatalogType <p>Catalog数据目录类型</p><p>枚举值：</p><ul><li>HIVE： Hive Catalog</li></ul><p>默认值：HIVE</p><p>仅支持Hive Catalog</p>
     * @param string $KeyTabContent <p>用于Kerberos认证的user.keytab文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
     * @param string $KRB5ConfContent <p>用于Kerberos认证的krb5.conf文件的内容</p><p>入参限制：文件内容需使用Base64编码</p><p>AuthType为KERBEROS时必传</p>
     * @param string $KerberosUserPrincipal <p>用户的Kerberos身份凭证</p>
     * @param string $KerberosPrincipal <p>HiveMetastore服务端配置的Kerberos Principal</p><p>hive-site.xml中hive.metastore.kerberos.principal的值</p>
     * @param boolean $IsUpdate <p>是否更新并重启所有关联的连接器任务</p><p>编辑连接时使用，如果不传，则根据认证类型及认证参数是否发生变化，来判断是否更新并重启所有关联的连接器任务</p>
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
        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("EniIdList",$param) and $param["EniIdList"] !== null) {
            $this->EniIdList = $param["EniIdList"];
        }

        if (array_key_exists("CatalogType",$param) and $param["CatalogType"] !== null) {
            $this->CatalogType = $param["CatalogType"];
        }

        if (array_key_exists("KeyTabContent",$param) and $param["KeyTabContent"] !== null) {
            $this->KeyTabContent = $param["KeyTabContent"];
        }

        if (array_key_exists("KRB5ConfContent",$param) and $param["KRB5ConfContent"] !== null) {
            $this->KRB5ConfContent = $param["KRB5ConfContent"];
        }

        if (array_key_exists("KerberosUserPrincipal",$param) and $param["KerberosUserPrincipal"] !== null) {
            $this->KerberosUserPrincipal = $param["KerberosUserPrincipal"];
        }

        if (array_key_exists("KerberosPrincipal",$param) and $param["KerberosPrincipal"] !== null) {
            $this->KerberosPrincipal = $param["KerberosPrincipal"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }
    }
}
