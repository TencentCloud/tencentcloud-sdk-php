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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncDepartment请求参数结构体
 *
 * @method CommonHeader getHeader() 获取请求头
 * @method void setHeader(CommonHeader $Header) 设置请求头
 * @method SyncDepartmentData getData() 获取同步数据
 * @method void setData(SyncDepartmentData $Data) 设置同步数据
 */
class SyncDepartmentRequest extends AbstractModel
{
    /**
     * @var CommonHeader 请求头
     */
    public $Header;

    /**
     * @var SyncDepartmentData 同步数据
     */
    public $Data;

    /**
     * @param CommonHeader $Header 请求头
     * @param SyncDepartmentData $Data 同步数据
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
        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new CommonHeader();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new SyncDepartmentData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
