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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateSubAccountLinuxUserInfo请求参数结构体
 *
 * @method array getSubAccountList() 获取子账号信息列表
 * @method void setSubAccountList(array $SubAccountList) 设置子账号信息列表
 */
class UpdateSubAccountLinuxUserInfoRequest extends AbstractModel
{
    /**
     * @var array 子账号信息列表
     */
    public $SubAccountList;

    /**
     * @param array $SubAccountList 子账号信息列表
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
        if (array_key_exists("SubAccountList",$param) and $param["SubAccountList"] !== null) {
            $this->SubAccountList = [];
            foreach ($param["SubAccountList"] as $key => $value){
                $obj = new SubAccountInfo();
                $obj->deserialize($value);
                array_push($this->SubAccountList, $obj);
            }
        }
    }
}
