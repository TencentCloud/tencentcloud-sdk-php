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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAsset请求参数结构体
 *
 * @method boolean getAll() 获取全部同步
 * @method void setAll(boolean $All) 设置全部同步
 * @method array getHosts() 获取要同步的主机列表 两个参数必选一个 All优先
 * @method void setHosts(array $Hosts) 设置要同步的主机列表 两个参数必选一个 All优先
 */
class ModifyAssetRequest extends AbstractModel
{
    /**
     * @var boolean 全部同步
     */
    public $All;

    /**
     * @var array 要同步的主机列表 两个参数必选一个 All优先
     */
    public $Hosts;

    /**
     * @param boolean $All 全部同步
     * @param array $Hosts 要同步的主机列表 两个参数必选一个 All优先
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }
    }
}
