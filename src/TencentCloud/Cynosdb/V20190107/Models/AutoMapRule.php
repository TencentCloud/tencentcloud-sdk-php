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
 * 高级映射，自动映射规则
 *
 * @method string getSrcInstanceId() 获取源端实例Id
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源端实例Id
 * @method string getSrcDatabaseRegex() 获取源端数据库正则
 * @method void setSrcDatabaseRegex(string $SrcDatabaseRegex) 设置源端数据库正则
 * @method string getSrcTableRegex() 获取源端表正则
 * @method void setSrcTableRegex(string $SrcTableRegex) 设置源端表正则
 * @method string getDstDatabaseRegex() 获取目标端数据库正则
 * @method void setDstDatabaseRegex(string $DstDatabaseRegex) 设置目标端数据库正则
 * @method string getDstTableRegex() 获取目标端表正则
 * @method void setDstTableRegex(string $DstTableRegex) 设置目标端表正则
 */
class AutoMapRule extends AbstractModel
{
    /**
     * @var string 源端实例Id
     */
    public $SrcInstanceId;

    /**
     * @var string 源端数据库正则
     */
    public $SrcDatabaseRegex;

    /**
     * @var string 源端表正则
     */
    public $SrcTableRegex;

    /**
     * @var string 目标端数据库正则
     */
    public $DstDatabaseRegex;

    /**
     * @var string 目标端表正则
     */
    public $DstTableRegex;

    /**
     * @param string $SrcInstanceId 源端实例Id
     * @param string $SrcDatabaseRegex 源端数据库正则
     * @param string $SrcTableRegex 源端表正则
     * @param string $DstDatabaseRegex 目标端数据库正则
     * @param string $DstTableRegex 目标端表正则
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("SrcDatabaseRegex",$param) and $param["SrcDatabaseRegex"] !== null) {
            $this->SrcDatabaseRegex = $param["SrcDatabaseRegex"];
        }

        if (array_key_exists("SrcTableRegex",$param) and $param["SrcTableRegex"] !== null) {
            $this->SrcTableRegex = $param["SrcTableRegex"];
        }

        if (array_key_exists("DstDatabaseRegex",$param) and $param["DstDatabaseRegex"] !== null) {
            $this->DstDatabaseRegex = $param["DstDatabaseRegex"];
        }

        if (array_key_exists("DstTableRegex",$param) and $param["DstTableRegex"] !== null) {
            $this->DstTableRegex = $param["DstTableRegex"];
        }
    }
}
