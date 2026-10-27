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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 桌面实例绑定状态详情
 *
 * @method string getInstanceId() 获取<p>桌面实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>桌面实例id</p>
 * @method string getBindStatus() 获取<p>实例的绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定<br>UNBINDING-解绑中</p>
 * @method void setBindStatus(string $BindStatus) 设置<p>实例的绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定<br>UNBINDING-解绑中</p>
 * @method string getUserId() 获取<p>绑定的用户id【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置<p>绑定的用户id【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取<p>绑定用户名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>绑定用户名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取<p>绑定用户显示名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置<p>绑定用户显示名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindStatusInfo extends AbstractModel
{
    /**
     * @var string <p>桌面实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例的绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定<br>UNBINDING-解绑中</p>
     */
    public $BindStatus;

    /**
     * @var string <p>绑定的用户id【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string <p>绑定用户名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>绑定用户显示名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @param string $InstanceId <p>桌面实例id</p>
     * @param string $BindStatus <p>实例的绑定状态。取值：<br>UNBOUND - 未绑定<br>BINDING - 绑定中<br>BOUND - 绑定<br>UNBINDING-解绑中</p>
     * @param string $UserId <p>绑定的用户id【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName <p>绑定用户名称【BOUND状态不允许为空】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName <p>绑定用户显示名称【BOUND状态不允许为空】</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }
    }
}
