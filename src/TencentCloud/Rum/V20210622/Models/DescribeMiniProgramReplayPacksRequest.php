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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMiniProgramReplayPacks请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getStatus() 获取<p>状态过滤（compiling/ready/failed，可选）</p>
 * @method void setStatus(string $Status) 设置<p>状态过滤（compiling/ready/failed，可选）</p>
 * @method integer getLimit() 获取<p>返回条数（默认20，最大100）</p>
 * @method void setLimit(integer $Limit) 设置<p>返回条数（默认20，最大100）</p>
 * @method string getCursor() 获取<p>分页游标（可选）</p>
 * @method void setCursor(string $Cursor) 设置<p>分页游标（可选）</p>
 */
class DescribeMiniProgramReplayPacksRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>状态过滤（compiling/ready/failed，可选）</p>
     */
    public $Status;

    /**
     * @var integer <p>返回条数（默认20，最大100）</p>
     */
    public $Limit;

    /**
     * @var string <p>分页游标（可选）</p>
     */
    public $Cursor;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $Status <p>状态过滤（compiling/ready/failed，可选）</p>
     * @param integer $Limit <p>返回条数（默认20，最大100）</p>
     * @param string $Cursor <p>分页游标（可选）</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }
    }
}
