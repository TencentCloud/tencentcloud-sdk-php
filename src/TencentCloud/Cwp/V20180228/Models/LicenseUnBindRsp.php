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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权解绑信息
 *
 * @method string getQuuid() 获取QUUID 云服务器uuid,轻量服务器uuid,边缘计算 uuid
 * @method void setQuuid(string $Quuid) 设置QUUID 云服务器uuid,轻量服务器uuid,边缘计算 uuid
 * @method string getErrMsg() 获取失败原因
 * @method void setErrMsg(string $ErrMsg) 设置失败原因
 */
class LicenseUnBindRsp extends AbstractModel
{
    /**
     * @var string QUUID 云服务器uuid,轻量服务器uuid,边缘计算 uuid
     */
    public $Quuid;

    /**
     * @var string 失败原因
     */
    public $ErrMsg;

    /**
     * @param string $Quuid QUUID 云服务器uuid,轻量服务器uuid,边缘计算 uuid
     * @param string $ErrMsg 失败原因
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
