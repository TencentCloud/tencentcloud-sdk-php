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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网关联的实例列表。
 *
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method array getCidrBlock() 获取关联实例CIDR。
 * @method void setCidrBlock(array $CidrBlock) 设置关联实例CIDR。
 * @method string getState() 获取关联实例状态：

•  PENDING：申请中
•  ACTIVE：已连接
•  EXPIRED：已过期
•  REJECTED：已拒绝
•  DELETED：已删除
•  FAILED：失败的（2小时后将异步强制解关联）
•  ATTACHING：关联中
•  DETACHING：解关联中
•  DETACHFAILED：解关联失败（2小时后将异步强制解关联）
 * @method void setState(string $State) 设置关联实例状态：

•  PENDING：申请中
•  ACTIVE：已连接
•  EXPIRED：已过期
•  REJECTED：已拒绝
•  DELETED：已删除
•  FAILED：失败的（2小时后将异步强制解关联）
•  ATTACHING：关联中
•  DETACHING：解关联中
•  DETACHFAILED：解关联失败（2小时后将异步强制解关联）
 * @method string getAttachedTime() 获取关联时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachedTime(string $AttachedTime) 设置关联时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class CcnAttachedInstance extends AbstractModel
{
    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var array 关联实例CIDR。
     */
    public $CidrBlock;

    /**
     * @var string 关联实例状态：

•  PENDING：申请中
•  ACTIVE：已连接
•  EXPIRED：已过期
•  REJECTED：已拒绝
•  DELETED：已删除
•  FAILED：失败的（2小时后将异步强制解关联）
•  ATTACHING：关联中
•  DETACHING：解关联中
•  DETACHFAILED：解关联失败（2小时后将异步强制解关联）
     */
    public $State;

    /**
     * @var string 关联时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachedTime;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $CcnId 云联网ID。
     * @param array $CidrBlock 关联实例CIDR。
     * @param string $State 关联实例状态：

•  PENDING：申请中
•  ACTIVE：已连接
•  EXPIRED：已过期
•  REJECTED：已拒绝
•  DELETED：已删除
•  FAILED：失败的（2小时后将异步强制解关联）
•  ATTACHING：关联中
•  DETACHING：解关联中
•  DETACHFAILED：解关联失败（2小时后将异步强制解关联）
     * @param string $AttachedTime 关联时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
