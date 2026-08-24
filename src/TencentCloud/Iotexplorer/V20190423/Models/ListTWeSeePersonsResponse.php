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
 * ListTWeSeePersons返回参数结构体
 *
 * @method integer getLimit() 获取本次请求的分页数量
 * @method void setLimit(integer $Limit) 设置本次请求的分页数量
 * @method integer getOffset() 获取本次请求的分页偏移
 * @method void setOffset(integer $Offset) 设置本次请求的分页偏移
 * @method array getPersons() 获取人员列表
 * @method void setPersons(array $Persons) 设置人员列表
 * @method integer getTotalCount() 获取符合条件的人员总数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的人员总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListTWeSeePersonsResponse extends AbstractModel
{
    /**
     * @var integer 本次请求的分页数量
     */
    public $Limit;

    /**
     * @var integer 本次请求的分页偏移
     */
    public $Offset;

    /**
     * @var array 人员列表
     */
    public $Persons;

    /**
     * @var integer 符合条件的人员总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Limit 本次请求的分页数量
     * @param integer $Offset 本次请求的分页偏移
     * @param array $Persons 人员列表
     * @param integer $TotalCount 符合条件的人员总数
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Persons",$param) and $param["Persons"] !== null) {
            $this->Persons = [];
            foreach ($param["Persons"] as $key => $value){
                $obj = new SeePersonInfo();
                $obj->deserialize($value);
                array_push($this->Persons, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
