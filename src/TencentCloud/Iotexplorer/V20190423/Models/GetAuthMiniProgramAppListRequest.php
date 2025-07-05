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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAuthMiniProgramAppList请求参数结构体
 *
 * @method string getMiniProgramAppId() 获取appId
 * @method void setMiniProgramAppId(string $MiniProgramAppId) 设置appId
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取每页大小
 * @method void setLimit(integer $Limit) 设置每页大小
 */
class GetAuthMiniProgramAppListRequest extends AbstractModel
{
    /**
     * @var string appId
     */
    public $MiniProgramAppId;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 每页大小
     */
    public $Limit;

    /**
     * @param string $MiniProgramAppId appId
     * @param integer $Offset 页码
     * @param integer $Limit 每页大小
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
        if (array_key_exists("MiniProgramAppId",$param) and $param["MiniProgramAppId"] !== null) {
            $this->MiniProgramAppId = $param["MiniProgramAppId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
