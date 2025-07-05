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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 管理人的四种审核状态
 *
 * @method string getType() 获取审核类型，枚举值：ov,ev
 * @method void setType(string $Type) 设置审核类型，枚举值：ov,ev
 * @method string getStatus() 获取审核状态，枚举值：pending,completed,invalid,submitted,expiring,expired
 * @method void setStatus(string $Status) 设置审核状态，枚举值：pending,completed,invalid,submitted,expiring,expired
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method array getManagerPreAuditDomains() 获取管理人预审核的域名列表
 * @method void setManagerPreAuditDomains(array $ManagerPreAuditDomains) 设置管理人预审核的域名列表
 */
class ManagerStatusInfo extends AbstractModel
{
    /**
     * @var string 审核类型，枚举值：ov,ev
     */
    public $Type;

    /**
     * @var string 审核状态，枚举值：pending,completed,invalid,submitted,expiring,expired
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var array 管理人预审核的域名列表
     */
    public $ManagerPreAuditDomains;

    /**
     * @param string $Type 审核类型，枚举值：ov,ev
     * @param string $Status 审核状态，枚举值：pending,completed,invalid,submitted,expiring,expired
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 过期时间
     * @param array $ManagerPreAuditDomains 管理人预审核的域名列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ManagerPreAuditDomains",$param) and $param["ManagerPreAuditDomains"] !== null) {
            $this->ManagerPreAuditDomains = [];
            foreach ($param["ManagerPreAuditDomains"] as $key => $value){
                $obj = new ManagerPreAuditDomain();
                $obj->deserialize($value);
                array_push($this->ManagerPreAuditDomains, $obj);
            }
        }
    }
}
