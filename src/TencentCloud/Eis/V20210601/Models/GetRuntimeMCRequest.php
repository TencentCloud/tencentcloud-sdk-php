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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRuntimeMC请求参数结构体
 *
 * @method integer getRuntimeId() 获取环境id
 * @method void setRuntimeId(integer $RuntimeId) 设置环境id
 * @method string getZone() 获取环境地域
 * @method void setZone(string $Zone) 设置环境地域
 * @method integer getRuntimeClass() 获取环境运行类型：0:运行时类型、1:api类型
 * @method void setRuntimeClass(integer $RuntimeClass) 设置环境运行类型：0:运行时类型、1:api类型
 */
class GetRuntimeMCRequest extends AbstractModel
{
    /**
     * @var integer 环境id
     */
    public $RuntimeId;

    /**
     * @var string 环境地域
     */
    public $Zone;

    /**
     * @var integer 环境运行类型：0:运行时类型、1:api类型
     */
    public $RuntimeClass;

    /**
     * @param integer $RuntimeId 环境id
     * @param string $Zone 环境地域
     * @param integer $RuntimeClass 环境运行类型：0:运行时类型、1:api类型
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RuntimeClass",$param) and $param["RuntimeClass"] !== null) {
            $this->RuntimeClass = $param["RuntimeClass"];
        }
    }
}
