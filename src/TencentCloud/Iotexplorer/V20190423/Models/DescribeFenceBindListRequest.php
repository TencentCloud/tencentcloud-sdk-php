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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFenceBindList请求参数结构体
 *
 * @method integer getFenceId() 获取围栏Id
 * @method void setFenceId(integer $FenceId) 设置围栏Id
 * @method integer getOffset() 获取翻页偏移量，0起始
 * @method void setOffset(integer $Offset) 设置翻页偏移量，0起始
 * @method integer getLimit() 获取最大返回结果数
 * @method void setLimit(integer $Limit) 设置最大返回结果数
 */
class DescribeFenceBindListRequest extends AbstractModel
{
    /**
     * @var integer 围栏Id
     */
    public $FenceId;

    /**
     * @var integer 翻页偏移量，0起始
     */
    public $Offset;

    /**
     * @var integer 最大返回结果数
     */
    public $Limit;

    /**
     * @param integer $FenceId 围栏Id
     * @param integer $Offset 翻页偏移量，0起始
     * @param integer $Limit 最大返回结果数
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
        if (array_key_exists("FenceId",$param) and $param["FenceId"] !== null) {
            $this->FenceId = $param["FenceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
