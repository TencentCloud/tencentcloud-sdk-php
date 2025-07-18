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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名锁定信息
 *
 * @method integer getDomainId() 获取域名 ID
 * @method void setDomainId(integer $DomainId) 设置域名 ID
 * @method string getLockCode() 获取域名解锁码
 * @method void setLockCode(string $LockCode) 设置域名解锁码
 * @method string getLockEnd() 获取域名自动解锁日期
 * @method void setLockEnd(string $LockEnd) 设置域名自动解锁日期
 */
class LockInfo extends AbstractModel
{
    /**
     * @var integer 域名 ID
     */
    public $DomainId;

    /**
     * @var string 域名解锁码
     */
    public $LockCode;

    /**
     * @var string 域名自动解锁日期
     */
    public $LockEnd;

    /**
     * @param integer $DomainId 域名 ID
     * @param string $LockCode 域名解锁码
     * @param string $LockEnd 域名自动解锁日期
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("LockCode",$param) and $param["LockCode"] !== null) {
            $this->LockCode = $param["LockCode"];
        }

        if (array_key_exists("LockEnd",$param) and $param["LockEnd"] !== null) {
            $this->LockEnd = $param["LockEnd"];
        }
    }
}
