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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteHost请求参数结构体
 *
 * @method array getHostsDel() 获取删除的域名列表
 * @method void setHostsDel(array $HostsDel) 设置删除的域名列表
 */
class DeleteHostRequest extends AbstractModel
{
    /**
     * @var array 删除的域名列表
     */
    public $HostsDel;

    /**
     * @param array $HostsDel 删除的域名列表
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
        if (array_key_exists("HostsDel",$param) and $param["HostsDel"] !== null) {
            $this->HostsDel = [];
            foreach ($param["HostsDel"] as $key => $value){
                $obj = new HostDel();
                $obj->deserialize($value);
                array_push($this->HostsDel, $obj);
            }
        }
    }
}
