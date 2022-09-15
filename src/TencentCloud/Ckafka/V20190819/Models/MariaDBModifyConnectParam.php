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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MariaDB连接源参数
 *
 * @method string getResource() 获取MariaDB连接源的实例资源【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置MariaDB连接源的实例资源【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取MariaDB的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置MariaDB的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceVip() 获取MariaDB连接源的实例vip【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceVip(string $ServiceVip) 设置MariaDB连接源的实例vip【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取MariaDB连接源的vpcId【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置MariaDB连接源的vpcId【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取MariaDB连接源的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置MariaDB连接源的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取MariaDB连接源的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置MariaDB连接源的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUpdate() 获取是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
 */
class MariaDBModifyConnectParam extends AbstractModel
{
    /**
     * @var string MariaDB连接源的实例资源【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var integer MariaDB的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string MariaDB连接源的实例vip【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceVip;

    /**
     * @var string MariaDB连接源的vpcId【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string MariaDB连接源的用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string MariaDB连接源的密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var boolean 是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @param string $Resource MariaDB连接源的实例资源【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port MariaDB的连接port【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceVip MariaDB连接源的实例vip【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId MariaDB连接源的vpcId【不支持修改】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName MariaDB连接源的用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password MariaDB连接源的密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUpdate 是否更新到关联的Datahub任务
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }
    }
}
