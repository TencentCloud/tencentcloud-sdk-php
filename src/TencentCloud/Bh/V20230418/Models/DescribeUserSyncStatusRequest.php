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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserSyncStatus请求参数结构体
 *
 * @method integer getUserKind() 获取获取用户同步状态， 1-获取ioa用户同步状态
 * @method void setUserKind(integer $UserKind) 设置获取用户同步状态， 1-获取ioa用户同步状态
 */
class DescribeUserSyncStatusRequest extends AbstractModel
{
    /**
     * @var integer 获取用户同步状态， 1-获取ioa用户同步状态
     */
    public $UserKind;

    /**
     * @param integer $UserKind 获取用户同步状态， 1-获取ioa用户同步状态
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
        if (array_key_exists("UserKind",$param) and $param["UserKind"] !== null) {
            $this->UserKind = $param["UserKind"];
        }
    }
}
