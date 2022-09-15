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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyZoneCnameSpeedUp请求参数结构体
 *
 * @method string getId() 获取站点 ID
 * @method void setId(string $Id) 设置站点 ID
 * @method string getStatus() 获取CNAME 加速状态
- enabled 开启
- disabled 关闭
 * @method void setStatus(string $Status) 设置CNAME 加速状态
- enabled 开启
- disabled 关闭
 */
class ModifyZoneCnameSpeedUpRequest extends AbstractModel
{
    /**
     * @var string 站点 ID
     */
    public $Id;

    /**
     * @var string CNAME 加速状态
- enabled 开启
- disabled 关闭
     */
    public $Status;

    /**
     * @param string $Id 站点 ID
     * @param string $Status CNAME 加速状态
- enabled 开启
- disabled 关闭
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
