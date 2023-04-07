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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSchedules请求参数结构体
 *
 * @method array getScheduleIds() 获取编排 ID 过滤条件，数组长度限制：100。
 * @method void setScheduleIds(array $ScheduleIds) 设置编排 ID 过滤条件，数组长度限制：100。
 * @method string getTriggerType() 获取编排触发类型，可选值：
<li>CosFileUpload： 腾讯云 COS 文件上传触发</li>
<li>AwsS3FileUpload：Aws S3 文件上传触发。</li>
不填或者为空表示全部。
 * @method void setTriggerType(string $TriggerType) 设置编排触发类型，可选值：
<li>CosFileUpload： 腾讯云 COS 文件上传触发</li>
<li>AwsS3FileUpload：Aws S3 文件上传触发。</li>
不填或者为空表示全部。
 * @method string getStatus() 获取状态，取值范围：
<li>Enabled：已启用，</li>
<li>Disabled：已禁用。</li>
不填此参数，则不区编排状态。
 * @method void setStatus(string $Status) 设置状态，取值范围：
<li>Enabled：已启用，</li>
<li>Disabled：已禁用。</li>
不填此参数，则不区编排状态。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
 */
class DescribeSchedulesRequest extends AbstractModel
{
    /**
     * @var array 编排 ID 过滤条件，数组长度限制：100。
     */
    public $ScheduleIds;

    /**
     * @var string 编排触发类型，可选值：
<li>CosFileUpload： 腾讯云 COS 文件上传触发</li>
<li>AwsS3FileUpload：Aws S3 文件上传触发。</li>
不填或者为空表示全部。
     */
    public $TriggerType;

    /**
     * @var string 状态，取值范围：
<li>Enabled：已启用，</li>
<li>Disabled：已禁用。</li>
不填此参数，则不区编排状态。
     */
    public $Status;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
     */
    public $Limit;

    /**
     * @param array $ScheduleIds 编排 ID 过滤条件，数组长度限制：100。
     * @param string $TriggerType 编排触发类型，可选值：
<li>CosFileUpload： 腾讯云 COS 文件上传触发</li>
<li>AwsS3FileUpload：Aws S3 文件上传触发。</li>
不填或者为空表示全部。
     * @param string $Status 状态，取值范围：
<li>Enabled：已启用，</li>
<li>Disabled：已禁用。</li>
不填此参数，则不区编排状态。
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
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
        if (array_key_exists("ScheduleIds",$param) and $param["ScheduleIds"] !== null) {
            $this->ScheduleIds = $param["ScheduleIds"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
