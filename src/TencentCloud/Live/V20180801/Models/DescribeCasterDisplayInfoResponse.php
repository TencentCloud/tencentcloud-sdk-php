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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCasterDisplayInfo返回参数结构体
 *
 * @method integer getStatus() 获取导播台状态
0：停止状态，无预监，无主监 
1：无预监，有主监 
2：有预监，无主监 
3：有预监，有主监
 * @method void setStatus(integer $Status) 设置导播台状态
0：停止状态，无预监，无主监 
1：无预监，有主监 
2：有预监，无主监 
3：有预监，有主监
 * @method CasterDisplayInfo getPvwDisplayInfo() 获取预监使用的展示参数。
 * @method void setPvwDisplayInfo(CasterDisplayInfo $PvwDisplayInfo) 设置预监使用的展示参数。
 * @method CasterDisplayInfo getPgmDisplayInfo() 获取主监使用的展示参数。
 * @method void setPgmDisplayInfo(CasterDisplayInfo $PgmDisplayInfo) 设置主监使用的展示参数。
 * @method integer getStartLiveTime() 获取启动直播的时间，值为unix时间戳。
 * @method void setStartLiveTime(integer $StartLiveTime) 设置启动直播的时间，值为unix时间戳。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCasterDisplayInfoResponse extends AbstractModel
{
    /**
     * @var integer 导播台状态
0：停止状态，无预监，无主监 
1：无预监，有主监 
2：有预监，无主监 
3：有预监，有主监
     */
    public $Status;

    /**
     * @var CasterDisplayInfo 预监使用的展示参数。
     */
    public $PvwDisplayInfo;

    /**
     * @var CasterDisplayInfo 主监使用的展示参数。
     */
    public $PgmDisplayInfo;

    /**
     * @var integer 启动直播的时间，值为unix时间戳。
     */
    public $StartLiveTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 导播台状态
0：停止状态，无预监，无主监 
1：无预监，有主监 
2：有预监，无主监 
3：有预监，有主监
     * @param CasterDisplayInfo $PvwDisplayInfo 预监使用的展示参数。
     * @param CasterDisplayInfo $PgmDisplayInfo 主监使用的展示参数。
     * @param integer $StartLiveTime 启动直播的时间，值为unix时间戳。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PvwDisplayInfo",$param) and $param["PvwDisplayInfo"] !== null) {
            $this->PvwDisplayInfo = new CasterDisplayInfo();
            $this->PvwDisplayInfo->deserialize($param["PvwDisplayInfo"]);
        }

        if (array_key_exists("PgmDisplayInfo",$param) and $param["PgmDisplayInfo"] !== null) {
            $this->PgmDisplayInfo = new CasterDisplayInfo();
            $this->PgmDisplayInfo->deserialize($param["PgmDisplayInfo"]);
        }

        if (array_key_exists("StartLiveTime",$param) and $param["StartLiveTime"] !== null) {
            $this->StartLiveTime = $param["StartLiveTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
