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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vhostd信息
 *
 * @method string getVHostId() 获取命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setVHostId(string $VHostId) 设置命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method integer getMsgTtl() 获取未消费消息的保留时间，以毫秒单位，范围60秒到15天
 * @method void setMsgTtl(integer $MsgTtl) 设置未消费消息的保留时间，以毫秒单位，范围60秒到15天
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间，以毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，以毫秒为单位
 * @method integer getUpdateTime() 获取更新时间，以毫秒为单位
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，以毫秒为单位
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class AMQPVHost extends AbstractModel
{
    /**
     * @var string 命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $VHostId;

    /**
     * @var integer 未消费消息的保留时间，以毫秒单位，范围60秒到15天
     */
    public $MsgTtl;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 创建时间，以毫秒为单位
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，以毫秒为单位
     */
    public $UpdateTime;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $VHostId 命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param integer $MsgTtl 未消费消息的保留时间，以毫秒单位，范围60秒到15天
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间，以毫秒为单位
     * @param integer $UpdateTime 更新时间，以毫秒为单位
     * @param string $Username 用户名
     * @param string $Password 密码
     * @param integer $Status 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
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
        if (array_key_exists("VHostId",$param) and $param["VHostId"] !== null) {
            $this->VHostId = $param["VHostId"];
        }

        if (array_key_exists("MsgTtl",$param) and $param["MsgTtl"] !== null) {
            $this->MsgTtl = $param["MsgTtl"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
