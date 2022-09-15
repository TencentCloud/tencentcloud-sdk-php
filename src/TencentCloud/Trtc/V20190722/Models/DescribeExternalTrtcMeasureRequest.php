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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExternalTrtcMeasure请求参数结构体
 *
 * @method string getStartTime() 获取查询开始日期。
 * @method void setStartTime(string $StartTime) 设置查询开始日期。
 * @method string getEndTime() 获取查询结束日期。
 * @method void setEndTime(string $EndTime) 设置查询结束日期。
 * @method integer getSdkAppId() 获取对应的应用。如果没有这个参数，表示获取用户名下全部实时音视频应用的汇总。
 * @method void setSdkAppId(integer $SdkAppId) 设置对应的应用。如果没有这个参数，表示获取用户名下全部实时音视频应用的汇总。
 */
class DescribeExternalTrtcMeasureRequest extends AbstractModel
{
    /**
     * @var string 查询开始日期。
     */
    public $StartTime;

    /**
     * @var string 查询结束日期。
     */
    public $EndTime;

    /**
     * @var integer 对应的应用。如果没有这个参数，表示获取用户名下全部实时音视频应用的汇总。
     */
    public $SdkAppId;

    /**
     * @param string $StartTime 查询开始日期。
     * @param string $EndTime 查询结束日期。
     * @param integer $SdkAppId 对应的应用。如果没有这个参数，表示获取用户名下全部实时音视频应用的汇总。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
