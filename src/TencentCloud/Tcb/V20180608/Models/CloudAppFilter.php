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
 * 云应用过滤
 *
 * @method array getServiceNameList() 获取<p>云应用过滤列表</p>
 * @method void setServiceNameList(array $ServiceNameList) 设置<p>云应用过滤列表</p>
 */
class CloudAppFilter extends AbstractModel
{
    /**
     * @var array <p>云应用过滤列表</p>
     */
    public $ServiceNameList;

    /**
     * @param array $ServiceNameList <p>云应用过滤列表</p>
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
        if (array_key_exists("ServiceNameList",$param) and $param["ServiceNameList"] !== null) {
            $this->ServiceNameList = $param["ServiceNameList"];
        }
    }
}
