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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBsNormal返回参数结构体
 *
 * @method integer getTotalCount() 获取表示当前实例下的数据库总个数
 * @method void setTotalCount(integer $TotalCount) 设置表示当前实例下的数据库总个数
 * @method array getDBList() 获取返回数据库的详细配置信息，例如：数据库是否开启CDC、CT等
 * @method void setDBList(array $DBList) 设置返回数据库的详细配置信息，例如：数据库是否开启CDC、CT等
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBsNormalResponse extends AbstractModel
{
    /**
     * @var integer 表示当前实例下的数据库总个数
     */
    public $TotalCount;

    /**
     * @var array 返回数据库的详细配置信息，例如：数据库是否开启CDC、CT等
     */
    public $DBList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 表示当前实例下的数据库总个数
     * @param array $DBList 返回数据库的详细配置信息，例如：数据库是否开启CDC、CT等
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DBList",$param) and $param["DBList"] !== null) {
            $this->DBList = [];
            foreach ($param["DBList"] as $key => $value){
                $obj = new DbNormalDetail();
                $obj->deserialize($value);
                array_push($this->DBList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
