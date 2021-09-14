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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLBListeners请求参数结构体
 *
 * @method array getBackends() 获取需要查询的内网ip列表
 * @method void setBackends(array $Backends) 设置需要查询的内网ip列表
 */
class DescribeLBListenersRequest extends AbstractModel
{
    /**
     * @var array 需要查询的内网ip列表
     */
    public $Backends;

    /**
     * @param array $Backends 需要查询的内网ip列表
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
        if (array_key_exists("Backends",$param) and $param["Backends"] !== null) {
            $this->Backends = [];
            foreach ($param["Backends"] as $key => $value){
                $obj = new LbRsItem();
                $obj->deserialize($value);
                array_push($this->Backends, $obj);
            }
        }
    }
}
