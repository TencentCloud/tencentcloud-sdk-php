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
 * MySQL连接源参数
 *
 * @method integer getPort() 获取MySQL的连接port
 * @method void setPort(integer $Port) 设置MySQL的连接port
 * @method string getUserName() 获取MySQL连接源的用户名
 * @method void setUserName(string $UserName) 设置MySQL连接源的用户名
 * @method string getPassword() 获取MySQL连接源的密码
 * @method void setPassword(string $Password) 设置MySQL连接源的密码
 * @method string getResource() 获取MySQL连接源的实例资源
 * @method void setResource(string $Resource) 设置MySQL连接源的实例资源
 * @method string getServiceVip() 获取MySQL连接源的实例vip，当为腾讯云实例时，必填
 * @method void setServiceVip(string $ServiceVip) 设置MySQL连接源的实例vip，当为腾讯云实例时，必填
 * @method string getUniqVpcId() 获取MySQL连接源的vpcId，当为腾讯云实例时，必填
 * @method void setUniqVpcId(string $UniqVpcId) 设置MySQL连接源的vpcId，当为腾讯云实例时，必填
 * @method boolean getIsUpdate() 获取是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取当type为TDSQL_C_MYSQL时，必填
 * @method void setClusterId(string $ClusterId) 设置当type为TDSQL_C_MYSQL时，必填
 * @method boolean getSelfBuilt() 获取Mysql 连接源是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置Mysql 连接源是否为自建集群
 */
class MySQLConnectParam extends AbstractModel
{
    /**
     * @var integer MySQL的连接port
     */
    public $Port;

    /**
     * @var string MySQL连接源的用户名
     */
    public $UserName;

    /**
     * @var string MySQL连接源的密码
     */
    public $Password;

    /**
     * @var string MySQL连接源的实例资源
     */
    public $Resource;

    /**
     * @var string MySQL连接源的实例vip，当为腾讯云实例时，必填
     */
    public $ServiceVip;

    /**
     * @var string MySQL连接源的vpcId，当为腾讯云实例时，必填
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @var string 当type为TDSQL_C_MYSQL时，必填
     */
    public $ClusterId;

    /**
     * @var boolean Mysql 连接源是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @param integer $Port MySQL的连接port
     * @param string $UserName MySQL连接源的用户名
     * @param string $Password MySQL连接源的密码
     * @param string $Resource MySQL连接源的实例资源
     * @param string $ServiceVip MySQL连接源的实例vip，当为腾讯云实例时，必填
     * @param string $UniqVpcId MySQL连接源的vpcId，当为腾讯云实例时，必填
     * @param boolean $IsUpdate 是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 当type为TDSQL_C_MYSQL时，必填
     * @param boolean $SelfBuilt Mysql 连接源是否为自建集群
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

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }
    }
}
