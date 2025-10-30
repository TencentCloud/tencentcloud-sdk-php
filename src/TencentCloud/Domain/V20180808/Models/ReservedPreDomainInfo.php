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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预约预释放域名详情信息
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getReservedStatus() 获取1. 预定成功 2. 预定失败（预定失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成
 * @method void setReservedStatus(integer $ReservedStatus) 设置1. 预定成功 2. 预定失败（预定失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成
 * @method string getFailReason() 获取域名预定失败原因
 * @method void setFailReason(string $FailReason) 设置域名预定失败原因
 * @method string getChangeOwnerTime() 获取预计变更所有权时间（仅用于参考，实际时间会存在误差）
 * @method void setChangeOwnerTime(string $ChangeOwnerTime) 设置预计变更所有权时间（仅用于参考，实际时间会存在误差）
 * @method string getRegTime() 获取注册时间
 * @method void setRegTime(string $RegTime) 设置注册时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getResourceId() 获取资源ID，用于删除资源信息
 * @method void setResourceId(string $ResourceId) 设置资源ID，用于删除资源信息
 * @method string getBusinessId() 获取业务ID
 * @method void setBusinessId(string $BusinessId) 设置业务ID
 */
class ReservedPreDomainInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 1. 预定成功 2. 预定失败（预定失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成
     */
    public $ReservedStatus;

    /**
     * @var string 域名预定失败原因
     */
    public $FailReason;

    /**
     * @var string 预计变更所有权时间（仅用于参考，实际时间会存在误差）
     */
    public $ChangeOwnerTime;

    /**
     * @var string 注册时间
     */
    public $RegTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string 资源ID，用于删除资源信息
     */
    public $ResourceId;

    /**
     * @var string 业务ID
     */
    public $BusinessId;

    /**
     * @param string $Domain 域名
     * @param integer $ReservedStatus 1. 预定成功 2. 预定失败（预定失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成
     * @param string $FailReason 域名预定失败原因
     * @param string $ChangeOwnerTime 预计变更所有权时间（仅用于参考，实际时间会存在误差）
     * @param string $RegTime 注册时间
     * @param string $ExpireTime 到期时间
     * @param string $ResourceId 资源ID，用于删除资源信息
     * @param string $BusinessId 业务ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ReservedStatus",$param) and $param["ReservedStatus"] !== null) {
            $this->ReservedStatus = $param["ReservedStatus"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("ChangeOwnerTime",$param) and $param["ChangeOwnerTime"] !== null) {
            $this->ChangeOwnerTime = $param["ChangeOwnerTime"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
