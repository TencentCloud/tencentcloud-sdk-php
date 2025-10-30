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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 交换实例信息
 *
 * @method RollbackInstanceInfo getSrcInstanceInfo() 获取源实例信息
 * @method void setSrcInstanceInfo(RollbackInstanceInfo $SrcInstanceInfo) 设置源实例信息
 * @method RollbackInstanceInfo getDstInstanceInfo() 获取目标实例信息
 * @method void setDstInstanceInfo(RollbackInstanceInfo $DstInstanceInfo) 设置目标实例信息
 */
class ExchangeInstanceInfo extends AbstractModel
{
    /**
     * @var RollbackInstanceInfo 源实例信息
     */
    public $SrcInstanceInfo;

    /**
     * @var RollbackInstanceInfo 目标实例信息
     */
    public $DstInstanceInfo;

    /**
     * @param RollbackInstanceInfo $SrcInstanceInfo 源实例信息
     * @param RollbackInstanceInfo $DstInstanceInfo 目标实例信息
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
        if (array_key_exists("SrcInstanceInfo",$param) and $param["SrcInstanceInfo"] !== null) {
            $this->SrcInstanceInfo = new RollbackInstanceInfo();
            $this->SrcInstanceInfo->deserialize($param["SrcInstanceInfo"]);
        }

        if (array_key_exists("DstInstanceInfo",$param) and $param["DstInstanceInfo"] !== null) {
            $this->DstInstanceInfo = new RollbackInstanceInfo();
            $this->DstInstanceInfo->deserialize($param["DstInstanceInfo"]);
        }
    }
}
