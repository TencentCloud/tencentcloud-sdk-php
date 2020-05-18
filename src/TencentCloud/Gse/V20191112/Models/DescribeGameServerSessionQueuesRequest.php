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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGameServerSessionQueues请求参数结构体
 *
 * @method array getNames() 获取游戏服务器会话队列数组
 * @method void setNames(array $Names) 设置游戏服务器会话队列数组
 * @method integer getLimit() 获取要返回的最大结果数
 * @method void setLimit(integer $Limit) 设置要返回的最大结果数
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 */
class DescribeGameServerSessionQueuesRequest extends AbstractModel
{
    /**
     * @var array 游戏服务器会话队列数组
     */
    public $Names;

    /**
     * @var integer 要返回的最大结果数
     */
    public $Limit;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @param array $Names 游戏服务器会话队列数组
     * @param integer $Limit 要返回的最大结果数
     * @param integer $Offset 偏移
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
