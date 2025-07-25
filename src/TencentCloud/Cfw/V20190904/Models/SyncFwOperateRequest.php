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
 * @method string getSyncType() 获取同步操作类型：Route，同步防火墙路由
 * @method void setSyncType(string $SyncType) 设置同步操作类型：Route，同步防火墙路由
 * @method string getFwType() 获取防火墙类型；nat,nat防火墙;ew,vpc间防火墙
 * @method void setFwType(string $FwType) 设置防火墙类型；nat,nat防火墙;ew,vpc间防火墙
 */
class SyncFwOperateRequest extends AbstractModel
{
    /**
     * @var string 同步操作类型：Route，同步防火墙路由
     */
    public $SyncType;

    /**
     * @var string 防火墙类型；nat,nat防火墙;ew,vpc间防火墙
     */
    public $FwType;

    /**
     * @param string $SyncType 同步操作类型：Route，同步防火墙路由
     * @param string $FwType 防火墙类型；nat,nat防火墙;ew,vpc间防火墙
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
