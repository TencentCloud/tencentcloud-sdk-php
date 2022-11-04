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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAccessKey请求参数结构体
 *
 * @method string getAccessKeyId() 获取指定需要更新的AccessKeyId
 * @method void setAccessKeyId(string $AccessKeyId) 设置指定需要更新的AccessKeyId
 * @method string getStatus() 获取密钥状态，激活（Active）或未激活（Inactive）
 * @method void setStatus(string $Status) 设置密钥状态，激活（Active）或未激活（Inactive）
 * @method integer getTargetUin() 获取指定用户Uin，不填默认为当前用户更新访问密钥
 * @method void setTargetUin(integer $TargetUin) 设置指定用户Uin，不填默认为当前用户更新访问密钥
 */
class UpdateAccessKeyRequest extends AbstractModel
{
    /**
     * @var string 指定需要更新的AccessKeyId
     */
    public $AccessKeyId;

    /**
     * @var string 密钥状态，激活（Active）或未激活（Inactive）
     */
    public $Status;

    /**
     * @var integer 指定用户Uin，不填默认为当前用户更新访问密钥
     */
    public $TargetUin;

    /**
     * @param string $AccessKeyId 指定需要更新的AccessKeyId
     * @param string $Status 密钥状态，激活（Active）或未激活（Inactive）
     * @param integer $TargetUin 指定用户Uin，不填默认为当前用户更新访问密钥
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }
    }
}
