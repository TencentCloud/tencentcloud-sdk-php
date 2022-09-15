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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePackageConsumeTasks请求参数结构体
 *
 * @method integer getLimit() 获取分页单页量
 * @method void setLimit(integer $Limit) 设置分页单页量
 * @method integer getOffset() 获取分页的偏移量，第一页为0
 * @method void setOffset(integer $Offset) 设置分页的偏移量，第一页为0
 */
class DescribePackageConsumeTasksRequest extends AbstractModel
{
    /**
     * @var integer 分页单页量
     */
    public $Limit;

    /**
     * @var integer 分页的偏移量，第一页为0
     */
    public $Offset;

    /**
     * @param integer $Limit 分页单页量
     * @param integer $Offset 分页的偏移量，第一页为0
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
