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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncFwOperate请求参数结构体
 *
 * @method string getSyncType() 获取<p>同步操作类型：Route，同步防火墙路由</p>
 * @method void setSyncType(string $SyncType) 设置<p>同步操作类型：Route，同步防火墙路由</p>
 * @method string getFwType() 获取<p>防火墙类型；nat,nat防火墙;ew,vpc间防火墙</p>
 * @method void setFwType(string $FwType) 设置<p>防火墙类型；nat,nat防火墙;ew,vpc间防火墙</p>
 */
class SyncFwOperateRequest extends AbstractModel
{
    /**
     * @var string <p>同步操作类型：Route，同步防火墙路由</p>
     */
    public $SyncType;

    /**
     * @var string <p>防火墙类型；nat,nat防火墙;ew,vpc间防火墙</p>
     */
    public $FwType;

    /**
     * @param string $SyncType <p>同步操作类型：Route，同步防火墙路由</p>
     * @param string $FwType <p>防火墙类型；nat,nat防火墙;ew,vpc间防火墙</p>
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
        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }
    }
}
