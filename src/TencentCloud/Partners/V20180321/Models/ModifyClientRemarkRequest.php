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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClientRemark请求参数结构体
 *
 * @method string getClientRemark() 获取客户备注名称
 * @method void setClientRemark(string $ClientRemark) 设置客户备注名称
 * @method string getClientUin() 获取客户账号ID
 * @method void setClientUin(string $ClientUin) 设置客户账号ID
 */
class ModifyClientRemarkRequest extends AbstractModel
{
    /**
     * @var string 客户备注名称
     */
    public $ClientRemark;

    /**
     * @var string 客户账号ID
     */
    public $ClientUin;

    /**
     * @param string $ClientRemark 客户备注名称
     * @param string $ClientUin 客户账号ID
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
        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }
    }
}
