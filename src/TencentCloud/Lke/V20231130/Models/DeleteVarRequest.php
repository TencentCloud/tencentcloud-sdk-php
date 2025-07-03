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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVar请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method string getVarId() 获取变量ID
 * @method void setVarId(string $VarId) 设置变量ID
 */
class DeleteVarRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var string 变量ID
     */
    public $VarId;

    /**
     * @param string $AppBizId 应用ID
     * @param string $VarId 变量ID
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("VarId",$param) and $param["VarId"] !== null) {
            $this->VarId = $param["VarId"];
        }
    }
}
