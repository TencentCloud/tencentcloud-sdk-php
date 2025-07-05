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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewUploadTest请求参数结构体
 *
 * @method string getPkgId() 获取package ID
 * @method void setPkgId(string $PkgId) 设置package ID
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getSessionKey() 获取SessionKeys
 * @method void setSessionKey(string $SessionKey) 设置SessionKeys
 */
class RenewUploadTestRequest extends AbstractModel
{
    /**
     * @var string package ID
     */
    public $PkgId;

    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string SessionKeys
     */
    public $SessionKey;

    /**
     * @param string $PkgId package ID
     * @param string $Tid 设备TID
     * @param string $SessionKey SessionKeys
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
        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("SessionKey",$param) and $param["SessionKey"] !== null) {
            $this->SessionKey = $param["SessionKey"];
        }
    }
}
