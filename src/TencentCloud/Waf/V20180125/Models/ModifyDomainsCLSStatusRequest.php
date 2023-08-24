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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainsCLSStatus请求参数结构体
 *
 * @method array getDomains() 获取需要修改的域名列表
 * @method void setDomains(array $Domains) 设置需要修改的域名列表
 * @method integer getStatus() 获取修改域名的访问日志开关为Status
 * @method void setStatus(integer $Status) 设置修改域名的访问日志开关为Status
 */
class ModifyDomainsCLSStatusRequest extends AbstractModel
{
    /**
     * @var array 需要修改的域名列表
     */
    public $Domains;

    /**
     * @var integer 修改域名的访问日志开关为Status
     */
    public $Status;

    /**
     * @param array $Domains 需要修改的域名列表
     * @param integer $Status 修改域名的访问日志开关为Status
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new DomainURI();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
