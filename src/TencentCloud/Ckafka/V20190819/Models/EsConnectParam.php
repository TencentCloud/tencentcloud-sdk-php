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
 * Es连接源参数
 *
 * @method integer getPort() 获取<p>Es的连接port</p>
 * @method void setPort(integer $Port) 设置<p>Es的连接port</p>
 * @method string getUserName() 获取<p>Es连接源的用户名</p>
 * @method void setUserName(string $UserName) 设置<p>Es连接源的用户名</p>
 * @method string getPassword() 获取<p>Es连接源的密码</p>
 * @method void setPassword(string $Password) 设置<p>Es连接源的密码</p>
 * @method string getResource() 获取<p>Es连接源的实例资源</p>
 * @method void setResource(string $Resource) 设置<p>Es连接源的实例资源</p>
 * @method boolean getSelfBuilt() 获取<p>Es连接源是否为自建集群</p>
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置<p>Es连接源是否为自建集群</p>
 * @method string getServiceVip() 获取<p>Es连接源的实例vip，当为腾讯云实例时，必填</p>
 * @method void setServiceVip(string $ServiceVip) 设置<p>Es连接源的实例vip，当为腾讯云实例时，必填</p>
 * @method string getUniqVpcId() 获取<p>Es连接源的vpcId，当为腾讯云实例时，必填</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>Es连接源的vpcId，当为腾讯云实例时，必填</p>
 * @method boolean getIsUpdate() 获取<p>是否更新到关联的Datahub任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置<p>是否更新到关联的Datahub任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsType() 获取<p>es类型</p><p>枚举值：</p><ul><li>CLUSTER： 普通集群es</li><li>SERVERLESS： serverless形态es</li></ul>
 * @method void setEsType(string $EsType) 设置<p>es类型</p><p>枚举值：</p><ul><li>CLUSTER： 普通集群es</li><li>SERVERLESS： serverless形态es</li></ul>
 * @method string getEsVersion() 获取<p>es版本</p><p>默认值：7.14.2</p>
 * @method void setEsVersion(string $EsVersion) 设置<p>es版本</p><p>默认值：7.14.2</p>
 * @method string getEndpointUrl() 获取<p>endpointUrl，es的serverless版本的访问入口地址</p>
 * @method void setEndpointUrl(string $EndpointUrl) 设置<p>endpointUrl，es的serverless版本的访问入口地址</p>
 * @method string getProtocol() 获取<p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
 */
class EsConnectParam extends AbstractModel
{
    /**
     * @var integer <p>Es的连接port</p>
     */
    public $Port;

    /**
     * @var string <p>Es连接源的用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>Es连接源的密码</p>
     */
    public $Password;

    /**
     * @var string <p>Es连接源的实例资源</p>
     */
    public $Resource;

    /**
     * @var boolean <p>Es连接源是否为自建集群</p>
     */
    public $SelfBuilt;

    /**
     * @var string <p>Es连接源的实例vip，当为腾讯云实例时，必填</p>
     */
    public $ServiceVip;

    /**
     * @var string <p>Es连接源的vpcId，当为腾讯云实例时，必填</p>
     */
    public $UniqVpcId;

    /**
     * @var boolean <p>是否更新到关联的Datahub任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @var string <p>es类型</p><p>枚举值：</p><ul><li>CLUSTER： 普通集群es</li><li>SERVERLESS： serverless形态es</li></ul>
     */
    public $EsType;

    /**
     * @var string <p>es版本</p><p>默认值：7.14.2</p>
     */
    public $EsVersion;

    /**
     * @var string <p>endpointUrl，es的serverless版本的访问入口地址</p>
     */
    public $EndpointUrl;

    /**
     * @var string <p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
     */
    public $Protocol;

    /**
     * @param integer $Port <p>Es的连接port</p>
     * @param string $UserName <p>Es连接源的用户名</p>
     * @param string $Password <p>Es连接源的密码</p>
     * @param string $Resource <p>Es连接源的实例资源</p>
     * @param boolean $SelfBuilt <p>Es连接源是否为自建集群</p>
     * @param string $ServiceVip <p>Es连接源的实例vip，当为腾讯云实例时，必填</p>
     * @param string $UniqVpcId <p>Es连接源的vpcId，当为腾讯云实例时，必填</p>
     * @param boolean $IsUpdate <p>是否更新到关联的Datahub任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsType <p>es类型</p><p>枚举值：</p><ul><li>CLUSTER： 普通集群es</li><li>SERVERLESS： serverless形态es</li></ul>
     * @param string $EsVersion <p>es版本</p><p>默认值：7.14.2</p>
     * @param string $EndpointUrl <p>endpointUrl，es的serverless版本的访问入口地址</p>
     * @param string $Protocol <p>集群版 ES 连接协议，默认http协议</p><p>枚举值：</p><ul><li>http： http协议</li><li>https： https协议</li></ul>
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("EsType",$param) and $param["EsType"] !== null) {
            $this->EsType = $param["EsType"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("EndpointUrl",$param) and $param["EndpointUrl"] !== null) {
            $this->EndpointUrl = $param["EndpointUrl"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
