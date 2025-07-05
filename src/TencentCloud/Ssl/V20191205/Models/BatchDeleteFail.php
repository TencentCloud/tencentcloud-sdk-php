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
 * 批量删除失败的项
 *
 * @method string getCertId() 获取失败的证书ID
 * @method void setCertId(string $CertId) 设置失败的证书ID
 * @method string getMsg() 获取失败的原因
 * @method void setMsg(string $Msg) 设置失败的原因
 */
class BatchDeleteFail extends AbstractModel
{
    /**
     * @var string 失败的证书ID
     */
    public $CertId;

    /**
     * @var string 失败的原因
     */
    public $Msg;

    /**
     * @param string $CertId 失败的证书ID
     * @param string $Msg 失败的原因
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }
    }
}
