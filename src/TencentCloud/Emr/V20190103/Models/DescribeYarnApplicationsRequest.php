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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeYarnApplications请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method integer getStartTime() 获取起始时间秒
 * @method void setStartTime(integer $StartTime) 设置起始时间秒
 * @method integer getEndTime() 获取结束时间秒，EndTime-StartTime不得超过1天秒数86400
 * @method void setEndTime(integer $EndTime) 设置结束时间秒，EndTime-StartTime不得超过1天秒数86400
 * @method integer getOffset() 获取分页偏移量，Offset=0表示第一页；如果limit=100，Offset=1，则表示第二页，数据第101条开始查询，返回100条数据；如果limit=100，Offset=2，则表示第三页，数据第201条开始查询，返回100条数据。依次类推
 * @method void setOffset(integer $Offset) 设置分页偏移量，Offset=0表示第一页；如果limit=100，Offset=1，则表示第二页，数据第101条开始查询，返回100条数据；如果limit=100，Offset=2，则表示第三页，数据第201条开始查询，返回100条数据。依次类推
 * @method integer getLimit() 获取分页大小，合法范围[1,100]
 * @method void setLimit(integer $Limit) 设置分页大小，合法范围[1,100]
 */
class DescribeYarnApplicationsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var integer 起始时间秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间秒，EndTime-StartTime不得超过1天秒数86400
     */
    public $EndTime;

    /**
     * @var integer 分页偏移量，Offset=0表示第一页；如果limit=100，Offset=1，则表示第二页，数据第101条开始查询，返回100条数据；如果limit=100，Offset=2，则表示第三页，数据第201条开始查询，返回100条数据。依次类推
     */
    public $Offset;

    /**
     * @var integer 分页大小，合法范围[1,100]
     */
    public $Limit;

    /**
     * @param string $InstanceId 集群ID
     * @param integer $StartTime 起始时间秒
     * @param integer $EndTime 结束时间秒，EndTime-StartTime不得超过1天秒数86400
     * @param integer $Offset 分页偏移量，Offset=0表示第一页；如果limit=100，Offset=1，则表示第二页，数据第101条开始查询，返回100条数据；如果limit=100，Offset=2，则表示第三页，数据第201条开始查询，返回100条数据。依次类推
     * @param integer $Limit 分页大小，合法范围[1,100]
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
