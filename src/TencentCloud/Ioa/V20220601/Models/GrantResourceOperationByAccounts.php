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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权操作
 *
 * @method integer getOperationType() 获取操作类型: 1-增加授权 2-删除授权;
 * @method void setOperationType(integer $OperationType) 设置操作类型: 1-增加授权 2-删除授权;
 * @method integer getResourceId() 获取资源或资源组Id
 * @method void setResourceId(integer $ResourceId) 设置资源或资源组Id
 * @method integer getResourceType() 获取资源类型 ,1:资源 2:资源组
 * @method void setResourceType(integer $ResourceType) 设置资源类型 ,1:资源 2:资源组
 * @method integer getExpireTime() 获取过期时间,时间戳(秒)
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间,时间戳(秒)
 * @method string getAccountUserId() 获取账号userid
 * @method void setAccountUserId(string $AccountUserId) 设置账号userid
 * @method integer getMenuId() 获取账号目录ID
 * @method void setMenuId(integer $MenuId) 设置账号目录ID
 */
class GrantResourceOperationByAccounts extends AbstractModel
{
    /**
     * @var integer 操作类型: 1-增加授权 2-删除授权;
     */
    public $OperationType;

    /**
     * @var integer 资源或资源组Id
     */
    public $ResourceId;

    /**
     * @var integer 资源类型 ,1:资源 2:资源组
     */
    public $ResourceType;

    /**
     * @var integer 过期时间,时间戳(秒)
     */
    public $ExpireTime;

    /**
     * @var string 账号userid
     */
    public $AccountUserId;

    /**
     * @var integer 账号目录ID
     */
    public $MenuId;

    /**
     * @param integer $OperationType 操作类型: 1-增加授权 2-删除授权;
     * @param integer $ResourceId 资源或资源组Id
     * @param integer $ResourceType 资源类型 ,1:资源 2:资源组
     * @param integer $ExpireTime 过期时间,时间戳(秒)
     * @param string $AccountUserId 账号userid
     * @param integer $MenuId 账号目录ID
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AccountUserId",$param) and $param["AccountUserId"] !== null) {
            $this->AccountUserId = $param["AccountUserId"];
        }

        if (array_key_exists("MenuId",$param) and $param["MenuId"] !== null) {
            $this->MenuId = $param["MenuId"];
        }
    }
}
