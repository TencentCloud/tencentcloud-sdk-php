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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryReconciliationFileApplyInfo请求参数结构体
 *
 * @method string getApplyFileId() 获取申请对账文件的任务ID。
 * @method void setApplyFileId(string $ApplyFileId) 设置申请对账文件的任务ID。
 * @method string getMidasEnvironment() 获取环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
 */
class QueryReconciliationFileApplyInfoRequest extends AbstractModel
{
    /**
     * @var string 申请对账文件的任务ID。
     */
    public $ApplyFileId;

    /**
     * @var string 环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
     */
    public $MidasEnvironment;

    /**
     * @param string $ApplyFileId 申请对账文件的任务ID。
     * @param string $MidasEnvironment 环境名。
__release__: 现网环境
__sandbox__: 沙箱环境
__development__: 开发环境
_缺省: release_
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
        if (array_key_exists("ApplyFileId",$param) and $param["ApplyFileId"] !== null) {
            $this->ApplyFileId = $param["ApplyFileId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
