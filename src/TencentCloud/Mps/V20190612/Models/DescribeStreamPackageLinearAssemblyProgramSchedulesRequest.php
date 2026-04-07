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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageLinearAssemblyProgramSchedules请求参数结构体
 *
 * @method string getChannelId() 获取查询某个Channel下面的所有Program。
 * @method void setChannelId(string $ChannelId) 设置查询某个Channel下面的所有Program。
 * @method integer getTimeWindow() 获取窗口时长信息，单位秒。最大7776000s
 * @method void setTimeWindow(integer $TimeWindow) 设置窗口时长信息，单位秒。最大7776000s
 * @method integer getPageNum() 获取页数，取值范围为[1, 10000]。
 * @method void setPageNum(integer $PageNum) 设置页数，取值范围为[1, 10000]。
 * @method integer getPageSize() 获取每页大小，取值范围为[1, 1000]。
 * @method void setPageSize(integer $PageSize) 设置每页大小，取值范围为[1, 1000]。
 */
class DescribeStreamPackageLinearAssemblyProgramSchedulesRequest extends AbstractModel
{
    /**
     * @var string 查询某个Channel下面的所有Program。
     */
    public $ChannelId;

    /**
     * @var integer 窗口时长信息，单位秒。最大7776000s
     */
    public $TimeWindow;

    /**
     * @var integer 页数，取值范围为[1, 10000]。
     */
    public $PageNum;

    /**
     * @var integer 每页大小，取值范围为[1, 1000]。
     */
    public $PageSize;

    /**
     * @param string $ChannelId 查询某个Channel下面的所有Program。
     * @param integer $TimeWindow 窗口时长信息，单位秒。最大7776000s
     * @param integer $PageNum 页数，取值范围为[1, 10000]。
     * @param integer $PageSize 每页大小，取值范围为[1, 1000]。
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("TimeWindow",$param) and $param["TimeWindow"] !== null) {
            $this->TimeWindow = $param["TimeWindow"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
