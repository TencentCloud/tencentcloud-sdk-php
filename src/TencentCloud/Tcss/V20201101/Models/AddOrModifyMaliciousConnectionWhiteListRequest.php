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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddOrModifyMaliciousConnectionWhiteList请求参数结构体
 *
 * @method string getRequestType() 获取枚举
IP: IP
域名：DOMAIN
 * @method void setRequestType(string $RequestType) 设置枚举
IP: IP
域名：DOMAIN
 * @method array getWhiteDomainList() 获取白名单域名
 * @method void setWhiteDomainList(array $WhiteDomainList) 设置白名单域名
 * @method array getWhiteIPList() 获取白名单IP
 * @method void setWhiteIPList(array $WhiteIPList) 设置白名单IP
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getID() 获取白名单记录id，只有修改时需要
 * @method void setID(integer $ID) 设置白名单记录id，只有修改时需要
 */
class AddOrModifyMaliciousConnectionWhiteListRequest extends AbstractModel
{
    /**
     * @var string 枚举
IP: IP
域名：DOMAIN
     */
    public $RequestType;

    /**
     * @var array 白名单域名
     */
    public $WhiteDomainList;

    /**
     * @var array 白名单IP
     */
    public $WhiteIPList;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 白名单记录id，只有修改时需要
     */
    public $ID;

    /**
     * @param string $RequestType 枚举
IP: IP
域名：DOMAIN
     * @param array $WhiteDomainList 白名单域名
     * @param array $WhiteIPList 白名单IP
     * @param string $Remark 备注
     * @param integer $ID 白名单记录id，只有修改时需要
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
        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("WhiteDomainList",$param) and $param["WhiteDomainList"] !== null) {
            $this->WhiteDomainList = $param["WhiteDomainList"];
        }

        if (array_key_exists("WhiteIPList",$param) and $param["WhiteIPList"] !== null) {
            $this->WhiteIPList = $param["WhiteIPList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
