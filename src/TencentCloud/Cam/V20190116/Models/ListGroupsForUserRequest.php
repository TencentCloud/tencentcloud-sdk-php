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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getUid() 获取子用户 UID
 * @method void setUid(integer $Uid) 设置子用户 UID
 * @method integer getRp() 获取每页数量。默认为20。
 * @method void setRp(integer $Rp) 设置每页数量。默认为20。
 * @method integer getPage() 获取页码。默认为1。
 * @method void setPage(integer $Page) 设置页码。默认为1。
 */

/**
 *ListGroupsForUser请求参数结构体
 */
class ListGroupsForUserRequest extends AbstractModel
{
    /**
     * @var integer 子用户 UID
     */
    public $Uid;

    /**
     * @var integer 每页数量。默认为20。
     */
    public $Rp;

    /**
     * @var integer 页码。默认为1。
     */
    public $Page;
    /**
     * @param integer $Uid 子用户 UID
     * @param integer $Rp 每页数量。默认为20。
     * @param integer $Page 页码。默认为1。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
