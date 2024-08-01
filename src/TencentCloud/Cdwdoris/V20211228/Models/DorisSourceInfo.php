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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部doris集群的连接信息
 *
 * @method string getHost() 获取doris集群的fe的ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置doris集群的fe的ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取doris集群的fe的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置doris集群的fe的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取doris集群的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置doris集群的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取doris集群的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置doris集群的密码
注意：此字段可能返回 null，表示取不到有效值。
 */
class DorisSourceInfo extends AbstractModel
{
    /**
     * @var string doris集群的fe的ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var integer doris集群的fe的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string doris集群的账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string doris集群的密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param string $Host doris集群的fe的ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port doris集群的fe的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User doris集群的账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password doris集群的密码
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
