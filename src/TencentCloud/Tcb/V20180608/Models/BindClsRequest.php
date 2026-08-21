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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindCls请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getClsRegion() 获取CLS地域
 * @method void setClsRegion(string $ClsRegion) 设置CLS地域
 * @method string getClsLogsetId() 获取CLS 日志集id
 * @method void setClsLogsetId(string $ClsLogsetId) 设置CLS 日志集id
 * @method string getClsTopicId() 获取CLS 日志主题ID
 * @method void setClsTopicId(string $ClsTopicId) 设置CLS 日志主题ID
 */
class BindClsRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string CLS地域
     */
    public $ClsRegion;

    /**
     * @var string CLS 日志集id
     */
    public $ClsLogsetId;

    /**
     * @var string CLS 日志主题ID
     */
    public $ClsTopicId;

    /**
     * @param string $EnvId 环境ID
     * @param string $ClsRegion CLS地域
     * @param string $ClsLogsetId CLS 日志集id
     * @param string $ClsTopicId CLS 日志主题ID
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }
    }
}
