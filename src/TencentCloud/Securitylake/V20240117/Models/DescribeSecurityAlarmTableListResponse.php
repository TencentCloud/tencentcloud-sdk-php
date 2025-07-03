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
namespace TencentCloud\Securitylake\V20240117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityAlarmTableList返回参数结构体
 *
 * @method array getAlarmList() 获取字段列表
 * @method void setAlarmList(array $AlarmList) 设置字段列表
 * @method integer getTotalCount() 获取数量
 * @method void setTotalCount(integer $TotalCount) 设置数量
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityAlarmTableListResponse extends AbstractModel
{
    /**
     * @var array 字段列表
     */
    public $AlarmList;

    /**
     * @var integer 数量
     */
    public $TotalCount;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AlarmList 字段列表
     * @param integer $TotalCount 数量
     * @param integer $Limit 限制
     * @param integer $Offset 偏移
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
        if (array_key_exists("AlarmList",$param) and $param["AlarmList"] !== null) {
            $this->AlarmList = [];
            foreach ($param["AlarmList"] as $key => $value){
                $obj = new SecurityAlarmTable();
                $obj->deserialize($value);
                array_push($this->AlarmList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
